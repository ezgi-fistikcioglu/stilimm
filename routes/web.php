<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');

Route::post('/ara', 'UrunController@ara')->name('urun_ara');
Route::get('/ara', 'UrunController@ara')->name('urun_ara');

Route::group(['prefix'=> 'sepet'], function (){
    Route::get('/', 'SepetController@index')->name('sepet');
    Route::post('/ekle', 'SepetController@ekle')->name('sepet.ekle');
});



Route::group(['middleware'=>'auth'],function (){
    Route::get('/odeme', 'OdemeController@index')->name('odeme');
    Route::get('/siparisler', 'SiparisController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'kullanici'], function () {
    Route::get('/oturumac', 'KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac', 'KullaniciController@girisk');
    Route::get('/kaydol', 'KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol', 'KullaniciController@kaydolk');
    Route::post('/oturumukapat', 'KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
    Route::get('/adres', 'KullaniciController@index')->name('kullanici.adres');
    Route::get('/iptal', 'KullaniciController@iptal_form')->name('kullanici.uyelikiptal');
    Route::get('/kuyelik', 'KullaniciController@uyelik_form')->name('kullanici.uyelikBilgileri');
    Route::get('/kombin', 'KullaniciController@kombin_form')->name('kullanici.kombin');
    Route::post('/kombin', 'KullaniciController@kombin_post')->name('kullanici.kombin.post');
    Route::get('/aktiflestir/{anahtar}','KullaniciController@aktiflestir')->name('aktiflestir');

});
Route::get('/test/mail', function () {
    $kullanici = \App\Models\Kullanici::find(1);
    return new App\Mail\KullaniciKayitMail($kullanici);
});

Route::group(['prefix' => 'bayilik'], function () {

    Route::get('/bayiuyelik', 'BayilikController@giris_form')->name('bayilik.bayilikoturumac');
    Route::get('/bayikaydol', 'BayilikController@kaydol_form')->name('bayilik.bayilikkayit');
    Route::post('/bayikaydol', 'BayilikController@kaydoll');
    Route::get('/badres', 'BayilikController@index')->name('bayilik.badres');
    Route::get('/buyelik', 'BayilikController@uyelik_form')->name('bayilik.bayilikBilgileri');
    Route::get('/bayiilanekle', 'BayilikController@ilan_form')->name('bayilik.bayilikİlani');

});

Route::get('/test2/mail', function () {
    $bayilik = \App\Models\Bayilik::find(1);
    return new App\Mail\BayiKayitMail($bayilik);
});


Route::get('/aski', 'askiController@index')->name('aski');
Route::get('/askibagis', 'BagisOdemeController@index')->name('bagis');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
