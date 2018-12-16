<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kombin;
use App\Models\Kullanici;
use App\Models\Sepet;
use App\Models\SepetUrun;
use App\Models\Urun;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public  function  index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->get();
        $kombinler   = Kombin::orderBy('id', 'DESC')->get();
        $sepetim     = Sepet::whereRaw('kullanici_id is null')->get();
        $surun       =SepetUrun::whereRaw('sepet_id is null')->get();

        foreach ($kombinler as $kombin_id => $kombin) {
            $kombinler[$kombin_id]->kullanici = Kullanici::where('id', $kombin->kullanici_id)->first();
        }

        foreach ($sepetim as $kullanici_id=> $sepet){
            $sepetim[$kullanici_id]->kullanici=Kullanici::where('id', $sepet->kullanici_id)->first()->onDelete('cascade');
        }
        foreach ($surun as $sepet_id=> $sepet_urun){
            $sepetim[$sepet_id]->sepet=Sepet::where('id', $sepet_urun->sepet_id)->first()->onDelete('cascade');
        }
        foreach ($surun as $urun_id=> $sepet_urun){
            $sepetim[$urun_id]->urun=Urun::where('id', $sepet_urun->urun_id)->first()->onDelete('cascade');
        }


        return view('anasayfa')->with([
            'kategoriler' => $kategoriler,
            'kombinler' => $kombinler,
            'sepetim'   => $sepetim,
            'surun'     => $surun,
        ]);
    }
}
