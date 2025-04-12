@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-auto">
                <div class="page-sub-header">
                    <h3 class="page-title">Admit Card</h3>
                </div>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp d-none">
                <a class="btn btn-primary" href="print_admit_card.php"> Admit Card </a>
            </div>
        </div>
    </div>


    <form action="print_admit_card.php" method="post" target="_blank">
        <div class="row">
            <div class="col-sm-5">
                <div class="card comman-shadow">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <!--<h6 class="form-title student-info" style="font-size: 15px;">Select Class</h6>-->
                                <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="20">
                                    <option value="">- Select Class -</option>
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
                            <div class="col-lg-6 col-md-6">
                                <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="20">
                                    <option value="">- Select Term -</option>
                                    <option value="100" data-classcat="B">Term-1</option>
                                    <option value="100" data-classcat="B">Term-2</option>
                                    <option value="100" data-classcat="B">Term-3</option>

                                </select>
                            </div>

                            <div class="col-lg-2 col-md-2" id="input-stream1" style="display: none;">
                                <!--<h5 class="form-title student-info" style="font-size: 15px;">Select Stream</h5>-->
                                <select id="selectstream1" class="currclass dropdown-select" name="scl_stream"> </select>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <!--<a data-bs-toggle="modal" data-bs-target="#con-view-term" class="btn btn-outline-primary me-2 d-none">Term</a>-->
                            <a href="{{ route('student.admit.layout') }}" class="btn btn-outline-primary me-2">Layout</a>
                            <a href="{{ route('student.admit.configration') }}" class="btn btn-outline-primary me-2">Configration </a>

                            <a href="{{ route('student.admit.rollno') }}" class="btn btn-outline-primary me-2">Roll Number</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="row">
                        <div class="col-7"></div>
                        <div class="col-3">
                            <div class="text-end float-end ms-auto download-grp">
                                <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control" />
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="text-end float-end ms-auto download-grp">
                                <input type="text" name="school_id" value="20" hidden>
                                <button type="submit" name="printView" class="btn btn-sm bg-success-light me-2" style="width: auto;font-size: 17px;padding: 6px 20px;"><i class="fa fa-print"></i> Print </button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <style>
                                @media (min-width: 767px) {
                                    .modal-dialog {
                                        max-width: 700px;
                                        margin: 1.75rem auto;
                                    }
                                }
                            </style>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<table id="myTable" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Student name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Roll Number</th>
                                        <th>Select All <input type="checkbox" id="select-all" name="select-all" value="all" style="width: 15px;height: 15px;"></th>
                                        <!--<th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 <input type="text" name="schoolID" value="20" hidden=""></td>
                                        <td>Shubham </td>
                                        <td>Nursery</td>
                                        <td>B</td>
                                        <td>12345</td>
                                        <td>
                                            <input type="number" name="updateid[]" value="927" class="form-control" hidden="">
                                            <input type="checkbox" id="print" name="print[]" value="927" style="width: 20px;height: 20px;">
                                        </td>
                                        <td>
                                            <div class="actions d-none">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-modal86"><i class="feather-eye"></i></a>

                                                <a href="" class="btn btn-sm bg-danger-light me-2 d-none" data-bs-toggle="modal" data-bs-target="#con-close-modal86"> <i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-danger d-none"><i class="feather-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2 <input type="text" name="schoolID" value="20" hidden=""></td>
                                        <td>Sahil </td>
                                        <td>Nursery</td>
                                        <td>B</td>
                                        <td>12346</td>
                                        <td>
                                            <input type="number" name="updateid[]" value="928" class="form-control" hidden="">
                                            <input type="checkbox" id="print" name="print[]" value="928" style="width: 20px;height: 20px;">
                                        </td>
                                        <td>
                                            <div class="actions d-none">
                                                <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#view-modal86"><i class="feather-eye"></i></a>

                                                <a href="" class="btn btn-sm bg-danger-light me-2 d-none" data-bs-toggle="modal" data-bs-target="#con-close-modal86"> <i class="feather-edit"></i> </a>

                                                <a href="" class="btn btn-sm bg-danger d-none"><i class="feather-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>

</div>
</div>

@endsection