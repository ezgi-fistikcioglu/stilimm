<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KullaniciDetay extends Model
{
   protected $table ='kullanici_detay';
   public $timestams = false;
   protected $guarded = [];

   public function kullanici()
   {
       return $this->belongsTo('App\Models\Kullanici');
   }
}
