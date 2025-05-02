@extends('admin.layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Assign School Admin</h3>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="search" id="assingschoolconfigasassearchInput" onkeyup="myassingingschoolconfigFunction()" placeholder="Search By School Name" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>S.No.</th>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>City</th>
                                    <th>Admin Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $serail = 1
                                @endphp
                                @foreach($users as $index => $school)
                                <tr>
                                    <td>{{ $serail++ }}</td>
                                    <td class="d-flex justify-content-center">
                                        @if(!empty($school->school_image))
                                        <img src="{{ asset('uploads/schools/' . $school->school_image) }}" alt="School Image" width="50" height="100" class="rounded-circle img-thumbnail ">
                                        @else
                                        <img src="{{ asset('assets/img/default.png') }}" class="rounded-circle img-thumbnail" width="50" height="100">
                                        @endif
                                    </td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->city }}</td>
                                    <td>
                                        @foreach($admins as $admin)
                                        @if($admin->id == $school->subadmin_id)
                                        {{ $admin->name }}
                                        @endif
                                        @endforeach
                                    </td>
                                   
                                    <td>
                                        <button
                                            class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#assignAdminconfigadminModal"
                                            data-school-id="{{ $school->id }}"
                                            data-school-name="{{ $school->name }}"
                                            data-current-admin="{{ $admin->name ?? 'No Admin' }}"
                                            data-admin-photo="{{ asset('assets/img/profiles/avatar-05.jpg') }}">
                                            @if(empty($school->subadmin_id))
                                            Configure Admin
                                            @else
                                            Change
                                            @endif

                                        </button>
                                    </td>
                                   
                                </tr>
                                @endforeach
                                <tr id="noRecordsassinglistschoolMessage" style="display: none;">
                                    <td colspan="6" class="text-center text-muted">No matching records found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="assignAdminconfigadminModal" tabindex="-1" aria-labelledby="assignAdminconfigadminModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assignAdminconfigadminModalLabel">Assign Admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('assign.school.assignAdmin') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="school_id" name="school_id">
                                        <input type="hidden" id="admin_id" name="admin_id">


                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Search admin..." id="searchconfigsAdmin" onkeyup="filterconfigsubAdmins()">
                                        </div>

                                        <div id="configsubadminListsfilter" class="row g-2" style="max-height: 260px; overflow-y: auto;">
                                            @foreach($admins as $admin)
                                            <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                                onclick="selectconfigurationAdmina(this, '{{ $admin->id }}', '{{ $admin->name }}',  '{{ asset('uploads/adminprofile/' . $admin->profile_image) }}')">
                                                @if(!empty($admin->profile_image))
                                                <img src="{{ asset('uploads/adminprofile/' . $admin->profile_image) }}" class="rounded-circle me-3" width="50">
                                                @else
                                                <img src="{{ asset('assets/img/default.png') }}" class="rounded-circle img-thumbnail me-3" width="50" height="100">
                                                @endif
                                                <span>{{ $admin->name }}</span>
                                            </div>
                                            @endforeach
                                        </div>

                                        <!-- PLACE THIS BELOW configsubadminListsfilter -->
                                        <div id="noRecordsconfigadminMessage" class="text-center text-muted mt-2" style="display: none;">
                                            No admin found.
                                        </div>



                                        <!-- Form Submit Button -->
                                        <button type="submit" class="btn btn-primary mt-3">Assign Admin</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal end -->
                </div>
            </div>
        </div>
    </div>
</div>



@endsection