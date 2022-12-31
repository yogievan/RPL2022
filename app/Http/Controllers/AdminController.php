<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Admin;
use App\Pribadi;
use App\Instansi;
use App\Shuttle;

class AdminController extends Controller
{
    public function DashboardAdmin()
    {
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        $sumPribadi = Pribadi::where('validasi','LUNAS')->count('validasi');
        $sumPribadiHarian = Pribadi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumPribadiBulanan = Pribadi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumPribadiTahunan = Pribadi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');

        $sumInstansi = Instansi::where('validasi','LUNAS')->count('validasi');
        $sumInstansiHarian = Instansi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumInstansiBulanan = Instansi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumInstansiTahunan = Instansi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');
        
        $shuttle = Shuttle::orderBy('nama_shuttle','ASC')->paginate(100000);
        $pribadi = Pribadi::orderBy('id','ASC')->paginate(100000);
        $namaShuttle = Shuttle::orderBy('id','ASC')->value('nama_shuttle');
        $CountRutePribadi = Pribadi::where('shuttle_tujuan', $namaShuttle)->count('shuttle_tujuan');
        $CountRuteTotalBayar = Pribadi::where('shuttle_tujuan', $namaShuttle)->sum('total_bayar');

        return view('admin.DashboardAdmin', ['cek' => 'dashboard'],
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
        'CountRutePribadi' => $CountRutePribadi,
        'CountRuteTotalBayar' => $CountRuteTotalBayar,
        'namaShuttle' => $namaShuttle,
        'pribadi' => $pribadi,
        'shuttle' => $shuttle]);
    }

    public function adminsignin()
    {
        return view('AdminSign-in');
    }
    public function adminceklogin(Request $request)
    {
        $user = Admin::where('username', $request->username)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user);
        return redirect('/DashboardAdmin');
    }
    
    public function adminlogout()
    {
        Auth::logout();
        return redirect('/admin/Login');
    }

    public function AdminSignup()
    {
        return view('AdminSign-up');
    }

    public function addDataAdmin(Request $request)
    {
        $admin = Admin::create([
            'username' => $request -> username,
            'password' => md5($request->password)
        ]);
        return redirect('/admin/Login');
    }
}
