@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Add Configuration</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Configuration Section -->
   
    <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-2 col-md-2 d-none">
                                <h5 class="form-title student-info" style="font-size: 15px;">Select Term</h5> <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                    <option value="">Select Term</option>
                                    <option value="
            								14"> First Term </option>
                                    <option value="
            								15"> Second Term </option>
                                    <option value="
            								51"> Term I </option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <h6 class="form-title student-info" style="font-size: 15px;">Select Class</h6>
                                <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="
            							20">
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
                                <select id="selectstream1" class="currclass dropdown-select" name="scl_stream"></select>
                            </div>

                            <div class="col-md-2 d-none">
                                <option selected="" value="2025-26">2025-26</option>
                                <option value="2024-25">2024-25</option>
                                <option value="2023-24">2023-24</option>
                                <option value="2022-23">2022-23</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2020-21">2020-21</option>
                                <input type="text" class="form-control" name="session" value="" id="field-3" hidden="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- Title Input -->
                    <div class="form-group">
                        <label for="examTitle">Title of Exam</label>
                        <input type="text" class="form-control" id="examTitle" placeholder="Enter Title of Exam">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="examTitle">Inspection Heading</label>
                        <input type="text" class="form-control" id="examTitle" placeholder="Enter Title of Exam">
                        <label for="examTitle">Inspection Line 1</label>
                        <input type="text" class="form-control" id="examTitle" placeholder="Enter Title of Exam">
                        <label for="examTitle">Inspection Line 2</label>
                        <input type="text" class="form-control" id="examTitle" placeholder="Enter Title of Exam">
                        <label for="examTitle">Inspection Line 3</label>
                        <input type="text" class="form-control" id="examTitle" placeholder="Enter Title of Exam">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
        <div class="card">
                <div class="card-body"> 
        <button type="submit" name="updateAdmitCard" class="btn btn-outline-primary me-2" >Save</button>
    
    </div>
    </div>
    </div>
                            
    </div>

</div>

@endsection
