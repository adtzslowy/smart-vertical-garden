<x-admin>
    <div class="container-fluid py-4">
        <h2 class="fw-semibold mb-3 text-primary">Tambah Artikel</h2>

        <form action="{{ url('admin/artikel') }}" method="POST"
        enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger"></div>
                @endforeach
            @endif

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="nama_artikel" class="form-control" placeholder="Masukan Judul Artikel!"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Konten</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukan Detail Konten" rows="7"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Dokumtasi</label>
                <input type="file" class="form-control" name="dokumentasi">
            </div>
            <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Simpan</button>
            <a href="{{ url('admin/artikel') }}" class="btn btn-secondary">
                <i class="ti-ti-arrow-left"></i>Kembali</a>
        </form>
    </div>
    @push('scripts')
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('deskripsi')
        </script>
    @endpush
</x-admin>
