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
                                <a href="{{ route('module-configuration.result') }}" class="text-decoration-none text-dark me-2 backButton ">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Grade</h3>
                            </div>                            
                        </div>
                    </div>

                    <form id="gradeForm" method="post">
                        <div class="row">
                            <div class="col-sm-11"></div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-success btn-add-row">+</button>
                            </div>                            
                        </div>
                        
                        <div id="gradeRows">
                            <div class="row my-3 grade-row">
                                <div class="col-sm-2">
                                    <input type="text" name="minMarks[]" class="form-control" placeholder="Min Marks">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="maxMarks[]" class="form-control" placeholder="Max Marks">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="grade[]" class="form-control" placeholder="Grade">
                                </div>
                                {{-- <div class="col-sm-2">
                                    <input type="text" name="remark[]" class="form-control" placeholder="Remark">
                                </div> --}}
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
