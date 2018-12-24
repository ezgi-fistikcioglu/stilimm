<?php

namespace App\Http\Controllers;


use App\Models\Kullanici;
use App\Models\Kombin;
use App\Mail\KullaniciKayitMail;
use App\Models\KullaniciDetay;
use App\Models\Sepet;
use App\Models\sepet_urun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Validator;
use Cart;



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
                'sifre' => 'required',
                'benihatirla' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        if (auth()->attempt(['email' => request('email'), 'password' => request('sifre')], request()->has('benihatirla'))) {
            request()->session()->regenerate();
            $aktif_sepet_id = Sepet::aktif_sepet_id();
            if (is_null($aktif_sepet_id))
            {
                $aktif_sepet_id = Sepet::insertGetId([
                    'kullanici_id' => auth()->user()->id
                ]);
            }
//            $aktif_sepet_id = Sepet::firstOrCreate(['kullanici_id' => auth()->id()])->id;
//            kullanici-id'sini giris yapan kullanıcının id'sinden alıyoruz
//            kullanıcıyı eğer vt de bulursa ona ait ilk kaydı alacaktır eğer bulamazsa k.id si bu değer olan kaydı vt'de oluşturacaktır
            session()->put('aktif_sepet_id', $aktif_sepet_id);

            if (Cart::count() > 0) {
                foreach (Cart::content() as $cartItem) {
                    sepet_urun::updadeOrCreate(
                        //varsa güncelle yoksa ekle
                        ['sepet_id' => $aktif_sepet_id, 'urun_id' => $cartItem->id],
                        ['adet' => $cartItem->qty, 'fiyati' => $cartItem->price, 'durum' => 'Beklemede']
                    );
                }
            }
            //vt'deki tüm verileri session'da yeniden oluşturmak için boşalttık ve daha sonravt'deki tüm ürünleri otomatik olarak sepete yani sessiona eklemiş olduk
            Cart::destroy();
            //sessionda'ki tüm ürünleri temizliyoruz çünkü vt ile birleştirdik

            $sepetUrunler = sepet_urun::where('sepet_id', $aktif_sepet_id)->get();
            //vt'deki sepet_id'si $aktif_sepet_id olan tüm ürünleri buluyoruz

            foreach ($sepetUrunler as $sepetUrun) {
                //sepet_urun modeli içerisinden ürüne erişeceğimiz ilişki fonk. oluşturulur(sepet_urun'e gidin)
                Cart::add($sepetUrun->urun->id, $sepetUrun->urun->urun_adi, $sepetUrun->adet, $sepetUrun->fiyati, ['slug'=> $sepetUrun->urun->slug]);
            }


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
        $validation = Validator::make(request()->except('_token'), [
            'adsoyad' => 'required',
            'email' => 'required|email',
            'sifre' => 'required|min:6|max:20|confirmed',
            'phone' => 'required|numeric|digits_between:10,12',
            'gender' => 'required|in:Male,Female',
            'dogum_yil' => 'required',
            'dogum_ay' => 'required|between:1,12',
            'dogum_gun' => 'required|between:1,31',
            'legalbox' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect('/kullanici/kaydol')->withErrors($validation)->withInput();
        }

        $kullanici = Kullanici::create([
            'adsoyad' => request('adsoyad'),
            'email' => request('email'),
            'sifre' => Hash::make(request('sifre')),
            'telefon_no' => request('phone'),
            'cinsiyet' => request('gender'),
            'dogum_tarihi' => request('dogum_yil') . '-' . request('dogum_ay') . '-' . request('dogum_gun'),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi' => 0
        ]);

        //KullaniciDetay dediğimiz anda bu sınıfı kullanarak boş bir kullanıcıDetay kaydını otomatik olarak oluşturacaktır
        $kullanici->detay()->save(new KullaniciDetay());
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
        if (!auth()->check()) {
            return redirect('/');
        }
        return view('kullanici.kombin');

    }

    public function kombin_post(Request $request)
    {
        if (!auth()->check()) {
            return redirect('/');
        }
        $validation = Validator::make(request()->except('_token'), [
            'kombin_adi' => 'required|min:3|max:50',
            'fotograf' => 'required|file|image',
            'aciklama' => 'required',
            'satilik_mi' => 'required|in:evet,hayir',
            'fiyati' => 'required|numeric',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->messages());
            return redirect('/kullanici/kombin')->withErrors($validation)->withInput();
        }

        $fotograf = $request->fotograf->store('kombin', ['disk' => 'public']);
        $fotograf = explode('/', $fotograf)[1];

        $kombin = Kombin::create([
            'kombin_adi' => request()->get('kombin_adi'),
            'aciklama' => request()->get('aciklama'),
            'satilik_mi' => (request()->get('satilik_mi') == 'evet') ? 1 : 0,
            'fiyati' => (request()->get('satilik_mi') == 'evet') ? request()->get('fiyati') : null,
            'fotograf' => $fotograf,
            'kullanici_id' => auth()->user()->id,
        ]);

        return redirect('/');
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

    public function oturumukapat()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('anasayfa');
    }
}
