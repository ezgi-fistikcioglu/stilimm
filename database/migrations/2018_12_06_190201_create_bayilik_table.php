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
            //$table->smallInteger('telefon_no',10)->unique();
            $table->string('akt_anahtari',60)->nullable();
            $table->boolean('aktif_mi')->default(0);
            $table->timestamps();
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
