@extends('layouts/mainAdmin')
@section('title', '.:Tambah Data Jadwal:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Formulir Tambah Data Jadwal</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form action="/addDataJadwal/Create" method="POST">
      @csrf
    <div>  
      <div class="row">
        <div class="col mt-3">
          <label class="text-white text-lg">ID Bus</label>
          <select class="form-control" name="id_bus">
            @foreach ($bus as $no => $b)
              <option value="{{$b->id}}">{{$b->id}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col mt-3">
          <label class="text-white text-lg">Shuttle Mulai</label>
          <select id="inputBerangkat" class="form-control" name="shuttle_mulai">
            <option selected value=""></option>
            @foreach ($shuttle as $no => $sh)
              <option value="{{$sh -> nama_shuttle}}">{{$sh -> nama_shuttle}}</option>
            @endforeach
          </select>
        </div>

        <div class="col mt-3">
          <label class="text-white text-lg">Shuttle Tujuan</label>
          <select id="inputBerangkat" class="form-control" name="shuttle_tujuan">
            <option selected value=""></option>
            @foreach ($shuttle as $no => $sh)
              <option value="{{$sh -> nama_shuttle}}">{{$sh -> nama_shuttle}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col mt-3">
          <label class="text-white text-lg">Jam Mulai</label>
          <select class="form-control" name="jam_mulai">
            <option selected value="06:00">06:00</option>
            <option value="06:30">06:30</option>
            <option value="07:00">07:00</option>
            <option value="07:30">07:30</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
            <option value="22:00">22:00</option>
          </select>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Pilih Tanggal Berangkat</label>
            <input type="date" class="form-control" name="tgl_jadwal">
          </div>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Kapasitas Kursi</label>
            <select class="form-control" name="jumlah_kursi">
              <option selected value="30">30</option>
              <option value="60">60</option>
            </select>
          </div>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Harga Tiket</label>
            <input type="number" class="form-control" name="harga">
          </div>
        </div>
      </div>

      <div class="mt-3">
          <button type="submit" class="btn btn-primary">SAVE</button>
          <a href="TabelJadwal">
              <button type="button" class="btn btn-danger">BACK</button>
          </a>
      </div>
    </div>
  </form>
</div>
@endsection