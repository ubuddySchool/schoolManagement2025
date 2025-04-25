@extends('layouts.app')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Select Layouts</h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Form Start -->
        <form action="" method="POST">

            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-2 col-md-2 d-none">
                                <h5 class="form-title student-info" style="font-size: 15px;">Select Term</h5> <select
                                    name="terms" id="selectTerms" class="currclass dropdown-select">
                                    <option value="">Select Term</option>
                                    <option value="
            								14"> First Term </option>
                                    <option value="
            								15"> Second Term </option>
                                    <option value="
            								51"> Term I </option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <select class="form-select select" id="classSelect" multiple>
                                        <option selected hidden disabled>Select Classes</option>
                                        <option value="class1">Class 1</option>
                                        <option value="class2">Class 2</option>
                                        <option value="class3">Class 3</option>
                                        <option value="class4">Class 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 d-none">
                                <option selected="" value="2025-26">2025-26</option>
                                <option value="2024-25">2024-25</option>
                                <option value="2023-24">2023-24</option>
                                <option value="2022-23">2022-23</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2020-21">2020-21</option>
                                <input type="text" class="form-control" name="session" value="" id="field-3"
                                    hidden="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">


                        <div class="row">
                            <!-- Image 1 -->
                            <div class="col-xl-3 col-sm-6 col-12 d-flex align-items-center">
                                <div class="image-card"
                                    style="border: 1px solid #ccc; padding: 10px; margin: 5px; text-align: center; position: relative;">
                                    <input type="radio" name="selected_image" value="1"
                                        style="position: absolute; top: 5px; right: 5px;" class="image-radio">
                                    <img src="{{ asset('assets/img/layout/admit-card_1.jpg') }}" alt="Image 1"
                                        class="img-fluid image-select" style="width: 100%; height: auto;">
                                </div>
                            </div>

                            <!-- Image 2 -->
                            <div class="col-xl-3 col-sm-6 col-12 d-flex align-items-center">
                                <div class="image-card"
                                    style="border: 1px solid #ccc; padding: 10px; margin: 5px; text-align: center; position: relative;">
                                    <input type="radio" name="selected_image" value="2"
                                        style="position: absolute; top: 5px; right: 5px;" class="image-radio">
                                    <img src="{{ asset('assets/img/layout/admit_card.webp') }}" alt="Image 2"
                                        class="img-fluid image-select" style="width: 100%; height: auto;">
                                </div>
                            </div>

                            <!-- Image 3 -->
                            <div class="col-xl-3 col-sm-6 col-12 d-flex align-items-center">
                                <div class="image-card"
                                    style="border: 1px solid #ccc; padding: 10px; margin: 5px; text-align: center; position: relative;">
                                    <input type="radio" name="selected_image" value="3"
                                        style="position: absolute; top: 5px; right: 5px;" class="image-radio">
                                    <img src="{{ asset('assets/img/layout/admit_car-2.png') }}" alt="Image 3"
                                        class="img-fluid image-select" style="width: 100%; height: auto;">
                                </div>
                            </div>

                            <!-- Image 4 -->
                            <div class="col-xl-3 col-sm-6 col-12 d-flex align-items-center">
                                <div class="image-card"
                                    style="border: 1px solid #ccc; padding: 10px; margin: 5px; text-align: center; position: relative;">
                                    <input type="radio" name="selected_image" value="4"
                                        style="position: absolute; top: 5px; right: 5px;" class="image-radio">
                                    <img src="{{ asset('assets/img/layout/admit-card_1.jpg') }}" alt="Image 4"
                                        class="img-fluid image-select" style="width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

        <!-- Form End -->
    </div>
@endsection
