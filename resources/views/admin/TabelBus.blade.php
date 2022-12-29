@extends('layouts/mainAdmin')
@section('title', '.:Tabel Data Bus:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Tabel Bus</h4>
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
              <a href="/addDataBus" class="btn btn-outline-white">Tambah Data Bus</a>
            </div>
          </div>
      </form>
      <div class="card-body bg-white rounded">
          <table class="table table-striped">
              <thead>
              <tr class="text-center">
                  <th scope="col">#ID Bus</th>
                  <th scope="col">Tipe Bus</th>
                  <th scope="col">Pabrikan</th>
                  <th scope="col">Harga Sewa</th>
                  <th scope="col">Kursi</th>
                  <th scope="col">No Plat</th>
                  <th scope="col">ACTION</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($bus as $no => $b)
                  <tr class="text-center">
                      <td>{{$b -> id}}</td>
                      <td>{{$b -> id_sifat}}</td>
                      <td>{{$b -> pabrikan}}</td>
                      <td>{{$b -> harga}}</td>
                      <td>{{$b -> jumlah_kursi}}</td>
                      <td>{{$b -> no_plat}}</td>
                      <td>
                          <a href="/viewDataBus/{{ $b -> id }}" class="btn btn-outline-primary">
                              View
                          </a>
                          <a href="/updateDataBus/{{ $b -> id }}" class="btn btn-outline-success">
                              Update
                          </a>
                          <a href="/deleteDataBus/Delete/{{ $b -> id }}" class="btn btn-outline-danger" onclick="return confirm('Anda Yakin Menghapus Data?')">
                              Delete
                          </a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          <span class="container-fluid">{{$bus -> links()}}</span>
      </div>  
  </div>
@endsection