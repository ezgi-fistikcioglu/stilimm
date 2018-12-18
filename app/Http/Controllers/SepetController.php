<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\sepet_urun;
use App\Models\Urun;
use Cart;
use Validator;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    public function index()
    {
        return view('sepet');
    }

    public function ekle()
    {
        $urun = Urun::find(request('id'));

        $cartItem = Cart::add($urun->id, $urun->urun_adi, 1, $urun->fiyati, ['slug' => $urun->slug]);
        if (auth()->check())
        { //sadece kullanıcı girişi yapmış kişiler için geçerli alan
            $aktif_sepet_id = session('aktif_sepet_id');
            if (!isset($aktif_sepet_id)) {
                $aktif_sepet = Sepet::create([
                    'kullanici_id' => auth()->id()
                ]);
                $aktif_sepet_id = $aktif_sepet->id;
                session()->put('aktif_sepet_id', $aktif_sepet_id);
            }

            sepet_urun::updateOrCreate(
                ['sepet_id' => $aktif_sepet_id, 'urun_id' => $urun->id],
                //eğer sepet_id ve urun_id varsa bunu adet, fiyati ve durum olarak güncelliyor eğer yokse tüm alanlarla beraber yeni bir kayıt oluşturuyor
                ['adet' => $cartItem->qty, 'fiyati' => $urun->fiyati, 'durum' => 'Beklemede']
            );
        }

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepete Eklendi.');
    }
//rowId sepetteki kaydın satır_id sini ifade eder
    public function kaldir($rowid)
    {
        if (auth()->check())
        {
            $aktif_sepet_id =session('aktif_sepet_id');
            $cartItem = Cart::get($rowid); //bu sayede sepetteki kaydın tüm bilgilerine erişmiş oluyoruz
            sepet_urun::where('sepet_id',$aktif_sepet_id)->where('urun_id', $cartItem->id)->delete();
            //$cartItem->id ile ürünün gerçek id'sini elde etmiş oluyoruz
        }
        Cart::remove($rowid);

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepetten Kaldırıldı.');
    }

    public function bosalt()
    {
        if (auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            sepet_urun::where('sepet_id', $aktif_sepet_id)->delete();
        }
        Cart::destroy();
        return redirect()->route('sepet')//sepet sayfasına yönlendirme
        ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepetiniz boşaltıldı.');
    }

    public function guncelle($rowId)
    {
        $validator = Validator::make(request()->all(), [
            'adet' => 'required|numeric|between:0,5'
        ]);

        if ($validator->fails()) {
            session()->flash('mesaj_tur', 'danger');
            session()->flash('mesaj', 'Adet değeri 1 ile 5 arasında olmalıdır.');
            return redirect('/sepet');
        }
        if (auth()->check())
        {
            $aktif_sepet_id=session('aktif_sepet_id');
            $cartItem= Cart::get($rowId);

            if (request('adet')==0)
                sepet_urun::where('sepet_id',$aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();
            else
            sepet_urun::where('sepet_id',$aktif_sepet_id)->where('urun_id',$cartItem->id)
            ->update(['adet'=> request('adet')]);
        }

        Cart::update($rowId, request('adet'));
        //güncelle metodu ajax ile kullanılan bir metot olduğu için burada redirect işlemini kullanamıyoruz
        session()->flash('mesaj_tur', 'success');
        session()->flash('mesaj', 'Adet bilgisi güncellendi');

        return redirect('/sepet');
    }
}
