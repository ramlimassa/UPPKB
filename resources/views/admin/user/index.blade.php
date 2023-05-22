  <h5 class="card-title">Data User</h5>
  <a href="admin/create" class="btn btn-primary mb-3">Create New User</a>
  <!-- Table with stripped rows -->
  <table class="table table-striped table-lg-12">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="/admin/{{ $user->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            
            <form action="/admin/{{ $user->id }}" method="POST" class="d-inline">
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