<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl mt-3 mb-10 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-0 d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="DashboardAdmin">
        <img src="../assets/img/bus-solid.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">BookingBus.com</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($cek == 'dashboard') ? 'active':''}}" href="/DashboardAdmin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'validasiTransaksi') ? 'active':''}}" href="/TabelTransaksi">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-key-25 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Validasi Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'tabelUser') ? 'active':''}}" href="/TabelUser">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'tabelBus') ? 'active':''}}" href="/TabelBus">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bus-front-12 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Bus</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'tabelSifat') ? 'active':''}}" href="/TabelSifat">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-id-card text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Sifat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'tabelShuttle') ? 'active':''}}" href="/TabelShuttle">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-building text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Shuttle</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($cek == 'tabelJadwal') ? 'active':''}}" href="/TabelJadwal">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-calendar-alt text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Jadwal Bus Shuttle</span>
          </a>
        </li>
      </ul>
    </div>
</aside>