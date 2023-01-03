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

        $pdf = PDF::loadView('PDF.TransaksiInstansiByTime', 
        ['sumInstansiHarian' => $sumInstansiHarian,
        'sumInstansiBulanan' => $sumInstansiBulanan,
        'sumInstansiTahunan' => $sumInstansiTahunan,
        'day' => $day,
        'month' => $month,
        'year' => $year]);

        return $pdf->stream();
    }

    public function transaksiPribadiByRute()
    {
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

        $pdf = PDF::loadView('PDF.TransaksiPribadiByRute', 
        ['HalteAdisutjipto' => $HalteAdisutjipto,
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
        'SumHalteTuguJogja' => $SumHalteTuguJogja]);

        return $pdf->stream();
    }
    public function downloadTiketPribadi($id)
    {
        $pribadi = Pribadi::find($id);
        $pdf = PDF::loadView('PDF.DownloadTiketPribadi', 
        ['pribadi' => $pribadi]);

        return $pdf->stream();
    }

    public function downloadTiketSewa($id)
    {
        $instansi = Instansi::find($id);
        $pdf = PDF::loadView('PDF.DownloadTiketSewa', 
        ['instansi' => $instansi]);

        return $pdf->stream();
    }
}
