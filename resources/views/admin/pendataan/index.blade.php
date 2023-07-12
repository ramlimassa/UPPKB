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
    <td>{{ $loop->iteration }}</td>
    <td>{{ $pendataan->created_at }}</td>
    <td>{{ $pendataan->pengemudi }}</td>
    <td>{{ $pendataan->pendaftaran->no_reg_kendaraan }}</td>
    <td>{{ $pendataan->pendaftaran->no_uji }}</td>
    <td>{{ $pendataan->pelanggaran }}</td>
    <td>{{ $pendataan->user->name }}</td> 
    <td>
      <a href="/pendataan/{{ $pendataan->id }}" class="badge bg-info"><i class="bi bi-eye"> View More</i></a>
      <a href="/pendataan/{{ $pendataan->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"> Edit</i></a>
      
      <form action="/pendataan/{{ $pendataan->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?') " type="submit"><i class="bi bi-trash"> Delete</i></button>
      </form>
    </td> 
  </tr>
  @endforeach
</tbody>
</table>
<!-- End Table with stripped rows -->
</div>