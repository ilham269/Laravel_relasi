@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Detail dataemployes</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label"><strong>Lastname</strong></label>
                        <p>{{ $dataemployes->lastname }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Firstname</strong></label>
                        <p>{{ $dataemployes->firstname }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Birthdate</strong></label>
                        <p>{{ $dataemployes->birthdate }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Address</strong></label>
                        <p>{{ $dataemployes->address }}</p>
                    </div>

                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
