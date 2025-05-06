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
                                <a href="{{ route('basic-configuration.store',['id' => $ids]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject</h3>
                            </div>
                        </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Assign Subject</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>To School</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('basic-configuration.subjectToSchool',['id' => $ids]) }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>To Class</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('basic-configuration.subjectToClass') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Assign Subject Type</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('basic-configuration.subjectType') }}" class="btn btn-sm bg-success-light me-2">
                                        <i class="feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>To Module</td>
                                <td>Open/Locked</td>
                                <td>
                                    <a href="{{ route('basic-configuration.subjectToModule') }}" class="btn btn-sm bg-success-light me-2">
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