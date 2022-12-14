<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Bus;
use App\Shuttle;

class AdminJadwalController extends Controller
{
    public function TableJadwal()
    {
        $jadwal = Jadwal::orderBy('id', 'DESC')->paginate(10);
        return view('admin.TabelJadwal', ['cek' => 'tabelJadwal'], ['jadwal' => $jadwal]);
    }
    public function backJadwal()
    {
        $jadwal = Jadwal::orderBy('id', 'DESC')->paginate(10);
        return view('admin.TabelJadwal', ['cek' => 'tabelJadwal'], ['jadwal' => $jadwal]);
    }

    public function addDataJadwal()
    {
        $bus = Bus::orderBy('id', 'ASC')->where('id_sifat','2')->paginate(100000000);
        $shuttle = Shuttle::orderBy('id', 'ASC')->paginate(100000000);
        return view('admin.addJadwal', ['cek' => 'tabelJadwal'], ['bus' => $bus, 'shuttle'=>$shuttle]);
    }

    public function addDataJadwal_create(Request $request)
    {
        Jadwal::create([
            'id_bus' => $request -> id_bus,
            'shuttle_mulai' => $request -> shuttle_mulai,
            'shuttle_tujuan' => $request -> shuttle_tujuan,
            'jam_mulai' => $request -> jam_mulai,
            'tgl_jadwal' => $request -> tgl_jadwal,
            'jumlah_kursi' => $request -> jumlah_kursi,
            'harga' => $request -> harga,
        ]);
        return redirect('/TabelJadwal');
    }
    
    public function updateDataJadwal($id)
    {
        $jadwal = Jadwal::find($id);
        $shuttle = Shuttle::orderBy('id', 'ASC')->paginate(100000000);
        return view('admin.UpdateJadwal', ['cek' => 'tabelJdawal'], ['jadwal' => $jadwal,'shuttle'=>$shuttle]);
    }

    public function updateDataJadwal_update($id, Request $request)
    {
        $jadwal = Jadwal::find($id);
        $jadwal -> id_bus = $request -> id_bus;
        $jadwal -> shuttle_mulai = $request -> shuttle_mulai;
        $jadwal -> shuttle_tujuan = $request -> shuttle_tujuan;
        $jadwal -> jam_mulai = $request -> jam_mulai;
        $jadwal -> tgl_jadwal = $request -> tgl_jadwal;
        $jadwal -> jumlah_kursi = $request -> jumlah_kursi;
        $jadwal -> harga = $request -> harga;
        $jadwal -> save();
        return redirect('/TabelJadwal');
    }

    public function deleteDataJadwal_delete($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/TabelJadwal');
    }

    public function jadwal_search()
    {
        $cari = $request-> cari;
        $jadwal = Jadwal::where('shuttle_mulai','like','%'.$cari.'%')->orWhere('shuttle_tujuan','like','%'.$cari.'%')->paginate(10);
        return view('admin.TabelJadwal', ['cek' => 'tabelJadwal'], ['jadwal' => $jadwal]);
    }
}
