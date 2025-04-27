<!-- resources/views/admin/school_admin/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">


    <!-- Add School Form -->
    <div class="card">

        <div class="page-header p-3 pb-0">
            <div class="row align-items-center">
                <div class="col ">
                    <a href="{{ route('schooladmin.index') }}" class="text-decoration-none text-dark me-2 backButton">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="page-title mb-0">Edit School</h3>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('school-admin.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label for="name" class="form-label">School Name <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Code" value="{{ old('school_code', $user->dise_code) }}" name="school_code" required>
                            @error('school_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Dice Code <span class="login-danger">*</span></label>
                            <input type="text" class="form-control only_number" placeholder="Enter Dice Code" value="{{ old('dise_code', $user->dise_code) }}" name="dise_code" required>
                            @error('dise_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Board Name <span class="login-danger">*</span></label>
                            <select class="form-select" name="board_name" required>
                                <option disabled>Select Board</option>
                                <option value="CBSE" {{ old('board_name', $user->board_name) == 'CBSE' ? 'selected' : '' }}>CBSE</option>
                                <option value="ICSE" {{ old('board_name', $user->board_name) == 'ICSE' ? 'selected' : '' }}>ICSE</option>
                                <option value="State" {{ old('board_name', $user->board_name) == 'State' ? 'selected' : '' }}>State</option>
                            </select>
                         </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Medium <span class="login-danger">*</span></label>
                            <select class="form-select" name="medium" required>
                                <option disabled>Please Select Medium</option>
                                <option value="English" {{ old('medium', $user->medium) == 'English' ? 'selected' : '' }}>English</option>
                                <option value="Hindi" {{ old('medium', $user->medium) == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Number of Students<span class="login-danger">*</span></label>
                            <input type="number" class="form-control only_number" value="{{ old('total_student',$user->total_student) }}" placeholder="Enter Number of students" name="total_student" required>
                            @error('total_student')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Contact Number<span class="login-danger">*</span></label>
                            <input type="tel" class="form-control only_number" value="{{ old('contact_number',$user->contact_number) }}" placeholder="Enter Contact Number"  name="contact_number" required pattern="[0-9]{10,15" maxlength="10">
                            @error('contact_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">School Email ID <span class="login-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" id="email" value="{{ old('email',$user->email) }}" required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Address<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('address',$user->address) }}" placeholder="Enter School Address" name="address" required>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">City<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('city',$user->city) }}" placeholder="Enter City" name="city" required>
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">State<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('state',$user->state) }}" placeholder="Enter State" name="state" required>
                            @error('state')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Pin Code<span class="login-danger">*</span></label>
                            <input type="text" class="form-control only_number" value="{{ old('pincode',$user->pincode) }}" placeholder="Enter Pin Code" name="pincode" required>
                            @error('pincode')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Locality<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('locality',$user->locality) }}" placeholder="Enter Locality" name="locality" required>
                            @error('locality')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Website<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('website',$user->website) }}" placeholder="Enter Website Link" name="website" required>
                            @error('website')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Username<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ old('school_username',$user->school_username) }}" name="school_username" required>

                            @error('school_username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password',$user->password) }}" id="password" required>

                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> -->

                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="school_image" >
                            <img src="{{ asset('uploads/schools/' . $user->school_image ) }}" alt="School Image" width="150">

                        </div>
                    </div>
                </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Admin</button>
        </form>
    </div>
</div>
@endsection