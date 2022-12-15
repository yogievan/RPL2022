<!doctype html>
<html lang="en">

  {{-- title --}}
  @section('title', 'Setting Profile | User')

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
                <a class="navbar-brand text-white mb-0 h1 text-lg" href="/DashboardCustomer">
                  <img src="../assets/img/bus-solid-light.png" width="40" height="32" class="navbar-brand-img h-100" alt="main_logo">
                  &nbsp BookingBus.com
                </a>
              </div>
              <div class="col-2">
                <a href="/BookingLog" class="text-white mb-0 h1 text-lg">Riwayat Pemesanan</i></a>
              </div>
              <div class="col-2">
                <a href="/profileUser/{{$user -> id}}"><i class="fas fa-user-circle text-lg text-white mb-0 h1 text-lg">&nbsp {{Auth::user() -> nama_user ?? ''}} </i></a>
              </div>
              <div class="col-1">
                <a href="/logout" class="btn btn-danger m-1">Logout</a>
              </div>
            </nav>
          </div>
          
          <div class="card">
            <h3 class="text-center m-3">Setting Profile</h3>
            <p class="text-danger m-3">Note: *Isikan data sesuai ketentuan yang ada!</p>
            <form action="update/user/{{$user -> id}}" method="POST">
              <div class="row m-3">
                <div class="col mt-3">
                  <label class="text-dark text-lg">Nama Pengguna</label>
                  <input type="text" class="form-control" name="nama_pengguna" value="{{$user -> nama_pengguna}}">
                </div>
                <div class="col mt-3">
                  <label class="text-dark text-lg">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" value="{{$user -> tgl_lahir}}">
                </div>
              </div>

              <div class="row m-3">
                <div class="col mt-3">
                  <label class="text-dark text-lg">Email</label>
                  <input type="email" class="form-control" placeholder="example@example.com" name="email" value="{{$user -> email}}">
                </div>
                <div class="col mt-3">
                  <label class="text-dark text-lg">No. Telp</label>
                  <input type="text" class="form-control" placeholder="08XXXXXXXXXX" name="no_telp" value="{{$user -> no_telp}}">
                </div>
              </div>

              <div class="row m-3">
                <div class="form-group">
                  <label class="text-dark text-lg">Alamat</label>
                  <textarea class="form-control" name="alamat">{{$user -> alamat}}</textarea>
                </div>
              </div>
  
              <div class="row m-3">
                <div class="mt-3">
                  <button type="button" class="btn btn-primary">SAVE</button>
                  <a href="/DashboardCustomer">
                      <button type="button" class="btn btn-danger">BACK</button>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
        {{-- Content --}}

        {{-- Footer --}}
        @include('footer.footer')
        {{-- Footer --}}
    </main>
  </body>
</html>