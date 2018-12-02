<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayilikController extends Controller
{
    public function giris_form()
    {
        return view('bayilik.bayilikoturumac');
    }

    public function kaydol_form()
    {
        return view('bayilik.bayilikkayit');
    }

    public function index()
    {
        return view('bayilik.badres');
    }

    public function uyelik_form()
    {
        return view('bayilik.bayilikBilgileri');
    }

}
