<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
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
                <a href="/admin/{{ $user->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/admin/{{ $user->id }}" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <a href="/user/" class="badge bg-danger"><i class="bi bi-trash"></i></a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>