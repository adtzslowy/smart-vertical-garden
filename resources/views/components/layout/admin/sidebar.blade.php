<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="/admin" class="text-nowrap logo-img d-flex align-items-center">
        <img src="{{ url('src') }}/assets/images/logos/favicon.png" width="40" alt="Logo" />
        <span class="ms-2 fw-bold text-primary">Smart Garden</span>
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>

    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
      <ul id="sidebarnav">

        <!-- Dashboard -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
          <span class="hide-menu">MENU UTAMA</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin" aria-expanded="false">
            <span><i class="ti ti-layout-dashboard"></i></span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <!-- Artikel -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/artikel" aria-expanded="false">
            <span><i class="ti ti-news"></i></span>
            <span class="hide-menu">Artikel</span>
          </a>
        </li>

        <!-- Kategori -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/kategori" aria-expanded="false">
            <span><i class="ti ti-tags"></i></span>
            <span class="hide-menu">Kategori</span>
          </a>
        </li>

        <!-- Halaman -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/halaman" aria-expanded="false">
            <span><i class="ti ti-file-text"></i></span>
            <span class="hide-menu">Halaman</span>
          </a>
        </li>

        <!-- Kontak -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/kontak" aria-expanded="false">
            <span><i class="ti ti-mail"></i></span>
            <span class="hide-menu">Kontak</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- Sidebar End -->
