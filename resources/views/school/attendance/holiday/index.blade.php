@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Holiday Declaration</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- School Module Configuration Details Start -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">

                <div class="card-body" id="panel" style="padding-bottom: 0;">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12" style="margin-bottom:1.5em;">
                                        <h6>Select Date</h6>
                                        <input class="form-control" type="date" name="holidayDate" id="holidayDate">
                                    </div>

                                    <div class="col-md-6 col-sm-12" style="margin-bottom:1.5em;">
                                        <div class="form-group local-forms" style="margin-bottom: 0;">
                                            <h6>Reason for Holiday</h6>
                                            <input class="form-control" type="text" name="holidayReason" placeholder="Enter Reason">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <input type="submit" name="holidaySubmit" class="btn btn-primary" value="Save" style="padding: .4rem 3rem;font-size: 1.3rem;">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>S. No.</th>
                                        <th>Date</th>
                                        <th>Reason</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td>2023-07-21</td>
                                        <td>test holiday</td>
                                        <td class="text-end">
                                            <div class="actions ">

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal15"><i class="feather-trash-2"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td>2023-08-01</td>
                                        <td>Rakshabandhan</td>
                                        <td class="text-end">
                                            <div class="actions ">

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal7"><i class="feather-trash-2"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td>2025-01-16</td>
                                        <td>man se</td>
                                        <td class="text-end">
                                            <div class="actions ">

                                                <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal39"><i class="feather-trash-2"></i></button>
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
</div>

</div>


@endsection