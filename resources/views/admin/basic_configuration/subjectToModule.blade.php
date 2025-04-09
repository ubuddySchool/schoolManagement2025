@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow ">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('basic-configuration.getSubject') }}" class="text-decoration-none text-dark me-2 backButton ">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject Type</h3>
                            </div>                            
                        </div>
                    </div>                                       
                    <?php
                    $classes = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                    $subjects = ['Hindi', 'English', 'Mathematics', 'G.K.', 'E.V.S.', 'Drawing', 'Art & Craft'];
                    ?>

                    <div class="row my-4">
                        <div class="col-md-2">
                            <select name="class" class="form-select">
                                <option value="" disabled selected>Select Class</option>
                                <?php foreach ($classes as $class): ?>
                                    <option value="<?= $class ?>"><?= $class ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    {{-- <div class="row mb-4">
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0">Subjects</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Daily Schedule</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Time Table</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Syllabus</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Result Main</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Result Mis</h6>
                        </div>
                    </div> --}}


                    <?php
                    $options = ['Daily Schedule', 'Time Table', 'Syllabus', 'Result Main']; // Checkbox options for each subject
                    ?>

                    <?php foreach ($subjects as $subjectIndex => $subject): ?> 
                        <div class="row mb-2 align-items-start" data-index="<?= $subjectIndex ?>">
                            <!-- Subject label -->
                            <div class="col-md-2 col-sm-3">
                                <label class="form-check-label mb-0 fw-bold"><?= $subject ?></label>
                            </div>

                            <!-- Dynamic checkboxes -->
                            <?php foreach ($options as $optionIndex => $option): 
                                $checkboxId = "checkbox_{$subjectIndex}_{$optionIndex}";
                            ?>
                                <div class="col-md-2 col-sm-3">
                                    <div class="form-check d-flex align-items-center gap-2">
                                        <input class="form-check-input m-0"
                                            type="checkbox"
                                            id="<?= $checkboxId ?>"
                                            name="subjects[<?= $subject ?>][]"
                                            value="<?= $option ?>">
                                        <label class="form-check-label mb-0" for="<?= $checkboxId ?>">
                                            <?= $option ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <hr>
                    <?php endforeach; ?>




                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

