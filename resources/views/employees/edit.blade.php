@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Employee</div>

                <div class="card-body">
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ old('lastname', $employee->lastname) }}">
                            @error('lastname')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ old('firstname', $employee->firstname) }}">
                            @error('firstname')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate"
                                value="{{ old('birthdate', $employee->birthdate) }}">
                            @error('birthdate')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Isi alamat">{{ old('address', $employee->address) }}</textarea>
                            @error('address')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
    