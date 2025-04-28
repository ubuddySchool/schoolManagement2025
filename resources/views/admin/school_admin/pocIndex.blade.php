<!-- resources/views/admin/pocs/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col align-items-center">
                                <a href="{{ route('schooladmin.index') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title mb-0">POC List</h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('school-admin.pocCreate', parameters: $id) }}" class="btn btn-primary">Add POC</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 table-hover table-center mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pocs as $index => $poc)
                                    <tr>
                                        <td>{{ (int) $index + 1 }}</td>
                                        <td>{{ $poc->poc_name }}</td>
                                        <td>{{ $poc->poc_gender }}</td>
                                        <td>{{ $poc->poc_contact_number }}</td>
                                        <td>{{ $poc->poc_email }}</td>
                                        <td>
                                            <a href="{{ route('school-admin.pocedit', $poc->id) }}" class="btn btn-sm bg-success-light">Edit</a>
                                            {{-- <form action="{{ route('school-admin.pocs.destroy', $poc->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm bg-danger-light">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
