@extends('layouts.app')

@section('content')


<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-auto">
                <div class="page-sub-header">
                    <h3 class="page-title">Assign Roll Number</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <form action="" method="post">
            <!--<form action="" method="post">-->
            

            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header" style="margin-bottom: 0;">
                            <div class="row align-items-center">

                            <div class="col-lg-2 col-md-2 ">
                                <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                    <option value="">Select Term</option>
                                    <option value="
            								14"> First Term </option>
                                    <option value="
            								15"> Second Term </option>
                                    <option value="
            								51"> Term I </option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="
            							20">
                                    <option value="">Select Class</option>
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

                                <div class="col-auto text-end float-end download-grp">
                                    <input type="number" name="assignRollNumbr" placeholder="Enter Roll Number" class="form-control" />
                                    <input type="number" name="schoolID" value="20" hidden />
                                </div>

                                <div class="col-auto text-end float-end download-grp">
                                   <button type="submit" name="assignAdmitCard" class="btn btn-outline-primary me-2">Assign Roll Number</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="filteredTableContainer">
                        <form action="admitCard_rollNumber.php" method="post">
                            <div class="row">
                                <div class="col-6">
                                    </div>
                                <!-- <div class="col-3">
                                
                                </div> -->
                                <div class="col-6">
                               
                                    <div class="text-end float-end ms-auto download-grp  d-flex gap-2">
                                    <input type="number" name="assignRollNumbr" placeholder="Enter Roll Number" class="form-control" oninput="autoIncrementRollNumbers(this.value)" />    
                                    <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search By Name" class="form-control"></div>
                                    
                                </div>
                                <!-- <div class="col-1 ">
                                    <div class="text-end float-end ms-auto download-grp"><a href="print_admit_card.php?id=90&amp;scid=20&amp;tid=" target="_blank" class="btn btn-sm bg-success-light me-2" style="width:auto"><i class="fa fa-print"></i> Print </a></div>
                                </div> -->
                            </div> &nbsp;<!-- Roll Number Input Field -->
                           

                            <!-- Student Roll Numbers Table -->
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Student name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th class="w-25">Roll Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ajay</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td><input type="number" name="rollNumber[]" value="103" class="form-control roll-number"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Amir</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td><input type="number" name="rollNumber[]" value="103" class="form-control roll-number"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Akash</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td><input type="number" name="rollNumber[]" value="103" class="form-control roll-number"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Abhinav</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td><input type="number" name="rollNumber[]" value="103" class="form-control roll-number"></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-12"><button type="submit" name="updateAdmitCard" class="btn btn-outline-primary me-2" style="margin: 2rem 0;">Save</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script>
    function autoIncrementRollNumbers(startingNumber) {
        let rollInputs = document.querySelectorAll('.roll-number');
        let currentNumber = parseInt(startingNumber);

        if (!isNaN(currentNumber)) {
            rollInputs.forEach((input, index) => {
                input.value = currentNumber + index;
            });
        }
    }
</script>
@endsection