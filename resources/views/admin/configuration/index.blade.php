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
                                <h3 class="page-title">Configuration Panel</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-sm-4">
                            <a href="{{ route('assign-module.assignModule') }}" class="config">Assign Module</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ route('basic-configuration.store') }}" class="config">Basic Configuration</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ route('configuration.moduleconfig') }}" class="config">Module Configuration</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection