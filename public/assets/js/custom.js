
$(document).ready(function () {
    // ADD input field
    $('.btn-add-input').on('click', function (e) {
        e.preventDefault();

        const $row = $(this).closest('.row');
        const index = $row.data('index');

        // Create new input with remove button
        const newField = $(`
            <div class="col-1 d-flex align-items-start gap-1 new-input">
                <input class="form-control form-control-sm mb-1" type="text" placeholder="Enter" name="sections[${index}][]">
                <button type="button" class="btn btn-danger btn-sm btn-remove-dynamic">-</button>
            </div>
        `);

        // Insert before the add button col
        $row.find('.btn-add-input').closest('.col-1').before(newField);
    });

    // REMOVE input field
    $(document).on('click', '.btn-remove-dynamic', function () {
        $(this).closest('.new-input').remove();
    });
});