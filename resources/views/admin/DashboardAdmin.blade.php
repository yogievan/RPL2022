@extends('layouts/mainAdmin')
@section('title', '.:Dashboard Admin:.')
@section('header')
  @include('navAdmin.header')
@endsection
@section('konten')
<div class="container-fluid py-4">
  {{-- start analisis tabel pribadi --}}
  <div class="row mt-0">
    <div class="row">
      <h4 class="text-white">Transaksi Pemesanan Tiket</h4>
    </div>
    <div class="row mt-1">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</p>
                  <h5 class="font-weight-bolder">
                    {{$sumPribadiHarian}}
                  </h5>
                  <p class="mb-0">
                    Tanggal :
                    <span class="text-success text-sm font-weight-bolder">{{$day}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</p>
                  <h5 class="font-weight-bolder">
                    {{$sumPribadiBulanan}}
                  </h5>
                  <p class="mb-0">
                    Bulan :
                    <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</p>
                  <h5 class="font-weight-bolder">
                    {{$sumPribadiTahunan}}
                  </h5>
                  <p class="mb-0">
                    Tahun :
                    <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Masuk/Berhasil</p>
                  <h5 class="font-weight-bolder">
                    {{$sumPribadi}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  {{-- end analisis tabel pribadi --}}

  {{-- start analisis rute --}}
  <div class="row mt-4">
    <div class="col">
      <div class="card">
        <div class="card-header pb-0 pt-3 bg-transparent">
          <h5 class="text-capitalize">Rute Perjalanan Bus</h5>
          <table class="table table-striped">
            <thead>
              <tr class="text-center">
                  <th scope="col"><b>Rute Halte</b></th>
                  <th scope="col"><b>Total Transaksi Perjalanan</b></th>
                  <th scope="col"><b>Pendapatan</b></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pribadi as $no => $p)
              @foreach ($shuttle as $no => $s)
                <tr>
                  <td>{{$s -> nama_shuttle}}</td>
                  <td>{{$p -> shuttle_tujuan}}</td>
                  <td>{{$p -> total_bayar}}</td>
                </tr>
              @endforeach
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- end analisis rute --}}

  {{-- start analisis tabel instansi --}}
  <div class="row mt-3">
    <div class="row">
      <h4 class="text-white">Transaksi Pemesanan Bus</h4>
    </div>
    <div class="row mt-1">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</p>
                  <h5 class="font-weight-bolder">
                    {{$sumInstansiHarian}}
                  </h5>
                  <p class="mb-0">
                    Tanggal :
                    <span class="text-success text-sm font-weight-bolder">{{$day}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</p>
                  <h5 class="font-weight-bolder">
                    {{$sumInstansiBulanan}}
                  </h5>
                  <p class="mb-0">
                    Bulan :
                    <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</p>
                  <h5 class="font-weight-bolder">
                    {{$sumInstansiTahunan}}
                  </h5>
                  <p class="mb-0">
                    Tahun :
                    <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Masuk/Berhasil</p>
                  <h5 class="font-weight-bolder">
                    {{$sumInstansi}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  {{-- end analisis tabel instansi --}}
</div>
@endsection