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
                                    <a href="{{ route('module-configuration.moduleconfig') }}"
                                        class="text-decoration-none text-dark me-2 backButton ">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Fee Management</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

