<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sepet_urun extends Model
{
    use SoftDeletes;
    protected  $table = "sepet_urun";
    protected $guarded = [];
//burda mantık sepet urun tablosuna ait ürünleri çekmektir/ neye göre çekiyoruz urun_id ye ve Urun tablosundaki id sutununa göre
    public function Urunler()
    {
        return $this->hasOne(Urun::class,"id" , "urun_id");
    }
}
