@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Promotion / Detention</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Selection and Action Button -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="row mb-3 justify-content-between">
                        <div class="col-md-3">
                            <select class="currclass dropdown-select" id="classSelect">
                                <option value="" disabled selected>Select Class</option>
                                <option value="1">Class 1</option>
                                <option value="2">Class 2</option>
                                <option value="3">Class 3</option>
                                <!-- Add more classes as needed -->
                            </select>
                        </div>
                        <div class="col-md-3 text-end">
                            <button class="btn btn-primary" id="promoteBtn">Promote</button>
                            <button class="btn btn-primary" id="DetainBtn">Detain</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Students Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                              
                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search student name,scholar number" class="form-control">
                            </div>

                           
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </th>
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Scholar number</th>
                                    <th>Class</th>
                                    <th>Session</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>1123</td>
                                    <td>1</td>
                                    <td>2025-26</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Demo</a>
                                        </h2>
                                    </td>
                                    <td>212123</td>
                                    <td>2</td>
                                    <td>2025-26</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection