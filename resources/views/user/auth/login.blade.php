@extends('user.auth.layout.master')
@section('content')
    <div class="container sign-in">
        <div class="logo ">
            <a href="/">
                <img src="public/frontend/assets/images/logo/InsureDaily_short_term_car_insurance_logo.webp" alt=""
                    class="">
            </a>
        </div>
        <div class="row justify-content-center">
            <form action="{{ url('user/login') }}" method="POST"
                class="col-sm-8 col-lg-5 bg-white shadow-sm rounded p-5 sign-in-form">
                @csrf
                <h4 class="fw-bold sign-in-heading">Sign in</h4>
                <div class="mt-4 mb-3">
                    <label for="email" class="fw-semibold mb-2">Email</label>
                    <input type="text" class="form-control shadow-none py-3" placeholder="example@gmail.com"
                        name="email">
                </div>
                <div class="mt-4 mb-3">
                    <label for="password" class="fw-semibold mb-2">Password</label>
                    <div class="position-relative">
                        <input type="password" placeholder="Enter your password" class="form-control shadow-none py-3"
                            name="password" id="password">
                        <span class="position-absolute eye-icon"
                            style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                            <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                        </span>
                    </div>
                </div>
                <p class="text-end text-primary" id="forgotPasswordLink" style="cursor: pointer;">Forgot Password?</p>

                <div id="alertMessage" class="alert alert-danger alert-dismissible fade show mt-1 d-none mb-4"
                    role="alert">
                    Please contact at <span class="text-success">
                        <a href="mailto:support@insureddaily.com">support@insureddaily.com</a>
                    </span> to change your password.
                    <button type="button" class="btn-close" id="closeButton" aria-label="Close"></button>
                </div>

                <button class="w-100 form-button button rounded-pill" type="submit">Continue</button>
            </form>
        </div>
    </div>


    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
            console.log(type); // ✅ Fix console error
        });

        document.getElementById('forgotPasswordLink').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('alertMessage').classList.remove('d-none');
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('alertMessage').classList.add('d-none');
        });
    </script>
@endsection
