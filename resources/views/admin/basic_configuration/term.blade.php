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
                                <h3 class="page-title">Assign Terms</h3>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="row mt-4 mb-2 align-items-start section-group">                    
                        <div class="col-2">
                            <input class="form-control form-control-sm mb-0" type="text" placeholder="Enter Term" name="sections[]">
                        </div>
                    
                        <div class="col-1">
                            <button type="button" class="btn btn-primary btn-add-input">+</button>
                        </div>
                    </div>                    

                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="submitClass">Submit</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // ADD input field
        $('.btn-add-input').on('click', function (e) {
            e.preventDefault();
    
            const $row = $(this).closest('.section-group');
    
            const newField = $(`
                <div class="col-2 d-flex align-items-start gap-1 new-input">
                    <input class="form-control form-control-sm mb-1" type="text" placeholder="Enter Term" name="sections[]">
                    <button type="button" class="btn btn-danger btn-sm btn-remove-dynamic">-</button>
                </div>
            `);
    
            // Insert the new field before the button column
            $(this).closest('.col-1').before(newField);
        });
    
        // REMOVE input field
        $(document).on('click', '.btn-remove-dynamic', function () {
            $(this).closest('.new-input').remove();
        });
    });
    </script>
    
    

