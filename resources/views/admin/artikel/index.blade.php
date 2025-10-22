<x-admin>
  <div class="container-fluid py-4">
    <h2 class="fw-semibold mb-3 text-primary">Daftar Artikel</h2>

    <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary mb-3">
      <i class="ti ti-plus"></i> Tambah Artikel
    </a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-bordered align-middle text-center">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($artikels as $artikel)
              <tr>
                <td>{{ $artikel['id'] }}</td>
                <td>{{ $artikel['judul'] }}</td>
                <td>{{ $artikel['penulis'] }}</td>
                <td>{{ $artikel['tanggal'] }}</td>
                <td>
                  <a href="{{ route('admin.artikel.edit', $artikel['id']) }}" class="btn btn-sm btn-warning"><i class="ti ti-edit"></i></a>
                  <form action="{{ route('admin.artikel.destroy', $artikel['id']) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus artikel ini?')">
                      <i class="ti ti-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-admin>
