<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiInstansiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_instansi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bus');
            $table->string('nama_user');
            $table->string('email');
            $table->string('kota_berangkat');
            $table->string('kota_tujuan');
            $table->date('tgl_keberangkatan');
            $table->date('tgl_pengembalian');
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
        Schema::dropIfExists('transaksi_instansi');
    }
}
