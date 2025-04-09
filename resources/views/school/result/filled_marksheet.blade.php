@extends('layouts.app')

@section('content')
<style>
    
    tbody, td, tfoot, th, thead, tr {
    border-color: black !important;
    border-style: solid;
    border-width: 0;
    background-color: white;
    z-index: 99;
}

</style>
<div class="content container-fluid" style="padding: 1rem;">

    <div class="row align-items-center">
        <div class="col-md-8 col-12">
        <p class="m-0 w-100">2025-26 &nbsp <span class="fs-20">|</span> &nbsp   Term I  &nbsp <span class="fs-20">|</span> &nbsp  Class VI &nbsp  <span class="fs-20">|</span> &nbsp  Section A</p>
        </div>
       
        <div class="col-1">
            <a href="{{ route('student.result.view') }}" class="btn btn-primary page-header1 w-100" id="export_button">Edit</a>
        </div>
        <div class="col-1">
            <button class="btn btn-primary  w-100" onclick="printPage()"> Print</button>
        </div>
        <div class="col-2">
            <button class="btn btn-primary page-header1 w-100" id="export_button">Export to Excel</button>
        </div>
        
        
    </div>


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
                    788888 </td>
                
                <td>
                    8 </td>
                <td>
                    4 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td class="bg-red">12</td>
                <td class="bg-red">12.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Ishan Parate</td>
                <td>
                    788889 </td>
                
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td class="bg-red">0</td>
                <td class="bg-red">0.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>3</td>
                <td>megha</td>
                <td>
                    788890 </td>
                
                <td>
                    8 </td>
                <td>
                    5 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td class="bg-red">13</td>
                <td class="bg-red">13.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>4</td>
                <td>nitin</td>
                <td>
                    788891 </td>
                <td>
                    20 </td>
                <td>
                    5 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>25</td>
                <td>25.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>5</td>
                <td>patel</td>
                <td>
                    788892 </td>
                <td>
                    16 </td>
                <td>
                    5 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>21</td>
                <td>21.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>6</td>
                <td>rani</td>
                <td>
                    788893 </td>
                
                <td>
                    16 </td>
                <td>
                    3 </td>
                <td>
                    11.5 </td>
                <td>
                    4 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>34.5</td>
                <td>34.50</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>7</td>
                <td>rani</td>
                <td>
                    788894 </td>
                
                <td>
                    17 </td>
                <td>
                    5 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>22</td>
                <td>22.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>8</td>
                <td>shahrukh khan</td>
                <td>
                    788895 </td>
                
                <td>
                    11 </td>
                <td>
                    5 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>16</td>
                <td>16.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>9</td>
                <td>shahrukh khan1</td>
                <td>
                    788896 </td>
                
                <td>
                    19 </td>
                <td>
                    4 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td>23</td>
                <td>23.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>10</td>
                <td>shahrukh khan2</td>
                <td>
                    788897 </td>
                
                <td>
                    11 </td>
                <td>
                    3 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td class="bg-red">14</td>
                <td class="bg-red">14.00</td>

                <td>
                </td>

            </tr>
            <tr>
                <td>11</td>
                <td>vishal</td>
                <td>
                    788898 </td>
               
                <td>
                    9 </td>
                <td>
                    3 </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

                <td class="bg-red">12</td>
                <td class="bg-red">12.00</td>

                <td>
                </td>

            </tr>
        </tbody>
    </table>


</div>


@endsection