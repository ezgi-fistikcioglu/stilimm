<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciAnasayfaController extends Controller
{
   public function index()
   {
       return view('kanasayfa');
   }
}
