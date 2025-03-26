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
                                        <label>Enquiry Status <span class="login-danger">*</span></label>
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
                                        <label>Class <span class="login-danger">*</span></label>
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
                                <h3 class="page-title">Student Enquiry Details</h3>
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
                                        <!--<th>Father's Name</th>-->
                                        <th>Class</th>
                                        <!--<th>Gender</th>-->
                                        <!--<th>Contact Number</th>-->
                                        <!--<th>D.O.B.</th>-->
                                        <th>Action</th>
                                        <th>Visit</th>
                                        <th>Move To</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS">Running</h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar"> ankit </h2>
                                        </td>


                                        <td>6</td>



                                        <td>
                                            <div class="actions">

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert1"><i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details1"><i class="feather-eye"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal1"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal1" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions flex-end">
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Registration </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Admission </a>
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
                                            <div class="actions">

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert2"><i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details2"><i class="feather-eye"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal2"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal2" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions flex-end">
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Registration </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Admission </a>
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
                                            <div class="actions">

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert3"><i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details3"><i class="feather-eye"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal3"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal3" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions flex-end">
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Registration </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Admission </a>
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
                                            <div class="actions">
                                                <!--<a href="student-profile-view.php?id=4"-->
                                                <!--    class="btn btn-sm bg-success-light me-2">-->
                                                <!--    <i class="feather-eye"></i>-->
                                                <!--</a> -->
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert4"><i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details4"><i class="feather-eye"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal4"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal4" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions flex-end">
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Registration </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Admission </a>
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
                                            <div class="actions">
                                                <!--<a href="student-profile-view.php?id=5"-->
                                                <!--    class="btn btn-sm bg-success-light me-2">-->
                                                <!--    <i class="feather-eye"></i>-->
                                                <!--</a> -->
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert5"><i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details5"><i class="feather-eye"></i> </a>

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal5"><i class="feather-trash-2"></i>
                                                </button>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#new-visit-modal5" style="width: fit-content;"> Add Visit </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="actions flex-end">
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Registration </a>
                                                <a href="" class="btn btn-sm bg-success-light me-2" style="width: fit-content;"> Admission </a>
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


<div id="view-details1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Enquiry Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <input class="form-control" name="enquiryStatusID" type="text" value="1" hidden>

                            <div class="col-sm-6">
                                <p><strong>Student Name: </strong> <span> ankit </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Class: </strong> <span>
                                        6</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Student Gender : </strong> <span> Male</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Date of Birth : </strong> <span> 19-02-2025</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Session : </strong> <span> 2024-25</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous Class : </strong> <span> 5</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous School : </strong> <span> Divine</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Name of Inquirer Person : </strong> <span> Amit</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Relation to Candidate : </strong> <span> Other</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Other : </strong> <span> Brother</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Contact Number : </strong> <span> 9876543456</span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Enquiry : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Visit : </strong> <span> testing</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father's Name: </strong> <span> Ravindra Jain</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father Number: </strong> <span> 666666666</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>How you know about the school? : </strong> <span> Other</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Other : </strong> <span> Whatsapp</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Enquiry Date: </strong> <span> 19-02-2025</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Follow Up Date: </strong> <span> 19-02-2025</span></p>
                            </div>



                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th style="width: 65px;">S. No.</th>
                                    <th style="width: 100px;">Visit Date</th>
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
                                    <td> sdh sd hsd </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>noice
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


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


<div id="view-details2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Enquiry Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <input class="form-control" name="enquiryStatusID" type="text" value="2" hidden>

                            <div class="col-sm-6">
                                <p><strong>Student Name: </strong> <span> fgadf</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Class: </strong> <span>
                                        10</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Student Gender : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Date of Birth : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Session : </strong> <span> 2024-25</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous Class : </strong> <span> 0</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous School : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Name of Inquirer Person : </strong> <span> dfsdfhsdf</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Relation to Candidate : </strong> <span> Father</span></p>
                            </div>


                            <div class="col-sm-6">
                                <p><strong>Inquirer Contact Number : </strong> <span> 5555555555</span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Enquiry : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Visit : </strong> <span> sb df bs</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father's Name: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father Number: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>How you know about the school? : </strong> <span> Pamphlet</span></p>
                            </div>


                            <div class="col-sm-6">
                                <p><strong>Enquiry Date: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Follow Up Date: </strong> <span> </span></p>
                            </div>



                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th style="width: 65px;">S. No.</th>
                                    <th style="width: 100px;">Visit Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>

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


<div id="view-details3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Enquiry Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <input class="form-control" name="enquiryStatusID" type="text" value="3" hidden>

                            <div class="col-sm-6">
                                <p><strong>Student Name: </strong> <span> Amit Jain</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Class: </strong> <span>
                                        12</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Student Gender : </strong> <span> Male</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Date of Birth : </strong> <span> 20-02-1989</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Session : </strong> <span> 2024-25</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous Class : </strong> <span> 11</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous School : </strong> <span> Divine</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Name of Inquirer Person : </strong> <span> Ankit Jain</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Relation to Candidate : </strong> <span> Other</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Other : </strong> <span> Brother</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Contact Number : </strong> <span> 8888888888</span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Enquiry : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Visit : </strong> <span> Demo</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father's Name: </strong> <span> Ravindra Jain</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father Number: </strong> <span> 7855555555</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>How you know about the school? : </strong> <span> Other</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Other : </strong> <span> Face 2 face</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Enquiry Date: </strong> <span> 20-02-2025</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Follow Up Date: </strong> <span> 24-02-2025</span></p>
                            </div>



                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th style="width: 65px;">S. No.</th>
                                    <th style="width: 100px;">Visit Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>20-02-2025</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>

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


<div id="view-details4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Enquiry Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <input class="form-control" name="enquiryStatusID" type="text" value="4" hidden>

                            <div class="col-sm-6">
                                <p><strong>Student Name: </strong> <span> ankit </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Class: </strong> <span>
                                        1</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Student Gender : </strong> <span> Male</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Date of Birth : </strong> <span> 05-03-2025</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Session : </strong> <span> 2024-25</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous Class : </strong> <span> 5</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous School : </strong> <span> Divine</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Name of Inquirer Person : </strong> <span> Amit</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Relation to Candidate : </strong> <span> Other</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Other : </strong> <span> jjj</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Contact Number : </strong> <span> 8764535345</span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Enquiry : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Visit : </strong> <span> testing</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father's Name: </strong> <span> ABC</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father Number: </strong> <span> 9764646747</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>How you know about the school? : </strong> <span> Staff</span></p>
                            </div>


                            <div class="col-sm-6">
                                <p><strong>Enquiry Date: </strong> <span> 05-03-2025</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Follow Up Date: </strong> <span> 10-03-2025</span></p>
                            </div>



                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th style="width: 65px;">S. No.</th>
                                    <th style="width: 100px;">Visit Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>05-03-2025</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>

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


<div id="view-details5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modalWidth">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Enquiry Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <input class="form-control" name="enquiryStatusID" type="text" value="5" hidden>

                            <div class="col-sm-6">
                                <p><strong>Student Name: </strong> <span> dgdh</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Class: </strong> <span>
                                        6</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Student Gender : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Date of Birth : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Session : </strong> <span> 2024-25</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous Class : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Previous School : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Name of Inquirer Person : </strong> <span> sgbsxgb</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Inquirer Relation to Candidate : </strong> <span> </span></p>
                            </div>


                            <div class="col-sm-6">
                                <p><strong>Inquirer Contact Number : </strong> <span> 3634545454</span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Enquiry : </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6 d-none">
                                <p><strong>Remarks for Visit : </strong> <span> gfbdfgd</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father's Name: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Father Number: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>How you know about the school? : </strong> <span> Parents</span></p>
                            </div>


                            <div class="col-sm-6">
                                <p><strong>Enquiry Date: </strong> <span> </span></p>
                            </div>

                            <div class="col-sm-6">
                                <p><strong>Follow Up Date: </strong> <span> 13-03-2025</span></p>
                            </div>



                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th style="width: 65px;">S. No.</th>
                                    <th style="width: 100px;">Visit Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>08-03-2025</td>
                                    <td>sdfbsdfbsg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>

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