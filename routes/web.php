<?php
Route::group(['prefix' => 'yonetim', 'namespace' => 'Yonetim'], function () {
    Route::redirect('/', '/yonetim/oturumac');

    Route::match(['get', 'post'], '/oturumac', 'KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::get('/oturumukapat', 'KullaniciController@oturumukapat')->name('yonetim.oturumukapat');

    Route::group(['middleware' => 'yonetim'], function () {
//        Middleware/Yonetim.php ve kernel.php işlemleri yapılmalıdır
        Route::get('/anasayfa', 'AnasayfaController@index')->name('yonetim.anasayfa');
        //  /yonetim/kullanici
        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get','post'],'/', 'KullaniciController@index')->name('yonetim.kullanici');
            Route::get('/yeni', 'KullaniciController@form')->name('yonetim.kullanici.yeni');
            Route::get('/duzenle/{id}', 'KullaniciController@form')->name('yonetim.kullanici.duzenle');
            Route::post('/kaydet/{id?}', 'KullaniciController@kaydet')->name('yonetim.kullanici.kaydet');
            Route::get('/sil/{id}', 'KullaniciController@sil')->name('yonetim.kullanici.sil');
        });
        Route::group(['prefix' => 'kategori'], function () {
            Route::match(['get','post'],'/', 'KategoriController@index')->name('yonetim.kategori');
            Route::get('/yeni', 'KategoriController@form')->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}', 'KategoriController@form')->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}', 'KategoriController@kaydet')->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}', 'KategoriController@sil')->name('yonetim.kategori.sil');






        });
    });
});
Route::get('/', 'AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');

Route::post('/ara', 'UrunController@ara')->name('urun_ara');
Route::get('/ara', 'UrunController@ara')->name('urun_ara');

Route::group(['prefix' => 'sepet'], function () {
    Route::get('/', 'SepetController@index')->name('sepet');
    Route::post('/ekle', 'SepetController@ekle')->name('sepet.ekle');
    Route::delete('/kaldir/{rowid}', 'SepetController@kaldir')->name('sepet.kaldir');
    Route::delete('/bosalt', 'SepetController@bosalt')->name('sepet.bosalt');
    Route::get('/guncelle/{rowId}', 'SepetController@guncelle')->name('sepet.guncelle');
});
Route::get('/odeme', 'OdemeController@index')->name('odeme');
Route::post('/odeme', 'OdemeController@odemeyap')->name('odemeyap');


Route::group(['middleware' => 'auth'], function () {
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
    Route::get('/guncelle', 'KullaniciController@ProfilGuncelleme')->name('kullanici.guncelle');
    Route::post('/guncelle', 'KullaniciController@ProfilGuncelleme_post')->name('kullanici.guncelle.post');
    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');
});

Route::group(['prefix' => 'profil'], function () {
    Route::get('/{profil_id}', 'ProfilController@index')->name('profil');
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

Route::group(['prefix' => 'ajax'], function () {
    Route::post('/begen', 'AjaxController@begen');
    Route::post('/yorum', 'AjaxController@yorum');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
