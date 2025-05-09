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
                                <a href="{{ route('basic-configuration.getSubject', ['id' => $ids]) }}"
                                    class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject to Classes</h3>
                            </div>                            
                        </div>
                    </div>                                       

                    <div class="row my-4">
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0 text-center">Class Name</h6>
                        </div>
                        <div class="col-md-10">
                            <h6 class="form-check-label mb-0 text-center">Subjects</h6>
                        </div>
                    </div>

                    <form action="{{ route('basic-configuration.assignSubjectClass') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ids }}">
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                    
                        @foreach ($classes as $classId => $className)
                            <input type="hidden" name="class_id[]" value="{{ $classId }}">
                    
                            <div class="row mb-2 align-items-start">
                                <div class="col-md-2 col-sm-3">
                                    <label class="form-check-label mb-0 fw-bold">{{ $className }}</label>
                                </div>
                    
                                <div class="col-md-10">
                                    <div class="row my-1">
                                        @foreach ($subjects as $subject)
                                            @php
                                                $checkedSubjects = $classSubjectMap[$classId] ?? [];
                                            @endphp
                                            <div class="col-md-2 col-sm-3 mb-2">
                                                <div class="form-check d-flex align-items-center gap-2">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        id="checkbox_{{ $classId }}_{{ $subject->id }}"
                                                        name="subjects[{{ $classId }}][]"
                                                        value="{{ $subject->id }}"
                                                        {{ in_array($subject->id, $checkedSubjects) ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0" for="checkbox_{{ $classId }}_{{ $subject->id }}">
                                                        {{ $subject->subject_name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                                            
                        <div class="col-12 d-flex justify-content-end mt-4 gap-2">
                            <button type="submit" class="btn btn-primary btn-sm" name="status" value="0">Save</button>
                            <button type="submit" class="btn btn-danger btn-sm" name="status" value="1">Save & Lock</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

