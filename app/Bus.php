<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';
    protected $fillable = [
        'id_sifat','pabrikan','no_mesin','no_plat','harga','jumlah_kursi','gambar_bus'
    ];
}
