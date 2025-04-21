@extends('layouts.app')

@section('content')
    <div class="content container-fluid">

        {{-- <div class="page-header">
            <div class="row">
                <div class="col-auto">
                    <div class="page-sub-header">
                        <h3 class="page-title">Sub-Admin Authentication</h3>
                    </div>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="#" class="btn btn-primary me-2">Add New</a>
                    <a href="{{ route('student.result.lock') }}" class="btn btn-primary me-2">Add New</a>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body p-4">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Sub-Admin List</h3>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="search" id="myInput" onkeyup="myFunction()"
                                        placeholder="Search By Name" class="form-control" />
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('subAdmin.new') }}" class="btn btn-primary me-2">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="subjectWiseTable"
                                class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Sub Admin Name</th>
                                        <th>Contact Number</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $students = [
                                            [
                                                'name' => 'Aaliyah',
                                                'number' => '1234567890',
                                                'class' => '10 A',
                                                'section' => 'A',
                                                'subject' => 'Maths',
                                            ],
                                            [
                                                'name' => 'Malynne',
                                                'number' => '1234567890',
                                                'class' => '8 A',
                                                'section' => 'A',
                                                'subject' => 'English',
                                            ],
                                            [
                                                'name' => 'Nathan Humphries',
                                                'number' => '1234567890',
                                                'class' => '10 B',
                                                'section' => 'A',
                                                'subject' => 'Science',
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $student['name'] }}</td>
                                            <td>{{ $student['number'] }}</td>
                                            <td class="">
                                                <div>
                                                    <a href="{{ route('subAdmin.activeModuleList') }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    {{-- <a href="" class="btn btn-sm bg-danger">
                                                        <i class="feather-trash"></i>
                                                    </a> --}}
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
