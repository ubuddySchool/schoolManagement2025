@extends('admin.layouts.app')

@section('content')

<div class="content container-fluid">

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-sub-header">
                <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
            </div>
        </div>
    </div>
</div>

</div>

    @endsection
