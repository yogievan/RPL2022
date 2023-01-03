<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;
use App\Pribadi;
use App\Instansi;

class GeneratePDFController extends Controller
{
    public function transaksiPribadiByTime()
    {
        $day = date('d-m-Y');
        $month = date('m');
        $year = date('Y');
        $sumPribadiHarian = Pribadi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumPribadiBulanan = Pribadi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumPribadiTahunan = Pribadi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');
        
        // $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('PDF.TransaksiPribadiByTime', 
        ['sumPribadiHarian' => $sumPribadiHarian,
        'sumPribadiBulanan' => $sumPribadiBulanan,
        'sumPribadiTahunan' => $sumPribadiTahunan,
        'day' => $day,
        'month' => $month,
        'year' => $year]);

        return $pdf->stream();
    }

    public function transaksiInstansiByTime()
    {
        $day = date('d-m-Y');
        $month = date('m');
        $year = date('Y');

        $sumInstansiHarian = Instansi::where('validasi','LUNAS')->whereDay('updated_at', now()->day)->sum('total_bayar');
        $sumInstansiBulanan = Instansi::where('validasi','LUNAS')->whereMonth('updated_at', now()->month)->sum('total_bayar');
        $sumInstansiTahunan = Instansi::where('validasi','LUNAS')->whereYear('updated_at', now()->year)->sum('total_bayar');

        // $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('PDF.TransaksiInstansiByTime', 
        ['sumInstansiHarian' => $sumInstansiHarian,
        'sumInstansiBulanan' => $sumInstansiBulanan,
        'sumInstansiTahunan' => $sumInstansiTahunan,
        'day' => $day,
        'month' => $month,
        'year' => $year]);

        return $pdf->stream();
    }
}
