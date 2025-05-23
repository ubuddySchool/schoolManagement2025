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
                        <h6>Current Session: {{ $currentSessionName  }}</h6>
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

<!-- Modal for changing session -->
<div id="con-close-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('session.change') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Active Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <select name="session_id" class="form-select" required>
                    @foreach ($sessions as $session)
                        <option value="{{ $session->id }}" {{ $currentSession == $session->id ? 'selected' : '' }}>
                            {{ $session->session_name }}
                        </option>
                    @endforeach
                </select>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Change</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection