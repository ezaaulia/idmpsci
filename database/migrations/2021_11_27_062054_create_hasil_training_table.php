<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_training', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('training_id');
            $table->unsignedBigInteger('training_data_id');
            $table->string('uji_data');
            $table->string('hitung_akurasi');
            $table->timestamps();

            // $table->foreign('training_id')->references('id')->on('training_data');
            $table->foreign('training_data_id')->references('id')->on('training_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_training');
    }
}
