<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Sepet;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siparis extends Model
{
    use SoftDeletes;
    protected $table = "siparis";

    protected $fillable = [
        'sepet_id', 'siparis_tutari','durum',
        'adsoyad','adres','telefon','ceptelefonu', 'banka','taksit_sayisi',];

    public function sepet()
    {
        return $this->belongsTo('App\Models\Sepet');
    }
}
