<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $header }} </h5>

      <!-- Vertical Form -->
      @if (isset($pendataan))
        <form class="row g-3" action="/pendataan/{{ $pendataan->id }}" method="POST">
        @method('PUT')
      @else
      <form class="row g-3" action="/pendataan" method="POST" enctype="multipart/form-data">
      @endif
      @csrf

        {{-- <div id="reader" width="600px"></div>
        <div class="col-6">
          <label for="pendaftran_id" class="form-label">Nomor Uji Kendaraan (STUK)</label>
            <input type="text" name="pendaftran_id" value="{{ isset($pendataan) ? $pendataan->namaPK : old('namaPK') }}" class="form-control" id="pendaftran_id">
          </div> --}}
        <div class="col-6">
          <label for="pendaftaran_id" class="form-label">Nomor Uji Kendaraan (STUK)</label>
          <select name="pendaftaran_id" id="pendaftaran_id" class="form-select" aria-label="Default select example" data-live-search="true">
            <option value="">Pilih</option>
            @foreach ($pendaftarans as $item)
              <option value="{{ $item->id }}" {{ old('pendaftaran_id', $pendataan->pendaftaran_id) == $item->id ? 'selected' : '' }}>{{ $item->no_uji }}</option>  
            @endforeach
          </select>  
        </div>
        <div class="col-6">
          <label for="no_reg_kendaraan" class="form-label">Nomor Registrasi Kendaraan</label>
          <input type="text" class="form-control @error('no_reg_kendaraan') is-invalid @enderror" value="{{ $pendataan->pendaftaran->no_reg_kendaraan }}"  id="no_reg_kendaraan" disabled >
          @error('no_reg_kendaraan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-6">
          <label for="namaPK" class="form-label">Nama Pemilik Kendaraan</label>
          <input type="text" class="form-control @error('namaPK') is-invalid @enderror" value="{{ $pendataan->pendaftaran->namaPK }}"  id="namaPK" disabled >
          @error('namaPK')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-6">
          <label for="alamatPK" class="form-label">Alamat Pemilik Kendaraan</label>
          <input type="text" name="alamatPK" class="form-control @error('alamatPK') is-invalid @enderror" value="{{ $pendataan->pendaftaran->alamatPK }}" id="alamatPK" disabled>
          @error('alamatPK')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-6">
          <label for="jbi" class="form-label">JBI / JBKI</label>
          <input type="text" name="jbi" class="form-control @error('jbi') is-invalid @enderror" value="{{ $pendataan->pendaftaran->jbi }}" id="jbi" disabled>
          @error('jbi')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-6">
          <label for="berat" class="form-label">Berat Kendaraan</label>
          <div class="input-group">
            <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->berat : old('berat') }}" id="berat">
            <span class="input-group-text">Kg</span>
            @error('berat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <label for="kbbk" class="form-label">Kelebihan Berat Kendaraan (Kg)</label>
          <div class="input-group">
            <input type="number" name="kbbk" class="form-control @error('kbbk') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kbbk : old('kbbk') }}" id="kbbk">
            <span class="input-group-text">Kg</span>
            @error('kbbk')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <label for="kbbp" class="form-label">Kelebihan Berat Kendaraan (%)</label>
          <div class="input-group">
            <input type="number" name="kbbp" class="form-control @error('kbbp') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kbbp : old('kbbp') }}" id="kbbp">
            <span class="input-group-text">%</span>
            @error('kbbp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <label for="masa" class="form-label">Masa Berlaku</label>
          <div class="input-group mb-3">
            <input type="date" name="tgl_sertifikat" class="form-control @error('tgl_sertifikat') is-invalid @enderror" value="{{ $pendataan->pendaftaran->tgl_sertifikat }}" id="masa1" disabled>
            <span class="input-group-text">Sampai</span>
            <input type="date" name="masa_berlaku" class="form-control @error('masa_berlaku') is-invalid @enderror" value="{{ $pendataan->pendaftaran->masa_berlaku }}" id="masa2" disabled>
          </div>
        </div>
        <div class="col-6">
          <label for="jenis" class="form-label">Jenis Kendaraan</label>
          <input type="text" name="jenis" class="form-control  @error('jenis') is-invalid @enderror" value="{{ $pendataan->pendaftaran->jenis }}" id="jenis" disabled>
        </div>

        <h6 class="card-title pb-0">Cek Dimensi </h6>
        <div class="col-4">
          <label for="std_panjang" class="form-label">Std Panjang</label>
          <div class="input-group">
            <input type="text" name="std_panjang" class="form-control @error('std_panjang') is-invalid @enderror" value="{{ $pendataan->pendaftaran->panjang }}" id="std_panjang" disabled>
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="panjang" class="form-label">Panjang</label>
          <div class="input-group">
            <input type="text" name="panjang" class="form-control @error('panjang') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->panjang : old('panjang') }}" id="panjang">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="kel_panjang" class="form-label">Kelebihan Panjang</label>
          <div class="input-group">
            <input type="text" name="kel_panjang" class="form-control @error('kel_panjang') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kel_panjang : old('kel_panjang') }}" id="kel_panjang">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="std_lebar" class="form-label">Std Lebar</label>
          <div class="input-group">
            <input type="text" name="std_lebar" class="form-control @error('std_lebar') is-invalid @enderror" value="{{ $pendataan->pendaftaran->lebar }}" id="std_lebar" disabled>
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="lebar" class="form-label">Lebar</label>
          <div class="input-group">
            <input type="text" name="lebar" class="form-control @error('lebar') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->lebar : old('lebar') }}" id="lebar" >
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="kel_lebar" class="form-label">Kelebihan Lebar</label>
          <div class="input-group">
            <input type="text" name="kel_lebar" class="form-control @error('kel_lebar') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kel_lebar : old('kel_lebar') }}" id="kel_lebar">
            <span class="input-group-text">mm</span>
          </div>
        </div>
         <div class="col-4">
          <label for="std_tinggi" class="form-label">Std Tinggi</label>
          <div class="input-group">
            <input type="text" name="std_tinggi" class="form-control  @error('std_tinggi') is-invalid @enderror" value="{{ $pendataan->pendaftaran->tinggi }}" id="std_tinggi" disabled>
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="tinggi" class="form-label">Tinggi</label>
          <div class="input-group">
            <input type="text" name="tinggi" class="form-control  @error('tinggi') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->tinggi : old('tinggi') }}" id="tinggi">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="kel_tinggi" class="form-label">Kelebihan Tinggi</label>
          <div class="input-group">
            <input type="text" name="kel_tinggi" class="form-control @error('kel_tinggi') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kel_tinggi : old('kel_tinggi') }}" id="kel_tinggi">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="std_foh" class="form-label">Std FOH</label>
          <div class="input-group">
            <input type="text" name="std_foh" class="form-control  @error('std_foh') is-invalid @enderror" value="{{ $pendataan->pendaftaran->julur_dpn }}" id="std_foh" disabled>
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="foh" class="form-label">FOH</label>
          <div class="input-group">
            <input type="text" name="foh" class="form-control @error('foh') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->foh : old('foh') }}" id="foh">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="kel_foh" class="form-label">Kelebihan FOH</label>
          <div class="input-group">
            <input type="text" name="kel_foh" class="form-control  @error('kel_foh') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kel_foh : old('kel_foh') }}" id="kel_foh" >
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="std_roh" class="form-label">Std ROH</label>
          <div class="input-group">
            <input type="text" name="std_roh" class="form-control  @error('std_roh') is-invalid @enderror" value="{{ $pendataan->pendaftaran->julur_blk }}" id="std_roh" disabled>
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="roh" class="form-label">ROH</label>
          <div class="input-group">
            <input type="text" name="roh" class="form-control @error('roh') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->roh : old('roh') }}" id="roh">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-4">
          <label for="kel_roh" class="form-label">Kelebihan ROH</label>
          <div class="input-group mb-3">
            <input type="text" name="kel_roh" class="form-control @error('kel_roh') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kel_roh : old('kel_roh') }}" id="kel_roh">
            <span class="input-group-text">mm</span>
          </div>
        </div>
        <div class="col-12">
          <label for="mengangkut" class="form-label">Mengangkut</label>
          <input type="text" name="mengangkut" class="form-control @error('mengangkut') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->mengangkut : old('mengangkut') }}" id="mengangkut">
        </div>
        <div class="col-6">
          <label for="dari" class="form-label">Dari</label>
          <input type="text" name="dari" class="form-control @error('dari') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->dari : old('dari') }}" id="dari">
        </div>
        <div class="col-6">
          <label for="tujuan" class="form-label">Tujuan</label>
          <input type="text" name="tujuan" class="form-control  @error('tujuan') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->tujuan : old('tujuan') }}" id="tujuan">
        </div>
        <div class="col-6">
          <label for="pengemudi" class="form-label">Pengemudi</label>
          <input type="text" name="pengemudi" class="form-control @error('pengemudi') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->pengemudi : old('pengemudi') }}" id="pengemudi">
        </div>
        <div class="col-6">
          <label for="sim" class="form-label">Jenis SIM</label>
          <select class="form-select" name="sim" aria-label="Default select example">
            <option value="" {{ $pendataan->sim == "" ? 'selected' : '' }}>Tidak Ada SIM</option>
            <option value="A" {{ $pendataan->sim == "A" ? 'selected' : '' }}>A</option>
            <option value="B1" {{ $pendataan->sim == "B1" ? 'selected' : '' }}>B1</option>
            <option value="B1 Umum" {{ $pendataan->sim == "B1 Umum" ? 'selected' : '' }}>B1 Umum</option>
            <option value="B2" {{ $pendataan->sim == "B2" ? 'selected' : '' }}>B2</option>
            <option value="B2 Umum" {{ $pendataan->sim == "B2 Umum" ? 'selected' : '' }}>B2 Umum</option>
          </select>
        </div>
        <div class="col-12">
          @php
            $decode = json_decode($pendataan->kelengkapan_berkas);
          @endphp  
          <label for="kelengkapan_berkas" class="form-label">Kelengkapan Berkas</label>
          <div class="form-check">
            <input class="form-check-input" name="kelengkapan_berkas[]" value="SIM" @if (in_array("SIM", $decode)) checked @endif type="checkbox" id="sim">            
            <label class="form-check-label" for="sim">
              SIM
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="kelengkapan_berkas[]" value="STNK" @if (in_array("STNK", $decode)) checked @endif type="checkbox" id="stnk">
            <label class="form-check-label" for="stnk">
              STNK
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="kelengkapan_berkas[]" value="Buku Uji" @if (in_array("Buku Uji", $decode)) checked @endif type="checkbox" id="buku_uji">
            <label class="form-check-label" for="buku_uji">
              Buku Uji
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="kelengkapan_berkas[]" value="Surat Jalan" @if (in_array("Surat Jalan", $decode)) checked @endif type="checkbox" id="surat_jalan">
            <label class="form-check-label" for="surat_jalan">
              Surat Jalan
            </label>
          </div> 
        </div>
        <div class="col-12">
          <label for="pelanggaran" name class="form-label">Pelanggaran</label>
          <select name="pelanggaran" class="form-select" aria-label="Default select example">
            <option value="Tidak Melanggar" {{ $pendataan->pelanggaran == "Tidak Melanggar" ? 'selected' : '' }}>Tidak Melanggar</option>
            <option value="Melanggar" {{ $pendataan->pelanggaran == "Melanggar" ? 'selected' : '' }}>Melanggar</option>
          </select>
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
</div>
</div>
