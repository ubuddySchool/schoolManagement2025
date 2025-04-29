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
                               {{-- <a href="{{ route('configuration.sessionConfig') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a> --}}
                                <h3 class="page-title">Greenland School | 2025-26</h3>
                                {{-- <div class="px-4">
                                    <h6>Current Session: <strong>{{ $selectedOption }}</strong></h6>
                                </div> --}}
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
                                    <a href="{{ route('assign-module.assignModule') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
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