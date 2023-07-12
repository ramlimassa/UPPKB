<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="mt-4">
                <a href="/pendataan" class="btn btn-success"><i class="bi bi-arrow-return-left"> Back</i></a>
                <a href="/pendataan/{{ $pendataan->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"> Edit</i></a>
                <form action="/pendataan/{{ $pendataan->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?') " type="submit"><i class="bi bi-x-circle"> Delete</i></button>
                </form>
            </div>
            <h5 class="card-title">View Details</h5>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tanggal</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->created_at->format('d M Y') }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Waktu</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->created_at->format('H:i') }} WITA</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->no_reg_kendaraan }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Uji Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->no_uji }}</div>
            </div> 

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nama Pemilik Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->namaPK }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Alamat Pemilik Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->alamatPK }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Masa Berlaku Uji</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->tgl_sertifikat }} s/d {{ $pendataan->pendaftaran->masa_berlaku }}</div>
            </div>
            
            {{-- <h6 class="card-subtitle mt-3 mb-2 font-weight-bold text-dark">- IDENTITAS KENDARAAN BERMOTOR-</h6> --}}
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">JBI</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pendaftaran->jbi }} Kg</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Berat Timbangan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->berat }} Kg</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Kelebihan Berat</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->kbbk }} Kg</div>
            </div>
             
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Persen Lebih</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->kbbp }} %</div>
            </div>
             
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Mengangkut</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->mengangkut }}</div>
            </div>
             
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Dari</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->dari }}</div>
            </div>
             
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tujuan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->tujuan }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nama Pengemudi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pengemudi }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Jenis SIM</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->sim }}</div>
            </div>
           
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Pelanggaran</div>
                <div class="col-lg-9 col-md-7">: {{ $pendataan->pelanggaran }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Kelengkapan Berkas</div>
                <div class="col-lg-9 col-md-7">:
                    @php
                    $kelengkapanBerkas = json_decode($pendataan->kelengkapan_berkas);
                    @endphp 
                    @if(is_array($kelengkapanBerkas))
                        <ol>
                            @foreach ($kelengkapanBerkas as $berkas)
                                <li>
                                    {{ $berkas }}
                                </li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
        </div>
    </div><!-- End Left side columns -->
</div>
