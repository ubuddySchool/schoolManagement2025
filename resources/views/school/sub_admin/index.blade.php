@extends('layouts.app')

@section('content')
    <div class="content container-fluid">

        {{-- <div class="page-header">
            <div class="row">
                <div class="col-auto">
                    <div class="page-sub-header">
                        <h3 class="page-title">Sub-Admin Authentication</h3>
                    </div>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="#" class="btn btn-primary me-2">Add New</a>
                    <a href="{{ route('student.result.lock') }}" class="btn btn-primary me-2">Add New</a>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body p-4">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Sub-Admin List</h3>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="search" id="myInput" onkeyup="myFunction()"
                                        placeholder="Search By Name" class="form-control" />
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('subAdmin.new') }}" class="btn btn-primary me-2">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="subjectWiseTable"
                                class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Contact Number</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $students = [
                                            [
                                                'name' => 'Aaliyah',
                                                'number' => '1234567890',
                                                'role' => 'Teacher',
                                                'section' => 'A',
                                                'status' => 'Active',
                                            ],
                                            [
                                                'name' => 'Malynne',
                                                'number' => '1234567890',
                                                'role' => 'Teacher',
                                                'section' => 'A',
                                                'status' => 'Active',
                                            ],
                                            [
                                                'name' => 'Nathan Humphries',
                                                'number' => '1234567890',
                                                'role' => 'Teacher',
                                                'section' => 'A',
                                                'status' => 'Active',
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $student['name'] }}</td>
                                            <td>{{ $student['role'] }}</td>
                                            <td>{{ $student['number'] }}</td>
                                            <td>
                                                <input type="checkbox" class="pstatus" id="10" data-id="10"
                                                    checked>
                                                <label class="label-switch" for="10"></label>
                                            </td>
                                            {{-- <td>{{ $student['status'] }}</td> --}}
                                            <td class="">
                                                <div>
                                                    <button type="button" class="btn btn-sm bg-success-light"
                                                        data-bs-toggle="modal" data-bs-target="#configModal">
                                                        <i class="feather-eye"></i>
                                                    </button>                                                    
                                                    <a href="{{ route('subAdmin.activeModuleList') }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="fa-solid fa-gears"></i>
                                                    </a>
                                                    {{-- <a href="" class="btn btn-sm bg-danger">
                                                        <i class="feather-trash"></i>
                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal OUTSIDE the table -->
                                        <div class="modal fade" id="configModal" tabindex="-1"
                                        aria-labelledby="configModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="configModalLabel">Sub-Admin
                                                            Details</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><strong>Admin Name:</strong> Ajay</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>Role:</strong> Teacher</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>Gender:</strong> Male</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>DOB:</strong> 12-03-2001</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="d-flex"><strong class="me-3">Profile
                                                                        Image:</strong>
                                                                    <img src="{{ asset('assets/img/favicon.png') }}"
                                                                        class="" width="60">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>Contact Number:</strong> 9912032001
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>Alternate Contact Number:</strong>
                                                                    9912032001</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><strong>Email:</strong> demo@gmail.com</p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><strong>Remark:</strong> jasn aksjdgkausd asd
                                                                    gkas bkauysg kay</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
