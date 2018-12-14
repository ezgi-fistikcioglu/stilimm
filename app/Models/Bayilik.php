<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bayilik extends Model
{
    use SoftDeletes;

    protected  $table   = 'bayilik';
    protected $fillable = ['magazaadi', 'email', 'sifre', 'telefon_no','uyelik_turu', 'akt_anahtari', 'aktif_mi'];

    protected $hidden   = ['sifre', 'akt_anahtari'];

    public function getAuthPassword()
    {
        return $this->sifre;
    }

}
