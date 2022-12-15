<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jadwal;
use App\Shuttle;
use App\Bus;
use App\Instansi;
use App\Pribadi;
use Auth;
 
class CustomerController extends Controller
{
    public function DashboardCustomer()
    {
        return view('customer.DashboardCustomer');
    }

    public function formShuttle(Request $request)
    {
        $jadwal = Jadwal::orderBy('id', 'ASC')->paginate(10000);
        $shuttle = Shuttle::orderBy('id', 'ASC')->paginate(10000);
        $bus = Bus::orderBy('id', 'ASC')->where('id_sifat','2')->paginate(10000);
        return view('customer.FormTiketShuttle',['jadwal' => $jadwal, 'shuttle' => $shuttle, 'bus' => $bus]);
    }
    public function searchTiket(Request $request)
    {
        $shuttle_mulai = $request->shuttle_mulai;
        $shuttle_tujuan = $request->shuttle_tujuan;
        $tgl_jadwal = $request->tgl_jadwal;
        $jadwal = Jadwal::where('shuttle_mulai','like','%'.$shuttle_mulai.'%')->where('shuttle_tujuan','like','%'.$shuttle_tujuan.'%')->where('tgl_jadwal','like','%'.$tgl_jadwal.'%')->paginate(10000000);
        $bus = Bus::orderBy('id', 'ASC')->where('id_sifat','2')->paginate(10000000);
        return view('customer.CariTiketShuttle',['jadwal' => $jadwal, 'bus' => $bus]);
    }

    public function bookingTiket($id)
    {
        $jadwal = Jadwal::find($id);
        return view('customer.BookTiketBus',['jadwal'=>$jadwal]);
    }

    public function tansaksi_tiketShuttle(Request $request)
    {
        Pribadi::create([
            'id_bus' => $request -> id_bus,
            'nama_user' => $request -> nama_user,
            'email' => $request -> email,
            'shuttle_asal' => $request -> shuttle_asal,
            'shuttle_tujuan' => $request -> shuttle_tujuan,
            'jam_mulai' => $request -> jam_mulai,
            'tgl_jadwal' => $request -> tgl_jadwal,
            'total_bayar' => $request -> total_bayar,
            'bukti_bayar' => $request -> bukti_bayar,
            'validasi' => $request -> validasi,
        ]);
        return redirect('/DashboardCustomer');
    }

    public function formSewa()
    {
        $bus = Bus::orderBy('id','ASC')->where('id_sifat','1')->paginate(1000000);
        return view('customer.FormSewaBus',['bus'=>$bus]);
    }

    public function formSewa_book($id)
    {
        $bus = Bus::find($id);
        return view('customer.BookSewaBus',['bus'=>$bus]);
    }

    public function tansaksi_sewaBus(Request $request)
    {
        Instansi::create([
            'id_bus' => $request -> id_bus,
            'nama_user' => $request -> nama_user,
            'email' => $request -> email,
            'kota_berangkat' => $request -> kota_berangkat,
            'kota_tujuan' => $request -> kota_tujuan,
            'tgl_keberangkatan' => $request -> tgl_keberangkatan,
            'tgl_pengembalian' => $request -> tgl_pengembalian,
            'total_bayar' => $request -> total_bayar,
            'bukti_bayar' => $request -> bukti_bayar,
            'validasi' => $request -> validasi,
        ]);
        return redirect('/DashboardCustomer');
    }

    public function bookingLog()
    {
        $pribadi = Pribadi::orderBy('id', 'DESC')->where('email', Auth::user() -> email)->paginate(10);
        $instansi = Instansi::orderBy('id', 'DESC')->where('email', Auth::user() -> email)->paginate(10);
        return view('customer.BookingLog', ['pribadi' => $pribadi,'instansi' => $instansi]);
    }

    public function viewbookingLogShuttle($id)
    {
        $pribadi = Pribadi::find($id);
        return view('customer.viewBookingLogPribadi', ['pribadi' => $pribadi]);
    }

    public function viewbookingLogSewa($id)
    {
        $instansi = Instansi::find($id);
        return view('customer.viewBookingLogInstansi', ['instansi' => $instansi]);
    }
}