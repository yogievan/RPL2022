<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pribadi;
use App\Instansi;

class AdminController extends Controller
{
    public function DashboardAdmin()
    {
        return view('admin.DashboardAdmin', ['cek' => 'dashboard']);
    }

    //transaksi
    public function TableTransaksi()
    {
        $pribadi = Pribadi::orderBy('id', 'DESC')->paginate(10);
        $instansi = Instansi::orderBy('id', 'DESC')->paginate(10);
        return view('admin.TabelTransaksi', ['cek' => 'validasiTransaksi'], ['pribadi' => $pribadi,'instansi' => $instansi]);
    }

    public function view_tansaksi_pribadi($id)
    {
        $pribadi = Pribadi::find($id);
        return view('admin.viewTransaksiPribadi', ['pribadi' => $pribadi]);
    }

    public function view_tansaksi_instansi($id)
    {
        $instansi = Instansi::find($id);
        return view('admin.viewTransaksiInstansi', ['instansi' => $instansi]);
    }

    public function validasiPribadi($id)
    {
        $pribadi = Pribadi::find($id);
    }
}
