@extends('user.layout.app')
@section('title', 'Dashboard')
@section('content')


<div class="main-content">
<div class="container mt-4">
    <!-- First Card -->
    <div class="card p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center"> 
            <h5 class="fw-bold">To personalise content on our sites and apps based on your browsing and search data </h5>
            <div class="d-flex flex-column align-items-center">
                <div class="checkbox-apple">
                    <input class="toggle-switch" id="toggle1" type="checkbox">
                    <label for="toggle1"></label>
                </div>
                <p class="toggle-label" id="label1">OFF</p>
            </div>
        </div>
        <p>With your consent (permission), we will use your browsing and search data to provide tailored content that we think you’ll find interesting and useful. If you do not give your consent, you will still see content from us, but it will not be personalised to you based on your browsing and search data.

        </p>
    </div>

    <!-- Second Card -->
    <div class="card p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center"> 
            <h5 class="fw-bold">For advertising on our sites and apps
            </h5>
            <div class="d-flex flex-column align-items-center">
                <div class="checkbox-apple">
                    <input class="toggle-switch" id="toggle2" type="checkbox">
                    <label for="toggle2"></label>
                </div>
                <p class="toggle-label" id="label2">OFF</p>
            </div>
        </div>
        <p>With your consent (permission), Yahoo will use cookies to provide ads on our sites and apps that we think you’ll find interesting and useful, and measure the effectiveness of those ads. This includes letting our partners know whether you see or click on their ads. We will also use information we have about you, link your devices using common identifiers, and match your identifiers and information with information from our partners, in order to provide tailored ads. If you do not give your consent, you will still see ads on our sites and apps, but we will not personalise them or use cookies to provide them.

        </p>
    </div>

    <!-- Third Card -->
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center"> 
            <h5 class="fw-bold">For advertising on partner sites
            </h5>
            <div class="d-flex flex-column align-items-center">
                <div class="checkbox-apple">
                    <input class="toggle-switch" id="toggle3" type="checkbox">
                    <label for="toggle3"></label>
                </div>
                <p class="toggle-label" id="label3">OFF</p>
            </div>
        </div>
        <p>With your consent (permission), Yahoo will use cookies to provide ads on our partners’ sites and apps that we think you’ll find interesting and useful, and to measure the effectiveness of those ads. This includes letting our partners know whether you see or click on their ads. We will also combine and use information we have about you, link your devices using common identifiers, and match your identifiers and information with information from our partners to provide tailored ads. If you do not give your consent, you will still see ads from us on partner sites, but we will not personalise them or use cookies to provide them.

        </p>
    </div>
</div>
</div>


@endsection
