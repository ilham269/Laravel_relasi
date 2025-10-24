@extends('layouts.app')

@section('content')
<div class="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span class="h5 mb-0">Data Murid</span>
          <a href="{{ route('murid.create') }}" class="btn btn-success btn-sm">Tambah Murid</a>
        </div>

        <div class="card-body">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th scope="col">Kelas</th>
                  <th scope="col" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse($murid as $mrd)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mrd->nama_lengkap }}</td>
                    <td>
                      @if(strtolower($mrd->jenis_kelamin) === 'laki-laki')
                        <span class="badge bg-primary">Laki-laki</span>
                      @else
                        <span class="badge bg-info">Perempuan</span>
                      @endif
                    </td>
                    <td>{{ $mrd->tanggal_lahir}}</td>
                    <td>{{ $mrd->tempat_lahir }}</td>
                    <td>{{ $mrd->agama }}</td>
                    <td>{{ $mrd->alamat }}</td>
                    <td>{{ $mrd->email }}</td>
                    <td>{{ optional($mrd->kelas)->nama_kelas ?? '-' }}</td>
                    <td class="text-center">
                      <a href="{{ route('murid.show', $mrd->id) }}" class="btn btn-sm btn-warning">Show</a>
                      <a href="{{ route('murid.edit', $mrd->id) }}" class="btn btn-sm btn-primary">Edit</a>
                      <form action="{{ route('murid.destroy', $mrd->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="10" class="text-center">Tidak ada data murid.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
          <small class="text-muted">Total: {{ $murid->count() }}</small>
          {{-- Jika menggunakan pagination:
              {{ $murid->links() }}
          --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection