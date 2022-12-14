@extends('layouts/mainAdmin2')
@section('title', '.:Detail Transaksi Sewa:.')
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
  <form action="/validasiTransaksiInstansi/{{ $instansi -> id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>ID Bus:</b></span>
        <input class="form-control"  name="id_bus" value="{{ $instansi -> id_bus}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Nama Pemesan Tiket:</b></span>
        <input class="form-control" name="nama_user" value="{{ $instansi -> nama_user}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Email:</b></span>
        <input class="form-control" name="email" value="{{ $instansi -> email}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Kota Keberangkatan:</b></span>
        <input class="form-control" name="kota_berangkat" value="{{ $instansi -> kota_berangkat}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
          <span class="input-group-text" id="addon-wrapping"><b>Kota Tujuan:</b></span>
          <input class="form-control" name="kota_tujuan" value="{{ $instansi -> kota_tujuan}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Tanggal Keberangkatan:</b></span>
        <input class="form-control" name="tgl_keberangkatan" value="{{ $instansi -> tgl_keberangkatan}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Tanggal Pengembalian:</b></span>
        <input class="form-control" name="tgl_pengembalian" value="{{ $instansi -> tgl_pengembalian}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Total Bayar:</b></span>
        <input class="form-control" name="total_bayar" value="{{ $instansi -> total_bayar}}" readonly>
      </div>

      <div>
        <input class="form-control" name="validasi" value="LUNAS" hidden>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Bukti bayar:</b></span>
        <input class="form-control" name="bukti_bayar" value="{{ $instansi -> bukti_bayar}}" readonly>
      </div>
      
      <div class="row mt-3">
        <div class="col">
          <img class="rounded" src="{{url('/assets/img/bukti_bayar/'.$instansi -> bukti_bayar)}}" alt="logo bus" width="520" height="320">
        </div>
      </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-warning" onclick="return confirm('Anda Yakin Validasi Data Transaksi?')">Validasi</button>
            <a href="/TabelTransaksi">
                <button type="button" class="btn btn-danger">BACK</button>
            </a>
        </div>
    </div>
  </form>
</div>
@endsection