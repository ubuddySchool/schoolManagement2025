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
                                    <a href="{{ route('school-admin.poc') }}"
                                        class="text-decoration-none text-dark me-2 backButton">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Add New POC</h3>
                                </div>
                            </div>
                        </div>


                        <form method="post" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-table comman-shadow mb-0">
                                        <div class="card-body">
                                            <div class="student-group-form" style="margin-bottom: 0;">
                                                <div class="form-group local-forms" style="margin-bottom: 0;">

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>POC Name <span
                                                                        class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocName"
                                                                    type="text" placeholder="Enter Name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>Designation <span class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocDesignation"
                                                                    type="text" placeholder="Enter Sub Admin Role"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>Contact Number <span
                                                                        class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocNumber"
                                                                    type="text" placeholder="Enter Number" maxlength="10"
                                                                    pattern="\d{10}" title="Enter Number" required
                                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="student-submit"
                                                                style="display: flex;justify-content: center;">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="submit_details"
                                                                    style="font-size: 1.2rem;min-width: 200px;">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
