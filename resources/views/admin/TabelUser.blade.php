@extends('layouts/mainAdmin')
@section('title', '.:Tabel Data Users:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel User</h4>
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
        <div class="col-md-4">
          <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="user/search">
              <div class="input-group">
                  <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search by nama user dan email">
                  <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
              </div>
          </form>
        </div>
      </div>
    </form>
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
                  <td>{{$u -> username}}</td>
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
@endsection