@extends('layouts/mainAdmin')
@section('title', '.:Tabel Data Users:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel User</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="/admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <h4 class="text-white">Tabel User Customer</h4>
    <div class="card-body bg-white rounded mt-3">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">Nama User</th>
              <th scope="col">Email</th>
              <th scope="col">No Telp</th>
              <th scope="col">Alamat</th>
              <th scope="col">ACTION</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($user as $no => $u)
              <tr class="text-center">
                  <td>{{$u -> nama_user}}</td>
                  <td>{{$u -> email}}</td>
                  <td>{{$u -> no_telp}}</td>
                  <td>{{$u -> alamat}}</td>
                  <td>
                      <a href="/viewDataUser/{{ $u -> id }}" class="btn btn-outline-primary">
                          View
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$user -> links()}}</span>
    </div>  
  </div>
  
  <div class="row mt-5">
    <h4 class="text-white">Tabel User Admin</h4>
    <form>
      <div class="row">
        <div class="col">
          <a href="/admin/sign-up" class="btn btn-outline-white">Tambah Data Admin</a>
        </div>
      </div>
    </form>
    <div class="card-body bg-white rounded mt-3">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">Username Admin</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($admin as $no => $a)
              <tr class="text-center">
                <td>{{$a -> id}}</td>
                <td>{{$a -> username}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$admin -> links()}}</span>
    </div>  
  </div>

  <div class="row mt-5">
    <h4 class="text-white">Tabel User Manajer</h4>
    <form>
      <div class="row">
        <div class="col">
          <a href="/manager/sign-up" class="btn btn-outline-white">Tambah Data Manajer</a>
        </div>
      </div>
    </form>
    <div class="card-body bg-white rounded mt-3">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">Username Manajer</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($manajer as $no => $m)
              <tr class="text-center">
                <td>{{$m -> id}}</td>
                <td>{{$m -> username}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
      <span class="container-fluid">{{$manajer -> links()}}</span>
    </div>  
  </div>
</div>
@endsection