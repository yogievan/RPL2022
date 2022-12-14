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
      <div class="p-5 mb-4 bg-light rounded-3 mt-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Selamat Datang Di BookingBus.com</h1>
          <p class="col-md-8 fs-4">BookingBus.com bergerak dalam bidang jasa pemesanan tiket bus perorangan atau sewa satu bus.</p>
          <p class="col-md-8 fs-4">Enjoy Your Trip With BookingBus.com</p>
          <a href="/"><button class="text-lg btn btn-primary btn-lg" type="button">Registrasi</button></a>
        </div>
      </div>

      <div class="row align-items-md-stretch mt-3">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-warning rounded-3">
          <h2>Form Sewa Bus</h2>
          <p>Pemesanan Bus untuk Institusi dengan pesanan 1 Bus Besar.</p>
          <a href="/formSewaBus"><button class="btn btn-outline-light" type="button">Go to <u>FORM</u></button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Form Tiket Bus</h2>
          <p>Tiket bus yang memiliki rute diyogyakarta, digunakan untuk memutari kota yogyakarta.</p>
          <a href="/formTiketShuttle"><button class="btn btn-outline-warning" type="button">Go to <u>FORM</u></button></a>
        </div>
      </div>
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