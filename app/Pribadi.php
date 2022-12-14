<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    protected $table = 'transaksi_pribadi';
    protected $fillable = [
        'id_bus','nama_user','email','shuttle_asal','shuttle_tujuan','jam_mulai','tgl_jadwal','total_bayar','bukti_bayar','validasi'
    ];
}
