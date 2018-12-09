<?php

namespace App\Http\Controllers;

use App\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function kaydol_form()
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

    public function kaydol()
    {
        $this->validate(request(),[
            'adsoyad' => 'required|min:5|max:60',
            'email'   => 'required|email|unique:kullanici',
            'sifre'   => 'required|confirmed|min:5'
        ]);
        $kullanici = Kullanici::create([
            'adsoyad'             => request('adsoyad'),
            'email'               => request('email'),
            'sifre'               => Hash::make(request('sifre')),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi'            => 0

        ]);
        auth()->login($kullanici);
        return redirect()->route('anasayfa');
    }
}
