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
                                @if($assignClassStatus == 1)
                                    <td><span class="badge bg-secondary">Locked</td>
                                    <td><button type="submit" class="btn btn-sm bg-success-light me-2" disabled>
                                                <i class="feather-eye"></i>
                                            </button></td>
                                @else
                                    <td><span class="badge bg-success">Open</span></td>
                                    <td>
                                        <a class="btn btn-sm bg-success-light me-2" href="{{ route('basic-configuration.getClass',['id' => $id]) }}">
                                            <i class="feather-eye"></i>
                                        </a>
                                    </td>
                                @endif

                            </tr>
                            <tr>
                                <td>Section</td>
                                 <td><span class="badge bg-success ">Open</span></td>
                                <td>
                                    <a href="{{ route('basic-configuration.getSection',['id' => $id]) }}" class="btn btn-sm bg-success-light me-2">
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