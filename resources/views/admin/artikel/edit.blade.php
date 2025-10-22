<x-admin>
  <div class="container-fluid py-4">
    <h2 class="fw-semibold mb-3 text-primary">Edit Artikel</h2>

    <form action="{{ route('admin.artikel.update', $artikel['id']) }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" value="{{ $artikel['judul'] }}" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" name="penulis" value="{{ $artikel['penulis'] }}" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Konten</label>
        <textarea name="konten" rows="5" class="form-control">{{ $artikel['konten'] }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Update</button>
      <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</x-admin>
