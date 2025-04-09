@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="container ">
        <h4>Admission Fees</h4>
        <div class="card comman-shadow">
            <div class="card-body">
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="studentName" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" id="studentName" value="Ram Singh" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="studentName" class="form-label">Father Name</label>
                                    <input type="text" class="form-control" id="studentName" value="Ramesh Singh" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="studentName" class="form-label">Session</label>
                                    <input type="text" class="form-control" id="studentName" value="2025-26" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="studentName" class="form-label">Class</label>
                                    <input type="text" class="form-control" id="studentName" value="2" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amountPayble" class="form-label">Amount Payable</label>
                                    <i class="fa fa-indian-rupee-sign"></i>
                                    <input type="number" class="form-control" value="200" id="amountPayble" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amountPaid" class="form-label">Amount</label>
                                    <i class="fa fa-indian-rupee-sign"></i>
                                    <input type="number" class="form-control" id="amountPaid" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="paymentMethod" class="form-label">Payment Method</label>
                                    <select class="form-select" id="paymentMethod" required>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="debit_card">Debit Card</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                        <option value="bank_transfer">UPI</option>
                                        <option value="bank_transfer">Cheque</option>
                                        <option value="paypal">Cash</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection