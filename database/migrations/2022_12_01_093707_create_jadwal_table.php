<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bus');
            $table->string('shuttle_mulai');
            $table->string('shuttle_tujuan');
            $table->string('jam_mulai');
            $table->date('tgl_jadwal');
            $table->integer('jumlah_kursi');
            $table->integer('jumlah_tiket');
            $table->integer('harga')->nulable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
