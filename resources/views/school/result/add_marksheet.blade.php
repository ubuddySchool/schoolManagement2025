@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-auto">
                <div class="page-sub-header">
                    <h3 class="page-title">Add New Result</h3>
                </div>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp d-none">
                <!--<a class="btn btn-outline-primary me-2" style="cursor: default;">Total Records - </a>-->

                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#con-close-modal">Create Result</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-2 col-md-2">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Session</h5>
                            <select name="session" id="session" class="currclass dropdown-select">
                                <option selected="" value="2024-25">2024-25</option>
                                <option value="2023-24">2023-24</option>
                                <option value="2022-23">2022-23</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2020-21">2020-21</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Term</h5>
                            <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                <option value="">Select Term</option>
                                <option value="14">First Term</option>
                                <option value="15">Second Term</option>
                                <option value="51">Term I</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <h6 class="form-title student-info" style="font-size: 15px;">Select Class</h6>
                            <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="20">
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

                        <div class="col-lg-2 col-md-2" id="input-stream1" style="display: none;">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Stream</h5>
                            <select id="selectstream1" class="currclass dropdown-select" name="scl_stream"> </select>
                        </div>

                        <div class="col-lg-2 col-md-2" id="input-section1" style="">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Section</h5>
                            <select id="section1" class="currclass dropdown-select" name="Section">
                                <option value="">Select Section</option>
                                <option value="67">A</option>
                            </select>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="page-header d-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Fees</h3>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <style>
                                @media (min-width: 767px) {
                                    .modal-dialog {
                                        max-width: 700px;
                                        margin: 1.75rem auto;
                                    }
                                }
                            </style>

                            &nbsp; &nbsp; &nbsp;<table id="myTable" class="table border-0 star-student table-hover table-center mb-0  table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Student name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <!--<th>Subject</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>amit </td>
                                        <td>UKG</td>
                                        <td>A</td>
                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-modal249"><i class="feather-eye"></i></a>

                                                <a href="" class="btn btn-sm bg-danger-light me-2 d-none" data-bs-toggle="modal" data-bs-target="#con-close-modal249"> <i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-danger d-none"><i class="feather-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nishant Haswani </td>
                                        <td>UKG</td>
                                        <td>A</td>
                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-modal447"><i class="feather-eye"></i></a>

                                                <a href="" class="btn btn-sm bg-danger-light me-2 d-none" data-bs-toggle="modal" data-bs-target="#con-close-modal447"> <i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-danger d-none"><i class="feather-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Megha </td>
                                        <td>UKG</td>
                                        <td>A</td>
                                        <td>
                                            <div class="actions">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-modal611"><i class="feather-eye"></i></a>

                                                <a href="" class="btn btn-sm bg-danger-light me-2 d-none" data-bs-toggle="modal" data-bs-target="#con-close-modal611"> <i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-danger d-none"><i class="feather-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div id="con-close-modal249" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <form method="post" action="resultData.php">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">amit</h4>
                                                <input class="form-control" id="inputField1" name="student_id" value="249" type="text" hidden="">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Class</label>-->
                                                            <input class="form-control" id="inputField1" name="class" value="88" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="class1" value="UKG" type="text" readonly="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Section</label>-->
                                                            <input class="form-control" id="inputField1" name="section" value="67" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="section1" value="A" type="text" readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Term<span class="login-danger">*</span></label>-->
                                                            <input class="form-control" id="inputField1" name="term" value="14" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="term1" value="First Term" type="text" readonly="">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!-- Display the first option value in an input field -->
                                                            <input class="form-control" type="text" id="firstOptionInput" name="session" value="2025-26" readonly="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">

                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Hindi</label>
                                                        <input type="number" class="form-control" name="subject_157" value="157" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks157" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">English</label>
                                                        <input type="number" class="form-control" name="subject_158" value="158" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks158" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Mathematics</label>
                                                        <input type="number" class="form-control" name="subject_159" value="159" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks159" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">GK</label>
                                                        <input type="number" class="form-control" name="subject_160" value="160" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks160" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Drawing</label>
                                                        <input type="number" class="form-control" name="subject_161" value="161" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks161" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Sports</label>
                                                        <input type="number" class="form-control" name="subject_162" value="162" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks162" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="resultSubmit" class="btn btn-info waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="view-modal249" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-transform: uppercase;">amit</h4>
                                            <input class="form-control" id="inputField1" name="student_id" value="249" type="text" hidden="">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Class : UKG </label>
                                                </div>


                                                <div class="col-md-4">
                                                    <label>Section : A </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Term : First Term </label>
                                                </div>

                                                <div class="col-md-4">

                                                    <label>Session : 2022-23 </label>
                                                </div>

                                            </div>

                                            <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">
                                        </div>
                                        <style>
                                            .table1,
                                            .td,
                                            .th {
                                                border: 1px solid #000 !important;
                                                text-align: center;
                                            }
                                        </style>

                                        <style>
                                            @media (min-width: 767px) {
                                                .modal-dialog {
                                                    max-width: 600px;
                                                    margin: 1.75rem auto;
                                                }
                                            }
                                        </style>


                                        <div class="modal-footer">
                                            <!--<button class="btn btn-primary" onclick="printPage()">Print</button>-->
                                            <button type="button" id="myElement" class="btn btn-secondary d-none" data-bs-dismiss="modal">Close</button>

                                            <button class="btn btn-primary d-none" id="myElement2" onclick="printTimeTable('printContent')">Print Result</button>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div id="con-close-modal447" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <form method="post" action="resultData.php">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Nishant Haswani</h4>
                                                <input class="form-control" id="inputField1" name="student_id" value="447" type="text" hidden="">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Class</label>-->
                                                            <input class="form-control" id="inputField1" name="class" value="88" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="class1" value="UKG" type="text" readonly="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Section</label>-->
                                                            <input class="form-control" id="inputField1" name="section" value="67" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="section1" value="A" type="text" readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Term<span class="login-danger">*</span></label>-->
                                                            <input class="form-control" id="inputField1" name="term" value="14" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="term1" value="First Term" type="text" readonly="">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!-- Display the first option value in an input field -->
                                                            <input class="form-control" type="text" id="firstOptionInput" name="session" value="2025-26" readonly="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">

                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Hindi</label>
                                                        <input type="number" class="form-control" name="subject_157" value="157" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks157" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">English</label>
                                                        <input type="number" class="form-control" name="subject_158" value="158" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks158" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Mathematics</label>
                                                        <input type="number" class="form-control" name="subject_159" value="159" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks159" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">GK</label>
                                                        <input type="number" class="form-control" name="subject_160" value="160" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks160" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Drawing</label>
                                                        <input type="number" class="form-control" name="subject_161" value="161" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks161" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Sports</label>
                                                        <input type="number" class="form-control" name="subject_162" value="162" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks162" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="resultSubmit" class="btn btn-info waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="view-modal447" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-transform: uppercase;">Nishant Haswani</h4>
                                            <input class="form-control" id="inputField1" name="student_id" value="447" type="text" hidden="">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Class : UKG </label>
                                                </div>


                                                <div class="col-md-4">
                                                    <label>Section : A </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Term : First Term </label>
                                                </div>

                                                <div class="col-md-4">

                                                    <label>Session : 2022-23 </label>
                                                </div>

                                            </div>

                                            <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">
                                        </div>
                                        <style>
                                            .table1,
                                            .td,
                                            .th {
                                                border: 1px solid #000 !important;
                                                text-align: center;
                                            }
                                        </style>

                                        <style>
                                            @media (min-width: 767px) {
                                                .modal-dialog {
                                                    max-width: 600px;
                                                    margin: 1.75rem auto;
                                                }
                                            }
                                        </style>


                                        <div class="modal-footer">
                                            <!--<button class="btn btn-primary" onclick="printPage()">Print</button>-->
                                            <button type="button" id="myElement" class="btn btn-secondary d-none" data-bs-dismiss="modal">Close</button>

                                            <button class="btn btn-primary d-none" id="myElement2" onclick="printTimeTable('printContent')">Print Result</button>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div id="con-close-modal611" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <form method="post" action="resultData.php">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Megha</h4>
                                                <input class="form-control" id="inputField1" name="student_id" value="611" type="text" hidden="">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Class</label>-->
                                                            <input class="form-control" id="inputField1" name="class" value="88" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="class1" value="UKG" type="text" readonly="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Section</label>-->
                                                            <input class="form-control" id="inputField1" name="section" value="67" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="section1" value="A" type="text" readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!--<label>Term<span class="login-danger">*</span></label>-->
                                                            <input class="form-control" id="inputField1" name="term" value="14" type="text" hidden="">
                                                            <input class="form-control" id="inputField1" name="term1" value="First Term" type="text" readonly="">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group local-forms" style="margin-bottom: 1.0rem;">
                                                            <!-- Display the first option value in an input field -->
                                                            <input class="form-control" type="text" id="firstOptionInput" name="session" value="2025-26" readonly="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">

                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Hindi</label>
                                                        <input type="number" class="form-control" name="subject_157" value="157" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks157" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">English</label>
                                                        <input type="number" class="form-control" name="subject_158" value="158" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks158" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Mathematics</label>
                                                        <input type="number" class="form-control" name="subject_159" value="159" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks159" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">GK</label>
                                                        <input type="number" class="form-control" name="subject_160" value="160" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks160" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Drawing</label>
                                                        <input type="number" class="form-control" name="subject_161" value="161" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks161" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                                <div class="row" style="margin-bottom: 1rem;">
                                                    <div class="col-4">
                                                        <label for="field-1" class="form-label" style="font-size: 15px; color: #000; font-weight: 500;">Sports</label>
                                                        <input type="number" class="form-control" name="subject_162" value="162" id="field-3" hidden="">

                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" class="form-control" name="marks162" id="field-3" placeholder="Enter Marks" min="0" max="100">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="updateValue" value="0" id="field-3" hidden="">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="resultSubmit" class="btn btn-info waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="view-modal611" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-transform: uppercase;">Megha</h4>
                                            <input class="form-control" id="inputField1" name="student_id" value="611" type="text" hidden="">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Class : UKG </label>
                                                </div>


                                                <div class="col-md-4">
                                                    <label>Section : A </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Term : First Term </label>
                                                </div>

                                                <div class="col-md-4">

                                                    <label>Session : 2022-23 </label>
                                                </div>

                                            </div>

                                            <input type="text" class="form-control" name="category" value="A" id="field-3" hidden="">
                                        </div>
                                        <style>
                                            .table1,
                                            .td,
                                            .th {
                                                border: 1px solid #000 !important;
                                                text-align: center;
                                            }
                                        </style>

                                        <style>
                                            @media (min-width: 767px) {
                                                .modal-dialog {
                                                    max-width: 600px;
                                                    margin: 1.75rem auto;
                                                }
                                            }
                                        </style>


                                        <div class="modal-footer">
                                            <!--<button class="btn btn-primary" onclick="printPage()">Print</button>-->
                                            <button type="button" id="myElement" class="btn btn-secondary d-none" data-bs-dismiss="modal">Close</button>

                                            <button class="btn btn-primary d-none" id="myElement2" onclick="printTimeTable('printContent')">Print Result</button>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <!--<div class="table-responsive d-none">-->
    <!--    <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">-->
    <!--        <thead class="student-thread">-->
    <!--            <tr>-->
    <!--                <th>S. No.</th>-->
    <!--                <th>Exam</th>-->
    <!--                <th>Standard</th>-->
    <!--                <th>Term</th>-->
    <!--                <th>Student Name</th>-->
    <!--                <th>Percentage</th>-->
    <!--                <th>Action</th>-->
    <!--            </tr>-->
    <!--        </thead>-->
    <!--        <tbody>-->
    <!--            <tr>-->
    <!--                <td>1</td>-->
    <!--                <td>Half Yearly</td>-->
    <!--                <td>12</td>-->
    <!--                <td>I</td>-->
    <!--                <td>Amit</td>-->
    <!--                <td>79 %</td>-->

    <!--                <td>-->
    <!--                    <div class="actions">-->
    <!--                <a href="" class="btn btn-sm bg-success-light me-2"  data-bs-toggle="modal" data-bs-target="#con-view-modal"><i class="feather-eye"></i></a>-->

    <!--                <a href="notice-edit.php" class="btn btn-sm bg-danger-light me-2"> <i class="feather-edit"></i> </a> -->

    <!--                <a href="notice-delete.php" class="btn btn-sm bg-danger"> <i class="feather-trash"></i> </a>-->
    <!--                </div>-->
    <!--                </td>-->

    <!--            </tr>-->

    <!--        </tbody>-->
    <!--    </table>-->
    <!--</div>-->

</div>

@endsection