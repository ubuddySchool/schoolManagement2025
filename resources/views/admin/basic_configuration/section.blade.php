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
                                <a href="{{ route('basic-configuration.store') }}" class="text-decoration-none text-dark me-2 backButton p_8_10">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Section</h3>
                            </div>                            
                        </div>
                    </div>
                    
                    <?php
                    $labels = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                    ?>

                    <div class="row my-4">
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0">Class Name</h6>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <h6 class="form-check-label mb-0">Section</h6>
                        </div>
                    </div>

                    <?php foreach ($labels as $index => $label): ?>
                        <div class="row mb-2 align-items-start" data-index="<?= $index ?>">
                            <div class="col-md-2 col-sm-3">
                                <label class="form-check-label mb-0">
                                    <?= $label ?>
                                </label>
                            </div>

                            <div class="col-1">
                                <input class="form-control form-control-sm mb-1" type="text" placeholder="Enter" name="sections[<?= $index ?>][]" value="A">
                            </div>

                            <div class="col-1">
                                <button type="button" class="btn btn-primary btn-add-input">+</button>
                            </div>
                        </div>
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


