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
<div class="text-center"><h1>INVOICE SEWA BUS</h1></div>
<div class="container-fluid py-4 mt-5">
    <form>
      @csrf
      @method('PUT')
        <div class="card">
            <div class="card-body m-2">
              <div class="row mt-3">
                <div class="col">
                    <label class="text-dark">ID Transaksi</label>
                    <h4 class="text-lg text-dark" name="id">{{$instansi->id}}</h4>
                </div>
                <div class="col">
                    <label class="text-dark">Kode Bus</label>
                    <h2 class="text-lg text-dark" name="id_bus">{{$instansi->id_bus}}</h2>
                </div>
              </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="text-dark">Nama Pemesan</label>
                        <h2 class="text-lg text-dark" name="nama_user">{{$instansi->nama_user}}</h2>
                    </div>
                    <div class="col">
                        <label class="text-dark">Email</label>
                        <h2 class="text-lg text-dark" name="nama_user">{{$instansi->email}}</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="text-dark">Halte Keberangkatan</label>
                        <h2 class="text-dark" name="shuttle_asal">{{$instansi->kota_berangkat}}</h2>
                    </div>
                    <div class="col">
                        <label class="text-dark">Halte Tujuan</label>
                        <h2 class="text-dark" name="shuttle_tujuan">{{$instansi->kota_tujuan}}</h2>
                    </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                      <label class="text-dark">Tanggal Keberangkatan</label>
                      <h2 class="text-dark" name="tgl_jadwal">{{$instansi->tgl_keberangkatan}}</h2>
                  </div>
                  <div class="col">
                      <label class="text-dark">Tanggal Pengembalian</label>
                      <h2 class="text-dark" name="jam_mulai">{{$instansi->tgl_pengembalian}}</h2>
                  </div>
              </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="text-dark">Total Bayar</label>
                        <h2 class="text-dark text-bold" name="total_bayar">Rp. {{$instansi->total_bayar}}</h2>
                    </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                      <label class="text-dark">Keterangan Validasi</label>
                      <h2 class="text-dark text-bold" name="validasi">{{$instansi->validasi}}</h2>
                      <p>Tanggal Validasi: {{$instansi->updated_at}}</p>
                  </div>
              </div>
            </div>
        </div>
    </form>
</div>