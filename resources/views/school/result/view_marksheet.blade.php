@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <!-- Main Form Card -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Subject - English</h4>
                    </div>
                    <div class="card-body p-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" value="IV" readonly></td>
                                    <td><input type="text" class="form-control" value="A" readonly></td>
                                    <td><input type="text" class="form-control" value="Annual" readonly></td>
                                    <td><input type="text" class="form-control" value="2024-25" readonly></td>
                                </tr>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Ext Marks (out of 80)</th>
                                    <th>In Marks (out of 20)</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Akash Singh</td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td>
                                        <input type="checkbox" class="btn btn-warning absent-btn" name="" id="absent-checkbox">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Get the checkbox and input fields
        var checkbox = $('#absent-checkbox');
        var marksInputs = $('.marks');

        // Initially disable the input fields when the page loads
        checkbox.change(function() {
            if (this.checked) {
                marksInputs.prop('disabled', true);  
            } else {
                // Enable input fields if checkbox is unchecked
                marksInputs.prop('disabled', false); 
            }
        });

        // Trigger the change event on page load in case the checkbox is already checked
        checkbox.trigger('change');
    });
</script>
@endsection
