<div>
    <H3>Dokument Transaksi Pribadi Tanggal {{$day}}</H3>
</div>
<div class="numbers">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</h3>
    <h5 class="font-weight-bolder">
      {{$sumPribadiHarian}}
    </h5>
</div>
<div class="mt-3">
    <p>Transaksi perbulan dan pertahun merupakan pendapatan yang diambil pertanggal {{$day}}</p>
    <p>sehingga data bersifat sementara.</p>
</div>
<div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</h3>
    <h5 class="font-weight-bolder">
      {{$sumPribadiBulanan}}
    </h5>
    <p class="mb-0">
      Bulan :
      <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
    </p>
  </div>
  <div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</h3>
    <h5 class="font-weight-bolder">
      {{$sumPribadiTahunan}}
    </h5>
    <p class="mb-0">
      Tahun :
      <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
    </p>
  </div>