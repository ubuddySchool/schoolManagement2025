@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Student Attendance</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="page-sub-header float-end">
                    <a href="{{ route('attendence.student') }}" class="btn btn-primary">Back</a>
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

                        <!-- Select Date and Search Student -->
                        <div class="row justify-content-between mb-3">
                            <div class="col-lg-3 col-sm-3 form-group">
                                <input type="date" name="attendance_date" class="form-control" required>
                            </div>
                            
                            <div class="col-lg-3 col-md-3"><select name="selectclassacad" class="currclass dropdown-select" id="selectclassacad" data-school=" 20 ">
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
                                    </select></div>

                                <div class="col-lg-2 col-md-2" id="input-section1" >
                                    <select id="section1"class="currclass dropdown-select" name="Section">
                                        <option value="">Select Section</option>
                                        <option value="69">A</option>
                                    </select></div>
                                    <div class="col-6 col-sm-4 form-group">
                                <input type="text" name="search_student" placeholder="Search Student" class="form-control">
                            </div>
                        </div>

                       

                        <!-- Attendance Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Attendance Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Student 1 -->
                                <tr>
                                    <td>Demo</td>
                                    <td class="d-flex gap-3">
                                        <input type="hidden" name="student_id[]" value="8126">
                                        <div class="form-check">
                                            <input type="radio" id="present_8126" name="attendance_status[8126]" value="Present" class="form-check-input" required>
                                            <label for="present_8126" class="form-check-label">Present</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="absent_8126" name="attendance_status[8126]" value="Absent" class="form-check-input" required>
                                            <label for="absent_8126" class="form-check-label">Absent</label>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Add more students here -->
                                <tr>
                                    <td>test</td>
                                    <td class="d-flex gap-3">
                                        <input type="hidden" name="student_id[]" value="1234">
                                        <div class="form-check">
                                            <input type="radio" id="present_1234" name="attendance_status[1234]" value="Present" class="form-check-input" required>
                                            <label for="present_1234" class="form-check-label">Present</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="absent_1234" name="attendance_status[1234]" value="Absent" class="form-check-input" required>
                                            <label for="absent_1234" class="form-check-label">Absent</label>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Add more students as needed -->
                            </tbody>
                        </table>

                        <!-- Submit Button -->
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Mark Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection