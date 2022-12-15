@extends('layouts/mainAdmin')
@section('title', '.:Detail Data User:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Data User</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="/admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
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
        <span class="input-group-text" id="addon-wrapping"><b>Nama Pengguna:</b></span>
        <input class="form-control" placeholder="Nama User" name="nama_user" value="{{ $user -> nama_user}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Tanggal Lahir:</b></span>
        <input class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ $user -> tgl_lahir}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Email:</b></span>
        <input class="form-control" placeholder="Email" name="email" value="{{ $user -> email}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
          <span class="input-group-text" id="addon-wrapping"><b>No. Telp:</b></span>
          <input class="form-control" placeholder="No. Telp" name="no_telp" value="{{ $user -> no_telp}}" readonly>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Alamat:</b></span>
        <input class="form-control" placeholder="Alamat" name="alamat" value="{{ $user -> alamat}}" readonly>
      </div>

        <div class="mt-3">
            <a href="/TabelUser">
                <button type="button" class="btn btn-danger">BACK</button>
            </a>
        </div>
    </div>
  </form>
</div>
@endsection