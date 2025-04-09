@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Student Management - Termination / Active/Inactive</h3>
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
                        <div class="col-md-6 text-end">
                            <button class="btn btn-danger" id="terminateBtn">Terminate</button>
                            <button class="btn btn-success" id="activeBtn">Activate</button>
                            <button class="btn btn-warning" id="inactiveBtn">Deactivate</button>
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
                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </th>
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Session</th>
                                    <th>Status</th> <!-- New Column for Status -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Example Status -->
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Demo</a>
                                        </h2>
                                    </td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-warning">Inactive</span></td> <!-- Example Status -->
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
