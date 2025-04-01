
document.addEventListener('DOMContentLoaded', function () {
	const mainCheckbox = document.querySelector('.form-check-input'); // Main checkbox
	const allCheckboxes = document.querySelectorAll('.check-tables input[type="checkbox"]');

	// Handle main checkbox click
	mainCheckbox.addEventListener('click', function () {
		allCheckboxes.forEach(checkbox => {
			checkbox.checked = mainCheckbox.checked;
		});
	});

	// Optional: To handle individual checkbox clicks (unchecking the main if not all are selected)
	allCheckboxes.forEach(checkbox => {
		checkbox.addEventListener('click', function () {
			if (!checkbox.checked) {
				mainCheckbox.checked = false;
			} else {
				const allChecked = Array.from(allCheckboxes).every(chk => chk.checked);
				mainCheckbox.checked = allChecked;
			}
		});
	});
});
