@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f8f9fa;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Dashboard Card */
    .dashboard-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, background-color 0.3s, color 0.3s;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    /* Header */
    .dashboard-header {
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: white;
        font-weight: bold;
        text-align: center;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding: 15px;
    }

    /* Body */
    .dashboard-body {
        padding: 30px;
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
        margin-bottom: 20px;
    }

    /* Buttons */
    .btn-dashboard {
        background-color: #0d6efd;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 25px;
        margin-top: 10px;
        transition: background-color 0.3s;
    }
    .btn-dashboard:hover {
        background-color: #084298;
    }

    .btn-outline-dashboard {
        border-radius: 8px;
        padding: 10px 25px;
        margin-top: 10px;
    }

    /* Night Mode */
    body.night-mode {
        background-color: #1a1a2e;
        color: #f0f0f0;
    }
    body.night-mode .dashboard-card {
        background-color: #162447;
        color: #f0f0f0;
    }
    body.night-mode .dashboard-header {
        background: linear-gradient(135deg, #1f305e, #162447);
    }
    body.night-mode .dashboard-icon {
        color: #4da6ff;
    }
    body.night-mode .btn-dashboard {
        filter: brightness(1.2);
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

                    <a href="profile" class="btn btn-dashboard">Lihat Profil</a>
                    <a href="#" class="btn btn-outline-primary btn-outline-dashboard ms-2">Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
