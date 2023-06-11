<h5 class="card-title">Data Kendaraan UPPKB</h5>
<a href="pendataan/create" class="btn btn-primary mb-3">Tambah Data</a>
<!-- Table with stripped rows -->
<table class="table table-striped table-lg-12">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama Pengendara</th>
        <th scope="col">Nomor Kendaraan</th>
        <th scope="col">Nomor Buku Uji</th>
        <th scope="col">Pelanggaran</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
      </tr>
  </thead>
</thead>
<tbody>
  @foreach ($pendataans as $pendataan)
      
  <tr>
    <td>{{  $loop->iteration }}</td>
    <td>{{ $pendataan->created_at }}</td>
    <td>{{ $pendataan->pengemudi }}</td>
    <td>{{ $pendataan->pendaftaran->no_reg_kendaraan }}</td>
    <td>{{ $pendataan->pendaftaran->no_uji }}</td>
    <td>nn</td>
    <td>{{ $pendataan->user->name }}</td> 
    <td>action</td> 
  </tr>
  @endforeach
</tbody>
</table>
<!-- End Table with stripped rows -->
</div>