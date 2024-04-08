@extends('website.layout.app')

@section('title')
    <title>About us</title>




@endsection


@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    {{-- <section id="cta" class="section section top_header">
        <img class="w-100 h-100"
                        alt="">
        <div class="button_home  p-1">
            <a href="{{ route('home') }}"> <button type="button" class="btn btn-primary rounded-pill">Back to home </button>
            </a>
        </div>
    </section> --}}
    <section id="cta" class="section section_head">
        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100 active img_about">
                    <div class="text-overlay">
                        <h1 style="color: white">About US</h1>
                    </div>
                    <img class="d-block h-100 w-100" src="{{ asset('images/about.jpg') }}" alt="First slide">
                </div>
            </div>
        </div>
    </section>
<style>.carousel-item {
    position: relative;
}

.text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white; /* Set the text color to your preference */
}</style>


    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section ">

        <div class="container " id="container_contact">

            <div class="row">
                <div class="col-12 col-lg-4 p-2 m-auto text-center bg-light one_title">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/7.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/6.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/5.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/4.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/3.jpg') }}" alt=""></a>
                </div>
                <div class="col-12 col-lg-4 p-2 m-auto text-center">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/2.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/1.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/15.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/14.jpg') }}" alt=""></a>
                </div>
                <div class="col-12 col-lg-4 p-2 m-auto text-center">
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/12.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/16.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/11.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/10.jpg') }}" alt=""></a>
                    <a class="link_image" href="#"><img class="img_header"
                            src="{{ asset('website/assets/images/header/buttons/9.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center p-4">

                    <h2 style="color: black">
                        About US
                    </h2>
                </div>
            </div>
        </div>
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mina_test p-3 m-auto">
                    <img class="h-100 w-100 text-center"
                        src="{{asset('images/about_1.jpg')}}"
                        alt="">
                </div>
                <div class="col-lg-6 col-12 p-3">
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                Manhattan NYC Walk
                            </h3>
                        </div>

                        <div class="col-12">
                            <p>
                                We are working to make Manhattan, New York City great by providing everything to serve and comfort the visitors of the Manhattan,
                                New York City, whether from inside the United States of America or from abroad, as well as it's residents.
                            </p>
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li>Manhattan</li>
                                        <li>Times Square</li>
                                        <li>Vessel New York City</li>
                                        <li>Highline New York City</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li>Rockefeller Center New York City</li>
                                        <li>One World Trade Center New York City</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('content') }}"> <button type="button" class="btn btn-primary rounded-pill">contact US </button>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}

    </section>
@endsection
