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
                                    <a href="{{ route('module-configuration.moduleconfig') }}"
                                        class="text-decoration-none text-dark me-2 backButton ">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <h3 class="page-title">Admit Card</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mb-3">
                @foreach ([1 => 'admit-card_1.jpg', 2 => 'admit_card.webp', 3 => 'admit_car-2.png', 4 => 'admit-card_1.jpg'] as $value => $filename)
                <div class="col-xl-3 col-sm-6 col-12 d-flex align-items-center">
                    <label class="image-card-layout">
                        <input type="checkbox" name="selected_images[]" value="{{ $value }}"
                            class="image-checkbox">
                        <img src="{{ asset('assets/img/layout/' . $filename) }}" alt="Image {{ $value }}"
                            class="img-fluid image-select">
                    </label>
                </div>
                @endforeach
            </div>

            <div class="row mt-2">                
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="submitClass">Save & Lock</button>
                </div>
            </div>
            
        </div>
    </div>
@endsection
