<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sifat;

class AdminSifatController extends Controller
{
    public function TableSifat()
    {
        $sifat = Sifat::orderBy('id_sifat','ASC')->paginate();
        return view ('admin.TabelSifat',['cek' => 'tabelSifat'], ['sifat' => $sifat]);
    }
}
