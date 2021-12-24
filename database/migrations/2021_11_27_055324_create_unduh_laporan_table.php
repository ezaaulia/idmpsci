<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnduhLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unduh_laporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_training_id');
            $table->dateTime('tgl_laporan');
            $table->string('judul_laporan');
            $table->string('download');
            $table->timestamps();

            $table->foreign('hasil_training_id')->references('id')->on('hasil_training');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unduh_laporan');
    }
}
