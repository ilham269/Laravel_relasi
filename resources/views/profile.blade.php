@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="bi bi-person-circle me-2 fs-4"></i>
                    <h5 class="mb-0">Profil Saya</h5>
                </div>

                <div class="card-body bg-light">
                    <div class="text-center mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0d6efd&color=fff&size=100" 
                             class="rounded-circle shadow-sm mb-2" alt="Avatar">
                        <h5 class="fw-bold mb-0">{{ Auth::user()->name }}</h5>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <h6><i class="bi bi-envelope-fill me-2 text-primary"></i>Email</h6>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>

                    <div class="mb-3">
                        <h6><i class="bi bi-calendar-event-fill me-2 text-primary"></i>Bergabung Sejak</h6>
                        <p class="text-muted">{{ Auth::user()->created_at->format('d M Y') }}</p>
                    </div>

                    <div class="mb-3">
                        <h6><i class="bi bi-person-gear me-2 text-primary"></i>Role / Status Akun</h6>
                        <p class="text-muted">
                            {{ Auth::user()->role ?? 'Pengguna Biasa' }}
                        </p>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{url('home')}}" class="btn btn-outline-primary me-2">
                            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                        </a>
                       <a href="{{ route('profile.edit') }}" class="btn btn-primary">
    <i class="bi bi-pencil-square me-1"></i> Edit Profil
</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
