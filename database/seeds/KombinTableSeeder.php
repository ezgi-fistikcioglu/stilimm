<?php

use Illuminate\Database\Seeder;
use App\Models\Kombin;
class KombinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     kombin::create([
         'kombin_adi' => str_random(10),
         'aciklama' => str_random(30),
         'fiyati' => rand(10,80),
         'slug'=>str_random(20),
     ]);
    }
}
