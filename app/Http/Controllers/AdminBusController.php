<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;

class AdminBusController extends Controller
{
    public function TableBus()
    {
        $bus = Bus::orderBy('id', 'DESC')->paginate(5);
        return view('admin.TabelBus', ['cek' => 'tabelBus'], ['bus' => $bus]);
    }

    public function addDataBus()
    {
        return view('admin.AddBus', ['cek' => 'tabelBus']);
    }

    public function addDataBus_create(Request $request)
    {
        Bus::create([
            'id_sifat' => $request -> id_sifat,
            'pabrikan' => $request -> pabrikan,
            'no_mesin' => $request -> no_mesin,
            'no_plat' => $request -> no_plat,
            'harga' => $request -> harga,
            'jumlah_kursi' => $request -> jumlah_kursi,
            'gambar_bus' => $request -> gambar_bus,
        ]);
        return redirect('/TabelBus');
    }

    public function updateDataBus($id)
    {
        $bus = Bus::find($id);
        return view('admin.UpdateBus', ['cek' => 'tabelBus'], ['bus' => $bus]);
    }

    public function updateDataBus_update($id, Request $request)
    {
        $bus = Bus::find($id);
        $bus -> id_sifat = $request->id_sifat;
        $bus -> pabrikan = $request->pabrikan;
        $bus -> no_mesin = $request->no_mesin;
        $bus -> no_plat = $request->no_plat;
        $bus -> harga = $request->harga;
        $bus -> jumlah_kursi = $request->jumlah_kursi;
        $bus -> gambar_bus = $request->gambar_bus;
        $bus -> save();

        return redirect('/TabelBus');
    }

    public function deleteDataBus_delete($id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        return redirect('/TabelBus');

    }

    public function bus_search(Request $request)
    {
        $cari = $request-> cari;
        $bus = Bus::where('no_plat','like','%'.$cari.'%')->paginate();
        return view('admin.TabelBus', ['cek' => 'tabelBus'], ['bus' => $bus]);
    }

    public function bus_view($id)
    {
        $bus = Bus::find($id);
        return view('admin.viewBus', ['cek' => 'tabelBus'], ['bus' => $bus]);
    }
}
