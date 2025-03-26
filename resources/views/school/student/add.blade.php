@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header justify-content-center">
                    <h3 class="page-title">Student Details Form </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <!-- <div class="col-12">
                                <h5 class="form-title student-info text-center">Student Details Form <span><a
                                            href="javascript:;"><i
                                                class="feather-more-vertical"></i></a></span></h5>
                            </div> -->
                            <!-- Admission Details Start-->

                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Admission Details</label>
                                    <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Admission Type <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="admissionType" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value="None" selected>Select Type</option>
                                                    <option value="RTE">RTE</option>
                                                    <option value="NON - RTE">NON - RTE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Admission Date <span class="login-danger">*</span> </label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="admissionDate">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Scholar/Admission Number<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="scholarNumber" placeholder="Enter Scholar Number">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Admission Class<span class="login-danger">*</span></label>

                                                <!--<select name="admissionClass" id="selectclass"  style="border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem; width: 100%; padding: .375rem .75rem;">-->

                                                <select class="form-control select" name="admissionClass" id="selectclass" data-school="20" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
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
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-3" id="input-stream" style="display: none;">

                                            <div class="form-group local-forms">
                                                <label>Stream<span class="login-danger">*</span></label>
                                                <select id="stream" class="form-control select" name="studentStream"></select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Session<span class="login-danger">*</span></label>
                                                <select class="form-control select" name="adm_session">
                                                    <option selected value='2025-26'>2025-26</option>
                                                    <option value='2024-25'>2024-25</option>
                                                    <option value='2023-24'>2023-24</option>
                                                    <option value='2022-23'>2022-23</option>
                                                    <option value='2021-22'>2021-22</option>
                                                    <option value='2020-21'>2020-21</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>TC Details<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="tcDetails" placeholder="Enter TC Details">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Previous Class<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="PreviousClass" placeholder="Enter Previous Class">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Previous School<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="PreviousSchool" placeholder="Enter Previous School Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- Admission Details End-->

                            <!-- Students Basic Details Start-->
                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Basic Details</label>
                                    <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Student Name <span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentName" type="text" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="studentDOB">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select class="form-control select" name="studentGender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Category <span class="login-danger">*</span></label>

                                                <select class="form-control select" name="studentCategory">
                                                    <option>Select Category</option>
                                                    <option value="1">General</option>
                                                    <option value="2">OBC</option>
                                                    <option value="3">SC</option>
                                                    <option value="5">ST</option>

                                                    <!--<option value="General">General</option>-->
                                                    <!--<option value="OBC">OBC</option>-->
                                                    <!--<option value="SC/ST">SC/ST</option>-->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Religion<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentReligion" type="text" placeholder="Enter Religion">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Nationality<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentNationality" type="text" placeholder="Enter Nationality">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Student Image<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentImage" type="file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Medical Problem <span class="login-danger">*</span></label>

                                                <select name="studentMtype" id="options1" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3" id="input-field1" style="display:none;">
                                            <div class="form-group local-forms">
                                                <label>Describe Problem<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentMProblem" type="text" placeholder="Describe Medical Problem">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Mother Tongue<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentMtongue" placeholder="Enter Mother Tongue">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Aadhar Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="AadharNumber" type="text" placeholder="Enter Aadhar Number" oninput="formatAadharNumber(event)" maxlength="14">

                                                <!--<input class="form-control" id="inputAadhar" type="text" name="studentAadhar"  placeholder="Enter Aadhar Number" >-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Samagra ID<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentSamagra" placeholder="Enter Samagra ID">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Family Samagra ID<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentFamilySamagra" placeholder="Enter Family Samagra ID">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Email ID<span class="login-danger">*</span></label>
                                                <input class="form-control" type="email" name="studentEmail" placeholder="Enter Email ID">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Birth Mark<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentBirthMark" placeholder="Enter Birth Mark">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Specially Able <span class="login-danger">*</span></label>
                                                <select name="studentSpeciallytype" id="options" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;     padding: .375rem .75rem;">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3" id="input-field" style="display:none;">
                                            <div class="form-group local-forms">
                                                <label>Describe<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentSpeciallyAble" type="text" placeholder="Describe Specially Able">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label> Contact Number<span class="login-danger">*</span></label>
                                                <input class="form-control" id="inputField1" name="studentPrimaryNumber" type="text" placeholder="Enter Contact Number" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Whatsapp Number<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentWhatsappNumber" id="inputField2" type="text" placeholder="Enter WhatsApp Number" oninput="formatContactNumber(event)" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Relation to the person<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentRelation" type="text" placeholder="Enter Relation">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Name of Sibling<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentSiblingName" type="text" placeholder="Enter Sibling Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Sibling School Name<span class="login-danger"> *</span></label>
                                                <select name="studentSiblingScholtype" id="options2" class="form-control select">
                                                    <option value="">Select an option</option>
                                                    <option value="Same">Same School</option>
                                                    <option value="Different">Different School</option>
                                                    <option value="Not Studying">Not Studying</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Caste<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentCaste" type="text" placeholder="Enter Caste">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Permanent Education Number<span class="login-danger">*</span></label>
                                                <input class="form-control" id="inputField6" type="text" name="studentPENno" maxlength="16" placeholder="Enter PEN No">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Economically Weaker Section <span class="login-danger">*</span></label>
                                                <select name="ews" id="options3" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%;     padding: .375rem .75rem;">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3" id="input-field3" style="display:none;">
                                            <div class="form-group local-forms">
                                                <label>EWS Certificate<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentEWSCertificate" type="file" placeholder="Describe Specially Able">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>BPL Benefit <span class="login-danger">*</span></label>
                                                <select name="studentBPL" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>Minority <span class="login-danger">*</span></label>
                                                <select name="studentMinority" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>APAAR ID<span class="login-danger">*</span></label>
                                                <input class="form-control" name="studentAppartNumber" type="text" placeholder="Enter APAAR ID" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '')">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-sm-6" style="margin-top: 2.5rem;">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                    <label style=" font-size: 18px;">Current Address<span class="login-danger">*</span></label>
                                    <div class="row" style="margin-top: 40px;padding: 0 10px;">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Address<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentAddress" placeholder="Enter Address">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Pincode<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpincode" placeholder="Enter Pincode">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>City<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentcity" placeholder="Enter City">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>District<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentDistrict" placeholder="Enter District">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>state<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentstate" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Country<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentCountry" placeholder="Enter Country">
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
                                                <input class="form-control" type="text" name="studentpAddress" placeholder="Enter Address">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Pincode<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpPincode" placeholder="Enter Pincode">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>City<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpCity" placeholder="Enter City">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>District<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpDistrict" placeholder="Enter District">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>state<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpState" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Country<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="studentpCountry" placeholder="Enter Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Address -->


                        <!-- Address End-->






                        <!-- Bank Details Start-->
                        <div class="col-12">
                            <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                <label style=" font-size: 18px;">Bank Details</label>
                                <div class="row" style="margin-top: 40px; padding: 0 10px;">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Bank Name<span class="login-danger">*</span></label>
                                            <input class="form-control" name="studentBankName" type="text" placeholder="Enter Bank Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>IFSC Code<span class="login-danger">*</span></label>
                                            <input class="form-control" name="studentIFSC" type="text" placeholder="Enter IFSC Code">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Account Number<span class="login-danger">*</span></label>
                                            <input class="form-control" name="studentAccountNo" type="text" placeholder="Enter Account Number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Account Holder Name<span class="login-danger">*</span></label>
                                            <input class="form-control" name="studentAccountHolderName" type="text" placeholder="Enter Account Holder Name">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Bank Details End-->


                        <!-- Documents Images Uploading End -->


                        <!-- Students Basic Details End-->



                        <!-- Students Academic Details Start-->
                        <div class="col-12">
                            <div class="form-group local-forms" style="border: 1px solid #f2f2f2">
                                <label style=" font-size: 18px;">Academic Details</label>
                                <div class="row" style="margin-top: 40px;padding: 0 10px;">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Current Session<span class="login-danger">*</span></label>
                                            <select class="form-control select" name="CurrentSession">
                                                <option selected value='2024-25'>2024-25</option>
                                                <option value='2023-24'>2023-24</option>
                                                <option value='2022-23'>2022-23</option>
                                                <option value='2021-22'>2021-22</option>
                                                <option value='2020-21'>2020-21</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Current Class <span class="login-danger">*</span></label>
                                            <select name="currentClass" id="selectclassacad" data-school="20" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Current Class</option>
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


                                    <div class="col-12 col-sm-3" id="input-section1" style="display: none;">
                                        <div class="form-group local-forms">
                                            <label>Section<span class="login-danger">*</span></label>
                                            <select id="section1" class="form-control select" name="Section">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-3" id="input-stream1" style="display: none;">
                                        <div class="form-group local-forms">
                                            <label>Stream<span class="login-danger">*</span></label>
                                            <select id="stream1" class="form-control select" name="scl_stream"> </select>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Roll Number<span class="login-danger">*</span></label>
                                            <input class="form-control" name="RollNumber" type="text" placeholder="Enter Roll Number">
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

                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input class="form-control" name="Fathername" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Father Image<span class="login-danger">*</span></label>
                                            <input class="form-control" name="fatherImage" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="fatherDOB">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Contact Number<span class="login-danger">*</span></label>
                                            <input class="form-control" name="fatherNumber" id="inputField3" type="text" placeholder="Enter Number" oninput="formatContactNumber(event)" maxlength="12">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Number <span class="login-danger">*</span></label>
                                            <input class="form-control" name="FatherAadharNumber" type="text" placeholder="Enter Aadhar Number" oninput="formatAadharNumber(event)" maxlength="14">
                                            <!--<input class="form-control" name="FatherAadharNumber" type="text"  placeholder="Enter Aadhar Number" >-->
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Qualification <span class="login-danger">*</span></label>
                                            <input class="form-control" name="FatherQualification" type="text" placeholder="Enter Qualification">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Office Address<span class="login-danger">*</span></label>
                                            <input class="form-control" name="FatherOfcAddress" type="text" placeholder="Enter Office Address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Annual Income <span class="login-danger">*</span></label>
                                            <input class="form-control" name="FatherIncome" type="text" placeholder="Enter Income in ₹">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Nationality<span class="login-danger">*</span></label>
                                            <input class="form-control" name="FatherNationality" type="text" placeholder="Enter Nationality">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Single Parent<span class="login-danger"> *</span></label>
                                            <select name="fatherSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Type</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No ">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Card<span class="login-danger">*</span></label>
                                            <input class="form-control" name="fatherAadharImage" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                            <input class="form-control" name="fatherAccountImage" type="file">
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

                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input class="form-control" name="Mothername" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Mother Image<span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherImage" type="file" placeholder="Enter Nationality">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="MotherDOB">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Contact Number<span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherNumber" id="inputField4" type="text" placeholder="Enter Number" oninput="formatContactNumber(event)" maxlength="12">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Number <span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherAadharNumber" type="text" placeholder="Enter Aadhar Number" oninput="formatAadharNumber(event)" maxlength="14">
                                            <!--<input class="form-control" name="MotherAadharNumber" type="text"  placeholder="Enter Aadhar Number" >-->
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Qualification <span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherQualification" type="text" placeholder="Enter Qualification">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Occupation<span class="login-danger"> *</span></label>
                                            <select name="MotherOccupation" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Occupation</option>
                                                <option value="Salaried">Salaried</option>
                                                <option value="Self Employed ">Self Employed </option>
                                                <option value="House Wife">House Wife</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Office Address<span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherOfcAddress" type="text" placeholder="Enter Office Address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Annual Income <span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherIncome" type="text" placeholder="Enter Income in ₹">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Nationality<span class="login-danger">*</span></label>
                                            <input class="form-control" name="MotherNationality" type="text" placeholder="Enter Nationality">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Single Parent<span class="login-danger"> *</span></label>
                                            <select name="MotherSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Type</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No ">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Card<span class="login-danger">*</span></label>
                                            <input class="form-control" name="motherAadharImage" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                            <input class="form-control" name="motherAccountImage" type="file">
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

                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input class="form-control" name="Guardianname" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Guardian Image<span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianImage" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="GuardianDOB">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Contact Number<span class="login-danger">*</span></label>
                                            <input class="form-control" id="inputField5" name="GuardianNumber" type="text" placeholder="Enter Number" oninput="formatContactNumber(event)" maxlength="12">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Number <span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianAadharNumber" type="text" placeholder="Enter Aadhar Number" oninput="formatAadharNumber(event)" maxlength="14">

                                            <!--<input class="form-control" name="GuardianAadharNumber" type="text"  placeholder="Enter Aadhar Number" >-->
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Qualification <span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianQualification" type="text" placeholder="Enter Qualification">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Occupation<span class="login-danger"> *</span></label>
                                            <select name="GuardianOccupation" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Occupation</option>
                                                <option value="Salaried">Salaried</option>
                                                <option value="Self Employed ">Self Employed </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Office Address<span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianOfcAddress" type="text" placeholder="Enter Office Address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Annual Income <span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianIncome" type="text" placeholder="Enter Income in ₹">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Nationality<span class="login-danger">*</span> </label>
                                            <input class="form-control" name="GuardianNationality" type="text" placeholder="Enter Nationality">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Single Parent<span class="login-danger"> *</span></label>
                                            <select name="GuardianSP" id="options2" style=" border: 1px solid #ddd; box-shadow: none; color: #333; font-size: 15px; height: 45px; border-radius: .25rem;;width:100%; padding: .375rem .75rem;">
                                                <option value="">Select Type</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No ">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Aadhar Card<span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianAadharImage" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>Bank Account Passbook<span class="login-danger">*</span></label>
                                            <input class="form-control" name="GuardianAccountImage" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="student-submit" style="display: flex;justify-content: center;">
                                <button type="submit" class="btn btn-primary" name="submitData" style="font-size:1.7rem;min-width:350px;">Submit</button>
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