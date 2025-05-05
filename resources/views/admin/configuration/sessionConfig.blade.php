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
                                <h3 class="page-title">{{ $school->name }}</h3>
                            </div>
                        </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Academic Year</th>
                                <th>Status</th>
                                <th>Session Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($academicYears as $year)
                                <tr>
                                    <td>{{ $year->session_name }}</td>
                                    <td>Open/Close</td>
                                    <td>
                                    
                                    <a  class="btn btn-sm bg-warning-light me-2" href="{{ route('basic-configuration.getSession',['sch_id' => $school->id, 'sess_id' => $year->id]) }}" class="btn btn-sm bg-success-light me-2">
                                    <i class="feather-calendar"></i>
                                    </a>
                                    </td>
                                   
                               
                               
                                   
                                   
                               
                            
                                    <td>
                                    <a href="{{ route('configuration.index', ['sch_id' => $school->id, 'sess_id' => $year->id]) }}"
                                    class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>

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
@endsection
