@extends('website.layout.app')

@section('title')
    <title>Home Page</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section section_head">
        <div class='video'>
            <video autoplay muted id="myVideo" onended="showImages()">
                <source class="" src="{{ asset('website/assets/video/rain5.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="display:none;">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height active ">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/8.jpg') }}"
                        alt="First slide">
                    <div class="carousel-buttons  p-1">
                        <div class="part_one">
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/7.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/6.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/5.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/4.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/3.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/2.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/1.jpg') }}" alt=""></a>

                        </div>
                        <div class="part_two">
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/15.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/14.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/12.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/16.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/11.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/10.jpg') }}" alt=""></a>
                            <a href="#"><img class="img_header p-1"
                                    src="{{ asset('website/assets/images/header/buttons/9.jpg') }}" alt=""></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                {{--  *  -------------------------------------------------------------------------------- --}}
                {{--  *                                   start side part                                 --}}
                {{--  *  -------------------------------------------------------------------------------- --}}
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar border ">
                        <div class="widget mt-5 ">
                            <h2 class="widget-title">Index</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="{{ route('section') }}">Marketing <span>(21)</span></a></li>
                                    <li><a href="{{ route('section') }}">SEO Service <span>(15)</span></a></li>
                                    <li><a href="{{ route('section') }}">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="{{ route('section') }}">Make Money <span>(22)</span></a></li>
                                    <li><a href="{{ route('section') }}">Blogging <span>(66)</span></a></li>
                                    <li><a href="{{ route('section') }}">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="{{ route('section') }}">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Sections</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="{{ route('section') }}">Marketing <span>(21)</span></a></li>
                                    <li><a href="{{ route('section') }}">SEO Service <span>(15)</span></a></li>
                                    <li><a href="{{ route('section') }}">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="{{ route('section') }}">Make Money <span>(22)</span></a></li>
                                    <li><a href="{{ route('section') }}">Blogging <span>(66)</span></a></li>
                                    <li><a href="{{ route('section') }}">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="{{ route('section') }}">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="page-wrapper">
                        <div class="blog-custom-build w-100 ">
                            <div class="blog-box wow fadeIn ">
                                <div class="post-media">
                                    <div class="part_one">
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/7.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/6.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/5.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/4.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/3.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/2.jpg') }}" alt=""></a>
                                        <a href="#"><img class="img_header p-1"
                                                src="{{ asset('website/assets/images/header/buttons/1.jpg') }}" alt=""></a>
                                                <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/15.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/14.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/12.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/16.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/11.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/10.jpg') }}" alt=""></a>
                                            <a href="#"><img class="img_header p-1"
                                                    src="{{ asset('website/assets/images/header/buttons/9.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="part_two">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                                   end side part                                  --}}
                {{-- * -------------------------------------------------------------------------------- --}}

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                               start view articales                               --}}
                {{-- * -------------------------------------------------------------------------------- --}}

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="page-wrapper">
                        <div class="blog-custom-build w-100 ">
                            <div class="blog-box wow fadeIn ">
                                <div class="post-media">
                                    <a href="{{ route('Design_two') }}" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>

                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div>

                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="{{ route('Design') }}" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="{{ route('article') }}" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="{{ route('article') }}" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="{{ route('article') }}" title="">
                                        <div class="image_artical ">
                                            <img src="https://blog-cdn.reedsy.com/directories/admin/featured_image/591/large_dissecting-the-cover-of-a-book-ee0d6a.jpg"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                                end view articales                                --}}
                {{-- * -------------------------------------------------------------------------------- --}}



            </div>
        </div>
    </section>
@endsection

