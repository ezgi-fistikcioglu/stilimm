<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Cart;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    public  function index()
    {
        return view('sepet');
    }
    public function ekle()
    {
        $urun= Urun::find(request('id'));
        Cart::add($urun->id, $urun->urun_adi, 1, $urun->fiyati, ['slug'=>$urun->slug]);

        return redirect()->route('sepet')
            ->with('mesaj_tur','success')
            ->with('mesaj','Ürün Sepete Eklendi.');
    }
}
