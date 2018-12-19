<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sepet extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $table = "sepet";

    protected $guarded = [];

public function  siparis()
{
    return $this->belongsTo('App\Models\Siparis');
}

}
