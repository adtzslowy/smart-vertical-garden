<x-admin>
  <div class="container-fluid py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success">
            <h4 class="text-white mb-0">Update Artikel</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/artikel/' . $artikel['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">{{ $err }}</div>
                    @endforeach
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="nama_artikel" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" name="nama_artikel" value="{{ old ('nama_artikel', $artikel->nama_artikel) }}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Artikel</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"> {{ request('deskripsi') }} </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="dokumentasi" class="form-label">Dokumentasi Artikel</label>
                            <input type="file" accept="image/*" name="dokumentasi" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url('admin/artikel') }}" class="btn btn-dark">
                        <i class="ti ti-arrow-left"></i> Kembali
                    </a>
                    <button class="btn btn-success" type="submit">
                        <i class="ti ti-check"></i> Update
                    </button>
                    </div>
                </div>
            </form>
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
