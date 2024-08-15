<section class="main_header_area">
    <div class="fixed-section header">
        {{-- Top Bar Area --}}
        <div class="container-fluid top-bar p-0">
            <div class="row gx-0 top-bar-bg">
                <div class="col-lg-8 top-bar-curve-area d-lg-block d-sm-none">
                    {{-- Empty Are --}}
                </div>
                <div class="col-lg-4 top-bar-right-side" style="z-index: 999;">
                    <div class="d-flex justify-content-between align-items-center top-menu-area">
                        <div class="">
                            {{-- <span class="text-white">My</span><span class="text-white">Path Foundation</span> --}}
                            <div class="dropdown drop-top">
                                <a href="javascript:void(0)"
                                    class="dropdown-toggle top-info-text top-info-text text-white" type="button"
                                    id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="fa-solid fa-phone-volume me-1" style="transform: rotate(7deg);"></i>
                                    SUPPORT <span class="number-font header_top_phone">|
                                        {{ optional($setting)->primary_phone }}</span>
                                </a>
                                <div class="dropdown-menu drop-down-menus2" aria-labelledby="dropdownMenuButton">
                                    <div class="popover__content text-start">
                                        {{-- <div class="text-muted">
                                            Call Us-
                                            <a href="tel:{{ optional($setting)->phone_one }}"
                                                class="main_color">{{ optional($setting)->phone_one }}</a>
                                        </div> --}}
                                        <hr class="text-muted" />
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="https://wa.me/{{ optional($setting)->secondary_phone }}"
                                                class="mx-auto py-2 btn-color mb-2 top-info-text w-100"
                                                style="font-size: 13px">
                                                <i class="fa-brands fa-whatsapp"></i> <span>Whats App</span>
                                            </a>
                                            {{-- <a href="skype:<ngenit>?chat"
                                                class="mx-auto py-2 btn-color top-info-text w-100"
                                                style="font-size: 13px">
                                                <i class="fa-brands fa-skype"></i> <span>Skype</span>
                                            </a> --}}
                                        </div>
                                        <hr class="text-muted" />
                                        <div class="text-center">
                                            <small class="main_color">Hotline:</small> <br>
                                            <small><a href="">{{ optional($setting)->primary_phone }}</a></small>
                                            <small><a href="">{{ optional($setting)->primary_email }}</a></small>
                                        </div>
                                        {{-- <ul class="account p-0 text-muted text-start">
                                            <li>
                                                Check Our
                                                <a href="{{ route('shop') }}" target="_blank" class="main_color">Shop
                                                    Products</a>
                                            </li>
                                            <li>
                                                Check Our
                                                <a href="{{ route('all.solution') }}" target="_blank"
                                                    class="main_color">Solution</a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            {{-- <div class="d-lg-block d-sm-none">
                                <a href="" class="top-info-text text-white pe-3"><i
                                        class="fa-regular fa-circle-question me-1"></i> RFQ</a>
                            </div> --}}
                            <div>
                                {{-- <span class="text-white">My</span><span class="text-white">Path Foundation</span> --}}
                                <div class="dropdown drop-top">
                                    <a href="javascript:void(0)"
                                        class="dropdown-toggle top-info-text top-info-text text-white" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="fa-regular fa-star" style="font-size: 14px"></i>
                                        <span class="">MY</span><span class="">Path Foundation</span>
                                    </a>
                                    <div class="dropdown-menu drop-down-menus" aria-labelledby="dropdownMenuButton">
                                        <div class="popover__content-2 text-start">

                                            @if (Auth::user())
                                                <li>
                                                    <i class="fa fa-user m-2"></i>
                                                    <a href="{{ route('dashboard') }}" class="">My
                                                        Profile</a>
                                                </li>
                                                {{-- <li>
                                                    <i class="fa fa-envelope m-2"></i>
                                                    <a href="{{ route('orders') }}" class="">My Orders</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star m-2"></i>
                                                    <a href="{{ route('rfq') }}" class="">My RFQs/Deals</a>
                                                </li> --}}
                                                <li>
                                                    <i class="fa fa-list m-2"></i>
                                                    <a href="javascript:void(0)" class="">My Requests</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-right-from-bracket m-2"></i>
                                                    <a href="{{ route('logout') }}" class="">Log Out</a>
                                                </li>
                                                <hr class="text-muted" />
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="mx-auto py-2 btn-color top-info-text w-100"
                                                    style="font-size: 13px">
                                                    Sign In
                                                </a>

                                                <hr class="text-muted" />
                                            @endif
                                            <ul class="account p-0 text-muted text-start">
                                                @unless (Auth::user())
                                                    <li class="mb-2">
                                                        Sign In To Your
                                                        <a href="{{ route('login') }}" target="_blank"
                                                            class="main_color">Client Account</a>
                                                    </li>
                                                @endunless
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Menu And Logo Area --}}
        <div class="row px-2">
            <nav class="navbar navbar-expand-lg p-2 main-navbar bg-white menu-section">
                <div class="container-fluid d-flex align-items-center" style="height: 3.5rem">
                    <div class="step-img d-lg-block d-sm-none">
                        <img src="https://i.ibb.co/t3Zrbj2/Asset-1-8.png" alt="">
                    </div>
                    <a class="navbar-brand fw-bold upper-content-menu main-logo" href="{{ route('homepage') }}">
                        <img class="img-fluid site-main-logo"
                            src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}"
                            alt="Path Foundation">
                    </a>
                    <!---Category--->

                    <!---Category--->
                    <form method="post" action="{{ route('course.search') }}"
                        class="d-flex upper-content-menu justify-content-center align-items-center d-lg-none"
                        role="search">
                        @csrf
                        <div class="input-group flex-nowrap search-input-container">
                            <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input class="form-control search-input-field search" id="mobile_search_text" name="search"
                                type="search" placeholder="Search From Here..." aria-describedby="addon-wrapping">
                        </div>
                    </form>
                    <a href="javascript:void(0)" class="nvabar-toggler tab_btn_icon upper-content-menu d-lg-none"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas"
                        aria-controls="rightOffcanvas">
                        <i class="fa-solid fa-bars main_color" style="font-size: 15px !important;"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex ms-auto upper-content-menu" method="post"
                            action="{{ route('course.search') }}" role="search">
                            @csrf
                            <div class="input-group flex-nowrap search-input-container">
                                <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input class="form-control search-input-field search" id="search_text" name="search"
                                    type="search" placeholder="Search for products, solutions & more..."
                                    aria-describedby="addon-wrapping">
                            </div>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <hr>
                            <li class="nav-item dropdown position-static main-menu-spacing">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('homepage') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('about') }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('course.registration') }}">
                                            Registration
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('contact') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row container mx-auto sticky-top">
            <div class="card d-none shadow-lg bg-white border rounded-0 mt-0" id="search_container">

            </div>
        </div>
        <div class="row container mx-auto sticky-top">
            <div class="card d-none shadow-lg bg-white border rounded-0 mt-0" id="mobile_search_container">

            </div>
        </div>
    </div>
</section>


{{-- Mobile Menu Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="rightOffcanvasLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand fw-bold upper-content-menu main-logo" href="">
            <img height="50px"
                src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}"
                alt="Path Foundation">
        </a>



        <button class="offcanvas-icons upper-content-menu text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
            style="padding-left: none !important;">
            <i class="fa-solid fa-xmark" style="font-size: 18px !important;"></i>
        </button>
    </div>
    <div class="offcanvas-body pt-0 px-0">
        <div>
            <form method="post" action="{{ route('course.search') }}"
                class="d-flex ms-auto upper-content-menu justify-content-center align-items-center d-none"
                role="search">
                @csrf
                <div class="input-group flex-nowrap search-input-container">
                    <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control search-input-field" id="search_text" name="search"
                        type="search" placeholder="Search for products, solutions & more..."
                        aria-describedby="addon-wrapping">
                </div>
            </form>
            <hr>
            <ul class="navbar-nav justify-content-end flex-grow-1 mt-0 ps-4">
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('homepage') }}" role="button">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('about') }}" role="button">
                        About Us
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('register') }}" role="button">
                        Registration
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('contact') }}" role="button">
                        Contact Us
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all dropdown links
        var dropdownLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Add click event listener to each dropdown link
        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove the 'active' class from all dropdown links
                dropdownLinks.forEach(function(otherLink) {
                    otherLink.parentNode.classList.remove('active');
                });

                // Add the 'active' class to the clicked dropdown link's parent
                this.parentNode.classList.add('active');
            });
        });

        // Add an event listener for when the dropdown is hidden
        document.querySelector('.navbar-nav').addEventListener('hidden.bs.dropdown', function() {
            // Remove the 'active' class from all dropdown links when the dropdown is hidden
            dropdownLinks.forEach(function(link) {
                link.parentNode.classList.remove('active');
            });
        });
    });
</script>
