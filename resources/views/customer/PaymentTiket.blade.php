@extends('layouts/mainCustomer2')
@section('title', '.:Payment Tiket Bus:.')
@section('konten')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <h2 class="text-center text-white">Payment</h2>
            </div>
        </div>
        <div class="container-fluid py-4">
            <form action="/Payment/{{ $pribadi -> id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mt-5">
                    <h2 class="text-white">Tahap 2: Metode Pembayaran</h2>
                </div>
                <div class="container-fluid py-4">
                    <div class="card">
                        <div class="card-body m-2">
                          <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Kode Bus</label>
                                <h4 class="text-lg text-dark" name="id_bus">{{$pribadi->id_bus}}</h4>
                            </div>
                          </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="text-dark">Nama Pemesan</label>
                                    <h4 class="text-lg text-dark" name="nama_user">{{$pribadi->nama_user}}</h4>
                                </div>
                                <div class="col">
                                    <label class="text-dark">Email</label>
                                    <h4 class="text-lg text-dark" name="nama_user">{{$pribadi->email}}</h4>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="text-dark">Halte Keberangkatan</label>
                                    <h4 class="text-dark" name="shuttle_asal">{{$pribadi->shuttle_asal}}</h4>
                                </div>
                                <div class="col">
                                    <label class="text-dark">Halte Tujuan</label>
                                    <h4 class="text-dark" name="shuttle_tujuan">{{$pribadi->shuttle_tujuan}}</h4>
                                </div>
                            </div>
                              <div class="row mt-3">
                                  <div class="col">
                                      <label class="text-dark">Tanggal Keberangkatan</label>
                                      <h4 class="text-dark" name="tgl_jadwal">{{$pribadi->tgl_jadwal}}</h4>
                                  </div>
                                  <div class="col">
                                      <label class="text-dark">Jam Keberangkatan</label>
                                      <h4 class="text-dark" name="jam_mulai">{{$pribadi->jam_mulai}}</h4>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body m-2">
                        <div class="row">
                            <div class="col">
                                <label class="text-dark">Total Bayar</label>
                                <h1 class="text-dark text-bold" name="total_bayar">Rp. {{$pribadi -> total_bayar * $pribadi->jumlah_tiket}}</h1>
                                <input type="text" class="form-control" name="total_bayar" value="{{$pribadi -> total_bayar * $pribadi->jumlah_tiket}}" hidden>
                            </div>
                        </div>
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
                        </div>
                    </div>
                </div>
                <div class="card-body m-2">
                    <div class="row mt-3">
                        <button class="btn btn-primary btn-lg btn-block">Selesai</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection