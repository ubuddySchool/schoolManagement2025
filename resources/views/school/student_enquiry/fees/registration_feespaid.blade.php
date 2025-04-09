@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Registration Fees Paid</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div id="feesPaidForm">
                        <!-- Student Name -->
                        <div class="form-group row m-0">
                            <label for="studentName" class="col-sm-3 col-form-label">Student Name</label>
                            <div class="col-sm-9">
                                <p id="studentName">Ram Singh</p>
                            </div>
                        </div>

                        <!-- Registration ID -->
                        <div class="form-group row m-0">
                            <label for="registrationID" class="col-sm-3 col-form-label">Registration ID</label>
                            <div class="col-sm-9">
                                <p id="registrationID">REG12345</p>
                            </div>
                        </div>

                        <!-- Amount Paid -->
                        <div class="form-group row m-0">
                            <label for="amountPaid" class="col-sm-3 col-form-label">Amount Paid</label>
                            <div class="col-sm-9">
                                <p id="amountPaid">₹150</p> <!-- Replaced $ with ₹ -->
                            </div>
                        </div>

                        <!-- Payment Date -->
                        <div class="form-group row m-0">
                            <label for="paymentDate" class="col-sm-3 col-form-label">Payment Date</label>
                            <div class="col-sm-9">
                                <p id="paymentDate">04-06-2025</p>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="form-group row m-0">
                            <label for="paymentMethod" class="col-sm-3 col-form-label">Payment Method</label>
                            <div class="col-sm-9">
                                <p id="paymentMethod">Cash</p>
                            </div>
                        </div>

                        <!-- Session -->
                        <div class="form-group row m-0">
                            <label for="session" class="col-sm-3 col-form-label">Session</label>
                            <div class="col-sm-9">
                                <p id="session">2024-2025</p>
                            </div>
                        </div>

                        <!-- Father's Name -->
                        <div class="form-group row m-0">
                            <label for="fathersName" class="col-sm-3 col-form-label">Father's Name</label>
                            <div class="col-sm-9">
                                <p id="fathersName">Mr. Singh</p>
                            </div>
                        </div>

                        <!-- School -->
                        <div class="form-group row m-0">
                            <label for="school" class="col-sm-3 col-form-label">School</label>
                            <div class="col-sm-9">
                                <p id="school">XYZ High School</p>
                            </div>
                        </div>

                        <!-- Mode of Payment -->
                        <div class="form-group row m-0">
                            <label for="modeOfPayment" class="col-sm-3 col-form-label">Mode of Payment</label>
                            <div class="col-sm-9">
                                <p id="modeOfPayment">Cash</p>
                            </div>
                        </div>
                    </div>

                    <!-- Print Button -->
                    <button class="btn btn-primary mt-3" onclick="(function() {
                        var printContents = document.getElementById('feesPaidForm').innerHTML;
                        var originalContents = document.body.innerHTML;
                        document.body.innerHTML = printContents;
                        window.print();
                        document.body.innerHTML = originalContents;
                    })()">Print</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
