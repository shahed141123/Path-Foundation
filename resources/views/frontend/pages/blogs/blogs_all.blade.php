@extends('frontend.master')
@section('content')
    <style>
        .common_product_header h1 {
            text-align: center;
            color: black;
            font-size: 50px;
            font-weight: 600;
        }

        .badges_list li {
            display: inline-block;
            padding-left: 14px;
            padding-bottom: 18px;
        }

        .badges_list li a {
            width: 31px;
            height: 31px;
            color: #fff;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            position: relative;
            z-index: 1;
        }

        .badges_list li a:before {
            content: "";
            position: absolute;
            height: 30px;
            width: 30px;
            display: block;
            background: #ae0a46;
            border-radius: 7px;
            transform: rotate(45deg);
            z-index: -1;
        }

        .badges_list li a span {
            position: absolute;
            top: -14px;
            left: 15px;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: 3px solid #fff;
            color: #fff;
            font: 700 11px "Lato", sans-serif;
            background: #ff6b6b;
        }

        .blog_right {
            border-radius: 8px !important;
        }

        .blog_left {
            border-radius: 8px !important;
        }

        .blog_middle {
            border-radius: 8px !important;
        }

        .blog_bg {
            background: #eff3f5;
        }

        .blog_writer {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        ul {
            padding-left: 0rem;
        }

        ul.interests_list {
            list-style-type: circle;
            color: #ae0a46 !important;
            padding-left: 2rem;
        }

        ul.interests_list a {
            color: #ae0a46 !important;
        }

        .client_stories_img {
            widows: 200px;
            height: 200px;
        }

        .pagination li a:hover {
            background-color: #ae0a46;
            color: #ffffff;
            display: inline-block;
            padding: 6px 11px;
            text-decoration: none;
            transition: all 1ms linear 1ms;
            border-color: #ae0a46;
        }

        .popular_post a p {
            color: #000;
        }

        .popular_post a img {
            width: 60px;
            height: 60px;
        }

        .popular_post a p:hover {
            color: #ae0a46;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header pb-5" style="background-image: url('{{ asset('frontend/images/blog.jpg') }}');">
        <div class="container mb-5">
            <h1 class="text-white">Research & Reports</h1>

            <div class="row mb-5">
                <!--BUTTON START-->

            </div>
        </div>
    </section>
    <!----------End--------->
    <div class="container-fluid blog_bg p-0 m-0">
        <div class="container px-4 py-5">
            <div class="row gx-3 ">
                <div class="col-lg-8 offset-lg-1 col-12 blog_left main_blogs mt-3">
                    {{-- First Blog --}}
                    <div class="row">
                        @if ($blogs)
                            @foreach ($blogs as $blog)
                                <div class="p-3 border shadow-lg m-4" style="background-color: #fff;border-radius: 5px;">
                                    <a class="text-black" href="{{ route('story.details', $blog->slug) }}">
                                        <div class="p-3">
                                            {{-- Blog Image --}}
                                            <img src="{{ !empty($blog->thumbnail_image) && file_exists(public_path('storage/' . $blog->thumbnail_image)) ? asset('storage/' . $blog->thumbnail_image) : asset('storage/' . $blog->banner_image) }}"
                                                class="img-fluid" alt="">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col mt-3">
                                                    {{-- Blog Descrition --}}
                                                    <div>
                                                        <h5 class="fw-semibold">{{ $blog->title }}</h5>
                                                        <p>{{ $blog->header }}</p>
                                                    </div>
                                                    {{-- Blog Descrition End --}}
                                                </div>

                                            </div>
                                            {{-- Blog Button --}}
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <p class="ml-2 mb-0"><strong>Author :
                                                        </strong>{{ $blog->author }}</p>
                                                </div>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    {{-- <p class="mb-0 pe-2 pt-2">{!! Share::page(url('/blog/' . $blog->id . '/details'))->facebook() !!}</p>
                                                    <p class="mb-0 pe-2 pt-2">{!! Share::page(url('/blog/' . $blog->id . '/details'))->twitter() !!}</p>
                                                    <p class="mb-0 pe-2 pt-2">{!! Share::page(url('/blog/' . $blog->id . '/details'))->whatsapp() !!}</p> --}}
                                                    <a class="" href="{{ route('story.details', $blog->slug) }}" style="color: #ae0a46;">See Details -></a>
                                                </div>
                                            </div>
                                            {{-- Blog Button End --}}
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @if ($featured_storys->count() > 0)
                    <div class="col-lg-3 col-12 blog_left mt-3">
                        <div class="px-3 py-3 shadow-lg rounded-lg">
                            {{-- <img class="img-fluid" src="https://source.unsplash.com/random/580x320"> --}}
                            <div class="pt-3">
                                <h6>Popular Posts</h6>
                                @if ($featured_storys)
                                    @foreach ($featured_storys as $item)
                                        <div class="pt-3 pb-3 d-flex justify-content-between popular_post">
                                            <a href="{{ route('story.details', $item->id) }}"
                                                class="d-flex justify-content-between">
                                                <img class="rounded-circle img-fluid"
                                                    src="{{ asset('storage/' . $item->thumbnail_image) }}" alt=""
                                                    style="">
                                                <p class="ms-2">{{ Str::limit($item->title, 30) }}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{ $blogs->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-------End------->
        </div>
        <!--=======// Featured client stories //=======-->


        <!--=======// Featured client stories //=======-->
    @endsection
