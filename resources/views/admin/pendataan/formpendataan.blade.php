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

          <div id="reader" width="600px"></div>
          <div class="col-6">
            <label for="result" class="form-label">Nomor Uji Kendaraan (STUK)</label>
              <input type="text" name="result" class="form-control" id="result">
            </div>

          <div class="col-6">
            <label for="no_reg_kendaraan" class="form-label">Nomor Registrasi Kendaraan</label>
            <input type="text" class="form-control @error('no_reg_kendaraan') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->no_reg_kendaraan : old('no_reg_kendaraan') }}" id="no_reg_kendaraan" disabled>
            @error('no_reg_kendaraan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="namaPK" class="form-label">Nama Pemilik Kendaraan</label>
            <input type="text" class="form-control @error('namaPK') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->namaPK : old('namaPK') }}"  id="namaPK" disabled >
            @error('namaPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="alamatPK" class="form-label">Alamat Pemilik Kendaraan</label>
            <input type="text" name="alamatPK" class="form-control @error('alamatPK') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->alamatPK : old('alamatPK') }}" id="alamatPK" disabled>
            @error('alamatPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="jbi" class="form-label">JBI / JBKI</label>
            <input type="text" name="jbi" class="form-control @error('jbi') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->jbi : old('jbi') }}" id="jbi" disabled>
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
              <input type="number" name="kbbk" class="form-control @error('kbbk') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kbbk : old('kbbk') }}" id="kbbk" disabled>
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
              <input type="number" name="kbbp" class="form-control @error('kbbp') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->kbbp : old('kbbp') }}" id="kbbp" disabled>
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
              <input type="date" name="tgl_sertifikat" class="form-control" id="masa1" disabled>
              <span class="input-group-text">Sampai</span>
              <input type="date" name="masa_berlaku" class="form-control" id="masa2" disabled>
            </div>
          </div>
          <div class="col-6">
            <label for="jenis" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis" class="form-control" id="jenis" disabled>
          </div>

          <h6 class="card-title pb-0">Cek Dimensi </h6>
          <div class="col-4">
            <label for="std_panjang" class="form-label">Std Panjang</label>
            <div class="input-group">
              <input type="number" name="std_panjang" class="form-control" id="std_panjang" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="panjang" class="form-label">Panjang</label>
            <div class="input-group">
              <input type="number" name="panjang" class="form-control" id="panjang">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_panjang" class="form-label">Kelebihan Panjang</label>
            <div class="input-group">
              <input type="number" name="kel_panjang" class="form-control" id="kel_panjang" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_lebar" class="form-label">Std Lebar</label>
            <div class="input-group">
              <input type="number" name="std_lebar" class="form-control" id="std_lebar" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="lebar" class="form-label">Lebar</label>
            <div class="input-group">
              <input type="number" name="lebar" class="form-control" id="lebar" >
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_lebar" class="form-label">Kelebihan Lebar</label>
            <div class="input-group">
              <input type="number" name="kel_lebar" class="form-control" id="kel_lebar" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_tinggi" class="form-label">Std Tinggi</label>
            <div class="input-group">
              <input type="number" name="std_tinggi" class="form-control" id="std_tinggi" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="tinggi" class="form-label">Tinggi</label>
            <div class="input-group">
              <input type="number" name="tinggi" class="form-control" id="tinggi">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_tinggi" class="form-label">Kelebihan Tinggi</label>
            <div class="input-group">
              <input type="number" name="kel_tinggi" class="form-control" id="kel_tinggi" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_foh" class="form-label">Std FOH</label>
            <div class="input-group">
              <input type="number" name="std_foh" class="form-control" id="std_foh" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="foh" class="form-label">FOH</label>
            <div class="input-group">
              <input type="number" name="foh" class="form-control" id="foh">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_foh" class="form-label">Kelebihan FOH</label>
            <div class="input-group">
              <input type="number" name="kel_foh" class="form-control" id="kel_foh" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_roh" class="form-label">Std ROH</label>
            <div class="input-group">
              <input type="number" name="std_roh" class="form-control" id="std_roh" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="roh" class="form-label">ROH</label>
            <div class="input-group">
              <input type="number" name="roh" class="form-control" id="roh">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_roh" class="form-label">Kelebihan ROH</label>
            <div class="input-group mb-3">
              <input type="number" name="kel_roh" class="form-control" id="kel_roh" disabled>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-12">
            <label for="mengangkut" class="form-label">Mengangkut</label>
            <input type="text" name="mengangkut" class="form-control" id="mengangkut">
          </div>
          <div class="col-6">
            <label for="dari" class="form-label">Dari</label>
            <input type="text" name="dari" class="form-control" id="dari">
          </div>
          <div class="col-6">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" class="form-control" id="tujuan">
          </div>
          <div class="col-6">
            <label for="pengemudi" class="form-label">Pengemudi</label>
            <input type="text" name="pengemudi" class="form-control" id="pengemudi">
          </div>
          <div class="col-6">
            <label for="sim" class="form-label">Jenis SIM</label>
            <select class="form-select" name="sim" aria-label="Default select example">
              <option value="">Tidak Ada SIM</option>
              <option value="A">A</option>
              <option value="B1">B1</option>
              <option value="B1 Umum">B1 Umum</option>
              <option value="B2">B2</option>
              <option value="B2 Umum">B2 Umum</option>
            </select>
          </div>
          <div class="col-12">
            <label for="kelengkapan_berkas" class="form-label">Kelengkapan Berkas</label>
              <div class="form-check">
                <input class="form-check-input" name="kelengkapan_berkas[]" value="SIM" type="checkbox" id="sim">
                <label class="form-check-label" for="sim">
                  SIM
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="kelengkapan_berkas[]" value="STNK" type="checkbox" id="stnk">
                <label class="form-check-label" for="stnk">
                  STNK
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="kelengkapan_berkas[]" value="Buku Uji" type="checkbox" id="buku_uji">
                <label class="form-check-label" for="buku_uji">
                  Buku Uji
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="kelengkapan_berkas[]" value="Surat Jalan" type="checkbox" id="surat_jalan">
                <label class="form-check-label" for="surat_jalan">
                  Surat Jalan
                </label>
              </div>
          </div>
          <div class="col-12">
            <label for="pelanggaran" name class="form-label">Pelanggaran</label>
            <select name="pelanggaran" class="form-select" aria-label="Default select example">
              <option value="Tidak Melanggar" selected>Tidak Melanggar</option>
              <option value="Melanggar">Melanggar</option>
            </select>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
</div>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
  function onScanSuccess(decodedText, decodedResult) {
    $('#result').val(decodedText);
    let value = decodedText;

    console.log(decodedResult);

    $.ajax({
        method: "GET",
        url: location.origin + "/jsonpendaftaran",
        dataType: "json",
        data: { noujikendaraan: value },
        success: (response) => {
          console.log(response);
          $("#no_reg_kendaraan").val(response.no_reg_kendaraan);
          $("#namaPK").val(response.namaPK);
          $("#alamatPK").val(response.alamatPK);
          $("#jbi").val(response.jbi);
          $("#masa1").val(response.tgl_sertifikat);
          $("#masa2").val(response.masa_berlaku);
          $("#jenis").val(response.jenis);
          $("#std_panjang").val(response.panjang);
          $("#std_lebar").val(response.lebar);
          $("#std_tinggi").val(response.tinggi);
          $("#std_roh").val(response.julur_blk);
          $("#std_foh").val(response.julur_dpn);
        },
        error: (xhr, status, error) => {
          console.log(xhr.responseText);
        }
      });

  }

  function onScanFailure(error) {
  }

  let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
  html5QrcodeScanner.render(onScanSuccess, onScanFailure);

</script>

<script>
  function calculateExcess(inputId, stdInputName, outputId) {
    var input = parseInt(document.getElementById(inputId).value);
    var stdInput = parseInt(document.getElementsByName(stdInputName)[0].value);
    var excess = input - stdInput;
    
    if (excess < 0) {
      excess = 0;
    }
    
    document.getElementById(outputId).value = excess;
  }

  document.getElementById('berat').addEventListener('input', function() {
    var berat = parseInt(document.getElementById('berat').value);
    var maksimal = parseInt(document.getElementsByName('jbi')[0].value);
    var kelebihan = berat - maksimal;
    var persen = (kelebihan / maksimal) * 100;
    
    if (kelebihan < 0) {
      kelebihan = 0;
      persen = 0;
    }
    
    document.getElementById('kbbk').value = kelebihan;
    document.getElementById('kbbp').value = persen.toFixed(1);
  });

  document.getElementById('panjang').addEventListener('input', function() {
    calculateExcess('panjang', 'std_panjang', 'kel_panjang');
  });

  // Tambahkan event listener untuk input lebar, tinggi, foh, dan roh
  document.getElementById('lebar').addEventListener('input', function() {
    calculateExcess('lebar', 'std_lebar', 'kel_lebar');
  });

  document.getElementById('tinggi').addEventListener('input', function() {
    calculateExcess('tinggi', 'std_tinggi', 'kel_tinggi');
  });

  document.getElementById('foh').addEventListener('input', function() {
    calculateExcess('foh', 'std_foh', 'kel_foh');
  });

  document.getElementById('roh').addEventListener('input', function() {
    calculateExcess('roh', 'std_roh', 'kel_roh');
  });
</script>

