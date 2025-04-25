@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Syllabus</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="row align-items-center">

                    <div class="col-12 col-sm-2 text-center download-grp">
                            <label class="m-0">2025-26</label>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <select name="terms" id="selectTerms" class="currclass dropdown-select">
                                <option value="">Select Term</option>
                                <option value="14">First Term</option>
                                <option value="15">Second Term</option>
                                <option value="51">Term I</option>
                            </select>
                        </div>
                        
                        <div class="col-lg-2 col-md-2">
                            <select name="currentClass" class="currclass dropdown-select" id="selectclassacad" data-school="20">
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
                        <div class="col-lg-2 col-md-2" id="input-section1" style="display: none;">
                            <h5 class="form-title student-info">Select Section</h5>
                            <select id="section1" class="currclass dropdown-select" name="Section"></select>
                        </div>

                        <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="{{ route('student.add_syllabus')}}" class="btn btn-primary">New Syllabus</a>
                            </div>

                        <div class="col-12 col-sm-4 d-none">
                            <div class="form-group local-forms">
                                <h5 class="form-title student-info">Year</h5>
                                <select>
                                    <option>Select Year</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    

                    <div class="table-responsive">
                        <div id="filteredTableContainer">
                            <p id="noRecordsMessage" style="display: none;">No records found.</p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0  table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>S No.</th>
                                    <th>Standard</th>
                                    <th>Term</th>
                                    <th>View App</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12 ( Science Maths ) </td>
                                    <td>First Term</td>

                                    <td> <input type="checkbox" class="pstatus" id="10" data-id="10"
                                            checked>
                                        <label class="label-switch" for="10"></label>
                                    </td>

                                    <td>
                                        <div >
                                            <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                            <a href="{{ route('student.edit_syllabus') }}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <!--<a href="notification-edit.php?id=100" class="btn btn-sm bg-danger-light me-2">-->
                                            <!--    <i class="feather-edit"></i>-->
                                            <!--</a>-->
                                            <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal10"><i class="feather-trash-2"></i></button>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>First Term</td>

                                    <td> <input type="checkbox" class="pstatus" id="12" data-id="12"
                                            checked>
                                        <label class="label-switch" for="12"></label>
                                    </td>

                                    <td>
                                        <div >
                                            <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                            <a href="{{ route('student.edit_syllabus') }}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <!--<a href="notification-edit.php?id=100" class="btn btn-sm bg-danger-light me-2">-->
                                            <!--    <i class="feather-edit"></i>-->
                                            <!--</a>-->
                                            <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal12"><i class="feather-trash-2"></i></button>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12 ( Science Maths ) </td>
                                    <td>First Term</td>

                                    <td> <input type="checkbox" class="pstatus" id="13" data-id="13">
                                        <label class="label-switch" for="13"></label>
                                    </td>

                                    <td>
                                        <div >
                                            <a href="" class="btn btn-sm bg-success-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>
                                            <a href="{{ route('student.edit_syllabus') }}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <!--<a href="notification-edit.php?id=100" class="btn btn-sm bg-danger-light me-2">-->
                                            <!--    <i class="feather-edit"></i>-->
                                            <!--</a>-->
                                            <button type="button" class="btn btn-sm bg-danger me-2" data-bs-toggle="modal" data-bs-target="#danger-alert-modal13"><i class="feather-trash-2"></i></button>

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


</div>




</div>

<div class="modal fade" id="con-close-modal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="padding-left: 1.3rem;color:#788088;">Syllabus Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
<style>
@media (min-width: 767px){
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
}
.table_{
    margin:2rem 2.2rem;
}
.table_, .td_ {
    border: 1px solid #788088;
    padding: 1rem 2rem 0;
    min-height:2rem;  
}

.th_ {
    border: 1px solid #788088;
        padding-left: 2rem;
    height: 50px;
    background-color: rgba(0,0,0,0.03);
}
</style>    
<table class="table_">
  <tbody><tr>
    <th class="th_">Subject</th>
    <th class="th_">Syllabus</th>
  </tr>
    
    <tr>
        <td class="td_">Other</td>
        <td class="td_">oral</td>
    </tr>
</tbody></table>
            <div class="modal-body p-4 d-none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="field-2" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Address</label>
                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-4" class="form-label">City</label>
                            <input type="text" class="form-control" id="field-4" placeholder="Boston">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                        <label for="field-5" class="form-label">Country</label>
                        <input type="text" class="form-control" id="field-5" placeholder="United States">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                        <label for="field-6" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="field-6" placeholder="123456">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="">
                    <label for="field-7" class="form-label">Personal Info</label>
                    <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection