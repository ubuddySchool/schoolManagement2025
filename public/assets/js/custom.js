// Add Section JS Start

$(document).ready(function () {
    
    $('.btn-add-input').on('click', function (e) {
        e.preventDefault();
        
        const $row = $(this).closest('.row');
        const index = $row.data('class-id');

        const newField = $(`
            <div class="col-1 d-flex align-items-start gap-1 new-input">
                <input class="form-control form-control-sm mb-1" 
                       type="text" 
                       placeholder="Enter" 
                       name="sections[${index}][]">
                <button type="button" 
                        class="btn btn-danger btn-sm btn-remove-dynamic">-</button>
            </div>
        `);

        // Insert the new field before the button column
        $row.find('.btn-add-input').closest('.col-1').before(newField);
    });

    // Remove section input
    $(document).on('click', '.btn-remove-dynamic', function () {
        $(this).closest('.new-input').remove();
    });
});

// Add Section JS End

$(document).ready(function () {
    $('.btn-add-row').on('click', function () {
        const $clone = $('.grade-row:first').clone();
        $clone.find('input').val('');
        const removeBtn = `
            <div class="col-sm-1 d-flex align-items-start">
                <button type="button" class="btn btn-danger btn-remove-row">-</button>
            </div>
        `;
        $clone.find('.btn-remove-row').closest('.col-sm-1').remove();
        $clone.append(removeBtn);
        $('#gradeRows').append($clone);
    });
    $(document).on('click', '.btn-remove-row', function () {
        $(this).closest('.grade-row').remove();
    });
});



$(document).ready(function () {

    $('[id^="splitPattern_2_"], [id^="splitPattern_3_"], [id^="splitPattern_1_"], [id^="splitPattern_1_head"], [id^="splitPattern_2_head"], [id^="splitPattern_3_head"]').hide();

    $('select[name="splitPattern"]').on('change', function () {
        const selected = $(this).val();

        $('[data-index]').each(function () {
            const index = $(this).data('index');

            $('#splitPattern_1_' + index).hide();
            $('#splitPattern_2_' + index).hide();
            $('#splitPattern_3_' + index).hide();

            $('#splitPattern_1_head').hide();
            $('#splitPattern_2_head').hide();
            $('#splitPattern_3_head').hide();

            if (selected === "2") {
                $('#splitPattern_2_head').show();
                $('#splitPattern_2_' + index).show();
            } else if (selected === "3") {
                $('#splitPattern_3_head').show();
                $('#splitPattern_3_' + index).show();
            } else if (selected === "1") {
                $('#splitPattern_1_head').show();
                $('#splitPattern_1_' + index).show();
            }
        });
    });
});


$(document).ready(function () {
    // Initially hide all splitPattern blocks
    $('[class^="splitPattern_"]').hide();

    // Handle splitPattern select change
    $('select[name="splitPattern"]').on('change', function () {
        var selected = $(this).val();

        // Hide all
        $('[class^="splitPattern_"]').hide();

        // Show the selected pattern divs
        $('.splitPattern_' + selected).show();

        // Uncheck "Select All" whenever the pattern is changed
        $('#selectAll').prop('checked', false);
    });

    // Handle Select All checkbox
    $('#selectAll').on('change', function () {
        var isChecked = $(this).is(':checked');
        var selectedPattern = $('select[name="splitPattern"]').val();

        if (!selectedPattern) {
            alert("Please select a split pattern first.");
            $(this).prop('checked', false);
            return;
        }

        // Get the first subject row's input values based on the selected pattern
        var firstInputs = $('#splitPattern_' + selectedPattern + '_0 input');

        $('[data-index]').each(function (i) {
            if (i === 0) return; // Skip the first row (already filled)

            var currentRowInputs = $('#splitPattern_' + selectedPattern + '_' + i + ' input');

            firstInputs.each(function (index) {
                var value = $(this).val();
                if (isChecked) {
                    currentRowInputs.eq(index).val(value);
                } else {
                    currentRowInputs.eq(index).val('');
                }
            });
        });
    });
});


// Cropping Images Script start

let cropper;
let originalFile;

const $input = $('#studentImageInput');
const $modal = $('#cropModal');
const $preview = $('#cropImagePreview');
const $fileNameDisplay = $('#imageFileName');

$input.on('change', function (e) {
    originalFile = e.target.files[0];
    if (!originalFile) return;

    const reader = new FileReader();
    reader.onload = function (event) {
        $preview.attr('src', event.target.result);
        $modal.show();

        $preview.on('load', function () {
            if (cropper) cropper.destroy();
            cropper = new Cropper($preview[0], {
                aspectRatio: 1,
                viewMode: 1,
                autoCropArea: 1,
            });
        });
    };
    reader.readAsDataURL(originalFile);
});

$('#cropBtn').on('click', function () {
    const canvas = cropper.getCroppedCanvas({
        width: 230,
        height: 230
    });

    canvas.toBlob(function (blob) {
        const croppedFile = new File([blob], originalFile.name, { type: originalFile.type });

        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(croppedFile);
        $input[0].files = dataTransfer.files;

        $fileNameDisplay.text(croppedFile.name);
        $modal.hide();
    }, originalFile.type);
});


document.addEventListener('DOMContentLoaded', function () {
    const closeBtn = document.getElementById('closeCropModal');
    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            document.getElementById('cropModal').style.display = 'none';
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
        });
    }
});
 
// Cropping Images Script End

// Assign class JS Start

document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('.form-check-input');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const index = this.id.replace('checkbox', '');
            const inputDiv = document.getElementById('input' + index);
            
            if (this.checked) {
                inputDiv.style.display = 'block';
            } else {
                inputDiv.style.display = 'none';
            }
        });
    });
});
// Assign class JS End