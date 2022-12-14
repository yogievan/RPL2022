<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jadwal;
use App\Shuttle;
use App\Bus;
 
class CustomerGuestController extends Controller
{
    public function setting_profile()
    {
        return view('customer.settingProfile');
    }

    public function formShuttle(Request $request)
    {
        $jadwal = Jadwal::orderBy('id', 'ASC')->paginate(100000000);
        $shuttle = Shuttle::orderBy('id', 'ASC')->paginate(10000000);
        $bus = Bus::orderBy('id', 'ASC')->where('id_sifat','2')->paginate(10000);
        return view('FormTiketShuttle',['jadwal' => $jadwal, 'shuttle' => $shuttle, 'bus' => $bus]);
    }
    public function searchTiket(Request $request)
    {
        $shuttle_mulai = $request->shuttle_mulai;
        $shuttle_tujuan = $request->shuttle_tujuan;
        $tgl_jadwal = $request->tgl_jadwal;
        $jadwal = Jadwal::where('shuttle_mulai','like','%'.$shuttle_mulai.'%')->where('shuttle_tujuan','like','%'.$shuttle_tujuan.'%')->where('tgl_jadwal','like','%'.$tgl_jadwal.'%')->paginate(10000000);
        $bus = Bus::orderBy('id', 'ASC')->where('id_sifat','2')->paginate(10000000);
        return view('CariTiketShuttle',['jadwal' => $jadwal, 'bus' => $bus]);
    }

    public function formSewa()
    {
        $bus = Bus::orderBy('id','ASC')->where('id_sifat','1')->paginate(1000000);
        return view('FormSewaBus',['bus'=>$bus]);
    }

    public function formSewa_book()
    {
        return view('customer.BookSewaBus',['bus'=>$bus]);
    }
}