@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
            <h1>Register</h1>
            <form action="{{ route('register.create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email"
                        class="form-control @error('email') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" value="{{ old('name') }}" name="name"
                        class="form-control @error('name') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
