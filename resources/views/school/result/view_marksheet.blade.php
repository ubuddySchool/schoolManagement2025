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
                        <!-- <h4 class="card-title mb-0">Subject - English</h4> -->
                        <h6 class=" card-title m-0 w-100">2025 | Term I | Class VI | Section A</h6>
                    </div>
                    <div class="card-body p-4">
                        <table class="table table-bordered">
                            <tbody>

                                <tr>
                                    <th>Serial No.</th>
                                    <th>Roll No.</th>
                                    <th>Student Name</th>
                                    <th>Ext Marks (out of 80)</th>
                                    <th>In Marks (out of 20)</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12345</td>
                                    <td>Akash Singh</td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td><input type="number" class="form-control marks" placeholder="Enter Marks"></td>
                                    <td>
                                        <input type="checkbox" class="btn btn-warning absent-btn" name="" id="absent-checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>23456</td>
                                    <td>Sunil Singh</td>
                                    <td>
                                        <label><input type="radio" name="grade" value="A1"> A1</label>
                                        <label><input type="radio" name="grade" value="A2"> A2</label>
                                        <label><input type="radio" name="grade" value="B1"> B1</label>
                                        <label><input type="radio" name="grade" value="B2"> B2</label>
                                        <label><input type="radio" name="grade" value="C1"> C1</label>
                                        <label><input type="radio" name="grade" value="C2"> C2</label>
                                        <label><input type="radio" name="grade" value="D"> D</label>
                                        <label><input type="radio" name="grade" value="E"> E</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="grade" value="A1"> A1</label>
                                        <label><input type="radio" name="grade" value="A2"> A2</label>
                                        <label><input type="radio" name="grade" value="B1"> B1</label>
                                        <label><input type="radio" name="grade" value="B2"> B2</label>
                                        <label><input type="radio" name="grade" value="C1"> C1</label>
                                        <label><input type="radio" name="grade" value="C2"> C2</label>
                                        <label><input type="radio" name="grade" value="D"> D</label>
                                        <label><input type="radio" name="grade" value="E"> E</label>
                                    </td>

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