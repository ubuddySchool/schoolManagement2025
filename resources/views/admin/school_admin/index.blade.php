@extends('admin.layouts.app')

@section('content')

    <div class="content container-fluid">
    <h1 class="mb-4">SchoolAdmins List</h1>

    <a href="{{ route('school-admin.create') }}" class="btn btn-primary mb-3">Create New Admin</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $admin)
                <tr>
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($admin->created_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                    <td>{{ \Carbon\Carbon::parse($admin->updated_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                    <td>
                            <a href="{{ route('school-admin.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('school-admin.destroy', $admin->id) }}" method="POST" style="display:inline-block;">
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