<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKullaniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //dd(request()->all());
        Schema::create('kullanici', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adsoyad',60);
            $table->string('email',150)->unique();
            $table->string('sifre',60);
            $table->string('telefon_no',10)->unique()->nullable();
            $table->string('cinsiyet',5)->nullable();
            $table->date('dogum_tarihi')->default(now());
            $table->string('aktivasyon_anahtari',60)->nullable();
            $table->boolean('aktif_mi')->default(0);
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
}
