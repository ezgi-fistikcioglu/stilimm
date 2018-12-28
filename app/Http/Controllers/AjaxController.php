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
         $kontrol = Begen::where([
             'combin_id' => request()->get('combin_id'),
             'kullanici_id' => auth()->user()->id,
         ])->count();

         if($kontrol>0)
         {
             Begen::where([
                 'combin_id' => request()->get('combin_id'),
                 'kullanici_id' => auth()->user()->id,
             ])->delete();
             $action = 'unlike';
         }
         else
         {
             Begen::insert([
                 'combin_id' => request()->get('combin_id'),
                 'kullanici_id' => auth()->user()->id,
             ]);
             $action = 'like';
         }

         $like_count = Begen::where([
             'combin_id' => request()->get('combin_id')
         ])->count();

         return response()->json([
             'code'=>200,
             'message'=>'ok',
             'like_count' => $like_count,
             'action' => $action,
         ]);
     }
    }
}
