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
                                <a href="{{ route('basic-configuration.getTerms') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Terms to Class</h3>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="row my-4">
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0 text-center">Class Name</h6>
                        </div>
                        <div class="col-md-10">
                            <h6 class="form-check-label mb-0 text-center">Terms</h6>
                        </div>
                    </div>

                    <?php
                    $classes = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                    $subjects = ['Term I', 'Term II', 'Half Yearly', 'Annualy', 'FA I', 'FA II', 'FA III', 'SA I', 'SA II'];
                    ?>

                    <?php foreach ($classes as $classIndex => $classLabel): ?> 
                        <div class="row mb-2 align-items-start" data-index="<?= $classIndex ?>">
                            <div class="col-md-2 col-sm-3">
                                <label class="form-check-label mb-0 fw-bold"><?= $classLabel ?></label>
                            </div>

                            <div class="col-md-10">
                                <div class="row my-1">
                                    <?php foreach ($subjects as $subjectIndex => $subject): 
                                        // create a unique ID for each checkbox
                                        $checkboxId = "checkbox_{$classIndex}_{$subjectIndex}";
                                    ?>
                                        <div class="col-md-2 col-sm-3 mb-2">
                                            <div class="form-check d-flex align-items-center gap-2">
                                                <input class="form-check-input m-0" type="checkbox"
                                                    id="<?= $checkboxId ?>"
                                                    name="subjects[<?= $classLabel ?>][]"
                                                    value="<?= $subject ?>">
                                                <label class="form-check-label mb-0" for="<?= $checkboxId ?>">
                                                    <?= $subject ?>
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
