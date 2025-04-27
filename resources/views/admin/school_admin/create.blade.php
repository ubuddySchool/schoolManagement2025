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
                    <h3 class="page-title mb-0">Add School</h3>

                </div>
            </div>
        </div>
       
        <div class="card-body">
            <form action="{{ route('school-admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Name <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Name" name="name" id="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">U-Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter U-Code 4105" name="u_code" required>
                        </div>
                    </div> -->

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Code" name="school_code" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Dice Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control only_number" placeholder="Enter Dice Code" value="{{ old('dise_code') }}" name="dise_code" required>
                            @error('dise_code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
                            <input type="number" class="form-control" value="{{ old('total_student') }}" placeholder="Enter Number of students" name="total_student"  required>
                            @error('total_student')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Contact Number</label>
                            <input type="tel" class="form-control only_number" value="{{ old('contact_number') }}" placeholder="Enter Contact Number" name="contact_number" required pattern="[0-9]{10,15" maxlength="10" >
                            @error('contact_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Email ID <span class="login-danger">*</span></label>
                            <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" value="{{ old('address') }}" placeholder="Enter School Address" name="address" required>
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" value="{{ old('city') }}" placeholder="Enter City" name="city" required>
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" value="{{ old('state') }}" placeholder="Enter State" name="state" required>
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Pin Code</label>
                            <input type="text" class="form-control only_number" value="{{ old('pincode') }}" placeholder="Enter Pin Code" name="pincode" required>
                            @error('pincode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Locality</label>
                            <input type="text" class="form-control" value="{{ old('locality') }}" placeholder="Enter Locality" name="locality" required>
                            @error('locality')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Website</label>
                            <input type="text" class="form-control" value="{{ old('website') }}" placeholder="Enter Website Link" name="website" required>
                            @error('website')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" value="{{ old('school_username') }}" name="school_username" required>
                            
                            @error('school_username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" required>
                          
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="school_image" required>
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