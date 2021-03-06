<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_tes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_siswa_id');
            $table->unsignedBigInteger('users_id');
            $table->string('nilai_tes_mtk');
            $table->string('nilai_tes_ipa');
            $table->string('nilai_tes_agama');
            $table->string('nilai_tes_bindo');
            $table->timestamps();

            $table->foreign('data_siswa_id')->references('id')->on('data_siswa');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_tes');
    }
}
