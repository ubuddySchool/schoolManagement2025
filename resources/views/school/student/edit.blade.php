@extends('layouts.app')

@section('content')

<div class="content container-fluid">
  
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header" style=" justify-content: center;">
                        <h3 class="page-title">Update Student Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form method="post" action="updatestudentinfo.php" enctype="multipart/form-data">
                            <div class="row">
                                <input name="id" type="hidden" value="8533">
                                <!-- Admission Details Start-->

                                <div class="col-12">
                                    <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                        <label style=" font-size: 18px;">Admission Details</label>
                                        <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Admission Type <span class="login-danger">*</span></label>
                                                    <select class="form-control select" name="admissionType">
                                                        <option value="None">None</option>
                                                        <option value="RTE">RTE</option>
                                                        <option value="NON - RTE">NON - RTE</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms calendar-icon">
                                                    <label>Admission Date <span class="login-danger">*</span> </label>
                                                    <input class="form-control datetimepicker" type="text" value="" placeholder="DD-MM-YYYY" name="admissionDate">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Scholar/Admission Number<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="scholarNumber" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Admission Class<span class="login-danger">*</span></label>
                                                    <!--<select name="admissionClass" id="selectclass" data-school=" 20" style="border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;padding: .375rem .75rem;">-->
                                                    <!--<option value="">Select Class</option>-->
                                                    <!--<option value="86" data-classcat="A" >Nursery</option>-->
                                                    <!--<option value="88" data-classcat="A" >UKG</option>-->
                                                    <!--<option value="89" data-classcat="A" >1</option>-->
                                                    <!--<option value="90" data-classcat="A" >2</option>-->
                                                    <!--<option value="91" data-classcat="A" >3</option>-->
                                                    <!--<option value="92" data-classcat="A" >4</option>-->
                                                    <!--<option value="93" data-classcat="A" >5</option>-->
                                                    <!--<option value="94" data-classcat="A" >6</option>-->
                                                    <!--<option value="95" data-classcat="A" >7</option>-->
                                                    <!--<option value="96" data-classcat="A" >8</option>-->
                                                    <!--<option value="97" data-classcat="A" >9</option>-->
                                                    <!--<option value="98" data-classcat="A" >10</option>-->
                                                    <!--<option value="99" data-classcat="B" >11</option>-->
                                                    <!--<option value="100" data-classcat="B" >12</option>-->
                                                    <!--</select>-->
                                                    <input class="form-control" type="text" name="admissionClass" value="" hidden>
                                                    <input class="form-control" type="text" name="admissionClass1" value="" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3" id="input-stream" style="display: none;">
                                                <div class="form-group local-forms">
                                                    <label>Stream<span class="login-danger">*</span></label>
                                                    <select id="stream" class="form-control select" name="studentStream">

                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Session<span class="login-danger">*</span></label>

                                                    <select class="form-control select" name="adm_session">
                                                        <option disable>2025-26</option>
                                                        <option value="2023-24">2023-24</option>
                                                        <option value="2022-23">2022-23</option>
                                                        <option value="2021-22">2021-22</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>TC Details<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="tcDetails" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Previous Class<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="PreviousClass" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Previous School<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="PreviousSchool" value="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                        <label style=" font-size: 18px;">Admission Details</label>
                                        <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Admission Details End-->

                                <!-- Students Basic Details Start-->

                                <div class="col-12">
                                    <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                        <label style=" font-size: 18px;">Basic Details</label>
                                        <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Student Name <span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentName" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms calendar-icon">
                                                    <label>Date Of Birth <span class="login-danger">*</span></label>
                                                    <input class="form-control datetimepicker" type="text" value="" name="studentDOB">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Gender <span class="login-danger">*</span></label>
                                                    <select class="form-control select" name="studentGender">
                                                        <option value=""></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Category <span class="login-danger">*</span></label>
                                                    <select class="form-control select" name="studentCategory">

                                                        <option value="Select Cate">Select Cate</option>

                                                        <option value="1">General</option>
                                                        <option value="2">OBC</option>
                                                        <option value="3">SC</option>
                                                        <option value="5">ST</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Religion<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentReligion" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Nationality<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentNationality" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Student Image<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentImage" type="file">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Student Image</label>
                                                    <input type="hidden" value="" name="oldstudentImage">
                                                    <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Medical Problem <span class="login-danger">*</span></label>
                                                    <select name="studentMtype" id="options1" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4" id="input-field1" style="display:none;">
                                                <div class="form-group local-forms">
                                                    <label>Describe Problem<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentMProblem" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Mother Tongue<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="studentMtongue" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Aadhar Number<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="AadharNumber" type="text" value="" oninput="formatAadharNumber(event)" maxlength="14">

                                                    <!--<input class="form-control" id="inputAadhar" type="text" name="studentAadhar" placeholder="Enter Aadhar Number" >-->
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Samagra ID<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="studentSamagra" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Family Samagra ID<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="studentFamilySamagra" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Email ID<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="email" name="studentEmail" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Birth Mark<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" name="studentBirthMark" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Specially Able <span class="login-danger">*</span></label>
                                                    <select name="studentSpeciallytype" id="options" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;     padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4" id="input-field" style="display:none;">
                                                <div class="form-group local-forms">
                                                    <label>Describe<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentSpeciallyAble" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Contact Number<span class="login-danger">*</span></label>
                                                    <input class="form-control" id="inputField1" name="studentPrimaryNumber" type="text" value="" maxlength="10">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Whatsapp Number<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentWhatsappNumber" type="text" placeholder="Enter Whatsapp Number" id="inputField2" value="" oninput="formatContactNumber(event)" maxlength="12">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Relation to the person<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentRelation" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Name of Sibling<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentSiblingName" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Sibling School<span class="login-danger"> *</span></label>
                                                    <select name="studentSiblingScholtype" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Same School">Same School</option>
                                                        <option value="Different School">Different School</option>
                                                        <option value="Not Studying">Not Studying</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Caste<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentCaste" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Permanent Education Number<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentPENno" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Economically Weaker Section <span class="login-danger">*</span></label>
                                                    <select name="ews" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>BPL Certificate <span class="login-danger">*</span></label>
                                                    <select name="studentBPL" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4" id="input-field1" style="display:none;">
                                                <div class="form-group local-forms">
                                                    <label>Describe Problem<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentMProblem" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>Minority <span class="login-danger">*</span></label>
                                                    <select name="studentMinority" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;padding: .375rem .75rem;">
                                                        <option value=""></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4" id="input-field1" style="display:none;">
                                                <div class="form-group local-forms">
                                                    <label>Describe Problem<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentMProblem" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-4">
                                                <div class="form-group local-forms">
                                                    <label>APAAR ID<span class="login-danger">*</span></label>
                                                    <input class="form-control" name="studentAppartNumber" type="text" placeholder="Enter APAAR ID" value="" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-12 col-sm-6" style="margin-top: 2.5rem;">
                                                    <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                                        <label style=" font-size: 18px;">Current Address<span class="login-danger">*</span></label>
                                                        <div class="row" style="margin-top: 40px;padding: 0 10px;">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Address<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentAddress" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Pincode<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpincode" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>City<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentcity" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>District<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentDistrict" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>state<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentstate" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Country<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentCountry" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group local-forms" style="margin-bottom: 0;">
                                                                <p> <input type="checkbox" id="copyAddress">
                                                                    <label for="copyAddress" style="top: 0;left: 15px;">Please Checked, If both are same.</label>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                                        <label style=" font-size: 18px;">Permanent Address<span class="login-danger">*</span></label>
                                                        <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Address<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpAddress" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Pincode<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpPincode" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>City<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpCity" value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>District<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpDistrict" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>state<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpState" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <label>Country<span class="login-danger">*</span></label>
                                                                    <input class="form-control" type="text" name="studentpCountry" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Address -->

                                        </div>



                                        <!-- Bank Details Start-->


                                        <div class="col-12">
                                            <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                                <label style=" font-size: 18px;">Bank Details</label>
                                                <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group local-forms">
                                                            <label>Bank Name<span class="login-danger">*</span></label>
                                                            <input class="form-control" name="studentBankName" type="text" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group local-forms">
                                                            <label>IFSC Code<span class="login-danger">*</span></label>
                                                            <input class="form-control" name="studentIFSC" type="text" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group local-forms">
                                                            <label>Account Number<span class="login-danger">*</span></label>
                                                            <input class="form-control" name="studentAccountNo" type="text" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group local-forms">
                                                            <label>Account Holder Name<span class="login-danger">*</span></label>
                                                            <input class="form-control" name="studentAccountHolderName" type="text" value="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bank Details End-->

                                        <!-- Documents Images Uploading Start -->

                                        <!-- Documents Images Uploading End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Students Basic Details End-->


                            <!-- Students Academic Details Start-->

                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Academic Details</label>
                                    <div class="row" style="margin-top: 40px;padding: 0 10px;">

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Current Session<span class="login-danger">*</span></label>
                                                <select class="form-control select" name="CurrentSession">
                                                    <option disable>2025-26</option>
                                                    <option selected value='2024-25'>2024-25</option>
                                                    <option value='2023-24'>2023-24</option>
                                                    <option value='2022-23'>2022-23</option>
                                                    <option value='2021-22'>2021-22</option>
                                                    <option value='2020-21'>2020-21</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Current Class <span class="login-danger">*</span></label>
                                                <select name="currentClass" id="selectclassacad" data-school=" 20" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value="">Select Class</option>
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
                                                <!--<input class="form-control" type="text" name="currentClass" value="" hidden>-->
                                                <!--<input class="form-control" type="text" name="currentClass1"  value="" readonly>-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4" id="input-section1" style="">
                                            <div class="form-group local-forms">
                                                <label>Section<span class="login-danger">*</span></label>
                                                <!--<input class="form-control" type="text" name="Section1"  value="" readonly>-->
                                                <input class="form-control" type="text" name="Section" value="" hidden>
                                                <select id="section1" class="form-control select" name="Section">
                                                    <option value=" "></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4" id="input-stream1" style="display:none; ">
                                            <div class="form-group local-forms">
                                                <label>Stream<span class="login-danger">*</span></label>
                                                <select id="stream1" class="form-control select" name="scl_stream">
                                                    <option value=" "></option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Roll Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="RollNumber" type="text" value="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Students Academic Details End-->

                            <!-- Father's Details Start-->
                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Father Details</label>
                                    <div class="row" style="margin-top: 40px;padding: 0 10px;">



                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input class="form-control" name="Fathername" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Father Image<span class="login-danger">*</span></label>
                                                <input class="form-control" name="fatherImage" type="file" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Father Image</label>
                                                <input type="hidden" value="" name="oldfatherImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" value="" name="fatherDOB">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Contact Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="fatherNumber" id="inputField3" type="text" placeholder="Enter Number" value="" oninput="formatContactNumber(event)" maxlength="12">

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Number <span class="login-danger">*</span></label>
                                                <input class="form-control" name="FatherAadharNumber" type="text" value="" oninput="formatAadharNumber(event)" maxlength="14">
                                                <!--<input class="form-control" name="FatherAadharNumber" type="text" placeholder="Enter Aadhar Number" >-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Qualification <span class="login-danger">*</span></label>
                                                <input class="form-control" name="FatherQualification" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Office Address<span class="login-danger">*</span></label>
                                                <input class="form-control" name="FatherOfcAddress" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Annual Income <span class="login-danger">*</span></label>
                                                <input class="form-control" name="FatherIncome" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Nationality<span class="login-danger">*</span></label>
                                                <input class="form-control" name="FatherNationality" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Single Parent<span class="login-danger"> *</span></label>
                                                <select name="fatherSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value=""></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No ">No</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card<span class="login-danger">*</span></label>
                                                <input class="form-control" name="fatherAadharImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card</label>
                                                <input type="hidden" value="" name="oldfatherAadharImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                                <input class="form-control" name="fatherAccountImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Passbook</label>
                                                <input type="hidden" value="" name="oldfatherAccountImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Father's Details End-->




                            <!-- Mother's Details Start-->
                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Mother Details</label>
                                    <div class="row" style="margin-top: 40px;padding: 0 10px;">

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input class="form-control" name="Mothername" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mother Image<span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mother Image</label>
                                                <input type="hidden" value="" name="oldMotherImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control  datetimepicker" type="text" value="" name="MotherDOB">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Contact Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherNumber" id="inputField4" type="text" placeholder="Enter Number" value="" oninput="formatContactNumber(event)" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Number <span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherAadharNumber" type="text" value="" oninput="formatAadharNumber(event)" maxlength="14">
                                                <!--<input class="form-control" name="MotherAadharNumber" type="text" placeholder="Enter Aadhar Number" >-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Qualification <span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherQualification" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Occupation<span class="login-danger"> *</span></label>
                                                <select name="MotherOccupation" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value=""></option>
                                                    <option value="Salaried">Salaried</option>
                                                    <option value="Self Employed ">Self Employed </option>
                                                    <option value="House Wife">House Wife</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Office Address<span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherOfcAddress" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Annual Income <span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherIncome" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Nationality<span class="login-danger">*</span></label>
                                                <input class="form-control" name="MotherNationality" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Single Parent<span class="login-danger"> *</span></label>
                                                <select name="MotherSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value=""></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No ">No</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card<span class="login-danger">*</span></label>
                                                <input class="form-control" name="motherAadharImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card</label>
                                                <input type="hidden" value="" name="oldmotherAadharImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                                <input class="form-control" name="motherAccountImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Passbook</label>
                                                <input type="hidden" value="" name="oldmotherAccountImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mother's Details End-->



                            <!-- Guardian  Details Start-->


                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Guardian Details</label>
                                    <div class="row" style="margin-top: 40px;padding: 0 10px;">



                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input class="form-control" name="Guardianname" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Guardian Image<span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Guardian Image</label>
                                                <input type="hidden" value="" name="oldGuardianImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" value="" name="GuardianDOB">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Contact Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianNumber" id="inputField5" type="text" placeholder="Enter Number" value="" oninput="formatContactNumber(event)" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Number <span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianAadharNumber" type="text" value="" oninput="formatAadharNumber(event)" maxlength="14">

                                                <!--<input class="form-control" name="GuardianAadharNumber" type="text" placeholder="Enter Aadhar Number" >-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Qualification <span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianQualification" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Occupation<span class="login-danger"> *</span></label>
                                                <select name="GuardianOccupation" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value=""></option>
                                                    <option value="Salaried">Salaried</option>
                                                    <option value="Self Employed ">Self Employed </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Office Address<span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianOfcAddress" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Annual Income <span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianIncome" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Nationality<span class="login-danger">*</span> </label>
                                                <input class="form-control" name="GuardianNationality" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Single Parent<span class="login-danger"> *</span></label>
                                                <select name="GuardianSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value=""></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No ">No</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card<span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianAadharImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Card</label>
                                                <input type="hidden" value="" name="oldGuardianAadharImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                                <input class="form-control" name="GuardianAccountImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Bank Passbook</label>
                                                <input type="hidden" value="" name="oldGuardianAccountImage">
                                                <img src="{{ asset('assets/img/default.png') }}" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit" style="display: flex;justify-content: center;">
                                    <button type="submit" class="btn btn-primary" name="updatestudentinfo" style="font-size:1.7rem;min-width:350px;">Submit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection