@extends('admin.layouts.app')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-auto d-flex">
                    <a href="{{ route('admin-configuration.configAdmin') }}"
                        class="text-decoration-none text-dark me-2 backButton">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div class="page-sub-header">
                        <h3 class="page-title">Admin Configuration Form</h3>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin-configuration.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow ">
                        <div class="card-body">
                            <div class="student-group-form" style="margin-bottom: 0;">
                                <div class="form-group local-forms" style="margin-bottom: 0;">

                                    <div class="row" style="margin-top: 40px; padding: 0 10px;">

                                        <input class="form-control" name="enquiryStatus" type="text"
                                            value="Running" hidden>
                                        <input class="form-control" name="schoolID" type="text"
                                            value="20" hidden>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Admin Name <span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control" name="name" type="text" value="{{ old('name') }}"
                                                    placeholder="Enter Name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="sform-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select name="gender" class="currclass form-control"
                                                    required>
                                                    <option value=""> - Select Gender - </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date of Birth</label>
                                                <input class="form-control datetimepicker" type="text" value="{{ old('name') }}"
                                                    placeholder="DD-MM-YYYY" name="dob">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Profile Image</label>
                                                <input class="form-control" name="profile_image" value="{{ old('profile_image') }}"
                                                    accept=".jpg, .jpeg, .png" type="file">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Contact Number <span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control" name="contact_number" type="text"
                                                    placeholder="Enter Number" maxlength="10" pattern="\d{10}"
                                                    title="Enter Number" required value="{{ old('contact_number') }}"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Alternate Contact Number </label>
                                                <input class="form-control" name="alternate_number"
                                                    placeholder="Enter Alternate Number" maxlength="10"
                                                    pattern="\d{10}" type="text" value="{{ old('alternate_number') }}"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Username <span class="login-danger">*</span></label>
                                                <input class="form-control" name="username" value="{{ old('username') }}"
                                                    type="text" placeholder="Enter Sub Admin username" required>
                                            </div>
                                        </div> 

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input class="form-control" name="email" type="email" value="{{ old('email') }}"
                                                    placeholder="Enter Email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group local-forms">
                                                <label>Password <span class="login-danger">*</span></label>
                                                <input class="form-control" name="password" value="{{ old('password') }}"
                                                    type="password" placeholder="Enter Passwrd" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group local-forms">
                                                <label>Remarks</label>
                                                <input class="form-control" name="remark" value="{{ old('remark') }}"
                                                    placeholder="Enter Remark" type="text" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="student-submit" style="display: flex;justify-content: center;">
                                                <button type="submit" class="btn btn-primary"
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
@endsection
