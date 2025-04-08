@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Admission Fees</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
            <form action="#" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="studentName" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="studentName" value="John Doe" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amountDue" class="form-label">Amount Due</label>
                                <input type="text" class="form-control" id="amountDue" value="150" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amountPaid" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amountPaid" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="paymentMethod" class="form-label">Payment Method</label>
                                <select class="form-select" id="paymentMethod" required>
                                    <option value="paypal">Cash</option>
                                    <option value="bank_transfer">UPI</option>
                                    <option value="bank_transfer">Cheque</option>
                                    <option value="credit_card">Credit/Debit Card</option>
                                    <option value="bank_transfer">RTGS</option>
                                    <option value="bank_transfer">NEFT</option>
                                   
                                   
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-end">Submit Payment</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>

@endsection