@extends('frontend.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/css/main-style.css') }}">
    <section class="showcase-courses">
        <img src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/course-banner.jpg?id=8892" alt="Picture">
        <div class="overlay-courses">
            <h2>Our All Courses</h2>
            <p>One-Stop Learning &amp; Development Solutions</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0 sticky-top-menu d-none">
                    <div class="card p-0 rounded-0 shadow-sm border-0 menu-card">
                        <div class="card-body p-0 rounded-0 py-3">
                            <ul class="ps-0 details-menus mb-0" style="list-style-type: none">
                                <li class="pe-4">
                                    <a href="#overview"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Overview</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#curriculum"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Curriculum</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#schedule"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Schedule</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#projects"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Projects</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#related"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Related
                                        Courses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 px-0">
                    <div>
                        <div id="overview">
                            <div class="row py-5 gx-5 px-3 px-lg-0">
                                <div class="col-lg-5">
                                    <div class="">
                                        <h6 class="text-danger fw-bold text-lg-start text-center">
                                            Turn Your Passion into an Artistic Profession
                                        </h6>
                                        <h2 class="fw-bold text-lg-start text-center main-color">
                                            {{ $coursedetail->name }}
                                        </h2>
                                        <div class="row py-3">
                                            <div class="col-md-4">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Duration</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">{{ $coursedetail->course_duration }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Lectures</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">{{ $coursedetail->lecture }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Projects</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">{{ $coursedetail->project }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (!empty($coursedetail->short_descp))
                                            <p class="text-justify">
                                                {!! $coursedetail->short_descp !!}
                                            </p>
                                        @endif

                                        @if (!empty($coursedetail->total_student))
                                            <p class="text-success text-lg-start text-center">
                                                {{ $coursedetail->total_student }} Students
                                            </p>
                                        @endif



                                        <div class="d-flex mb-lg-0 mb-4">
                                            <a href="" class="primary-btn-one me-3">Admission</a>
                                            <a href="" class="primary-btn-one">Course Curriculum</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <img class="img-fluid rounded-5"
                                        src="{{ !empty($coursedetail->thumbnail_image) ? url('storage/course/' . $coursedetail->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($coursedetail->name) }}"
                                        alt="" />
                                </div>
                                <div class="col-lg-8 py-5">

                                    @if (!empty($coursedetail->overview))
                                        <div class="">
                                            <h5 class="primary-text-color fw-bold">
                                                Course Overview
                                            </h5>
                                            <p class="pt-3" style="text-align: justify">
                                                {!! $coursedetail->overview !!}
                                            </p>
                                        </div>
                                    @endif

                                    <div>
                                        <!-- Course Curriculum -->
                                        <div id="curriculum" class="py-3">
                                            <h5 class="primary-text-color fw-bold">
                                                Course Curriculum
                                            </h5>
                                            <div>
                                                <div class="accordion" id="accordionExample">
                                                    @forelse ($courseCurriculams as $courseCurriculam)
                                                        <div class="accordion-item border-0 shadow-sm">
                                                            <h2 class="accordion-header mb-1">

                                                                <button
                                                                    class="accordion-button border-0 shadow-sm collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne{{ $courseCurriculam->id }}"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    <i class="fa-solid fa-arrow-right-long pe-3"></i>
                                                                    {{ $courseCurriculam->title }}
                                                                </button>

                                                            </h2>
                                                            <div id="collapseOne{{ $courseCurriculam->id }}"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="mb-3 text-center">

                                                                        {{-- <small
                                                                            class="bg-warning-light p-2 rounded-2 badges"><i
                                                                                class="fa-solid fa-tv primary-text-color"></i>
                                                                            12 recorded video</small> --}}

                                                                        <small
                                                                            class="bg-warning-light p-2 rounded-2 badges"><i
                                                                                class="fa-solid fa-tv primary-text-color"></i>
                                                                            {{ $courseCurriculam->class_number }} live
                                                                            class</small>

                                                                        {{-- <small
                                                                            class="bg-warning-light p-2 rounded-2 badges"><i
                                                                                class="fa-solid fa-tv primary-text-color"></i>
                                                                            1 Quiz</small> --}}
                                                                    </div>
                                                                    <p>
                                                                        {!! $courseCurriculam->description !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p>No Course Curriculam Avaiable</p>
                                                    @endforelse

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course Schedule -->
                                        <div id="schedule" class="py-3">
                                            <h5 class="primary-text-color fw-bold">
                                                Course Schedule
                                            </h5>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                            </p>
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="
                                    background-color: #eee;
                                    color: black;
                                    font-size: 15px;
                                  "
                                                                    scope="col">
                                                                    Venue
                                                                </th>
                                                                <th style="
                                    background-color: #eee;
                                    color: black;
                                    font-size: 15px;
                                  "
                                                                    scope="col">
                                                                    Starting Date
                                                                </th>
                                                                <th style="
                                    background-color: #eee;
                                    color: black;
                                    font-size: 15px;
                                  "
                                                                    scope="col">
                                                                    Duration
                                                                </th>
                                                                <th style="
                                    background-color: #eee;
                                    color: black;
                                    font-size: 15px;
                                  "
                                                                    scope="col">
                                                                    Fees
                                                                </th>
                                                                <th class="text-center"
                                                                    style="
                                    background-color: #eee;
                                    color: black;
                                    font-size: 15px;
                                  "
                                                                    scope="col">
                                                                    Join Now
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="">
                                                                <td>Online - Virtual</td>
                                                                <td>24 - Jun - 2024</td>
                                                                <td>2 Hrs * 8 Days</td>
                                                                <td>$2,100</td>
                                                                <td class="text-center">
                                                                    <a href="" class=""><i
                                                                            class="fa-solid fa-eye text-muted"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>Online - Virtual</td>
                                                                <td>24 - Jun - 2024</td>
                                                                <td>2 Hrs * 8 Days</td>
                                                                <td>$2,100</td>
                                                                <td class="text-center">
                                                                    <a href="" class=""><i
                                                                            class="fa-solid fa-eye text-muted"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>Online - Virtual</td>
                                                                <td>24 - Jun - 2024</td>
                                                                <td>2 Hrs * 8 Days</td>
                                                                <td>$2,100</td>
                                                                <td class="text-center">
                                                                    <a href="" class=""><i
                                                                            class="fa-solid fa-eye text-muted"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div>
                                                    <h5 class="primary-text-color fw-bold pt-3">
                                                        What Will You Learn In This Course?
                                                    </h5>
                                                    <div>
                                                        <div class="row gx-1">
                                                            <div class="col-lg-6">
                                                                <div class="card p-0 mb-1 why-choses">
                                                                    <div class="card-body p-0">
                                                                        <p class="mb-0 p-3">
                                                                            <img src="https://cdn.ostad.app/public/upload/2023-10-29T15-06-39.968Z-checkbox-circle-line.svg"
                                                                                alt="" />প্রোগ্রামিং ল্যাংগুয়েজ
                                                                            হিসেবে শেখানো
                                                                            হবে পাইথন
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card p-0 mb-1 why-choses">
                                                                    <div class="card-body p-0">
                                                                        <p class="mb-0 p-3">
                                                                            <img src="https://cdn.ostad.app/public/upload/2023-10-29T15-06-39.968Z-checkbox-circle-line.svg"
                                                                                alt="" />
                                                                            ব্যাকেন্ডের জন্য আমরা শিখবো DJANGO,
                                                                            DJANGO REST FRAMEWORK, FLASK
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card p-0 mb-1 why-choses">
                                                                    <div class="card-body p-0">
                                                                        <p class="mb-0 p-3">
                                                                            <img src="https://cdn.ostad.app/public/upload/2023-10-29T15-06-39.968Z-checkbox-circle-line.svg"
                                                                                alt="" />
                                                                            ফ্রন্টেন্ডের জন্য শেখানো হবে REACT
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card p-0 mb-1 why-choses">
                                                                    <div class="card-body p-0">
                                                                        <p class="mb-0 p-3">
                                                                            <img src="https://cdn.ostad.app/public/upload/2023-10-29T15-06-39.968Z-checkbox-circle-line.svg"
                                                                                alt="" />
                                                                            পাইথন এর এডভান্স কনসেপ্ট
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course Projects -->
                                        <div id="projects" class="py-3">
                                            <h3 class="primary-text-color fw-bold">
                                                Course Projects
                                            </h3>
                                            <p class="pt-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                            </p>
                                            <!-- Project Slide -->
                                            <div class="slider-project pt-3">
                                                <div class="slider-items">
                                                    <div class="project-box">
                                                        <div class="box p-2">
                                                            <img class="img-fluid"
                                                                src="https://cdn.ostad.app/public/upload/2024-03-19T09-42-37.309Z-610cbb29feffc927b046279da1aa10d9.jpg"
                                                                alt="" />
                                                            <div class="box-content">
                                                                <h3 class="title">Kristina</h3>
                                                                <span class="post">Web designer</span>
                                                                <ul class="icon">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-items">
                                                    <div class="project-box p-2">
                                                        <div class="box">
                                                            <img width="288px" height="216px"
                                                                src="https://cdn.ostad.app/public/upload/2024-03-19T09-42-37.309Z-610cbb29feffc927b046279da1aa10d9.jpg"
                                                                alt="" />
                                                            <div class="box-content">
                                                                <h3 class="title">Kristina</h3>
                                                                <span class="post">Web designer</span>
                                                                <ul class="icon">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-items">
                                                    <div class="project-box p-2">
                                                        <div class="box">
                                                            <img width="288px" height="216px"
                                                                src="https://cdn.ostad.app/public/upload/2024-03-19T09-42-37.309Z-610cbb29feffc927b046279da1aa10d9.jpg"
                                                                alt="" />
                                                            <div class="box-content">
                                                                <h3 class="title">Kristina</h3>
                                                                <span class="post">Web designer</span>
                                                                <ul class="icon">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-items">
                                                    <div class="project-box p-2">
                                                        <div class="box">
                                                            <img width="288px" height="216px"
                                                                src="https://cdn.ostad.app/public/upload/2024-03-19T09-42-37.309Z-610cbb29feffc927b046279da1aa10d9.jpg"
                                                                alt="" />
                                                            <div class="box-content">
                                                                <h3 class="title">Kristina</h3>
                                                                <span class="post">Web designer</span>
                                                                <ul class="icon">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-search"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Add more slider items as needed -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 rounded-5 p-4 mt-2 mt-lg-5">
                                    <div class="p-5 py-3 rounded-5" style="background-color: #eee">
                                        <div class="py-4">
                                            <h4 class="fw-bold primary-text-color">
                                                Admission Is Going On
                                            </h4>
                                            <p>
                                                Enroll now to any of our Offline (On- Campus) or
                                                Online (Live Class) courses as per your suitable
                                                time.
                                            </p>
                                        </div>
                                        <div>
                                            <div class="card join_offline">

                                                <div class="card-body">

                                                    <h5>Course Fee Offline</h5>

                                                    <h3 class="fw-bold">BDT {{ number_format($coursedetail->price, 2) }}
                                                    </h3>

                                                    <input type="hidden" name="payment_amount"
                                                        value="{{ $coursedetail->price }}">

                                                    <a type="submit" id="{{ $coursedetail->id }}"
                                                        onclick="addToEnroll(this.id)" class="primary-btn-one">Enroll
                                                        Now</a>

                                                </div>

                                            </div>

                                            <div class="card join_offline">
                                                <div class="card-body">

                                                    <h5>Course Fee Online</h5>

                                                    <h3 class="fw-bold">BDT
                                                        {{ number_format($coursedetail->online_price, 2) }}</h3>

                                                    

                                                    <a href="javascript:void(0)" data-amount="{{ $coursedetail->online_price }}" data-id="{{ $coursedetail->id }}"
                                                        class="primary-btn-one" onclick="addToEnrollOnline(this)">Enroll Now</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <!-- Related Courses -->
                                    <div id="related" class="py-3">
                                        <h3 class="primary-text-color fw-bold">
                                            Related Courses
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </p>
                                        <!-- Releted Course slider -->
                                        <div class="slider-related-courses">
                                            @forelse ($relatedcourses as $courses)
                                                <div class="releted-course-items">
                                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                                        <div class="card-header p-0 bg-transparent">

                                                            <div>
                                                                <img class="rounded-2 img-fluid course-images"
                                                                    src="{{ asset(!empty($courses->thumbnail_image) ? url('storage/course/' . $courses->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                                                                    alt="">
                                                            </div>

                                                            <div class="p-2 text-center">

                                                                <small class="pe-3">
                                                                    <span class="cource-badge rounded-2">
                                                                        <i class="fa-solid fa-graduation-cap"></i>
                                                                        Batch 2
                                                                    </span>
                                                                </small>
                                                                <small class="pe-3">
                                                                    <span class="cource-badge rounded-2">
                                                                        {{-- <i class="fa-solid fa-chair pe-2" aria-hidden="true"></i> --}}
                                                                        <i class="fa-solid fa-user"></i>
                                                                        {{ $courses->available_seats }}
                                                                    </span>
                                                                </small>
                                                                @php
                                                                    // Convert registration end date to Unix timestamp
                                                                    $registrationEndTimestamp = strtotime(
                                                                        $courses->registration_end_date,
                                                                    );
                                                                    // Current time
                                                                    $currentTime = time();
                                                                    // Calculate remaining time in seconds
                                                                    $remainingTime =
                                                                        $registrationEndTimestamp - $currentTime;
                                                                    // Convert remaining time to days
                                                                    $remainingDays = floor(
                                                                        $remainingTime / (60 * 60 * 24),
                                                                    );
                                                                @endphp

                                                                <small class="pe-3">
                                                                    <span class="course-badge rounded-2">
                                                                        {{-- <i class="far fa-clock " aria-hidden="true"></i> --}}
                                                                        <i class="fa-solid fa-clock"></i>
                                                                        {{ $remainingDays }} Days
                                                                    </span>
                                                                </small>

                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="course-title">
                                                                <h6 class="mb-0">
                                                                    {{ $courses->name }}
                                                                </h6>
                                                            </div>
                                                            <div class="pt-2">
                                                                <a href="{{ url('course' . '/' . $courses->id . '/' . $courses->slug) }}"
                                                                    class="btn btn-light border w-100">See Details
                                                                    <i class="fa-solid fa-arrow-right ps-2"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No Course Avaiable</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fixed-bottom px-0" id="bottomSection">
        <div class="card rounded-0 border-0" style="background-color: #0a1d5b">
            <div class="card-header border-0 bg-transparent pb-0 pt-2 pe-3 text-end"
                style="margin-bottom: -30px; position: relative; z-index: 5">
                <button id="closeButton" class="p-0 border-0 bg-transparent fs-4">
                    <i class="fa-solid fa-xmark primary-text-color"></i>
                </button>
            </div>

            <form method="POST" action="{{ route('course.enroll', $coursedetail->id) }}">

                <div class="card-body p-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">

                                <p>
                                    <span class="fw-bold text-white">Call This Number:</span>
                                    <span>{{ optional($setting)->primary_phone }}</span>
                                </p>
                                <div class="d-flex align-items-center">
                                    <h2 class="pe-3 fw-bold text-white">BDT
                                        {{ number_format($coursedetail->price, 2) }}</h2>
                                    {{-- <h6>
                                    <a href="" class="text-decoration-none text-white"><i
                                            class="fa-solid fa-ticket pe-2"></i>Promo Code</a>
                                </h6> --}}
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="text-end">

                                    @csrf

                                    <input type="hidden" name="amount" value="{{ $coursedetail->price }}">

                                    <button type="submit" class="primary-btn-one  ps-3 text-center" style="border: 1px solid white; color: white !important">Enroll Running
                                        Batch</button>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>
    @push('scripts')
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
        <script>
            document
                .getElementById("closeButton")
                .addEventListener("click", function() {
                    document.getElementById("bottomSection").style.display = "none";
                    setTimeout(function() {
                        document.getElementById("bottomSection").style.display =
                            "block"; // or "flex", "inline-block", etc., based on your layout needs
                    }, 3000); // 3000 milliseconds = 3 seconds
                });
        </script>
        <script>
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute("href")).scrollIntoView({
                        behavior: "smooth",
                    });
                });
            });
        </script>
    @endpush
@endsection
