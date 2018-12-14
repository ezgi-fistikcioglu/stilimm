<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kombin extends Model
{
    use SoftDeletes;
    protected $table = "kombin";
    protected $fillable = ['slug', 'kombin_adi', 'aciklama', 'fiyati', 'satilik_mi', 'fotograf', 'kullanici_id'];

    protected $hidden = ['satilik_mi'];

}
