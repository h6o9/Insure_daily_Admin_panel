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
    <link rel="stylesheet" href="{{ asset('public/website/index.css') }}">

    <link rel="icon" href="https://www.veygo.com/wp-content/uploads/2024/06/cropped-Favicon_V1-a-32x32.png">
    <title>Veygo</title>
</head>

<body>
    <!-- Navbar -->
    <nav
        class="navbar-expand-xl navbar shadow py-3 px-2 px-xl-5 d-flex justify-content-between position-fixed top-0 navbar-component">
        <div>
            <a href="{{ asset('web-index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    data-name="Veygo Logo" viewBox="0 0 100.13 40" width="100.13" height="40"
                    preserveAspectRatio="xMidYMid meet"
                    style="
              width: 100%;
              height: 100%;
              transform: translate3d(0px, 0px, 0px);
              content-visibility: visible;
            "
                    class="fill-current">
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
        <button class="border-0 shadow-none navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <input type="checkbox" id="menu_checkbox" />
            <label for="menu_checkbox">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </button>
        <div class="justify-content-end collapse navbar-collapse navbar-right" id="navbarSupportedContent">
            <div class="navbar-menu-container">
                <div class="d-flex align-items-center gap-3 gap-xl-4 navbar-menu-side">
                    <span class="dropdown hover-dropdown">
                        <button class="btn p-0 dropdown-toggle text-dark-green" type="button" aria-expanded="false">
                            <span class="text">Your driving experience</span>
                            <span class="ms-2 dropdown-arrow"><span class="fa-solid fa-angle-right"></span></span>
                        </button>
                        <div class="dropdown-menu">
                            <ul class="px-xl-5 dropdown-menu-inner">
                                <li class="py-2">
                                    <a class="px-0 dropdown-item"
                                        href="https://www.veygo.com/learner-driver-insurance/">Learner drivers</a>
                                </li>
                                <li class="py-2">
                                    <a class="px-0 dropdown-item" href="https://www.veygo.com/new-driver/">New
                                        drivers</a>
                                </li>
                                <li class="py-2">
                                    <a class="px-0 dropdown-item"
                                        href="https://www.veygo.com/experienced-driver-insurance/">Experienced
                                        drivers</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <span class="dropdown hover-dropdown">
                        <button class="btn p-0 dropdown-toggle text-dark-green" type="button" aria-expanded="false">
                            <span class="text">Our cover options</span>
                            <span class="ms-2 dropdown-arrow"><span class="fa-solid fa-angle-right"></span></span>
                        </button>
                        <div class="dropdown-menu">
                            <ul class="px-xl-5 dropdown-menu-inner">
                                <li class="py-2">
                                    <a class="px-0 dropdown-item"
                                        href="https://www.veygo.com/temporary-car-insurance/">Pay-as-you-go cover</a>
                                </li>
                                <li class="py-2 pe-2">
                                    <a class="px-0 dropdown-item"
                                        href="https://www.veygo.com/monthly-subscriptions/">Monthly rolling
                                        subscription</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <a href="https://www.veygo.com/refer/" class="link">Refer a friend</a>
                    <a href="https://www.veygo.com/help/" class="link">Help</a>
                    <a href="https://veygo-eui.com/search-index" class="link">Check your covered</a>
                    <a href="https://account.veygo.com/purchases" class="link claim-link">Start a claim</a>
                    <a href="{{ url('/user-login') }}" class="link sign-in-link">Sign in</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <div class="h-screen py-sm-5 hero-section">
        <div class="container pt-sm-5 pb-4">
            <div class="col-lg-9">
                <h4 class=" text-white fw-bolder">Hey, driver.</h4>
                <h1 class="mt-4 text-white fw-bold font-poppins hero-section-heading">Flexible, affordable and easy
                    car insurance for young
                    drivers</h1>
                <h2 class="mt-3 text-white hero-para">Whether you’re learning, just passed or been driving a while,
                    we’re changing
                    the
                    game with flexible
                    cover designed for young drivers.</h2>
                <div class="col-md-4">
                    <a href="https://quote.veygo.com/start">
                        <button class="w-100 mt-3 mt-lg-5 button hero-btn">
                            Get a quote
                        </button>
                    </a>
                </div>
                <div class="mt-5 d-flex justify-content-center justify-content-md-start gap-4">
                    <div class="svgs">
                        <div class="d-flex flex-column">
                            <span class="d-flex svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    data-name="Trustpilot Logo" viewBox="0 0 96.2 24.26" width="96.2"
                                    height="24.26" preserveAspectRatio="xMidYMid meet"
                                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                    <path data-name="Trustpilot"
                                        d="M25.28,8.6h9.74v1.87h-3.83v10.49h-2.11v-10.49h-3.81v-1.87h.01ZM34.6,12.01h1.8v1.73h.03c.06-.24.17-.48.33-.71.16-.23.36-.44.59-.63.23-.19.48-.34.76-.46.28-.11.57-.17.86-.17.22,0,.38,0,.47.02.08,0,.17.03.26.03v1.9c-.14-.03-.27-.04-.42-.06-.14-.02-.28-.03-.42-.03-.32,0-.63.07-.92.2-.29.13-.53.33-.75.58-.21.26-.38.58-.51.96-.13.38-.19.82-.19,1.32v4.26h-1.92v-8.94h.03ZM48.52,20.95h-1.88v-1.25h-.03c-.24.45-.59.81-1.05,1.08s-.94.41-1.43.41c-1.15,0-1.98-.29-2.49-.87-.51-.58-.76-1.47-.76-2.64v-5.68h1.92v5.48c0,.78.14,1.34.44,1.67.29.32.7.49,1.23.49.41,0,.74-.06,1.01-.19.27-.13.49-.3.65-.51.17-.21.29-.47.37-.77.08-.3.11-.62.11-.97v-5.19h1.92v8.94h0ZM51.79,18.09c.06.58.27.98.64,1.21s.81.35,1.33.35c.18,0,.38-.02.61-.04.23-.03.45-.09.65-.17s.37-.2.5-.36.19-.36.18-.61c0-.25-.1-.46-.27-.62-.17-.17-.38-.29-.65-.39-.26-.1-.56-.18-.9-.25s-.68-.15-1.03-.23c-.36-.08-.7-.18-1.04-.3-.33-.11-.63-.27-.89-.47-.26-.19-.48-.44-.63-.75-.16-.31-.24-.68-.24-1.13,0-.49.12-.89.35-1.22s.53-.59.87-.79c.36-.2.75-.34,1.18-.43.43-.08.85-.12,1.24-.12.45,0,.88.05,1.29.15.41.1.78.25,1.11.48.33.22.6.51.82.85.22.35.36.78.42,1.27h-2c-.09-.47-.3-.79-.63-.95-.33-.17-.71-.24-1.14-.24-.14,0-.3,0-.48.03-.19.03-.36.07-.53.13-.16.06-.3.16-.42.28-.11.12-.17.28-.17.48,0,.24.08.44.25.58s.37.27.64.38c.26.1.56.18.9.25s.69.15,1.04.23c.35.08.69.18,1.03.3.34.11.64.27.9.47.26.2.48.44.64.74s.25.67.25,1.11c0,.53-.12.98-.36,1.35s-.54.67-.92.9c-.37.23-.8.4-1.26.51-.46.1-.92.16-1.37.16-.55,0-1.06-.06-1.53-.19s-.87-.32-1.21-.58-.61-.58-.81-.97c-.2-.38-.3-.85-.31-1.38h1.94v-.02h0ZM58.12,12.01h1.45v-2.69h1.92v2.69h1.73v1.47h-1.73v4.78c0,.21,0,.38.03.54.02.15.06.28.12.38.06.1.15.18.28.24.13.05.29.08.51.08h.41c.14,0,.27-.03.41-.06v1.53c-.21.03-.42.04-.62.07-.2.03-.41.03-.62.03-.51,0-.92-.05-1.22-.15-.31-.1-.55-.24-.72-.44-.18-.19-.29-.43-.36-.72-.06-.29-.1-.62-.11-.99v-5.28h-1.45v-1.49h-.03ZM64.58,12.01h1.82v1.21h.03c.27-.52.65-.89,1.13-1.12.48-.23,1-.34,1.57-.34.69,0,1.28.12,1.79.38.51.24.93.58,1.27,1.02s.59.94.76,1.52c.17.58.25,1.19.25,1.85,0,.6-.08,1.19-.23,1.74-.15.57-.38,1.06-.69,1.5-.31.44-.7.78-1.17,1.04-.48.26-1.03.39-1.67.39-.28,0-.56-.03-.84-.08s-.55-.14-.81-.25c-.25-.11-.5-.26-.71-.44-.22-.18-.4-.39-.55-.63h-.03v4.46h-1.92v-12.25ZM71.29,16.49c0-.4-.05-.79-.15-1.18-.1-.38-.25-.72-.46-1.01-.2-.3-.46-.53-.76-.71-.31-.17-.65-.27-1.04-.27-.81,0-1.42.29-1.83.86-.41.58-.61,1.34-.61,2.3,0,.45.05.87.16,1.26.11.38.26.72.48.99.21.28.47.5.76.65.3.17.65.24,1.04.24.44,0,.81-.1,1.11-.28.31-.18.55-.43.75-.72.2-.3.34-.63.42-1,.08-.38.12-.76.12-1.15v.02ZM74.68,8.6h1.92v1.87h-1.92v-1.87ZM74.68,12.01h1.92v8.95h-1.92s0-8.95,0-8.95ZM78.31,8.6h1.92v12.36h-1.92s0-12.36,0-12.36ZM86.11,21.2c-.7,0-1.32-.12-1.86-.36s-1-.57-1.38-.98c-.37-.42-.66-.92-.86-1.49-.2-.58-.3-1.21-.3-1.9s.1-1.31.3-1.88c.2-.58.48-1.07.86-1.49.37-.42.84-.74,1.38-.98.54-.24,1.16-.36,1.86-.36s1.32.12,1.86.36,1,.57,1.38.98c.37.42.66.92.86,1.49.2.58.3,1.2.3,1.88s-.1,1.33-.3,1.9c-.2.58-.48,1.07-.86,1.49-.37.42-.84.74-1.38.98s-1.16.36-1.86.36ZM86.11,19.64c.42,0,.8-.1,1.11-.28s.57-.43.77-.72c.2-.3.35-.64.45-1.01.09-.37.14-.76.14-1.15s-.05-.76-.14-1.14-.25-.72-.45-1.01c-.2-.3-.46-.53-.77-.71s-.69-.28-1.11-.28-.8.1-1.11.28c-.31.18-.57.43-.77.71-.2.3-.35.63-.45,1.01-.09.38-.14.76-.14,1.14s.05.78.14,1.15c.09.38.25.72.45,1.01.2.3.46.54.77.72.31.19.69.28,1.11.28ZM91.07,12.01h1.45v-2.69h1.92v2.69h1.73v1.47h-1.73v4.78c0,.21,0,.38.03.54.02.15.06.28.12.38.06.1.15.18.28.24.13.05.29.08.51.08h.41c.14,0,.27-.03.41-.06v1.53c-.21.03-.42.04-.62.07-.2.03-.41.03-.62.03-.51,0-.92-.05-1.22-.15-.31-.1-.55-.24-.72-.44-.18-.19-.29-.43-.36-.72-.06-.29-.1-.62-.11-.99v-5.28h-1.45v-1.49h-.03Z"
                                        style="fill: #fff;"></path>
                                    <polygon data-name="Star"
                                        points="11.52 17.19 15.92 13.9 15.92 13.9 23.03 8.6 14.24 8.6 11.52 0 8.8 8.6 0 8.59 7.12 13.91 4.4 22.5 11.52 17.19 18.63 22.5 16.53 15.85 11.52 17.19"
                                        style="fill: #fff;"></polygon>
                                </svg>
                            </span>
                            <div class="text-white d-flex gap-2 gap-lg-4 mt-4">
                                <p class="mb-0 fw-bold">
                                    Excellent
                                </p>
                                <p class="mb-0">4.6 out of 5</p>
                            </div>
                        </div>
                    </div>
                    <div class="svgs">
                        <div class="d-flex flex-column">
                            <span class="d-flex align-items-end svg-icon">
                                <svg class="svg-icon-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" data-name="Admiral Logo"
                                    viewBox="0 0 64.78 22.32" width="64.78" height="22.32"
                                    preserveAspectRatio="xMidYMid meet"
                                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                    <path data-name="Orbit"
                                        d="M20.58,16.16l.06-.09h1.99s.06,0,.06.03c.21.55.33,1.15.36,1.73-.18.55-.76,2.36-3.26,3.64-1.36.67-2.87.94-4.38.82-1.96-.15-3.87-.7-5.62-1.61-1.96-1-3.75-2.33-5.29-3.94-1.42-1.46-2.57-3.15-3.38-5C.42,10.25.03,8.58,0,6.91,0,.49,6.01.03,7.25,0c5.74-.06,8.97,3.43,8.97,3.43v.09h-.09S12.09-.21,6.59.55c-1.27.15-2.45.7-3.38,1.58-1.15,1.12-1.57,2.67-1.42,4.4.24,2.58,1.9,5.55,4.71,7.94,2.81,2.4,6.16,3.7,8.97,3.76,1.87,0,3.54-.48,4.68-1.61.12-.12.24-.27.36-.42l.06-.03h.01Z"
                                        style="fill: #fff; fill-rule: evenodd;"></path>
                                    <path data-name="Admiral"
                                        d="M22.54,14.95l.12-.94c-.63.79-1.6,1.24-2.6,1.21-1.06,0-1.84-.39-2.36-1.15-.51-.76-.66-1.85-.48-3.21.09-.88.33-1.7.73-2.49.33-.64.82-1.18,1.42-1.58.57-.36,1.24-.55,1.93-.55.94,0,1.63.33,2.08,1l.48-3.79h2.9l-1.39,11.49h-2.84.01ZM56.42,14.95l.12-.91c-.36.36-.82.67-1.27.88-.45.18-.94.27-1.42.27-.88,0-1.54-.24-1.99-.67-.45-.49-.66-1.18-.54-1.85.09-.85.54-1.61,1.27-2.03.73-.45,1.75-.73,3.14-.79l1.27-.06v-.33c.12-.73-.21-1.12-.91-1.12s-1.09.27-1.24.85l-2.6-.21c.51-1.79,1.9-2.67,4.2-2.67,1.27,0,2.18.27,2.72.85s.73,1.42.6,2.61l-.63,5.24h-2.72s0-.06,0-.06ZM6.44,12.88l3.78-8.03c.42-.88,1.3-1.42,2.27-1.42h.24c1.09,0,1.84.58,2.11,1.82.73,3.24,2.18,9.7,2.18,9.7h-3.2l-.39-2.21h-3.87l-.76,1.82c-.85-.45-1.63-1-2.36-1.67h0ZM60.49,14.95l1.39-11.49h2.9l-1.39,11.49s-2.9,0-2.9,0ZM40.76,14.95l1.03-8.46h2.9l-1.03,8.46h-2.9ZM45.12,14.95l1.03-8.46h2.81l-.12,1.03c.3-.36.69-.67,1.12-.88.42-.21.91-.3,1.39-.3.27,0,.54,0,.82.09l-.63,2.49c-.3-.06-.57-.09-.88-.09-.48,0-.94.09-1.36.33-.42.27-.66.76-.73,1.46l-.54,4.34h-2.91ZM36.5,14.95l.66-5.37c.06-.24,0-.49-.09-.73-.15-.18-.36-.27-.6-.24-.3,0-.6.09-.85.3-.24.24-.39.55-.42.88l-.63,5.12h-2.9l.66-5.37c.06-.24,0-.49-.09-.73-.15-.18-.36-.27-.6-.24-.3,0-.6.09-.85.3-.24.24-.39.55-.42.88l-.6,5.12h-2.9l1.03-8.46h2.81l-.12.97c.6-.79,1.51-1.24,2.51-1.24.45,0,.91.09,1.3.33.36.24.6.58.73.97.36-.42.79-.76,1.27-1,.45-.21.97-.33,1.48-.33.85,0,1.48.24,1.84.76.39.52.51,1.27.39,2.24l-.69,5.67h-2.9v.15l-.02.02ZM56.78,11.37l-.94.06c-.42,0-.85.09-1.24.27-.27.15-.42.39-.45.7-.06.52.21.76.85.76.42,0,.85-.12,1.18-.39.3-.27.51-.67.54-1.09v-.3h.06ZM23,10.61c.09-.73.03-1.24-.15-1.58-.21-.33-.6-.52-1-.49-.94,0-1.51.73-1.69,2.15s.21,2.15,1.15,2.12c.45,0,.85-.18,1.12-.55.3-.42.48-.94.51-1.46v-.24l.06.03v.02ZM12.27,6.31l-1.69,3.94h2.36l-.66-3.94h0ZM41.88,5.55l.27-2.09h2.93l-.27,2.12h-2.93s0-.03,0-.03Z"
                                        style="fill: #fff;"></path>
                                </svg>
                            </span>
                            <div class="text-white mt-4">
                                <p class="mb-0">
                                    Part of the Admiral Group
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right cover -->
    <div class="right-cover overflow-hidden container section">
        <h1 class="section-heading">Find the right cover for you
        </h1>
        <div class="cards-section row justify-content-center gap-0">
            <div class="col-sm-7 col-lg-4">
                <div class="pt-5 p-3 position-relative h-100 card">
                    <div class="text-center image">
                        <img src="{{ asset('public/website/assets/people.png') }}" alt="">
                    </div>
                    <h4 class="card-heading">Learning to drive</h4>
                    <div class="mt-3 card-content">
                        <h5>Need to get some practise in?</h5>
                        <p class="mb-5 mt-4 para">Get insurance for an hour, day, or week or as a monthly rolling
                            subscription
                            and
                            practise as much as you want for as long as you need.
                        </p>
                    </div>
                    <span class="py-5"></span>
                    <div class="left-0 position-absolute card-btn-section">
                        <a href="https://www.veygo.com/learner-driver-insurance/">
                            <button class="w-100 button">Learner drivers</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-4">
                <div class="pt-5 p-3 position-relative h-100 card">
                    <div class="text-center image">
                        <img src="{{ asset('public/website/assets/card.png') }}" alt="">
                    </div>
                    <h4 class="card-heading">Just passed</h4>
                    <div class="mt-3 card-content">
                        <h5>Been driving for under a year?
                        </h5>
                        <p class="mb-5 mt-4 para">Tailored cover designed for drivers in their first year of driving.
                            Drive safe and get money off your monthly premium with our New Driver cover. Or opt for our
                            standard new driver insurance for as long as you need.

                        </p>
                    </div>
                    <span class="py-5"></span>
                    <div class="left-0 position-absolute card-btn-section">
                        <a href="https://www.veygo.com/new-driver/">
                            <button class="w-100 button">New drivers</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-4">
                <div class="pt-5 p-3 position-relative h-100 card">
                    <div class="text-center image">
                        <img src="{{ asset('public/website/assets/crown.png') }}" alt="">
                    </div>
                    <h4 class="card-heading">Been driving a while

                    </h4>
                    <div class="mt-3 card-content">
                        <h5>Held your licence for over a year?
                        </h5>
                        <p class="mb-5 mt-4 para">Choose from our range of flexible and affordable cover options, on
                            your own car or someone else’s, all of which can be arranged in minutes.
                        </p>
                    </div>
                    <span class="py-5"></span>
                    <div class="left-0 position-absolute card-btn-section">
                        <a href="https://www.veygo.com/experienced-driver-insurance/">
                            <button class="w-100 button">Experienced drivers</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Two ways to pay -->
    <div class="ways-pay overflow-hidden container section">
        <h1 class="section-heading">Two ways to pay
        </h1>
        <div class="cards-section row justify-content-center gap-0">
            <div class="col-sm-7 col-lg-4">
                <div class="pt-5 p-3 position-relative h-100 card">
                    <div class="text-center image">
                        <img src="{{ asset('public/website/assets/clock.png') }}" alt="">
                    </div>
                    <h4 class="card-heading">Pay-as-you-go cover</h4>
                    <div class="mt-3 card-content">
                        <p class="mb-5 mt-4 para">For as little as an hour or as long as you need.
                        </p>
                    </div>
                    <span class="py-5"></span>
                    <div class="left-0 position-absolute card-btn-section">
                        <a href="https://www.veygo.com/temporary-car-insurance/">
                            <button class="w-100 button">Tell me more</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-4">
                <div class="pt-5 p-3 position-relative h-100 card">
                    <div class="text-center image">
                        <img src="{{ asset('public/website/assets/calender.png') }}" alt="">
                    </div>
                    <h4 class="card-heading">Monthly rolling cover</h4>
                    <div class="mt-3 card-content">
                        <p class="mb-5 mt-4 para">A simple subscription policy that you can cancel for free, at
                            anytime.
                        </p>
                    </div>
                    <span class="py-5"></span>
                    <div class="left-0 position-absolute card-btn-section">
                        <a href="https://www.veygo.com/monthly-subscriptions/">
                            <button class="w-100 button">Tell me more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- On road section -->
    <div class="container text-center mt-5 pt-5 road-section">
        <h1 class="road-heading">Let’s get you on the road.</h1>
        <div class="col-sm-6 col-lg-3 mx-auto mt-5">
            <a href="https://quote.veygo.com/start">
                <button class="w-100 button">Get a quote</button>
            </a>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="row w-100 m-0 section testimonial-section">
        <div
            class="col-lg-6 d-flex justify-content-center align-items-center h-100 order-1 order-lg-0 testimonial-left">
            <div class="testimonial-carousel-wrapper carousel">
                <div class="testimonial-carousel carousel-cards">
                    <div class="p-3 p-md-5 testimonial-card carousel-card active">
                        <div class="d-flex flex-md-row flex-column align-items-center gap-3">
                            <h4 class="mb-0 testimonial-name">Jan</h4>
                            <div class="d-flex gap-1 align-items-center">
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                            </div>
                        </div>
                        <p class="mb-0 mt-4 message">“Not only are they cheaper than a driving lesson or test but
                            they also
                            have
                            taken alot of stress off of my shoulders. They have also given me a massive boost of
                            confidence.”</p>
                    </div>
                    <div class="p-3 p-md-5 testimonial-card carousel-card">
                        <div class="d-flex flex-md-row flex-column align-items-center gap-3">
                            <h4 class="mb-0 testimonial-name">Tash</h4>
                            <div class="d-flex gap-1 align-items-center">
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                            </div>
                        </div>
                        <p class="mb-0 mt-4 message">“Not only are they cheaper than a driving lesson or test but they
                            also have taken alot of stress off of my shoulders. They have also given me a massive boost
                            of confidence.”</p>
                    </div>
                    <div class="p-3 p-md-5 testimonial-card carousel-card">
                        <div class="d-flex flex-md-row flex-column align-items-center gap-3">
                            <h4 class="mb-0 testimonial-name">Claire</h4>
                            <div class="d-flex gap-1 align-items-center">
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                                <div class="star-con"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20.56 20.56">
                                        <rect width="20.56" height="20.56" fill="#219653"></rect>
                                        <path
                                            d="M10.28,13.52l2.68-.72,1.12,3.65-3.8-2.93ZM16.44,8.8h-4.72l-1.45-4.69-1.45,4.69h-4.72l3.82,2.91-1.45,4.69,3.82-2.91,2.35-1.78,3.8-2.91Z"
                                            fill="#fff"></path>
                                    </svg></div>
                            </div>
                        </div>
                        <p class="mb-0 mt-4 message">“So easy to use and got my insurance quickly to be able to drive a
                            member of my families car due to a health emergency thank you.”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 px-5 order-lg-1 order-0 testimonial-right">
            <div class="h-100 d-flex justify-content-center justify-content-lg-start align-items-center">
                <h1 class="mb-0 d-none d-md-block testimonial-heading">Trusted by over <span>1 million customers</span>
                </h1>
                <h1 class="mb-0 d-block d-md-none testimonial-heading">Trusted <span>by millions</span></h1>
            </div>
        </div>
    </div>

    <!-- Four simple steps -->
    <div class="container steps-sections section">
        <h1 class="section-heading">Four simple steps</h1>
        <div class="mt-5 pt-2 pt-lg-4">
            <div class="mt-5">
                <div class="row w-100 gy-5 step">
                    <div class="col-6 col-lg-3 text-center">
                        <div class="text-center image">
                            <img src="{{ asset('public/website/assets/car.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <h3 class="step-heading">1. Vehicle</h3>
                            <p class="mb-0 px-lg-3 step-para">Tell us the vehicle registration and who owns it.</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 text-center">
                        <div class="text-center image">
                            <img src="{{ asset('public/website/assets/card.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <h3 class="step-heading">2. Driver</h3>
                            <p class="mb-0 px-lg-3 step-para">Fill in the driver’s details and driving licence number.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 text-center">
                        <div class="text-center image">
                            <img src="{{ asset('public/website/assets/mobile.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <h3 class="step-heading">3. Quote</h3>
                            <p class="mb-0 px-lg-3 step-para">If you’re happy with it, you can pay there and then.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 text-center">
                        <div class="text-center image">
                            <img src="{{ asset('public/website/assets/mirror.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <h3 class="step-heading">4. Just go</h3>
                            <p class="mb-0 px-lg-3 step-para">Your cover will start whenever you want.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 pt-3 text-center col-8 col-md-6 col-lg-3 mx-auto">
            <a href="https://quote.veygo.com/start">
                <button class="w-100 button step-button">Get a quote</button>
            </a>
        </div>
    </div>

    <!-- Download Section -->
    <div class="container download-section section">
        <div class="mt-5 pt-2 pt-lg-4 text-center">
            <img src="{{ asset('public/website/assets/download.png') }}" alt=""
                class="d-none d-lg-inline img-fluid download-image">
            <img src="{{ asset('public/website/assets/download2.png') }}" alt=""
                class="d-lg-none d-inline img-fluid download-image-2">
        </div>
        <h1 class="mt-md-5 section-heading download-heading">
            Download our app
        </h1>
        <p class="mb-0 mt-3 px-3 px-lg-5 text-center download-para">Get flexible and instant cover on the go. With easy
            access to all
            documents, you can
            manage your
            policies in
            one place with the Veygo app.</p>
        <div class="d-flex justify-content-center mt-5 gap-3 gap-md-4">
            <a href="https://apps.apple.com/gb/app/veygo-uk/id1552373275">
                <div class="download-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        data-name="App Store" viewBox="0 0 135 44.99" width="135" height="44.99"
                        preserveAspectRatio="xMidYMid meet"
                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                        <path
                            d="M7.88.56h119.25c4.04,0,7.31,3.28,7.31,7.31v29.25c0,4.04-3.28,7.31-7.31,7.31H7.87c-4.04,0-7.31-3.28-7.31-7.31V7.88c0-4.04,3.28-7.32,7.32-7.32Z">
                        </path>
                        <path
                            d="M7.88.56h119.25c4.04,0,7.31,3.28,7.31,7.31v29.25c0,4.04-3.28,7.31-7.31,7.31H7.87c-4.04,0-7.31-3.28-7.31-7.31V7.88c0-4.04,3.28-7.32,7.32-7.32Z"
                            style="fill: none; stroke: #a6a6a6; stroke-width: 1.12px;"></path>
                        <path
                            d="M91.72,21.6v2.58h-1.62v1.69h1.62v5.74c0,1.96.89,2.75,3.12,2.75.39,0,.77-.05,1.09-.1v-1.67c-.28.03-.46.05-.77.05-1,0-1.44-.47-1.44-1.53v-5.23h2.2v-1.69h-2.2v-2.58h-2.01.01Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M101.61,34.5c2.97,0,4.79-1.99,4.79-5.29s-1.83-5.28-4.79-5.28-4.8,2-4.8,5.28,1.82,5.29,4.8,5.29ZM101.61,32.71c-1.75,0-2.73-1.28-2.73-3.5s.98-3.49,2.73-3.49,2.73,1.29,2.73,3.49-.99,3.5-2.73,3.5Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M107.96,34.3h2.01v-6c0-1.43,1.07-2.39,2.6-2.39.35,0,.95.07,1.12.12v-1.98c-.21-.06-.6-.08-.9-.08-1.33,0-2.46.73-2.75,1.73h-.15v-1.56h-1.93v10.17h0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M118.67,25.64c1.49,0,2.46,1.04,2.5,2.63h-5.14c.11-1.59,1.15-2.63,2.63-2.63h.01ZM121.17,31.56c-.37.79-1.2,1.23-2.42,1.23-1.61,0-2.64-1.13-2.71-2.91v-.11h7.18v-.7c0-3.19-1.71-5.13-4.54-5.13s-4.69,2.06-4.69,5.31,1.78,5.25,4.7,5.25c2.32,0,3.95-1.12,4.41-2.94,0,0-1.93,0-1.93,0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M78.55,30.55c.15,2.5,2.24,4.09,5.33,4.09,3.31,0,5.38-1.67,5.38-4.35,0-2.1-1.18-3.26-4.05-3.93l-1.54-.38c-1.82-.43-2.56-1-2.56-1.99,0-1.26,1.14-2.08,2.86-2.08s2.75.8,2.95,2.09h2.11c-.13-2.35-2.2-4.01-5.03-4.01-3.05,0-5.08,1.66-5.08,4.14,0,2.05,1.15,3.27,3.68,3.86l1.8.44c1.85.44,2.66,1.07,2.66,2.14,0,1.24-1.28,2.14-3.02,2.14-1.87,0-3.17-.84-3.35-2.17h-2.15,0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M57.75,23.96c-1.38,0-2.58.69-3.19,1.85h-.15v-1.68h-1.93v13.55h2.01v-4.92h.16c.53,1.07,1.68,1.71,3.13,1.71,2.57,0,4.2-2.03,4.2-5.26s-1.63-5.25-4.22-5.25h0ZM57.18,32.67c-1.68,0-2.74-1.33-2.74-3.45s1.06-3.46,2.75-3.46,2.72,1.3,2.72,3.45-1.02,3.46-2.73,3.46Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M69,23.96c-1.38,0-2.58.69-3.19,1.85h-.15v-1.68h-1.93v13.55h2.01v-4.92h.16c.53,1.07,1.68,1.71,3.13,1.71,2.57,0,4.2-2.03,4.2-5.26s-1.63-5.25-4.22-5.25h0ZM68.43,32.67c-1.68,0-2.74-1.33-2.74-3.45s1.06-3.46,2.75-3.46,2.72,1.3,2.72,3.45-1.02,3.46-2.73,3.46Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M48.87,34.3h2.3l-5.04-13.97h-2.33l-5.04,13.97h2.23l1.29-3.71h5.32l1.28,3.71h0ZM44.86,22.87h.16l2.02,5.9h-4.22l2.03-5.9h.01Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M40.11,9.8v6.74h2.43c2.01,0,3.17-1.24,3.17-3.39s-1.17-3.35-3.17-3.35c0,0-2.43,0-2.43,0ZM41.15,10.75h1.27c1.4,0,2.22.89,2.22,2.41s-.81,2.42-2.22,2.42h-1.27v-4.83Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M49.27,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM49.27,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.5,1.75-1.36,1.75Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M59.42,11.45h-1l-.91,3.88h-.08l-1.05-3.88h-.96l-1.05,3.88h-.07l-.91-3.88h-1.02l1.4,5.08h1.03l1.05-3.74h.08l1.05,3.74h1.04s1.4-5.08,1.4-5.08Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M60.58,16.54h1v-2.97c0-.79.47-1.29,1.21-1.29s1.1.41,1.1,1.22v3.04h1v-3.29c0-1.21-.63-1.89-1.76-1.89-.77,0-1.27.34-1.52.91h-.07v-.81h-.97v5.08h.01Z"
                            style="fill: #fff;"></path>
                        <path d="M66.48,16.54h1v-7.07h-1v7.07Z" style="fill: #fff;"></path>
                        <path
                            d="M71.26,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM71.26,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.49,1.75-1.36,1.75Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M76.64,15.78c-.55,0-.94-.27-.94-.72s.32-.69,1.02-.73l1.24-.08v.42c0,.63-.56,1.11-1.32,1.11ZM76.39,16.62c.67,0,1.22-.29,1.53-.8h.08v.71h.97v-3.47c0-1.07-.72-1.71-1.99-1.71-1.15,0-1.98.56-2.08,1.43h.97c.11-.36.5-.56,1.06-.56.69,0,1.04.3,1.04.84v.44l-1.38.08c-1.21.07-1.89.6-1.89,1.52s.71,1.52,1.69,1.52Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M82.36,16.62c.7,0,1.29-.33,1.6-.89h.08v.8h.96v-7.07h-1v2.79h-.07c-.28-.56-.86-.89-1.56-.89-1.28,0-2.11,1.02-2.11,2.62s.82,2.63,2.11,2.63h-.01ZM82.65,12.27c.84,0,1.37.67,1.37,1.73s-.52,1.72-1.37,1.72-1.36-.65-1.36-1.73.51-1.72,1.36-1.72Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M91.51,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM91.51,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.49,1.75-1.36,1.75Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M95.24,16.54h1v-2.97c0-.79.47-1.29,1.21-1.29s1.1.41,1.1,1.22v3.04h1v-3.29c0-1.21-.63-1.89-1.76-1.89-.77,0-1.27.34-1.52.91h-.07v-.81h-.97v5.08h.01Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M104.18,10.19v1.29h-.81v.85h.81v2.87c0,.98.44,1.37,1.56,1.37.2,0,.38-.02.55-.05v-.84c-.14.01-.23.02-.38.02-.5,0-.72-.23-.72-.77v-2.61h1.1v-.85h-1.1v-1.29h-1.01Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M107.63,16.54h1v-2.97c0-.77.46-1.29,1.28-1.29.71,0,1.09.41,1.09,1.22v3.03h1v-3.28c0-1.21-.67-1.9-1.75-1.9-.76,0-1.3.34-1.55.91h-.08v-2.8h-.99v7.07h0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M115.63,12.21c.74,0,1.23.52,1.25,1.32h-2.57c.06-.79.57-1.32,1.32-1.32ZM116.88,15.16c-.19.4-.6.62-1.21.62-.8,0-1.32-.57-1.35-1.46v-.06h3.59v-.35c0-1.6-.86-2.56-2.27-2.56s-2.34,1.03-2.34,2.66.89,2.62,2.35,2.62c1.16,0,1.97-.56,2.2-1.47,0,0-.97,0-.97,0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M27.86,22.84c.02-1.89,1.04-3.68,2.65-4.67-1.02-1.45-2.72-2.37-4.49-2.43-1.89-.2-3.72,1.13-4.68,1.13s-2.46-1.11-4.06-1.08c-2.08.07-4.02,1.25-5.03,3.07-2.18,3.77-.55,9.3,1.53,12.35,1.04,1.49,2.26,3.16,3.86,3.1,1.56-.06,2.14-.99,4.03-.99s2.41.99,4.04.96c1.67-.03,2.73-1.5,3.74-3,.75-1.06,1.33-2.24,1.71-3.48-1.97-.83-3.28-2.81-3.28-4.95h-.02Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M24.79,13.74c.91-1.1,1.36-2.5,1.25-3.93-1.39.15-2.68.81-3.61,1.87-.9,1.03-1.38,2.41-1.29,3.78,1.4.01,2.77-.63,3.64-1.72h.01Z"
                            style="fill: #fff;"></path>
                    </svg>
                </div>
            </a>
            <a href="https://play.google.com/store/apps/details?id=uk.co.admiralgroup.CSI&hl=en_GB">
                <div class="download-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        data-name="Google Play" viewBox="0 0 148.5 44" width="148.5" height="44"
                        preserveAspectRatio="xMidYMid meet"
                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                        <rect x=".55" y=".55" width="147.4" height="42.9" rx="4.95" ry="4.95"></rect>
                        <rect x=".55" y=".55" width="147.4" height="42.9" rx="4.95" ry="4.95"
                            style="fill: none; stroke: #a6a6a6; stroke-width: 1.1px;"></rect>
                        <path
                            d="M74.95,23.93c-2.59,0-4.7,1.97-4.7,4.68s2.11,4.68,4.7,4.68,4.7-1.98,4.7-4.68-2.11-4.68-4.7-4.68ZM74.95,31.44c-1.42,0-2.64-1.17-2.64-2.84s1.22-2.84,2.64-2.84,2.64,1.15,2.64,2.84-1.22,2.84-2.64,2.84ZM64.7,23.93c-2.59,0-4.7,1.97-4.7,4.68s2.11,4.68,4.7,4.68,4.7-1.98,4.7-4.68-2.11-4.68-4.7-4.68ZM64.7,31.44c-1.42,0-2.64-1.17-2.64-2.84s1.22-2.84,2.64-2.84,2.64,1.15,2.64,2.84-1.22,2.84-2.64,2.84ZM52.52,25.36v1.98h4.75c-.14,1.12-.51,1.93-1.08,2.5-.69.69-1.77,1.45-3.67,1.45-2.92,0-5.21-2.36-5.21-5.28s2.29-5.28,5.21-5.28c1.58,0,2.73.62,3.58,1.42l1.4-1.4c-1.19-1.13-2.76-2-4.98-2-4.01,0-7.37,3.26-7.37,7.27s3.37,7.27,7.37,7.27c2.16,0,3.79-.71,5.07-2.04,1.31-1.31,1.72-3.15,1.72-4.64,0-.46-.04-.89-.11-1.24h-6.68ZM102.36,26.9c-.39-1.05-1.58-2.98-4-2.98s-4.41,1.9-4.41,4.68c0,2.62,1.99,4.68,4.64,4.68,2.14,0,3.38-1.31,3.9-2.07l-1.6-1.06c-.53.78-1.26,1.29-2.3,1.29s-1.79-.48-2.27-1.42l6.26-2.59-.21-.53s-.01,0-.01,0ZM95.98,28.46c-.05-1.81,1.4-2.73,2.45-2.73.82,0,1.51.41,1.74.99l-4.18,1.74h0ZM90.89,33h2.05v-13.75h-2.05v13.75ZM87.52,24.97h-.07c-.46-.55-1.35-1.05-2.46-1.05-2.34,0-4.48,2.06-4.48,4.7s2.14,4.66,4.48,4.66c1.12,0,2-.5,2.46-1.06h.07v.67c0,1.79-.96,2.75-2.5,2.75-1.26,0-2.04-.9-2.36-1.67l-1.79.74c.51,1.24,1.88,2.76,4.15,2.76,2.41,0,4.45-1.42,4.45-4.87v-8.4h-1.95v.76h0ZM85.17,31.44c-1.42,0-2.6-1.19-2.6-2.82s1.19-2.85,2.6-2.85,2.5,1.2,2.5,2.85-1.1,2.82-2.5,2.82ZM111.99,19.25h-4.92v13.75h2.05v-5.21h2.87c2.28,0,4.51-1.65,4.51-4.27s-2.24-4.27-4.51-4.27ZM112.04,25.88h-2.92v-4.71h2.92c1.53,0,2.4,1.27,2.4,2.36s-.87,2.36-2.4,2.36h0ZM124.72,23.9c-1.49,0-3.03.65-3.66,2.11l1.82.76c.39-.76,1.11-1.01,1.88-1.01,1.06,0,2.14.64,2.16,1.77v.14c-.37-.21-1.17-.53-2.14-.53-1.96,0-3.96,1.08-3.96,3.1,0,1.84,1.61,3.02,3.41,3.02,1.38,0,2.14-.62,2.62-1.35h.07v1.06h1.98v-5.27c0-2.44-1.82-3.8-4.17-3.8,0,0-.01,0-.01,0ZM124.48,31.44c-.67,0-1.61-.34-1.61-1.17,0-1.06,1.17-1.47,2.18-1.47.9,0,1.33.19,1.87.46-.16,1.27-1.26,2.18-2.44,2.18ZM136.12,24.2l-2.35,5.96h-.07l-2.44-5.96h-2.21l3.66,8.33-2.09,4.64h2.14l5.64-12.97h-2.28,0ZM117.63,33h2.05v-13.75h-2.05v13.75Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M52.16,11.27c0,.92-.27,1.66-.82,2.2-.62.65-1.43.98-2.42.98s-1.76-.33-2.43-.99c-.67-.66-1-1.48-1-2.46s.33-1.8,1-2.46,1.48-.99,2.43-.99c.47,0,.93.09,1.35.28.43.18.77.43,1.03.74l-.58.58c-.44-.52-1.04-.78-1.81-.78-.7,0-1.3.24-1.8.73-.51.49-.76,1.12-.76,1.9s.25,1.41.76,1.9,1.11.73,1.8.73c.74,0,1.35-.25,1.84-.74.32-.32.5-.77.55-1.34h-2.4v-.79h3.2c.03.17.05.34.05.5h.01Z"
                            style="fill: #fff;"></path>
                        <path d="M57.23,8.51h-3.01v2.09h2.71v.79h-2.71v2.09h3.01v.81h-3.85v-6.6h3.85v.81h0Z"
                            style="fill: #fff;"></path>
                        <path d="M60.81,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z" style="fill: #fff;">
                        </path>
                        <path d="M65.93,14.3v-6.6h.85v6.6h-.85Z" style="fill: #fff;"></path>
                        <path d="M70.54,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z" style="fill: #fff;">
                        </path>
                        <path
                            d="M80.97,13.45c-.65.67-1.46,1-2.42,1s-1.77-.33-2.42-1-.97-1.48-.97-2.45.32-1.78.97-2.45,1.45-1,2.42-1,1.76.34,2.42,1.01.98,1.48.98,2.44-.32,1.78-.97,2.45h-.01ZM76.76,12.89c.49.49,1.09.74,1.79.74s1.31-.25,1.79-.74c.49-.49.73-1.13.73-1.89s-.25-1.4-.73-1.89c-.49-.49-1.09-.74-1.79-.74s-1.3.25-1.79.74c-.49.5-.73,1.13-.73,1.89s.25,1.4.73,1.89Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M83.13,14.3v-6.6h1.03l3.21,5.13h.04l-.04-1.27v-3.86h.85v6.6h-.89l-3.36-5.38h-.04l.04,1.27v4.11h-.85s.01,0,.01,0Z"
                            style="fill: #fff;"></path>
                        <path
                            d="M52.16,11.27c0,.92-.27,1.66-.82,2.2-.62.65-1.43.98-2.42.98s-1.76-.33-2.43-.99c-.67-.66-1-1.48-1-2.46s.33-1.8,1-2.46,1.48-.99,2.43-.99c.47,0,.93.09,1.35.28.43.18.77.43,1.03.74l-.58.58c-.44-.52-1.04-.78-1.81-.78-.7,0-1.3.24-1.8.73-.51.49-.76,1.12-.76,1.9s.25,1.41.76,1.9,1.11.73,1.8.73c.74,0,1.35-.25,1.84-.74.32-.32.5-.77.55-1.34h-2.4v-.79h3.2c.03.17.05.34.05.5h.01Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path d="M57.23,8.51h-3.01v2.09h2.71v.79h-2.71v2.09h3.01v.81h-3.85v-6.6h3.85v.81h0Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path d="M60.81,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path d="M65.93,14.3v-6.6h.85v6.6h-.85Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path d="M70.54,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path
                            d="M80.97,13.45c-.65.67-1.46,1-2.42,1s-1.77-.33-2.42-1-.97-1.48-.97-2.45.32-1.78.97-2.45,1.45-1,2.42-1,1.76.34,2.42,1.01.98,1.48.98,2.44-.32,1.78-.97,2.45h-.01ZM76.76,12.89c.49.49,1.09.74,1.79.74s1.31-.25,1.79-.74c.49-.49.73-1.13.73-1.89s-.25-1.4-.73-1.89c-.49-.49-1.09-.74-1.79-.74s-1.3.25-1.79.74c-.49.5-.73,1.13-.73,1.89s.25,1.4.73,1.89Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path
                            d="M83.13,14.3v-6.6h1.03l3.21,5.13h.04l-.04-1.27v-3.86h.85v6.6h-.89l-3.36-5.38h-.04l.04,1.27v4.11h-.85s.01,0,.01,0Z"
                            style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;"></path>
                        <path
                            d="M11.48,8.29c-.32.34-.51.86-.51,1.55v24.33c0,.68.19,1.21.51,1.55l.08.08,13.63-13.63v-.32l-13.63-13.63-.08.08h0Z"
                            style="fill: #47c7fc;"></path>
                        <path
                            d="M29.73,26.71l-4.54-4.54v-.32l4.54-4.54.1.06,5.38,3.06c1.54.87,1.54,2.3,0,3.18l-5.38,3.06-.1.06s0-.02,0-.02Z"
                            style="fill: #f8c92d;"></path>
                        <path d="M29.83,26.65l-4.65-4.65-13.71,13.71c.51.54,1.34.6,2.29.07,0,0,16.07-9.13,16.07-9.13Z"
                            style="fill: #e23f44;"></path>
                        <path d="M29.83,17.35L13.77,8.22c-.94-.54-1.78-.47-2.29.07l13.71,13.71,4.65-4.65h-.01Z"
                            style="fill: #4fec72;"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <!-- Veygo Hub -->
    <div class="section">
        <div class="hub-section">
            <h1 class="section-heading">Veygo Hub</h1>
            <div class="hub-carousal">
                <section class="ftco-section">
                    <div class="overflow-hidden position-relative hub-container">
                        <div class="shadow-left"></div>
                        <div class="shadow-right"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="featured-carousel owl-carousel">
                                    <div class="item">
                                        <a
                                            href="https://www.veygo.com/learner-driver-insurance/guides/insurance-groups-explained/">
                                            <div class="shadow position-relative work">
                                                <img src="{{ asset('public/website/assets/card1.jpg') }}"
                                                    alt="" class="img">
                                                <div class="p-4 bg-white content">
                                                    <h5 class="card-heading">Insurance groups explained</h5>
                                                    <p class="text-grey card-para">Insurance is an essential aspect of
                                                        owning a vehicle, providing a
                                                        safety net for unexpected events...</p>
                                                </div>
                                                <div class="d-flex align-itens-center gap-2 card-author">
                                                    <img src="{{ asset('public/website/assets/person.png') }}"
                                                        alt="" class="author-image">
                                                    <div>
                                                        <h6 class="mb-0 author-name">Angharad Evans</h6>
                                                        <p class="mb-0 date">Aug 28 2024 < 1 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a
                                            href="https://www.veygo.com/guides/staycation-driving-guide-veygos-advice-to-help-young-drivers-at-higher-risk-of-fatigue/">
                                            <div class="shadow position-relative work">
                                                <img src="{{ asset('public/website/assets/card2.jpg') }}"
                                                    alt="" class="img">
                                                <div class="p-4 bg-white content">
                                                    <h5 class="card-heading">Staycation driving guide. Veygo’s advice
                                                        to
                                                        help young drivers at higher risk of fatigue.</h5>
                                                    <p class="text-grey card-para">While road trips can be exciting,
                                                        research shows that the risk of driver fatigue is
                                                        particularly...
                                                    </p>
                                                </div>
                                                <div class="d-flex align-itens-center gap-2 card-author">
                                                    <img src="{{ asset('public/website/assets/person.png') }}"
                                                        alt="" class="author-image">
                                                    <div>
                                                        <h6 class="mb-0 author-name">Angharad Evans</h6>
                                                        <p class="mb-0 date">Aug 28 2024 < 1 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a
                                            href="https://www.veygo.com/temporary-car-insurance/guides/what-affects-your-car-insurance-costs/">
                                            <div class="shadow position-relative work">
                                                <img src="{{ asset('public/website/assets/card3.png') }}"
                                                    alt="" class="img">
                                                <div class="p-4 bg-white content">
                                                    <h5 class="card-heading">What affects your car insurance costs?
                                                    </h5>
                                                    <p class="text-grey card-para">We know that car insurance costs can
                                                        be
                                                        confusing, whether you’re looking for learner insurance, new...
                                                    </p>
                                                </div>
                                                <div class="d-flex align-itens-center gap-2 card-author">
                                                    <img src="{{ asset('public/website/assets/person.png') }}"
                                                        alt="" class="author-image">
                                                    <div>
                                                        <h6 class="mb-0 author-name">Angharad Evans</h6>
                                                        <p class="mb-0 date">Aug 28 2024 < 1 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a
                                            href="https://www.veygo.com/temporary-car-insurance/guides/what-to-do-during-rail-strikes/">
                                            <div class="shadow position-relative work">
                                                <img src="{{ asset('public/website/assets/card4.png') }}"
                                                    alt="" class="img">
                                                <div class="p-4 bg-white content">
                                                    <h5 class="card-heading">What to do during rail strikes</h5>
                                                    <p class="text-grey card-para"> What are the rail strikes?
                                                        Following
                                                        ongoing pay industrial disputes, rail workers have, once more,
                                                        opted…
                                                    </p>
                                                </div>
                                                <div class="d-flex align-itens-center gap-2 card-author">
                                                    <img src="{{ asset('public/website/assets/person.png') }}"
                                                        alt="" class="author-image">
                                                    <div>
                                                        <h6 class="mb-0 author-name">Angharad Evans</h6>
                                                        <p class="mb-0 date">Aug 28 2024 < 1 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="mt-5 pt-3 text-center col-8 col-md-6 col-lg-3 mx-auto">
                <a href="https://www.veygo.com/veygo-magazine/">
                    <button class="w-100 button hub-button">Discover more</button>
                </a>
            </div>
        </div>

    </div>

    <!-- FAQ -->
    <div class="section">
        <div class="container faq-section">
            <div class="row gy-5">
                <div class="col-md-6">
                    <h1 class="pe-5 pt-md-4 faq-heading">Answers to some questions you might have</h1>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $faq)
                            <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                                <h2 class="accordion-header">
                                    <button class="shadow-none border-none accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#{{ $faq->id }}"
                                        aria-expanded="false" aria-controls="{{ $faq->id }}">
                                        <p class="mb-0 pe-4 pe-lg-3">{{ $faq->questions }}</p>
                                    </button>
                                </h2>
                                <div id="{{ $faq->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $faq->answers !!}
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        {{-- <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <p class="mb-0 pe-4 pe-lg-3">How do I cancel my one off policy?</p>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <p class="mb-0 pe-4 pe-lg-3">Why am I not allowed to purchase cover even though I
                                        have completed a quote?</p>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <p class="mb-0 pe-4 pe-lg-3">I’ve passed my test, now what?</p>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <p class="mb-0 pe-4 pe-lg-3">How do I get a quote?</p>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <p class="mb-0 pe-4 pe-lg-3">I need to change my title, middle name, private
                                        registration or the alternative insurer
                                    </p>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-none border-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#7" aria-expanded="false"
                                    aria-controls="7">
                                    <p class="mb-0 pe-4 pe-lg-3">Why is my registration not showing as insured on MID?
                                    </p>
                                </button>
                            </h2>
                            <div id="7" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="border-top-0 border-start-0 border-end-0 accordion-item">
                            <h2 class="accordion-header">
                                <button class="shadow-noneborder-none accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    <p class="mb-0 pe-4 pe-lg-3">Why is my registration not being recognised when
                                        trying to obtain a quote?</p>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class=" footer-logo">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            data-name="Veygo Logo" viewBox="0 0 100.13 40" width="100.13" height="40"
                            preserveAspectRatio="xMidYMid meet"
                            style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"
                            class="fill-current">
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
            </div>
        </div>
        <div class="pt-5 footer-bottom">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <h4 class="mb-4 footer-heading">Insurance</h4>
                        <ul class="footer-list">
                            <li><a href="https://account.veygo.com/purchases">Start a claim</a></li>
                            <li><a href="https://www.veygo.com/learner-driver-insurance/">Learner driver insurance</a>
                            </li>
                            <li><a href="https://www.veygo.com/new-driver/">New driver insurance</a></li>
                            <li><a href="https://www.veygo.com/experienced-driver-insurance/">Experienced driver
                                    insurance</a></li>
                            <li><a href="https://www.veygo.com/temporary-car-insurance/">Pay-as-you-go cover</a></li>
                            <li><a href="https://www.veygo.com/monthly-subscriptions/">Monthly rolling cover</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <h4 class="mb-4 footer-heading">Company</h4>
                        <ul class="footer-list">
                            <li><a href="https://www.veygo.com/about-us/">About us</a></li>
                            <li><a href="https://www.veygo.com/careers/">Careers</a></li>
                            <li><a href="https://www.veygo.com/veygo-magazine/">Magazine</a></li>
                            <li><a href="https://www.veygo.com/help/">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <h4 class="mb-4 footer-heading">Legal</h4>
                        <ul class="footer-list">
                            <li><a href="https://www.veygo.com/conditions-of-use/">Condition of use</a></li>
                            <li><a href="https://www.veygo.com/privacy-policy/">Privacy policy</a></li>
                            <li><a href="https://www.veygo.com/cookie-policy/">Cookie policy</a></li>
                            <li><a
                                    href="https://quote.veygo.com/static/Your_Agreement_with_Able_Insurance_Services_Limited.pdf">Your
                                    agreement</a></li>
                            <li><a href="https://www.veygo.com/modern-slavery-statement/">Modern slavery statement</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <h4 class="mb-4 footer-heading">Hours</h4>
                        <ul class="footer-list">
                            <li><a href="#">Monday - Friday 9am - 5pm</a></li>
                            <li><a href="#">Saturday - 8am - 2pm</a><span class=" mail-only"><i>(email
                                        only)</i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <h4 class="in-touch-heading">Stay in touch</h4>
                    <div class="mt-3 d-flex gap-3">
                        <a href="https://www.facebook.com/VeygoUK/" class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="Facebook" viewBox="0 0 1000 1000" width="1000" height="1000"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path id="b" data-name="Circle f"
                                    d="M500,0C223.86,0,0,223.86,0,500s223.86,500,500,500c2.39,0,4.77-.02,7.15-.05v-389.76h-105.79v-125.39h106.53c0-4.91-.04-8.7,0-12.5.31-33.84-.5-67.73,1.19-101.5,3.53-70.66,46.4-123.29,113.9-137.89,23.19-5.02,47.77-4.67,71.73-4.83,22.97-.15,45.95,2.23,69.4,3.52v112.55c-11.06,0-22.03-.24-32.99.05-18.18.48-36.58-.27-54.47,2.34-23.63,3.45-36.67,16.52-38.03,40.27-1.84,32.05-.46,64.29-.46,97.58h122.95c-5.49,42.35-10.8,83.41-16.2,125.11h-106.77v371.17c208.95-59.94,361.86-252.44,361.86-480.67C1000,223.86,776.14,0,500,0Z"
                                    style="fill: #005465;"></path>
                            </svg>
                        </a>
                        <a href="https://x.com/VeygoUK" class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="x" viewBox="0 0 1000 1000" width="1000" height="1000"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path id="b" data-name="X Circle"
                                    d="M500,0C223.86,0,0,223.86,0,500s223.86,500,500,500,500-223.86,500-500S776.14,0,500,0ZM775.71,793.32c-50.02.02-100.04-.13-150.06.18-6.95.04-11.03-2.04-14.99-7.85-47.59-69.84-95.47-139.48-143.28-209.17-2.2-3.21-4.43-6.4-7.44-10.75-2.43,2.68-4.51,4.88-6.49,7.18-59.95,69.8-119.99,139.53-179.69,209.55-6.61,7.76-13.1,12.14-23.77,11.12-11.22-1.07-22.63-.24-36.45-.24,75.34-87.77,149.29-173.93,223.78-260.7-74.35-108.45-148.5-216.59-223.59-326.11,4.75-.26,7.85-.57,10.95-.57,50.02-.03,100.04.11,150.06-.18,7-.04,11.08,2.24,15.01,8.01,45.02,66.09,90.33,131.98,135.56,197.92,2.2,3.2,4.44,6.36,7.09,10.15,22-25.59,43.61-50.7,65.19-75.83,37.91-44.16,75.88-88.27,113.6-132.59,4.61-5.42,9.26-8.04,16.56-7.68,12.58.62,25.21.17,40.7.17l-.02.02c-72.16,84.06-142.64,166.17-213.6,248.83,77.02,112.33,153.95,224.52,231.77,338.02-4.73.23-7.81.52-10.89.52Z"
                                    style="fill: #005465;"></path>
                                <path id="c" data-name="Stripe"
                                    d="M717.39,757.12c-25.73,0-49.65.28-73.54-.34-3.1-.08-6.8-4.32-9.02-7.48-72.46-103.59-144.76-207.28-217.1-310.96-42.77-61.3-85.56-122.59-128.33-183.89-2-2.86-3.88-5.81-6.87-10.31,21.4,0,41.38.85,61.24-.31,12.25-.72,18.96,3.73,25.83,13.62,113.46,163.35,227.36,326.39,341.15,489.51,1.96,2.8,3.74,5.73,6.63,10.17h.01Z"
                                    style="fill: #005465;"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/veygouk/" class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="Instagram" viewBox="0 0 1000 1000" width="1000" height="1000"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path id="b" data-name="Circle"
                                    d="M500,0C223.86,0,0,223.86,0,500s223.86,500,500,500,500-223.86,500-500S776.14,0,500,0ZM785.42,622.04c-.39,25.53-5.31,50.53-16.31,73.78-25.21,53.27-68.81,82.69-126.11,86.75-61.78,4.37-123.95,4.09-185.95,4.09-36.61.01-73.6-.65-109.74-5.8-71.84-10.25-122.52-64.8-128.57-137.56-3.96-47.6-4.03-95.52-5.83-143.02h0s0,0,0,0c0,0,0,0,0,0,1.79-47.85,1.81-95.44,5.74-142.72,6.45-77.55,62.78-134.87,140.26-140.2,62.11-4.27,124.6-3.97,186.93-3.98,36.28-.01,72.96.59,108.76,5.78,72.15,10.47,121.42,64.55,128.86,137.48,2.15,21.01,3.61,42.2,3.6,63.31-.04,67.36-.62,134.73-1.64,202.09Z"
                                    style="fill: #005465;"></path>
                                <path id="c" data-name="Camera"
                                    d="M501.12,263.74c43.04,1.23,86.59,1.4,130,3.98,60.06,3.57,99.74,41.49,101.33,101.45,2.3,86.77,2.38,173.7.06,260.47-1.64,61.29-40.99,100.68-102.25,102.35-86.27,2.35-172.7,2.3-258.97-.02-60.69-1.63-100.2-41.07-101.82-101.69-2.32-86.77-2.33-173.7,0-260.47,1.63-60.68,41.13-98.49,101.71-102.12,43.08-2.58,86.3-2.71,129.95-3.95h-.01ZM648.01,499.92c-.07-81.39-65.32-146.91-146.63-147.24-81.46-.32-147.52,65.7-147.46,147.38.06,81.32,65.38,146.91,146.64,147.26,81.41.34,147.51-65.74,147.45-147.4h0ZM688.18,347.66c.4-18.97-14.2-34.64-32.84-35.22-19.46-.61-35.24,14.17-35.61,33.36-.37,19.08,14.12,34.64,32.78,35.2,19.46.58,35.26-14.19,35.67-33.34Z"
                                    style="fill: #005465;"></path>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCvuws7xIFKzWHP6YabGiMZA" class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="YouTube" viewBox="0 0 1000 1000" width="1000" height="1000"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path id="b" data-name="Circle"
                                    d="M500,0C223.86,0,0,223.86,0,500s223.86,500,500,500,500-223.86,500-500S776.14,0,500,0ZM803.75,623.57c-7.58,55.43-33.26,79.58-89.66,84.15-135.58,10.98-271.24,10.29-406.9,1.75-14.54-.92-29.12-2.8-43.43-5.58-34.34-6.68-57.48-27.26-63.43-61.72-6.01-34.81-9.26-70.28-11.02-105.6-3.04-61.18-1.57-122.39,10.31-182.75,7.49-38.08,33.52-62.69,72.37-65.36v.02c67.99-4.68,362.94-5.91,436.87-2.29,10,.49,20.07,2.09,29.84,4.33,32.86,7.54,55.18,27.78,60.85,60.95,6.07,35.45,9.38,71.55,11.32,107.51,2.96,54.99.35,109.97-7.12,164.59Z"
                                    style="fill: #005465;"></path>
                                <path id="c" data-name="Play"
                                    d="M437.26,593.48v-186.96c54.1,31.21,107.11,61.79,161.98,93.45-54.49,31.45-107.61,62.12-161.98,93.51Z"
                                    style="fill: #005465;"></path>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@veygouk" class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="TikTok" viewBox="0 0 1000 1000" width="1000" height="1000"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path id="b" data-name="Circle"
                                    d="M500,0C223.86,0,0,223.86,0,500s223.86,500,500,500,500-223.86,500-500S776.14,0,500,0ZM750.46,449.92c-52.69.16-99.35-16.61-143.5-48.66,0,5.37-.01,8.99,0,12.62.23,64.11.7,128.22.64,192.33-.07,78.23-47.28,144.43-120.34,169.53-106.77,36.69-219.36-32.4-235.29-144.38-13.63-95.83,59.85-189.15,156.26-197.77,15.37-1.37,30.96-.19,47.41-.19h0s.01,0,.01,0c0,0,0,0-.01,0v94.2c-6.48-.9-12.69-2.08-18.95-2.58-45.96-3.65-84.86,27.8-91.17,73.58-5.92,42.93,25.01,85.2,68,92.93,45.33,8.16,87.65-19.32,97.9-64.1,1.94-8.46,2.34-17.42,2.35-26.15.19-124.32.2-248.63.25-372.95v-13.11h92.65c1.69,39.11,15.32,73.02,43.24,100.56,27.66,27.28,61.36,40.41,100.55,41.9v92.24Z"
                                    style="fill: #005465;"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="d-flex pt-4 mt-5 gap-3 gap-md-4">
                    <a href="https://apps.apple.com/gb/app/veygo-uk/id1552373275">
                        <div class="download-button">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="App Store" viewBox="0 0 135 44.99" width="135" height="44.99"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <path
                                    d="M7.88.56h119.25c4.04,0,7.31,3.28,7.31,7.31v29.25c0,4.04-3.28,7.31-7.31,7.31H7.87c-4.04,0-7.31-3.28-7.31-7.31V7.88c0-4.04,3.28-7.32,7.32-7.32Z">
                                </path>
                                <path
                                    d="M7.88.56h119.25c4.04,0,7.31,3.28,7.31,7.31v29.25c0,4.04-3.28,7.31-7.31,7.31H7.87c-4.04,0-7.31-3.28-7.31-7.31V7.88c0-4.04,3.28-7.32,7.32-7.32Z"
                                    style="fill: none; stroke: #a6a6a6; stroke-width: 1.12px;"></path>
                                <path
                                    d="M91.72,21.6v2.58h-1.62v1.69h1.62v5.74c0,1.96.89,2.75,3.12,2.75.39,0,.77-.05,1.09-.1v-1.67c-.28.03-.46.05-.77.05-1,0-1.44-.47-1.44-1.53v-5.23h2.2v-1.69h-2.2v-2.58h-2.01.01Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M101.61,34.5c2.97,0,4.79-1.99,4.79-5.29s-1.83-5.28-4.79-5.28-4.8,2-4.8,5.28,1.82,5.29,4.8,5.29ZM101.61,32.71c-1.75,0-2.73-1.28-2.73-3.5s.98-3.49,2.73-3.49,2.73,1.29,2.73,3.49-.99,3.5-2.73,3.5Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M107.96,34.3h2.01v-6c0-1.43,1.07-2.39,2.6-2.39.35,0,.95.07,1.12.12v-1.98c-.21-.06-.6-.08-.9-.08-1.33,0-2.46.73-2.75,1.73h-.15v-1.56h-1.93v10.17h0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M118.67,25.64c1.49,0,2.46,1.04,2.5,2.63h-5.14c.11-1.59,1.15-2.63,2.63-2.63h.01ZM121.17,31.56c-.37.79-1.2,1.23-2.42,1.23-1.61,0-2.64-1.13-2.71-2.91v-.11h7.18v-.7c0-3.19-1.71-5.13-4.54-5.13s-4.69,2.06-4.69,5.31,1.78,5.25,4.7,5.25c2.32,0,3.95-1.12,4.41-2.94,0,0-1.93,0-1.93,0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M78.55,30.55c.15,2.5,2.24,4.09,5.33,4.09,3.31,0,5.38-1.67,5.38-4.35,0-2.1-1.18-3.26-4.05-3.93l-1.54-.38c-1.82-.43-2.56-1-2.56-1.99,0-1.26,1.14-2.08,2.86-2.08s2.75.8,2.95,2.09h2.11c-.13-2.35-2.2-4.01-5.03-4.01-3.05,0-5.08,1.66-5.08,4.14,0,2.05,1.15,3.27,3.68,3.86l1.8.44c1.85.44,2.66,1.07,2.66,2.14,0,1.24-1.28,2.14-3.02,2.14-1.87,0-3.17-.84-3.35-2.17h-2.15,0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M57.75,23.96c-1.38,0-2.58.69-3.19,1.85h-.15v-1.68h-1.93v13.55h2.01v-4.92h.16c.53,1.07,1.68,1.71,3.13,1.71,2.57,0,4.2-2.03,4.2-5.26s-1.63-5.25-4.22-5.25h0ZM57.18,32.67c-1.68,0-2.74-1.33-2.74-3.45s1.06-3.46,2.75-3.46,2.72,1.3,2.72,3.45-1.02,3.46-2.73,3.46Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M69,23.96c-1.38,0-2.58.69-3.19,1.85h-.15v-1.68h-1.93v13.55h2.01v-4.92h.16c.53,1.07,1.68,1.71,3.13,1.71,2.57,0,4.2-2.03,4.2-5.26s-1.63-5.25-4.22-5.25h0ZM68.43,32.67c-1.68,0-2.74-1.33-2.74-3.45s1.06-3.46,2.75-3.46,2.72,1.3,2.72,3.45-1.02,3.46-2.73,3.46Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M48.87,34.3h2.3l-5.04-13.97h-2.33l-5.04,13.97h2.23l1.29-3.71h5.32l1.28,3.71h0ZM44.86,22.87h.16l2.02,5.9h-4.22l2.03-5.9h.01Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M40.11,9.8v6.74h2.43c2.01,0,3.17-1.24,3.17-3.39s-1.17-3.35-3.17-3.35c0,0-2.43,0-2.43,0ZM41.15,10.75h1.27c1.4,0,2.22.89,2.22,2.41s-.81,2.42-2.22,2.42h-1.27v-4.83Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M49.27,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM49.27,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.5,1.75-1.36,1.75Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M59.42,11.45h-1l-.91,3.88h-.08l-1.05-3.88h-.96l-1.05,3.88h-.07l-.91-3.88h-1.02l1.4,5.08h1.03l1.05-3.74h.08l1.05,3.74h1.04s1.4-5.08,1.4-5.08Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M60.58,16.54h1v-2.97c0-.79.47-1.29,1.21-1.29s1.1.41,1.1,1.22v3.04h1v-3.29c0-1.21-.63-1.89-1.76-1.89-.77,0-1.27.34-1.52.91h-.07v-.81h-.97v5.08h.01Z"
                                    style="fill: #fff;"></path>
                                <path d="M66.48,16.54h1v-7.07h-1v7.07Z" style="fill: #fff;"></path>
                                <path
                                    d="M71.26,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM71.26,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.49,1.75-1.36,1.75Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M76.64,15.78c-.55,0-.94-.27-.94-.72s.32-.69,1.02-.73l1.24-.08v.42c0,.63-.56,1.11-1.32,1.11ZM76.39,16.62c.67,0,1.22-.29,1.53-.8h.08v.71h.97v-3.47c0-1.07-.72-1.71-1.99-1.71-1.15,0-1.98.56-2.08,1.43h.97c.11-.36.5-.56,1.06-.56.69,0,1.04.3,1.04.84v.44l-1.38.08c-1.21.07-1.89.6-1.89,1.52s.71,1.52,1.69,1.52Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M82.36,16.62c.7,0,1.29-.33,1.6-.89h.08v.8h.96v-7.07h-1v2.79h-.07c-.28-.56-.86-.89-1.56-.89-1.28,0-2.11,1.02-2.11,2.62s.82,2.63,2.11,2.63h-.01ZM82.65,12.27c.84,0,1.37.67,1.37,1.73s-.52,1.72-1.37,1.72-1.36-.65-1.36-1.73.51-1.72,1.36-1.72Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M91.51,16.64c1.48,0,2.4-.99,2.4-2.64s-.92-2.64-2.4-2.64-2.4,1-2.4,2.64.91,2.64,2.4,2.64ZM91.51,15.74c-.87,0-1.36-.64-1.36-1.75s.49-1.75,1.36-1.75,1.36.64,1.36,1.75-.49,1.75-1.36,1.75Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M95.24,16.54h1v-2.97c0-.79.47-1.29,1.21-1.29s1.1.41,1.1,1.22v3.04h1v-3.29c0-1.21-.63-1.89-1.76-1.89-.77,0-1.27.34-1.52.91h-.07v-.81h-.97v5.08h.01Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M104.18,10.19v1.29h-.81v.85h.81v2.87c0,.98.44,1.37,1.56,1.37.2,0,.38-.02.55-.05v-.84c-.14.01-.23.02-.38.02-.5,0-.72-.23-.72-.77v-2.61h1.1v-.85h-1.1v-1.29h-1.01Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M107.63,16.54h1v-2.97c0-.77.46-1.29,1.28-1.29.71,0,1.09.41,1.09,1.22v3.03h1v-3.28c0-1.21-.67-1.9-1.75-1.9-.76,0-1.3.34-1.55.91h-.08v-2.8h-.99v7.07h0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M115.63,12.21c.74,0,1.23.52,1.25,1.32h-2.57c.06-.79.57-1.32,1.32-1.32ZM116.88,15.16c-.19.4-.6.62-1.21.62-.8,0-1.32-.57-1.35-1.46v-.06h3.59v-.35c0-1.6-.86-2.56-2.27-2.56s-2.34,1.03-2.34,2.66.89,2.62,2.35,2.62c1.16,0,1.97-.56,2.2-1.47,0,0-.97,0-.97,0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M27.86,22.84c.02-1.89,1.04-3.68,2.65-4.67-1.02-1.45-2.72-2.37-4.49-2.43-1.89-.2-3.72,1.13-4.68,1.13s-2.46-1.11-4.06-1.08c-2.08.07-4.02,1.25-5.03,3.07-2.18,3.77-.55,9.3,1.53,12.35,1.04,1.49,2.26,3.16,3.86,3.1,1.56-.06,2.14-.99,4.03-.99s2.41.99,4.04.96c1.67-.03,2.73-1.5,3.74-3,.75-1.06,1.33-2.24,1.71-3.48-1.97-.83-3.28-2.81-3.28-4.95h-.02Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M24.79,13.74c.91-1.1,1.36-2.5,1.25-3.93-1.39.15-2.68.81-3.61,1.87-.9,1.03-1.38,2.41-1.29,3.78,1.4.01,2.77-.63,3.64-1.72h.01Z"
                                    style="fill: #fff;"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=uk.co.admiralgroup.CSI&hl=en_GB">
                        <div class="download-button">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                data-name="Google Play" viewBox="0 0 148.5 44" width="148.5" height="44"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                <rect x=".55" y=".55" width="147.4" height="42.9" rx="4.95" ry="4.95">
                                </rect>
                                <rect x=".55" y=".55" width="147.4" height="42.9" rx="4.95" ry="4.95"
                                    style="fill: none; stroke: #a6a6a6; stroke-width: 1.1px;"></rect>
                                <path
                                    d="M74.95,23.93c-2.59,0-4.7,1.97-4.7,4.68s2.11,4.68,4.7,4.68,4.7-1.98,4.7-4.68-2.11-4.68-4.7-4.68ZM74.95,31.44c-1.42,0-2.64-1.17-2.64-2.84s1.22-2.84,2.64-2.84,2.64,1.15,2.64,2.84-1.22,2.84-2.64,2.84ZM64.7,23.93c-2.59,0-4.7,1.97-4.7,4.68s2.11,4.68,4.7,4.68,4.7-1.98,4.7-4.68-2.11-4.68-4.7-4.68ZM64.7,31.44c-1.42,0-2.64-1.17-2.64-2.84s1.22-2.84,2.64-2.84,2.64,1.15,2.64,2.84-1.22,2.84-2.64,2.84ZM52.52,25.36v1.98h4.75c-.14,1.12-.51,1.93-1.08,2.5-.69.69-1.77,1.45-3.67,1.45-2.92,0-5.21-2.36-5.21-5.28s2.29-5.28,5.21-5.28c1.58,0,2.73.62,3.58,1.42l1.4-1.4c-1.19-1.13-2.76-2-4.98-2-4.01,0-7.37,3.26-7.37,7.27s3.37,7.27,7.37,7.27c2.16,0,3.79-.71,5.07-2.04,1.31-1.31,1.72-3.15,1.72-4.64,0-.46-.04-.89-.11-1.24h-6.68ZM102.36,26.9c-.39-1.05-1.58-2.98-4-2.98s-4.41,1.9-4.41,4.68c0,2.62,1.99,4.68,4.64,4.68,2.14,0,3.38-1.31,3.9-2.07l-1.6-1.06c-.53.78-1.26,1.29-2.3,1.29s-1.79-.48-2.27-1.42l6.26-2.59-.21-.53s-.01,0-.01,0ZM95.98,28.46c-.05-1.81,1.4-2.73,2.45-2.73.82,0,1.51.41,1.74.99l-4.18,1.74h0ZM90.89,33h2.05v-13.75h-2.05v13.75ZM87.52,24.97h-.07c-.46-.55-1.35-1.05-2.46-1.05-2.34,0-4.48,2.06-4.48,4.7s2.14,4.66,4.48,4.66c1.12,0,2-.5,2.46-1.06h.07v.67c0,1.79-.96,2.75-2.5,2.75-1.26,0-2.04-.9-2.36-1.67l-1.79.74c.51,1.24,1.88,2.76,4.15,2.76,2.41,0,4.45-1.42,4.45-4.87v-8.4h-1.95v.76h0ZM85.17,31.44c-1.42,0-2.6-1.19-2.6-2.82s1.19-2.85,2.6-2.85,2.5,1.2,2.5,2.85-1.1,2.82-2.5,2.82ZM111.99,19.25h-4.92v13.75h2.05v-5.21h2.87c2.28,0,4.51-1.65,4.51-4.27s-2.24-4.27-4.51-4.27ZM112.04,25.88h-2.92v-4.71h2.92c1.53,0,2.4,1.27,2.4,2.36s-.87,2.36-2.4,2.36h0ZM124.72,23.9c-1.49,0-3.03.65-3.66,2.11l1.82.76c.39-.76,1.11-1.01,1.88-1.01,1.06,0,2.14.64,2.16,1.77v.14c-.37-.21-1.17-.53-2.14-.53-1.96,0-3.96,1.08-3.96,3.1,0,1.84,1.61,3.02,3.41,3.02,1.38,0,2.14-.62,2.62-1.35h.07v1.06h1.98v-5.27c0-2.44-1.82-3.8-4.17-3.8,0,0-.01,0-.01,0ZM124.48,31.44c-.67,0-1.61-.34-1.61-1.17,0-1.06,1.17-1.47,2.18-1.47.9,0,1.33.19,1.87.46-.16,1.27-1.26,2.18-2.44,2.18ZM136.12,24.2l-2.35,5.96h-.07l-2.44-5.96h-2.21l3.66,8.33-2.09,4.64h2.14l5.64-12.97h-2.28,0ZM117.63,33h2.05v-13.75h-2.05v13.75Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M52.16,11.27c0,.92-.27,1.66-.82,2.2-.62.65-1.43.98-2.42.98s-1.76-.33-2.43-.99c-.67-.66-1-1.48-1-2.46s.33-1.8,1-2.46,1.48-.99,2.43-.99c.47,0,.93.09,1.35.28.43.18.77.43,1.03.74l-.58.58c-.44-.52-1.04-.78-1.81-.78-.7,0-1.3.24-1.8.73-.51.49-.76,1.12-.76,1.9s.25,1.41.76,1.9,1.11.73,1.8.73c.74,0,1.35-.25,1.84-.74.32-.32.5-.77.55-1.34h-2.4v-.79h3.2c.03.17.05.34.05.5h.01Z"
                                    style="fill: #fff;"></path>
                                <path d="M57.23,8.51h-3.01v2.09h2.71v.79h-2.71v2.09h3.01v.81h-3.85v-6.6h3.85v.81h0Z"
                                    style="fill: #fff;"></path>
                                <path d="M60.81,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                                    style="fill: #fff;">
                                </path>
                                <path d="M65.93,14.3v-6.6h.85v6.6h-.85Z" style="fill: #fff;"></path>
                                <path d="M70.54,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                                    style="fill: #fff;">
                                </path>
                                <path
                                    d="M80.97,13.45c-.65.67-1.46,1-2.42,1s-1.77-.33-2.42-1-.97-1.48-.97-2.45.32-1.78.97-2.45,1.45-1,2.42-1,1.76.34,2.42,1.01.98,1.48.98,2.44-.32,1.78-.97,2.45h-.01ZM76.76,12.89c.49.49,1.09.74,1.79.74s1.31-.25,1.79-.74c.49-.49.73-1.13.73-1.89s-.25-1.4-.73-1.89c-.49-.49-1.09-.74-1.79-.74s-1.3.25-1.79.74c-.49.5-.73,1.13-.73,1.89s.25,1.4.73,1.89Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M83.13,14.3v-6.6h1.03l3.21,5.13h.04l-.04-1.27v-3.86h.85v6.6h-.89l-3.36-5.38h-.04l.04,1.27v4.11h-.85s.01,0,.01,0Z"
                                    style="fill: #fff;"></path>
                                <path
                                    d="M52.16,11.27c0,.92-.27,1.66-.82,2.2-.62.65-1.43.98-2.42.98s-1.76-.33-2.43-.99c-.67-.66-1-1.48-1-2.46s.33-1.8,1-2.46,1.48-.99,2.43-.99c.47,0,.93.09,1.35.28.43.18.77.43,1.03.74l-.58.58c-.44-.52-1.04-.78-1.81-.78-.7,0-1.3.24-1.8.73-.51.49-.76,1.12-.76,1.9s.25,1.41.76,1.9,1.11.73,1.8.73c.74,0,1.35-.25,1.84-.74.32-.32.5-.77.55-1.34h-2.4v-.79h3.2c.03.17.05.34.05.5h.01Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path d="M57.23,8.51h-3.01v2.09h2.71v.79h-2.71v2.09h3.01v.81h-3.85v-6.6h3.85v.81h0Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path d="M60.81,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path d="M65.93,14.3v-6.6h.85v6.6h-.85Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path d="M70.54,14.3h-.85v-5.79h-1.84v-.81h4.54v.81h-1.84v5.79h-.01Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path
                                    d="M80.97,13.45c-.65.67-1.46,1-2.42,1s-1.77-.33-2.42-1-.97-1.48-.97-2.45.32-1.78.97-2.45,1.45-1,2.42-1,1.76.34,2.42,1.01.98,1.48.98,2.44-.32,1.78-.97,2.45h-.01ZM76.76,12.89c.49.49,1.09.74,1.79.74s1.31-.25,1.79-.74c.49-.49.73-1.13.73-1.89s-.25-1.4-.73-1.89c-.49-.49-1.09-.74-1.79-.74s-1.3.25-1.79.74c-.49.5-.73,1.13-.73,1.89s.25,1.4.73,1.89Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path
                                    d="M83.13,14.3v-6.6h1.03l3.21,5.13h.04l-.04-1.27v-3.86h.85v6.6h-.89l-3.36-5.38h-.04l.04,1.27v4.11h-.85s.01,0,.01,0Z"
                                    style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: .22px;">
                                </path>
                                <path
                                    d="M11.48,8.29c-.32.34-.51.86-.51,1.55v24.33c0,.68.19,1.21.51,1.55l.08.08,13.63-13.63v-.32l-13.63-13.63-.08.08h0Z"
                                    style="fill: #47c7fc;"></path>
                                <path
                                    d="M29.73,26.71l-4.54-4.54v-.32l4.54-4.54.1.06,5.38,3.06c1.54.87,1.54,2.3,0,3.18l-5.38,3.06-.1.06s0-.02,0-.02Z"
                                    style="fill: #f8c92d;"></path>
                                <path
                                    d="M29.83,26.65l-4.65-4.65-13.71,13.71c.51.54,1.34.6,2.29.07,0,0,16.07-9.13,16.07-9.13Z"
                                    style="fill: #e23f44;"></path>
                                <path d="M29.83,17.35L13.77,8.22c-.94-.54-1.78-.47-2.29.07l13.71,13.71,4.65-4.65h-.01Z"
                                    style="fill: #4fec72;"></path>
                            </svg>
                        </div>
                    </a>
                </div>
                <p class="copy-right-line">©2024, Tŷ Admiral, David Street, Cardiff, CF10 2EH. Veygo by Admiral is
                    a
                    trading name of Able Insurance Services Limited (Reg No: 2890075) is a subsidiary of Admiral Group
                    plc and is authorised and regulated by the Financial Conduct Authority (Firm reference number:
                    311649). These details can be confirmed by visiting the Financial Services Register,
                    www.fca.org.uk/register. Able Insurance Services Limited acts for, and on behalf of, other regulated
                    insurance companies. Further details may be provided on request.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            const $window = $(window); // Cache the window object

            $window.on("scroll", function() {
                if ($window.width() < 1200) {
                    if ($window.scrollTop() > 200) {
                        // Change colors when scrolling down
                        $(".navbar-component").attr("style",
                            "background: white !important; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;"
                            );
                        $(".navbar-component .fill-current").css("fill", "#005465");
                        $(".navbar-component label div").css("background-color", "#005465");
                    } else {
                        // Reset to original colors when scrolled to the top
                        $(".navbar-component").attr("style",
                            "background: transparent !important; box-shadow: none !important;");
                        $(".navbar-component .fill-current").css("fill", "white");
                        $(".navbar-component label div").css("background-color", "white");
                    }
                }
            });

            const $cards = $('.carousel-card');
            const totalCards = $cards.length;
            let currentIndex = 0;

            function showCard(index) {
                $cards.removeClass('active');
                $cards.eq(index).addClass('active');
            }

            function autoplay() {
                currentIndex = (currentIndex + 1) % totalCards;
                showCard(currentIndex);
            }

            // Start autoplay
            setInterval(autoplay, 6000);

            // Show the first card initially
            showCard(currentIndex);

            // Slider section
            $(".featured-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 30,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                nav: true,
                dots: true,
                autoplayHoverPause: false,
                items: 1,
                navText: ["<span class='ion-ios-arrow-back'></span>",
                    "<span class='ion-ios-arrow-forward'></span>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

        });
    </script>
</body>

</html>
