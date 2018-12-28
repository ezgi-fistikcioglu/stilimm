<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Begen;
use App\Models\Yorum;
use Validator;

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

    public function yorum( Request $request )
    {
        if(auth()->check())
        {
            $validation = Validator::make(request()->except('_token'), [
                'text' => 'required|min:1',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'code' => 400,
                    'errors' => $validation->messages(),
                ]);
            }

            Yorum::insertGetId([
                'combin_id' => request()->get('combin_id'),
                'kullanici_id' => auth()->user()->id,
                'text' => htmlspecialchars(request()->get('text')),
            ]);

            return response()->json([
                'code' => 200,
                'message' => 'ok',
                'yorumlar' => Yorum::where('combin_id', request()->get('combin_id'))->get(),
                'kullanici' => auth()->user(),
                'text' => htmlspecialchars(request()->get('text')),
            ]);
        }
    }
}
