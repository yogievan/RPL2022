<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'BookingBus.com | Must Registration!')

{{-- Head --}}
@include('head.head')
{{-- Head --}}

<body class="g-sidenav-show bg-dark">

  <main class="main-content position-relative border-radius-lg ">

{{-- Content --}}
    <div class="container-fluid py-4">
        <div class="row">
            <nav class="navbar navbar-expand-lg rounded">
              <div class="col">
                <a class="navbar-brand text-white mb-0 h1 text-lg" href="/DashboardGuest">
                  <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
                  &nbsp BookingBus.com
                </a>
              </div>
            </nav>
        </div>
        <div>
            <a href="/formTiketShuttle" class="btn btn-primary mt-3">BACK</a>
        </div>
        @foreach ($jadwal as $no=> $jj)
            @foreach ($bus as $no=> $b)
            <div class="row mt-3">
                <div class="col">
                    <div class="row bg-light g-0 border rounded overflow-hidden position-relative">
                        <div class="col m-2">
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
                                <div class="col-md">
                                    <label>Jumlah Seat:{{$jj->jumlah_kursi}}</label><br>
                                    <label>Seat Tersedia:</label><br>
                                    <a href="/">
                                        <button type="submit" class="btn btn-danger btn-lg">Book Now!</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
{{-- Content --}}
    
{{-- Footer --}}
@include('footer.footer')
{{-- Footer --}}
</main>
</body>
</html>