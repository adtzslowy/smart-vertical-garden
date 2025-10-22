<x-admin>
  <div class="container-fluid py-4">

    <!-- Judul Halaman -->
    <h2 class="fw-semibold mb-3 text-primary">Dashboard Smart Vertical Garden</h2>
    <p class="text-muted mb-4">
      Selamat datang kembali di sistem edukasi Smart Vertical Garden 🌿
      Pantau perkembangan konten dan aktivitas pengguna melalui statistik berikut.
    </p>

    <!-- Statistik Ringkas -->
    <div class="row g-4">
      <!-- Artikel -->
      <div class="col-md-3">
        <div class="card stat-card border-0 shadow-sm" style="background: linear-gradient(135deg, #007bff 0%, #5fa8ff 100%); color: white;">
          <div class="card-body text-center">
            <i class="ti ti-news fs-2 mb-2"></i>
            <h4 class="fw-bold mb-0">12</h4>
            <small>Artikel</small>
          </div>
        </div>
      </div>

      <!-- Kategori -->
      <div class="col-md-3">
        <div class="card stat-card border-0 shadow-sm" style="background: linear-gradient(135deg, #0dcaf0 0%, #63d5f6 100%); color: white;">
          <div class="card-body text-center">
            <i class="ti ti-tags fs-2 mb-2"></i>
            <h4 class="fw-bold mb-0">5</h4>
            <small>Kategori</small>
          </div>
        </div>
      </div>

      <!-- Pengunjung -->
      <div class="col-md-3">
        <div class="card stat-card border-0 shadow-sm" style="background: linear-gradient(135deg, #20c997 0%, #6edfbf 100%); color: white;">
          <div class="card-body text-center">
            <i class="ti ti-users fs-2 mb-2"></i>
            <h4 class="fw-bold mb-0">28</h4>
            <small>Pengunjung</small>
          </div>
        </div>
      </div>

      <!-- Pesan Masuk -->
      <div class="col-md-3">
        <div class="card stat-card border-0 shadow-sm" style="background: linear-gradient(135deg, #dc3545 0%, #f0717f 100%); color: white;">
          <div class="card-body text-center">
            <i class="ti ti-mail fs-2 mb-2"></i>
            <h4 class="fw-bold mb-0">3</h4>
            <small>Pesan Masuk</small>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Efek Hover -->
  <style>
    .stat-card {
      transition: all 0.3s ease-in-out;
      border-radius: 12px;
    }

    .stat-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      cursor: pointer;
    }

    .stat-card i {
      transition: transform 0.3s ease;
    }

    .stat-card:hover i {
      transform: scale(1.15) rotate(5deg);
    }
  </style>
</x-admin>
