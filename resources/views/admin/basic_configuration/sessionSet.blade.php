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
                                <h3 class="page-title">Set School Session</h3>
                            </div>                            
                        </div>
                    </div>
                    
                    <form action="" method="POST">
                        <div class="form-group local-forms">
                            <div class="row my-4">
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms calendar-icon mb-0">
                                        <label>Start Date <span class="login-danger">*</span> </label>
                                        <input class="form-control datetimepicker" type="text" value="" placeholder="DD-MM-YYYY" name="startDate">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group local-forms calendar-icon mb-0">
                                        <label>End Date <span class="login-danger">*</span> </label>
                                        <input class="form-control datetimepicker" type="text" value="" placeholder="DD-MM-YYYY" name="endDate">
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


