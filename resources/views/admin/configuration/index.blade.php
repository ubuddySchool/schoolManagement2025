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
                            
                                <a href="{{ route('configuration.sessionConfig',['id' => $school->id]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">{{ $school->name }} | {{ $academicYear }}</h3>
                                
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Configuration</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Assign Module</td>
                                <td>Open/Locked</td>
                                <td>
                                     <form action="{{ route('assign-module.assignModule') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="school" value="{{ $school->id }}">
                                            <input type="hidden" name="session" value="{{ $academicYear }}">
                                            
                                            <button type="submit" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </button>
                                        </form>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Basic Configuration</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('basic-configuration.store') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Module Configuration</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('module-configuration.moduleconfig') }}" class="btn btn-sm bg-success-light me-2">
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