<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sepet_urun extends Model
{
    use SoftDeletes;
    protected  $table = "sepet_urun";
    protected $guarded = [];
    public function Urun()
    {
        return $this->belongsTo('App\Models\Urun');
    }
}
