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
                                <a href="{{ route('basic-configuration.getSubject', ['id' => $ids]) }}" class="text-decoration-none text-dark me-2 backButton ">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign Subject Type</h3>
                            </div>                            
                        </div>
                    </div>

                    <form action="{{ route('basic-configuration.assignSubjectClass') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ids }}">
                        <input type="hidden" name="school_id" value="{{ $school->id }}">
                        <input type="hidden" name="session" value="{{ $academicYear->id }}">
                    
                        <div class="row my-4">
                            <div class="col-md-2">
                                <select class="form-select" name="selectedClass" id="class-select" data-url="{{ route('basic-configuration.get-subjects-by-class', ':id') }}">
                                    <option value="" disabled selected>Select Class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                    
                        <div id="subjects-container">
                            {{-- Subjects will be loaded here dynamically --}}
                        </div>
                    
                    </form>
                    
                    <script>
                        document.getElementById('class-select').addEventListener('change', function () {
                            const selectedClass = this.value;
                            const urlTemplate = this.dataset.url;
                            const url = urlTemplate.replace(':id', selectedClass);

                            fetch(url)
                                .then(response => response.text())
                                .then(html => {
                                    document.getElementById('subjects-container').innerHTML = html;
                                })
                                .catch(error => console.error('Error loading subjects:', error));
                        });

                    </script>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

