<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #0d6efd;
            color: #fff;
            position: fixed;
            width: 240px;
            top: 0;
            left: 0;
            padding-top: 60px;
            transition: all 0.4s ease;
            transform: translateX(0);
            z-index: 999;
        }
        .sidebar.closed { transform: translateX(-100%); }
        .sidebar a {
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .sidebar a:hover { background: #0b5ed7; }
        .sidebar .active { background: #084298; }

        /* Content */
        .content {
            margin-left: 240px;
            padding: 20px;
            transition: margin-left 0.4s ease, background-color 0.3s, color 0.3s;
        }
        .content.shifted { margin-left: 0; }

        /* Card Hover */
        .card-hover {
            transition: all 0.3s;
            border-radius: 1rem;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* Night Mode */
        body.night-mode {
            background-color: #1a1a2e;
            color: #f0f0f0;
        }
        body.night-mode .navbar { background-color: #0b0b1f !important; }
        body.night-mode .navbar-brand { color: #f0f0f0 !important; }
        body.night-mode .sidebar { background-color: #162447; }
        body.night-mode .sidebar a { color: #f0f0f0; }
        body.night-mode .sidebar a:hover { background: #1f305e; }
        body.night-mode .card { background-color: #162447; color: #f0f0f0; }
        body.night-mode .btn-primary,
        body.night-mode .btn-success,
        body.night-mode .btn-info,
        body.night-mode .btn-warning,
        body.night-mode .btn-danger,
        body.night-mode .btn-secondary {
            filter: brightness(1.2);
        }

        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.active { transform: translateX(0); }
            .content { margin-left: 0; }
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md bg-white shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-outline-primary me-3" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-house-door-fill me-1"></i> {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-3">
                            <button class="btn btn-dark btn-sm" id="nightModeToggle">Night Mode</button>
                        </li>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right me-1"></i> {{ __('Login') }}
                            </a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">
                                <i class="bi bi-person-plus me-1"></i> {{ __('Register') }}
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right me-1"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ url('/daftarcrud') }}" class="{{ request()->is('daftarcrud') ? 'active' : '' }}">
                <i class="bi bi-card-list"></i> Daftar CRUD
            </a>
            <a href="#"><i class="bi bi-gear"></i> Pengaturan</a>
        </div>

        <!-- Main Content -->
        <main class="content py-4" id="mainContent">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('toggleSidebar');
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('closed');
            content.classList.toggle('shifted');
        });

        const nightBtn = document.getElementById('nightModeToggle');
        const body = document.body;

        // Cek localStorage saat load halaman
        if(localStorage.getItem('nightMode') === 'enabled'){
            body.classList.add('night-mode');
            nightBtn.textContent = 'Light Mode';
        }

        nightBtn.addEventListener('click', () => {
            body.classList.toggle('night-mode');

            if(body.classList.contains('night-mode')){
                localStorage.setItem('nightMode', 'enabled');
                nightBtn.textContent = 'Light Mode';
            } else {
                localStorage.setItem('nightMode', 'disabled');
                nightBtn.textContent = 'Night Mode';
            }
        });
    </script>
</body>
</html>
