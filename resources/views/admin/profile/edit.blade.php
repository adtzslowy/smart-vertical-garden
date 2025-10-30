<x-admin>
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-center">
            <div class="card shadow-sm border-0 rounded-4" style="max-width: 850px; width:100%;">
                <div class="card-body p-5">
                    <h4 class="fw-bold text-primary mb-4 text-center">
                        <i class="ti ti-user-edit me-1"></i> Edit Profil Admin
                    </h4>

                    {{-- Alert sukses --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
                            <i class="ti ti-check me-1"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Alert error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3 shadow-sm">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('admin/profile/' . $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row align-items-center">
                            {{-- Kolom Kiri: Foto --}}
                            <div class="col-md-5 text-center mb-4 mb-md-0 border-end">
                                <div class="position-relative d-inline-block">
                                    <img src="{{ $admin->foto_profil
                                        ? url('storage/' . $admin->foto_profil)
                                        : url('source/assets/images/default-person.jpg') }}"
                                        alt="{{ $admin->nama }}"
                                        class="rounded-4 shadow-sm"
                                        style="width: 100%; max-width: 280px; height: 350px; object-fit: cover;">

                                </div>
                            </div>

                            {{-- Kolom Kanan: Data Profil --}}
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control rounded-pill"
                                        value="{{ old('nama', $admin->nama) }}" placeholder="Masukkan nama lengkap">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" name="email" class="form-control rounded-pill"
                                        value="{{ old('email', $admin->email) }}" placeholder="Masukkan email aktif">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold">Password Baru</label>
                                    <input type="password" name="password" class="form-control rounded-pill"
                                        placeholder="Kosongkan jika tidak ingin diubah">
                                </div>

                                {{-- Tambahkan file input di sini agar sejajar --}}
                                <div class="mb-3">
                                    <label for="foto_profil_kanan" class="form-label fw-semibold">Ubah Foto Profil</label>
                                    <input type="file" name="foto_profil" id="foto_profil_kanan"
                                           class="form-control rounded-pill"
                                           style="height: 45px;">
                                </div>

                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <a href="{{ url('admin/profile') }}" class="btn btn-dark rounded-pill px-4">
                                        <i class="ti ti-arrow-left me-1"></i> Kembali
                                    </a>
                                    <button class="btn btn-success rounded-pill px-4" type="submit">
                                        <i class="ti ti-check me-1"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Animasi Halus Saat Halaman Dimuat --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.card');
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = 1;
                card.style.transform = 'translateY(0)';
            }, 100);
        });

        // Auto-hide alert success setelah 3 detik
        const alertBox = document.querySelector('.alert-success');
        if (alertBox) {
            setTimeout(() => {
                const alert = new bootstrap.Alert(alertBox);
                alert.close();
            }, 3000);
        }
    </script>
    @endpush
</x-admin>
