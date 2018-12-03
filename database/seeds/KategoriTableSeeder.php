<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->truncate();
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Far Paleti','slug'=>'far-paleti',
        'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Göz Kalemi','slug'=>'goz-kalemi',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Ruj','slug'=>'ruj',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Eyeliner','slug'=>'eyeliner',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Allık','slug'=>'allik',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Fondoten','slug'=>'fondoten',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Rimel','slug'=>'Rimel',
            'ust_id'=>$id]);
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kişisel Bakım','slug'=>'kisisel-bakim']);
        DB::table('kategori')->insert(['kategori_adi'=>'Diş Macunu','slug'=>'dis-macunu',
        'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Diş Fırçası','slug'=>'dis-fircasi',
        'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Ağız Gargarası','slug'=>'agis-gargarasi',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Parfüm','slug'=>'parfum',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Deodorant','slug'=>'deodorant',
            'ust_id'=>$id]);
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Giyim ve Moda','slug'=>'giyim-moda']);
        DB::table('kategori')->insert(['kategori_adi'=>'Spor Ürünler','slug'=>'spor-urunler',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Erkek Giyim','slug'=>'erkek-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kadın Giyim','slug'=>'kadin-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Çocuk Giyim','slug'=>'cocuk-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Takı/Mücevher','slug'=>'taki-mucevher',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Saatler','slug'=>'saatler',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Güneş Gözlüğü','slug'=>'gunes-gozlugu',
            'ust_id'=>$id]);
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Anne ve Bebek','slug'=>'anne-cocuk']);
        DB::table('kategori')->insert(['kategori_adi'=>'Hamile Giyim','slug'=>'hamile-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kadın Giyim','slug'=>'kadin-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bebek Giyim','slug'=>'bebek-giyim',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bebek Arabası','slug'=>'bebek-arabasi',
            'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bebek Oyuncakları','slug'=>'bebek-oyuncaklari',
            'ust_id'=>$id]);
    }
}
