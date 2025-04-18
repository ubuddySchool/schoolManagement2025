@extends('layouts.app')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Student Profile</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-info">
                            <h4>Profile</h4>
                        </div>
                        <div class="student-profile-head">
                            <!--<div class="profile-bg-img">-->
                            <!--<img src="student_images/" alt="student_images/" height="250">-->
                            <!--</div>-->
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="profile-user-box">
                                        <div class="profile-user-img">
                                            <img src="{{ asset('assets/img/default.png') }}" alt="Profile student_images/"
                                                width="100" height="140">
                                            <div class="form-group students-up-files profile-edit-icon mb-0 d-none">
                                                <div class="uplod d-flex">
                                                    <label class="file-upload profile-upbtn mb-0">
                                                        <i class="feather-edit-3"></i><input type="file">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="names-profiles">
                                            <h4 style=" text-transform: uppercase;">Default</h4>
                                            <h5>12&nbsp; Science Maths</h5>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 d-flex align-items-center">
                                    <div class="follow-group justify-content-center">
                                        <div class="students-follows">
                                            <h5>Father's Name</h5>
                                            <h6 style=" text-transform: capitalize;">test Father</h6>
                                        </div>
                                        <!--<div class="students-follows">-->
                                        <!--    <h5>Mother's Name</h5>-->
                                        <!--    <h4></h4>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 d-flex align-items-center">
                                    <div class="follow-btn-group">
                                        <div class="students-follows">
                                            <h5>Contact Number</h5>
                                            <h6>987-654-3210</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-primary me-2">Active</a>
                                    <a href="#" class="btn btn-danger me-2">Inactive</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin:1.5rem 0">

                    <div class="col-lg-8">
                        <div class="student-personals-grp">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Student's Basic Details</h4>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="personal-activity">
                                                <div class="views-personal">
                                                    <h5>Student Name</h5>
                                                    <h4>Default</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="personal-activity">
                                                <div class="views-personal">
                                                    <h5>Gender</h5>
                                                    <h4>Male</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="personal-activity">
                                                <div class="views-personal">
                                                    <h5>Category </h5>
                                                    <h4>General</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="personal-activity">
                                                <div class="views-personal">
                                                    <h5>Primary Contact Number</h5>
                                                    <h4>123-123-1230</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Admission Details</h4>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Admission Type</h5>
                                            <h4>NON - RTE</h4>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Admission Date </h5>
                                            <h4>02-06-2023</h4>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Scholar/Admission Number</h5>
                                            <h4>123485</h4>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Admission Class</h5>
                                            <h4>10</h4>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Session</h5>
                                            <h4>2023-24</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Bank Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row" style="margin:1.5rem 0">

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Academic Details</h4>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Current Session</h5>
                                            <h4>2025-26</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Current Address</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Permanent Address</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row" style="margin:1.5rem 0">

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Father Details</h4>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="views-personal">
                                            <h5>Father's Name</h5>
                                            <h4>Raj Maheshwari</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Mother Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Guardian Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row" style="padding-bottom: 80px;">
                        <div class="about-info">
                            <h4>Document Images</h4>
                        </div>
                        <div class="col-sm-4" style="padding: 10px; 0">
                            <a href="student_images/1685745348Untitled-1.png" data-lightbox="event-gallery"
                                data-title="1685745348Untitled-1.png">
                                <img src="{{ asset('assets/img/default.png') }}" width="100%" height="300">
                            </a>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
@endsection
