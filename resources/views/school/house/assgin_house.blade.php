@extends('layouts.app')

@section('content')


<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-auto">
                <div class="page-sub-header">
                    <h3 class="page-title">Assign House</h3>
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
                                <div class="col-lg-3 text-end float-end download-grp">
                                    <input type="search" name="assignRollNumbr" placeholder="Search by House/student Name" class="currclass" />
                                </div>

                                <div class="col-lg-3">

                                </div>

                                <div class="col-lg-2 col-md-2 ">
                                    <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                        <option value="">Select House</option>
                                        <option value="
            								1">Red House </option>
                                        <option value="
            								2"> White House </option>
                                        <option value="
            								3"> Blue House</option>
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
                                <div class="col-lg-2 col-md-2">
                                    <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="
            							20">
                                        <option value="">Select Section</option>
                                        <option value="">Section A</option>
                                        <option value="">Section B</option>

                                    </select>
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


                            <!-- Student Roll Numbers Table -->
                            <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Student name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th class="w-25">House Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ajay</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Red House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                White House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Blue House</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Amir</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Red House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                White House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Blue House</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Akash</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Red House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                White House</label>
                                            <label for="">
                                                <input type="radio" name="red_1" id="red">
                                                Blue House</label>
                                        </td>
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