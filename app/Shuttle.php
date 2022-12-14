<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shuttle extends Model
{
    protected $table = 'shuttle';
    protected $fillable = [
        'nama_shuttle','lokasi'
    ];
}
