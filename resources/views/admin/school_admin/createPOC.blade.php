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
                                    <a href="{{ route('school-admin.poc',$school_id) }}" class="text-decoration-none text-dark me-2 backButton">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Add New POC</h3>
                                </div>
                            </div>
                        </div>

                        <form method="post" action="{{ route('school-admin.pocs.store') }}">
                            @csrf
                            <input type="hidden" name="school_id" value="{{ $school_id }}"> <!-- Hidden field for school_id -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-table comman-shadow mb-0">
                                        <div class="card-body">
                                            <div class="student-group-form" style="margin-bottom: 0;">
                                                <div class="form-group local-forms" style="margin-bottom: 0;">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>POC Name <span class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocName" type="text" placeholder="Enter Name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="sform-group local-forms">
                                                                <label>Gender <span class="login-danger">*</span></label>
                                                                <select name="pocGender" class="currclass form-control" required>
                                                                    <option value=""> - Select Gender - </option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms calendar-icon">
                                                                <label>Date of Birth</label>
                                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="pocDOB">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>Designation <span class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocDesignation" type="text" placeholder="Enter Sub Admin Role" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms mb-0">
                                                                <label>Contact Number <span class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocNumber" type="text" placeholder="Enter Number" maxlength="10" pattern="\d{10}" title="Enter Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms">
                                                                <label>Alternate Contact Number </label>
                                                                <input class="form-control" name="poc_alternate_contact_number" placeholder="Enter Alternate Number" maxlength="10" pattern="\d{10}" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms">
                                                                <label>Email <span class="login-danger">*</span></label>
                                                                <input class="form-control" name="pocEmail" type="email" placeholder="Enter Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="student-submit" style="display: flex;justify-content: center;">
                                                                <button type="submit" class="btn btn-primary" style="font-size: 1.2rem;min-width: 200px;">Submit</button>
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
