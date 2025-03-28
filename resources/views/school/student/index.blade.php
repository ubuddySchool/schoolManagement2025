@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Students list</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="student-group-form">
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Class</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="search-student-btn">
                    <select class="form-select">
                        <option>Select Section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
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
                            <div class="col">
                                <h3 class="page-title">Students</h3>
                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp">
                                 <a class="btn btn-primary"> Total Student : 3</a>
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp">
                               <button type="button" class="btn btn-primary reminder-btn" data-bs-toggle="modal" data-bs-target="#export-alert-modal">Export</button>
                            </div>
                        </div>
                    </div>




                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
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

                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
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
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <!-- <a href="{{ route('school_student.edit') }}" class="btn btn-sm bg-info text-light">
                                                <i class="feather-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
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
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <!-- <a href="{{ route('school_student.edit') }}" class="btn btn-sm bg-info text-light">
                                                <i class="feather-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>3</td>
                                    <td>
                                        <h2 class="table-avatar">
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
                                                class="btn btn-sm bg-success-light me-2">
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