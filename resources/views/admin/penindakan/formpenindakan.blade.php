 <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $header }} </h5>
        
        <!-- Vertical Form -->
        @if (isset($penindakan))
          <form class="row g-3" action="/penindakan/{{ $penindakan->id }}" method="POST">
          @method('PUT')
        @else
        <form class="row g-3" action="/penindakan" method="POST" enctype="multipart/form-data">
        @endif
          @csrf
          {{-- <h6 class="card-subtitle mt-5 font-weight-bold text-dark">- IDENTITAS KENDARAAN BERMOTOR -</h6> --}}
          <div class="col-6">
            <label for="pendataan_id" class="form-label">Nomor Uji Kendaraan (STUK)</label>
            <select name="pendataan_id" id="pendataan_id" class="form-select" aria-label="Default select example">
              <option value=""> Pilih </option>
              @foreach ($pendataans as $item)
                <option value="{{ $item->id }}">{{ $item->pendaftaran->no_uji }}</option>  
              @endforeach
            </select>
          </div>
          <div class="col-6">
            <label for="pengemudi" class="form-label">Nama Pengendara</label>
            <input type="text" name="pengemudi" class="form-control @error('pengemudi') is-invalid @enderror" value="{{ isset($penindakan) ? $penindakan->pengemudi : old('pengemudi') }}" id="pengemudi">
            @error('pengemudi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="jns_pelanggaran" class="form-label">Jenis Pelanggaran</label>
              <div class="form-check">
                <input class="form-check-input" name="jns_pelanggaran[]" value="Daya Angkut Muatan (Over Loading)" type="checkbox" id="overLoading">
                <label class="form-check-label" for="overLoading">
                  Daya Angkut Muatan (Over Loading)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="jns_pelanggaran[]" value="Dimensi Kendaraan (Over Dimension)" type="checkbox" id="overDimension">
                <label class="form-check-label" for="overDimension">
                  Dimensi Kendaraan (Over Dimension)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="jns_pelanggaran[]" value="Administrasi Dokumen Kendaraan" type="checkbox" id="administrasi">
                <label class="form-check-label" for="administrasi">
                  Administrasi Dokumen Kendaraan
                </label>
              </div>
          </div>


          <div class="col-6">
            <label for="jns_penindakan" class="form-label">Jenis Penindakan</label>
            <div class="form-check">
              <input class="form-check-input" name="jns_penindakan[]" value="Transfer Muatan" type="checkbox" id="transferMuatan">
              <label class="form-check-label" for="transferMuatan">
                Transfer Muatan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="jns_penindakan[]" value="Penyesuaian Dimensi (Pemotongan)" type="checkbox" id="pemotongan">
              <label class="form-check-label" for="pemotongan">
                Penyesuaian Dimensi (Pemotongan)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="jns_penindakan[]" value="Tilang dan Sita Buku KIR" type="checkbox" id="tilang">
              <label class="form-check-label" for="tilang">
                Tilang dan Sita Buku KIR
              </label>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
</div>
