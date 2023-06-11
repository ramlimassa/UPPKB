<h5 class="card-title">Kartu Uji Berkala Kendaraan Bermotor</h5>
<a href="pendaftaran/create" class="btn btn-primary mb-3">Tambah Data</a>
<!-- Table with stripped rows -->
<table class="table table-striped table-lg-12">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pemilik</th>
        <th scope="col">QR Code <br>No. Buku Uji</th>
        <th scope="col">Nomor Buku Uji</th>
        <th scope="col">Nomor Kendaraan</th>
        <th scope="col">Jenis Kendaraan</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
      </tr>
  </thead>
</thead>
<tbody>
  @foreach ($pendaftarans as $pendaftaran)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $pendaftaran->namaPK }}</td>
    <td>{{ QrCode::generate( $pendaftaran->no_uji ); }}</td>
    <td>{{ $pendaftaran->no_uji }}</td>
    <td>{{ $pendaftaran->no_reg_kendaraan }}</td>
    <td>{{ $pendaftaran->jenis }}</td>
    <td>{{ $pendaftaran->name }}</td>
    <td>
      <a href="/pendaftaran/{{ $pendaftaran->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
      <a href="/pendaftaran/{{ $pendaftaran->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
      
      <form action="/pendaftaran/{{ $pendaftaran->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?') " type="submit"><i class="bi bi-trash"></i></button>
      </form>
      
    </td>
  </tr>
@endforeach
</tbody>
</table>
<!-- End Table with stripped rows -->
</div>