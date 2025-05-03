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
                                <a href="{{ route('basic-configuration.getSubject') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject To School</h3>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        @csrf

                        <div class="row my-3">
                            @foreach ($subjects as $index => $label)
                                <div class="col-md-2 col-sm-3 mb-2">
                                    <div class="form-check d-flex align-items-center gap-2">
                                        <input 
                                            class="form-check-input m-0" 
                                            type="checkbox" 
                                            id="checkbox{{ $index }}" 
                                            name="selectedSubjects[]" 
                                            value="{{ $label->id ?? $index }}"
                                            {{ in_array($label->id ?? $index, old('selectedSubjects', [])) ? 'checked' : '' }}
                                        >
                                        <label class="form-check-label mb-0" for="checkbox{{ $index }}">
                                            {{ $label->subject_name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary" name="submitSubjects">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
