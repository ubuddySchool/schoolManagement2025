@extends('layouts.app')

@section('content')
<style>
    .table>:not(caption)>*>* {
    box-shadow: unset;
    padding: 0.75rem;
    padding: 1px 21px;
    /* min-width: 10px; */
}
.table .student-thread th {
    font-size: 14px;
}
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: black !important;
        border-style: solid;
        border-width: 0;
        background-color: white;
        z-index: 99;
    }
</style>
<div class="content container-fluid" style="padding: 1rem;">

    <div class="row">
        <div class="col-md-9 col-12">
            <p class="m-0 w-100">2025-26 &nbsp <span class="fs-20">|</span> &nbsp Term I &nbsp <span class="fs-20">|</span> &nbsp Class VI &nbsp <span class="fs-20">|</span> &nbsp Section A</p>
        </div>
        <div class="col-1">
            <a href="{{ route('student.result.edit.empty') }}" class="btn btn-primary page-header1 w-100" id="export_button">Edit</a>
        </div>
        <div class="col-1">
            <button class="btn btn-primary  w-100" onclick="printPage()"> Print</button>
        </div>
        <div class="col-1">
            <button class="btn btn-primary page-header1 w-100" id="export_button"><i class="fa-solid fa-file-export"></i></button>
        </div>
    </div>

    <div class="table-responsive">

    <table id="myTable" class="table table-bordered  border-0 star-student  table-center mb-5 mt-3  ">
        <thead class="student-thread">
            <tr>
                <th rowspan="2">S. No.</th>
                <th rowspan="2">Student Name</th>
                <th rowspan="2">Roll Number</th>

                <th style="text-align: center;" colspan="2">
                    Hindi </th>
                <th style="text-align: center;" colspan="2">
                    English </th>
                <th style="text-align: center;" colspan="2">
                    Mathematics </th>
                <th style="text-align: center;" colspan="2">
                    Drawing </th>
                <th rowspan="2">Total</th>
                <th rowspan="2">Percentage</th>
                <th rowspan="2">Extra Subject</th>
            </tr>
            <tr>
                <th style="text-align: center;">
                    20 </th>
                <th style="text-align: center;">
                    5 </th>
                <th style="text-align: center;">
                    20 </th>
                <th style="text-align: center;">
                    5 </th>
                <th style="text-align: center;">
                    20 </th>
                <th style="text-align: center;">
                    5 </th>
                <th style="text-align: center;">
                    20 </th>
                <th style="text-align: center;">
                    5 </th>
                <!--<th>Extra Subject</th>-->

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Aashish Rathore</td>
                <td>
                    788888
                </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ishan Parate</td>
                <td>
                    788889
                </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>megha</td>
                <td>
                    788890
                </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>

</div>
</div>

@endsection