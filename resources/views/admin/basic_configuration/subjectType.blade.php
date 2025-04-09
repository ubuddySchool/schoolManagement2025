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
                            <h6 class="form-check-label mb-0 text-center">Subjects</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Mendatory</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Optional</h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="form-check-label mb-0 text-center">Additional</h6>
                        </div>
                    </div> --}}


                    <?php foreach ($subjects as $subjectIndex => $subject): ?> 
                        <div class="row mb-2 align-items-start" data-index="<?= $subjectIndex ?>">
                            <div class="col-md-2 col-sm-3">
                                <label class="form-check-label mb-0 fw-bold"><?= $subject ?></label>
                            </div>

                            <div class="col-md-10">
                                <div class="row my-1">
                                    <?php 
                                        $options = ['Mendatory', 'Optional', 'Additional'];
                                        foreach ($options as $optionIndex => $option): 
                                            $radioId = "radio_{$subjectIndex}_{$optionIndex}";
                                    ?>
                                        <div class="col-2">
                                            <div class="form-check d-flex align-items-center justify-content-center gap-2">
                                                <input class="form-check-input m-0" type="radio"
                                                    name="level[<?= $subject ?>]" 
                                                    id="<?= $radioId ?>" 
                                                    value="<?= $option ?>">
                                                <label class="form-check-label mb-0" for="<?= $radioId ?>">
                                                    <?= $option ?>
                                                </label>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
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

