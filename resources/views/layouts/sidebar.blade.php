<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link { {{ Request::is('dashboard*') ? '' : 'collapsed' }}" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('pendaftaran*') ? '' : 'collapsed' }} " href="/pendaftaran">
          <i class="bi bi-card-list"></i><span>Pendaftaran</span>
        </a>
      </li><!-- End Pendaftaran Nav -->

      <li class="nav-item">
        <a class="nav-link  {{ Request::is('pendataan*') ? '' : 'collapsed' }} " href="/pendataan">
          <i class="bi bi-journal-text"></i><span>Pendataan</span>
        </a>
      </li><!-- End Pendataan Nav -->

      <li class="nav-item">
        <a class="nav-link  {{ Request::is('penindakan*') ? '' : 'collapsed' }}" href="/penindakan">
          <i class="ri ri-scales-3-fill"></i><span>Penindakan</span>
        </a>
      </li><!-- End Penindakan Nav -->

      @can('admin')   
        <li class="nav-heading">Administrator</li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin*') ? '' : 'collapsed' }}" href="/admin">
            <i class="bi bi-person"></i>
            <span>Admin</span>
          </a>
        </li><!-- End Admin Page Nav -->
      @endcan

    </ul>

  </aside><!-- End Sidebar-->