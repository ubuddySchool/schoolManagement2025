@extends('admin.layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                            <a href="{{ route('configuration.index') }}" class="text-decoration-none text-dark me-2 backButton">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <h3 class="page-title">Assign School Admin</h3>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>City</th>
                                    <th>CRM Name</th>
                                    <th>Configure Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <img src="{{ asset('assets/img/favicon.png') }}" class="rounded-circle me-3" width="50">
                                    </td>
                                    <td>Green Valley School</td>
                                    <td>Bhopal</td>
                                    <td>Amit Sharma</td>
                                    <td>
                                        <button
                                            class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#assignAdminModal"
                                            data-school-name="Green Valley School"
                                            data-current-admin="John Doe"
                                            data-admin-photo="https://via.placeholder.com/80">
                                            Configure Admin
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <img src="{{ asset('assets/img/favicon.png') }}" class="rounded-circle me-3" width="50">
                                    </td>
                                    <td>Sunrise Public School</td>
                                    <td>Indore</td>
                                    <td>Pooja Mehta</td>
                                    <td>
                                        <button
                                            class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#assignAdminModal"
                                            data-school-name="Sunrise Public School"
                                            data-current-admin="Jane Smith"
                                            data-admin-photo="https://via.placeholder.com/80">
                                            Configure Admin
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/img/favicon.png') }}" class="rounded-circle me-3" width="50">
                                    </td>
                                    <td>Riverdale High</td>
                                    <td>Jabalpur</td>
                                    <td>Rajeev Sinha</td>
                                    <td>
                                        <button
                                            class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#assignAdminModal"
                                            data-school-name="Riverdale High"
                                            data-current-admin="Michael Johnson"
                                            data-admin-photo="https://via.placeholder.com/80">
                                            Configure Admin
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="assignAdminModal" tabindex="-1" aria-labelledby="assignAdminModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assignAdminModalLabel">Assign Admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Search -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Search admin..." id="searchAdmin" onkeyup="filterAdmins()">
                                    </div>

                                    <!-- CRM Admin List -->
                                    <!-- CRM Admin List with scroll & highlight -->
                                    <div id="adminList" class="row g-2" style="max-height: 260px; overflow-y: auto;">
                                        <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                            onclick="selectAdmin(this, 'John Doe', '{{ asset('assets/img/profiles/avatar-05.jpg') }}')">
                                            <img src="{{ asset('assets/img/profiles/avatar-05.jpg') }}" class="rounded-circle me-3" width="50">
                                            <span>John Doe</span>
                                        </div>
                                        <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                            onclick="selectAdmin(this, 'Jane Smith', '{{ asset('assets/img/profiles/avatar-03.jpg') }}')">
                                            <img src="{{ asset('assets/img/profiles/avatar-03.jpg') }}" class="rounded-circle me-3" width="50">
                                            <span>Jane Smith</span>
                                        </div>
                                        <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                            onclick="selectAdmin(this, 'Michael Johnson', '{{ asset('assets/img/profiles/avatar-04.jpg') }}')">
                                            <img src="{{ asset('assets/img/profiles/avatar-04.jpg') }}" class="rounded-circle me-3" width="50">
                                            <span>Michael Johnson</span>
                                        </div>
                                        <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                            onclick="selectAdmin(this, 'Lisa Ray', '{{ asset('assets/img/profiles/avatar-02.jpg') }}')">
                                            <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" class="rounded-circle me-3" width="50">
                                            <span>Lisa Ray</span>
                                        </div>
                                        <!-- More items to test scroll -->
                                        <div class="col-12 crm-item d-flex align-items-center p-2 border rounded cursor-pointer"
                                            onclick="selectAdmin(this, 'David Parker', '{{ asset('assets/img/profiles/avatar-01.jpg') }}')">
                                            <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" class="rounded-circle me-3" width="50">
                                            <span>David Parker</span>
                                        </div>
                                    </div>




                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Assign</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function selectAdmin(element, name, photo) {
        // Remove highlight from all items
        document.querySelectorAll('.crm-item').forEach(item => {
            item.classList.remove('bg-info', 'text-white');
            item.classList.remove('bg-info', 'text-white');
        });

        element.classList.add('bg-info', 'text-white');

    }
</script>


<script>
    const assignAdminModal = document.getElementById('assignAdminModal');
    assignAdminModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const schoolName = button.getAttribute('data-school-name');
        const currentAdmin = button.getAttribute('data-current-admin');
        const adminPhoto = button.getAttribute('data-admin-photo');

        document.getElementById('assignAdminModalLabel').textContent = `Assign Admin - ${schoolName}`;
        document.getElementById('adminName').textContent = currentAdmin;
        document.getElementById('adminPhoto').src = adminPhoto;
    });
</script>
@endsection