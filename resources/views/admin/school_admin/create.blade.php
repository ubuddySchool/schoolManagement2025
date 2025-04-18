@extends('admin.layouts.app')

@section('content')
<div class="content container-fluid">


    <!-- Add School Form -->
    <div class="card">
        
        <div class="page-header p-3 pb-0">
            <div class="row align-items-center">
                <div class="col">
                    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark me-2 backButton">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="page-title">Add School</h3>
                    <div class="px-4">
                        <h6>Current Session: <strong></strong></h6>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card-header">
            <h4 class="card-title">Add School</h4>
        </div> --}}
        <div class="card-body">
            <form action="{{ route('school-admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Name <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Name" name="name" id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Code" name="school_code" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Dice Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Dice Code" name="dice_code" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Board Name <span class="login-danger">*</span></label>
                            <select class="form-select" name="board_name" required>
                                <option selected disabled>Select Board</option>
                                <option value="CBSE">CBSE</option>
                                <option value="ICSE">ICSE</option>
                                <option value="State">State</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Medium <span class="login-danger">*</span></label>
                            <select class="form-select" name="medium" required>
                                <option selected disabled>Please Select Medium</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Number of Students</label>
                            <input type="number" class="form-control" placeholder="Enter Number of students" name="students">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Email ID <span class="login-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" id="email" value="{{ old('email') }}" >
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Enter School Address" name="address">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City" name="city">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" name="state">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Pin Code</label>
                            <input type="text" class="form-control" placeholder="Enter Pin Code" name="pin">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Locality</label>
                            <input type="text" class="form-control" placeholder="Enter Locality" name="locality">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Website</label>
                            <input type="url" class="form-control" placeholder="Enter Website Link" name="website">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" value="ubuddy" >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <div id="password-strength" class="form-text text-success">Your password is strong</div>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Add School</button>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection