@extends('layouts.app')  
@section('content')  
<div class="content container-fluid">      
    <div class="page-header">         
        <div class="row">             
            <div class="col-lg-9 col-sm-12">                 
                <div class="page-sub-header">                     
                    <h3 class="page-title">Mark Teacher Attendance</h3>                 
                </div>              
            </div>              
            <div class="col-lg-3 col-sm-12">                 
                <div class="page-sub-header float-end">                     
                    <a href="{{ route('attendence.staff') }}" class="btn btn-primary"> Back</a>                 
                </div>              
            </div>         
        </div>     
    </div>       
    <div class="row">         
        <div class="col-sm-12">             
            <div class="card comman-shadow">                 
                <div class="card-body">                     
                    <form action="" method="POST"> 
                        @csrf
                        <div >
                            <table class="table table-bordered">
                                 <!-- Select Date -->
                                  <div class="row justify-content-between">
                        <div class="col-6 col-sm-4 form-group">
                            <h5 class="form-title student-info" style="font-size: 15px;">Select Date</h5>
                            <input type="date" name="attendance_date" class="form-control" required>
                        </div>
                        <div class="col-6 col-sm-4 form-group">
                            <input type="text" name="attendance_date" placeholder="Search Teacher" class="form-control" required>
                        </div>
                        </div>
                                <thead>
                                    <tr>
                                        <th>Teacher</th>
                                        <th>Attendance Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Teacher 1 -->
                                    <tr>
                                        <td>Test</td>
                                        <td class="d-flex gap-3">
                                            <input type="hidden" name="teacher_id[]" value="1">
                                            <div class="form-check">
                                                <input type="radio" id="present_1" name="attendance_status[1]" value="Present" class="form-check-input" required>
                                                <label for="present_1" class="form-check-label">Present</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="absent_1" name="attendance_status[1]" value="Absent" class="form-check-input" required>
                                                <label for="absent_1" class="form-check-label">Absent</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Teacher 2 -->
                                    <tr>
                                        <td>Demo</td>
                                        <td class="d-flex gap-3">
                                            <input type="hidden" name="teacher_id[]" value="2">
                                            <div class="form-check">
                                                <input type="radio" id="present_2" name="attendance_status[2]" value="Present" class="form-check-input" required>
                                                <label for="present_2" class="form-check-label">Present</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="absent_2" name="attendance_status[2]" value="Absent" class="form-check-input" required>
                                                <label for="absent_2" class="form-check-label">Absent</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Mark Attendance</button>
                        </div>
                    </form>
                </div>             
            </div>         
        </div>     
    </div>      
</div>    
@endsection
