@extends('layouts.app')

@section('content')

<div class="content container-fluid">
    <!-- Button group for actions (moved above the heading) -->
    <h2 class="mb-4 page-title">View Time table</h2>
    <div class="d-flex justify-content-between mb-4">
        <div>
            <!-- Print, PDF, Excel buttons -->
            <button class="btn btn-danger" id="printBtn">Print</button>
            <button class="btn btn-success" id="pdfBtn">PDF</button>
            <button class="btn btn-info text-light" id="excelBtn">Excel</button>
        </div>
        <a class="btn bg-success text-light" href="{{ route('school_student.timetable.add') }}" class="btn btn-sm btn-primary" >Create/Edit</a>
    </div>

    
    
    <!-- Timetable Table -->
    <div class="table-responsive">
        <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped modaltable">
            <thead class="student-thread">
                <tr>
                    <!--<th>#</th>-->
                    <th>Date</th>
                    <th>Day</th>
                    <th>Nursery</th>
                    <th>UKG</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <!--<td>1</td>-->
                    <td>11-09-2024</td>
                    <td>Friday</td>
                    <td>Drawing</td>
                    <td>English</td>
                    <td>Mathematics</td>
                    <td>English<br>Drawing</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <!--<td>2</td>-->
                    <td>13-09-2024</td>
                    <td>Friday</td>
                    <td>Drawing</td>
                    <td>Drawing</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <!--<td>3</td>-->
                    <td>16-09-2024</td>
                    <td>Friday</td>
                    <td>Mathematics</td>
                    <td> - </td>
                    <td>GK</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <!--<td>4</td>-->
                    <td>18-09-2024</td>
                    <td>Friday</td>
                    <td>Drawing</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
            </tbody>
        </table>
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
