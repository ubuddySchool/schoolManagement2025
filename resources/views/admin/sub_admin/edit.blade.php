@extends('admin.layouts.app')

@section('content')
<div class="content container-fluid">
    <h1 class="mb-4">Edit Subadmin</h1>

    <form action="{{ route('admin.subadmins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Password (Leave blank to keep current password)</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Subadmin</button>
    </form>
</div>
@endsection
