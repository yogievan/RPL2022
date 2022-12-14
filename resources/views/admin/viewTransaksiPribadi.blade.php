@extends('layouts/mainAdmin')
@section('title', '.:Detail Transaksi Tiket:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Data Transaksi</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="AdminSign-in"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form>
    @csrf
    @method('PUT')
    <div>
      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>ID Bus:</b></span>
        <input class="form-control"  name="id_bus" value="{{ $pribadi -> id_bus}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Nama Pemesan Tiket:</b></span>
        <input class="form-control" name="nama_user" value="{{ $pribadi -> nama_user}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Halte Keberangkatan:</b></span>
        <input class="form-control" name="shuttle_asal" value="{{ $pribadi -> shuttle_asal}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
          <span class="input-group-text" id="addon-wrapping"><b>Halte Tujuan:</b></span>
          <input class="form-control" name="shuttle_tujuan" value="{{ $pribadi -> shuttle_tujuan}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Jam Keberangkatan:</b></span>
        <input class="form-control" name="jam_mulai" value="{{ $pribadi -> jam_mulai}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Tanggal Keberangkatan:</b></span>
        <input class="form-control" name="tgl_jadwal" value="{{ $pribadi -> tgl_jadwal}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Total Bayar:</b></span>
        <input class="form-control" name="total_bayar" value="{{ $pribadi -> total_bayar}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Bukti Bayar:</b></span>
        <input class="form-control" name="total_bayar" value="{{ $pribadi -> bukti_bayar}}" readonly>
      </div>
      
      <div class="row mt-3">
        <div class="col">
          <img class="rounded" src="{{url('/assets/img/bukti_bayar/'.$pribadi -> bukti_bayar)}}" alt="logo bus" width="520" height="320">
        </div>
      </div>
        <div class="mt-3">
            <a href="/TabelTransaksi">
                <button type="button" class="btn btn-danger">BACK</button>
            </a>
        </div>
    </div>
  </form>
</div>
@endsection