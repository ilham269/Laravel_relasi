@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Employees</div>

                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
                            @error('birthdate')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Isi alamat">{{ old('address') }}</textarea>
                            @error('address')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
