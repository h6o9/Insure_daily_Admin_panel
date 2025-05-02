@extends('admin.layout.app')
@section('title', 'Users')
@section('content')
    <style>
        .eye-icon {
            bottom: 30%;
            right: 5%;
        }
    </style>
    <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createUserForm" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">User Name<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter name" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Date of Birth<span class="text-danger"></span></label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Licence Type<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" id="licence_type" name="licence_type"
                                        placeholder="Enter licence">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Address<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter address" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Phone<span class="text-danger"></span></label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="Enter phone number">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Image<span class="text-danger"></span></label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept=".jpg,.jpeg,.png">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="status">Active Status</label>
                                    <select name="is_active" class="form-control" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Password<span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter password" accept=".jpg,.jpeg,.png" required>
                                    <span class="fa fa-eye-slash position-absolute" style="top: 2.67rem; right: 1.5rem"
                                        id="togglePassword"></span>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="createUser()">
                        <span class="spinner-border spinner-border-sm d-none" id="createUserSpinner" role="status"
                            aria-hidden="true"></span>
                        <span id="createUserText">Create</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editUser" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control name" name="name"
                                        placeholder="Enter name" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Email<span class="text-danger"></span></label>
                                    <input type="text" class="form-control email" name="email"
                                        placeholder="Enter email" disabled>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Date of Birth<span class="text-danger"></span></label>
                                    <input type="date" class="form-control dob" name="dob" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Licence Type<span class="text-danger"></span></label>
                                    <input type="text" class="form-control licence_type" name="licence_type"
                                        placeholder="Enter license">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Address<span class="text-danger"></span></label>
                                    <input type="text" class="form-control address" name="address"
                                        placeholder="Enter address" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Phone<span class="text-danger"></span></label>
                                    <input type="number" class="form-control phone" name="phone"
                                        placeholder="Enter phone">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Image<span class="text-danger"></span></label>
                                    <input type="file" class="form-control image" name="image"
                                        accept=".jpg,.jpeg,.png">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Password<span class="text-danger password">*</span></label>
                                    <input type="password" class="form-control" id="edit-password" name="password"
                                        placeholder="Enter password" required>
                                    <span class="fa fa-eye-slash position-absolute" style="top: 2.67rem; right: 1.5rem"
                                        id="edit-togglePassword"></span>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="updateUser()" id="updateUserButton">
                        <span class="spinner-border spinner-border-sm d-none" id="updateUserSpinner" role="status"
                            aria-hidden="true"></span>
                        <span id="updateUserText">Update</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- Delete User Modal -->
    <!-- Add this Delete Confirmation Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteUser">
                        <span class="spinner-border spinner-border-sm d-none" id="deleteUserSpinner" role="status"
                            aria-hidden="true"></span>
                        <span id="deleteUserText">Delete</span>
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
                                    <h4>Users</h4>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <a class="btn btn-primary mb-3 text-white" data-toggle="modal"
                                    data-target="#createUserModal">
                                    Create
                                </a>
                                <table class="responsive table table-striped table-bordered" id="example">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Licence Number</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>PDF</th>
                                            {{-- <th>Date</th> --}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
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

    <script src="https://kit.fontawesome.com/78f80335ec.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('edit-togglePassword');
            const passwordField = document.getElementById('edit-password');

            if (toggle && passwordField) {
                toggle.addEventListener('click', function() {
                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }
        });

        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    </script>

    {{-- Data Table --}}
    <script>
        // ######### Data Table ##############
        function reloadDataTable() {
            var dataTable = $('#example').DataTable();
            dataTable.ajax.reload();
        }
        $(document).ready(function() {
            const baseUrl = "{{ url('/') }}";
            // Initialize DataTable with options
            var dataTable = $('#example').DataTable({
                "ajax": {
                    "url": "{{ route('user.get') }}",
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
                        "data": "image",
                        "render": function(data, type, row) {
                            if (data) {
                                // Construct the image URL using Laravel's base URL
                                return '<img src="' + baseUrl + '/' + data +
                                    '" alt="Image" class="img-fluid" style="max-height: 50px; max-width: 50px;">';
                            } else {
                                return '<span class="text-danger">No Image Found!</span>';
                            }
                        }
                    },

                    {
                        "data": "name",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "phone",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "licence_type",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "address",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "dob",
                        "render": function(data, type, row) {
                            return data ? data : '<span class="text-danger">No DLN Found!</span>';
                        }
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "code"
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            var buttons = '<div class="d-flex ml-3">';

                            // Example button with a route
                            var url = "{{ route('certificates.index', ':id') }}".replace(':id', row
                                .id);

                            buttons +=
                                '<a href="' + url +
                                '" class="btn btn-primary mb-3 mr-3 text-white">' +
                                '<span class="fas fa-file"></span></a>';

                            buttons += '</div>';
                            return buttons;
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            var buttonClass = row.is_active == '1' ? 'btn-success' : 'btn-danger';
                            var buttonText = row.is_active == '1' ? 'Active' : 'In Active';
                            return '<button id="update-status" class="btn ' + buttonClass +
                                '" data-userid="' + row
                                .id + '">' + buttonText + '</button>';
                        },

                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<div class="d-flex"><button class="btn btn-success  mr-2 text-white editSubadminBtn" data-id="' +
                                row.id + '"><i class="fas fa-edit"></i></button>' +
                                '<button class="btn btn-danger  mr-2 text-white deleteSubadminBtn" data-id="' +
                                row.id + '"><i class="fas fa-trash-alt"></i></button></div>';
                        }
                    }
                ]
            });
            $('#example').on('click', '.editSubadminBtn', function() {
                var id = $(this).data('id');
                editUserModal(id);
            });
            // $('#example').on('click', '.deleteSubadminBtn', function() {
            //     let id = $(this).data('id');
            //     deleteUserModal(id);
            //     console.log(id)
            // });
        });
    </script>

    <script>
        // ##############Create Sub admin################

        function createUser() {
            var form = $('#createUserForm')[0];

            // ✅ Trigger browser validation
            var password = $('#password').val().trim();
            if (password === '') {
                toastr.error('Password is required.');
                return;
            }
            var formData = new FormData(form);
            var createButton = $('#createUserModal').find('.modal-footer').find('button');
            var spinner = $('#createUserSpinner');
            var buttonText = $('#createUserText');

            // Disable button & show spinner
            createButton.prop('disabled', true);
            spinner.removeClass('d-none');
            buttonText.text('Creating...');

            $.ajax({
                url: '{{ route('user.create') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('User Created Successfully!');
                    $('#createUserModal').modal('hide');
                    reloadDataTable();
                    $('#createUserModal form')[0].reset();
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // If validation errors
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        console.log("Error:", xhr);
                    }
                },
                complete: function() {
                    // Enable button & hide spinner
                    createButton.prop('disabled', false);
                    spinner.addClass('d-none');
                    buttonText.text('Create');
                }
            });
        }


        // ######Get & Update User#########

        function editUserModal(id) {
            var showUser = '{{ route('user.show', ':id') }}';

            $.ajax({
                url: showUser.replace(':id', id),
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    // return;
                    $('#editUser .name').val(response.name);
                    $('#editUser .email').val(response.email);
                    // $('#editUser .image').val(response.image);
                    $('#editUser #edit-password').val(response.code);
                    $('#editUser .phone').val(response.phone);
                    $('#editUser .licence_type').val(response.licence_type);
                    $('#editUser .address').val(response.address);
                    $('#editUser .dob').val(response.dob);
                    $('#editUser .password').val(response.code);
                    $('#editUserModal').modal('show');
                    $('#editUserModal').data('id', id);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.log(xhr.responseText);
                }
            });
        }

        function updateUser() {
            var updateUser = '{{ route('user.update', ':id') }}';
            var id = $('#editUserModal').data('id');
            var form = $('#editUser')[0];

            // Validate required fields manually
            var password = $('#edit-password').val().trim();
            if (password === '') {
                toastr.error('Password is required.');
                return;
            }
            var formData = new FormData(form);

            var updateButton = $('#updateUserButton');
            var spinner = $('#updateUserSpinner');
            var buttonText = $('#updateUserText');

            // Disable button & show spinner
            updateButton.prop('disabled', true);
            spinner.removeClass('d-none');
            buttonText.text('Updating...');

            $.ajax({
                url: updateUser.replace(':id', id),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('User Updated Successfully!');
                    reloadDataTable();
                    $('#editUserModal').modal('hide');
                    $('#editUser')[0].reset();
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // If validation errors
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        console.log("Error:", xhr);
                    }
                },
                complete: function() {
                    // Enable button & hide spinner
                    updateButton.prop('disabled', false);
                    spinner.addClass('d-none');
                    buttonText.text('Update');
                }
            });
        }

        // #############Update subAdmin#############


        function updateCategories() {
            var updateUser = '{{ route('user.update', ':id') }}';
            var id = $('#editUserModal').data('id');
            var formData = new FormData($('#editUser')[0]);
            // console.log('formData', formData);
            $.ajax({
                url: updateUser.replace(':id', id),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('User Updated Successfully!');
                    reloadDataTable();
                    $('#editUserModal').modal('hide');
                    $('#editUser form')[0].reset();

                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // If validation errors
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);

                        });
                    } else {
                        console.log("Error:", xhr);
                    }
                }
            });
        }

        // ############# Delete User Data###########

        // In the DataTable initialization, update the delete handler
        $('#example').on('click', '.deleteSubadminBtn', function() {
            let id = $(this).data('id');
            $('#deleteUserModal').data('user-id', id); // Store the ID in modal
            $('#deleteUserModal').modal('show');
        });

        // Update the delete confirmation handler
        $(document).ready(function() {
            $('#confirmDeleteUser').click(function() {
                var id = $('#deleteUserModal').data('user-id'); // Get ID from modal
                deleteUser(id);
            });
        });

        // Delete function remains the same
        function deleteUser(id) {
            var deleteButton = $('#confirmDeleteUser');
            var spinner = $('#deleteUserSpinner');
            var buttonText = $('#deleteUserText');

            deleteButton.prop('disabled', true);
            spinner.removeClass('d-none');
            buttonText.text('Deleting...');

            $.ajax({
                url: "{{ route('user.delete', ['id' => ':id']) }}".replace(':id', id),
                type: 'GET',
                success: function(response) {
                    toastr.success('User Deleted Successfully!');
                    $('#deleteUserModal').modal('hide');
                    reloadDataTable();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    toastr.error('Error deleting user');
                },
                complete: function() {
                    deleteButton.prop('disabled', false);
                    spinner.addClass('d-none');
                    buttonText.text('Delete');
                }
            });
        }
        //         function deleteUserModal(id) {
        //             $('#confirmDeleteSubadmin').data('subadmin-id', id);
        //             $('#deleteUserModal').modal('show');
        //         }
        //         $(document).ready(function() {
        //             $('#confirmDeleteSubadmin').click(function() {
        //                 var id = $(this).data('subadmin-id');
        //                 deleteUser(id)
        //             });
        //         });


        //      $(document).ready(function() {
        //     $('#confirmDeleteUser').click(function() {
        //         var id = $(this).data('user-id');
        //         deleteUser(id);
        //     });
        // });

        // function deleteUser(id) {
        //     var deleteButton = $('#confirmDeleteUser');
        //     var spinner = $('#deleteUserSpinner');
        //     var buttonText = $('#deleteUserText');

        //     // Disable button & show spinner
        //     deleteButton.prop('disabled', true);
        //     spinner.removeClass('d-none');
        //     buttonText.text('Deleting...');

        //     $.ajax({
        //         url: "{{ route('user.delete', ['id' => ':id']) }}".replace(':id', id),
        //         type: 'GET',
        //         success: function(response) {
        //             toastr.success('User Deleted Successfully!');
        //             $('#deleteUserModal').modal('hide');
        //             reloadDataTable();
        //         },
        //         error: function(xhr, status, error) {
        //             console.log(xhr.responseText);
        //         },
        //         complete: function() {
        //             // Enable button & hide spinner
        //             deleteButton.prop('disabled', false);
        //             spinner.addClass('d-none');
        //             buttonText.text('Delete');
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
                url: '{{ route('userBlock.update', ['id' => ':userId']) }}'.replace(':userId', userId),
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
