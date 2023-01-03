<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<div class="col">
    <div class="row">
        <H3 class="text-center">Tabel Transaksi per Rute Halte</H3>
    </div>
    <div class="row mt-5">
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