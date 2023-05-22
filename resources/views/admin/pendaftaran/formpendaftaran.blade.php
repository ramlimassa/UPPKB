 <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $header }} </h5>
        
        <!-- Vertical Form -->
        @if (isset($pendaftaran))
          <form class="row g-3" action="/pendaftaran/{{ $pendaftaran->id }}" method="POST">
          @method('PUT')
        @else
        <form class="row g-3" action="/pendaftaran" method="POST" enctype="multipart/form-data">
        @endif
          @csrf
          <h6 class="card-subtitle mt-3 font-weight-bold text-dark">- IDENTITAS PEMILIK KENDARAAN -</h6>
          <div class="col-6">
            <label for="namaPK" class="form-label">Nama Pemilik Kendaraan</label>
            <input type="text" name="namaPK" class="form-control @error('namaPK') is-invalid @enderror" required autofocus value="{{ isset($pendaftaran) ? $pendaftaran->namaPK : old('namaPK') }}"  id="namaPK" >
            @error('namaPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="alamatPK" class="form-label">Alamat Pemilik Kendaraan</label>
            <input type="text" name="alamatPK" class="form-control @error('alamatPK') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->alamatPK : old('alamatPK') }}" id="alamatPK">
            @error('alamatPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <h6 class="card-subtitle mt-5 font-weight-bold text-dark">- IDENTITAS KENDARAAN BERMOTOR -</h6>
          <div class="col-6">
            <label for="no_uji" class="form-label">Nomor Uji Kendaraan</label>
            <input type="text" name="no_uji" class="form-control @error('no_uji') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->no_uji : old('no_uji') }}" id="no_uji">
            @error('no_uji')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="no_sertifikat" class="form-label">Nomor Sertifikat Registrasi</label>
            <input type="text" name="no_sertifikat" class="form-control @error('no_sertifikat') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->no_sertifikat : old('no_sertifikat') }}" id="no_sertifikat">
            @error('no_sertifikat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="tgl_sertifikat" class="form-label">Tanggal Sertifikat Registrasi</label>
            <input type="date" name="tgl_sertifikat" class="form-control @error('tgl_sertifikat') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->tgl_sertifikat : old('tgl_sertifikat') }}" id="tgl_sertifikat">
            @error('tgl_sertifikat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="masa_berlaku" class="form-label">Masa Berlaku Uji Berkala</label>
            <input type="date" name="masa_berlaku" class="form-control @error('masa_berlaku') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->masa_berlaku : old('masa_berlaku') }}" id="masa_berlaku">
            @error('masa_berlaku')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="no_reg_kendaraan" class="form-label">Nomor Registrasi Kendaraan</label>
            <input type="text" name="no_reg_kendaraan" class="form-control @error('no_reg_kendaraan') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->no_reg_kendaraan : old('no_reg_kendaraan') }}" id="no_reg_kendaraan">
            @error('no_reg_kendaraan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="no_rangk_kendaraan" class="form-label">Nomor Rangka Kendaraan</label>
            <input type="text" name="no_rangk_kendaraan" class="form-control @error('no_rangk_kendaraan') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->no_rangk_kendaraan : old('no_rangk_kendaraan') }}" id="no_rangk_kendaraan">
            @error('no_rangk_kendaraan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="no_mtr_penggerak" class="form-label">Nomor Motor Penggerak</label>
            <input type="text" name="no_mtr_penggerak" class="form-control @error('no_mtr_penggerak') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->no_mtr_penggerak : old('no_mtr_penggerak') }}" id="no_mtr_penggerak">
            @error('no_mtr_penggerak')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <h6 class="card-subtitle mt-5 font-weight-bold text-dark">- SPESIFIKASI TEKNIS KENDARAAN BERMOTOR -</h6>
          <div class="col-4">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->jenis : old('jenis') }}" id="jenis">
            @error('jenis')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="tipe" class="form-label">Merk/Tipe</label>
            <input type="text" name="tipe" class="form-control @error('tipe') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->tipe : old('tipe') }}" id="tipe">
            @error('tipe')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="tahun_pemb" class="form-label">Tahun Pembuatan/Perakitan</label>
            <input type="number" name="tahun_pemb" class="form-control @error('tahun_pemb') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->tahun_pemb : old('tahun_pemb') }}" id="tahun_pemb">
            @error('tahun_pemb')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="bahan_bakar" class="form-label">Bahan Bakar/Sumber Energi</label>
            <input type="text" name="bahan_bakar" class="form-control @error('bahan_bakar') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->bahan_bakar : old('bahan_bakar') }}" id="bahan_bakar">
            @error('bahan_bakar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="isi_silinder" class="form-label">Isi Silinder</label>
            <input type="text" name="isi_silinder" class="form-control @error('isi_silinder') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->isi_silinder : old('isi_silinder') }}" id="isi_silinder">
            @error('isi_silinder')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="daya_motor" class="form-label">Daya Motor</label>
            <input type="text" name="daya_motor" class="form-control @error('daya_motor') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->daya_motor : old('daya_motor') }}" id="daya_motor">
            @error('daya_motor')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="ukuran_ban" class="form-label">Ukuran Ban</label>
            <input type="text" name="ukuran_ban" class="form-control @error('ukuran_ban') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->ukuran_ban : old('ukuran_ban') }}" id="ukuran_ban">
            @error('ukuran_ban')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="konfigurasi_sumbu" class="form-label">Konfigurasi Sumbu</label>
            <input type="text" name="konfigurasi_sumbu" class="form-control @error('konfigurasi_sumbu') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->konfigurasi_sumbu : old('konfigurasi_sumbu') }}" id="konfigurasi_sumbu">
            @error('konfigurasi_sumbu')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="berat_kosong_kendaraan" class="form-label">Berat Kosong Kendaraan</label>
            <input type="number" name="berat_kosong_kendaraan" class="form-control @error('berat_kosong_kendaraan') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->berat_kosong_kendaraan : old('berat_kosong_kendaraan') }}" id="berat_kosong_kendaraan">
            @error('berat_kosong_kendaraan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <label class="mt-5 font-weight-bold text-dark">Dimensi Utama Kendaraan Bermotor</label>
          <div class="col-4">
            <label for="panjang" class="form-label">Panjang</label>
            <div class="input-group">
              <input type="number" name="panjang" class="form-control @error('panjang') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->panjang : old('panjang') }}" id="panjang">
              <span class="input-group-text">mm</span>
            </div>
            @error('panjang')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="lebar" class="form-label">Lebar</label>
            <div class="input-group">
              <input type="number" name="lebar" class="form-control @error('lebar') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->lebar : old('lebar') }}" id="lebar">
              <span class="input-group-text">mm</span>
            </div>
            @error('lebar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="tinggi" class="form-label">Tinggi</label>
            <div class="input-group">
              <input type="number" name="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->tinggi : old('tinggi') }}" id="tinggi">
              <span class="input-group-text">mm</span>
            </div>
            @error('tinggi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="julur_dpn" class="form-label">Julur Depan</label>
            <div class="input-group">
              <input type="number" name="julur_dpn" class="form-control @error('julur_dpn') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->julur_dpn : old('julur_dpn') }}" id="julur_dpn">
              <span class="input-group-text">mm</span>
            </div>
            @error('julur_dpn')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="julur_blk" class="form-label">Julur Belakang</label>
            <div class="input-group">
              <input type="number" name="julur_blk" class="form-control @error('julur_blk') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->julur_blk : old('julur_blk') }}" id="julur_blk">
              <span class="input-group-text">mm</span>
            </div>
            @error('julur_blk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          <label class="mt-5 font-weight-bold text-dark">Jarak Sumbu</label>
          <div class="col-4">
            <label for="sumbu_i_ii" class="form-label">Sumbu I - II</label>
            <div class="input-group">
              <input type="number" name="sumbu_i_ii" class="form-control @error('sumbu_i_ii') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->sumbu_i_ii : old('sumbu_i_ii') }}" id="sumbu_i_ii">
              <span class="input-group-text">mm</span>
            </div>
            @error('sumbu_i_ii')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="sumbu_ii_iii" class="form-label">Sumbu II - III</label>
            <div class="input-group">
              <input type="number" name="sumbu_ii_iii" class="form-control @error('sumbu_ii_iii') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->sumbu_ii_iii : old('sumbu_ii_iii') }}" id="sumbu_ii_iii">
              <span class="input-group-text">mm</span>
            </div>
            @error('sumbu_ii_iii')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-4">
            <label for="sumbu_iii_iv" class="form-label">Sumbu III - IV</label>
            <div class="input-group">
              <input type="number" name="sumbu_iii_iv" class="form-control @error('sumbu_iii_iv') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->sumbu_iii_iv : old('sumbu_iii_iv') }}" id="sumbu_iii_iv">
              <span class="input-group-text">mm</span>
            </div>
            @error('sumbu_iii_iv')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <label class="mt-5 font-weight-bold text-dark">Dimensi Bak Muatan / Tangki</label>
          <div class="col-12">
            <label for="plt" class="form-label">Panjang x Lebar x Tinggi</label>
            <input type="text" name="plt" class="form-control @error('plt') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->plt : old('plt') }}" id="plt">
            @error('plt')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="jbb" class="form-label">JBB / JBKB</label>
            <input type="text" name="jbb" class="form-control @error('jbb') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->jbb : old('jbb') }}" id="jbb">
            @error('jbb')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="jbi" class="form-label">JBI / JBKI</label>
            <input type="text" name="jbi" class="form-control @error('jbi') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->jbi : old('jbi') }}" id="jbi">
            @error('jbi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="daya_angkut" class="form-label">Daya Angkut (Orang / Kg)</label>
            <input type="text" name="daya_angkut" class="form-control @error('daya_angkut') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->daya_angkut : old('daya_angkut') }}" id="daya_angkut">
            @error('daya_angkut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="kls_jalan" class="form-label">Kelas Jalan Terendah Yang Boleh Dilalui</label>
            <input type="text" name="kls_jalan" class="form-control @error('kls_jalan') is-invalid @enderror" value="{{ isset($pendaftaran) ? $pendaftaran->kls_jalan : old('kls_jalan') }}" id="kls_jalan">
            @error('kls_jalan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
