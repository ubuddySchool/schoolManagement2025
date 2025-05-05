@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header mb-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <form action="{{ route('basic-configuration.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="school" value="{{ $school->id }}">
                                    <input type="hidden" name="session" value="{{ $academicYear->id }}">
                                    <button type="submit" class="text-decoration-none text-dark me-2 backButton">
                                        <i class="fas fa-arrow-left"></i>
                                    </button>
                                </form>
                                <h3 class="page-title">Assign Class</h3>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('basic-configuration.classInsert') }}" method="POST">
                        @csrf
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                    
                        @foreach ($classes as $label)
                            @php
                                $isChecked = array_key_exists($label->id, $assignedClasses);
                                $reClassName = $isChecked ? $assignedClasses[$label->id] : old('reClassName' . $label->id);
                            @endphp
                    
                            <div class="row mb-1 h-45">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-check d-flex align-items-center gap-2">
                                        <input 
                                            class="form-check-input m-0" 
                                            type="checkbox" 
                                            id="checkbox{{ $label->id }}" 
                                            name="selectedClasses[]" 
                                            value="{{ $label->id }}"
                                            {{ $isChecked ? 'checked' : '' }}
                                            onchange="document.getElementById('input{{ $label->id }}').style.display = this.checked ? 'block' : 'none';"
                                        >
                                        <label class="form-check-label mb-0" for="checkbox{{ $label->id }}">
                                            {{ $label->class_name }}
                                        </label>
                                    </div>
                                </div>
                    
                                <div class="col-md-3 col-sm-3 reclass-input" id="input{{ $label->id }}" 
                                    style="display: {{ $isChecked ? 'block' : 'none' }};">
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="reClassName{{ $label->id }}" 
                                        placeholder="Enter New Name of Class" 
                                        value="{{ $reClassName }}"
                                    >
                                </div>
                            </div>
                        @endforeach
                    
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="status" value="0">Save</button>
                                <button type="submit" class="ms-3 text-light btn btn-info" name="status" value="1">Save & Lock</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
