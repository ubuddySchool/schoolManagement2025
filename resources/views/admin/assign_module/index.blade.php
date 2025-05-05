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
                                <a href="{{ route('configuration.index',['sch_id' => $school->id,'sess_id' =>$academicYear->id]) }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>

                                <h3 class="page-title">{{ $school->name }} | {{ $academicYear->session_name }} | Assign Module</h3>
                            </div>
                        </div>
                    </div>
                    <form id="assignModuleForm" action="{{ route('assign-module.store') }}" method="POST" data-school-name="{{ $school->name }}"
                    data-academic-session="{{ $academicYear->session_name }}">
                        @csrf
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                        <div class="row my-3">
                            @foreach($modules as $index => $label)
                            <div class="col-sm-3 mb-2">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0"
                                        type="checkbox"
                                        name="modules[]"
                                        id="checkbox{{ $index }}"
                                        value="{{ $label->id }}"
                                        @if(in_array($label->id, $assignedModuleIds)) checked @endif>


                                    <label class="form-check-label mb-0" for="checkbox{{ $index }}">
                                        {{ $label->name }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-info btn-sm text-light" name="status" value="0">Save</button>
                                <button type="submit" class="ms-3 text-light btn btn-danger btn-sm" name="status" value="1">Save & Lock</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('assignModuleForm');
        const lockButton = form.querySelector('button[name="status"][value="1"]');

        lockButton.addEventListener('click', function (event) {
            event.preventDefault();

            Swal.fire({
                title: 'Confirm Assign Module',
                html: `
                <p>Are you sure you want to save and lock the assigned modules for <strong>{{ $school->name }}</strong> for the <strong>{{ $academicYear->session_name }}</strong> session?
                 </p>
                 <p>This action cannot be undone.</p>
                   
                `,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Save & Lock',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection