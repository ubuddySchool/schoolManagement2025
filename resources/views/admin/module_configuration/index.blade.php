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
                                <a href="{{ route('configuration.index') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Greenland School | 2025-26 | Module Configuration</h3>
                            </div>
                        </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Module Configuration</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Student Enquiry</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.enquiry') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Staff Enquiry</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.enquiry') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Student Management</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.student_management') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Attendance</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.attendance') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Admit Card</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.admitCard') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Result</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.result') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Annual Calender</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.annualCalender') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Certificate</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.certificate') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fee</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.fee') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Transportation</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.transportation') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection