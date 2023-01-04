@extends('layouts/mainCustomer')
@section('title', '.:Dashboard:.')
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <nav class="navbar navbar-expand-lg rounded">
      <div class="col">
        <a class="navbar-brand text-white mb-0 h1 text-lg" href="/home">
          <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
          &nbsp BookingBus.com
        </a>
      </div>
      <div class="col-2">
        <a href="/BookingLog" class="text-white mb-0 h1 text-lg">Riwayat Pemesanan</i></a>
      </div>
      <div class="col-2">
        <a href="#profileUser">
          <i class="fas fa-user-circle text-lg text-white mb-0 h1 text-lg">&nbsp {{Auth::user() -> nama_user ?? ''}} </i>
        </a>
      </div>
      <div class="col-1">
        <a href="/logout" class="btn btn-danger m-1">Logout</a>
      </div>
    </nav>
  </div>

  <div class="p-5 mb-4 bg-light rounded-3 mt-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Selamat Datang <b>{{Auth::user() -> nama_user ?? ''}}</b> Di BookingBus.com</h1>
      <p class="col-md-8 fs-4">BookingBus.com bergerak dalam bidang jasa pemesanan tiket bus perorangan atau sewa satu bus.</p>
      <p class="col-md-8 fs-4">Enjoy Your Trip With BookingBus.com</p>
    </div>
  </div>

  <div class="row align-items-md-stretch mt-3">
  <div class="col-md-6">
    <div class="h-100 p-5 text-bg-warning rounded-3">
      <h2 class="text-white">Formulir Sewa Bus</h2>
      <p class="text-white">Pemesanan Bus untuk Institusi dengan pesanan 1 Bus Besar.</p>
      <a href="/formSewaBus/customer"><button class="btn btn-outline-light" type="button">Go to <u>FORM</u></button></a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="h-100 p-5 bg-light border rounded-3">
      <h2>Formulir Tiket Bus</h2>
      <p>Tiket bus yang memiliki rute di Yogyakarta, digunakan untuk memutari kota Yogyakarta.</p>
      <a href="/formTiketShuttle/customer"><button class="btn btn-outline-warning" type="button">Go to <u>FORM</u></button></a>
    </div>
  </div>
</div>
  </div>
</div>
@endsection