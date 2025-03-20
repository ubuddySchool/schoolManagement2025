@extends('admin.layouts.app')

@section('content')

    <div class="content container-fluid">
    <h1 class="mb-4">SubAdmins List</h1>

    <a href="{{ route('admin.subadmins.create') }}" class="btn btn-primary mb-4">Add Subadmin</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Loop counter -->
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>    {{ $admin->role == 1 ? 'Admin' : 'Subadmin' }}
                    </td>
                    <td>{{ \Carbon\Carbon::parse($admin->created_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                    <td>{{ \Carbon\Carbon::parse($admin->updated_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                    <td>
                        <a href="{{ route('admin.subadmins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.subadmins.destroy', $admin->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection