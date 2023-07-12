<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="mt-4">
            <a href="/penindakan" class="btn btn-success"><i class="bi bi-arrow-return-left"> Back</i></a>
            <a href="/penindakan/{{ $penindakan->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"> Edit</i></a>
            <form action="/penindakan/{{ $penindakan->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?') " type="submit"><i class="bi bi-x-circle"> Delete</i></button>
            </form>
        </div>
        <h5 class="card-title">View Details</h5>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tanggal</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->created_at->format('d M Y') }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Waktu</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->created_at->format('H:i') }} WITA</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->pendaftaran->no_reg_kendaraan }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Uji Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->pendaftaran->no_uji }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Mengangkut</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->mengangkut }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Dari</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->dari }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tujuan</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->tujuan }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Pengendara</div>
                <div class="col-lg-9 col-md-7">: {{ $penindakan->pendataan->pengemudi }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Jenis Pelanggaran</div>
                <div class="col-lg-9 col-md-7">: 
                    @php
                    $jenispelanggaran = json_decode($penindakan->jns_pelanggaran);
                    @endphp 
                    @if(is_array($jenispelanggaran))
                        <ol>
                            @foreach ($jenispelanggaran as $item)
                                <li>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ol>
                    @else
                    {{ $jenispelanggaran }}
                    @endif
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Jenis Penindakan</div>
                <div class="col-lg-9 col-md-7">: 
                    @php
                    $jenispenindakan = json_decode($penindakan->jns_penindakan);
                    @endphp 
                    @if(is_array($jenispenindakan))
                        <ol>
                            @foreach ($jenispenindakan as $item)
                                <li>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ol>
                    @else
                    {{ $jenispenindakan }}
                    @endif
                </div>
            </div>

        </div>
    </div><!-- End Left side columns -->
</div>
