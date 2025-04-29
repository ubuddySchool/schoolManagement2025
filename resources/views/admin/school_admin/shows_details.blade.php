@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <!-- View School Card -->
    <div class="card">
        <div class="page-header p-1 pb-0">
            <div class="row align-items-center">
                <div class="col">
                    <a href="{{ route('schooladmin.index') }}" class="text-decoration-none text-dark me-2 backButton">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="page-title mb-0">View School</h3>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row g-4">

                @php
                    $fields = [
                        'School Name' => $user->name,
                        'School Code' => $user->school_code,
                        'Dice Code' => $user->dise_code,
                        'Board Name' => $user->board_name,
                        'Medium' => $user->medium,
                        'Number of Students' => $user->total_student,
                        'Contact Number' => $user->contact_number,
                        'School Email ID' => $user->email,
                        'Address' => $user->address,
                        'City' => $user->city,
                        'State' => $user->state,
                        'Pin Code' => $user->pincode,
                        'Locality' => $user->locality,
                        'Website' => $user->website,
                        'Username' => $user->school_username,
                    ];
                @endphp

                @foreach ($fields as $label => $value)
                <div class="col-md-4">
                    <div class="border p-1 rounded bg-light h-auto">
                        <div class="d-flex flex-column">
                            <strong class="text-dark">{{ $label }}</strong>
                            <span class="text-muted mt-1">{{ $value }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-4">
                    <div class="border p-1 rounded bg-light h-auto">
                        <strong class="d-block text-dark mb-2">Uploaded Image</strong>
                        @if(!empty($user->school_image))
                        <img src="{{ asset('uploads/schools/' . $user->school_image) }}" alt="School Image" width="150" class="img-thumbnail">
                        @else
                        <img src="{{ asset('assets/img/default.png') }}" alt="" width="150" class="img-thumbnail">
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
