@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Follow up</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Selection, Section & Assign Button -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="fromDate" name="from_date">
                        </div>

                        <div class="col-md-3">
                            <input class="form-control" type="date" id="toDate" name="to_date">
                        </div>

                        <div class="col-md-4 align-self-center">
                            <button class="btn btn-dark" onclick="filterByDate()">Filter</button>
                        </div>
                        <div class="col-md-2">
                            <select class="currclass dropdown-select" id="sectionSelect">
                                <option value=""> - Select Class - </option>
                                <option value="86" data-classcat="A">Nursery</option>
                                <option value="88" data-classcat="A">UKG</option>
                                <option value="89" data-classcat="A">1</option>
                                <option value="90" data-classcat="A">2</option>
                                <option value="91" data-classcat="A">3</option>
                                <option value="92" data-classcat="A">4</option>
                                <option value="93" data-classcat="A">5</option>
                                <option value="94" data-classcat="A">6</option>
                                <option value="95" data-classcat="A">7</option>
                                <option value="96" data-classcat="A">8</option>
                                <option value="97" data-classcat="A">9</option>
                                <option value="98" data-classcat="A">10</option>
                                <option value="99" data-classcat="B">11</option>
                                <option value="100" data-classcat="B">12</option>
                            </select>
                        </div>
                        <div class="col-md-6 text-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Students Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">

                            </div>

                            <div class="col-auto">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control">
                            </div>


                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead class="student-thread">
                                <tr>

                                    <th>S No.</th>
                                    <th>Status</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Followup date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>1</td>
                                    <td><span class="badge bg-success">Running</span></td>

                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>1</td>
                                    <td>12-03-2023</td>
                                </tr>
                                <tr>

                                    <td>1</td>
                                    <td><span class="badge bg-warning">Pending</span></td>

                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">Ashish</a>
                                        </h2>
                                    </td>
                                    <td>2</td>
                                    <td>13-03-2023</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection