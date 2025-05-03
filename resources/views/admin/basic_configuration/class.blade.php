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
                                <a href="{{ route('basic-configuration.store') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Class</h3>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        @foreach ($classes as $index => $label)
                            <div class="row mb-1 h-45">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-check d-flex align-items-center gap-2">
                                        <input 
                                            class="form-check-input m-0" 
                                            type="checkbox" 
                                            id="checkbox{{ $index }}" 
                                            name="selectedClasses[]" 
                                            value="{{ $index }}"
                                            {{ in_array($index, old('selectedClasses', [])) ? 'checked' : '' }}
                                        >
                                        <label class="form-check-label mb-0" for="checkbox{{ $index }}">
                                            {{ $label->class_name }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 reclass-input" id="input{{ $index }}" style="display: {{ in_array($index, old('selectedClasses', [])) ? 'block' : 'none' }};">
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="reClassName{{ $index }}" 
                                        placeholder="Enter New Name of Class" 
                                        value="{{ old('reClassName' . $index) }}"
                                    >
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
