@extends('layouts/mainCustomer2')
@section('title', '.:Detail Pemesanan Bus:.')
@section('konten')
<div class="container-fluid py-4">
    <div class="container-fluid mb-3 m-2">
        <div class="row">
            <div class="col-1">
                <a href="/BookingLog" class="btn btn-primary">BACK</a>
            </div>
            <div class="col">
                <h2 class="text-center text-white">Form Pesan Tiket Bus</h2>
            </div>
            <div class="col-1">
                <p></p>
            </div>
        </div>
        <div class="container-fluid py-4">
            <form>
              @csrf
              @method('PUT')
                <div class="card">
                    <div class="card-body m-2">
                      <div class="row mt-3">
                        <div class="col">
                            <label class="text-dark">Kode Bus</label>
                            <h4 class="text-lg text-dark" name="id_bus">{{$instansi->id_bus}}</h4>
                        </div>
                      </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Nama Pemesan</label>
                                <h4 class="text-lg text-dark" name="nama_user">{{$instansi->nama_user}}</h4>
                            </div>
                            <div class="col">
                                <label class="text-dark">Email</label>
                                <h4 class="text-lg text-dark" name="nama_user">{{$instansi->email}}</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Halte Keberangkatan</label>
                                <h4 class="text-dark" name="shuttle_asal">{{$instansi->kota_berangkat}}</h4>
                            </div>
                            <div class="col">
                                <label class="text-dark">Halte Tujuan</label>
                                <h4 class="text-dark" name="shuttle_tujuan">{{$instansi->kota_tujuan}}</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                              <label class="text-dark">Tanggal Keberangkatan</label>
                              <h4 class="text-dark" name="tgl_jadwal">{{$instansi->tgl_keberangkatan}}</h4>
                          </div>
                          <div class="col">
                              <label class="text-dark">Tanggal Pengembalian</label>
                              <h4 class="text-dark" name="jam_mulai">{{$instansi->tgl_pengembalian}}</h4>
                          </div>
                      </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="text-dark">Total Bayar</label>
                                <h3 class="text-dark text-bold" name="total_bayar">Rp. {{$instansi->total_bayar}}</h3>
                            </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                              <label class="text-dark">Keterangan Validasi</label>
                              <h3 class="text-dark text-bold" name="validasi">{{$instansi->validasi}}</h3>
                          </div>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection