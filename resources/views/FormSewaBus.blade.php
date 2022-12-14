<!DOCTYPE html>
<html lang="en">

{{-- title --}}
@section('title', 'Form Sewa Bus | Must Registration!')

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
        <div class="container-fluid mb-3 m-2 mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-1">
                        <a href="/DashboardGuest" class="btn btn-primary">BACK</a>
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
                                    <div class="row">
                                        <div class="col-2">
                                            <img class="rounded" src="{{url('/assets/img/Bus/'.$b -> gambar_bus)}}" alt="logo bus" width="220" height="120">
                                        </div>
                                        <div class="col">
                                            <label>Pabrikan Bus</label><br>
                                            <label class="text-lg">{{$b->pabrikan}}</label>
                                        </div>
                                        <div class="col">
                                            <label>Jumlah Kursi</label><br>
                                            <label class="text-lg">{{$b->jumlah_kursi}}</label>
                                        </div>
                                        <div class="col">
                                            <label>Harga Sewa Bus</label><br>
                                            <label class="text-lg">{{$b->harga}}</label>
                                        </div>
                                        <div class="col text-center m-auto">
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
            </div>
        </div>
    </div>
    {{-- Content --}}
    
    {{-- Footer --}}
    @include('footer.footer')
    {{-- Footer --}}
</main>
</body>
</html>