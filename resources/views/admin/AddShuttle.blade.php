@extends('layouts/mainAdmin')
@section('title', '.:Tambah Data Shuttle:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Formulir Tambah Data Shuttle</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form action="/addDataShuttle/Create" method="POST">
    @csrf
    <div>
      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Nama Shuttle:</b></span>
        <input class="form-control" placeholder="Nama Daerah" name="nama_shuttle" required>
      </div>

      <div class="form-group mt-3">
        <label class="text-white text-lg"><b>Lokasi Shuttle</b></label>
        <input class="form-control" placeholder="Lokasi Daerah" name="lokasi" required>
      </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">SAVE</button>
            <a href="TabelShuttle">
                <button type="button" class="btn btn-danger">BACK</button>
            </a>
        </div>
    </div>
  </form>
</div>
@endsection