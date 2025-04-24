@extends('admin.layouts.app')

@section('content')

<div class="container-fluid content">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="javascript:history.back()" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Enquiry Configuration</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2">
                            <select name="class" class="currclass dropdown-select">
                                <option value="" disabled selected>Select Class</option>
                                <option value="Pre-Primary">Pre-Primary</option>
                                <option value="Primary">Primary</option>
                                <option value="Nursery">Nursery</option>
                                <option value="K.G. I">K.G. I</option>
                                <option value="K.G. II">K.G. II</option>
                                <option value="L.K.G.">L.K.G.</option>
                                <option value="U.K.G.">U.K.G.</option>
                            </select>
                        </div>
                    </div>

                    <!-- Registration Fees Section -->
                    <div class="row mb-2 align-items-start">
                        <div class="col-md-2 col-sm-3">
                            <label class="form-check-label mb-0 fw-bold">Registration Fees</label>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <label class="form-check-label mb-0" for="fees-off">OFF</label>
                                <input type="checkbox" class="pstatus" id="10" data-id="10">
                                <label class="label-switch" for="10"></label>
                                <label class="form-check-label mb-0" for="fees-on">ON</label>
                            </div>
                        </div>
                        <!-- Input for Registration Fee Amount (Hidden by Default) -->
                        <div class="col-md-3 col-sm-4" id="registration-fee-input" style="display: none;">
                            <input type="number" class="form-control" placeholder="Enter Registration Fee Amount">
                        </div>
                    </div>

                    <hr>

                    <!-- Registration Form Section -->
                    <div class="row mb-2 align-items-start">
                        <div class="col-md-2 col-sm-3">
                            <label class="form-check-label mb-0 fw-bold">Registration Form</label>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <label class="form-check-label mb-0" for="form-off">OFF</label>
                                <input type="checkbox" class="pstatus" id="11" data-id="11">
                                <label class="label-switch" for="11"></label>
                                <label class="form-check-label mb-0" for="form-on">ON</label>
                            </div>
                        </div>
                         <!-- Button for Registration Form (Initially Hidden) -->
                    <div class="col-md-3 col-sm-4"  id="registration-form-button" style="display: none;">
                        <a class="btn btn-primary" href="{{ route('module-configuration.registration.form') }}">Registration Form</a>
                    </div>
                    </div>

                   
                    <hr>

                    <!-- Admission Fee Section -->
                    <div class="row mb-2 align-items-start">
                        <div class="col-md-2 col-sm-3">
                            <label class="form-check-label mb-0 fw-bold">Admission Fee</label>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <label class="form-check-label mb-0" for="admission-fee-off">OFF</label>
                                <input type="checkbox" class="pstatus" id="12" data-id="12">
                                <label class="label-switch" for="12"></label>
                                <label class="form-check-label mb-0" for="admission-fee-on">ON</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4" id="admission-fee-input" style="display: none;">
                            <input type="number" class="form-control" placeholder="Enter Admission Fee Amount">
                        </div>
                    </div>


                    <!-- Admission Form Section -->
                    <!-- <div class="row mb-2 align-items-start">
                        <div class="col-md-2 col-sm-3">
                            <label class="form-check-label mb-0 fw-bold">Admission Form</label>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <label class="form-check-label mb-0" for="admission-form-off">OFF</label>
                                <input type="checkbox" class="pstatus" id="13" data-id="13">
                                <label class="label-switch" for="13"></label>
                                <label class="form-check-label mb-0" for="admission-form-on">ON</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4"  id="admission-form-button" style="display: none;">
                        <a class="btn btn-primary" href="{{ route('module-configuration.admission.form') }}">Admission Form</a>
                    </div>
                    </div> -->

                    
                    <hr>

                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#10').change(function() {
            if ($(this).prop('checked')) {
                $('#registration-fee-input').show();
            } else {
                $('#registration-fee-input').hide();
            }
        });

        $('#12').change(function() {
            if ($(this).prop('checked')) {
                $('#admission-fee-input').show(); 
            } else {
                $('#admission-fee-input').hide(); 
            }
        });

        $('#11').change(function() {
            if ($(this).prop('checked')) {
                $('#registration-form-button').show(); 
            } else {
                $('#registration-form-button').hide(); 
            }
        });

        $('#13').change(function() {
            if ($(this).prop('checked')) {
                $('#admission-form-button').show(); 
            } else {
                $('#admission-form-button').hide(); 
            }
        });
    });
</script>

@endsection
