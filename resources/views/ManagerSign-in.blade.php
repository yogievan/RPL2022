<!DOCTYPE html>
<html lang="en">

{{-- title --}}
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bus-solid-light.png">
<link rel="icon" type="image/png" href="../assets/img/bus-solid-light.png">
<title> 
  @yield('title','.:Manager Sign-In!:.')
</title>
{{-- title --}}

{{-- <Head> --}}
@include('head.head')
{{-- </Head> --}}

<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Manager Sign In</h4>
                  <p class="mb-0">Enter your Username and password to sign in</p>
                </div>
                <div class="card-body">
                  <form action="/manager/ceklogin" method="POST">
                    @csrf 
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required autofocus>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="position-relative text-center">
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../assets/img/photo-1544620347-c4fd4a3d5957.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-4"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Aplikasi Pemesanan Shuttle Bus</h4>
                <p class="text-white position-relative">GO TO EVERY WHERE, ENJOY LIFE.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>