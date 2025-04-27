document.addEventListener('DOMContentLoaded', function () {
    // Ensure 'schooladminmyInput' exists before adding event listener
    const searchInput = document.getElementById('schooladminmyInput');
    if (searchInput) {
        searchInput.addEventListener('keyup', function () {
            let searchValue = this.value.toLowerCase();
            let rows = document.querySelectorAll('#schooladmindetailsTableBody tr');
            let noMatch = true;

            rows.forEach(row => {
                if (row.id === 'noRecordsMessage') return;

                let nameCell = row.cells[1];
                if (!nameCell) return;

                let name = nameCell.textContent.toLowerCase();
                if (name.includes(searchValue)) {
                    row.style.display = '';
                    noMatch = false;
                } else {
                    row.style.display = 'none';
                }
            });

            const noRecordsMessage = document.getElementById('noRecordsMessage');
            if (noRecordsMessage) {
                noRecordsMessage.style.display = noMatch ? '' : 'none';
            }
        });
    }

    // Phone number input field validation (if exists)
    const phoneInput = document.getElementById('phoneInputId');
    if (phoneInput) {
        phoneInput.setAttribute('pattern', '[0-9]{10,15}');
    }

    // Input restriction for only numbers (ensure input elements exist)
    const onlynumberInputs = document.getElementsByClassName('only_number');
    if (onlynumberInputs.length > 0) {
        Array.from(onlynumberInputs).forEach(input => {
            input.addEventListener('input', function (e) {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
        });
    }
});
