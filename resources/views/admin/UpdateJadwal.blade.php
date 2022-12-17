@extends('layouts/mainAdmin')
@section('title', '.:Update Data Jadwal:.')
@section('header')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h4 class="font-weight-bolder text-white mb-0">Formulir Update Data Jadwal</h4>
    </div>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="/admin/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <form action="/updateDataJadwal/Update/{{ $jadwal -> id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col mt-3">
          <label class="text-white text-lg">ID Bus</label>
          <input type="text" name="id_bus" class="form-control" value="{{$jadwal -> id_bus}}">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col mt-3">
          <label class="text-white text-lg">Shuttle Mulai</label>
          <select id="inputBerangkat" class="form-control" name="shuttle_mulai">
            @foreach ($shuttle as $no => $sh)
              <option value="{{$sh -> nama_shuttle}}" {{$jadwal -> shuttle_mulai == $sh -> nama_shuttle ? 'selected':''}}>{{$sh -> nama_shuttle}}</option>
            @endforeach
          </select>
        </div>

        <div class="col mt-3">
          <label class="text-white text-lg">Shuttle Tujuan</label>
          <select id="inputBerangkat" class="form-control" name="shuttle_tujuan">
            @foreach ($shuttle as $no => $sh)
              <option value="{{$sh -> nama_shuttle}}" {{$jadwal -> shuttle_tujuan == $sh -> nama_shuttle ? 'selected':''}}>{{$sh -> nama_shuttle}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col mt-3">
          <label class="text-white text-lg">Jam Mulai</label>
          <select class="form-control" name="jam_mulai">
            <option value="06:00" {{$jadwal -> jam_mulai == '06:00' ? 'selected':''}}>06:00</option>
            <option value="06:30" {{$jadwal -> jam_mulai == '06:30' ? 'selected':''}}>06:30</option>
            <option value="07:00" {{$jadwal -> jam_mulai == '07:00' ? 'selected':''}}>07:00</option>
            <option value="07:30" {{$jadwal -> jam_mulai == '07:30' ? 'selected':''}}>07:30</option>
            <option value="08:00" {{$jadwal -> jam_mulai == '08:00' ? 'selected':''}}>08:00</option>
            <option value="08:30" {{$jadwal -> jam_mulai == '08:30' ? 'selected':''}}>08:30</option>
            <option value="09:00" {{$jadwal -> jam_mulai == '09:00' ? 'selected':''}}>09:00</option>
            <option value="09:30" {{$jadwal -> jam_mulai == '09:30' ? 'selected':''}}>09:30</option>
            <option value="10:00" {{$jadwal -> jam_mulai == '10:00' ? 'selected':''}}>10:00</option>
            <option value="10:30" {{$jadwal -> jam_mulai == '10:30' ? 'selected':''}}>10:30</option>
            <option value="11:00" {{$jadwal -> jam_mulai == '11:00' ? 'selected':''}}>11:00</option>
            <option value="11:30" {{$jadwal -> jam_mulai == '11:30' ? 'selected':''}}>11:30</option>
            <option value="12:00" {{$jadwal -> jam_mulai == '12:00' ? 'selected':''}}>12:00</option>
            <option value="12:30" {{$jadwal -> jam_mulai == '12:30' ? 'selected':''}}>12:30</option>
            <option value="13:00" {{$jadwal -> jam_mulai == '13:00' ? 'selected':''}}>13:00</option>
            <option value="13:30" {{$jadwal -> jam_mulai == '13:30' ? 'selected':''}}>13:30</option>
            <option value="14:00" {{$jadwal -> jam_mulai == '14:00' ? 'selected':''}}>14:00</option>
            <option value="14:30" {{$jadwal -> jam_mulai == '14:30' ? 'selected':''}}>14:30</option>
            <option value="15:00" {{$jadwal -> jam_mulai == '15:00' ? 'selected':''}}>15:00</option>
            <option value="15:30" {{$jadwal -> jam_mulai == '15:30' ? 'selected':''}}>15:30</option>
            <option value="16:00" {{$jadwal -> jam_mulai == '16:00' ? 'selected':''}}>16:00</option>
            <option value="16:30" {{$jadwal -> jam_mulai == '16:30' ? 'selected':''}}>16:30</option>
            <option value="17:00" {{$jadwal -> jam_mulai == '17:00' ? 'selected':''}}>17:00</option>
            <option value="17:30" {{$jadwal -> jam_mulai == '17:30' ? 'selected':''}}>17:30</option>
            <option value="18:00" {{$jadwal -> jam_mulai == '18:00' ? 'selected':''}}>18:00</option>
            <option value="18:30" {{$jadwal -> jam_mulai == '18:30' ? 'selected':''}}>18:30</option>
            <option value="19:00" {{$jadwal -> jam_mulai == '19:00' ? 'selected':''}}>19:00</option>
            <option value="19:30" {{$jadwal -> jam_mulai == '19:30' ? 'selected':''}}>19:30</option>
            <option value="20:00" {{$jadwal -> jam_mulai == '20:00' ? 'selected':''}}>20:00</option>
            <option value="20:30" {{$jadwal -> jam_mulai == '20:30' ? 'selected':''}}>20:30</option>
            <option value="21:00" {{$jadwal -> jam_mulai == '21:00' ? 'selected':''}}>21:00</option>
            <option value="21:30" {{$jadwal -> jam_mulai == '21:30' ? 'selected':''}}>21:30</option>
            <option value="22:00" {{$jadwal -> jam_mulai == '22:00' ? 'selected':''}}>22:00</option>
          </select>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Pilih Tanggal Berangkat</label>
            <input type="date" class="form-control" name="tgl_jadwal" value="{{$jadwal -> tgl_jadwal}}">
          </div>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Kapasitas Kursi</label>
            <select class="form-control" name="jumlah_kursi">
              <option value="30" {{$jadwal -> jumlah_kursi == '30' ? 'selected':''}}>30</option>
              <option value="60" {{$jadwal -> jumlah_kursi == '60' ? 'selected':''}}>60</option>
            </select>
          </div>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Jumlah Tiket</label>
            <input type="number" class="form-control" name="jumlah_tiket" value="{{$jadwal -> jumlah_tiket}}">
          </div>
        </div>

        <div class="col mt-3">
          <div class="form-group">
            <label class="text-white text-lg">Harga Tiket</label>
            <input type="number" class="form-control" name="harga" value="{{$jadwal -> harga}}">
          </div>
        </div>
      </div>

      <div class="mt-3">
          <button type="submit" class="btn btn-primary">SAVE</button>
          <a href="/backJadwal">
              <button type="button" class="btn btn-danger">BACK</button>
          </a>
      </div>
    </div>
  </form>
</div>
@endsection