@extends('layouts.app')

@section('content')
<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Time Table</h3>
                            </div>

                        </div>
                    </div>


                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-2">
                                <select class="form-control" name="term" onchange="this.form.submit()">
                                    <option>Select Term</option>
                                    <option value="14"> First Term</option>
                                    <option value="15"> Second Term</option>
                                    <option value="51"> Term I</option>
                                </select>
                            </div>

                            <div class="col-sm-2">
                                <select name="session" class="form-control">
                                    <option selected value='2024-25'>2024-25</option>
                                    <option value='2023-24'>2023-24</option>
                                    <option value='2022-23'>2022-23</option>
                                    <option value='2021-22'>2021-22</option>
                                    <option value='2020-21'>2020-21</option>
                                </select>
                            </div>
                        </div>
                    </form>


                    <form method="post" action="show.php">
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container">
                                    <div class="col-sm-2 d-none" style="margin-bottom:1rem;">
                                        <select name="session" class="form-control">
                                            <option selected="" value="2024-25">2024-25</option>
                                            <option value="2023-24">2023-24</option>
                                            <option value="2022-23">2022-23</option>
                                            <option value="2021-22">2021-22</option>
                                            <option value="2020-21">2020-21</option>
                                        </select>
                                    </div>

                                    <hr>

                                    <div class="col-lg-12 grid-margin stretch-card border">
                                        <div class="card">
                                            <div class="card-body" style="padding: 0;">
                                                <div class="table-responsive">
                                                    <table id="faqs" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>X</th>
                                                                <th>Date</th>
                                                                <th>Nursery</th>
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
                                                                <td>
                                                                    <!--<button class="btn btn-sm bg-danger" name="deleteDate" onclick="handleDeleteDate('2024-09-11')"><i class="fa fa-trash"></i></button>-->
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" value="0" name="count[]" placeholder="User name">
                                                                    <input type="hidden" value="14" name="termID" placeholder="User name">
                                                                    <input type="hidden" name="oldDate0" value="2024-09-11">
                                                                    <input type="date" name="0" value="2024-09-11" class="form-control date_input">
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_01[]" style="display: none;">
                                                                        <option selected="" value="20">Drawing </option><br>
                                                                        <option value="18">Hindi</option>
                                                                        <option value="19">Mathematics</option>
                                                                        <option value="20">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 72px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Drawing </span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_02[]" style="display: none;">
                                                                        <option selected="" value="188">English</option><br>
                                                                        <option value="187">Hindi</option>
                                                                        <option value="188">English</option>
                                                                        <option value="189">Mathematics</option>
                                                                        <option value="190">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>English</span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_03[]" style="display: none;">
                                                                        <option selected="" value="12">Mathematics</option><br>
                                                                        <option value="10">Hindi</option>
                                                                        <option value="11">English</option>
                                                                        <option value="12">Mathematics</option>
                                                                        <option value="13">Drawing </option>
                                                                        <option value="14">GK</option>
                                                                        <option value="15">EVS</option>
                                                                        <option value="31">Other</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Mathematics</span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_04[]" style="display: none;">
                                                                        <option selected="" value="192">English</option><br>
                                                                        <option selected="" value="194">Drawing </option><br>
                                                                        <option value="191">Hindi</option>
                                                                        <option value="192">English</option>
                                                                        <option value="193">Mathematics</option>
                                                                        <option value="194">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>English</span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-choice"><span>Drawing </span><a class="search-choice-close" data-option-array-index="1"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_05[]" style="display: none;">
                                                                        <option value="195">Hindi</option>
                                                                        <option value="196">English</option>
                                                                        <option value="197">Mathematics</option>
                                                                        <option value="198">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_06[]" style="display: none;">
                                                                        <option value="199">Hindi</option>
                                                                        <option value="200">English</option>
                                                                        <option value="201">Mathematics</option>
                                                                        <option value="202">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_07[]" style="display: none;">
                                                                        <option value="203">Hindi</option>
                                                                        <option value="204">English</option>
                                                                        <option value="205">Mathematics</option>
                                                                        <option value="206">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_08[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_09[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_010[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_011[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_012[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_013[]" style="display: none;">
                                                                        <option value="16">Hindi</option>
                                                                        <option value="17">English</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_014[]" style="display: none;">
                                                                        <option value="5">Hindi</option>
                                                                        <option value="6">English</option>
                                                                        <option value="7">Mathematics</option>
                                                                        <option value="8">Physics</option>
                                                                        <option value="9">Chemistry</option>
                                                                        <option value="30">Biology</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="hidden" value="20" name="school_id"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <!--<button class="btn btn-sm bg-danger" name="deleteDate" onclick="handleDeleteDate('2024-09-13')"><i class="fa fa-trash"></i></button>-->
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" value="1" name="count[]" placeholder="User name">
                                                                    <input type="hidden" value="14" name="termID" placeholder="User name">
                                                                    <input type="hidden" name="oldDate1" value="2024-09-13">
                                                                    <input type="date" name="1" value="2024-09-13" class="form-control date_input">
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_11[]" style="display: none;">
                                                                        <option selected="" value="20">Drawing </option><br>
                                                                        <option value="18">Hindi</option>
                                                                        <option value="19">Mathematics</option>
                                                                        <option value="20">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 72px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Drawing </span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_12[]" style="display: none;">
                                                                        <option selected="" value="190">Drawing </option><br>
                                                                        <option value="187">Hindi</option>
                                                                        <option value="188">English</option>
                                                                        <option value="189">Mathematics</option>
                                                                        <option value="190">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Drawing </span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_13[]" style="display: none;">
                                                                        <option value="10">Hindi</option>
                                                                        <option value="11">English</option>
                                                                        <option value="12">Mathematics</option>
                                                                        <option value="13">Drawing </option>
                                                                        <option value="14">GK</option>
                                                                        <option value="15">EVS</option>
                                                                        <option value="31">Other</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_14[]" style="display: none;">
                                                                        <option value="191">Hindi</option>
                                                                        <option value="192">English</option>
                                                                        <option value="193">Mathematics</option>
                                                                        <option value="194">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_15[]" style="display: none;">
                                                                        <option value="195">Hindi</option>
                                                                        <option value="196">English</option>
                                                                        <option value="197">Mathematics</option>
                                                                        <option value="198">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_16[]" style="display: none;">
                                                                        <option value="199">Hindi</option>
                                                                        <option value="200">English</option>
                                                                        <option value="201">Mathematics</option>
                                                                        <option value="202">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_17[]" style="display: none;">
                                                                        <option value="203">Hindi</option>
                                                                        <option value="204">English</option>
                                                                        <option value="205">Mathematics</option>
                                                                        <option value="206">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_18[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_19[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_110[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_111[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_112[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_113[]" style="display: none;">
                                                                        <option value="16">Hindi</option>
                                                                        <option value="17">English</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_114[]" style="display: none;">
                                                                        <option value="5">Hindi</option>
                                                                        <option value="6">English</option>
                                                                        <option value="7">Mathematics</option>
                                                                        <option value="8">Physics</option>
                                                                        <option value="9">Chemistry</option>
                                                                        <option value="30">Biology</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="hidden" value="20" name="school_id"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <!--<button class="btn btn-sm bg-danger" name="deleteDate" onclick="handleDeleteDate('2024-09-16')"><i class="fa fa-trash"></i></button>-->
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" value="2" name="count[]" placeholder="User name">
                                                                    <input type="hidden" value="14" name="termID" placeholder="User name">
                                                                    <input type="hidden" name="oldDate2" value="2024-09-16">
                                                                    <input type="date" name="2" value="2024-09-16" class="form-control date_input">
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_21[]" style="display: none;">
                                                                        <option selected="" value="19">Mathematics</option><br>
                                                                        <option value="18">Hindi</option>
                                                                        <option value="19">Mathematics</option>
                                                                        <option value="20">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 72px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Mathematics</span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_22[]" style="display: none;">
                                                                        <option value="187">Hindi</option>
                                                                        <option value="188">English</option>
                                                                        <option value="189">Mathematics</option>
                                                                        <option value="190">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_23[]" style="display: none;">
                                                                        <option selected="" value="14">GK</option><br>
                                                                        <option value="10">Hindi</option>
                                                                        <option value="11">English</option>
                                                                        <option value="12">Mathematics</option>
                                                                        <option value="13">Drawing </option>
                                                                        <option value="14">GK</option>
                                                                        <option value="15">EVS</option>
                                                                        <option value="31">Other</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>GK</span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_24[]" style="display: none;">
                                                                        <option value="191">Hindi</option>
                                                                        <option value="192">English</option>
                                                                        <option value="193">Mathematics</option>
                                                                        <option value="194">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_25[]" style="display: none;">
                                                                        <option value="195">Hindi</option>
                                                                        <option value="196">English</option>
                                                                        <option value="197">Mathematics</option>
                                                                        <option value="198">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_26[]" style="display: none;">
                                                                        <option value="199">Hindi</option>
                                                                        <option value="200">English</option>
                                                                        <option value="201">Mathematics</option>
                                                                        <option value="202">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_27[]" style="display: none;">
                                                                        <option value="203">Hindi</option>
                                                                        <option value="204">English</option>
                                                                        <option value="205">Mathematics</option>
                                                                        <option value="206">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_28[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_29[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_210[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_211[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_212[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_213[]" style="display: none;">
                                                                        <option value="16">Hindi</option>
                                                                        <option value="17">English</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_214[]" style="display: none;">
                                                                        <option value="5">Hindi</option>
                                                                        <option value="6">English</option>
                                                                        <option value="7">Mathematics</option>
                                                                        <option value="8">Physics</option>
                                                                        <option value="9">Chemistry</option>
                                                                        <option value="30">Biology</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="hidden" value="20" name="school_id"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <!--<button class="btn btn-sm bg-danger" name="deleteDate" onclick="handleDeleteDate('2024-09-18')"><i class="fa fa-trash"></i></button>-->
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" value="3" name="count[]" placeholder="User name">
                                                                    <input type="hidden" value="14" name="termID" placeholder="User name">
                                                                    <input type="hidden" name="oldDate3" value="2024-09-18">
                                                                    <input type="date" name="3" value="2024-09-18" class="form-control date_input">
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_31[]" style="display: none;">
                                                                        <option selected="" value="20">Drawing </option><br>
                                                                        <option value="18">Hindi</option>
                                                                        <option value="19">Mathematics</option>
                                                                        <option value="20">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 72px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>Drawing </span><a class="search-choice-close" data-option-array-index="0"></a></li>
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input" type="text" autocomplete="off" value="Select Some Options" style="width: 25px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_32[]" style="display: none;">
                                                                        <option value="187">Hindi</option>
                                                                        <option value="188">English</option>
                                                                        <option value="189">Mathematics</option>
                                                                        <option value="190">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_33[]" style="display: none;">
                                                                        <option value="10">Hindi</option>
                                                                        <option value="11">English</option>
                                                                        <option value="12">Mathematics</option>
                                                                        <option value="13">Drawing </option>
                                                                        <option value="14">GK</option>
                                                                        <option value="15">EVS</option>
                                                                        <option value="31">Other</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_34[]" style="display: none;">
                                                                        <option value="191">Hindi</option>
                                                                        <option value="192">English</option>
                                                                        <option value="193">Mathematics</option>
                                                                        <option value="194">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_35[]" style="display: none;">
                                                                        <option value="195">Hindi</option>
                                                                        <option value="196">English</option>
                                                                        <option value="197">Mathematics</option>
                                                                        <option value="198">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_36[]" style="display: none;">
                                                                        <option value="199">Hindi</option>
                                                                        <option value="200">English</option>
                                                                        <option value="201">Mathematics</option>
                                                                        <option value="202">Drawing </option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_37[]" style="display: none;">
                                                                        <option value="203">Hindi</option>
                                                                        <option value="204">English</option>
                                                                        <option value="205">Mathematics</option>
                                                                        <option value="206">Drawing</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_38[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_39[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_310[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_311[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_312[]" style="display: none;">

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_313[]" style="display: none;">
                                                                        <option value="16">Hindi</option>
                                                                        <option value="17">English</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select multiple="" class="form-control chosen-select" name="subject_314[]" style="display: none;">
                                                                        <option value="5">Hindi</option>
                                                                        <option value="6">English</option>
                                                                        <option value="7">Mathematics</option>
                                                                        <option value="8">Physics</option>
                                                                        <option value="9">Chemistry</option>
                                                                        <option value="30">Biology</option>

                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi" title="" style="width: 66px;">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-field">
                                                                                <input class="chosen-search-input default" type="text" autocomplete="off" value="Select Some Options" style="width: 56px;">
                                                                            </li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results"></ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="hidden" value="20" name="school_id"></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto">
                                        <button class="btn btn-primary" type="submit" name="updateTimeTable">Submit</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



</div>
@endsection