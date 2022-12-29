<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_user')->nulable();
            $table->string('email')->unique()->nulable();
            $table->date('tgl_lahir')->nulable();
            $table->string('no_telp')->nulable();
            $table->string('alamat')->nulable();
            $table->string('password')->nulable();
            $table->string('provider_id')->nulable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
