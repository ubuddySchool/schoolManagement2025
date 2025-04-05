@extends('layouts.app')

@section('content')

<div class="content container-fluid" style="padding: 1rem;">

    <div class="row">
        <div class="col-md-8 col-12">
            <h6 class="m-0 w-100">2025-26 |  Term I  |  Class VI  | Section A</h6>
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


    <table id="myTable" class="table table-bordered  border-0 star-student table-hover table-center mb-5  table-striped">
        <thead class="student-thread">
            <tr>
                <th rowspan="2">S. No.</th>
                <th rowspan="2">Student Name</th>
                <th rowspan="2">Roll Number</th>
                <th rowspan="2">Scholar Number</th>
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
                <td>34</td>
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
                <td>34893</td>
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
                <td>123456</td>
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
                <td>4</td>
                <td>nitin</td>
                <td>
                    788891
                </td>
                <td>2233445566</td>
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
                <td>5</td>
                <td>patel</td>
                <td>
                    788892
                </td>
                <td>8899007766</td>
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
                <td>6</td>
                <td>rani</td>
                <td>
                    788893
                </td>
                <td>434</td>
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
                <td>7</td>
                <td>rani</td>
                <td>
                    788894
                </td>
                <td>434</td>
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
                <td>8</td>
                <td>shahrukh khan</td>
                <td>
                    788895
                </td>
                <td>171126</td>
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
                <td>9</td>
                <td>shahrukh khan1</td>
                <td>
                    788896
                </td>
                <td>171126</td>
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
                <td>10</td>
                <td>shahrukh khan2</td>
                <td>
                    788897
                </td>
                <td>171126</td>
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
                <td>11</td>
                <td>vishal</td>
                <td>
                    788898
                </td>
                <td>1234567890</td>
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

@endsection