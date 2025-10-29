<x-admin>
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header bg-success">
                <h4 class="text-white mb-0">Detail Artikel</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-mb-12">
                        <div class="mb-3">
                            <label class="form-label">Judul Artikel</label>
                            <div class="form-control">{{ $artikel->nama_artikel }}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi Artikel</label>
                            <textarea id="deskripsi" class="form-control" name="deskripsi" rows="30" cols="10"
                            readonly>
                                {{ $artikel->deskripsi }}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dokumentasi Artikel</label>
                            <img src="{{ url('storage/', $artikel->dokumentasi) }}" alt="{{ $artikel->nama_artikel}}" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ url('admin/artikel') }}" class="btn btn-primary">
                    <i class="ti ti-arrow-left"></i> Kembali </a>
                </div>
            </div>
        </div>
    </div>
 @push('scripts')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('deskripsi')
        </script>
    @endpush
</x-admin>
