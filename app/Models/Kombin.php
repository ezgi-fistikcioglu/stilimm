<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kombin extends Model
{
  use SoftDeletes;
  protected $table = "kombin";
  protected $guarded = [];
}
