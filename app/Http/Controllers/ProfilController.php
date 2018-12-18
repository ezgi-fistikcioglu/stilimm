<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;
use App\Models\Kombin;

class ProfilController extends Controller
{
   public function index( $profil_id )
   {
       $kombinler = Kombin::where('kullanici_id', $profil_id)->orderBy('id', 'DESC')->get();

       foreach ($kombinler as $kombin_id => $kombin) {
           $kombinler[$kombin_id]->kullanici = Kullanici::where('id', $kombin->kullanici_id)->first();
       }


       return view('profil/index')->with([
           'kullanici' => Kullanici::where('id', $profil_id)->first(),
           'kombinler' => $kombinler,
       ]);
   }
}
