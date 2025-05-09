@foreach ($subjects as $subjectIndex => $subject)
    <div class="row mb-2 align-items-start" data-index="{{ $subjectIndex }}">
        <div class="col-md-2 col-sm-3">
            <label class="form-check-label mb-0 fw-bold">{{ $subject->subject_name }}</label>
        </div>
        <input type="hidden" name="school_id" value="{{ $subject->id }}">

        <div class="col-md-10">
            <div class="row my-1">
                @php
                    $options = ['Mendatory', 'Optional', 'Additional'];
                @endphp

                @foreach ($options as $optionIndex => $option)
                    @php
                        $radioId = "radio_{$subjectIndex}_{$optionIndex}";
                    @endphp

                    <div class="col-2">
                        <div class="form-check d-flex align-items-center justify-content-center gap-2">
                            <input class="form-check-input m-0" type="radio"
                                   name="level[{{ $subject->id }}]"
                                   id="{{ $radioId }}"
                                   value="{{ $option }}">
                            <label class="form-check-label mb-0" for="{{ $radioId }}">
                                {{ $option }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
@endforeach

<div class="col-12 d-flex justify-content-end mt-4 gap-2">
    <button type="submit" class="btn btn-primary btn-sm" name="status" value="0">Save</button>
    <button type="submit" class="btn btn-danger btn-sm" name="status" value="1">Save & Lock</button>
</div>