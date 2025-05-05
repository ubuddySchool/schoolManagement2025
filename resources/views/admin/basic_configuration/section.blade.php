@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('basic-configuration.store',['id' => $id]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Section</h3>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="row my-4">
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0">Class Name</h6>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0">Section</h6>
                        </div>
                    </div>

                    <form action="{{ route('basic-configuration.sectionInsert') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                        
                        @foreach ($classes as $classId => $className)
                        <input type="hidden" name="class_id[]" value="{{ $classId }}">
                            <div class="row mb-2 align-items-start section-group" data-class-id="{{ $classId }}">
                                <div class="col-md-2 col-sm-3">
                                    <label class="form-check-label mb-0">
                                        {{ $className }}
                                    </label>
                                </div>
                                
                                <div class="col-1 section-input">
                                    <input class="form-control form-control-sm mb-1" 
                                           type="text" 
                                           placeholder="Enter" 
                                           name="sections[{{ $classId }}][]" 
                                           value="{{ old('sections.' . $classId . '.0', 'A') }}">
                                </div>
                    
                                <div class="col-1">
                                    <button type="button" class="btn btn-primary btn-add-input">+</button>
                                </div>
                            </div>
                        @endforeach
                    
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                        </div>
                    </form>
                                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
