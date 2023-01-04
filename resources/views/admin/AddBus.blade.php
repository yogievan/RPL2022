@extends('layouts/mainAdmin')
@section('title', '.:Tambah Data Bus:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Formulir Tambah Data Bus</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form action="/addDataBus/Create" method="POST">
      @csrf
    <div>
      <div class="mt-3">
        <label class="text-white">Tipe Bus</label>
        <select class="form-control" name="id_sifat">
            <option selected value="1">Sewa</option>
            <option value="2">Shuttle</option>
        </select>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Pabrikan:</b></span>
        <input class="form-control" placeholder="Pabrikan" name="pabrikan" required>
      </div>

      <div class="input-group flex-nowrap mt-3">
          <span class="input-group-text" id="addon-wrapping"><b>No. Mesin:</b></span>
          <input class="form-control" placeholder="No. Mesin" name="no_mesin" required>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>No. Plat:</b></span>
        <input class="form-control" placeholder="No. Plat" name="no_plat" required>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Harga Sewa:</b></span>
        <input class="form-control" placeholder="Rupiah" name="harga" required>
      </div>

      <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" id="addon-wrapping"><b>Kapasitas Penumpang</b></span>
        <input class="form-control" placeholder="Jumlah kursi" name="jumlah_kursi" required>
      </div>

      <div class="mt-3">
          <label class="text-white">Upload Gambar</label>
          <input class="form-control rounded" type="file" placeholder="File Gambar" name="gambar_bus" required>
      </div>

      <div class="mt-3">
          <button type="submit" class="btn btn-primary">SAVE</button>
          <a href="TabelBus">
              <button type="button" class="btn btn-danger">BACK</button>
          </a>
      </div>
    </div>
  </form>
</div>
@endsection