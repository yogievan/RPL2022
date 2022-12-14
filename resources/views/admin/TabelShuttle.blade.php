@extends('layouts/mainAdmin')
@section('title', '.:Tabel Data Shuttle:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel Shuttle</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="sign-in"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form>
      <div class="row">
        <div class="col">
          <a href="/addDataShuttle" class="btn btn-outline-white">Tambah Data Shuttle</a>
        </div>
        <div class="col">
          <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="shuttle/search">
              <div class="input-group">
                  <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search by nama shuttle dan lokasi">
                  <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
              </div>
          </form>
        </div>
      </div>
    </form>
  <div class="card-body bg-white rounded">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">Nama Shuttle</th>
              <th scope="col">Lokasi</th>
              <th scope="col">ACTION</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($shuttle as $no => $s)
              <tr class="text-center">
                  <td>{{$s -> id}}</td>
                  <td>{{$s -> nama_shuttle}}</td>
                  <td>{{$s -> lokasi}}</td>
                  <td>
                      <a href="/updateDataShuttle/{{ $s -> id }}" class="btn btn-outline-success">
                          Update
                      </a>
                      <a href="/deleteDataShuttle/Delete/{{ $s -> id }}" class="btn btn-outline-danger" onclick="return confirm('Anda Yakin Menghapus Data?')">
                          Delete
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$shuttle -> links()}}</span>
  </div>  
</div>
@endsection