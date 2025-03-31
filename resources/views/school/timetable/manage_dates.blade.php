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
        width: 100%;
    }

    .dayCell input {
        width: 100%;
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
                                <h3 class="page-title">Manage Dates</h3>
                            </div>
                            <div class="col-auto d-flex justify-content-end">
                                <button type="button" class="btn btn-success me-2" onclick="saveDates()">Save Changes</button>
                                <a href="{{ route('school_student.timetable.add') }}" class="btn btn-secondary">Back to Timetable</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="table-responsive">
                        <table id="dateTable" class="table border-0 star-student table-hover table-center mb-0 table-striped">
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
                                @if(count($dates) > 0)
                                    @foreach($dates as $index => $date)
                                    <tr id="dateRow_{{ $index + 1 }}" draggable="true" ondragstart="dragStart(event)" ondragover="dragOver(event)" ondrop="drop(event)">
                                        <td><i class="fas fa-grip-vertical dateDragHandle"></i></td>
                                        <td class="dateCell"><input type="date" id="date_{{ $index + 1 }}" class="form-control" value="{{ $date['date'] }}"></td>
                                        <td class="dayCell"><input type="text" id="day_{{ $index + 1 }}" class="form-control" value="{{ $date['day'] }}"></td>
                                        <td class="action-buttons">
                                            <button type="button" class="btn btn-sm btn-success add-date-below" onclick="addDateBelow(this)">+</button>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteDateRow(this)">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr id="dateRow_1" draggable="true" ondragstart="dragStart(event)" ondragover="dragOver(event)" ondrop="drop(event)">
                                        <td><i class="fas fa-grip-vertical dateDragHandle"></i></td>
                                        <td class="dateCell"><input type="date" id="date_1" class="form-control" value=""></td>
                                        <td class="dayCell"><input type="text" id="day_1" class="form-control" value=""></td>
                                        <td class="action-buttons">
                                            <button type="button" class="btn btn-sm btn-success add-date-below" onclick="addDateBelow(this)">+</button>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteDateRow(this)">Delete</button>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Global variables
    let draggedItem = null;
    let dateRowCounter = {{ count($dates) > 0 ? count($dates) + 1 : 2 }}; // Start from the next available index
    
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
    
    // Add a new date row
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
    
    // Delete a date row
    function deleteDateRow(button) {
        let row = button.closest('tr');
        row.parentNode.removeChild(row);
    }
    
    // Save all dates
    function saveDates() {
        // Get all date rows
        const dateRows = document.querySelectorAll('#dateTableBody tr');
        
        // Prepare data array to send to the server
        const dates = [];
        
        dateRows.forEach(function(dateRow) {
            const dateValue = dateRow.querySelector('.dateCell input').value;
            const dayValue = dateRow.querySelector('.dayCell input').value;
            
            dates.push({
                date: dateValue,
                day: dayValue
            });
        });
        
        // Send data to the server using AJAX
        fetch('{{ route("save.dates") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ dates: dates })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Dates saved successfully!');
                window.location.href = '{{ route("school_student.timetable.add") }}';
            } else {
                alert('Error saving dates: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while saving dates.');
        });
    }
    
    // Initialize the page
    document.addEventListener('DOMContentLoaded', function() {
        // Set up date change listeners
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
    });
</script>
@endsection