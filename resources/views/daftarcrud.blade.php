@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Welcome to Daftar CRUD</h2>
    </div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row g-4">
        {{-- Card Template --}}
        @php
        $cards = [
            ['icon' => 'bi-people', 'title' => 'Kelas', 'route' => 'kelas.index', 'color' => 'primary'],
            ['icon' => 'bi-person-badge', 'title' => 'Murid', 'route' => 'murid.index', 'color' => 'success'],
            ['icon' => 'bi-telephone-fill', 'title' => 'Telepon', 'route' => 'telepon.index', 'color' => 'info'],
            ['icon' => 'bi-box', 'title' => 'Barang', 'route' => 'barang.index', 'color' => 'warning'],
            ['icon' => 'bi-person-check', 'title' => 'Pembeli', 'route' => 'pembeli.index', 'color' => 'danger'],
            ['icon' => 'bi-receipt', 'title' => 'Transaksi', 'route' => 'transaksi.index', 'color' => 'secondary'],
            ['icon' => 'bi-bag-check', 'title' => 'Product', 'route' => 'products.index', 'color' => 'primary'],
            ['icon' => 'bi-person-workspace', 'title' => 'Employees', 'route' => 'employees.index', 'color' => 'success'],
            ['icon' => 'bi-people', 'title' => 'Customer', 'route' => 'customer.index', 'color' => 'info'],
            ['icon' => 'bi-bag', 'title' => 'Order', 'route' => 'order.index', 'color' => 'warning'],
            ['icon' => 'bi-calendar-event', 'title' => 'order_detail', 'route' => 'order_detail.index', 'color' => 'info']

        ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm border-0 rounded-4 card-hover">
                <i class="bi {{ $card['icon'] }} fs-1 mb-3 text-{{ $card['color'] }}"></i>
                <h5>{{ $card['title'] }}</h5>
                <a href="{{ route($card['route']) }}" class="btn btn-{{ $card['color'] }} btn-sm mt-2">Lihat Data</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    body {
        transition: background-color 0.3s, color 0.3s;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: all 0.3s;
    }

    body.night-mode {
        background-color: #1a1a2e;
        color: #f0f0f0;
    }

    body.night-mode .card {
        background-color: #162447;
        color: #f0f0f0;
    }

    body.night-mode .btn-primary,
    body.night-mode .btn-success,
    body.night-mode .btn-info,
    body.night-mode .btn-warning,
    body.night-mode .btn-danger,
    body.night-mode .btn-secondary {
        filter: brightness(1.2);
    }
</style>

<script>
    const toggle = document.getElementById('nightModeToggle');
    toggle.addEventListener('click', () => {
    });
</script>
@endsection
