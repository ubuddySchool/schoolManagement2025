@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Terminate</h3>
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
                        <div class="col-md-2">
                            <select class="currclass dropdown-select" id="classSelect">
                                <option value="" disabled selected>Select Session</option>
                                <option value="1">2025-26</option>
                                <option value="2">2024-25</option>
                                <option value="3">2023-24</option>
                                <!-- Add more classes as needed -->
                            </select>
                        </div>
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
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Session</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>I</td>
                                    <td>A</td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-success">Active</span></td> 
                                    <td>  <button type="button" class="btn btn-sm btn-danger text-white" data-bs-toggle="modal" data-bs-target="#terminateBtn">Terminate</button></td>
                                    
                                </tr>
                                <tr>
                                   <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Demo</a>
                                        </h2>
                                    </td>
                                    <td>II</td>
                                    <td>A</td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-warning">Inactive</span></td> 
                                   
                                   <td>
                                        <button type="button" class="btn btn-sm btn-danger text-white" data-bs-toggle="modal" data-bs-target="#terminateBtn">Terminate</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="terminateBtn" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content w-100 mx-auto ">
            <div class="modal-body p-4 text-center">
               
                            <h5 class="table-avatar">
                            Please provide a reason for termination
                            </h5>
                      
                            <textarea name="terminate_remarks" class="optional-subject w-100" rows="5" id="" placeholder="Enter termination remarks..."></textarea>

                           
                           
                <div class="mt-3">
                    <button type="button"  class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirmAssignBtn">Yes</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmAssignBtn" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content w-100 mx-auto bg-primary">
            <div class="modal-body p-4 text-center">
            <h6>Are you sure you want to terminate Akash Gupta from Class 1?</h6>

                <div class="mt-3">
                    <button type="button" class="btn btn-success btn-sm" id="confirmAssignBtn">Yes</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
