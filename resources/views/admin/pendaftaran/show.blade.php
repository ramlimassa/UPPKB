<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="mt-4">
                <a href="/pendaftaran" class="btn btn-success"><i class="bi bi-arrow-return-left"> Back</i></a>
                <a href="/pendaftaran/{{ $pendaftaran->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"> Edit</i></a>
                <form action="/pendaftaran/{{ $pendaftaran->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?') " type="submit"><i class="bi bi-x-circle"> Delete</i></button>
                </form>
            </div>
            <h5 class="card-title">View Details</h5>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Masa Berlaku</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->masa_berlaku }}</div>
            </div>

            <h6 class="card-subtitle mt-3 mb-2 font-weight-bold text-dark">- IDENTITAS PEMILIK KENDARAAN -</h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nama Pemilik Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->namaPK }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Alamat Pemilik Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->alamatPK }}</div>
            </div>
            
            <h6 class="card-subtitle mt-3 mb-2 font-weight-bold text-dark">- IDENTITAS KENDARAAN BERMOTOR-</h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Uji Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->no_uji }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Sertifikat Registrasi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->no_sertifikat }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tanggal Sertifikat Registrasi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->tgl_sertifikat }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Registrasi Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->no_reg_kendaraan }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Rangka Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->no_rangk_kendaraan }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Nomor Motor Penggerak</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->no_mtr_penggerak }}</div>
            </div>
            
            <h6 class="card-subtitle mt-3 mb-2 font-weight-bold text-dark">- SPESIFIKASI TEKNIS KENDARAAN BERMOTOR-</h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Jenis</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->jenis }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Merk / Tipe</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->tipe }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Tahun Pembuatan / Perakitan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->tahun_pemb }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Bahan Bakar / Sumber Energi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->bahan_bakar }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Isi Silinder</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->isi_silinder }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Daya Motor</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->daya_motor }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Ukuran Ban</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->ukuran_ban }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Konfigurasi Sumbu</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->konfigurasi_sumbu }}</div>
            </div>
                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Berat Kosong Kendaraan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->berat_kosong_kendaraan }}</div>
            </div>
                                                                    
            <h6 class="card-subtitle mt-3 font-weight-bold text-dark">Dimensi Utama Kendaraan Bermotor</h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Panjang</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->panjang }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Lebar</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->lebar }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Tinggi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->tinggi }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Julur Depan</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->julur_dpn }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Julur Belakang</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->julur_blk }}</div>
            </div>
                                                                    
            <h6 class="card-subtitle mt-3 font-weight-bold text-dark">Jarak Sumbu</h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Sumbu I-II</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->sumbu_i_ii }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Sumbu II-III</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->sumbu_ii_iii }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Sumbu III-IV</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->sumbu_iii_iv }}</div>
            </div>
                                                                    
            <h6 class="card-subtitle mt-3 font-weight-bold text-dark">Dimensi Bak Muatan / Tangki </h6>
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">&emsp;Panjang x Lebar x Tinggi</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->plt }}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">JBB/JBKB</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->jbb }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">JBI/JBKI</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->jbi }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Daya Angkut (Orang/Kg)</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->daya_angkut }}</div>
            </div>
                                                                    
            <div class="row mb-2">
                <div class="col-lg-3 col-md-5 label">Kelas Jalan Terendah Yang Boleh Dilalui</div>
                <div class="col-lg-9 col-md-7">: {{ $pendaftaran->kls_jalan }}</div>
            </div>
                                    
        </div>
    </div><!-- End Left side columns -->
</div>
