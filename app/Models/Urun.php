<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urun extends Model
{
    use SoftDeletes;
    protected $table="urun";
    protected  $guarded=[]; //tüm kolonlar veritabanına eklenebilir
}
