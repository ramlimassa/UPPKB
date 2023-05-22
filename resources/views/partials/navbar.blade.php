<header class="mb-4">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">UPPKB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Pendataan") ? 'active' : '' }}"  href="/pendataan">Pendataan</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Penindakan") ? 'active' : '' }}" href="/penindakan">Penindakan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
          </ul>
          
          <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="butt" data-bs-toggle="dropdown" aria-expanded="fals">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/admin"><i class="bi bi-person-fill"></i> Admin</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
                  
              @else
                <li class="nav-item">
                  <a href="/login" class="nav-link {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
