<?php


use App\Models\sepet_urun;

if (!function_exists('Sepet')) { //burda sepet diye fonk varmı diye kont. ediyoruz varsa çalışmasın sistem bozulmasın adını değişelim diye
    function Sepet()
    {
        $sepetUser = auth()->user()->id;
        $sepetUrunleri = sepet_urun::with('Urunler')->where('kullanici_id', $sepetUser)->get();


        return $sepetUrunleri;
    }
}

