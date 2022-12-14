@extends('layouts/mainAdmin')
@section('title', '.:Tabel Transaksi:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel Transaksi</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="sign-in"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="card-header mt-3">
    <h5 class="text-white">Tabel Transaksi Pribadi (Halte ke Halte)</h5>
    <div class="card-body bg-white rounded">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">ID Bus</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Shuttle Asal</th>
              <th scope="col">Shuttle Tujuan</th>
              <th scope="col">Total Bayar</th>
              <th scope="col">ACTION</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($pribadi as $no => $tp)
              <tr class="text-center">
                  <td>{{$tp -> id}}</td>
                  <td>{{$tp -> id_bus}}</td>
                  <td>{{$tp -> nama_user}}</td>
                  <td>{{$tp -> shuttle_asal}}</td>
                  <td>{{$tp -> shuttle_tujuan}}</td>
                  <td>{{$tp -> total_bayar}}</td>
                  <td>
                      <a href="/viewDataTransaksi/pribadi/{{ $tp -> id }}" class="btn btn-outline-primary">
                          View
                      </a>
                      <a href="/validasiTransaksiPribadi/{{ $tp -> id }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Validasi Data Transaksi?')">
                          Validasi
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$pribadi -> links()}}</span>
    </div>  
  </div>
</div>

<div class="container-fluid py-4">
  <div class="card-header mt-3">
    <h5 class="text-white">Tabel Transaksi Instansi (Sewa Bus)</h5>
    <div class="card-body bg-white rounded">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">ID Bus</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Kota Asal</th>
              <th scope="col">Kota Tujuan</th>
              <th scope="col">Tanggal Berangkat</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Total Bayar</th>
              <th scope="col">ACTION</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($instansi as $no => $ti)
              <tr class="text-center">
                  <td>{{$ti -> id}}</td>
                  <td>{{$ti -> id_bus}}</td>
                  <td>{{$ti -> nama_user}}</td>
                  <td>{{$ti -> kota_berangkat}}</td>
                  <td>{{$ti -> kota_tujuan}}</td>
                  <td>{{$ti -> tgl_keberangkatan}}</td>
                  <td>{{$ti -> tgl_pengembalian}}</td>
                  <td>{{$ti -> total_bayar}}</td>
                  <td>
                      <a href="/viewDataTransaksi/instansi/{{ $ti -> id }}" class="btn btn-outline-primary">
                          View
                      </a>
                      <a href="/validasiTransaksiInstansi/{{ $ti -> id }}" class="btn btn-danger" onclick="return confirm('Anda Yakin Validasi Data Transaksi?')">
                        Validasi
                    </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$instansi -> links()}}</span>
    </div>  
  </div>
</div>
@endsection