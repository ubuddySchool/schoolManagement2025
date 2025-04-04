@extends('layouts.app')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Syllabus Edit</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col-12 col-sm-2 text-center download-grp">
                            <label class="m-0">2025-26</label>
                        </div>
                        <div class="col-12 col-sm-3">
                            <h6>Class</h6>
                            <input value="1" disabled style="padding-left:10px;">
                        </div>
                        <div class="col-12 col-sm-3">
                            <h6>Section</h6>
                            <input value="A" disabled style="padding-left:10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 50px;">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <!--<h3 class="page-title">Subjects</h3>-->
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <form method="post" action="">
                            <div class="row">

                                <div class="form-group col-6">
                                    <div style="padding: 1rem; box-shadow: 0 0 5px 0; border-radius: 10px;">
                                        <label for="reminderDate">Other </label>
                                        <textarea rows="5" cols="5" id="editor31" class="form-control" name="syllabusEdit40">oral </textarea>
                                    </div>
                                </div>

                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#editor31'), {
                                            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                                        })
                                        .then(editor => {
                                            window.editor = editor;
                                        })
                                        .catch(err => {
                                            console.error(err.stack);
                                        });
                                </script>
                            </div>

                            <div class="col-sm-12" style="margin-top:2rem;">
                                <input type="submit" class="btn btn-primary" name="syllabusSubmit" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


@endsection