@extends('frontend.master')
@section('content')
    <section class="showcase">
        <img src="{{ asset('upload/about/' . $about->banner_image) }}" alt="Picture" />
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <div class="title-devider"></div>
                        <h5 class="mb-0">{{ $about->row_two_badge }}</h5>
                    </div>
                    <div class="pt-3">
                        <h1 class="main-color">
                            {{ $about->row_two_title }}
                        </h1>
                        <p class="para-description">
                            {!! $about->row_two_description !!}
                        </p>
                    </div>

                    {{-- <div class="pt-3">
                    <ul class="ms-0 ps-0 about-info-ul d-flex" style="list-style-type: none">
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                    </ul>
                </div> --}}

                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img class="about_row_image" src="{{ asset('upload/about/' . ($about->row_two_image ? $about->row_two_image : '')) }}"
                            alt="Row Two Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Row Three --}}
    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center section-title-about">
                        <h1>Our Advisor Panel</h1>
                        <div class="section-devider" style="background-color: #0a1d5b;height: 2px;width: 10%;margin: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                @foreach ($advisors as $advisor)
                    <div class="col-lg-3 pb-7 mb-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <img src="{{ !empty($advisor->photo) ? asset('storage/' . $advisor->photo) : asset('frontend/images/no_image.png') }}"
                                    alt="{{ $advisor->name }}" class="team_image" style="border-radius: 9px;">
                            </div>
                            <div class="card-footer text-center rounded-3 border-0" style="background-color: #d8d8d8;">
                                <h5 class="main-color m-0 mb-1" style="font-size: 1.1rem;">{{ $advisor->name }}</h5>
                                <p class="m-0 main-color" style="font-size: 14px;">{{ $advisor->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center section-title-about">
                        <h1>Our Executive Panel</h1>
                        <div class="section-devider" style="background-color: #0a1d5b;height: 2px;width: 10%;margin: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                @foreach ($executives as $executive)
                    <div class="col-lg-3 pb-7 mb-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <img src="{{ !empty($executive->photo) ? asset('storage/' . $executive->photo) : asset('frontend/images/no_image.png') }}"
                                    alt="{{ $executive->name }}" class="team_image" style="border-radius: 9px;">
                            </div>
                            <div class="card-footer text-center rounded-3 border-0" style="background-color: #d8d8d8;">
                                <h5 class="main-color m-0 mb-1" style="font-size: 1.1rem;">{{ $executive->name }}</h5>
                                <p class="m-0 main-color" style="font-size: 14px;">{{ $executive->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center section-title-about">
                        <h1>{{ $about->row_three_section_title }}</h1>
                        <div class="section-devider" style="background-color: #0a1d5b;height: 2px;width: 10%;margin: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4 pb-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ !empty($about->row_three_column_one_image) ? asset('upload/about/' . $about->row_three_column_one_image) : asset('frontend/images/no_image.png') }}"
                                alt="Row Two Image" class="team_image" style="border-radius: 9px;">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="main-color">{{ $about->row_three_column_one_title }}</h4>
                            <p class="mb-0">
                                {!! $about->row_three_column_one_decription !!}
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 pb-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ !empty($about->row_three_column_two_image) ? asset('upload/about/' . $about->row_three_column_two_image) : asset('frontend/images/no_image.png') }}"
                                alt="Row Two Image" class="team_image" style="border-radius: 9px;">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="main-color">{{ $about->row_three_column_two_title }}</h4>
                            <p class="mb-0">
                                {!! $about->row_three_column_two_decription !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ !empty($about->row_three_column_three_image) ? asset('upload/about/' . $about->row_three_column_three_image) : asset('frontend/images/no_image.png') }}"
                                alt="Row Two Image" class="team_image" style="border-radius: 9px;">
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="main-color">{{ $about->row_three_column_three_title }}</h4>
                            <p class="mb-0">
                                {!! $about->row_three_column_three_decription !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-4" src="{{ asset('upload/about/' . $about->ceo_section_image) }}"
                        alt="" />
                </div>
                <div class="col-lg-6">
                    <div>
                        <p>{{ $about->ceo_section_badge }}</p>
                        <h2 class="main-color">{{ $about->ceo_section_title }}</h2>
                        <p>{!! $about->ceo_section_description !!}</p>
                    </div>

                    <div class="pt-4">
                        <h4 class="main-color">{{ $about->ceo_name }}</h4>
                        <span class="main-color" style="font-size: 14px;">{{ $about->ceo_designation }}</span>
                        <div class="mt-3">
                            <img class="img-fluid" src="{{ asset('upload/about/' . $about->ceo_section_signature) }}"
                                alt="{{ $about->ceo_name }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Row Four  --}}
    <section>
        <div class="container-fluid">
            <div class="row align-items-center px-0">
                <div class="col-lg-6 px-0"
                    style="background-image: url('https://coursebuilder.thimpress.com/wp-content/uploads/sites/10/2017/06/layer-6.jpg?id=3487');">
                    <div class="p-5">
                        <div class="text-end">
                            <h1 class="fw-bold">{{ $about->row_four_column_one_title }}</h1>
                            <h5>{{ $about->row_four_column_one_header }}</h5>
                        </div>
                        <div class="pt-3">
                            <p class="text-end w-75 ms-auto">
                                {!! $about->row_four_column_one_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0"
                    style="background-image: url('https://coursebuilder.thimpress.com/wp-content/uploads/sites/10/2017/06/layer-6.jpg?id=3487');">
                    <div class="p-5">
                        <div>
                            <h1 class="fw-bold">{{ $about->row_four_column_two_title }}</h1>
                            <h5>{{ $about->row_four_column_two_header }}</h5>
                        </div>
                        <div class="pt-3">
                            <p class="w-75 me-auto">
                                {!! $about->row_four_column_two_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
