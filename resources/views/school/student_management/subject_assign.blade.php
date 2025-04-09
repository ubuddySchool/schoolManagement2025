@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Assign Subject</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter and Actions -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-2 text-center download-grp">
                            <label class="m-0">2025-26</label>
                        </div>
                        <div class="col-12 col-sm-2">
                        <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="20">
                                <option value="">Select Class</option>
                                <option value="86" data-classcat="A">Nursery</option>
                                <option value="88" data-classcat="A">UKG</option>
                                <option value="89" data-classcat="A">1</option>
                                <option value="90" data-classcat="A">2</option>
                                <option value="91" data-classcat="A">3</option>
                                <option value="92" data-classcat="A">4</option>
                                <option value="93" data-classcat="A">5</option>
                                <option value="94" data-classcat="A">6</option>
                                <option value="95" data-classcat="A">7</option>
                                <option value="96" data-classcat="A">8</option>
                                <option value="97" data-classcat="A">9</option>
                                <option value="98" data-classcat="A">10</option>
                                <option value="99" data-classcat="B">11</option>
                                <option value="100" data-classcat="B">12</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-2">
                            <select class="currclass dropdown-select" name="section">
                                <option value="A">Select Section</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table with Subject Assignment -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Student Name</th>
                                    <th>Additional Subject</th>
                                    <th>Optional Subject</th>
                                    <th>None Subject</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example for student 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>
                                        <input type="checkbox" name="additional_subs[1][]" value="biology" class="additional-subject" id="additional_1">
                                        Biology
                                    </td>
                                    <td>
                                        <input type="radio" name="optional_subs[1]" value="chemistry" class="optional-subject" id="optional_1">
                                        Hindi
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input none-option" type="radio" name="optional_subject[1]" value="none" id="none_1">
                                            <label class="form-check-label" for="none_1">
                                                None
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success save-btn me-2" data-bs-toggle="modal" data-bs-target="#confirm-modal">Save & Lock</button>
                                    </td>
                                </tr>

                                <!-- Example for student 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>
                                        <input type="checkbox" name="additional_subs[2][]" value="chemistry" class="additional-subject" id="additional_2">
                                        History
                                    </td>
                                    <td>
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Maths
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input none-option" type="radio" name="optional_subject[2]" value="none" id="none_2">
                                            <label class="form-check-label" for="none_2">
                                                None
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success save-btn me-2" data-bs-toggle="modal" data-bs-target="#confirm-modal">Save & Lock</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content w-75 mx-auto bg-primary">
            <div class="modal-body p-4 text-center">
                <h4>Are you sure you want to assign these subjects?</h4>
                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="confirmAssignBtn">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// JavaScript to handle the 'None' button click and disable the options
document.querySelectorAll('.none-option').forEach(function (noneOption) {
    noneOption.addEventListener('change', function () {
        // Get the index from the id of the clicked "None" radio
        const studentId = this.id.split('_')[1];
        
        // Disable the corresponding additional subject checkbox and optional subject radio
        const additionalSubjectCheckbox = document.querySelector(`#additional_${studentId}`);
        const optionalSubjectRadio = document.querySelector(`#optional_${studentId}`);
        
        if (this.checked) {
            additionalSubjectCheckbox.disabled = true;
            optionalSubjectRadio.disabled = true;
        } else {
            additionalSubjectCheckbox.disabled = false;
            optionalSubjectRadio.disabled = false;
        }
    });
});
</script>

@endsection
