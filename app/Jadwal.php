<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = [
        'id_bus','shuttle_mulai', 'shuttle_tujuan','jam_mulai','tgl_jadwal','jumlah_kursi','jumlah_tiket','harga'
    ];
}
