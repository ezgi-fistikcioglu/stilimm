<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    protected $table= "kategori";
    //protected $fillable= ['kategori_adi','slug'];
    //protected  $guarded= ['slug']; //vt eklemek istemediğimiz alanlar için kullanılır
    //eğer veritabanına her kolonu eklemek istersek ;
    protected  $guarded=[];

    public function  urunler()
        //Bir kategorideki ürünleri çekmeyi sağlar
    {
        return $this->belongsToMany('App\Models\Urun','kategori_urun');
    }


}
