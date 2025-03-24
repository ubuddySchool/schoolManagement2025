@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Edit Time Table</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- School Module Configuration Details Start -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body" id="panel">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <h6>Standard</h6>
                                    <input class="form-control" value="Nursery" name="classID" readonly>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <h6>Term</h6>
                                    <input class="form-control" value="First Term" name="classID" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- School Module Configuration Details End -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="table-responsive">
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input class="form-control" type="date" value="2024-09-11" name="timeTableDate">
                                            <input type="hidden" value="" name="updateID">
                                        </td>
                                        <td>
                                            <select multiple class="form-control chosen-select" name="timeTableSubject">
                                                <option value="">Hindi</option>
                                            </select>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input class="form-control" type="date" value="2024-09-16" name="timeTableDate">
                                            <input type="hidden" value="" name="updateID">
                                        </td>
                                        <td>
                                            <select multiple class="form-control chosen-select" name="timeTableSubject">
                                                <option selected value="">Mathematics</option>
                                            </select>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input class="form-control" type="date" value="2024-09-18" name="timeTableDate">
                                            <input type="hidden" value="" name="updateID">
                                        </td>
                                        <td>
                                            <select multiple class="form-control chosen-select" name="timeTableSubject">
                                                <option value="20">Drawing </option>
                                            </select>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <input class="form-control" type="date" value="2024-09-13" name="timeTableDate1845">
                                            <input type="hidden" value="" name="updateID1845">
                                        </td>
                                        <td>
                                            <select multiple class="form-control chosen-select" name="timeTableSubject1845[]">
                                                <option selected value="20">Drawing </option>
                                            </select>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <div class="col-sm-12" style="margin-top:2rem;">
                            <button type="submit" name="updateTimeTable" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection