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

<div>
    <H3 class="text-center">Dokument Transaksi Pribadi Tanggal {{$day}}</H3>
</div>
<div class="numbers mt-5">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</h3>
    <h5 class="font-weight-bolder">
      Rp. {{$sumPribadiHarian}}
    </h5>
</div>
<div class="mt-3">
    <p>Transaksi perbulan dan pertahun merupakan pendapatan yang diambil pertanggal {{$day}}</p>
    <p>sehingga data bersifat sementara.</p>
</div>
<div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</h3>
    <h5 class="font-weight-bolder">
      Rp. {{$sumPribadiBulanan}}
    </h5>
    <p class="mb-0">
      Bulan :
      <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
    </p>
  </div>
  <div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</h3>
    <h5 class="font-weight-bolder">
      Rp. {{$sumPribadiTahunan}}
    </h5>
    <p class="mb-0">
      Tahun :
      <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
    </p>
  </div>