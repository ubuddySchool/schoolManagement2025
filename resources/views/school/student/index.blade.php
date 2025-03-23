@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                        <li class="breadcrumb-item active">All Students</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="student-group-form">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Category</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Gender</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Class</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="search-student-btn">
                    <select class="form-select">
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <h3 class="page-title">Students</h3>
                            </div>
                            <div class="col-8 ms-auto download-grp d-flex gap-3">
                                <input type="text" class="form-control mb-2 w-100 h-100" placeholder="Search by Name ...">
                                <button class="btn btn-sm btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center">Total Student: 30</button>
                                <button class="btn btn-sm btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center">Export</button>

                            </div>
                        </div>
                    </div>




                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </th>
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Gender</th>
                                    <th>Contact Number</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html"
                                                class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('assets/img/profiles/avatar-01.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>A</td>
                                    <td>Male</td>
                                    <td>097 3584 5870</td>
                                    <td class="text-end">
                                        <div class="actions ">
                                            <a href="{{ route('school_student.show') }}"
                                                class="btn btn-sm bg-purple text-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <!-- <a href="{{ route('school_student.edit') }}" class="btn btn-sm bg-info text-light">
                                                <i class="feather-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html"
                                                class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('assets/img/profiles/avatar-03.jpg')}}"
                                                    alt="User Image"></a>
                                            <a href="student-details.html">Malynne</a>
                                        </h2>
                                    </td>
                                    <td>8 A</td>
                                    <td>A</td>
                                    <td>Male</td>
                                    <td>242 362 3100</td>
                                    <td class="text-end">
                                        <div class="actions ">
                                            <a href="{{ route('school_student.show') }}"
                                                class="btn btn-sm bg-purple text-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <!-- <a href="{{ route('school_student.edit') }}" class="btn btn-sm bg-info text-light">
                                                <i class="feather-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html"
                                                class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('assets/img/profiles/avatar-10.jpg')}}"
                                                    alt="User Image"></a>
                                            <a href="student-details.html">Nathan Humphries</a>
                                        </h2>
                                    </td>
                                    <td>10 B</td>
                                    <td>A</td>
                                    <td>Male</td>
                                    <td>077 3499 9959</td>
                                    <td class="text-end">
                                        <div class="actions ">
                                            <a href="{{ route('school_student.show') }}"
                                                class="btn btn-sm bg-purple text-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <!-- <a href="{{ route('school_student.edit') }}" class="btn btn-sm bg-info text-light">
                                                <i class="feather-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection