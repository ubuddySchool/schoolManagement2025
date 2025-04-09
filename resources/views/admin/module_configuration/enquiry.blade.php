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
                                <a href="{{ route('module-configuration.moduleconfig') }}" class="text-decoration-none text-dark me-2 backButton ">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Enquiry Configuration</h3>
                            </div>                            
                        </div>
                    </div>                                       
                    <?php
                    $classes = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                    $subjects = ['Registration Fees','Registration Form','Admission Fee','Admission Form'];
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
                 


                    <?php
                    $options = ['ON','Off']; // Checkbox options for each subject
                    ?>

                    <?php foreach ($subjects as $subjectIndex => $subject): ?> 
                        <div class="row mb-2 align-items-start" data-index="<?= $subjectIndex ?>">
                            <!-- Subject label -->
                            <div class="col-md-2 col-sm-3">
                                <label class="form-check-label mb-0 fw-bold"><?= $subject ?></label>
                            </div>

                            <div class="col-md-2 col-sm-3">
                            <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
</div>
                                    <div class="form-check form-switch d-flex align-items-center gap-2">
                                        <label class="form-check-label mb-0" for="">
                                          ON
                                        </label>
                                        <input class="form-check-input m-0"
                                            type="checkbox"
                                            id=""
                                            name="subject"
                                            value=""
                                            role="switch">
                                        <label class="form-check-label mb-0" for="">
                                          OFF
                                        </label>
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
