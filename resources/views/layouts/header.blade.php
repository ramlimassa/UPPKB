<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="{{ asset ("img/logo.png") }}" alt="">
        <span class="d-none d-lg-block">UPPKB Somba Opu</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset ("img/profil.jpg") }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="" data-bs-toggle="modal" data-bs-target="#basicModal">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="" data-bs-toggle="modal" data-bs-target="#changePassword">
                <i class="bi bi-key"></i>
                <span>Change Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">My Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title">Profile Details</h5>
            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Full Name</div>
              <div class="col-lg-9 col-md-8">{{ auth()->user()->name }}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">User Name</div>
              <div class="col-lg-9 col-md-8">{{ auth()->user()->username }}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Email</div>
              <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->


  <div class="modal fade" id="changePassword" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <form action="{{ route('change.password') }}" method="POST">
              @method('put')
              @csrf
              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-4 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-8">
                  <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-4 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-8">
                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
                @error('newpassword')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="row mb-3">
                <label for="confirmPassword" class="col-md-4 col-lg-4 col-form-label">Confirm Password</label>
                <div class="col-md-8 col-lg-8">
                  <input name="confirmpassword" type="password" class="form-control" id="confirmPassword">
                </div>
                @error('confirmpassword')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="text-center modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->