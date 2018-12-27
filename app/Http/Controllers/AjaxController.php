<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Begen;

class AjaxController extends Controller
{
    public function begen()
    {
     if (auth()->check())
     {
         Begen::insert([
             'combin_id' => request()->get('combin_id'),
             'kullanici_id' => auth()->user()->id,
         ]);

         return response()->json([
            'code'=>200,
            'message'=>'ok',
         ]);
     }
    }
}
