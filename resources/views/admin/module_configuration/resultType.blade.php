@extends('admin.layouts.app')

@section('content')
    <div class="content container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow ">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col mb-2">
                                    <a href="{{ route('module-configuration.result') }}"
                                        class="text-decoration-none text-dark me-2 backButton p_8_10">
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
                            
                            foreach ($classes as $classIndex => $classLabel): 
                                $radioIdForGrade = "radio_{$classIndex}";
                            ?>
                            <fieldset class="mb-2 border p-3 pb-0 rounded">
                                <div class="row mb-2 align-items-start" data-index="<?= $classIndex ?>">
                                    <div class="col-md-2 col-sm-3">
                                        <label class="form-check-label mb-0 fw-bold"><?= $classLabel ?></label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="row my-1">
                                            <?php foreach ($markingTypes as $markingTypeIndex => $markingType): 
                                                // unique ID for each radio button
                                                $radioId = "radio_{$classIndex}_{$markingTypeIndex}";
                                            ?>
                                            <div class="col-md-6 col-sm-6 mb-2">
                                                <div class="form-check d-flex align-items-center gap-2">
                                                    <input class="form-check-input m-0" type="radio" id="<?= $radioId ?>"
                                                        name="subjects[<?= $classLabel ?>]" value="<?= $markingType ?>"
                                                        data-marking-value="<?= $markingType ?>"
                                                        data-class-index="<?= $classIndex ?>">

                                                    <label class="form-check-label mb-0" for="<?= $radioId ?>">
                                                        <?= $markingType ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none extra-grade-options" data-class-index="<?= $classIndex ?>" style="border-left: 1px solid #d3caca;">
                                        <div class="row my-1">
                                            <div class="col-md-2">
                                                <label for="">Input Type</label>
                                            </div>
                                            <div class="col-md-2 col-sm-5 mb-2">
                                                <div class="form-check d-flex align-items-center gap-2">
                                                    <input class="form-check-input m-0" type="radio"
                                                        id="<?= $radioIdForGrade ?>"
                                                        name="gradeTypeGrade[<?= $classLabel ?>]" value="">
                                                    <label class="form-check-label mb-0" for="<?= $radioIdForGrade ?>">
                                                        Grade
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-5 mb-2">
                                                <div class="form-check d-flex align-items-center gap-2">
                                                    <input class="form-check-input m-0" type="radio"
                                                        id="mark<?= $radioIdForGrade ?>"
                                                        name="gradeTypeGrade[<?= $classLabel ?>]" value="">
                                                    <label class="form-check-label mb-0" for="mark<?= $radioIdForGrade ?>">
                                                        Mark
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const radios = document.querySelectorAll('input[type="radio"][data-marking-value]');

        radios.forEach(radio => {
            radio.addEventListener("change", function() {
                const classIndex = this.getAttribute('data-class-index');
                const value = this.getAttribute('data-marking-value');

                const gradeSection = document.querySelector(
                    '.extra-grade-options[data-class-index="' + classIndex + '"]');

                if (value === 'Grade' || value === 'grade') {
                    gradeSection.classList.remove('d-none');
                } else {
                    gradeSection.classList.add('d-none');
                }
            });
        });
    });
</script>
