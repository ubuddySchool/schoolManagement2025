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
                                <a href="{{ route('module-configuration.moduleconfig') }}" class="text-decoration-none text-dark me-2 backButton ">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Result Configuration</h3>
                            </div>                            
                        </div>
                    </div>                                       
                    
                    <div class="row my-3">
                        <div class="col-sm-3">
                            <a href="{{ route('module-configuration.grade') }}" class="config">Assign Grade</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('module-configuration.resultType') }}" class="config">Assign Result Type</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('module-configuration.markPattern') }}" class="config">Marking Pattern</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
