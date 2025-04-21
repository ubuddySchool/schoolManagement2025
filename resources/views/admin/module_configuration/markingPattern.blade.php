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
                                    <h3 class="page-title">Assign Marks Pattern</h3>
                                </div>
                            </div>
                        </div>

                        <?php
                        $terms = ['Term I', 'Term II', 'Half Yearly', 'Annualy', 'FA I', 'FA II', 'FA III', 'SA I', 'SA II'];
                        $classes = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
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
                            <div class="col-md-2">
                                <select name="class" class="form-select">
                                    <option value="" disabled selected>Select Term</option>
                                    <?php foreach ($terms as $term): ?>
                                        <option value="<?= $term ?>"><?= $term ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="splitPattern" class="form-select">
                                    <option value="" disabled selected>Select Split</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-1">
                                <input type="checkbox" name="selectAll" id="selectAll">
                                <label for="selectAll">Select All</label>
                            </div>
                        </div>
                        <form id="gradeForm" method="post">

                            <?php
                            $subjects = ['Hindi', 'English', 'Mathematics', 'G.K.', 'E.V.S.', 'Drawing', 'Art & Craft'];
                            $markingTypes = ['Hindi', 'English', 'Mathematics', 'Art & Craft'];
                            ?>

                            <div class="row my-1" id="splitPattern_1_head">
                                <div class="col-md-2 col-sm-3"></div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="overall_head" 
                                        placeholder="Overall Head" 
                                        required>
                                </div>
                            </div>
                            
                            <div class="row my-1" id="splitPattern_2_head">
                                <div class="col-md-2 col-sm-3"></div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="internal_head" 
                                        placeholder="Internal Head" 
                                        required>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="external_head" 
                                        placeholder="External Head" 
                                        required>
                                </div>
                            </div>

                            <div class="row my-1" id="splitPattern_3_head">
                                <div class="col-md-2 col-sm-3"></div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="s1_head" 
                                        placeholder="S1 Head" 
                                        required>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="s2_head" 
                                        placeholder="S2 Head" 
                                        required>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <input type="text" 
                                        class="form-control" 
                                        name="s3_head" 
                                        placeholder="S3 Head" 
                                        required>
                                </div>
                            </div>
                            <hr>

                            <?php foreach ($subjects as $subjectIndex => $subjectLabel): ?>
                            <div class="row align-items-start" data-index="<?= $subjectIndex ?>">
                                
                                <div class="col-md-2 col-sm-3">
                                    <label class="form-check-label mb-0 fw-bold">
                                        <?= htmlspecialchars($subjectLabel) ?>
                                    </label>
                                </div>

                                <div class="col-md-10 splitPattern_1" id="splitPattern_1_<?= $subjectIndex ?>">
                                    <div class="row my-1">
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][overall_min]" 
                                                placeholder="Overall Min" 
                                                required>
                                        </div>

                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][overall_max]" 
                                                placeholder="Overall Max" 
                                                required>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-10 splitPattern_2" id="splitPattern_2_<?= $subjectIndex ?>">
                                    <div class="row my-1">
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][int_max]" 
                                                placeholder="Internal Max" 
                                                required>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][int_min]" 
                                                placeholder="Internal Min" 
                                                required>
                                        </div>                                        
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                            class="form-control" 
                                            name="subjects[<?= $subjectIndex ?>][ext_max]" 
                                            placeholder="External Max" 
                                            required>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][ext_min]" 
                                                placeholder="External Min" 
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-10 splitPattern_3" id="splitPattern_3_<?= $subjectIndex ?>">
                                    <div class="row my-1">
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s1_max]" 
                                                placeholder="S1 Max" 
                                                required>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s1_min]" 
                                                placeholder="S1 Min" 
                                                required>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s2_max]" 
                                                placeholder="S2 Max" 
                                                required>
                                        </div>

                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s2_min]" 
                                                placeholder="S2 Min" 
                                                required>
                                        </div>

                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s3_max]" 
                                                placeholder="S3 Max" 
                                                required>
                                        </div>

                                        <div class="col-md-2 col-sm-3">
                                            <input type="text" 
                                                class="form-control" 
                                                name="subjects[<?= $subjectIndex ?>][s3_min]" 
                                                placeholder="S3 Min" 
                                                required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <?php endforeach; ?>




                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="submitClass">Save & Lock</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

