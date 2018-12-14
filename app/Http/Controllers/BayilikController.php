<?php

namespace App\Http\Controllers;

use App\Mail\BayiKayitMail;
use App\Models\Bayilik;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;

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
        $validation = Validator::make(request()->except('_token'),[
            'magazaadi'   => 'required',
            'email'       => 'required|email',
            'sifre'       => 'required||min:6|max:20|confirmed',
            'phone'       => 'required|numeric|digits_between:10,12',
            'uyelik'      =>'required|in:Sahis,Sirket',
            'legalbox'    => 'required',

        ]);
        if($validation->fails())  {
            return redirect('/bayilik/bayilikkayit')->withErrors($validation)->withInput();
        }
      $bayilik = Bayilik::create([
          'magazaadi'    => request('magazaadi'),
          'email'        => request('email'),
          'sifre'        => Hash::make(request('sifre')),
          'telefon_no'   => request('phone'),
          'uyelik_turu'  => request('uyelik'),
          'akt_anahtari' => Str::random(60),
          'aktif_mi'     => 0,



      ]);

      Mail::to(request('email'))->send(new BayiKayitMail($bayilik));

      auth()->user($bayilik);
      return redirect()->route('anasayfa');
    }
}
