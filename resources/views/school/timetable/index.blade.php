@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Time Table</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('school_student.timetable.add') }}" class="btn btn-sm btn-primary">Create/Edit</a>
                <a href="" class="btn btn-sm bg-purple text-light me-2" data-bs-toggle="modal" data-bs-target="#cons-close-modal">view</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="row">

                        <div class="col-12 col-sm-3">
                            <h5 class="form-title student-info" style="color: #4f5254;font-size:20px;">Term</h5>
                            <form action="" method="post">
                                <select name="term" class="form-control currclass" onchange="this.form.submit()">
                                    <option value="14">First Term</option>
                                    <option value="14"> First Term</option>
                                    <option value="15"> Second Term</option>
                                    <option value="51"> Term I</option>
                                </select>
                            </form>
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
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 style="color: #4f5254;font-size:20px;">Time Table List</h6>
                            </div>

                            <div class="col-auto text-end float-end ms-auto download-grp d-none">
                                <a href="time.php" class="btn btn-primary">New Row</a>
                            </div>

                        </div>
                    </div>


                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">Class View</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Table View</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content profile-tab-cont">
                        <!-- Class View Start -->
                        <div class="tab-pane fade show active" id="per_details_tab">
                            <div class="table-responsive">
                                <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Class</th>
                                            <th>App Status</th>
                                            <th>Action</th>
                                            <!--<th>Edit</th>-->
                                            <!--<th>Delete</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nursery</td>
                                         

                                            <td> <input type="checkbox" class="pstatus" id="316" data-id="316" checked> <label class="label-switch" for="316"></label>
                                            </td>

                                            <td>
                                                <div>
                                                    <a href="" class="btn btn-sm bg-purple text-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                                    <a href="{{ route('school_student.timetable.edit') }}" class="btn btn-sm bg-info text-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm bg-danger text-light me-2" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"><i class="feather-trash-2"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>UKG</td>
                                           

                                            <td> <input type="checkbox" class="pstatus" id="460" data-id="460" checked> <label class="label-switch" for="460"></label>
                                            </td>

                                            <td>
                                                <div>
                                                    <a href="" class="btn btn-sm bg-purple text-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                                    <a href="{{ route('school_student.timetable.edit') }}" class="btn btn-sm bg-info text-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm bg-danger text-light me-2" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"><i class="feather-trash-2"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1</td>
                                           

                                            <td> <input type="checkbox" class="pstatus" id="461" data-id="461" checked> <label class="label-switch" for="461"></label>
                                            </td>

                                            <td>
                                                <div>
                                                    <a href="" class="btn btn-sm bg-purple text-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                                    <a href="{{ route('school_student.timetable.edit') }}" class="btn btn-sm bg-info text-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm bg-danger text-light me-2" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"><i class="feather-trash-2"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2</td>
                                           

                                            <td> <input type="checkbox" class="pstatus" id="462" data-id="462" checked> <label class="label-switch" for="462"></label>
                                            </td>

                                            <td>
                                                <div>
                                                    <a href="" class="btn btn-sm bg-purple text-light me-2" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="feather-eye"></i></a>

                                                    <a href="{{ route('school_student.timetable.edit') }}" class="btn btn-sm bg-info text-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm bg-danger text-light me-2" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"><i class="feather-trash-2"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Table View Start -->
                        <div id="password_tab" class="tab-pane fade">
                            <div class="table-responsive">
                                <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Date/Class</th>
                                            <th>Nursery</th>
                                            <th>LKG</th>
                                            <th>UKG</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>18/08/2023</td>
                                            <td>Nursery</td>
                                            <td>Hindi</td>
                                            <td>English</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                        </tr>
                                        <tr>
                                            <td>18/08/2023</td>
                                            <td>UKG</td>
                                            <td>Hindi</td>
                                            <td>English</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                        </tr>
                                        <tr>
                                            <td>18/08/2023</td>
                                            <td>1</td>
                                            <td>Hindi</td>
                                            <td>English</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                        </tr>
                                        <tr>
                                            <td>18/08/2023</td>
                                            <td>2</td>
                                            <td>Hindi</td>
                                            <td>English</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Mathematics</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
                                            <td>Hindi</td>
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


    <div id="delete-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled bg-danger">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <form action="" method="post" id="sectionForm">
                            <i class="dripicons-wrong h1 text-white"></i>
                            <h4 class="mt-2 text-white">Alert!</h4>
                            <p class="mt-3 text-white">Are you sure you want to delete this Time Table?</p>
                            <a href="time-table-delete.php?id=316" class="btn btn-sm bg-info text-light">Confirm</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>

<div id="cons-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" id="printContent">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        <div class="row">
          <!-- Left column: Select term -->
          <div class="col-md-6">
            <label for="term">Select Term</label>
            <select id="term" class="form-control">
              <option value="term1">Term 1</option>
              <option value="term2">Term 2</option>
              <option value="term3">Term 3</option>
            </select>
          </div>
          <!-- Right column: Static classes list -->
          <div class="col-md-6">
  <label for="classes">Select Classes</label>
  <div id="classes-container">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="UKG" id="class_UKG">
      <label class="form-check-label" for="class_UKG">UKG</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="1st" id="class_1st">
      <label class="form-check-label" for="class_1st">1st</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="2nd" id="class_2nd">
      <label class="form-check-label" for="class_2nd">2nd</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="3rd" id="class_3rd">
      <label class="form-check-label" for="class_3rd">3rd</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="4th" id="class_4th">
      <label class="form-check-label" for="class_4th">4th</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="classes[]" value="5th" id="class_5th">
      <label class="form-check-label" for="class_5th">5th</label>
    </div>
  </div>
  <input type="checkbox" class="form-check-input" id="selectAll" onclick="toggleCheckboxes(this)"> select all
</div>

        </div>
      </div>
          


            <div class="modal-footer">
                <button type="button" id="myElement" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('school_student.timetable.show')}}" class="btn btn-sm btn-primary" id="proceedBtn">Proceed</a>
              
            </div>


        </div>
    </div>
</div>

<script>

function toggleCheckboxes(selectAllCheckbox) {
  const checkboxes = document.querySelectorAll('#classes-container input[type="checkbox"]');
  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAllCheckbox.checked;
  });
}


    $(document).ready(function() {
        // Handle 'Select All' button
        $('#selectAllClasses').click(function() {
            const checkboxes = $('#classes-container input[type="checkbox"]');
            checkboxes.prop('checked', !checkboxes.prop('checked'));
        });

        // Proceed button (Submit the form)
        $('#proceedBtn').click(function() {
            const selectedClasses = [];
            $('#classes-container input[type="checkbox"]:checked').each(function() {
                selectedClasses.push($(this).val());
            });

            // Send selected classes and term to the server (via form submission)
            $.ajax({
                url: "{{ route('school_student.timetable.show') }}",
                method: 'POST',
                data: {
                    term: $('#term').val(),
                    classes: selectedClasses,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Hide modal
                    $('#selectTermModal').modal('hide');

                    // Display timetable (update the view with the timetable)
                    $('#timetable-container').html(response.timetableHtml);
                }
            });
        });
    });

</script>
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" id="printContent">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Time Table Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <style>
                @media (min-width: 767px) {
                    .modal-dialog {
                        max-width: 600px;
                        margin: 1.75rem auto;
                    }
                }

                .table_ {
                    margin: 2rem 2.2rem;
                }

                .table_,
                .th_,
                .td_ {
                    border: 1px solid black;
                    padding-left: 10px;
                }
            </style>
            <table class="table_">
                <tr>
                    <!--<th  class="th_">#</th>-->
                    <th class="th_">Date</th>
                    <th class="th_">Subject</th>
                </tr>


                <tr>
                    <!--<td  class="td_">1</td>-->
                    <td class="td_">11-09-2024</td>
                    <td class="td_">

                        Drawing </td>
                </tr>


                <tr>
                    <!--<td  class="td_">2</td>-->
                    <td class="td_">16-09-2024</td>
                    <td class="td_">

                        Mathematics </td>
                </tr>


                <tr>
                    <!--<td  class="td_">3</td>-->
                    <td class="td_">18-09-2024</td>
                    <td class="td_">

                        Drawing </td>
                </tr>


                <tr>
                    <!--<td  class="td_">4</td>-->
                    <td class="td_">13-09-2024</td>
                    <td class="td_">

                        Drawing </td>
                </tr>


            </table>


            <div class="modal-footer">
                <!--<button class="btn btn-primary" onclick="printPage()">Print</button>-->
               
                <button type="button" id="myElement" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('school_student.timetable.edit') }}" class="btn btn-sm bg-info text-light me-2">Edit</a>

                <button class="btn btn-sm btn-primary" id="myElement2" onclick="printTimeTable('printContent')">Print</button>
            </div>


        </div>
    </div>
</div>


<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 90%" id="printFullContent">
        <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title">First Term</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <style>
                @media (min-width: 767px){
                    .modal-dialog {
                        /*max-width: 600px;*/
                        margin: 1.75rem auto;
                    }
                }
                .modaltable td {
                    border: 1px solid #757575;
                }
            </style> 
<div class="table-responsive">
    <table id="myTable" class="table border-0 star-student table-hover table-center mb-0 table-striped modaltable">
        <thead class="student-thread">
                <tr>
                <!--<th>#</th>-->
                <th>Date</th>
                                <th>Nursery </th>
                                <th>UKG </th>
                                <th>1 </th>
                                <th>2 </th>
                                <th>3 </th>
                                <th>4 </th>
                                <th>5 </th>
                                <th>6 </th>
                                <th>7 </th>
                                <th>8 </th>
                                <th>9 </th>
                                <th>10 </th>
                                <th>11 </th>
                                <th>12 </th>
                            </tr>
        </thead>

        <tbody>
            <tr>
                <!--<td>1</td>-->
                <td>11-09-2024</td>
                                <td>Drawing <br>
                                    </td>
                
                                <td>English<br>
                                    </td>
                
                                <td>Mathematics<br>
                                    </td>
                
                                <td>English<br>
                    Drawing <br>
                                    </td>
                
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                
            </tr>   
                        <tr>
                <!--<td>2</td>-->
                <td>13-09-2024</td>
                                <td>Drawing <br>
                                    </td>
                
                                <td>Drawing <br>
                                    </td>
                
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                
            </tr>   
                        <tr>
                <!--<td>3</td>-->
                <td>16-09-2024</td>
                                <td>Mathematics<br>
                                    </td>
                
                                    <td> - </td>
                                <td>GK<br>
                                    </td>
                
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                
            </tr>   
                        <tr>
                <!--<td>4</td>-->
                <td>18-09-2024</td>
                                <td>Drawing <br>
                                    </td>
                
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                
            </tr>   
              
        </tbody>
    </table>
</div>
<div class="d-none">
    <button onclick="printFullTimeTable('printFullContent')">Print Table</button>
</div>

        </div>
    </div>

</div>

@endsection