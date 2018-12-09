<?php

namespace App\Http\Controllers;

use App\Mail\BayiKayitMail;
use App\Models\Bayilik;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

    public function ilan_form()
    {
        return view('bayilik.bayilikİlani');
    }
    public function kaydoll()
    {
        $this->validate(request(),[
            'magazaadi'  => 'required|min:5|max:60',
            'email'      => 'required|email|unique:bayilik',
            'sifre'      => 'required|confirmed|min:5'
        ]);
      $bayilik = Bayilik::create([
          'magazaadi'    => request('magazaadi'),
          'email'        => request('email'),
          'sifre'        => Hash::make(request('sifre')),
          'telefon_no'   => request('telefon_no'),
          'akt_anahtari' => Str::random(60),
          'aktif_mi'     => 0
      ]);

      Mail::to(request('email'))->send(new BayiKayitMail($bayilik));

      auth()->login($bayilik);
      return redirect()->route('anasayfa');
    }
}
