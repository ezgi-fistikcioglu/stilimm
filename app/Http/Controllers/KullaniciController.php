<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use App\Mail\KullaniciKayitMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function girisk()
    {
        try {
            $this->validate(request(), [
                'email' => 'required|email',
                'sifre' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        if (auth()->attempt(['email' => request('email'), 'password' => request('sifre')], request()->has('benihatirla'))) {
            request()->session()->regenerate();
            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }

    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public function kaydolk(Request $request)
    {

        $kullanici = Kullanici::create([
            'adsoyad' => request('adsoyad'),
            'email' => request('email'),
            'sifre' => Hash::make(request('sifre')),
            'telefon_no' => request('telefon_no'),
            'cinsiyet' => request('cinsiyet'),
            //'dogum_tarihi' => request('dogum_tarihi'),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi' => 0

        ]);
        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));

        //Request::all();
        auth()->login($kullanici);
        return redirect()->route('anasayfa');

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


    public function aktiflestir($anahtar)
    {
        $kullanici = Kullanici::where('aktivasyon_anahtari', $anahtar)->first();
        if (!is_null($kullanici)) {
            $kullanici->aktivasyon_anahtari = null;
            $kullanici->aktif_mi = 1;
            $kullanici->save();
            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı Kaydınız aktifleştirildi')
                ->with('mesaj_tur', 'success');
        } else {
            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı Kaydınız aktifleştirilemedi')
                ->with('mesaj_tur', 'warning');
        }
    }
}
