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
                                <h3 class="page-title">Basic Configuration</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-md-2 col-sm-4">
                            <a href="{{ route('basic-configuration.getClass') }}" class="config">Class</a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="{{ route('basic-configuration.getSection') }}" class="config">Section</a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="{{ route('basic-configuration.getSubject') }}" class="config">Subject</a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="{{ route('basic-configuration.getTerms') }}" class="config">Terms</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection