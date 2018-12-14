<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayilik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('magazaadi',60);
            $table->string('email',150)->unique();
            $table->string('sifre',60);
            $table->string('telefon_no',10)->unique()->nullable();
            $table->string('uyelik_turu',5)->nullable();
            $table->string('akt_anahtari',60)->nullable();
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
        Schema::dropIfExists('bayilik');
    }
}
