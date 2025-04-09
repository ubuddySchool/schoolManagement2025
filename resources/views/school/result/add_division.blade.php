@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Add Division &amp; Remarks</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <form action="" method="POST">

                        <div class="row">

                            <!-- Teacher Basic Details Start-->
                            <div class="col-12">
                                <div class="form-group local-forms" style="border: 1px solid #f2f2f2;margin-bottom:0px;">
                                    <label style=" font-size: 18px;">Division &amp; Remarks Form<span class="login-danger">*</span></label>
                                    <div class="row" style="margin-top: 40px; padding: 0 10px;">

                                        <div class="col-lg-3 col-6">
                                            <div class="form-group local-forms">
                                                <label>Starting Marks <span class="login-danger">*</span></label>
                                                <input class="form-control" id="schoolName" name="startMark" type="text" placeholder="Enter Start Marks">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="form-group local-forms">
                                                <label>End marks <span class="login-danger">*</span></label>
                                                <input class="form-control" id="schoolAddress" name="endMarks" type="text" placeholder="Enter End Marks">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="form-group local-forms">
                                                <label>Division <span class="login-danger">*</span></label>
                                                <input class="form-control" name="division" id="schoolCode" type="text" placeholder="Enter Division">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="form-group local-forms">
                                                <label>Remarks <span class="login-danger">*</span></label>
                                                <input class="form-control" name="remarks" id="udiseCode" type="text" placeholder="Enter Remark" maxlength="25">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="student-submit" style="display: flex;justify-content: end;">
                                                <button type="submit" class="btn btn-primary" name="previewData" style="font-size: 1.2rem;min-width: 180px;margin-bottom:10px;">Submit</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>S. No.</th>
                                    <th>Start Mark</th>
                                    <th>End Mark</th>
                                    <th>Division</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>20</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>
                                        <div class="actions">
                                            <a href="division-delete.php?id=39" class="btn btn-sm bg-danger me-2"> <i class="feather-trash"></i> </a>
                                        </div>
                                    </td>

                                </tr>


                                <tr>
                                    <td>2</td>
                                    <td>100</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>10gvhnfgnf</td>
                                    <td>
                                        <div class="actions">
                                            <a href="division-delete.php?id=40" class="btn btn-sm bg-danger me-2"> <i class="feather-trash"></i> </a>
                                        </div>
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


@endsection