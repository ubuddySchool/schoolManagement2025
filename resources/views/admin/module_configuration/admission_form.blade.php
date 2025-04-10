@extends('admin.layouts.app')

@section('content')
<div class="container-fluid content ">
    <div class="card shadow rounded-3 p-3">
        <h4 class="mb-4">Admission Form</h4>
        <form>
            <div class="row">
                @php
                    $fields = [
                        'Student Name', 'Class', 'Session', 'D.O.B.', 'Gender', 'Category',
                        'Caste', 'Address', 'Student Photo', 'SSSMID', 'PAN', 'Aadhar',
                        'APAAR ID', 'Family SSSMID', 'Contact Number',
                        'Father Name, Contact Number', 'Mother Name, Contact Number',
                        'Principle Signature', 'School Dice Code',
                        'Affiliation Code', 'Logo', 'Form Number', 'School Name',
                        'School Contact Number'
                    ];
                @endphp

                @foreach($fields as $field)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fields[]" id="{{ Str::slug($field, '_') }}" value="{{ $field }}">
                            <label class="form-check-label" for="{{ Str::slug($field, '_') }}">
                                {{ $field }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
