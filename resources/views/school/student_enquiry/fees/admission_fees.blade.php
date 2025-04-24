@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="container ">
        <h5>Admission Fees</h5>
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
                                    <input type="number" class="form-control" value="200"  id="amountPayble" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amountPaid" class="form-label">Amount</label>
                                    <i class="fa fa-indian-rupee-sign"></i>
                                    <input type="number" class="form-control"  id="amountPaid"  required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="discountAmount" class="form-label">Discount</label>
                                    <i class="fa fa-indian-rupee-sign"></i>
                                    <input type="tel" class="form-control" id="discountAmount" readonly>
                                </div>
                            </div>
                            <!-- Your existing HTML -->
<div class="col-md-4">
    <div class="form-group">
        <label for="paymentMethod" class="form-label">Payment Method</label>
        <select class="form-select" id="paymentMethod" required>
            <option disabled selected>Select Payment Method</option>
            <option value="credit_card">Credit Card/Debit Card</option>
            <option value="bank_transfer">UPI</option>
            <option value="paypal">Cash</option>
        </select>
    </div>
</div>

<!-- Transaction Details (initially hidden) -->
<div class="col-md-4" id="transactionDetailsContainer" style="display: none;">
    <div class="form-group">
        <label for="transactionDetails" class="form-label">Transaction Details</label>
        <input type="text" name="" class="form-control" id="transactionDetails">
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
<script>
    const amountPayableInput = document.getElementById("amountPayble");
    const amountPaidInput = document.getElementById("amountPaid");
    const discountInput = document.getElementById("discountAmount");

    amountPaidInput.addEventListener("input", function () {
        const paidValue = amountPaidInput.value.trim();

        if (paidValue === "") {
            discountInput.value = "";
        } else {
            const payable = parseFloat(amountPayableInput.value) || 0;
            const paid = parseFloat(paidValue) || 0;
            const discount = payable - paid;

            discountInput.value = discount >= 0 ? discount.toFixed(2) : "0.00";
        }
    });

    document.getElementById('paymentMethod').addEventListener('change', function () {
        const selectedValue = this.value;
        const transactionDetailsContainer = document.getElementById('transactionDetailsContainer');

        if (selectedValue === 'credit_card' || selectedValue === 'bank_transfer') {
            transactionDetailsContainer.style.display = 'block';
        } else {
            transactionDetailsContainer.style.display = 'none';
        }
    });
</script>

@endsection