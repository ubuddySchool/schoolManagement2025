@extends('layouts.app')

@section('content')

<div class="content container-fluid">
    <h2 class="mb-4">View Time table</h2>
    
    <!-- Timetable Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Class</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
        </thead>
        <tbody>
          
                <tr>
                    <td>1st</td>
                    <td>monday</td>
                    <td>tuesday</td>
                    <td>wednesday</td>
                    <td>thursday</td>
                    <td>friday</td>
                </tr>
           
        </tbody>
    </table>

    <!-- Button group for actions -->
    <div class="d-flex justify-content-between">
        <div>
            <!-- Print, PDF, Excel buttons -->
            <button class="btn btn-danger" id="printBtn">Print</button>
            <button class="btn btn-success" id="pdfBtn">PDF</button>
            <button class="btn btn-info" id="excelBtn">Excel</button>
        </div>
        <!-- Edit button -->
        <button class="btn btn-warning" id="editBtn">Edit</button>
    </div>
</div>




<script>
    // Print functionality
    document.getElementById('printBtn').addEventListener('click', function() {
        window.print();
    });

    // Placeholder functions for PDF and Excel (Implement as needed)
    document.getElementById('pdfBtn').addEventListener('click', function() {
        alert('PDF export functionality needs to be implemented.');
    });

    document.getElementById('excelBtn').addEventListener('click', function() {
        alert('Excel export functionality needs to be implemented.');
    });

    // Edit button functionality (you can create a modal or redirect to an edit page)
    </script>

@endsection