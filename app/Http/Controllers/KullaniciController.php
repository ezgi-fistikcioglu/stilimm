<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public  function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public  function  kaydol_form()
    {
        return view('kullanici.kaydol');
    }
    public function index()
    {
        return view('kullanici.adres');
    }
    public function kombin_form()
    {
        return view('kullanici.kombin');

    }
    public function iptal_form()
    {
        return view('kullanici.uyelikiptal');
    }
    public function uyelik_form()
    {
        return view('kullanici.uyelikBilgileri');
    }

}
