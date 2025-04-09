@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Assign Section</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Selection, Section & Assign Button -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Students Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>S No.</th>
                                    <th>Student Name</th>
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td class="d-flex gap-3">
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section A
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section B
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section C
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success save-btn me-2" data-bs-toggle="modal" data-bs-target="#confirm-modal">Save & Lock</button>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Demo</a>
                                        </h2>
                                    </td>
                                    <td class="d-flex gap-3">
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section A
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section B
                                        <input type="radio" name="optional_subs[2]" value="chemistry" class="optional-subject" id="optional_2">
                                        Section C
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
    <div class="modal-dialog modal-md">
        <div class="modal-content w-100 mx-auto bg-primary">
            <div class="modal-body p-4 text-center">
                <h4>Are you sure you want to assign these Section?</h4>
                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="confirmAssignBtn">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OTP Modal -->
<div class="modal fade" id="otp-modal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content w-100 mx-auto bg-warning">
            <div class="modal-body p-4 text-center">
                <h4>Please enter MPIN</h4>
                <div class="mt-3">
                    <div class="d-flex justify-content-center w-50 mx-auto">
                        <!-- 4 separate input blocks -->
                        <input type="text" id="otpInput1" class="form-control mx-2 text-center w-25" maxlength="1" />
                        <input type="text" id="otpInput2" class="form-control mx-2 text-center w-25" maxlength="1" />
                        <input type="text" id="otpInput3" class="form-control mx-2 text-center w-25" maxlength="1" />
                        <input type="text" id="otpInput4" class="form-control mx-2 text-center w-25" maxlength="1" />
                    </div>
                </div>
                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="submitOtpBtn">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById("confirmAssignBtn").addEventListener("click", function() {
   
    $('#confirm-modal').modal('hide');
    
    $('#otp-modal').modal('show');
});

document.getElementById("submitOtpBtn").addEventListener("click", function() {
    var otp = document.getElementById("otpInput").value;
    
    if (otp.length === 4) {
        alert("OTP submitted: " + otp);
        $('#otp-modal').modal('hide');
    } else {
        alert("Please enter a valid 4-digit OTP.");
    }
});

</script>

@endsection