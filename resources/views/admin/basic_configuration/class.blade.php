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
                                <a href="{{ route('basic-configuration.store') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Class</h3>
                            </div>
                        </div>
                    </div>

                    <?php
                    $labels = ['Pre-Primary', 'Primary', 'Nursery', 'K.G. I', 'K.G. II', 'L.K.G.', 'U.K.G.'];
                    ?>

                    <div class="row">
                        <?php foreach ($labels as $index => $label): ?>
                            <div class="col-md-2 col-sm-3 mb-2">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" type="checkbox" id="checkbox<?= $index ?>">
                                    <label class="form-check-label mb-0" for="checkbox<?= $index ?>">
                                        <?= $label ?>
                                    </label>
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
</div>
@endsection