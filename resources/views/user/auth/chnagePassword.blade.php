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

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://kit.fontawesome.com/78f80335ec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('public/website/index.css')}}">

    <link rel="icon" href="https://www.veygo.com/wp-content/uploads/2024/06/cropped-Favicon_V1-a-32x32.png">
    <title>Veygo</title>
</head>

<body class="sign-in-page">
    <div class="container sign-in">
        <div class="logo">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    data-name="Veygo Logo" viewBox="0 0 100.13 40" width="100.13" height="40"
                    preserveAspectRatio="xMidYMid meet" style="
          width: 100%;
          height: 100%;
          transform: translate3d(0px, 0px, 0px);
          content-visibility: visible;
        " class="fill-current">
                    <path
                        d="M25.59,25.2c.77,3.24,6.93,2.58,8.99,1.55h0c.26-.12.58-.01.71.25l1.54,3.09c.13.26.03.58-.23.72-.16.08-2.93,1.69-7.52,1.69-7.35,0-9.69-5.64-9.71-9.72-.03-4.87,3.18-9.72,9.89-9.72,7.59,0,8.31,5.17,8.31,6.4,0,6.31-7.92,5.75-10.72,5.75h-1.27ZM25.3,21.44c1.61,0,2.86-.06,3.76-.18,2.3-.31,2.92-.78,2.92-1.84,0-1.28-1.25-1.88-2.75-1.88-1.26,0-3.77.71-3.93,3.9Z">
                    </path>
                    <path
                        d="M61.48,34.82c.16-.41.58-.45.79-.35,0,0,2.83.9,5.1.9,6.01,0,5.34-5.32,5.34-5.32-.26.25-2.22,1.99-5.27,1.99-5.06,0-8.92-2.91-8.92-9s4.54-9.99,10.14-9.99c10.16,0,9.86,9.02,9.86,10.74v5.39c0,1.88-.26,3.5-.79,4.86-1.89,4.85-6.08,5.99-9.75,5.95-2.4-.03-5.38-.43-7.35-1.36-.29-.14-.44-.47-.32-.77l1.16-3.05h0ZM64.49,22.85c0,2.45,1.35,4.24,4.12,4.24,2,0,4.12-1.34,4.12-4.24s-2.1-4.35-4.12-4.35c-2.18,0-4.13,1.89-4.12,4.35h0s0,0,0,0Z">
                    </path>
                    <path
                        d="M52.27,13.55c-.44,0-.8.36-.8.8v8.91c0,1.3-.3,3.83-3.43,3.83s-3.36-2.1-3.36-3.25v-9.49c0-.44-.36-.8-.79-.8h-4.22c-.44,0-.8.36-.8.8v10.69c0,5.28,4.06,7.04,7.84,7.02,1.9,0,4.01-.71,4.91-1.81,0,1.83-.41,3.14-1.23,3.94-2.39,2.33-8.41.57-8.76.45h-.01c-.46-.15-.76.19-.84.42l-.96,2.92c-.13.4.08.84.48.98h.01c2.87.96,7.73,1.52,11.02.48,3.17-1,4.6-3.15,5.24-4.92.46-1.3.72-2.85.72-4.68v-15.5c0-.44-.36-.8-.8-.8h-4.23Z">
                    </path>
                    <path
                        d="M31.46.49c-.17-.4-.64-.6-1.03-.42C20.36,4.54,12.84,13.72,10.67,24.8c0-.01-.01-.01-.02,0-.14-.32-2.36-5.59-4.26-10.75-.1-.27-.36-.45-.64-.45H.67c-.53,0-.76.53-.64.93,1.54,5.22,7.07,15.7,7.69,16.82.24.44.7.7,1.2.7h5.63c.49,0,.89-.39.91-.88.34-11.46,7.33-21.27,17.22-25.71.39-.17.57-.62.41-1.01l-1.64-3.96h0Z">
                    </path>
                    <path
                        d="M89.96,27.33c-2.33,0-4.22-2.04-4.22-4.55s1.89-4.55,4.22-4.55,4.22,2.04,4.22,4.55-1.89,4.55-4.22,4.55ZM89.96,13.06c-5.61,0-10.17,4.35-10.17,9.72s4.55,9.72,10.17,9.72,10.17-4.35,10.17-9.72-4.55-9.72-10.17-9.72Z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="row justify-content-center">
            <form action="{{url('user-reset-password')}}" method="POST" 
                class="col-sm-8 col-lg-5 bg-white shadow-sm rounded p-5 sign-in-form">
                @csrf
                <input value="{{$user->email}}" type="hidden" name="email" >
                <h4 class="fw-bold sign-in-heading">Reset Password</h4>
                <div class="mt-4 mb-5">
                    <label for="email" class="fw-semibold mb-2">Password</label>
                    <input type="password" class="form-control shadow-none py-3" placeholder="" name="password">
                </div>
                <div class="mt-4 mb-5">
                    <label for="email" class="fw-semibold mb-2">Confirm Password</label>
                    <input type="password" class="form-control shadow-none py-3" placeholder="" name="confirmed">
                </div>               
                <button class="w-100 form-button button" type="submit">Reset Passowrd</button>
            </form>
        </div>
    </div>

</body>

</html>