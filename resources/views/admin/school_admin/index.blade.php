@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">School list</h3>
                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>


                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>School Name</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Configure</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($user as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->city }}</td>

                                        <td>
                                            <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#statusModal{{ $admin->id }}">
                                                <h2 class="{{ $admin->status == 1 ? 'table-avatar confirmCSS text-green-600 bg-green-100 px-3 py-1 rounded-full' : 'table-avatar pendingCSS px-3 py-1 rounded-full' }}">
                                                    {{ $admin->status == 1 ? 'Active' : 'Pending' }}
                                                </h2>
                                            </button>


                                            <!-- Status Change Modal -->
                                            <div class="modal fade" id="statusModal{{ $admin->id }}" tabindex="-1" aria-labelledby="statusModalLabel{{ $admin->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <form method="POST" action="{{ route('school-admin.toggleStatus', $admin->id) }}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="statusModalLabel{{ $admin->id }}">Change Status</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to change the status of <strong>{{ $admin->name }}</strong>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-primary">Yes, Change</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm bg-success-light" href="{{ route('configuration.sessionConfig') }}"><i class="fa-solid fa-gears"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{ route('school-admin.shows', $admin->id) }}" class="btn btn-sm bg-success-light me-2" ><i class="feather-eye"></i> </a>
                                                <a href="{{ route('school-admin.edit', $admin->id) }}" class="btn btn-sm bg-success-light me-2" ><i class="feather-edit"></i> </a>
                                                
                                                <!-- <form action="{{ route('school-admin.destroy', $admin->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this school?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="feather-trash-2"></i></button>
                                                </form> -->

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>

                            <p id="noRecordsMessage" style=" margin-top: 10px; display: none;">No matching records found.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection