<?php

namespace App\Http\Controllers;


use App\Models\Adres;
use App\Models\Sepet;
use App\Models\Siparis;
use App\Models\Urun;
use Validator;
use Illuminate\Http\Request;
use Cart;
use App\Models\sepet_urun;

class OdemeController extends Controller
{
    public function index()
    {
        //eğer bir kullanıcı girişi yapılmamışsa tespit etmek için
        if(!auth()->check())
        {
            return redirect()->route('kullanici.oturumac')
                ->with('mesaj_tur', 'info')
                ->with('mesaj','Ödeme İşlemi İçin Oturum Açmanız Veya Kullanıcı Kaydı Yapmanız Gerekmektedir.');
        }
        //sepette ürün yoksa ödeme sayfasında kullanıcıyı bilgilendirmemiz gerekli
        else if (count(Cart::content())==0)
        { //content ile tüm ürünleri çekmiş olacağız
            return redirect()->route('anasayfa')
                ->with('mesaj_tur','info')
                ->with('mesaj','Ödeme İşlemi İçin Sepetinizde Bir Ürün Bulunmalıdır.');
        }

        $kullanici_detay = auth()->user()->detay;
        $adresler = Adres::get();
//        detay fonksiyonunu daha öce Kullanici model de tanımlamıştık
        return view('odeme',compact('kullanici_detay', 'adresler'));
    }
    public function odemeyap()
    {
        $validator = Validator::make(request()->all(), [
            'kart_numarasi' => 'required',
            'son_kullanma_tarihi_yil' => 'required',
            'son_kullanma_tarihi_ay' => 'required',
            'cardcvv2' => 'required',
            'adsoyad' => 'required',
            'telefon' => 'required',
            'ceptelefonu' => 'required',
        ]);
        if ($validator->fails()) {
            session()->flash('mesaj_tur', 'danger');
            session()->flash('mesaj', 'Bütün alanmalar doldurulmalıdır! ');
            return redirect('odeme');
        }
        $siparis = request()->all();
//        formdan gelen tüm bilgileri request ile çekiyoruz
        $siparis['sepet_id']=session('aktif_sepet_id');
        $siparis['banka']= "Garanti";
        $siparis['taksit_sayisi'] = 1;
        $siparis['durum']="Siparişiniz alındı";
        $siparis['siparis_tutari']= Cart::subtotal();
        //subtotal ile kdv'siz tutar vt'de tutulacak

        Siparis::create($siparis);
        //Siparis modeli içindeki sadece bu bilgileri vt'ye ekleyecektir diğer bilgileri eklemeyecektir
        Cart::destroy(); //şimdi sepetteki tüm ürünleri temizliyoruz
        session()->forget('aktif_sepet_id');
        //session içerisinde yer alan aktif_sepet_id'sini de siliyoruz

        $this->stok_dusur($siparis['sepet_id']);

        return redirect()->route('siparisler')
            ->with('mesaj_tur','success')
            ->with('mesaj','Ödemeniz Başarılı Bir Şekilde Gerçekleştirildi.');

    }

    private function stok_dusur($sepet_id)
    {
        //Sepetteki ürünleri çek
        //For: sepet ürünleri
            //Ürünün stok sayısı (Model)
            //Ürün stok - Alınan adet
            //Stok bilgisini güncelle

        $urunler= sepet_urun::where('sepet_id',$sepet_id)->get();
        foreach ( $urunler as $urun)
        {
            $stok = Urun::where('id',$urun->urun_id)->pluck('stok')->first();
            $yeniStok = (int) $stok - (int) ($urun->adet);
            Urun::where('id', $urun->urun_id)->update([
               'stok' => $yeniStok
            ]);
        }

    }
}
