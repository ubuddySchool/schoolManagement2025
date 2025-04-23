@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('schooladmin.index') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">POC list</h3>
                            </div>
                            {{-- <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div> --}}
                            <div class="col-auto">
                                <a href="{{ route('school-admin.pocCreate') }}" class="btn btn-primary me-2">Add POC</a>
                            </div>


                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>POC Name</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Test</td>
                                        <td>Principal</td>
                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert1"><i class="feather-edit"></i> </a>
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
</div>
@endsection