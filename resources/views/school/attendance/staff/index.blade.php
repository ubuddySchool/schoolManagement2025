@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Staff Attendance View</h3>
                </div>

            </div>

            <div class=" col-lg-3 col-sm-12">
                <div class="page-sub-header">
                    <a href="{{ route('attendence.add.staff') }}" class="btn btn-primary"> Mark Attendance</a>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-3 form-group d-none">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Teacher </h5>
                            <select id="teacherID" name="teacherName" class="form-control">
                                <option value="">Select Teacher</option>
                                <option value="12" data-schoolid="">vijay Kumar</option>
                                <option value="13" data-schoolid="">Demo</option>
                                <option value="14" data-schoolid="">Nishant Haswani</option>
                                <option value="126" data-schoolid=""></option>
                                <option value="127" data-schoolid="">Hareesh M Bhatia</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-3 form-group">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Date</h5>
                            <input type="date" name="attendancedate" class="form-control" id="attendancedate">
                        </div>

                        <div class="col-12 col-sm-3">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Attendance Status</h5>
                            <select class="form-control" name="attendstatus" id="attendstatus">
                                <option value="">Select status</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                                <option value="All">All</option>
                            </select>
                            <input type="hidden" name="schoolid" id="schoolid" value="20">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card card-table comman-shadow">
            <div class="card-body">
                <h5 class="form-title student-info" style="font-size: 20px;">Teacher Attendance List</h5>

                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="teacherTable">
                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable" id="teacherTable">
                        <thead class="student-thread">
                            <tr>
                                <th>S.No.</th>
                                <th>Teacher Name</th>
                                <th>Attendance Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td><span class="badge badge-success">Present</span></td>    
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Demo</td>
                                <td><span class="badge badge-danger">Absent</span></td>                             

                            </tr>
                            
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </div>

</div>
</div>



@endsection