@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Add Syllabus</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="row align-items-center">

                    <div class="col-12 col-sm-2 text-center download-grp">
                            <label class="m-0">2025-26</label>
                        </div>

                        <div class="col-lg-2 col-md-2">
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
                            <h5 class="form-title student-info" style="font-size: 1rem;">Select Stream</h5>
                            <select id="selectstream1" class="currclass dropdown-select" name="scl_stream"> </select>
                        </div>

                        <div class="col-lg-2 col-md-2" id="input-section1" style="display: none;">
                            <h5 class="form-title student-info" style="font-size: 1rem;">Select Section</h5>
                            <select id="section1" class="currclass dropdown-select" name="Section"></select>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                <option value="">Select Term</option>
                                <option value="14">First Term</option>
                                <option value="15">Second Term</option>
                                <option value="51">Term I</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 50px;">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Subjects</h3>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6" id="filteredTableContainer">
                        <div class="row" style="margin-left: 2rem;padding: 1rem;box-shadow: 0 0 5px 0;border-radius: 10px;">
                            <div class="col-12" style="display: flex; justify-content: space-between; margin-bottom:1rem;">
                                <h6 class="form-title1 student-info" style=" color:#333;">Hindi</h6><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReminderModal">Enter Syllabus</button>
                            </div>
                            <div class="col-12" style="display: flex; justify-content: space-between; margin-bottom:1rem;">
                                <h6 class="form-title1 student-info" style=" color:#333;">English</h6><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReminderModal">Enter Syllabus</button>
                            </div>
                            <div class="col-12" style="display: flex; justify-content: space-between; margin-bottom:1rem;">
                                <h6 class="form-title1 student-info" style=" color:#333;">Mathematics</h6><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReminderModal">Enter Syllabus</button>
                            </div>
                           
                            
                            <div class="modal fade" id="addReminderModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">

                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addReminderModalLabel">Subject : Hindi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <!-- <span aria-hidden="true">×</span> -->
                                            </button>
                                        </div>
                                        <form action="" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="reminderDate"></label>
                                                    <input type="text" name="subjectID" value="10" hidden="">
                                                    <input type="text" name="selectclassacad" value="89" hidden="">
                                                    <input type="text" name="selectstream" value="" hidden="">
                                                    <input type="text" name="section" value="68" hidden="">
                                                    <input type="text" name="terms" value="15" hidden="">
                                                    <input type="text" name="classCat" value="A" hidden="">
                                                    <input type="text" name="session" value="2024-25" hidden="">
                                                    <input type="text" name="schoolID" value="20" hidden="">

                                                    <textarea rows="5" cols="5" id="editor10" class="form-control" name="syllabusDetails" placeholder="Enter text here"></textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <button type="submit" name="submitSyllabus" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
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
</div>

@endsection