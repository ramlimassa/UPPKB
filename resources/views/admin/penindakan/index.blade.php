<h5 class="card-title">Data Penindakan Kendaraan UPPKB</h5>
<a href="penindakan/create" class="btn btn-primary mb-3">Tambah Data</a>
<!-- Table with stripped rows -->
<table class="table table-striped table-lg-12">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama Pengendara</th>
        <th scope="col">Nomor Buku Uji</th>
        <th scope="col">Jenis Pelanggaran</th>
        <th scope="col">Jenis Penindakan</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
      </tr>
  </thead> 
</thead>
<tbody>
  @foreach ($penindakans as $penindakan)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $penindakan->created_at->format('d-m-Y') }}</td>
    <td>{{ $penindakan->pendataan->pengemudi }}</td>
    <td>{{ $penindakan->pendataan->pendaftaran->no_uji }}</td>
    <td>
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
    </td>
    <td>
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
    </td>
    <td>{{ $penindakan->user->name }}</td> 
    <td>
      {{-- <a href="" class="badge bg-info"  data-bs-toggle="modal" data-bs-target="#penindakan"><i class="bi bi-eye"> View More</i></a> --}}
      <a href="/penindakan/{{ $penindakan->id }}" class="badge bg-info"><i class="bi bi-eye"> View More</i></a>
      <a href="/penindakan/{{ $penindakan->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"> Edit</i></a>
     
      <form action="/penindakan/{{ $penindakan->id }}" method="POST" class="d-inline">
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
<div class="modal fade" id="penindakan" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View More</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="tab-pane fade show active profile-overview" id="profile-overview">
          <h5 class="card-title">Info Details</h5>
          <div class="row">
            <div class="col-lg-4 col-md-5 label ">Pengendara</div>
            <div class="col-lg-8 col-md-7">{{ auth()->user()->name }}</div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-5 label">No. Buku Uji</div>
            <div class="col-lg-8 col-md-7">{{ auth()->user()->username }}</div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-5 label">Jenis Pelaggaran</div>
            <div class="col-lg-8 col-md-7">{{ auth()->user()->email }}</div>
          </div>
          
          <div class="row">
            <div class="col-lg-4 col-md-5 label">Jenis Penindakan</div>
            <div class="col-lg-8 col-md-7">{{ auth()->user()->email }}</div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div><!-- End Basic Modal-->