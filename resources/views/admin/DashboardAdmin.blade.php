<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bus-solid-light.png">
  <link rel="icon" type="image/png" href="../assets/img/bus-solid-light.png">
  <title> .:Dashboard Admin:.</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-dark">
    {{-- sidebar --}}
    @include('navAdmin.sidebar')
    {{-- side bar --}}

  <main class="main-content position-relative border-radius-lg ">
    {{-- header --}}
    @include('navAdmin.header')
    {{-- Header --}}

    {{-- Content --}}
    <div class="container-fluid py-4">
      {{-- start analisis tabel pribadi --}}
      <div class="row mt-0">
        <div class="row">
          <div class="col">
            <h4 class="text-white">Transaksi Pemesanan Tiket</h4>
          </div>
          <div class="col-2">
            <a href="/transaksiPribadiByTime/eksportToPDF">
              <button class="btn btn-success btn-block btn-lg">Export to PDF</button>
            </a>
          </div>
        </div>
        <div class="row mt-1">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</p>
                      <h5 class="font-weight-bolder">
                        {{$sumPribadiHarian}}
                      </h5>
                      <p class="mb-0">
                        Tanggal :
                        <span class="text-success text-sm font-weight-bolder">{{$day}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</p>
                      <h5 class="font-weight-bolder">
                        {{$sumPribadiBulanan}}
                      </h5>
                      <p class="mb-0">
                        Bulan :
                        <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</p>
                      <h5 class="font-weight-bolder">
                        {{$sumPribadiTahunan}}
                      </h5>
                      <p class="mb-0">
                        Tahun :
                        <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Masuk/Berhasil</p>
                      <h5 class="font-weight-bolder">
                        {{$sumPribadi}}
                      </h5>
                      <p class="mb-0">
                        Total Transaksi 1 Tahun
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      {{-- end analisis tabel pribadi --}}
    
      {{-- start analisis rute --}}
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <div class="row">
                <div class="col-3">
                  <h5 class="text-capitalize">Rute Perjalanan Bus</h5>
                </div>
                <div class="col">
                  <p></p>
                </div>
                <div class="col-1">
                  <button class="btn btn-success">Export to PDF</button>
                </div>
              </div>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="col-1 text-center"><b>No</b></th>
                      <th scope="col" class="text-center"><b>Rute Halte</b></th>
                      <th scope="col" class="text-center"><b>Total Transaksi Perjalanan</b></th>
                      <th scope="col" class="text-center"><b>Total Pembayaran</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr >
                    <th scope="row" class="text-center">1</th>
                    <td>Halte Adisutjipto</td>
                    <td class="text-center">{{$HalteAdisutjipto}}</td>
                    <td class="text-center">{{$SumHalteAdisutjipto}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">2</th>
                    <td>Halte Bethesda</td>
                    <td class="text-center">{{$HalteBethesda}}</td>
                    <td class="text-center">{{$SumHalteBethesda}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">3</th>
                    <td>Halte Empire XXI</td>
                    <td class="text-center">{{$HalteEmpireXXI}}</td>
                    <td class="text-center">{{$SumHalteEmpireXXI}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">4</th>
                    <td>Halte Janti Selatan</td>
                    <td class="text-center">{{$HalteJantiSelatan}}</td>
                    <td class="text-center">{{$SumHalteJantiSelatan}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">5</th>
                    <td>Halte Kalasan</td>
                    <td class="text-center">{{$HalteKalasan}}</td>
                    <td class="text-center">{{$SumHalteKalasan}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">6</th>
                    <td>Halte Malioboro</td>
                    <td class="text-center">{{$HalteMalioboro}}</td>
                    <td class="text-center">{{$SumHalteMalioboro}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">7</th>
                    <td>Halte MCD Sudirman</td>
                    <td class="text-center">{{$HalteMCDSudirman}}</td>
                    <td class="text-center">{{$SumHalteMCDSudirman}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">8</th>
                    <td>Halte Plaza Ambarukmo</td>
                    <td class="text-center">{{$HaltePlazaAmbarukmo}}</td>
                    <td class="text-center">{{$SumHaltePlazaAmbarukmo}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">9</th>
                    <td>Halte Prambanan</td>
                    <td class="text-center">{{$HaltePrambanan}}</td>
                    <td class="text-center">{{$SumHaltePrambanan}}</td>
                  </tr>
                  <tr >
                    <th scope="row" class="text-center">10</th>
                    <td>Halte Tugu Jogja</td>
                    <td class="text-center">{{$HalteTuguJogja}}</td>
                    <td class="text-center">{{$SumHalteTuguJogja}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      {{-- end analisis rute --}}
    
      {{-- start analisis tabel instansi --}}
      <div class="row mt-5">
        <div class="row">
          <div class="col-3">
            <h4 class="text-white">Transaksi Pemesanan Bus</h4>
          </div>
          <div class="col"></div>
          <div class="col-2">
            <a href="/transaksiInstansiByTime/eksportToPDF">
              <button class="btn btn-success btn-lg">Export to PDF</button>
            </a>
          </div>
        </div>
        <div class="row mt-1">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</p>
                      <h5 class="font-weight-bolder">
                        {{$sumInstansiHarian}}
                      </h5>
                      <p class="mb-0">
                        Tanggal :
                        <span class="text-success text-sm font-weight-bolder">{{$day}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</p>
                      <h5 class="font-weight-bolder">
                        {{$sumInstansiBulanan}}
                      </h5>
                      <p class="mb-0">
                        Bulan :
                        <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</p>
                      <h5 class="font-weight-bolder">
                        {{$sumInstansiTahunan}}
                      </h5>
                      <p class="mb-0">
                        Tahun :
                        <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Masuk/Berhasil</p>
                      <h5 class="font-weight-bolder">
                        {{$sumInstansi}}
                      </h5>
                      <p class="mb-0">
                        Total Transaksi 1 Tahun
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      {{-- end analisis tabel instansi --}}
    </div>
    {{-- Content --}}
    
    {{-- Footer --}}
    @include('footer.footer')
    {{-- Footer --}}
  </main>
</body>
</html>