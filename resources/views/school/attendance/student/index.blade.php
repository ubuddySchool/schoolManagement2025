@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Student Attendance View</h3>
                </div>

            </div>
            <div class=" col-lg-3 col-sm-12">
                <div class="page-sub-header">
                    <a href="{{ route('attendence.add.student') }}" class="btn btn-primary">Mark Attendance</a>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-12 col-sm-6 form-group">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Date</h5>

                            <input type="date" name="attendancedate" class="form-control" id="attendancedate">
                            <input type="hidden" name="schoolid" id="schoolid" value="20">
                        </div>


                        <div class="col-lg-2 col-12 col-sm-6">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Class</h5>
                            <select name="selectclassacad" class="currclass form-control" id="selectclassacad" data-school="20">
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
                        <div class="col-lg-2 col-12 col-sm-6" id="input-stream1" style="display: none;">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Stream</h5>
                            <select id="selectstream1" class="currclass form-control" name="scl_stream">

                            </select>
                        </div>

                        <div class="col-lg-2 col-12 col-sm-6" id="input-section1" style="display: none;">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Section</h5>
                            <select id="section1" class="currclass form-control" name="Section"></select>
                        </div>

                        <div class="col-lg-3 col-12 col-sm-6">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Attendance Status</h5>
                            <select class="form-control" name="attendstatus" id="attendstatus">
                                <option value="">Select status</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                                <option value="All">All</option>
                            </select><input type="hidden" name="schoolid" id="schoolid" value="20">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card card-table comman-shadow">
            <div class="card-body">
                <h5 class="form-title student-info" style="font-size: 20px;">Student Attendance List</h5>
                <table class="table border-0 star-student table-hover table-center mb-0  table-striped dataTable" id="studentTable">
                    <thead class="student-thread">
                        <tr>
                            <th>S.No.</th>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Attendance Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Demo</td>
                            <td>12 (Science Maths)</td>
                            <td>A</td>
                            <td><span class="badge badge-success">Present</span></td>  
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Test</td>
                            <td>12 (Science Maths)</td>
                            <td>B</td>
                            <td><span class="badge badge-danger">Absent</span></td>                             

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>


</div>

@endsection