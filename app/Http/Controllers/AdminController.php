<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
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
        return view('admin.viewTransaksiPribadi', ['cek' => 'validasiTransaksi'], ['pribadi' => $pribadi]);
    }

    public function view_tansaksi_instansi($id)
    {
        $instansi = Instansi::find($id);
        return view('admin.viewTransaksiInstansi', ['cek' => 'validasiTransaksi'], ['instansi' => $instansi]);
    }

    public function validasiPribadi($id, Request $request)
    {
        $pribadi = Pribadi::find($id);
        $pribadi -> validasi = $request->validasi;
        $pribadi -> save();

        // $data = ['email' => $request -> email];
        // Mail::to('yogievan32@gmail.com')
        //     ->send(new HelloMail());

        return redirect('/TabelTransaksi');
    }
    public function validasiInstansi($id, Request $request)
    {
        $instansi = Instansi::find($id);
        $instansi -> validasi = $request->validasi;
        $instansi -> save();

        return redirect('/TabelTransaksi');
    }
}
