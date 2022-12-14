@extends('layouts/mainCustomer')
@section('title', '.:Sewa Bus:.')
@section('konten')
<div class="container-fluid py-4">
    <div>
        <header class="pb-3 mb-4 border-bottom">
            <a href="/DashboardCustomer" class="d-flex align-items-center text-dark text-decoration-none">
              <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
              <span class="fs-4 text-white">&nbsp BookingBus.com</span>
            </a>
        </header>
    </div>
    <div class="container-fluid mb-3 m-2">
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