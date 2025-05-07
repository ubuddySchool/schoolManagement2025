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
                                <a href="{{ route('basic-configuration.store', ['id' => $id]) }}"
                                    class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Student Form</h3>
                            </div>
                        </div>
                    </div>

                    <form id="assign_Student_form_details" method="POST" action="{{ route('basic-configuration.assignstudent.store') }}">
                        @csrf
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                        <div class="row my-3">

                            @foreach($categories as $category)
                                <div class="col-12 mb-3">
                                    <h5 class="text-primary fw-bold pb-1">
                                        {{ $category->category }}
                                    </h5>
                                </div>

                                @foreach($category->formFields as $index => $field)
                                    <div class="col-md-3 col-sm-4 mb-2">
                                        <div class="form-check d-flex align-items-center gap-2">
                                            <input class="form-check-input m-0" type="checkbox"
                                                id="checkbox{{ $category->id }}_{{ $index }}"
                                                name="form_fields[]" value="{{ $field->id }}"
                                                {{ in_array($field->id, $selectedFormFieldIds) ? 'checked' : '' }}>

                                            <label class="form-check-label mb-0" for="checkbox{{ $category->id }}_{{ $index }}">
                                                {{ $field->auth_name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                            <div class="col-12 d-flex justify-content-end mt-4 gap-2">
                                <!-- <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button> -->
                                <button type="submit" class="btn btn-primary btn-sm" name="form_submit">Submit</button>

                                <button type="button" class="btn btn-danger btn-sm" id="saveAndLock_student_formButton">Save & Lock</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('saveAndLock_student_formButton').addEventListener('click', function () {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to save and lock this form?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, continue!'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('assign_Student_form_details');

            if (form && typeof form.submit === 'function') {
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'save_and_lock';
                hiddenInput.value = '1';
                form.appendChild(hiddenInput);
                form.submit();
            } else {
                console.error('Form not found or form.submit is not a function');
            }
        }
    });
});

</script>
@endsection
