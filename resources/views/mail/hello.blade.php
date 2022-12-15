<div class="card">
    <div class="card-body m-2">
      <div class="row mt-3">
        <div class="col">
            <label class="text-dark">Kode Bus</label>
            <h4 class="text-lg text-dark" name="id_bus">{{$pribadi->id_bus}}</h4>
        </div>
      </div>
        <div class="row mt-3">
            <div class="col">
                <label class="text-dark">Nama Pemesan</label>
                <h4 class="text-lg text-dark" name="nama_user">{{$pribadi->nama_user}}</h4>
            </div>
            <div class="col">
                <label class="text-dark">Email</label>
                <h4 class="text-lg text-dark" name="nama_user">{{$pribadi->email}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="text-dark">Halte Keberangkatan</label>
                <h4 class="text-dark" name="shuttle_asal">{{$pribadi->shuttle_asal}}</h4>
            </div>
            <div class="col">
                <label class="text-dark">Halte Tujuan</label>
                <h4 class="text-dark" name="shuttle_tujuan">{{$pribadi->shuttle_tujuan}}</h4>
            </div>
        </div>
          <div class="row mt-3">
              <div class="col">
                  <label class="text-dark">Tanggal Keberangkatan</label>
                  <h4 class="text-dark" name="tgl_jadwal">{{$pribadi->tgl_jadwal}}</h4>
              </div>
              <div class="col">
                  <label class="text-dark">Jam Keberangkatan</label>
                  <h4 class="text-dark" name="jam_mulai">{{$pribadi->jam_mulai}}</h4>
              </div>
          </div>
          <div class="row mt-3">
              <div class="col">
                  <label class="text-dark">Total Bayar</label>
                  <h3 class="text-dark text-bold" name="total_bayar">Rp. {{$pribadi->total_bayar}}</h3>
              </div>
          </div>
          <div class="row mt-3">
              <div class="col">
                  <label class="text-dark">Keterangan Validasi</label>
                  <h3 class="text-dark text-bold" name="validasi">{{$pribadi->validasi}}</h3>
              </div>
          </div>
    </div>
</div>