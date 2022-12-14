@extends('layouts/mainCustomer')
@section('title', '.:Form Sewa Bus:.')
@section('konten')
<div class="container-fluid py-4">
    <div class="container-fluid mb-3 m-2">
        <div class="row">
            <div class="col-1">
                <a href="/formSewaBus/customer" class="btn btn-primary">BACK</a>
            </div>
            <div class="col">
                <h2 class="text-center text-white">Form Sewa Bus</h2>
            </div>
            <div class="col-1">
                <p></p>
            </div>
        </div>
        <div class="container-fluid py-4">
            <form action="/formSewaBus/book/bus/customer/{{$bus -> id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mt-2">
                    <h2 class="text-white">Tahap 1: Pengisian Data</h2>
                </div>
                <div class="card">
                    <div class="card-body m-2">
                        <div class="row mt-2">
                            <div class="col">
                                <label class="text-dark">Tipe Bus</label><br>
                                <h4 class="text-lg text-dark" name="id_sifat">{{$bus -> id_sifat}}</h4>
                                <input type="text" class="form-control" name="id_sifat" value="{{$bus -> id_sifat}}" hidden>
                            </div>
                            <div class="col">
                                <label class="text-dark">Kode Bus</label><br>
                                <h4 class="text-lg text-dark">{{$bus -> id}}</h4>
                                <input type="text" class="form-control" name="id_bus" value="{{$bus -> id}}" hidden>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Nama Pemesan</label>
                                <input type="text" class="form-control" name="nama_user"  required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Kota Keberangkatan</label>
                                <input type="text" class="form-control" name="kota_berangkat" required>
                            </div>
                            <div class="col">
                                <label class="text-dark">Kota Tujuan</label>
                                <input type="text" class="form-control" name="kota_tujuan" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Tanggal Penggunaan Bus</label>
                                <input type="date" class="form-control" name="tgl_keberangkatan" required>
                            </div>
                            <div class="col">
                                <label class="text-dark">Tanggal Pengembalian Bus</label>
                                <input type="date" class="form-control" name="tgl_pengembalian" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Total Bayar</label>
                                <h3 class="text-dark text-bold">Rp. {{$bus -> harga}}</h3>
                                <input type="text" class="form-control" name="total_bayar" value="{{$bus -> harga}}" hidden>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <h2 class="text-white">Tahap 2: Metode Pembayaran</h2>
                </div>
                <div class="card mt-2">
                    <div class="card-body m-2">
                        <div class="row mt-2">
                            <p class="text-danger">*Perlu dilakukan pembayaran untuk meyelesaikan pesanan ini.</p>
                        </div>
                        <div class="row">
                            <h6>Via Bank</h6>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{url('/assets/img/BCA_logo_Bank_Central_Asia.png')}}" width="150" height="50" alt="bca_logo">
                                        </div>
                                        <div class="col">
                                            <h6 class="mt-1">Virtual Account: 3901 + Nomer Telphone</h6>
                                            <p>Example: 3901081xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{url('/assets/img/BNI_logo.png')}}" width="130" height="50" alt="bca_logo">
                                        </div>
                                        <div class="col">
                                            <h6 class="mt-1">Virtual Account: 8241 + Nomer Telphone</h6>
                                            <p>Example: 8241081xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{url('/assets/img/Logo_BRI.png')}}" width="170" height="50" alt="bca_logo">
                                        </div>
                                        <div class="col">
                                            <h6 class="mt-1">Virtual Account: 88810 + Nomer Telphone</h6>
                                            <p>Example: 88810081xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="mt-2">Via E-Walet</h6>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{url('/assets/img/Logo_dana_blue.png')}}" width="160" height="50" alt="bca_logo">
                                        </div>
                                        <div class="col">
                                            <h6 class="mt-1">Virtual Account: 8528 + Nomer Telphone</h6>
                                            <p>Example: 8528081xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{url('/assets/img/Logo_ovo_purple.png')}}" width="150" height="50" alt="bca_logo">
                                        </div>
                                        <div class="col">
                                            <h6 class="mt-1">Virtual Account: 39358 + Nomer Telphone</h6>
                                            <p>Example: 39358081xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p></p>
                        <div class="row mt-3">
                            <div class="col-5 mb-3">
                                <label for="formFile" class="form-label">Upload Bukti Bayar</label>
                                <input class="form-control" name="bukti_bayar" type="file" id="formFile" required>
                            </div>
                            <div class="col">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body m-2">
                    <div class="row mt-3">
                        <button class="btn btn-primary btn-lg btn-block">BOOK!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection