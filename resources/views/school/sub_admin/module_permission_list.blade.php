@extends('layouts.app')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-auto d-flex">
                    <a href="{{ route('subAdmin.index') }}"
                        class="text-decoration-none text-dark me-2 backButton">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div class="page-sub-header">
                        <h3 class="page-title">Active Module List</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Aaliyah</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('subAdmin.modulePermission') }}" class="btn btn-primary me-2">Manage Permissions</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="subjectWiseTable"
                                class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Module Name</th>
                                        <th>Read/View</th>
                                        <th>Write/Add</th>
                                        <th>Edit/Update</th>
                                        <th>Delete</th>
                                        <th>Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $students = [
                                            [ 'name' => 'Student Management', ],
                                            [ 'name' => 'Staff', ],
                                            [ 'name' => 'Attendance', ],
                                            [ 'name' => 'Sub-Admin Panel', ],
                                            [ 'name' => 'Enquiry', ],
                                            [ 'name' => 'Certificates', ],
                                        ];
                                    @endphp
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $student['name'] }}</td>
                                            <td>
                                                <button class="permission-active">
                                                    <i class="fas fa-check-circle"></i>
                                                </button>
                                            </td>                                            
                                            <td>
                                                <button class="permission-inactive">
                                                    <i class="fas fa-times-circle"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="permission-active">
                                                    <i class="fas fa-check-circle"></i>
                                                </button>
                                            </td>                                            
                                            <td>
                                                <button class="permission-inactive">
                                                    <i class="fas fa-times-circle"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="permission-active">
                                                    <i class="fas fa-check-circle"></i>
                                                </button>
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
