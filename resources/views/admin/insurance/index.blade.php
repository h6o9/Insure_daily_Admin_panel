@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="modal fade" id="createInsuranceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createInsuranceForm" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="name">DLN/Full Name</label>
                                <input type="text" class="form-control" id="dln" name="dln" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="slug">Vehicle Registration Mark<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="registration_mark" name="registration_mark">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="slug">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div> --}}
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="status">Active Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="createInsurance()">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Insurance Modal -->
    <div class="modal fade" id="editInsuranceModal" tabindex="-1" role="dialog" aria-labelledby="editInsuranceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editInsuranceModalLabel">Edit Insurance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editInsurance" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="name">DLN/Full Name</label>
                                <input type="text" class="form-control dln" name="dln" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="slug">Vehicle Registration Mark<span class="text-danger">*</span></label>
                                <input type="text" class="form-control registration_mark" name="registration_mark">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="slug">Date</label>
                                <input type="date" class="form-control date" name="date">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div> --}}

                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="updateCategories(this)">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this Insurance Delete Modal -->
    <div class="modal fade" id="deleteInsuranceModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteInsuranceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteInsuranceModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this insurance record?
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteInsurance">
                        <span class="spinner-border spinner-border-sm d-none" id="deleteInsuranceSpinner" role="status"
                            aria-hidden="true"></span>
                        <span id="deleteInsuranceText">Delete</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- #############Main Content Body#################  --}}
    <div class="main-content" style="min-height: 562px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Insurance</h4>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <a class="btn btn-primary mb-3 text-white" data-toggle="modal"
                                    data-target="#createInsuranceModal">
                                    Create
                                </a>
                                <table class="responsive table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>DLN/Full Name</th>
                                            <th>Registration Mark</th>
                                            {{-- <th>Date</th> --}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('js')

    {{-- Data Table --}}
    <script>
        // ######### Data Table ##############
        function reloadDataTable() {
            var dataTable = $('#example').DataTable();
            dataTable.ajax.reload();
        }
        $(document).ready(function() {
            // Initialize DataTable with options
            var dataTable = $('#example').DataTable({
                "ajax": {
                    "url": "{{ route('insurance.get') }}",
                    "type": "GET",
                    "data": {
                        "_token": "{{ csrf_token() }}"
                    }
                },
                "columns": [{
                        "data": null,
                        "render": function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        "data": "dln",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "registration_mark"
                    },
                    // {
                    //     "data": "date"
                    // },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            var buttonClass = row.status == '1' ? 'btn-success' : 'btn-danger';
                            var buttonText = row.status == '1' ? 'Active' : 'In Active';
                            return '<button id="update-status" class="btn ' + buttonClass +
                                '" data-userid="' + row
                                .id + '">' + buttonText + '</button>';
                        },

                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-success  mr-2 text-white editSubadminBtn" data-id="' +
                                row.id + '"><i class="fas fa-edit"></i></button>' +
                                '<button class="btn btn-danger  mr-2 text-white deleteSubadminBtn" data-id="' +
                                row.id + '"><i class="fas fa-trash-alt"></i></button>';
                        }
                    }
                ]
            });
            $('#example').on('click', '.editSubadminBtn', function() {
                var id = $(this).data('id');
                editInsuranceModal(id);
            });
            // $('#example').on('click', '.deleteSubadminBtn', function() {
            //     var id = $(this).data('id');
            //     deleteInsuranceModal(id);
            // });
        });
    </script>

    <script>
        // ##############Create Sub admin################

        function createInsurance() {
            var formData = new FormData($('#createInsuranceForm')[0]);
            var createButton = $('#createInsuranceModal').find('.modal-footer').find('button');
            var spinner = createButton.find('.spinner-border');

            createButton.prop('disabled', true);
            spinner.removeClass('d-none'); // Spinner Show

            $.ajax({
                url: '{{ route('insurance.create') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('Insurance Created Successfully!');
                    $('#createInsuranceModal').modal('hide');
                    reloadDataTable();
                    $('#createInsuranceModal form')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.log("data", xhr);
                    if (xhr.status === 422) { // Validation Errors
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        console.log("Error:", xhr);
                    }
                },
                complete: function() {
                    createButton.prop('disabled', false);
                    spinner.addClass('d-none'); // Spinner Hide
                }
            });
        }

        // ######Get & Update Insurance#########

        function editInsuranceModal(id) {
            var showInsurance = '{{ route('insurance.show', ':id') }}';
            $.ajax({
                url: showInsurance.replace(':id', id),
                type: 'GET',
                success: function(response) {
                    $('#editInsurance .dln').val(response.dln);
                    $('#editInsurance .registration_mark').val(response.registration_mark);
                    $('#editInsurance .date').val(response.date);
                    $('#editInsuranceModal').modal('show');
                    $('#editInsuranceModal').data('id', id);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.log(xhr.responseText);
                }
            });
        }
        // #############Update subAdmin#############

        function updateCategories(button) {
            var updateInsurance = '{{ route('insurance.update', ':id') }}';
            var id = $('#editInsuranceModal').data('id');
            var formData = new FormData($('#editInsurance')[0]);
            var updateButton = $(button);
            var spinner = updateButton.find('.spinner-border');

            updateButton.prop('disabled', true);
            spinner.removeClass('d-none'); // Spinner Show

            $.ajax({
                url: updateInsurance.replace(':id', id),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('Insurance Updated Successfully!');
                    reloadDataTable();
                    $('#editInsuranceModal').modal('hide');
                    $('#editInsurance')[0].reset();
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // Validation Errors
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        console.log("Error:", xhr);
                    }
                },
                complete: function() {
                    updateButton.prop('disabled', false);
                    spinner.addClass('d-none'); // Spinner Hide
                }
            });
        }

        // ############# Delete Insurance Data###########

        // In DataTable initialization, uncomment and fix delete handler
        $('#example').on('click', '.deleteSubadminBtn', function() {
            let id = $(this).data('id');
            $('#deleteInsuranceModal').data('insurance-id', id);
            $('#deleteInsuranceModal').modal('show');
        });

        // Add delete confirmation handler
        $(document).ready(function() {
            $('#confirmDeleteInsurance').click(function() {
                var id = $('#deleteInsuranceModal').data('insurance-id');
                deleteInsurance(id);
            });
        });

        // Correct delete function for insurance
        function deleteInsurance(id) {
            var deleteButton = $('#confirmDeleteInsurance');
            var spinner = $('#deleteInsuranceSpinner');
            var buttonText = $('#deleteInsuranceText');

            deleteButton.prop('disabled', true);
            spinner.removeClass('d-none');
            buttonText.text('Deleting...');

            $.ajax({
                url: "{{ route('insurance.delete', ['id' => ':id']) }}".replace(':id', id),
                type: 'GET',
                success: function(response) {
                    toastr.success('Insurance deleted successfully!');
                    $('#deleteInsuranceModal').modal('hide');
                    reloadDataTable();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    toastr.error('Error deleting insurance record');
                },
                complete: function() {
                    deleteButton.prop('disabled', false);
                    spinner.addClass('d-none');
                    buttonText.text('Delete');
                }
            });
        }
        // function deleteInsuranceModal(id) {
        //     $('#confirmDeleteSubadmin').data('subadmin-id', id);
        //     $('#deleteInsuranceModal').modal('show');
        // }
        // $(document).ready(function() {
        //     $('#confirmDeleteSubadmin').click(function() {
        //         var id = $(this).data('subadmin-id');
        //         deleteInsurance(id)
        //     });
        // });

        // function deleteInsurance(id) {
        //     $.ajax({
        //         url: "{{ route('insurance.delete', ['id' => ':id']) }}".replace(':id', id),
        //         type: 'GET',
        //         success: function(response) {
        //             toastr.success('Insurance Deleted Successfully!');
        //             $('#deleteInsuranceModal').modal('hide');
        //             reloadDataTable();
        //         },
        //         error: function(xhr, status, error) {
        //             console.log(xhr.responseText);
        //         }
        //     });
        // }
        // ################ Active and Inactive code ############

        $('#example').on('click', '#update-status', function() {
            var button = $(this);
            var userId = button.data('userid');
            var currentStatus = button.text().trim().toLowerCase();
            var newStatus = currentStatus === 'Active' ? '1' : '0';
            button.prop('disabled', true);

            $.ajax({
                url: '{{ route('insuranceBlock.update', ['id' => ':userId']) }}'.replace(':userId', userId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: newStatus
                },
                success: function(response) {
                    toastr.success(response.message);
                    // Update button text and class
                    var buttonText = newStatus === '1' ? 'Active' : 'In Active';
                    var buttonClass = newStatus === '1' ? 'btn-success' : 'btn-danger';
                    button.text(buttonText).removeClass('btn-success btn-danger').addClass(buttonClass);
                    // Update status cell content
                    var statusCell = button.closest('tr').find('td:eq(6)');
                    var statusText, statusClass;
                    statusCell.html('<span class="' + statusClass + '">' + statusText + '</span>');
                    reloadDataTable();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                },
                complete: function() {
                    // Enable the button again
                    button.prop('disabled', false);
                }
            });
        });
    </script>

@endsection
