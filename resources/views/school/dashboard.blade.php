@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <!-- <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-xl-12 col-sm-12 col-12 d-flex justify-content-end">
            <div class="card card-table">
                <div class="card-body">
                    <div class="page-header" style="margin-bottom: 0;">
                        <h6>Current Session: 2025-26</h6>
                        <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal"
                            data-bs-target="#con-close-modal"><span> Change</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="fa-solid fa-gift text-primary me-2"></i>Today's Birthdays</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-primary d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Krish Mehta</div>
                                <small class="text-muted">I B</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-primary d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Mahi Jain</div>
                                <small class="text-muted">XI PCM</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-primary d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Muskan Jain</div>
                                <small class="text-muted">Staff</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="fa-solid fa-gift text-success me-2"></i>Tomorrow’s Birthdays</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-success d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Krish Mehta</div>
                                <small class="text-muted">I B</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-success d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Mahi Jain</div>
                                <small class="text-muted">XI PCM</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <div class=" bg-light text-success d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Muskan Jain</div>
                                <small class="text-muted">Staff</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>



</div>


<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog" id="printContent">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Set Session</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <style>
                    @media (min-width: 767px) {
                        .modal-dialog {
                            max-width: 600px;
                            margin: 1.75rem auto;
                        }
                    }

                    .form-group {
                        padding: 1rem;
                    }

                    label {
                        font-weight: 500;
                        margin-bottom: 0.5rem;
                        display: block;
                    }

                    select.form-select {
                        width: 100%;
                        padding: 0.5rem;
                        border-radius: 0.25rem;
                        border: 1px solid #ccc;
                    }
                </style>

                <div class="form-group">
                    <label for="setSession">Choose Session</label>
                    <select name="setSession" id="setSession" class="form-select">
                        <option value="">-- Select Session --</option>
                        <option value="2024-25">2024-25</option>
                        <option value="2023-24">2023-24</option>
                        <option value="2022-23">2022-23</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection