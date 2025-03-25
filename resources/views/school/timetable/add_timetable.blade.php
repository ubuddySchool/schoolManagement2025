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
        padding: 10px;
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

    .delete-btn {
        padding: 5px;
        font-size: 12px;
        color: white;
        background-color: red;
        border: none;
        cursor: pointer;
    }

    /* Modal Styling */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1;
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

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}

th:nth-child(2), td:nth-child(2) { /* Target the second column (Date) */
    position: sticky;
    left: 0; /* Freeze this column */
    background-color: #fff; /* Sticky column background */
    z-index: 1; /* Make sure the sticky column stays on top */
}

/* Optional: Add a scroll for the table */
.table-container {
    overflow-x: auto;
    max-width: 100%;
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
                            <!-- <div> -->
                                    <button type="button" onclick="addRow()" class="btn btn-info">Add Date</button>
                                    <button type="button" onclick="openModal()" class="btn btn-primary">Add Column</button>
                                <!-- </div> -->
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
                                                            <tr>
                                                                <th></th>
                                                                <th>Date</th>
                                                                <th>UKG <button type="button" class="delete-btn rounded" onclick="deleteColumn(1)">X</button></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><button type="button" class="delete-btn rounded" onclick="deleteRow(this)">X</button></td>
                                                                <td><input type="date" value=""></td>
                                                                <td><input type="text" value=""></td>
                                                            </tr>
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
            <span class="close" onclick="closeModal()">&times;</span>
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
                                <input type="checkbox" class="form-check-input" id="ukg" value="UKG">
                                <label class="form-check-label" for="ukg">UKG</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="first" value="First">
                                <label class="form-check-label" for="first">First</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="second" value="Second">
                                <label class="form-check-label" for="second">Second</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="third" value="Third">
                                <label class="form-check-label" for="third">Third</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fourth" value="Fourth">
                                <label class="form-check-label" for="fourth">Fourth</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fifth" value="Fifth">
                                <label class="form-check-label" for="fifth">Fifth</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="sixth" value="Sixth">
                                <label class="form-check-label" for="sixth">Sixth</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="seventh" value="Seventh">
                                <label class="form-check-label" for="seventh">Seventh</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="eighth" value="Eighth">
                                <label class="form-check-label" for="eighth">Eighth</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="ninth" value="Ninth">
                                <label class="form-check-label" for="ninth">Ninth</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="tenth" value="Tenth">
                                <label class="form-check-label" for="tenth">Tenth</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="eleventh" value="Eleventh">
                                <label class="form-check-label" for="eleventh">Eleventh</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="twelfth" value="Twelfth">
                                <label class="form-check-label" for="twelfth">Twelfth</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info text-light" onclick="addClassColumn()">Add Column</button>
            <button type="button" class="btn btn-danger" onclick="closeModal()">Cancel</button>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Open the modal
    function openModal() {
        document.getElementById('classModal').style.display = 'block';
    }

    // Close the modal
    function closeModal() {
        document.getElementById('classModal').style.display = 'none';
    }
    function addRow() {
    var table = document.getElementById("dynamicTable");
    var row = table.insertRow(-1); // Add a new row at the end of the table

    var deleteCell = row.insertCell(0);
    deleteCell.innerHTML = `<button class="delete-btn rounded" onclick="deleteRow(this)">X</button>`;

    var dateCell = row.insertCell(1);
    var dateInput = document.createElement("input");
    dateInput.type = "date";
    dateInput.value = ""; 
    dateCell.appendChild(dateInput);

    var colCount = table.rows[0].cells.length - 1; 
    for (var i = 0; i < colCount - 1; i++) { 
        var cell = row.insertCell(i + 2); 
        var input = document.createElement("input");
        input.type = "text";
        input.value = "";
        cell.appendChild(input);
    }
}


    function addClassColumn() {
        var table = document.getElementById("dynamicTable");
        var selectedClasses = [];
        
        // Get selected checkboxes
        if (document.getElementById('ukg').checked) selectedClasses.push("UKG");
        if (document.getElementById('first').checked) selectedClasses.push("First");
        if (document.getElementById('second').checked) selectedClasses.push("Second");
        if (document.getElementById('third').checked) selectedClasses.push("Third");
        if (document.getElementById('fourth').checked) selectedClasses.push("Fourth");
        if (document.getElementById('fifth').checked) selectedClasses.push("Fifth");
        if (document.getElementById('sixth').checked) selectedClasses.push("Sixth");
        if (document.getElementById('seventh').checked) selectedClasses.push("Seventh");
        if (document.getElementById('eighth').checked) selectedClasses.push("Eighth");
        if (document.getElementById('ninth').checked) selectedClasses.push("Ninth");
        if (document.getElementById('tenth').checked) selectedClasses.push("Tenth");
        if (document.getElementById('eleventh').checked) selectedClasses.push("Eleventh");
        if (document.getElementById('twelfth').checked) selectedClasses.push("Twelfth");

        if (selectedClasses.length > 0) {
            // Add a header cell for each selected class
            selectedClasses.forEach(function (className, index) {
    var header = table.rows[0];
    var newHeaderCell = document.createElement("th");
    
    // Calculate the index of the column for deletion and pass it in the data attribute
    var colIndex = header.cells.length;

    // Set the header cell content with the delete button
    newHeaderCell.innerHTML = `${className} 
        <button type="button" class="delete-btn" onclick="deleteColumn(${colIndex})">X</button>`;
    
    // Append the new header cell
    header.appendChild(newHeaderCell);

    // Add a new cell in each row for the new column
    for (var i = 1; i < table.rows.length; i++) {
        var row = table.rows[i];
        var newCell = row.insertCell(-1); // Insert at the end of each row
        var input = document.createElement("input");
        input.type = "text";
        input.value = ``;
        newCell.appendChild(input);
    }
});

        }
        
        closeModal(); // Close the modal after adding the column
    }

    // Function to delete a row
    function deleteRow(button) {
        var row = button.parentNode.parentNode; // Get the row of the clicked button
        row.parentNode.removeChild(row); // Remove the row
    }

    // Function to delete a column
    function deleteColumn(colIndex) {
        var table = document.getElementById("dynamicTable");

        // Loop through each row and delete the specified column
        for (var i = 0; i < table.rows.length; i++) {
            var row = table.rows[i];
            row.deleteCell(colIndex); // Delete the column at the given index
        }
    }



    // Function to toggle all checkboxes based on the master checkbox
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
