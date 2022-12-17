<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pribadi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bus');
            $table->string('nama_user');
            $table->string('email');
            $table->string('shuttle_asal');
            $table->string('shuttle_tujuan');
            $table->string('jam_mulai');
            $table->date('tgl_jadwal');
            $table->integer('jumlah_tiket');
            $table->integer('total_bayar');
            $table->string('bukti_bayar');
            $table->string('validasi')->nullable();
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
        Schema::dropIfExists('transaksi_pribadi');
    }
}
