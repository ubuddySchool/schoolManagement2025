@extends('layouts.app')

@section('content')
<style>
    .table .student-thread th {
    font-size: 12px;
}
.table>:not(caption)>*>* {
    box-shadow: unset;
    padding: 0.75rem;
    padding: 1px 21px;
    /* min-width: 10px; */
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

    <div class="row justify-content-between">
        <div class="col-md-8 col-12">
            <p class="m-0 w-100">2025-26 &nbsp <span class="fs-20">|</span> &nbsp Term I &nbsp <span class="fs-20">|</span> &nbsp Class VI &nbsp <span class="fs-20">|</span> &nbsp Section A</p>
        </div>
        <div class="col-md-3 col-12 text-end">
            <p class="m-0 w-100">Edit Mode</p>
        </div>
    </div>
<div class="table-responsive">
    <table id="myTable" class="table table-bordered  border-0 star-student  table-center mb-5 mt-3  ">
        <thead class="student-thread">
            <tr>
                <th rowspan="2">S. No.</th>
                <th rowspan="2">Student Name</th>
                <th rowspan="2">Roll Number</th>

                <th style="text-align: center;" colspan="2">Hindi </th>
                <th style="text-align: center;" colspan="2">English </th>
                <th style="text-align: center;" colspan="2">Mathematics </th>
                <th style="text-align: center;" colspan="2">Drawing </th>
               
                <th rowspan="2">Total</th>
                <th rowspan="2">Percent</th>
                <!-- <th rowspan="2">Extra Subject</th> -->
            </tr>
            <tr>
                <th style="text-align: center;">20 </th>
                <th style="text-align: center;">5 </th>
                <th style="text-align: center;">20 </th>
                <th style="text-align: center;">5 </th>
                <th style="text-align: center;">20 </th>
                <th style="text-align: center;">5 </th>
                <th style="text-align: center;">20 </th>
                <th style="text-align: center;">5 </th>
               
            </tr>
        </thead>
        <tbody>
    <tr>
        <td>1</td>
        <td>Aashish Rathore</td>
        <td>788888</td>
        <td contenteditable="true" class="text-center p-0 m-0">18</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">16</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">19</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">20</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>96</td>
        <td>96.00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Ishan Parate</td>
        <td>788889</td>
        <td contenteditable="true" class="text-center p-0 m-0">6</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td contenteditable="true" class="text-center p-0 m-0">7</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">1</td>
        <td contenteditable="true" class="text-center p-0 m-0">8</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td>34</td>
        <td>34.00</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Megha</td>
        <td>788890</td>
        <td contenteditable="true" class="text-center p-0 m-0">19</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">18</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td contenteditable="true" class="text-center p-0 m-0">20</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">15</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>91</td>
        <td>91.00</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nitin</td>
        <td>788891</td>
        <td contenteditable="true" class="text-center p-0 m-0">13</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td contenteditable="true" class="text-center p-0 m-0">9</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td contenteditable="true" class="text-center p-0 m-0">14</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">13</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>65</td>
        <td>65.00</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Patel</td>
        <td>788892</td>
        <td contenteditable="true" class="text-center p-0 m-0">17</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">15</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">18</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td contenteditable="true" class="text-center p-0 m-0">16</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>85</td>
        <td>85.00</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Rani</td>
        <td>788893</td>
        <td contenteditable="true" class="text-center p-0 m-0">9</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">7</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td contenteditable="true" class="text-center p-0 m-0">6</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">8</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td>40</td>
        <td>40.00</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Shahrukh Khan</td>
        <td>788894</td>
        <td contenteditable="true" class="text-center p-0 m-0">16</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">14</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td contenteditable="true" class="text-center p-0 m-0">17</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">15</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td>80</td>
        <td>80.00</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Shahrukh Khan1</td>
        <td>788895</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td contenteditable="true" class="text-center p-0 m-0">6</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">8</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">4</td>
        <td contenteditable="true" class="text-center p-0 m-0">10</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>43</td>
        <td>43.00</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Shahrukh Khan2</td>
        <td>788896</td>
        <td contenteditable="true" class="text-center p-0 m-0">11</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">10</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">2</td>
        <td contenteditable="true" class="text-center p-0 m-0">11</td>
        <td contenteditable="true" class="text-center p-0 m-0 bg-red">3</td>
        <td contenteditable="true" class="text-center p-0 m-0">10</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>65</td>
        <td>65.00</td>
       
    </tr>
    <tr>
        <td>10</td>
        <td>Vishal</td>
        <td>788897</td>
        <td contenteditable="true" class="text-center p-0 m-0">20</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">19</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">20</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td contenteditable="true" class="text-center p-0 m-0">19</td>
        <td contenteditable="true" class="text-center p-0 m-0">5</td>
        <td>98</td>
        <td>98.00</td>
       
    </tr>
</tbody>

    </table>
    </div>
</div>
@endsection
