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
                                    <a href="{{ route('basic-configuration.store', ['id' => $ids]) }}"
                                        class="text-decoration-none text-dark me-2 backButton">
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
                            <input type="hidden" name="id" value="{{ $ids }}">
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

                                    @php
                                        $existingSections = old(
                                            'sections.' . $classId,
                                            $assignSections[$classId] ?? ['A'],
                                        );
                                    @endphp

                                    @foreach ($existingSections as $index => $section)
                                        <div class="col-1 section-input">
                                            <input class="form-control form-control-sm mb-1" type="text"
                                                placeholder="Enter" name="sections[{{ $classId }}][]"
                                                value="{{ $section }}">
                                        </div>
                                    @endforeach

                                    <div class="col-1">
                                        <button type="button" class="btn btn-primary btn-add-input">+</button>
                                    </div>
                                </div>
                            @endforeach
                            
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end mt-4 gap-2">
                                    <button type="submit" class="btn btn-primary btn-sm" name="status"
                                        value="0">Save</button>
                                    <button type="submit" class=" btn-danger btn-sm btn" name="status" value="1">Save
                                        & Lock</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
