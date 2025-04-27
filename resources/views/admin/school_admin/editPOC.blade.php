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
                            <a href="{{ route('school-admin.poc',$poc->school_id) }}" class="text-decoration-none text-dark me-2 backButton">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                                <h3 class="page-title">Edit POC</h3>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('school-admin.pocs.update', $poc->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-table comman-shadow mb-0">
                                    <div class="card-body">
                                        <div class="student-group-form" style="margin-bottom: 0;">
                                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms mb-0">
                                                            <label for="pocName">POC Name</label>
                                                            <input type="text" name="pocName" id="pocName" class="form-control" value="{{ old('pocName', $poc->poc_name) }}" required>
                                                        </div>
                                                    </div>

                                                    <!-- POC Gender -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms">
                                                            <label for="pocGender">Gender <span class="login-danger">*</span></label>
                                                            <select name="pocGender" class="currclass form-control" required>
                                                                <option value=""> - Select Gender - </option>
                                                                <option value="Male" {{ old('pocGender', $poc->poc_gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                                                <option value="Female" {{ old('pocGender', $poc->poc_gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- POC Date of Birth -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms">
                                                            <label for="pocDOB">POC Date of Birth</label>
                                                            <input type="date" name="pocDOB" id="pocDOB" class="form-control" value="{{ old('pocDOB', $poc->poc_dob) }}">
                                                        </div>
                                                    </div>

                                                    <!-- POC Designation -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms">
                                                            <label for="pocDesignation">POC Designation</label>
                                                            <input type="text" name="pocDesignation" id="pocDesignation" class="form-control" value="{{ old('pocDesignation', $poc->poc_designation) }}" required>
                                                        </div>
                                                    </div>

                                                    <!-- POC Contact Number -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms">
                                                            <label for="pocNumber">POC Contact Number</label>
                                                            <input type="text" name="pocNumber" id="pocNumber" class="form-control" value="{{ old('pocNumber', $poc->poc_contact_number) }}" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" maxlength="10" pattern="\d{10}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3">
                                                            <div class="form-group local-forms">
                                                                <label>Alternate Contact Number </label>
                                                                <input class="form-control" name="poc_alternate_contact_number" placeholder="Enter Alternate Number" value="{{ old('poc_alternate_contact_number', $poc->poc_alternate_contact_number) }}" maxlength="10" pattern="\d{10}" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                            </div>
                                                        </div>

                                                    <!-- POC Email -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group local-forms">
                                                            <label for="pocEmail">POC Email</label>
                                                            <input type="email" name="pocEmail" id="pocEmail" class="form-control" value="{{ old('pocEmail', $poc->poc_email) }}" required>
                                                        </div>
                                                    </div>

                                                    <!-- Submit Button -->
                                                    <button type="submit" class="btn btn-primary">Update POC</button>
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