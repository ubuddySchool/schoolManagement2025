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
                                    <a href="{{ route('basic-configuration.getSubject', ['id' => $ids]) }}"
                                        class="text-decoration-none text-dark me-2 backButton">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Assign Subject To School</h3>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('basic-configuration.assignSubjectSchool') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $ids }}">
                            <input type="hidden" name="school_id" value="{{ $school->id }}">
                            <input type="hidden" name="session" value="{{ $academicYear->id }}">
                        
                            @php
                                $oldSubjects = old('selectedSubjects');
                                $checkedSubjects = is_array($oldSubjects) ? array_map('intval', $oldSubjects) : ($selectedSubjects ?? []);
                            
                            @endphp
                            <div class="row my-3">
                                @foreach ($subjects as $index => $label)
                                    <div class="col-md-2 col-sm-3 mb-2">
                                        <div class="form-check d-flex align-items-center gap-2">
                                            <input class="form-check-input m-0" type="checkbox"
                                                id="checkbox{{ $index }}" name="selectedSubjects[]"
                                                value="{{ $label->id }}"
                                                {{ in_array((int) $label->id, $checkedSubjects) ? 'checked' : '' }}>
                                            <label class="form-check-label mb-0" for="checkbox{{ $index }}">
                                                {{ $label->subject_name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                        
                                <div class="col-12 d-flex justify-content-end mt-4 gap-2">
                                    <button type="submit" class="btn btn-primary btn-sm" name="status" value="0">Save</button>
                                    <button type="submit" class="btn btn-danger btn-sm" name="status" value="1">Save & Lock</button>
                                </div>
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
