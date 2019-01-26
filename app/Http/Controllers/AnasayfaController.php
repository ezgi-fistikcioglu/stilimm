<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use App\Models\Kategori;
use App\Models\Kombin;
use App\Models\Kullanici;
use App\Models\Sepet;
use App\Models\SepetUrun;
use App\Models\Urun;
use App\Models\Begen;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public  function  index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->get();
        $kombinler   = Kombin::orderBy('id', 'DESC')->get();
        $sepetim     = Sepet::whereRaw('kullanici_id is null')->get();
        $ghebc       = Begen::ghebc();
        if(count($ghebc)!=0) {
            $kazanan_kombin  = Kombin::where('id', $ghebc[0]->combin_id)->first();
            $kazanan_kullanici     = Kullanici::where('id', $kazanan_kombin->kullanici_id)->get()->first();
        } else {
            $kazanan_kombin  = [];
            $kazanan_kullanici     = [];
        }

//        $surun       =SepetUrun::whereRaw('sepet_id is null')->get();

        foreach ($kombinler as $kombin_id => $kombin) {
            $kombinler[$kombin_id]->kullanici = Kullanici::where('id', $kombin->kullanici_id)->first();
        }

        foreach ($sepetim as $kullanici_id=> $sepet){
            $sepetim[$kullanici_id]->kullanici=Kullanici::where('id', $sepet->kullanici_id)->first()->onDelete('cascade');
        }



        return view('anasayfa')->with([
            'kategoriler' => $kategoriler,
            'kombinler' => $kombinler,
            'sepetim'   => $sepetim,
            'kazanan_kombin' => $kazanan_kombin,
            'kazanan_kullanici' => $kazanan_kullanici,
        ]);

    }
    public function hakkimizda()
    {
        return view('hakkimizda');
    }
    public function iletisim()
    {
     return view('iletisim');
    }
    public function iletisim_kaydet()
    {
        $this->validate(request(),[
            'adsoyad' => 'required',
            'telefon' => 'required',
            'email' => 'required',
            'mesaj' => 'required'

        ]);
        $data = request()->only('adsoyad', 'telefon', 'email','mesaj');
        Iletisim::insert($data);
        return redirect()->to('iletisim')
            ->with('mesaj', 'Mesajınız Alınmıştır')
            ->with('mesaj_tur', 'success');

    }
}
