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
                               
                                <a href="{{ route('configuration.index',['sch_id' => $school->id,'sess_id' =>$academicYear->id]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">{{ $school->name }} | {{ $academicYear->session_name }} | Basic Configuration</h3>
                            </div>
                        </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Basic Configuration</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Class</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <!-- <a href="{{ route('basic-configuration.getClass') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a> -->
                                    <form action="{{ route('basic-configuration.getClass') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="school" value="{{ $school->id }}">
                                            <input type="hidden" name="session" value="{{ $academicYear->id }}">

                                            <button type="submit" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </button>
                                        </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Section</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getSection') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getSubject') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Terms</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getTerms') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Student Form</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getStudentForm') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Staff Form</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getStaffForm') }}" class="btn btn-sm bg-success-light me-2">
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