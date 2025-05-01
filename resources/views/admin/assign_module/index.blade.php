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
                                <!-- <a href="{{ route('configuration.index',['id' => $school->id]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a> -->
                                <form action="{{ route('assign-module.store', ['school' => $school->id, 'session' => $academicYear]) }}" method="POST">
                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <input type="hidden" name="session" value="{{ $academicYear }}">

                                </form>
                                <!-- <a href="{{ route('configuration.index', ['school' => $school->id, 'session' => $academicYear]) }}"
   class="text-decoration-none text-dark me-2 backButton">
    <i class="fas fa-arrow-left"></i>
</a> -->

                                <h3 class="page-title">{{ $school->name }} | {{ $academicYear }} | Assign Module</h3>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('assign-module.store') }}" method="POST">
                    @csrf
                    <div class="row my-3">
                        @foreach($modules as $index => $label)
                            <div class="col-sm-3 mb-2">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" type="checkbox" name="modules[]" id="checkbox{{ $index }}" value="{{ $label->id }}">
                                    <label class="form-check-label mb-0" for="checkbox{{ $index }}">
                                        {{ $label->name }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <input type="hidden" value="{{ $school->id }}" name="school_id">
                        <input type="hidden" value="{{ $academicYear }}" name="session">
                        
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
