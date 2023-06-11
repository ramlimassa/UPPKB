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
          <div class="col-12">
            <label for="result" class="form-label">Nomor Uji Kendaraan (STUK)</label>
              <input type="text" name="result" class="form-control" id="result" readonly>
            </div>
          <div class="col-6">
            <label for="no_uji" class="form-label">Nomor Uji Kendaraan (STUK)</label>
            <select name="pendaftaran_id" id="pendaftaran_id" class="form-select" aria-label="Default select example">
              <option value=""> Pilih </option>
              @foreach ($pendaftarans as $item)
                <option value="{{ $item->id }}">{{ $item->no_uji }}</option>  
              @endforeach
            </select>
          </div>
          <div class="col-6">
            <label for="no_reg_kendaraan" class="form-label">Nomor Registrasi Kendaraan</label>
            <input type="text" class="form-control @error('no_reg_kendaraan') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->no_reg_kendaraan : old('no_reg_kendaraan') }}" id="no_reg_kendaraan" readonly>
            @error('no_reg_kendaraan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="namaPK" class="form-label">Nama Pemilik Kendaraan</label>
            <input type="text" class="form-control @error('namaPK') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->namaPK : old('namaPK') }}"  id="namaPK" readonly >
            @error('namaPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="alamatPK" class="form-label">Alamat Pemilik Kendaraan</label>
            <input type="text" name="alamatPK" class="form-control @error('alamatPK') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->alamatPK : old('alamatPK') }}" id="alamatPK" readonly>
            @error('alamatPK')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6">
            <label for="jbi" class="form-label">JBI / JBKI</label>
            <input type="text" name="jbi" class="form-control @error('jbi') is-invalid @enderror" value="{{ isset($pendataan) ? $pendataan->jbi : old('jbi') }}" id="jbi" readonly>
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
              <input type="date" name="tgl_sertifikat" class="form-control" id="masa1" readonly>
              <span class="input-group-text">Sampai</span>
              <input type="date" name="masa_berlaku" class="form-control" id="masa2" readonly>
            </div>
          </div>
          <div class="col-6">
            <label for="jenis" class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis" class="form-control" id="jenis" readonly>
          </div>

          <h6 class="card-title pb-0">Cek Dimensi </h6>
          <div class="col-4">
            <label for="std_panjang" class="form-label">Std Panjang</label>
            <div class="input-group">
              <input type="text" name="std_panjang" class="form-control" id="std_panjang" readonly>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="panjang" class="form-label">Panjang</label>
            <div class="input-group">
              <input type="text" name="panjang" class="form-control" id="panjang">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_panjang" class="form-label">Kelebihan Panjang</label>
            <div class="input-group">
              <input type="text" name="kel_panjang" class="form-control" id="kel_panjang">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_lebar" class="form-label">Std Lebar</label>
            <div class="input-group">
              <input type="text" name="std_lebar" class="form-control" id="std_lebar" readonly>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="lebar" class="form-label">Lebar</label>
            <div class="input-group">
              <input type="text" name="lebar" class="form-control" id="lebar" >
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_lebar" class="form-label">Kelebihan Lebar</label>
            <div class="input-group">
              <input type="text" name="kel_lebar" class="form-control" id="kel_lebar">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_tinggi" class="form-label">Std Tinggi</label>
            <div class="input-group">
              <input type="text" name="std_tinggi" class="form-control" id="std_tinggi" readonly>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="tinggi" class="form-label">Tinggi</label>
            <div class="input-group">
              <input type="text" name="tinggi" class="form-control" id="tinggi">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_tinggi" class="form-label">Kelebihan Tinggi</label>
            <div class="input-group">
              <input type="text" name="kel_tinggi" class="form-control" id="kel_tinggi">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_foh" class="form-label">Std FOH</label>
            <div class="input-group">
              <input type="text" name="std_foh" class="form-control" id="std_foh" readonly>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="foh" class="form-label">FOH</label>
            <div class="input-group">
              <input type="text" name="foh" class="form-control" id="foh">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_foh" class="form-label">Kelebihan FOH</label>
            <div class="input-group">
              <input type="text" name="kel_foh" class="form-control" id="kel_foh" >
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="std_roh" class="form-label">Std ROH</label>
            <div class="input-group">
              <input type="text" name="std_roh" class="form-control" id="std_roh" readonly>
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="roh" class="form-label">ROH</label>
            <div class="input-group">
              <input type="text" name="roh" class="form-control" id="roh">
              <span class="input-group-text">mm</span>
            </div>
          </div>
          <div class="col-4">
            <label for="kel_roh" class="form-label">Kelebihan ROH</label>
            <div class="input-group mb-3">
              <input type="text" name="kel_roh" class="form-control" id="kel_roh">
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
    let id = decodedText;
    // html5QrcodeScanner.clear().then(_ => {
    //   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    //   $.ajax({

    //     url: "{{ route('validasi') }}",
    //     type: 'POST',
    //     data: {
    //       _methode : "POST",
    //       _token: CSRF_TOKEN,
    //       qr_code : id
    //     },
    //     success: function (response){
    //       // alert(response);
    //       if(response.status == 404){

    //         Swal.fire({
    //           title: 'Nomor Buku Uji tidak ditemukan, Ingin scan ulang?',
    //           confirmButtonText: 'Ya, Scan Ulang',
    //           denyButtonText: 'Cancel',
    //         }).then((result) => {
    //           if (result.isConfirmed){
    //             location.reload();
    //           } else if (result.isDidmissed) {
    //             console.log("deny")
    //           }
    //         });
    //       } else {
    //         Swal. fire({
    //         title: '<strong>Sertifikat Terdaftar</strong>',
    //         icon: 'success',
    //         html:
    //             '<b>Nama : </b> '+response.nama+'</br>
    //             '<b>Kelas : </b> '+response.kelas+'</br>
    //         showCloseButton: true, showCancelButton: false,
    //         focusConfirm: false,
    //         })
    //       }
    //     }
    //   });
    // }).catch(error => {
    //   alert('something wrong');
    // });
  }

  function onScanFailure(error) {
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
    // console.warn(`Code scan error = ${error}`);
  }

  let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
  html5QrcodeScanner.render(onScanSuccess, onScanFailure);

</script>
