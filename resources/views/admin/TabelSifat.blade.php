@extends('layouts/mainAdmin')
@section('title', '.:Tabel Sifat:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel Sifat Pemesanan</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="card-body bg-white rounded mt-3">
      <table class="table table-striped">
          <thead>
          <tr class="text-center">
              <th scope="col">#ID</th>
              <th scope="col">Keterangan Sifat</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($sifat as $no => $s)
              <tr class="text-center">
                  <td>{{$s -> id_sifat}}</td>
                  <td>{{$s -> ket_sifat}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>  
</div>
@endsection