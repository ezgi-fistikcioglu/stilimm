<?php
namespace App\Http\Controllers\Yonetim;

use Illuminate\Http\Request;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use App\Http\Controllers\Controller;
use  Validator;
use Auth;
use Hash;


class KullaniciController extends Controller
{
    public function oturumac()
    {
        if (request()->isMethod('POST')) {
            $this->validate(request(), [
                'email' => 'required|email',
                'sifre' => 'required',
            ]);
            $credentials=[
                'email'        => request()->get('email'),
                'password'     => request()->get('sifre'),
                'yonetici_mi'  => 1,
                'aktif_mi'     => 1
            ];
            if (Auth::guard('yonetim')->attempt($credentials, request()->has('benihatirla')))
            {
//                config/auth.php içindeki düzenlemeler yapılır
                return redirect()->route('yonetim.anasayfa');
            }
            else
            {
                return back()->withInput()->withErrors(['email'=> 'Giriş Hatalı!']);
            }
        }
        return view('yonetim.oturumac');
    }
    public function oturumukapat()
    {
        Auth::guard('yonetim')->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('yonetim.oturumac');
    }
    public function index()
    {
      $list = Kullanici::orderBy('created_at','desc')->paginate(8);
      return view('yonetim.kullanici.index', compact('list'));
    }
    public function form($id = 0) //id değeri gönderilmezse default olarak yani 0 alacaktır.
    {
      $entry = new Kullanici; //id değeri gelmediğinde boş bir kullanıcı kaydı alacak
      if( $id > 0)
      {
        $entry = Kullanici::find($id);
      }
      return view('yonetim.kullanici.form', compact('entry'));
    }
    public function kaydet ($id = 0)
    {
      //eğer bir id elemanı ile geldiyse bir güncelleme işlemi gerçekleştirilecek.
      //id alanı 0 olarak geldiyse yeni bir kayıt ekleyecek.
      $this->validate(request(),[
        'adsoyad' => 'required',
        'email'   => 'required|email'
      ]);
      $data = request()->only('adsoyad', 'email'); //formdan gelen adsoyad ve email bilgilerini bu şek. değişken içinde tutabiliriz
      if( request()->filled('sifre')) //şifre alanı doldurulmuşsa güncellemeye dahil edecek
      {
        $data['sifre'] = Hash::make(request('sifre'));
      }

      $data['aktif_mi'] = request()->has('aktif_mi') && request('aktif_mi')==1 ? 1 :0 ;  //checbox alanlarını seçiminin kont. has ile yapılıyor
      $data['yonetici_mi'] = request()->has('yonetici_mi') && request('yonetici_mi')==1 ? 1 :0 ;  //checbox alanlarını seçiminin kont. has ile yapılıyor


      if( $id > 0 )  //kayıt
      {
        $entry = Kullanici::Where('id' , $id)->firstOrFail();
        // $entry->update([
        //   'adsoyad' =>request('adsoyad'), //adsoyad bilgisini fromdan gelen adsoyad bilgisi ile guncelleme
        //   'email' =>request('email'),
        // ]);
        $entry->update($data);
      }
      else { //guncelleme
        $entry = Kullanici::create($data);
      }

              KullaniciDetay::updateOrCreate(
                ['kullanici_id' => $entry->id],
                [
                  'adres' => request('adres'),
                  'telefon' => request('telefon'),
                  'ceptelefonu' => request('ceptelefonu'),

                ]
              );
      return redirect()
      ->route('yonetim.kullanici.duzenle', $entry->id)
      ->with('mesaj',($id > 0 ? 'Güncellendi' : 'Kaydedildi'))
      ->with('mesaj_tur', 'success');
    }
}
