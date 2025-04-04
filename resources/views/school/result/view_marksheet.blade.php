@extends('layouts.app')

@section('content')

<div class="content container-fluid">

   

    <!-- Main Form Card -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Subject - English</h4>
                    </div>
                    <div class="card-body p-4">
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
                                    <td>Akash Singh</td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td>
                                        <button type="button" class="btn btn-warning absent-btn">Absent</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
