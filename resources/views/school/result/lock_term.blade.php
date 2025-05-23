@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Lock Term Wise Result</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <a href="{{ route('student.result.lock') }}"
                                class="text-decoration-none text-dark me-2 backButton p_8_10">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <h6 class="mb-0">Session: 2025-26</h6>
                        </div>
                    </div>
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
                                    <th>Term</th>
                                    <th>App Lock</th>
                                    <th>Full Lock</th>
                                    <th>Admin Lock</th>
                                    <th>Classes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Term I</td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="10" data-id="10"
                                        checked>
                                        <label class="label-switch" for="10"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="11" data-id="11"
                                        checked>
                                        <label class="label-switch" for="11"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="12" data-id="12"
                                        checked>
                                        <label class="label-switch" for="12"></label>
                                    </td>
                                    <td>
                                        <div class="">
                                            <a class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal"
                                                data-bs-target="#subject-model"><i class="feather-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Term II</td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="20" data-id="20"
                                        checked>
                                        <label class="label-switch" for="20"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="21" data-id="21"
                                        checked>
                                        <label class="label-switch" for="21"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="pstatus" id="22" data-id="22"
                                        checked>
                                        <label class="label-switch" for="22"></label>
                                    </td>
                                    <td>
                                        <div class="">
                                            <a class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal"
                                                data-bs-target="#subject-model"><i class="feather-eye"></i></a>
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

<div id="subject-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true" style="display: none;">
<div class="modal-dialog" id="printContent">
    <div class="modal-content">
        <form action="" method="post">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Class List</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <style>
                @media (min-width: 767px) {
                    .modal-dialog {
                        max-width: 600px;
                        margin: 1.75rem auto;
                    }
                }

                .modal-body ol {
                    padding-left: 1rem;
                    margin: 0;
                }

                .modal-body ol li {
                    padding: 10px;
                    /* border-bottom: 1px solid #ddd; */
                    font-size: 1rem;
                }

                .modal-body {
                    padding: 1rem .5rem;
                }
            </style>

            <div class="modal-body">
                <ol>
                    <li>I</li>
                    <li>II</li>
                    <li>III</li>
                    <li>IV</li>
                    <li>V</li>
                </ol>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="submit" class="btn btn-sm btn-primary">Submit</button> --}}
            </div>
        </form>
    </div>
</div>
</div>

@endsection