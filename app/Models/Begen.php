<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;


class Begen extends Model
{
    protected  $table   = 'begen';

    public static function ghebc(){
      return DB::SELECT( DB::raw("SELECT COUNT(*) AS begeni_Sayisi, combin_id FROM `begen` WHERE created_at >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND created_at < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY GROUP BY combin_id ORDER BY begeni_Sayisi LIMIT 1"));
    }
}
