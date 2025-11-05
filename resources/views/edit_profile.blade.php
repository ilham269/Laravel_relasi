@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="bi bi-pencil-square me-2 fs-4"></i>
                    <h5 class="mb-0">Edit Profil</h5>
                </div>

                <div class="card-body bg-light">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="text-center mb-4">
                            <img src="{{ $user->photo ? asset('storage/profile/'.$user->photo) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=0d6efd&color=fff&size=100' }}" 
                                 class="rounded-circle shadow-sm mb-2" width="100" height="100" alt="Foto Profil">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold text-primary">
                                <i class="bi bi-person-fill me-1"></i> Nama Lengkap
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                                   class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label fw-bold text-primary">
                                <i class="bi bi-image-fill me-1"></i> Foto Profil
                            </label>
                            <input type="file" name="photo" id="photo" accept="image/*" class="form-control" onchange="previewImage(event)">
<small class="text-muted">Format: JPG, PNG (maks. 2MB)</small>
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('profile.show') }}" class="btn btn-outline-primary me-2">
                                <i class="bi bi-arrow-left-circle me-1"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
