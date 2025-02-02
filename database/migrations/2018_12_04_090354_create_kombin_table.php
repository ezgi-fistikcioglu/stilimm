<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKombinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kombin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kullanici_id',100);
            $table->string('kombin_adi',80);
            $table->text('aciklama');
            $table->decimal('fiyati',6,3);
            $table->boolean('satilik_mi')->default(0);
            $table->string('fotograf');
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
        Schema::dropIfExists('kombin');
    }
}
