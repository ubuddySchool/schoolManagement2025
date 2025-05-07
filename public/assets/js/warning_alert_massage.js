// assgin module alert
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('assignModuleForm');
    if (!form) return;

    const lockButton = form.querySelector('button[name="status"][value="1"]');
    if (!lockButton) return;

    const schoolName = form.dataset.schoolName;
    const academicSession = form.dataset.academicSession;

    lockButton.addEventListener('click', function (event) {
        event.preventDefault();

        Swal.fire({
            title: 'Confirm Assign Module',
            html: `
                <p>Are you sure you want to save and lock the assigned modules for <strong>${schoolName}</strong> for the <strong>${academicSession}</strong> session?</p>
                <p>This action cannot be undone.</p>
            `,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Save & Lock',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});


// set session alert

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('confirmsetSessionForm');

    if (!form) return;

    // Prevent duplicate event listeners
    if (form.dataset.confirmationAttached === 'true') return;

    form.dataset.confirmationAttached = 'true'; // Mark as attached

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to confirm this session?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm it!',
            customClass: {
                popup: 'unique-session-popup'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});

// student form assign module 

document.addEventListener('DOMContentLoaded', function () {
    const lockButton = document.getElementById('saveAndLock_student_formButton');
    const form = document.getElementById('assign_Student_form_details');

    if (lockButton && form) {
        lockButton.addEventListener('click', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to save and lock this form?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, continue!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'save_and_lock';
                    hiddenInput.value = '1';
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    }
});
