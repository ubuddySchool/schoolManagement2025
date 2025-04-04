@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-auto">
                <div class="page-sub-header">
                    <h3 class="page-title">Result Details</h3>
                </div>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">

                <a data-bs-toggle="modal" data-bs-target="#export-alert-modal" class="btn btn-primary me-2">Export</a>
                <!--<a data-bs-toggle="modal" data-bs-target="#layout4result" class="btn btn-primary me-2">New Result</a>-->

                <a href="{{ route('student.result.division') }}" class="btn btn-primary me-2">Add Division</a>

                <a data-bs-toggle="modal" data-bs-target="#con-view-layout" class="btn btn-primary me-2">Result Layout</a>


                <a href="{{ route('student.result.marksheet') }}" class="btn btn-primary">Marksheet</a>
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
                            <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                <option value="">Select Term</option>
                                <option value="14">First Term</option>
                                <option value="15">Second Term</option>
                                <option value="51">Term I</option>
                            </select>
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
                            <select id="selectstream1" class="currclass dropdown-select" name="scl_stream"> </select>
                        </div>

                        <div class="col-lg-2 col-md-2" id="input-section1" >
                            <select id="section1" class="currclass dropdown-select" name="Section">
                                <option value="a">Select Section</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <select class="currclass dropdown-select" name="resultType" id="resultType">
                                <option>Select Type</option>
                                <option value="0">Student Wise</option>
                                <option value="1">Subject Wise</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Result List</h3>
                            </div>
                            <div class="col-auto d-none">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
    <table id="subjectWiseTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
        <thead class="student-thread">
            <tr>
                <th>S No.</th>
                <th>Class</th>
                <th>Section</th>
                <th>Subject</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $students = [
                    ['name' => 'Aaliyah', 'class' => '10 A', 'section' => 'A', 'subject' => 'Maths'],
                    ['name' => 'Malynne', 'class' => '8 A', 'section' => 'A', 'subject' => 'English'],
                    ['name' => 'Nathan Humphries', 'class' => '10 B', 'section' => 'A', 'subject' => 'Science'],
                ];
            @endphp
            @foreach ($students as $key => $student)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $student['class'] }}</td>
                    <td>{{ $student['section'] }}</td>
                    <td>{{ $student['subject'] }}</td>
                    <td class="text-end">
                        <div class="actions">
                            <!-- <a data-bs-toggle="modal" data-bs-target="#view-layouts-edit" class="btn btn-sm bg-success-light me-2"> <i class="feather-eye"></i></a> -->

                            <a href="{{ route('student.result.view') }}" class="btn btn-sm bg-success-light me-2">
                            <i class="feather-eye"></i>
                            </a>
                            <a href="" class="btn btn-sm bg-danger">
                                <i class="feather-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table id="studentWiseTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
        <thead class="student-thread">
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key => $student)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['class'] }}</td>
                    <td>{{ $student['section'] }}</td>
                    <td class="text-end">
                        <div class="actions">
                            
                            <!-- <a data-bs-toggle="modal" data-bs-target="#view-layouts-edit" class="btn btn-sm bg-success-light me-2"> <i class="feather-eye"></i></a> -->
                            <a href="{{ route('student.result.view') }}" class="btn btn-sm bg-success-light me-2">
                            <i class="feather-eye"></i>
                            </a>
                            <a href="notice-delete.php" class="btn btn-sm bg-danger">
                                <i class="feather-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>



    <div id="con-view-layout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Choose Marksheet Layout</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row" style="margin-bottom: .5rem;">
                            <div class="col-md-12" style="margin-bottom: 1.5rem;">
                                <input type="text" class="form-control" name="id" value="2" hidden>

                                <select name="layoutType" class="currclass dropdown-select">
                                    <option value="2" selected>All Terms</option>
                                    <option value="1">Terms Wise</option>
                                </select>

                            </div>

                            <div class="col-md-12" style="margin-bottom: 1.5rem;">
                                <select name="layoutColor" class="currclass dropdown-select">
                                    <option value="#397b85">Blue</option>
                                    <option value="#a03a37">Red</option>
                                    <option value="#3d395f" selected>Purple</option>
                                    <option value="#3c4648">Grey</option>
                                    <option value="#3c7b44">Green</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>School Re-open Date <span class="login-danger">*</span></label>
                                    <input class="form-control" type="date" value="2025-01-08" name="reOpenDate">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light" name="layoutUpdate">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="view-layouts-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Subject - English</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Class</strong></td>
                                <td><input type="text" class="form-control" value="IV" readonly></td>
                                <td><strong>Section</strong></td>
                                <td><input type="text" class="form-control" value="A" readonly></td>
                            </tr>
                            <tr>
                                <td><strong>Term</strong></td>
                                <td><input type="text" class="form-control" value="Annual" readonly></td>
                                <td><strong>Session</strong></td>
                                <td><input type="text" class="form-control" value="2024-25" readonly></td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <th>Ext Marks (out of 80)</th>
                                <th>In Marks (out of 20)</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td >Akash Singh</td>
                                <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                 <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                <td>
                                    <button type="button" class="btn btn-warning absent-btn">Absent</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <div id="layout4result" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="printResult.php" method="post" target="_blank">
                    <div class="modal-header">
                        <h4 class="modal-title">Choose Result Layout</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row" style="margin-bottom: .5rem;">
                            <div class="col-md-12">
                                <select name="layoutClass" class="currclass">
                                    <option>Select Class</option>
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
                        <div class="row" style="margin-bottom: .5rem;">
                            <div class="col-md-12">
                                <select name="layoutTerms" class="currclass dropdown-select">
                                    <option value="">Select Term</option>
                                    <option value="14">First Term</option>
                                    <option value="15">Second Term</option>
                                    <option value="51">Term I</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light" name="layoutUpdate">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="export-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="export_stuDetails.php" method="post" target="_blank">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addReminderModalLabel">Select type of Export file:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" value="testschool" name="usernamePost" required>
                        </div>
                        <div class="form-group">
                            <div class="row" style="margin-bottom: .5rem;">
                                <div class="col-md-12">
                                    <select name="class" class="currclass" required>
                                        <option>Select Class</option>
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
                            <div class="row" style="margin-bottom: .5rem;">
                                <div class="col-md-12">
                                    <select name="terms" class="currclass dropdown-select" required>
                                        <option value="">Select Term</option>
                                        <option value="14">First Term</option>
                                        <option value="15">Second Term</option>
                                        <option value="51">Term I</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 0.5rem;">
                                <div class="col-md-12">
                                    <select name="parentSign" class="currclass dropdown-select" aria-label="Parent Signature" required>
                                        <option value="" selected disabled>Parent Signature</option>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>-->
                        <button type="submit" name="blankFileExport" class="btn btn-primary">Export Blank File</button>
                        <button type="submit" name="filledFileExport" class="btn btn-primary">Export Filled File</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const resultTypeSelect = document.getElementById('resultType');
    const subjectWiseTable = document.getElementById('subjectWiseTable');
    const studentWiseTable = document.getElementById('studentWiseTable');

    // Hide both tables initially
    subjectWiseTable.style.display = 'none';
    studentWiseTable.style.display = 'none';

    // Listen for changes on the resultType select dropdown
    resultTypeSelect.addEventListener('change', function () {
        if (resultTypeSelect.value == '0') { // "Student Wise"
            subjectWiseTable.style.display = 'none';
            studentWiseTable.style.display = 'table';
        } else if (resultTypeSelect.value == '1') { // "Subject Wise"
            subjectWiseTable.style.display = 'table';
            studentWiseTable.style.display = 'none';
        } else { // Default: Hide both tables if no option is selected
            subjectWiseTable.style.display = 'none';
            studentWiseTable.style.display = 'none';
        }
    });
});

</script>

<script>
    document.querySelectorAll('.absent-btn').forEach(button => {
        button.addEventListener('click', function() {
            let row = this.closest('tr');
            let inputs = row.querySelectorAll('.marks');
            
            inputs.forEach(input => {
                input.value = "AB";
                input.disabled = true;
            });

            this.disabled = true; // Disable the absent button after clicking
        });
    });
</script>
@endsection