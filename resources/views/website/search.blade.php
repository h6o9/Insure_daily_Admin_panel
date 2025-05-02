<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://kit.fontawesome.com/78f80335ec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('public/website/index.css') }}">

    <link rel="stylesheet" href="{{ asset('public/admin/assets/toastr/css/toastr.css') }}">
    <style>
        .quote-button {
            background-color: #015466;
            /* Set a fixed background color */
            color: white;
            /* Fixed text color */
            transition: none;
            /* Disable any transition effects */
        }

        .quote-button:hover {
            background-color: #015466;
            /* Same as the default background */
            color: white;
            /* Same as the default text color */
            border: none;
            /* No border change */
            box-shadow: none;
            /* Disable hover shadow effect */
        }

        .policy-card {
    text-align: left !important;
    margin-top: 30px;
    padding: 20px;

  }

.bg-grey{
    background-color: #f8f9fa;
    padding: 3px 5px;
    border-radius: 8px;
    font-size: 1.2rem;
}

.policy-card .policy-header {
    font-weight: 700;
    font-size: 1.5rem;
    margin-bottom: 12px;
    color: #1c1252;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(163, 163, 163, 0.596);
}

.policy-info-one{
    color: #1c1252 !important;
    font-size: 1.1rem !important;
    font-weight: 600;
}

.para{
    font-weight: 400;
    font-size: 0.9rem !important;
}

.policy-card .policy-info {
    font-size: 1rem;
    color: #646473;
}

.policy-footer{
    border-left: 3px solid #015466 !important;
}

    </style>
    <link rel="icon" href="public/frontend/images/Logo/fav-icon.jpg">
    <title>InsureDaily</title>
</head>

<body>
    <div class="container my-5">
        <h5 class="text-center mb-5 search-heading" style="background: #fb0000;">Check to see if your car is insured by us today</h5>
        <form id="search-form" class="search-form mx-auto">
            @csrf
            <div class="form-row mb-3">
                <!-- DLN / Full Name -->
                <div class="form-group mb-3 row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                        <label for="dln">DLN / Full Name</label>
                    </div>
                    <div class="col-12 mx-auto col-lg-6">
                        <input type="text" name="" class="form-control shadow-none" id="dln"
                            placeholder="Search for...">
                        <span class="text-danger error-text dln-error"></span>
                    </div>
                </div>

                <!-- Vehicle Registration Mark -->
                <div class="form-group mb-3 row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                        <label for="registration_mark">Vehicle Registration Mark<span
                                class="text-danger">*</span></label>
                    </div>
                    <div class="col-12 mx-auto col-lg-6">
                        <input type="text" name="registration_mark" class="form-control shadow-none"
                            id="registration_mark" placeholder="Search for...">
                        <span class="text-danger error-text registration_mark-error"></span>
                    </div>
                </div>
            </div>

            <!-- Date -->
            {{-- <div class="form-row">
                <div class="form-group row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                        <label for="date">Date</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="date" name="date" class="form-control shadow-none" id="date">
                        <span class="text-danger error-text date-error"></span>
                    </div>
                </div>
            </div> --}}

            <!-- Search Button -->
            <div class="text-center">
                <button type="submit" style="background: #fb0000;" class="quote-button rounded w-50 text-center text-white border-0 py-2 px-2 mt-4">
                    <div class="d-none search-spinner spinner-border text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div><span class="search-text" style="background: #fb0000;">Search</span>
                </button>
            </div>
        </form>
        <div class="text-center mt-5 d-flex flex-column align-items-center gap-3 status-container">

        </div>

        <div class="text-center mt-5 d-flex flex-column align-items-center gap-3 d-none true-status">
            <div class="status rounded-pill py-3 px-4 d-flex align-items-center gap-3">
                <div style="background-color: #83bb26;" class="rounded-circle tick-cross">
                    <span class="fa-solid fa-check text-white fw-bold h3 m-0"></span>
                </div>
                <p class="m-0"></p>
            </div>
            <div class="status rounded-pill py-3 px-4 d-flex align-items-center gap-3 d-none false-status">
                <div class="rounded-circle bg-danger tick-cross">
                    <span class="fa-solid fa-xmark text-white fw-bold h3 m-0"></span>
                </div>
                <p class="m-0"></p>
            </div>
        </div>


    </div>
    <script src="{{ asset('public/admin/assets/toastr/js/toastr.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Remove error message when typing
            $('input').on('input', function() {
                let inputName = $(this).attr('name'); // Get the name of the input field
                $(`.${inputName}-error`).text(''); // Clear the corresponding error message
            });

            // Handle form submission
            $('#search-form').on('submit', function(e) {
                e.preventDefault();
                $('.search-spinner').removeClass('d-none');
                $('.search-text').addClass('d-none');

                // Clear previous error messages
                $('.error-text').text('');

                // Gather form dataspinner
                let formData = {
                    _token: $('input[name="_token"]').val(),

                    registration_mark: $('#registration_mark').val(),
                };

                // AJAX request
                $.ajax({
                    url: "{{ route('search.results') }}",
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('.search-spinner').addClass('d-none');
                            $('.search-text').removeClass('d-none');
                            // $('.true-status').removeClass('d-none');
                            // $('.false-status').addClass('d-none');
                            // Success - Display insurance record details
                            $('.status-container').html(`
                            <p class="mb-0">This vehicle is showing as INSURED by Insuredaily today</p>
                            <div class="status rounded-pill py-3 px-4 d-flex align-items-center gap-3">
                                <div style="background-color: #83bb26;" class="rounded-circle tick-cross">
                                    <span class="fa-solid fa-check text-white fw-bold h3 m-0"></span>
                                </div>
                                <p class="m-0"></p>
                            </div>
                                `);
                        } else {
                            // No record found
                            $('.search-spinner').addClass('d-none');
                            $('.search-text').removeClass('d-none');
                            // $('.false-status').removeClass('d-none');
                            // $('.true-status').addClass('d-none');

                            $('.status-container').html(`
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 col-12">
                                    <div class="policy-card text-center">
                                        <div class="policy-header">
                                            Policies for <span class="text-danger bg-grey">${response.message}</span>
                                        </div>
                                        <p class="policy-info policy-info-one m-0">There are no policies on the provided date</p>
                                        <div class="policy-footer mt-3 border rounded p-3">
                                            <p class="policy-info para m-0">
                                                If further clarification is needed, contact the team at
                                                <a href="mailto:support@insuredaily.com">support@insuredaily.com</a>.
                                                The team will respond within 2 minutes on average between 9am and 9pm, Monday to Sunday.
                                                For overnight queries, Insuredaily will respond at opening time the next day.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="status rounded-pill py-3 px-4 d-flex flex-column justify-content-center align-items-center position-relative">
                                        <div class="rounded-circle bg-danger tick-cross d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                            <span class="fa-solid fa-xmark text-white fw-bold h3 m-0"></span>
                                        </div>
                                        <p class="mt-5"></p>
                                    </div>
                                </div>
                            </div>
                        `);

                        }
                    },
                    error: function(xhr) {
                        console.log("data", xhr);

                        if (xhr.status === 422) {
                            // Handle validation errors
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $(`.${key}-error`).text(value[
                                    0]); // Display the first error for each field
                            });
                        } else {
                            ("An unexpected error occurred. Please try again.");
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>
