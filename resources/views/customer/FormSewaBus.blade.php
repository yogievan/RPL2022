@extends('layouts/mainCustomer')
@section('title', '.:Sewa Bus:.')
@section('konten')
<div class="container-fluid py-4">
    <div class="row">
        <nav class="navbar navbar-expand-lg rounded">
          <div class="col">
            <a class="navbar-brand text-white mb-0 h1 text-lg" href="/DashboardCustomer">
              <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
              &nbsp BookingBus.com
            </a>
          </div>
          <div class="col-2">
            <a href="/BookingLog" class="text-white mb-0 h1 text-lg">Riwayat Pemesanan</i></a>
          </div>
          <div class="col-2">
            <a href="#profileUser"><i class="fas fa-user-circle text-lg text-white mb-0 h1 text-lg">&nbsp {{Auth::user() -> nama_user ?? ''}} </i></a>
          </div>
          <div class="col-1">
            <a href="/logout" class="btn btn-danger m-1">Logout</a>
          </div>
        </nav>
    </div>
    <div class="container-fluid mb-2 mt-5">
        <div class="card-header">
            <div class="row">
                <div class="col-1">
                    <a href="/DashboardCustomer" class="btn btn-primary">BACK</a>
                </div>
                <div class="col">
                    <h3 class="text-center text-white">Pilih Bus Sewa</h3>
                </div>
                <div class="col-1">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($bus as $no => $b)
                <div class="row mt-3">
                    <div class="col">
                        <div class="row bg-light g-0 border rounded overflow-hidden position-relative">
                            <div class="col m-2">
                                <form action="/formSewaBus/book/customer/{{ $b -> id }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <img class="rounded" src="{{url('/assets/img/Bus/'.$b -> gambar_bus)}}" alt="logo bus" width="220" height="120">
                                        </div>
                                        <div class="col">
                                            <label>Pabrikan Bus</label><br>
                                            <label class="text-lg">{{$b -> pabrikan}}</label>
                                        </div>
                                        <div class="col">
                                            <label>Jumlah Kursi</label><br>
                                            <label class="text-lg">{{$b -> jumlah_kursi}}</label>
                                        </div>
                                        <div class="col">
                                            <label>Harga Sewa Bus</label><br>
                                            <label class="text-lg">{{$b -> harga}}</label>
                                        </div>
                                        <div class="col text-center m-auto">
                                            <button type="submit" class="btn btn-danger btn-lg">Book Now!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection