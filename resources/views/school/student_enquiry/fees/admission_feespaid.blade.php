@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Admission Fees Paid</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card comman-shadow">
    <div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            
            <!-- Wrap the content you want to print inside a div with ID 'feesPaidForm' -->
            <div id="feesPaidForm">

                <!-- Static Form for Admission Fees Paid -->
                <div class="form-group row">
                    <label for="studentName" class="col-sm-3 col-form-label">Student Name</label>
                    <div class="col-sm-9">
                        <p id="studentName">Ram Singh</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="registrationID" class="col-sm-3 col-form-label">Registration ID</label>
                    <div class="col-sm-9">
                        <p id="registrationID">REG12345</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amountPaid" class="col-sm-3 col-form-label">Amount Paid</label>
                    <div class="col-sm-9">
                        <p id="amountPaid">₹150</p> <!-- Replaced $ with ₹ -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="paymentDate" class="col-sm-3 col-form-label">Payment Date</label>
                    <div class="col-sm-9">
                        <p id="paymentDate">04-06-2025</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="paymentMethod" class="col-sm-3 col-form-label">Payment Method</label>
                    <div class="col-sm-9">
                        <p id="paymentMethod">Credit Card</p>
                    </div>
                </div>

            </div>

            <button class="btn btn-primary" onclick="(function() {
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

