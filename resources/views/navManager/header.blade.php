<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div>
      <h6 class="font-weight-bolder text-white mb-0">Selamat Datang! {{Auth::user() -> nama_user ?? ''}} TERCINTA</h6>
    </div>
    
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
      <a href="/manager/logout"><button class="btn btn-danger">LOGOUT</button></a>
    </div>
  </div>
</nav>