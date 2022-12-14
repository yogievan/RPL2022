<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shuttle;

class AdminShuttleController extends Controller
{
    public function TableShuttle()
    {
        $shuttle = Shuttle::orderBy('id','DESC')->paginate(10);
        return view ('admin.TabelShuttle',['cek' => 'tabelShuttle'], ['shuttle' => $shuttle]);
    }

    public function addDataShuttle()
    {
        return view('admin.AddShuttle', ['cek' => 'tabelShuttle']);
    }
    
    public function addDataShuttle_create(Request $request)
    {
        Shuttle::create([
            'nama_shuttle' => $request -> nama_shuttle,
            'lokasi' => $request -> lokasi,
        ]);
        return redirect('/TabelShuttle');
    }

    public function updateDataShuttle($id)
    {
        $shuttle = Shuttle::find($id);
        return view('admin.UpdateShuttle', ['cek' => 'tabelShuttle'], ['shuttle' => $shuttle]);
    }

    public function updateDataShuttle_update($id, Request $request)
    {
        $shuttle = Shuttle::find($id);
        $shuttle -> nama_shuttle = $request->nama_shuttle;
        $shuttle -> lokasi = $request->lokasi;
        $shuttle -> save();

        return redirect('/TabelShuttle');
    }

    public function deleteDataShuttle_delete($id)
    {
        $shuttle = Shuttle::find($id);
        $shuttle->delete();
        return redirect('/TabelShuttle');
    }

    public function shuttle_search()
    {
        $cari = $request-> cari;
        $shuttle = Shuttle::where('nama_shuttle','like','%'.$cari.'%')-> orWhere('lokasi','like','%'.$cari.'%')->paginate();
        return view('admin.TabelShuttle', ['cek' => 'tabelShuttle'], ['shuttle' => $shuttle]);
    }
}
