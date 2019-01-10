<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{

    use SoftDeletes;

    protected $table = "kullanici";

    protected $fillable = ['adsoyad', 'email', 'sifre', 'telefon_no', 'cinsiyet', 'dogum_tarihi', 'aktivasyon_anahtari', 'aktif_mi','yonetici_mi'];
    //protected $guarded =[];
    protected $hidden = ['sifre', 'aktivasyon_anahtari', 'remember_token'];

    //Bu alanların sorguda çekilmesini istemiyoruz

    public function getAuthPassword()
    {
        return $this->sifre;
    }

    public function detay()
    {
        //bu kullanıcıya ait bir tane kayıt olduğunu ve bunun da K.detay tablosundan çekileceğini söylemiş oluyoruz
        return $this->hasOne('App\Models\KullaniciDetay')->withDefault();
        // withDefault() varsayılan olarak modelle doldurası için
    }
}
