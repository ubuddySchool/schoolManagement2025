@extends('layouts.app')

@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Students list</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="student-group-form">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Category</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <select class="form-select">
                        <option>Select Gender</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="form-group">
                <select class="form-select select" id="classSelect" multiple>
                    <option disabled>Select Classes</option>
                    <option value="class1">Class 1</option>
                    <option value="class2">Class 2</option>
                    <option value="class3">Class 3</option>
                    <option value="class4">Class 4</option>
                </select>
            </div>
        </div>


            <div class="col-lg-2">
                <div class="search-student-btn">
                    <select class="form-select">
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Students</h3>
                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp">
                                 <a class="btn btn-primary"> Total Student : 3</a>
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp">
                               <button type="button" class="btn btn-primary reminder-btn" data-bs-toggle="modal" data-bs-target="#export-alert-modal">Export</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Gender</th>
                                    <th>Contact Number</th>
                                    <th>Profile Status</th>  <!-- Added new column -->
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $students = [
                                        ['name' => 'Aaliyah', 'class' => '10 A', 'section' => 'A', 'gender' => 'Male', 'contact' => '097 3584 5870', 'profile_completed' => 90],
                                        ['name' => 'Malynne', 'class' => '8 A', 'section' => 'A', 'gender' => 'Male', 'contact' => '242 362 3100', 'profile_completed' => 70],
                                        ['name' => 'Nathan Humphries', 'class' => '10 B', 'section' => 'A', 'gender' => 'Male', 'contact' => '077 3499 9959', 'profile_completed' => 50],
                                    ];
                                @endphp
                                
                                @foreach ($students as $key => $student)
                                    @php
                                        $profileCompletion = $student['profile_completed'];
                                        $statusClass = '';

                                        if ($profileCompletion < 60) {
                                            $statusClass = 'bg-danger text-white';  // Red
                                        } elseif ($profileCompletion >= 60 && $profileCompletion <= 80) {
                                            $statusClass = 'bg-warning text-dark';  // Yellow
                                        } else {
                                            $statusClass = 'bg-success text-white';  // Green
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="student-details.html">{{ $student['name'] }}</a>
                                            </h2>
                                        </td>
                                        <td>{{ $student['class'] }}</td>
                                        <td>{{ $student['section'] }}</td>
                                        <td>{{ $student['gender'] }}</td>
                                        <td>{{ $student['contact'] }}</td>
                                        <td class="text-center">
                                            <span class="badge {{ $statusClass }}">{{ $profileCompletion }}%</span>  <!-- Display the profile completion with color -->
                                        </td>
                                        <td class="text-end">
                                            <div class="actions ">
                                                <a href="{{ route('school_student.show') }}" class="btn btn-sm bg-success-light me-2">
                                                    <i class="feather-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
