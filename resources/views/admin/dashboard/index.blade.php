<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Pendaftaran</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-truck-flatbed"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $pendaftaran }}</h6>
                    <span class="text-primary small pt-1 fw-bold">Data Kendaraan</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Pendataan</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri ri-truck-line"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $pendataan }}</h6>
                    <span class="text-warning small pt-1 fw-bold">Data Kendaraan</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-md-4">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Penindakan</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri ri-auction-line"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $penindakan }}</h6>
                    <span class="text-danger small pt-1 fw-bold">Data Pelanggaran</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-18">
            <div class="card info-card customers-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h4 class="card-title">Hi, {{ auth()->user()->name }}</h4>
                        <div class="d-flex align-items-center">
                          
                            <div class="ps-3">
                                <h5>Selamat Datang di</h5>
                                <h6>Sistem Informasi Pengolahan Data</h6>
                                <h5 class="card-title pt-1">Unit Pelaksana Penimbangan Kendaraan Bermotor (UPPKB) Somba Opu</h5>
                                <a href="\file\panduan.pdf" target="_blank" style="font-size: 16px;"><i class="bi bi-file-earmark-pdf"></i> Panduan Sistem Informasi Pengolahan Data</a>
                            </div>
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