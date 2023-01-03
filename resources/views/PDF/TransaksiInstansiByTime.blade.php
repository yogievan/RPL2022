<div>
    <H3>Dokument Transaksi Instansi Tanggal {{$day}}</H3>
</div>
<div class="numbers">
    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perhari</p>
    <h5 class="font-weight-bolder">
      {{$sumInstansiHarian}}
    </h5>
  </div>
<div class="mt-3">
    <p>Transaksi perbulan dan pertahun merupakan pendapatan yang diambil pertanggal {{$day}}</p>
    <p>sehingga data bersifat sementara.</p>
</div>
<div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Perbulan</h3>
    <h5 class="font-weight-bolder">
        {{$sumInstansiBulanan}}
      </h5>
      <p class="mb-0">
        Bulan :
        <span class="text-success text-sm font-weight-bolder">{{$month}}</span>
      </p>
  </div>
  <div class="numbers mt-3">
    <h3 class="text-sm mb-0 text-uppercase font-weight-bold">Total Transaksi Pertahun</h3>
    <h5 class="font-weight-bolder">
        {{$sumInstansiTahunan}}
      </h5>
      <p class="mb-0">
        Tahun :
        <span class="text-success text-sm font-weight-bolder">{{$year}}</span>
      </p>
  </div>