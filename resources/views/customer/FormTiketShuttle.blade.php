@extends('layouts/mainCustomer')
@section('title', '.:Form Pesan Tiket Shuttle:.')
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
    <div class="card mb-3 m-2">
        <div class="card-header">
            <div class="row">
                <div class="col-1">
                    <a href="/DashboardCustomer" class="btn btn-primary">BACK</a>
                </div>
                <div class="col">
                    <h3 class="text-center">Form Pemesanan Tiket Shuttle Bus</h3>
                </div>
                <div class="col-1">
                    <p></p>
                </div>
            </div>
        </div>
        <form action="/searchTiket/customer" method="GET" class="m-2">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <label>Pilih Shuttle Keberangkatan</label>
                    <select id="inputBerangkat" class="form-control" name="shuttle_mulai" required>
                        <option selected value=""></option>
                        @foreach ($shuttle as $no => $sh)
                            <option value="{{$sh -> nama_shuttle}}">{{$sh -> nama_shuttle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="inputTujuan">Pilih Shuttle Tujuan</label>
                    <select id="inputBerangkat" class="form-control" name="shuttle_tujuan" required>
                        <option selected value=""></option>
                        @foreach ($shuttle as $no => $sh)
                            <option value="{{$sh -> nama_shuttle}}">{{$sh -> nama_shuttle}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tglBerangkat">Pilih Tanggal Berangkat</label>
                        <input type="date" id="tglBerangkat" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Cari</button>
            </div>
        </form>
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