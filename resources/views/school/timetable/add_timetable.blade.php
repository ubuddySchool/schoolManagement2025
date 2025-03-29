@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th, td {
        padding: 0px;
        text-align: center;
    }

    button {
        padding: 5px 10px;
        cursor: pointer;
        font-size: 14px;
    }

    button:hover {
        background-color: #f0f0f0;
    }

    input {
        width: 100%;
        padding: 5px;
        text-align: center;
        box-sizing: border-box;
    }

    /* Modal Styling */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        /* z-index: 1; */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.4);
        overflow: auto;
    }
    .modal-content {
        background-color: white;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
    }
    .modal-header, .modal-footer {
        padding: 10px 0;
        text-align: center;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        border-radius: 50%;
        border: 1px solid grey;
        padding: 0px 5px;
    }
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        table-layout: fixed;
    }

    thead th {
        position: sticky;
        top: 0;
        background-color: #fff;
        z-index: 1;
        width: 150px;
        border: 1px solid #ccc;
    }

    th:nth-child(1), td:nth-child(1) {
        position: sticky;
        left: 0; 
        background-color: #fff; 
        z-index: 1;
    }

    /* Optional: Add a scroll for the table */
    .table-container {
        overflow-x: auto;
        max-width: 100%;
    }

    .dateDragHandle {
        cursor: move;
        color: #666;
        margin-right: 5px;
    }

    .dragging {
        opacity: 0.5;
        background-color: #f0f0f0;
    }

    .dateCell input {
        width: 150px;
    }

    .dayCell input {
        width: 100px;
    }
    
    .action-buttons {
        display: flex;
        gap: 5px;
    }
    
    .add-date-below {
        color: green;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<div class="content container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Time Table</h3>
                            </div>
                            
                            <div class="col justify-content-end gap-2">
                                <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#date-change-modal">ADD Date</button>
                                <button type="button" onclick="openClassModal()" class="btn btn-primary">Add/Remove Class</button>
                            </div>

                        </div>
                    </div>

                    <form onsubmit="return false;">
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container">
                                    <div class="col-lg-12 grid-margin stretch-card border">
                                        <div class="card">
                                            <div class="card-body" style="padding: 0;">
                                                <div class="table-responsive">
                                                  
                                                    <table id="dynamicTable" border="1">
                                                        <thead>
                                                            <tr class="bg-dark">
                                                                <th>Date</th>
                                                                <th>Day</th>
                                                                <!-- Class columns will be added dynamically -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Rows will be added dynamically -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Modal for Class Selection -->
                    <div id="classModal" class="modal"> 
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" onclick="closeClassModal()">&times;</span>
                                <h2>Select Class</h2>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Master checkbox to select/unselect all -->
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="selectAll" onclick="toggleCheckboxes(this)">
                                                    <label class="form-check-label" for="selectAll">Select All</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="ukg" value="UKG">
                                                    <label class="form-check-label" for="ukg">UKG</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="first" value="First">
                                                    <label class="form-check-label" for="first">First</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="second" value="Second">
                                                    <label class="form-check-label" for="second">Second</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="third" value="Third">
                                                    <label class="form-check-label" for="third">Third</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="fourth" value="Fourth">
                                                    <label class="form-check-label" for="fourth">Fourth</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="fifth" value="Fifth">
                                                    <label class="form-check-label" for="fifth">Fifth</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="sixth" value="Sixth">
                                                    <label class="form-check-label" for="sixth">Sixth</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="seventh" value="Seventh">
                                                    <label class="form-check-label" for="seventh">Seventh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="eighth" value="Eighth">
                                                    <label class="form-check-label" for="eighth">Eighth</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="ninth" value="Ninth">
                                                    <label class="form-check-label" for="ninth">Ninth</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="tenth" value="Tenth">
                                                    <label class="form-check-label" for="tenth">Tenth</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="eleventh" value="Eleventh">
                                                    <label class="form-check-label" for="eleventh">Eleventh</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input class-checkbox" id="twelfth" value="Twelfth">
                                                    <label class="form-check-label" for="twelfth">Twelfth</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info text-light" onclick="updateClassColumns()">Update Classes</button>
                                <button type="button" class="btn btn-danger" onclick="closeClassModal()">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Date Change Modal -->
<div id="date-change-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 90%" id="printFullContent">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Manage Dates</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <div class="mb-3">
                    <button type="button" class="btn btn-primary" onclick="addDateRow()">Add New Date</button>
                </div> -->
                <div class="table-responsive">
                    <table id="dateTable" class="table border-0 star-student table-hover table-center mb-0 table-striped modaltable">
                        <thead class="student-thread">
                            <tr>
                                <th style="width: 50px;"></th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="dateTableBody">
                            <!-- Dates will be added here dynamically -->
                            <tr id="dateRow_1" draggable="true" ondragstart="dragStart(event)" ondragover="dragOver(event)" ondrop="drop(event)">
                                <td><i class="fas fa-grip-vertical dateDragHandle"></i></td>
                                <td class="dateCell"><input type="date" id="date_1" class="form-control" value="2024-09-11"></td>
                                <td class="dayCell"><input type="text" id="day_1" class="form-control" value="Friday"></td>
                                <td class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-success add-date-below" onclick="addDateBelow(this)">+</button>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteDateRow(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="saveDates()">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Global variables
    let draggedItem = null;
    let dateRowCounter = 2; // Start from 2 since we already have row 1
    
    // Open the class modal
    function openClassModal() {
        // First, update checkbox states based on current table headers
        updateClassCheckboxes();
        document.getElementById('classModal').style.display = 'block';
    }

    // Close the class modal
    function closeClassModal() {
        document.getElementById('classModal').style.display = 'none';
    }
    
    // Update checkboxes based on existing table headers
    function updateClassCheckboxes() {
        // Get all class checkboxes
        const checkboxes = document.querySelectorAll('.class-checkbox');
        
        // Get all column headers from the table (excluding Date and Day columns)
        const table = document.getElementById('dynamicTable');
        const headerRow = table.rows[0];
        const headers = [];
        
        // Start from index 2 to skip date and day columns
        for (let i = 2; i < headerRow.cells.length; i++) {
            headers.push(headerRow.cells[i].textContent.trim());
        }
        
        // Update each checkbox based on whether its class exists in the table
        checkboxes.forEach(checkbox => {
            checkbox.checked = headers.includes(checkbox.value);
        });
        
        // Update "Select All" checkbox state
        const selectAllCheckbox = document.getElementById('selectAll');
        selectAllCheckbox.checked = checkboxes.length > 0 && Array.from(checkboxes).every(cb => cb.checked);
    }

    // Functions for drag and drop
    function dragStart(event) {
        draggedItem = event.target.closest('tr');
        draggedItem.classList.add('dragging');
    }
    
    function dragOver(event) {
        event.preventDefault();
    }
    
    function drop(event) {
        event.preventDefault();
        
        // Find the closest parent tr element to the drop target
        let targetRow = event.target.closest('tr');
        
        if (targetRow && draggedItem !== targetRow) {
            // Get the parent tbody
            let tbody = document.getElementById('dateTableBody');
            
            // Get the position of the target row
            let targetRowIndex = Array.from(tbody.children).indexOf(targetRow);
            let draggedRowIndex = Array.from(tbody.children).indexOf(draggedItem);
            
            // Insert the dragged row before or after the target row
            if (draggedRowIndex < targetRowIndex) {
                tbody.insertBefore(draggedItem, targetRow.nextSibling);
            } else {
                tbody.insertBefore(draggedItem, targetRow);
            }
        }
        
        draggedItem.classList.remove('dragging');
        draggedItem = null;
    }
    
    // Add a new date row to the date modal
    function addDateRow() {
        let tbody = document.getElementById('dateTableBody');
        let newRow = document.createElement('tr');
        addDateRowWithContent(tbody, newRow, dateRowCounter);
        dateRowCounter++;
    }
    
    // Add a new date below a specific row
    function addDateBelow(button) {
        let currentRow = button.closest('tr');
        let tbody = document.getElementById('dateTableBody');
        let newRow = document.createElement('tr');
        
        // Insert the new row after the current row
        if (currentRow.nextSibling) {
            tbody.insertBefore(newRow, currentRow.nextSibling);
        } else {
            tbody.appendChild(newRow);
        }
        
        addDateRowWithContent(tbody, newRow, dateRowCounter);
        dateRowCounter++;
    }
    
    // Helper function to add content to a date row
    function addDateRowWithContent(tbody, row, rowId) {
        // Set attributes for drag and drop
        row.id = 'dateRow_' + rowId;
        row.draggable = true;
        row.setAttribute('ondragstart', 'dragStart(event)');
        row.setAttribute('ondragover', 'dragOver(event)');
        row.setAttribute('ondrop', 'drop(event)');
        
        // Create the row HTML
        row.innerHTML = `
            <td><i class="fas fa-grip-vertical dateDragHandle"></i></td>
            <td class="dateCell"><input type="date" id="date_${rowId}" class="form-control" value=""></td>
            <td class="dayCell"><input type="text" id="day_${rowId}" class="form-control" value=""></td>
            <td class="action-buttons">
                <button type="button" class="btn btn-sm btn-success add-date-below" onclick="addDateBelow(this)">+</button>
                <button type="button" class="btn btn-sm btn-danger" onclick="deleteDateRow(this)">Delete</button>
            </td>
        `;
        
        // Auto-calculate day when date is selected
        const dateInput = row.querySelector('input[type="date"]');
        dateInput.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            if (!isNaN(selectedDate.getTime())) {
                const dayOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                const dayName = dayOfWeek[selectedDate.getDay()];
                this.closest('tr').querySelector('input[type="text"]').value = dayName;
            }
        });
    }
    
    // Delete a date row from the date modal
    function deleteDateRow(button) {
        let row = button.closest('tr');
        row.parentNode.removeChild(row);
    }
    
    // Save all dates to the main table
    function saveDates() {
        // Get all date rows from the modal
        const dateRows = document.querySelectorAll('#dateTableBody tr');
        
        // Clear existing rows in the main table (except header)
        const mainTable = document.getElementById('dynamicTable');
        const tbody = mainTable.querySelector('tbody');
        tbody.innerHTML = '';
        
        // Get number of columns in the header row (date, day, plus class columns)
        const colCount = mainTable.rows[0].cells.length;
        
        // Add each date from the modal to the main table
        dateRows.forEach(function(dateRow) {
            const dateValue = dateRow.querySelector('.dateCell input').value;
            const dayValue = dateRow.querySelector('.dayCell input').value;
            
            // Create a new row in the main table
            const newRow = document.createElement('tr');
            
            // Create date cell
            const dateCell = document.createElement('td');
            const dateInput = document.createElement('input');
            dateInput.type = 'date';
            dateInput.value = dateValue;
            dateCell.appendChild(dateInput);
            newRow.appendChild(dateCell);
            
            // Create day cell
            const dayCell = document.createElement('td');
            const dayInput = document.createElement('input');
            dayInput.type = 'text';
            dayInput.value = dayValue;
            dayCell.appendChild(dayInput);
            newRow.appendChild(dayCell);
            
            // Add empty cells for each class column
            for (let i = 2; i < colCount; i++) {
                const cell = document.createElement('td');
                const input = document.createElement('input');
                input.type = 'text';
                input.value = '';
                cell.appendChild(input);
                newRow.appendChild(cell);
            }
            
            // Add the row to the main table
            tbody.appendChild(newRow);
        });
        
        // Close the modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('date-change-modal'));
        if (modal) {
            modal.hide();
        }
    }

    // Update class columns based on checkboxes
    function updateClassColumns() {
        const table = document.getElementById("dynamicTable");
        const headerRow = table.rows[0];
        
        // Get all current classes from the table (start from index 2 to skip date, day)
        const currentClasses = [];
        for (let i = 2; i < headerRow.cells.length; i++) {
            currentClasses.push(headerRow.cells[i].textContent.trim());
        }
        
        // Get selected classes from checkboxes
        const selectedClasses = [];
        document.querySelectorAll('.class-checkbox').forEach(checkbox => {
            if (checkbox.checked) {
                selectedClasses.push(checkbox.value);
            }
        });
        
        // Rebuild table header with Date, Day and selected classes
        // First, keep only the Date and Day columns
        while (headerRow.cells.length > 2) {
            headerRow.deleteCell(2);
        }
        
        // Rebuild data rows with Date, Day and selected classes
        const dataRows = table.querySelectorAll('tbody tr');
        dataRows.forEach(row => {
            while (row.cells.length > 2) {
                row.deleteCell(2);
            }
        });
        
        // Add columns for selected classes
        selectedClasses.forEach(className => {
            // Add to header
            const newHeaderCell = document.createElement("th");
            newHeaderCell.textContent = className;
            headerRow.appendChild(newHeaderCell);
            
            // Add cell to each data row
            dataRows.forEach(row => {
                const newCell = document.createElement('td');
                const input = document.createElement('input');
                input.type = 'text';
                input.value = '';
                newCell.appendChild(input);
                row.appendChild(newCell);
            });
        });
        
        closeClassModal();
    }

    // Initialize the page
    document.addEventListener('DOMContentLoaded', function() {
        // First, add a sample row to the main table if it's empty
        const table = document.getElementById("dynamicTable");
        if (table.querySelectorAll('tbody tr').length === 0) {
            const tbody = table.querySelector('tbody');
            const newRow = document.createElement('tr');
            
            // Add date cell
            const dateCell = document.createElement('td');
            const dateInput = document.createElement('input');
            dateInput.type = 'date';
            dateInput.value = '';
            dateCell.appendChild(dateInput);
            newRow.appendChild(dateCell);
            
            // Add day cell
            const dayCell = document.createElement('td');
            const dayInput = document.createElement('input');
            dayInput.type = 'text';
            dayInput.value = '';
            dayCell.appendChild(dayInput);
            newRow.appendChild(dayCell);
            
            // Add the row
            tbody.appendChild(newRow);
            
            // Set up date change event listener
            setupDateChangeListeners();
        }
        
        // Also check if UKG class exists, if not add it by default
        const headerRow = table.rows[0];
        if (headerRow.cells.length <= 2) {
            const newHeaderCell = document.createElement("th");
            newHeaderCell.textContent = "UKG";
            headerRow.appendChild(newHeaderCell);
            
            // Add UKG cell to each data row
            const dataRows = table.querySelectorAll('tbody tr');
            dataRows.forEach(row => {
                const newCell = document.createElement('td');
                const input = document.createElement('input');
                input.type = 'text';
                input.value = '';
                newCell.appendChild(input);
                row.appendChild(newCell);
            });
            
            // Make sure UKG checkbox is checked
            const ukgCheckbox = document.getElementById('ukg');
            if (ukgCheckbox) {
                ukgCheckbox.checked = true;
            }
        }
    });
    
    // Setup date change listeners for any date inputs
    function setupDateChangeListeners() {
        const dateInputs = document.querySelectorAll('input[type="date"]');
        dateInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                if (!isNaN(selectedDate.getTime())) {
                    const dayOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    const dayName = dayOfWeek[selectedDate.getDay()];
                    // Find the day input in the same row
                    const dayInput = this.closest('tr').querySelector('input[type="text"]');
                    if (dayInput) {
                        dayInput.value = dayName;
                    }
                }
            });
        });
    }

    function toggleCheckboxes(masterCheckbox) {
    // Get all checkboxes inside the modal
    var checkboxes = document.querySelectorAll('#classModal .form-check-input[type="checkbox"]');

    // Loop through all checkboxes and set their checked state to match the master checkbox
    checkboxes.forEach(function(checkbox) {
        if (checkbox !== masterCheckbox) {
            checkbox.checked = masterCheckbox.checked;
        }
    });
}
</script>

@endsection