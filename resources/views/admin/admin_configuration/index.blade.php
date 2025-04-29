@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card comman-shadow">
                                <div class="card-body p-1">
                                    <div class="page-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="page-title">Configuration Admin List</h3>
                                            </div>
                                            <div class="col-auto">
                                                <input type="search" name="search" id="myconfigfilterschoolInput" onkeyup="myadmin_configurationFunction()"
                                                    placeholder="Search By Name" class="form-control" />
                                            </div>
                                            <div class="col-auto text-end float-end ms-auto download-grp">
                                                <a href="{{ route('admin-configuration.new') }}" class="btn btn-primary me-2">Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="adminsubconfig_id"
                                            class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                            <thead class="student-thread">
                                                <tr>
                                                    <th>S No.</th>
                                                    <th>Profile Pic</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Contact Number</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($admin as $key => $user)

                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        @if(!empty($user->profile_image))
                                                        <img src="{{ asset('uploads/adminprofile/' . $user->profile_image) }}" width="100" alt="Admin Image">
                                                        @else
                                                        <img src="{{ asset('assets/img/default.png') }}" width="100" alt="Admin Image">
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->contact_number }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#configModal{{ $key }}">
                                                            <i class="feather-eye"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="configModal{{ $key }}" tabindex="-1" aria-labelledby="configModalLabel{{ $key }}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="configModalLabel{{ $key }}">Configure Admin Details</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <p><strong>Admin Name:</strong> {{ $user->name }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Role:</strong> {{ $user->role == 0 ? 'Configuration Admin' : 'Other' }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Gender:</strong> {{ $user->gender }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>DOB:</strong> {{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y') }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Contact Number:</strong> {{ $user->contact_number }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Alternate Contact Number:</strong> {{ $user->alternate_number }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Username:</strong> {{ $user->username }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Remark:</strong> {{ $user->remark }}</p>
                                                                            </div>
                                                                            <div class="col-md-12 d-flex">
                                                                                <p class="me-3"><strong>Profile Image:</strong></p>
                                                                                @if(!empty($user->profile_image))
                                                                                <img src="{{ asset('uploads/adminprofile/' . $user->profile_image) }}" width="100" alt="Admin Image">
                                                                                @else
                                                                                <img src="{{ asset('assets/img/default.png') }}" class="rounded-circle img-thumbnail me-3" width="50" height="100">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr id="noRecordsconfigadminMessage" style="display: none;">
                                                    <td colspan="6" class="text-center text-muted">No matching records found.</td>
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
    </div>
</div>

@endsection