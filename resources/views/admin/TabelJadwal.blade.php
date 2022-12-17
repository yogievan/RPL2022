@extends('layouts/mainAdmin')
@section('title', '.:Tabel Data Jadwal:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel Jadwal</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form>
      <div class="row">
        <div class="col">
          <a href="/addDataJadwal" class="btn btn-outline-white">Tambah Data Jadwal</a>
        </div>
      </div>
    </form>
  <div class="card-body bg-white rounded">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">ID Bus</th>
              <th scope="col">Berangkat</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam Mulai</th>
              <th scope="col">Kapasitas / Tiket</th>
              <th scope="col">Harga Tiket</th>
              <th scope="col">ACTION</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($jadwal as $no => $j)
              <tr class="text-center">
                  <td>{{$j -> id_bus}}</td>
                  <td>{{$j -> shuttle_mulai}}</td>
                  <td>{{$j -> shuttle_tujuan}}</td>
                  <td>{{$j -> tgl_jadwal}}</td>
                  <td>{{$j -> jam_mulai}}</td>
                  <td>{{$j -> jumlah_kursi}} / {{$j -> jumlah_tiket}}</td>
                  <td>{{$j -> harga}}</td>
                  <td>
                      <a href="/updateDataJadwal/{{ $j -> id }}" class="btn btn-outline-success">
                          Update
                      </a>
                      <a href="/deleteDataJadwal/Delete/{{ $j -> id }}" class="btn btn-outline-danger" onclick="return confirm('Anda Yakin Menghapus Data?')">
                          Delete
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$jadwal -> links()}}</span>
  </div>  
</div>
@endsection