@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Assign Section</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Selection, Section & Assign Button -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="row  justify-content-between align-item-center">
                        <div class="col-md-3">
                            <select class="form-control" id="classSelect">
                                <option value="" disabled selected>Select Class</option>
                                <option value="1">Class 1</option>
                                <option value="2">Class 2</option>
                                <option value="3">Class 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group m-0">
                                <!-- Inline Radio Button options for sections -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="section" value="A" id="sectionA">
                                    <label class="form-check-label" for="sectionA">
                                        Section A
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="section" value="B" id="sectionB">
                                    <label class="form-check-label" for="sectionB">
                                        Section B
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="section" value="C" id="sectionC">
                                    <label class="form-check-label" for="sectionC">
                                        Section C
                                    </label>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4 text-end">
                            <button class="btn btn-info" id="assignSectionBtn">Assign Section</button>
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
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-info">Section A</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success save-btn me-2" data-bs-toggle="modal" data-bs-target="#confirm-modal">Save & Lock</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="2">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Demo</a>
                                        </h2>
                                    </td>
                                    <td>2025-26</td>
                                    <td><span class="badge bg-secondary">Section B</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success save-btn me-2" data-bs-toggle="modal" data-bs-target="#confirm-modal">Save & Lock</button>
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


<!-- Confirmation Modal -->
<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content w-100 mx-auto bg-primary">
            <div class="modal-body p-4 text-center">
                <h4>Are you sure you want to assign these Section?</h4>
                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="confirmAssignBtn">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection