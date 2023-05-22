<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-18">
            <div class="card info-card customers-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h4 class="card-title">{{ $header }}</h4>
                        <div class="d-flex align-items-center">
                            <!-- General Form Elements -->
                            @if (isset($user))
                              <form action="/admin/{{ $user->id }}" method="POST">
                                @method('PUT')
                            @else
                            <form action="/admin" method="POST"> 
                            @endif
                            
                              @csrf
                                <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ isset($user) ? $user->name : old('name') }}">
                                    @error('name')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-4 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ isset($user) ? $user->username : old('username') }}">
                                        @error('username')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                    </div>
                                <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ isset($user) ? $user->email : old('email') }}">
                                    @error('email')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control">
                                    @error('password')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                </div>

                                <div class="row mt-3">
                                <label class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">{{ $button }}</button>
                                </div>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->
        </div>
      </div><!-- End Left side columns -->
    </div>
</section>