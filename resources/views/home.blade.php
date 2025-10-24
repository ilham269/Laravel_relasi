@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f8f9fa;
    }

    .dashboard-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .dashboard-header {
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: white;
        font-weight: bold;
        text-align: center;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 15px;
    }

    .dashboard-body {
        padding: 25px;
        text-align: center;
    }

    .dashboard-icon {
        font-size: 60px;
        color: #0d6efd;
        margin-bottom: 15px;
    }

    .welcome-text {
        font-size: 18px;
        color: #333;
    }

    .btn-dashboard {
        background-color: #0d6efd;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        margin-top: 15px;
    }

    .btn-dashboard:hover {
        background-color: #084298;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="dashboard-card">
                <div class="dashboard-header">
                    <h4>📊 Dashboard</h4>
                </div>

                <div class="dashboard-body">
                    <div class="dashboard-icon">👋</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="welcome-text">
                        {{ __('Selamat datang kembali, ') }}
                        <strong>{{ Auth::user()->name }}</strong>!<br>
                        {{ __('Kamu berhasil login ke sistem.') }}
                    </p>

                    <a href="#" class="btn btn-dashboard">Lihat Profil</a>
                    <a href="#" class="btn btn-outline-primary ms-2">Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
