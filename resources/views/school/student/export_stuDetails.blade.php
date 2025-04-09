@extends('layouts.app')

@section('content')
<style>
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
        <div class="col-1">
            <button class="btn btn-primary page-header" onclick="printPage()"> Print</button>
        </div>
        <div class="col-3">
            <!-- Your HTML button -->
            <button class="btn btn-primary page-header1" id="export_button">Export to Excel</button>

        </div>
        <div class="col-8">
        </div>
        <div class="col-3">
            <h6>Term : </h6>
        </div>
    </div>




    <table id="myTable" class="table table-bordered  border-0 star-student  table-center mb-5 mt-3  ">
        <thead class="student-thread">
            <tr>
                <th>S. No.</th>
                <th>Student Name</th>
                <th>Class</th>
                <th>Scholar No.</th>
                <th>Roll No.</th>
                <th>PEN</th>
                <th>DOB</th>
                <th>APPAR ID</th>
                <th>Adhar No.</th>
                <th style="min-width:40px;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Harsh Maheshwarivvvvvvvvv</td>
                <td>12</td>
                <td>123485</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td>353333333333</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>shanu</td>
                <td>12</td>
                <td>486</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6</td>
                <td>shekhar Parmar</td>
                <td>12</td>
                <td>12345</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Tapan Nagda</td>
                <td>12</td>
                <td>1111</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Aashish Rathore</td>
                <td>Nursery</td>
                <td>34</td>
                <td>
                    788888
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Ishan Parate</td>
                <td>Nursery</td>
                <td>34893</td>
                <td>
                    788889
                </td>
                <td>86784759</td>
                <td>26-08-2005</td>
                <td></td>
                <td>8956-2565-8075</td>
                <td></td>
            </tr>
            <tr>
                <td>10</td>
                <td>megha</td>
                <td>Nursery</td>
                <td>123456</td>
                <td>
                    788890
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11</td>
                <td>nitin</td>
                <td>Nursery</td>
                <td>2233445566</td>
                <td>
                    788891
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12</td>
                <td>patel</td>
                <td>Nursery</td>
                <td>8899007766</td>
                <td>
                    788892
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>13</td>
                <td>rani</td>
                <td>Nursery</td>
                <td>434</td>
                <td>
                    788893
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>14</td>
                <td>rani</td>
                <td>Nursery</td>
                <td>434</td>
                <td>
                    788894
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>15</td>
                <td>shahrukh khan</td>
                <td>Nursery</td>
                <td>171126</td>
                <td>
                    788895
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>16</td>
                <td>shahrukh khan1</td>
                <td>Nursery</td>
                <td>171126</td>
                <td>
                    788896
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>17</td>
                <td>shahrukh khan2</td>
                <td>Nursery</td>
                <td>171126</td>
                <td>
                    788897
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>18</td>
                <td>vishal</td>
                <td>Nursery</td>
                <td>1234567890</td>
                <td>
                    788898
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>19</td>
                <td>Rani Patidar</td>
                <td></td>
                <td>987624556</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>20</td>
                <td>test</td>
                <td></td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>21</td>
                <td>amit</td>
                <td>UKG</td>
                <td>1111</td>
                <td>
                    0
                </td>
                <td></td>
                <td>28-02-2019</td>
                <td></td>
                <td>2222-2222-2222</td>
                <td></td>
            </tr>
            <tr>
                <td>22</td>
                <td>Megha</td>
                <td>UKG</td>
                <td>35456</td>
                <td>
                    1
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>23</td>
                <td>Nishant Haswani</td>
                <td>UKG</td>
                <td>9999</td>
                <td>
                    2
                </td>
                <td></td>
                <td>01-01-2001</td>
                <td></td>
                <td>2678-5400-7768</td>
                <td></td>
            </tr>
            <tr>
                <td>24</td>
                <td>Ankit </td>
                <td>1</td>
                <td>63345643</td>
                <td>
                    0
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>25</td>
                <td>Rakesh Sharma</td>
                <td>1</td>
                <td>12355</td>
                <td>
                    1
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>26</td>
                <td>Ajay Khare</td>
                <td>2</td>
                <td>6346</td>
                <td>
                    102
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>27</td>
                <td>Testing</td>
                <td>4</td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>28</td>
                <td>Amit Testing</td>
                <td>11</td>
                <td>1111</td>
                <td>

                </td>
                <td></td>
                <td>22-12-2005</td>
                <td></td>
                <td>3464-5634-5745</td>
                <td></td>
            </tr>
            <tr>
                <td>29</td>
                <td>Ashi Patidar</td>
                <td>11</td>
                <td>8568</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30</td>
                <td>Demo 11th</td>
                <td>11</td>
                <td>3w45</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>


</div>

@endsection