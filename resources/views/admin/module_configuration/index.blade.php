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
                                <a href="{{ route('configuration.index') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Module Configuration</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.enquiry') }}" class="config">Student Enquiry</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.enquiry') }}" class="config">Staff Enquiry</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.attendance') }}" class="config">Attendance</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.admitCard') }}" class="config">Admit Card</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.result') }}" class="config">Result</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.annualCalender') }}" class="config">Annual Calender</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.certificate') }}" class="config">Certificate</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.fee') }}" class="config">Fee</a></div>
                        <div class="col-sm-2 my-2"><a href="{{ route('module-configuration.transportation') }}" class="config">Transportation</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection