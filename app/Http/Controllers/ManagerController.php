<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Manajer;
use App\Pribadi;
use App\Instansi;
use App\Shuttle;


class ManagerController extends Controller
{
    public function DashboardManager()
    {
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        $sumPribadi = Pribadi::where('validasi','LUNAS')->count('validasi');
        $sumPribadiHarian = Pribadi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumPribadiBulanan = Pribadi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumPribadiTahunan = Pribadi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');

        $sumInstansi = Instansi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->count('validasi');
        $sumInstansiHarian = Instansi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumInstansiBulanan = Instansi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumInstansiTahunan = Instansi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');
        
        $shuttle = Shuttle::orderBy('nama_shuttle','ASC')->paginate(100000);
        $pribadi = Pribadi::orderBy('id','ASC')->paginate(100000);

        $HalteAdisutjipto = Pribadi::where('shuttle_tujuan', 'Halte Adisutjipto')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteBethesda = Pribadi::where('shuttle_tujuan', 'Halte Bethesda')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteEmpireXXI = Pribadi::where('shuttle_tujuan', 'Halte Empire XXI')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteJantiSelatan = Pribadi::where('shuttle_tujuan', 'Halte Janti Selatan')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteKalasan = Pribadi::where('shuttle_tujuan', 'Halte Kalasan')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteMalioboro = Pribadi::where('shuttle_tujuan', 'Halte Malioboro')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteMCDSudirman = Pribadi::where('shuttle_tujuan', 'Halte MCD Sudirman')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HaltePlazaAmbarukmo = Pribadi::where('shuttle_tujuan', 'Halte Plaza Ambarukmo')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HaltePrambanan = Pribadi::where('shuttle_tujuan', 'Halte Prambanan')->where('validasi','LUNAS')->count('shuttle_tujuan');
        $HalteTuguJogja = Pribadi::where('shuttle_tujuan', 'Halte Tugu Jogja')->where('validasi','LUNAS')->count('shuttle_tujuan');

        $SumHalteAdisutjipto = Pribadi::where('shuttle_tujuan', 'Halte Adisutjipto')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteBethesda = Pribadi::where('shuttle_tujuan', 'Halte Bethesda')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteEmpireXXI = Pribadi::where('shuttle_tujuan', 'Halte Empire XXI')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteJantiSelatan = Pribadi::where('shuttle_tujuan', 'Halte Janti Selatan')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteKalasan = Pribadi::where('shuttle_tujuan', 'Halte Kalasan')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteMalioboro = Pribadi::where('shuttle_tujuan', 'Halte Malioboro')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteMCDSudirman = Pribadi::where('shuttle_tujuan', 'Halte MCD Sudirman')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHaltePlazaAmbarukmo = Pribadi::where('shuttle_tujuan', 'Halte Plaza Ambarukmo')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHaltePrambanan = Pribadi::where('shuttle_tujuan', 'Halte Prambanan')->where('validasi','LUNAS')->sum('total_bayar');
        $SumHalteTuguJogja = Pribadi::where('shuttle_tujuan', 'Halte Tugu Jogja')->where('validasi','LUNAS')->sum('total_bayar');

        return view('manager.DashboardManager', ['cek' => 'dashboard'],
        ['sumPribadi' => $sumPribadi,
        'sumPribadiHarian' => $sumPribadiHarian,
        'sumPribadiBulanan' => $sumPribadiBulanan,
        'sumPribadiTahunan' => $sumPribadiTahunan,
        'sumInstansi' => $sumInstansi,
        'sumInstansiHarian' => $sumInstansiHarian,
        'sumInstansiBulanan' => $sumInstansiBulanan,
        'sumInstansiTahunan' => $sumInstansiTahunan,
        'day' => $day,
        'month' => $month,
        'year' => $year,
        'HalteAdisutjipto' => $HalteAdisutjipto,
        'HalteBethesda' => $HalteBethesda,
        'HalteEmpireXXI' => $HalteEmpireXXI,
        'HalteJantiSelatan' => $HalteJantiSelatan,
        'HalteKalasan' => $HalteKalasan,
        'HalteMalioboro' => $HalteMalioboro,
        'HalteMCDSudirman' => $HalteMCDSudirman,
        'HaltePlazaAmbarukmo' => $HaltePlazaAmbarukmo,
        'HaltePrambanan' => $HaltePrambanan,
        'HalteTuguJogja' => $HalteTuguJogja,
        'SumHalteAdisutjipto' => $SumHalteAdisutjipto,
        'SumHalteBethesda' => $SumHalteBethesda,
        'SumHalteEmpireXXI' => $SumHalteEmpireXXI,
        'SumHalteJantiSelatan' => $SumHalteJantiSelatan,
        'SumHalteKalasan' => $SumHalteKalasan,
        'SumHalteMalioboro' => $SumHalteMalioboro,
        'SumHalteMCDSudirman' => $SumHalteMCDSudirman,
        'SumHaltePlazaAmbarukmo' => $SumHaltePlazaAmbarukmo,
        'SumHaltePrambanan' => $SumHaltePrambanan,
        'SumHalteTuguJogja' => $SumHalteTuguJogja,
        'pribadi' => $pribadi,
        'shuttle' => $shuttle]);
    }

    public function managersignin()
    {
        return view('ManagerSign-in');
    }

    public function managerceklogin(Request $request)
    {
        $user = Manajer::where('username', $request->username)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user);
        return redirect('/DashboardManager');
    }
    public function managerlogout()
    {
        Auth::logout();
        return redirect('/manager/Login');
    }
    public function ManajerSignup()
    {
        return view('ManajerSign-up');
    }

    public function addDataManajer(Request $request)
    {
        $manajer = Manajer::create([
            'username' => $request -> username,
            'password' => md5($request->password)
        ]);
        return redirect('/manager/Login');
    }
}
