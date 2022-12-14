@extends('layouts/mainCustomer')
@section('title', '.:Hasil Search Tiket Shuttle:.')
@section('konten')
<div class="container-fluid py-4">
    <div class="row">
        <header class="pb-3 mb-4 border-bottom">
            <div class="col-2">
                <a href="/DashboardCustomer" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="fs-4 text-white">&nbsp BookingBus.com</span>
                </a>
            </div>
        </header>
    </div>
    <div>
        <a href="/formTiketShuttle/customer" class="btn btn-primary">BACK</a>
    </div>
    @foreach ($jadwal as $no=> $jj)
        @foreach ($bus as $no=> $b)
        <div class="row mt-3">
            <div class="col">
                <div class="row bg-light g-0 border rounded overflow-hidden position-relative">
                    <div class="col m-2">
                        <form action="/book/tiket/shuttle/customer/{{$jj -> id}}">
                            <div class="row">
                                <div class="col">
                                    <img class="rounded" src="{{url('/assets/img/Bus/'.$b -> gambar_bus)}}" alt="logo bus" width="220" height="120">
                                </div>
                                <div class="col-1">
                                    <label>BUS</label><br>
                                    <label class="text-lg">{{$jj->id_bus}}</label>
                                </div>
                                <div class="col">
                                    <label>Shuttle Keberangkatan</label><br>
                                    <label class="text-lg">{{$jj->shuttle_mulai}}</label>
                                </div>
                                <div class="col">
                                    <label>Shuttle Tujuan</label><br>
                                    <label class="text-lg">{{$jj->shuttle_tujuan}}</label>
                                </div>
                                <div class="col">
                                    <label>Tanggal Berangkat</label><br>
                                    <label class="text-lg">{{$jj->tgl_jadwal}}</label>
                                </div>
                                <div class="col">
                                    <label>Jam Keberangkatan</label><br>
                                    <label class="text-lg">{{$jj->jam_mulai}}</label>
                                </div>
                                <div class="col">
                                    <label>Harga Tiket</label><br>
                                    <label class="text-lg">{{$jj->harga}}</label>
                                </div>
                                <div class="col-md">
                                    <label>Jumlah Seat:{{$jj->jumlah_kursi}}</label><br>
                                    <label>Seat Tersedia:</label><br>
                                    <button type="submit" class="btn btn-danger btn-lg">Book Now!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endforeach
</div>
@endsection