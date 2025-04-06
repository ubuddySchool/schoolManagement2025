@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Student Enquiry Details</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">
                    <div class="student-group-form" style="margin-bottom: 0;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-group local-forms" style="margin-bottom: 0;">
                                        <select name="enquiryStatus" class="currclass">
                                            <option value=""> - Select Status - </option>
                                            <option value="Running">Running</option>
                                            <option value="Confirm">Confirm</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-group local-forms" style="margin-bottom: 0;">
                                        <select name="currentClass" class="currclass" id="selectclassacad" data-school="20">
                                            <option value=""> - Select Class - </option>
                                            <option value="86" data-classcat="A">Nursery</option>
                                            <option value="88" data-classcat="A">UKG</option>
                                            <option value="89" data-classcat="A">1</option>
                                            <option value="90" data-classcat="A">2</option>
                                            <option value="91" data-classcat="A">3</option>
                                            <option value="92" data-classcat="A">4</option>
                                            <option value="93" data-classcat="A">5</option>
                                            <option value="94" data-classcat="A">6</option>
                                            <option value="95" data-classcat="A">7</option>
                                            <option value="96" data-classcat="A">8</option>
                                            <option value="97" data-classcat="A">9</option>
                                            <option value="98" data-classcat="A">10</option>
                                            <option value="99" data-classcat="B">11</option>
                                            <option value="100" data-classcat="B">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-group local-forms" style="margin-bottom: 0;">
                                        <select name="feesStatus" class="currclass" id="feesStatusDropdown" data-school="20">
                                            <option value=""> - Select Fees Status - </option>
                                            <option value="admission_paid">Admission Fees Paid</option>
                                            <option value="registration_paid">Registration Fees Paid</option>
                                            <option value="admission_unpaid">Admission Fees Unpaid</option>
                                            <option value="registration_unpaid">Registration Fees Unpaid</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">

                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp">


                                <a href="{{ route('school_student.add.enquiry') }}" class="btn btn-primary">New Enquiry</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Status</th>
                                        <th>Student Name</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                        <th>Visit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> Ram </h2>
                                        </td>


                                        <td>6</td>



                                        <td>
                                            <div>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert1"><i class="feather-edit"></i> </a>
                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal1"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal1" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm bg-success-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: fit-content;">
                                                    Options
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feesunpaid') }}">Registration Fees</a></li> 
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.add') }}">Registration Form</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feespaid') }}">Registration Fees paid</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feesunpaid') }}">Admission Fees</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feespaid') }}">Admission Fees Paid</a></li> -->
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> fgadf </h2>
                                        </td>



                                        <td>10</td>
                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert2"><i class="feather-edit"></i> </a>
                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal2"><i class="feather-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal2" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm bg-success-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: fit-content;">
                                                    Options
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.feesunpaid') }}">Registration Fees</a></li>  -->
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feespaid') }}">Registration Fees paid</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.add') }}">Registration Form</a></li>
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.admission.feesunpaid') }}">Admission Fees</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feespaid') }}">Admission Fees Paid</a></li> -->
                                                       
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> Amit Jain </h2>
                                        </td>

                                        <!--<td>Ravindra Jain</td>-->

                                        <td>12()</td>


                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert3"><i class="feather-edit"></i> </a>


                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal3"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal3" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm bg-success-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: fit-content;">
                                                    Options
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.feesunpaid') }}">Registration Fees</a></li>  -->
                                                    <li><a class="dropdown-item" href="{{ route('school_student.add') }}">Registration Form</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feespaid') }}">Registration Fees paid</a></li>
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.admission.feesunpaid') }}">Admission Fees</a></li> -->
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feespaid') }}">Admission Fees Paid</a></li>
                                                       
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> ankit </h2>
                                        </td>


                                        <td>1</td>


                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert4"><i class="feather-edit"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal4"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal4" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm bg-success-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: fit-content;">
                                                    Options
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.feesunpaid') }}">Registration Fees</a></li>  -->
                                                    <li><a class="dropdown-item" href="{{ route('school_student.add') }}">Registration Form</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feespaid') }}">Registration Fees paid</a></li>
                                                    <!-- <li><a class="dropdown-item" href="{{ route('school_student.admission.feesunpaid') }}">Admission Fees</a></li> -->
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feespaid') }}">Admission Fees Paid</a></li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> dgdh </h2>
                                        </td>

                                        <!--<td></td>-->

                                        <td>6</td>

                                        <!--<td></td>-->

                                        <!--<td>363-454-5454</td>-->

                                        <!--<td></td>-->
                                        <!--<td></td>-->

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert5"><i class="feather-edit"></i> </a>



                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal5"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal5" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm bg-success-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: fit-content;">
                                                    Options
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feesunpaid') }}">Registration Fees</a></li> 
                                                    <li><a class="dropdown-item" href="{{ route('school_student.add') }}">Registration Form</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.feespaid') }}">Registration Fees paid</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feesunpaid') }}">Admission Fees</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('school_student.admission.feespaid') }}">Admission Fees Paid</a></li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <p id="noRecordsMessage" style=" margin-top: 10px; display: none;">No matching records found.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div id="danger-alert-modal1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 400px;">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form action="" method="post" id="sectionForm">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure? You want to delete this Enquiry.</p>
                        <!--<button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>-->
                        <a href="delete-enquiry.php?id=1" class="btn btn-sm bg-danger-light">Confirm
                            <!--<i class="feather-trash-2"></i>-->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="danger-alert1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Enquiry Status</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <!--    Student details edit section start    -->

                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="1" hidden>
                        <input class="form-control" name="schoolID" type="text" value="20" hidden>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Enquiry Status <span class="login-danger">*</span></label>
                                <select name="enquiryStatusUpdate" class="currclass">
                                    <option value="Running" selected> Running </option>
                                    <option value="Running">Running</option>
                                    <option value="Confirm">Confirm</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuName" type="text" value="ankit ">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Class <span class="login-danger">*</span></label>
                                <select name="currentClass" class="currclass" id="selectclassacad">
                                    <option selected value="94">6</option>
                                    <option value="86" data-classcat="A">Nursery</option>
                                    <option value="88" data-classcat="A">UKG</option>
                                    <option value="89" data-classcat="A">1</option>
                                    <option value="90" data-classcat="A">2</option>
                                    <option value="91" data-classcat="A">3</option>
                                    <option value="92" data-classcat="A">4</option>
                                    <option value="93" data-classcat="A">5</option>
                                    <option value="94" data-classcat="A">6</option>
                                    <option value="95" data-classcat="A">7</option>
                                    <option value="96" data-classcat="A">8</option>
                                    <option value="97" data-classcat="A">9</option>
                                    <option value="98" data-classcat="A">10</option>
                                    <option value="99" data-classcat="B">11</option>
                                    <option value="100" data-classcat="B">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Gender <span class="login-danger">*</span></label>
                                <select name="studentGender" class="currclass">
                                    <option value="Male" selected>Male</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Birth <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" value="19-02-2025" name="stuDOB">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Session <span class="login-danger">*</span></label>
                                <input class="form-control" name="currentSession" type="text" value="2024-25">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous Class <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousClass" type="text" value="5">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous School <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousSchool" type="text" value="Divine">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Person <span class="login-danger">*</span></label>
                                <input class="form-control" name="personName" type="text" value="Amit">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation to Candidate <span class="login-danger">*</span></label>
                                <select name="stuRelation" class="currclass" id="relationSelect">
                                    <option value="Other" selected>Other</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' relation -->
                        <div class="col-lg-3 col-sm-12" id="otherRelationDiv" style="display: block;">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuRelationOther" value="Brother">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="contactNumber" value="9876543456">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="enquiryReview" value="testing">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Visit <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="visitReview" value="nothing">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherName" type="text" value="Ravindra Jain">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherNumber" type="number" value="666666666">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>How you know about the school? <span class="login-danger">*</span></label>
                                <select name="aboutSchool" class="currclass" id="aboutSchoolSelect">

                                    <!-- Selected Option from Database -->
                                    <option value="Other" selected>Other</option>

                                    <option value="Friend">Friend</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Hoardings">Hoardings</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Pamphlet">Pamphlet</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Social Media">Social Media</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' Source -->
                        <div class="col-lg-3 col-sm-12" id="otherSourceDiv" style="display: block;">
                            <div class="form-group local-forms">
                                <label>Other Source <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="otherSource" value="Whatsapp">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate" value="19-02-2025">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="19-02-2025">
                            </div>
                        </div>


                        <input type="number" name="updateid[]" value="18" hidden />
                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visit Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" value="01-03-2025" name="visitDate[]">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visiting Remark <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview[]" placeholder="Enter Review"> sdh sd hsd </textarea>
                            </div>
                        </div>


                        <input type="number" name="updateid[]" value="19" hidden />
                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visit Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" value="" name="visitDate[]">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visiting Remark <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview[]" placeholder="Enter Review">noice
</textarea>
                            </div>
                        </div>


                    </div>
                    <!--    Student details edit section End    -->

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_enquiry" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="view-details" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- <div class="d-flex justify-content-end m-2"> -->
            <button type="button" class="text-end border-0 bg-white" data-bs-dismiss="modal" aria-label="Close">X</button>
            <!-- </div> -->

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-0"><strong>Session: </strong> 2024-25</p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"><strong>Student Name: </strong> ankit</p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"><strong>Class: </strong> 6</p>
                    </div>

                    <!-- Extra details hidden initially -->
                    <div class="col-md-4 extra-details d-none">
                        <p class="mb-0"><strong>Student Gender: </strong> Male</p>
                        <p class="mb-0"><strong>Date of Birth: </strong> 19-02-2025</p>
                        <p class="mb-0"><strong>Previous Class: </strong> 5</p>
                        <p class="mb-0"><strong>Enquiry Date: </strong> 19-02-2025</p>
                    </div>

                    <div class="col-md-4 extra-details d-none">
                        <p class="mb-0"><strong>Previous School: </strong> Divine</p>
                        <p class="mb-0"><strong>Name of Inquirer: </strong> Amit</p>
                        <p class="mb-0"><strong>Inquirer Relation: </strong> Other</p>
                        <p class="mb-0"><strong>Follow Up Date: </strong> 19-02-2025</p>
                    </div>

                    <div class="col-md-4 extra-details d-none">
                        <p class="mb-0"><strong>Inquirer Contact: </strong> 9876543456</p>
                        <p class="mb-0"><strong>Father's Name: </strong> Ravindra Jain</p>
                        <p class="mb-0"><strong>Father's Contact: </strong> 666666666</p>
                        <p class="mb-0"><strong>Other Source: </strong> Whatsapp</p>
                    </div>

                    <div class="col-md-4 extra-details d-none">
                        <p class="mb-0"><strong>How did you hear about the school? </strong> Other</p>
                    </div>

                    <!-- Table remains the same -->
                    <div class="col-12">
                        <table id="myTable" class="table table-hover table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Visit Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>19-02-2025</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>01-03-2025</td>
                                    <td>sdh sd hsd</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>noice</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="view-more-btn" class="btn btn-primary">View More</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to toggle the visibility of extra details
    document.getElementById("view-more-btn").addEventListener("click", function() {
        // Get all elements with the "extra-details" class
        const extraDetails = document.querySelectorAll(".extra-details");

        // Toggle the "d-none" class for each extra detail
        extraDetails.forEach(function(detail) {
            detail.classList.toggle("d-none");
        });

        // Change the button text based on visibility
        const btnText = this.textContent === "View More" ? "View Less" : "View More";
        this.textContent = btnText;
    });
</script>
<div id="new-visit-modal1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visiting Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="1" hidden>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="19-02-2025">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visiting Date <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="visitDate">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visit Summery <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview" placeholder="Enter Visiting Summery"></textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_visit" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="danger-alert-modal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 400px;">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form action="" method="post" id="sectionForm">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure? You want to delete this Enquiry.</p>
                        <!--<button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>-->
                        <a href="delete-enquiry.php?id=2" class="btn btn-sm bg-danger-light">Confirm
                            <!--<i class="feather-trash-2"></i>-->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="danger-alert2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Enquiry Status</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <!--    Student details edit section start    -->

                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="2" hidden>
                        <input class="form-control" name="schoolID" type="text" value="20" hidden>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Enquiry Status <span class="login-danger">*</span></label>
                                <select name="enquiryStatusUpdate" class="currclass">
                                    <option value="Running" selected> Running </option>
                                    <option value="Running">Running</option>
                                    <option value="Confirm">Confirm</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuName" type="text" value="fgadf">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Class <span class="login-danger">*</span></label>
                                <select name="currentClass" class="currclass" id="selectclassacad">
                                    <option selected value="98">10</option>
                                    <option value="86" data-classcat="A">Nursery</option>
                                    <option value="88" data-classcat="A">UKG</option>
                                    <option value="89" data-classcat="A">1</option>
                                    <option value="90" data-classcat="A">2</option>
                                    <option value="91" data-classcat="A">3</option>
                                    <option value="92" data-classcat="A">4</option>
                                    <option value="93" data-classcat="A">5</option>
                                    <option value="94" data-classcat="A">6</option>
                                    <option value="95" data-classcat="A">7</option>
                                    <option value="96" data-classcat="A">8</option>
                                    <option value="97" data-classcat="A">9</option>
                                    <option value="98" data-classcat="A">10</option>
                                    <option value="99" data-classcat="B">11</option>
                                    <option value="100" data-classcat="B">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Gender <span class="login-danger">*</span></label>
                                <select name="studentGender" class="currclass">
                                    <option value="" selected></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Birth <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" value="" name="stuDOB">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Session <span class="login-danger">*</span></label>
                                <input class="form-control" name="currentSession" type="text" value="2024-25">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous Class <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousClass" type="text" value="0">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous School <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousSchool" type="text" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Person <span class="login-danger">*</span></label>
                                <input class="form-control" name="personName" type="text" value="dfsdfhsdf">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation to Candidate <span class="login-danger">*</span></label>
                                <select name="stuRelation" class="currclass" id="relationSelect">
                                    <option value="Father" selected>Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' relation -->
                        <div class="col-lg-3 col-sm-12" id="otherRelationDiv" style="display: none;">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuRelationOther" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="contactNumber" value="5555555555">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="enquiryReview" value="sb df bs">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Visit <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="visitReview" value="hgfymnthgbfvd">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherName" type="text" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherNumber" type="number" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>How you know about the school? <span class="login-danger">*</span></label>
                                <select name="aboutSchool" class="currclass" id="aboutSchoolSelect">

                                    <!-- Selected Option from Database -->
                                    <option value="Pamphlet" selected>Pamphlet</option>

                                    <option value="Friend">Friend</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Hoardings">Hoardings</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' Source -->
                        <div class="col-lg-3 col-sm-12" id="otherSourceDiv" style="display: none;">
                            <div class="form-group local-forms">
                                <label>Other Source <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="otherSource" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="">
                            </div>
                        </div>


                    </div>
                    <!--    Student details edit section End    -->

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_enquiry" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div id="new-visit-modal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visiting Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="2" hidden>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visiting Date <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="visitDate">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visit Summery <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview" placeholder="Enter Visiting Summery"></textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_visit" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="danger-alert-modal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 400px;">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form action="" method="post" id="sectionForm">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure? You want to delete this Enquiry.</p>
                        <!--<button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>-->
                        <a href="delete-enquiry.php?id=3" class="btn btn-sm bg-danger-light">Confirm
                            <!--<i class="feather-trash-2"></i>-->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="danger-alert3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Enquiry Status</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <!--    Student details edit section start    -->

                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="3" hidden>
                        <input class="form-control" name="schoolID" type="text" value="20" hidden>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Enquiry Status <span class="login-danger">*</span></label>
                                <select name="enquiryStatusUpdate" class="currclass">
                                    <option value="Running" selected> Running </option>
                                    <option value="Running">Running</option>
                                    <option value="Confirm">Confirm</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuName" type="text" value="Amit Jain">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Class <span class="login-danger">*</span></label>
                                <select name="currentClass" class="currclass" id="selectclassacad">
                                    <option selected value="100">12</option>
                                    <option value="86" data-classcat="A">Nursery</option>
                                    <option value="88" data-classcat="A">UKG</option>
                                    <option value="89" data-classcat="A">1</option>
                                    <option value="90" data-classcat="A">2</option>
                                    <option value="91" data-classcat="A">3</option>
                                    <option value="92" data-classcat="A">4</option>
                                    <option value="93" data-classcat="A">5</option>
                                    <option value="94" data-classcat="A">6</option>
                                    <option value="95" data-classcat="A">7</option>
                                    <option value="96" data-classcat="A">8</option>
                                    <option value="97" data-classcat="A">9</option>
                                    <option value="98" data-classcat="A">10</option>
                                    <option value="99" data-classcat="B">11</option>
                                    <option value="100" data-classcat="B">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Gender <span class="login-danger">*</span></label>
                                <select name="studentGender" class="currclass">
                                    <option value="Male" selected>Male</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Birth <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" value="20-02-1989" name="stuDOB">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Session <span class="login-danger">*</span></label>
                                <input class="form-control" name="currentSession" type="text" value="2024-25">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous Class <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousClass" type="text" value="11">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous School <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousSchool" type="text" value="Divine">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Person <span class="login-danger">*</span></label>
                                <input class="form-control" name="personName" type="text" value="Ankit Jain">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation to Candidate <span class="login-danger">*</span></label>
                                <select name="stuRelation" class="currclass" id="relationSelect">
                                    <option value="Other" selected>Other</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' relation -->
                        <div class="col-lg-3 col-sm-12" id="otherRelationDiv" style="display: block;">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuRelationOther" value="Brother">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="contactNumber" value="8888888888">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="enquiryReview" value="Demo">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Visit <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="visitReview" value="Demo">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherName" type="text" value="Ravindra Jain">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherNumber" type="number" value="7855555555">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>How you know about the school? <span class="login-danger">*</span></label>
                                <select name="aboutSchool" class="currclass" id="aboutSchoolSelect">

                                    <!-- Selected Option from Database -->
                                    <option value="Other" selected>Other</option>

                                    <option value="Friend">Friend</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Hoardings">Hoardings</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Pamphlet">Pamphlet</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Social Media">Social Media</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' Source -->
                        <div class="col-lg-3 col-sm-12" id="otherSourceDiv" style="display: block;">
                            <div class="form-group local-forms">
                                <label>Other Source <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="otherSource" value="Face 2 face">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate" value="20-02-2025">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="24-02-2025">
                            </div>
                        </div>


                    </div>
                    <!--    Student details edit section End    -->

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_enquiry" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div id="new-visit-modal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visiting Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="3" hidden>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="24-02-2025">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visiting Date <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="visitDate">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visit Summery <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview" placeholder="Enter Visiting Summery"></textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_visit" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="danger-alert-modal4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 400px;">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form action="" method="post" id="sectionForm">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure? You want to delete this Enquiry.</p>
                        <!--<button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>-->
                        <a href="delete-enquiry.php?id=4" class="btn btn-sm bg-danger-light">Confirm
                            <!--<i class="feather-trash-2"></i>-->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="danger-alert4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Enquiry Status</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <!--    Student details edit section start    -->

                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="4" hidden>
                        <input class="form-control" name="schoolID" type="text" value="20" hidden>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Enquiry Status <span class="login-danger">*</span></label>
                                <select name="enquiryStatusUpdate" class="currclass">
                                    <option value="Running" selected> Running </option>
                                    <option value="Running">Running</option>
                                    <option value="Confirm">Confirm</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuName" type="text" value="ankit ">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Class <span class="login-danger">*</span></label>
                                <select name="currentClass" class="currclass" id="selectclassacad">
                                    <option selected value="89">1</option>
                                    <option value="86" data-classcat="A">Nursery</option>
                                    <option value="88" data-classcat="A">UKG</option>
                                    <option value="89" data-classcat="A">1</option>
                                    <option value="90" data-classcat="A">2</option>
                                    <option value="91" data-classcat="A">3</option>
                                    <option value="92" data-classcat="A">4</option>
                                    <option value="93" data-classcat="A">5</option>
                                    <option value="94" data-classcat="A">6</option>
                                    <option value="95" data-classcat="A">7</option>
                                    <option value="96" data-classcat="A">8</option>
                                    <option value="97" data-classcat="A">9</option>
                                    <option value="98" data-classcat="A">10</option>
                                    <option value="99" data-classcat="B">11</option>
                                    <option value="100" data-classcat="B">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Gender <span class="login-danger">*</span></label>
                                <select name="studentGender" class="currclass">
                                    <option value="Male" selected>Male</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Birth <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" value="05-03-2025" name="stuDOB">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Session <span class="login-danger">*</span></label>
                                <input class="form-control" name="currentSession" type="text" value="2024-25">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous Class <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousClass" type="text" value="5">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous School <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousSchool" type="text" value="Divine">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Person <span class="login-danger">*</span></label>
                                <input class="form-control" name="personName" type="text" value="Amit">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation to Candidate <span class="login-danger">*</span></label>
                                <select name="stuRelation" class="currclass" id="relationSelect">
                                    <option value="Other" selected>Other</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' relation -->
                        <div class="col-lg-3 col-sm-12" id="otherRelationDiv" style="display: block;">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuRelationOther" value="jjj">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="contactNumber" value="8764535345">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="enquiryReview" value="testing">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Visit <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="visitReview" value="hgfymnthgbfvd">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherName" type="text" value="ABC">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherNumber" type="number" value="9764646747">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>How you know about the school? <span class="login-danger">*</span></label>
                                <select name="aboutSchool" class="currclass" id="aboutSchoolSelect">

                                    <!-- Selected Option from Database -->
                                    <option value="Staff" selected>Staff</option>

                                    <option value="Friend">Friend</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Hoardings">Hoardings</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Pamphlet">Pamphlet</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' Source -->
                        <div class="col-lg-3 col-sm-12" id="otherSourceDiv" style="display: none;">
                            <div class="form-group local-forms">
                                <label>Other Source <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="otherSource" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate" value="05-03-2025">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="10-03-2025">
                            </div>
                        </div>


                    </div>
                    <!--    Student details edit section End    -->

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_enquiry" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div id="new-visit-modal4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visiting Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="4" hidden>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="10-03-2025">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visiting Date <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="visitDate">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visit Summery <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview" placeholder="Enter Visiting Summery"></textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_visit" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="danger-alert-modal5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 400px;">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form action="" method="post" id="sectionForm">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure? You want to delete this Enquiry.</p>
                        <!--<button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>-->
                        <a href="delete-enquiry.php?id=5" class="btn btn-sm bg-danger-light">Confirm
                            <!--<i class="feather-trash-2"></i>-->
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="danger-alert5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Enquiry Status</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <!--    Student details edit section start    -->

                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="5" hidden>
                        <input class="form-control" name="schoolID" type="text" value="20" hidden>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Enquiry Status <span class="login-danger">*</span></label>
                                <select name="enquiryStatusUpdate" class="currclass">
                                    <option value="Running" selected> Running </option>
                                    <option value="Running">Running</option>
                                    <option value="Confirm">Confirm</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuName" type="text" value="dgdh">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                <label>Class <span class="login-danger">*</span></label>
                                <select name="currentClass" class="currclass" id="selectclassacad">
                                    <option selected value="94">6</option>
                                    <option value="86" data-classcat="A">Nursery</option>
                                    <option value="88" data-classcat="A">UKG</option>
                                    <option value="89" data-classcat="A">1</option>
                                    <option value="90" data-classcat="A">2</option>
                                    <option value="91" data-classcat="A">3</option>
                                    <option value="92" data-classcat="A">4</option>
                                    <option value="93" data-classcat="A">5</option>
                                    <option value="94" data-classcat="A">6</option>
                                    <option value="95" data-classcat="A">7</option>
                                    <option value="96" data-classcat="A">8</option>
                                    <option value="97" data-classcat="A">9</option>
                                    <option value="98" data-classcat="A">10</option>
                                    <option value="99" data-classcat="B">11</option>
                                    <option value="100" data-classcat="B">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Student Gender <span class="login-danger">*</span></label>
                                <select name="studentGender" class="currclass">
                                    <option value="" selected></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Birth <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" value="" name="stuDOB">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Session <span class="login-danger">*</span></label>
                                <input class="form-control" name="currentSession" type="text" value="2024-25">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous Class <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousClass" type="text" value="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group local-forms">
                                <label>Previous School <span class="login-danger">*</span></label>
                                <input class="form-control" name="previousSchool" type="text" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Person <span class="login-danger">*</span></label>
                                <input class="form-control" name="personName" type="text" value="sgbsxgb">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation to Candidate <span class="login-danger">*</span></label>
                                <select name="stuRelation" class="currclass" id="relationSelect">
                                    <option value="" selected></option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Grandfather">Grandfather</option>
                                    <option value="Grandmother">Grandmother</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' relation -->
                        <div class="col-lg-3 col-sm-12" id="otherRelationDiv" style="display: none;">
                            <div class="form-group local-forms">
                                <label>Inquirer Relation <span class="login-danger">*</span></label>
                                <input class="form-control" name="stuRelationOther" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="contactNumber" value="3634545454">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="enquiryReview" value="gfbdfgd">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Remarks for Visit <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="visitReview" value="gnxfgn">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherName" type="text" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Father's Number <span class="login-danger">*</span></label>
                                <input class="form-control" name="fatherNumber" type="number" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>How you know about the school? <span class="login-danger">*</span></label>
                                <select name="aboutSchool" class="currclass" id="aboutSchoolSelect">

                                    <!-- Selected Option from Database -->
                                    <option value="Parents" selected>Parents</option>

                                    <option value="Friend">Friend</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Hoardings">Hoardings</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Pamphlet">Pamphlet</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Additional Input for 'Other' Source -->
                        <div class="col-lg-3 col-sm-12" id="otherSourceDiv" style="display: none;">
                            <div class="form-group local-forms">
                                <label>Other Source <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="otherSource" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date of Enquiry <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="13-03-2025">
                            </div>
                        </div>


                        <input type="number" name="updateid[]" value="20" hidden />
                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visit Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" value="08-03-2025" name="visitDate[]">
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visiting Remark <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview[]" placeholder="Enter Review">sdfbsdfbsg</textarea>
                            </div>
                        </div>


                    </div>
                    <!--    Student details edit section End    -->

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_enquiry" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>





<div id="new-visit-modal5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visiting Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="enquiry-update.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control" name="enquiryStatusID" type="text" value="5" hidden>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Follow Up Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate" value="13-03-2025">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group local-forms calendar-icon">
                                <label>Visiting Date <span class="login-danger">*</span> </label>
                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="visitDate">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label>Visit Summery <span class="login-danger">*</span></label>
                                <textarea class="form-control" name="visitReview" placeholder="Enter Visiting Summery"></textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update_visit" class="btn btn-info waves-effect waves-light" style="color:#fff;">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection