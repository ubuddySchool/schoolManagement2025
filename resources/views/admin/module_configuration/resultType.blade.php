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
                                    <a href="{{ route('module-configuration.result') }}"
                                        class="text-decoration-none text-dark me-2 backButton ">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Assign Result Pattern</h3>
                                </div>
                            </div>
                        </div>

                        <form id="gradeForm" method="post">

                            <?php
                            $classes = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                            $markingTypes = ['Grade', 'Marking'];
                            ?>

                            <?php foreach ($classes as $classIndex => $classLabel): ?>
                            <div class="row mb-2 align-items-start" data-index="<?= $classIndex ?>">
                                <div class="col-md-2 col-sm-3">
                                    <label class="form-check-label mb-0 fw-bold"><?= $classLabel ?></label>
                                </div>

                                <div class="col-md-10">
                                    <div class="row my-1">
                                        <?php foreach ($markingTypes as $markingTypeIndex => $markingType): 
                                            // unique ID for each radio button
                                            $radioId = "radio_{$classIndex}_{$markingTypeIndex}";
                                        ?>
                                        <div class="col-md-2 col-sm-3 mb-2">
                                            <div class="form-check d-flex align-items-center gap-2">
                                                <input class="form-check-input m-0" type="radio" 
                                                    id="<?= $radioId ?>"
                                                    name="subjects[<?= $classLabel ?>]"
                                                    value="<?= $markingType ?>">
                                                <label class="form-check-label mb-0" for="<?= $radioId ?>">
                                                    <?= $markingType ?>
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
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
