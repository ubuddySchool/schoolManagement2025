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
                                <a href="{{ route('basic-configuration.store') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-sm-3">
                            <a href="{{ route('basic-configuration.subjectToSchool') }}" class="config">To School</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('basic-configuration.subjectToClass') }}" class="config">To Class</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('basic-configuration.subjectType') }}" class="config">Assign Subject Type</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('basic-configuration.subjectToModule') }}" class="config">To Module</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection