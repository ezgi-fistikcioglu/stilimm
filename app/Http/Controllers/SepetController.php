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
//        $sepetUser = auth()->user()->id;
//        $sepetUrunleri = sepet_urun::with('Urunler')->where('kullanici_id', $sepetUser)->get();

//        $sepet = sepet::with('SepetUrunleri')->get();
//        $sepetUrunu = $sepetUrunleri->Urunler->id;

        // Öncelikle burda sepete sadece yönlendirme yaptık, diğer kodlar yani sepet içeriğindeki ürünler zaten helperda var 2 lemedik işi

        return view('sepet');
    }


    public function ekle()
    {
        $urun = Urun::find(request('id'));

//        $sepetUser = new sepet();
//        $sepetUser->kullanici_id = auth()->user()->id;
//        $sepetUser->save();

        Cart::add($urun->id, $urun->urun_adi, 1, $urun->fiyati, ['slug' => $urun->slug]);
//        $sepet = new sepet_urun();
//        $sepet->urun_id = $urun->id;
//        $sepet->fiyati = $urun->fiyati;
//        $sepet->adet = '2';
//        $sepet->durum = '1';
//        $sepet->sepet_id = $sepetUser->id;
//        $sepet->kullanici_id = auth()->user()->id;
//        $sepet->save();


        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepete Eklendi.');
    }

    public function kaldir($rowid)
    {
        Cart::remove($rowid);

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepetten Kaldırıldı.');
    }
    public  function bosalt()
    {
       Cart::destroy();
        return redirect()->route('sepet')  //sepet sayfasına yönlendirme
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün Sepetiniz boşaltıldı.');
    }
    public function guncelle($rowId)
    {
        $validator = Validator::make(request()->all(),[
            'adet' =>'required|numeric|between:0,5'
        ]);

        if ($validator->fails())
        {
            session()->flash('mesaj_tur','danger');
            session()->flash('mesaj','Adet değeri 1 ile 5 arasında olmalıdır.');
            return redirect('/sepet');
        }

        Cart::update($rowId, request('adet'));
        //güncelle metodu ajax ile kullanılan bir metot olduğu için burada redirect işlemini kullanamıyoruz
        session()->flash('mesaj_tur','success');
        session()->flash('mesaj','Adet bilgisi güncellendi');

        return redirect('/sepet');
    }
}
