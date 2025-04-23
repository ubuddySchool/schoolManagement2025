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
                                    <tr>
                                        <td>1.</td>
                                        <td>Test</td>
                                        <td>Indore</td>
                                        <td>
                                            <h2 class="table-avatar confirmCSS"></i>Active</h2>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm bg-success-light" href="{{ route('configuration.sessionConfig') }}"><i class="fa-solid fa-gears"></i></a>

                                                {{-- <button type="button" class="btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#configModal">
                                                    <i class="fa-solid fa-gears"></i>
                                                </button>
                                                <div class="modal fade" id="configModal" tabindex="-1" aria-labelledby="configModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form method="POST" action="{{ route('configuration.index') }}" class="modal-content">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="configModalLabel">Select Configuration Session</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <select name="option" id="configOption" class="form-select" required>
                                                                        <option value="">-- Select Session --</option>
                                                                        <option value="2024-25">2024-25</option>
                                                                        <option value="2023-24">2023-24</option>
                                                                        <option value="2022-23">2022-23</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Go to Config</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> --}}


                                                {{-- <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-gears"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Assign Module</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('basic-configuration.store') }}">Basic Configuration</a></li>
                                                    <li><a class="dropdown-item" href="#">Module Configuration</a></li>
                                                </ul> --}}
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-details"><i class="feather-eye"></i> </a>

                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#danger-alert1"><i class="feather-edit"></i> </a>

                                                <a href="{{ route('school-admin.poc') }}" class="btn btn-sm bg-success-light me-2">POC</a>
                                                
                                                {{-- <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal1"><i class="feather-trash-2"></i>
                                                </button> --}}

                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @foreach($user as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($admin->created_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                                    <td>{{ \Carbon\Carbon::parse($admin->updated_at)->format('d-m-Y') }}</td> <!-- Formatting date -->
                                    <td>
                                        <a href="{{ route('school-admin.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('school-admin.destroy', $admin->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach--}}


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