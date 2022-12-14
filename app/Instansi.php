<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = 'transaksi_instansi';
    protected $fillable = [
        'id_bus','nama_user','email','kota_berangkat','kota_tujuan','tgl_keberangkatan','tgl_pengembalian','total_bayar','bukti_bayar','validasi'
    ];
}
