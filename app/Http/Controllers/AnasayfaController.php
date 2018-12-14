<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kombin;
use App\Models\Kullanici;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public  function  index()
    {
        $kategoriler =Kategori::whereRaw('ust_id is null')->get();
        $kombinler = Kombin::orderBy('id', 'DESC')->get();

        foreach ($kombinler as $kombin_id => $kombin) {
            $kombinler[$kombin_id]->kullanici = Kullanici::where('id', $kombin->kullanici_id)->first();
        }


        return view('anasayfa')->with([
            'kategoriler' => $kategoriler,
            'kombinler' => $kombinler,
        ]);
    }
}
