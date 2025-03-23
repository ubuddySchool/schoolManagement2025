@extends('layouts.app')

@section('content')

<div class="content container-fluid">


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Student Enquiry Form</h3>
                </div>
            </div>
        </div>
    </div>
    

    <form method="post" action="">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow ">
                    <div class="card-body">
                        <div class="student-group-form" style="margin-bottom: 0;">
                            <div class="form-group" style="margin-bottom: 0;">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                            <label style=" font-size: 18px;">Student Details</label>
                                            <div class="row" style="margin-top: 40px; padding: 0 10px;">

                                                <input class="form-control" name="enquiryStatus" type="text" value="Running" hidden>
                                                <input class="form-control" name="schoolID" type="text" value="20" hidden>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Student Name <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="stuName" type="text" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="sform-group local-forms">
                                                        <label>Student Gender <span class="login-danger">*</span></label>
                                                        <select name="studentGender" class="currclass form-control">
                                                            <option value=""> - Select Gender - </option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms calendar-icon">
                                                        <label>Date of Birth <span class="login-danger">*</span> </label>
                                                        <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="stuDOB">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Session <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="currentSession" type="text" value="2024-25">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Class <span class="login-danger">*</span></label>
                                                        <select name="currentClass" class="currclass form-control" id="selectclassacad" data-school="20" required>
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

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Previous Class </label>
                                                        <input class="form-control" name="previousClass" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Previous School </label>
                                                        <input class="form-control" name="previousSchool" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Inquirer Person <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="personName" type="text" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Inquirer Relation to Candidate</label>
                                                        <select name="stuRelation" class="currclass form-control">
                                                            <option value=""> - Select Relation - </option>
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

                                                <div class="col-lg-3 col-md-3" style="display:none;">
                                                    <div class="form-group local-forms">
                                                        <label>Inquirer Relation <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="stuRelationOther" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Inquirer Contact Number <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="contactNumber" type="number" id="inputField1" maxlength="10" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label>Remarks for Enquiry<span class="login-danger">*</span></label>
                                                        <input class="form-control" name="enquiryReview" type="text" required>
                                                        <!--<textarea class="form-control" name="enquiryReview" rows="2" cols="50" placeholder="Enter Remark"></textarea>-->
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label>Remarks for Visit<span class="login-danger">*</span></label>
                                                        <input class="form-control" name="visitReview" type="text" required>
                                                        <!--<textarea class="form-control" name="enquiryReview" rows="2" cols="50" placeholder="Enter Remark"></textarea>-->
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Father's Name <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="fatherName" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>Father's Contact Number <span class="login-danger">*</span></label>
                                                        <input class="form-control" name="fatherNumber" type="number" id="inputField2" maxlength="10">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms">
                                                        <label>How you know about the school? </label>
                                                        <select name="aboutSchool" class="currclass form-control" required>
                                                            <option value=""> - Select Relation - </option>
                                                            <option value="Friend">Friend</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Hoardings">Hoardings</option>
                                                            <option value="Newspaper">Newspaper</option>
                                                            <option value="Pamphlet">Pamphlet</option>
                                                            <option value="Parents">Parents</option>
                                                            <option value="Staff">Staff</option>
                                                            <option value="Social Media">Social Media</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3" style="display:none;">
                                                    <div class="form-group local-forms">
                                                        <label>Other source </label>
                                                        <input class="form-control" name="otherSource" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms calendar-icon">
                                                        <label>Date of Enquiry <span class="login-danger">*</span></label>
                                                        <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="enquiryDate">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group local-forms calendar-icon">
                                                        <label>Follow Up Date <span class="login-danger">*</span></label>
                                                        <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="reminderDate">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="student-submit" style="display: flex;justify-content: center;">
                                            <button type="submit" class="btn btn-primary" name="submit_details" style="font-size: 1.2rem;min-width: 200px;">Submit</button>
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