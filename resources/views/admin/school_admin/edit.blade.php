<!-- resources/views/admin/school_admin/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit School Admin</h1>

        <form method="POST" action="{{ route('school-admin.update', $user->id) }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password (Leave blank to keep the current password)</label>
                <input type="password" class="form-control" name="password" id="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Admin</button>
        </form>
    </div>
@endsection
