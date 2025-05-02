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

function myadmin_configurationFunction() {
    let input = document.getElementById('myconfigfilterschoolInput'); 
    let filter = input.value.toLowerCase(); 
    let table = document.getElementById('adminsubconfig_id');
    let rows = table.getElementsByTagName('tr'); 
    let noMatch = true;

    for (let i = 1; i < rows.length; i++) { 
        let cells = rows[i].getElementsByTagName('td'); 
        
        if (cells.length > 0) {
            let nameCell = cells[2]; 
            if (nameCell) {
                let name = nameCell.textContent || nameCell.innerText;
                if (name.toLowerCase().indexOf(filter) > -1) {
                    rows[i].style.display = ""; 
                    noMatch = false; 
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    }

    // Show or hide the "No matching records found" message based on the result
    const noRecordsMessage = document.getElementById('noRecordsconfigadminMessage');
    if (noRecordsMessage) {
        noRecordsMessage.style.display = noMatch ? "" : "none"; // Show the message if no matches found
    }
}



function selectconfigurationAdmina(element, name, photo) {
    document.querySelectorAll('.crm-item').forEach(item => {
        item.classList.remove('bg-info', 'text-white');
    });

    element.classList.add('bg-info', 'text-white');
}

document.addEventListener('DOMContentLoaded', function () {
    const assignAdminconfigadminModal = document.getElementById('assignAdminconfigadminModal');

    if (assignAdminconfigadminModal) {
        assignAdminconfigadminModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const schoolId = button.getAttribute('data-school-id');
            const schoolName = button.getAttribute('data-school-name');

            document.getElementById('assignAdminconfigadminModalLabel').textContent = `Assign Admin - ${schoolName}`;
            document.getElementById('school_id').value = schoolId;
        });
    } 
});



function selectconfigurationAdmina(element, adminId) {
    document.querySelectorAll('.crm-item').forEach(item => {
        item.classList.remove('bg-info', 'text-white');
    });

    element.classList.add('bg-info', 'text-white');
    document.getElementById('admin_id').value = adminId;
}



function filterconfigsubAdmins() {
    const input = document.getElementById("searchconfigsAdmin");
    const filter = input.value.trim().toLowerCase();
    const adminItems = document.querySelectorAll("#configsubadminListsfilter .crm-item");
    const noRecordsMessage = document.getElementById("noRecordsconfigadminMessage");

    let matchCount = 0;

    adminItems.forEach(item => {
        const name = item.textContent.trim().toLowerCase();
        if (name.includes(filter)) {
            item.classList.remove('d-none');
            item.style.display = 'flex'; // ensure flex is reapplied
            matchCount++;
        } else {
            item.classList.add('d-none');
            item.style.display = 'none'; // explicitly hide
        }
    });

    if (noRecordsMessage) {
        noRecordsMessage.style.display = matchCount === 0 ? "block" : "none";
    }
}

function myassingingschoolconfigFunction() {
    const input = document.getElementById("assingschoolconfigasassearchInput");
    const filter = input.value.toLowerCase().trim();
    const rows = document.querySelectorAll("table tbody tr");
    const filterWords = filter.split(/\s+/);
    let visible = 0;
    let serial = 1;

    rows.forEach(row => {
        if (row.id === "noRecordsassinglistschoolMessage") return;

        const schoolName = row.cells[2]?.textContent.toLowerCase() || "";
        const matchesAllWords = filterWords.every(word => schoolName.includes(word));

        if (matchesAllWords) {
            row.style.display = "";
            row.cells[0].textContent = serial++;
            visible++;
        } else {
            row.style.display = "none";
        }
    });

    const noDataRow = document.getElementById("noRecordsassinglistschoolMessage");
    noDataRow.style.display = visible === 0 ? "" : "none";
}

