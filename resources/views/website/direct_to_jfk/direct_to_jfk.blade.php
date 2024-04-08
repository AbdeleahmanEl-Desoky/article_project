@extends('website.layout.app')

@section('title')
    <title>Direct to JFK</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner wow bounce"  data-wow-delay="0.1s">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" galleryimg="no"
                    src="{{ asset('images/Direct to JFK/Direct to JFK.png') }}"
                        alt="First slide">
                </div>
            </div>
        </div>
    </section>
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 layerIndex d-lg-block">
            <div class="sidebar">

                <div class="widget">
                    <div class="link-widget text-dark">
                        <div class="dropdown">
                            <button class="btn btn-lg index dropdown-toggle " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                index
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#Directions"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <div class="container " id="container_contact">
        <br>
        <div class="row my-5">

        @include('website.layout.link')
        </div>
        


        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h2 style="color: black">How to go from Manhattan to Kennedy International Airport (JFK)</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Subway</h3>


                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        <li>You can get subway train number E to Sutphin Blvd Station,and get elevator free from outside street to  Air Train JFK to your terminal.</li>

                        <li>You can get subway train number A to Howard Beach Station and get Air Train JFK to your terminal.</li>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Notice</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        <li>You can get map for Manhattan From inside subway station to know your way.</li>

                        <li>You will pay ticket for Air Train.</li>

                        <li>Price Ticket for subway is $ 2.75 (one tripe).</li>

                        <li>Price Ticket For Air Train JFK is $ 7.75( one tripe).</li>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Bus NYC</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        you can get service from 42 Street between 7 and 8 Avenue ( it is near from 7 Avenue front entrance of port Authority Bus Terminal).( $19 for one tripe).
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Bus Shuttle</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        some hotels and transportatiopn companies offer shuttle services to JFK airport.<br>
                        You can inquire with your hotel or check for shuttle services online to see if there any options a vailable from Manhattan to JFK airport.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Taxi</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        taxi are convenient but more expensive. You can get yellow cab on the street. Be sure to factor in traffic conditions when choosing this option.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Uber</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        Is anther way to get JFK from Manhattan. Make sure to select the correct terminal for drop-off to avoid any confusion.<br>
                        Notice From manhattan to JFK airport take about (one and half hour to 2 hours) in regullar traffic.

                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 style="color: black">How To go to Manhattan from Kennedy International Airport (JFK)</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>SubWay</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        <li>Take the AirTrain from JFK Airport to Jamaica Station.or to Howard Beach.</li>

                        <li>Transfer to the subway at Jamaica Station. You can take the E Subway line towards World Trade Center, or towards to midtown Manhattan ( 42 strret with 8 Avenue).</li>

                        <li>Or transfer to subway Howard Beach stationt. You can Take the A Subway line towards to midtown Manhattan (42 Street with 8 avenue).</li>

                        <li>Ride the subway into Manhattan, and you can get off at various stops depending on your final destination in Manhattan.</li>

                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Notice</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        <b>when you cross to subway you will pay ticket for Air Train and Subway.</b><br>

                        <li>Price Ticket for subway is $ 2.75 ( one trip).</li>

                        <li>Price Ticket For Air Train JFK is $ 7.75 ( one tripe).</li>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Bus NYC</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        You can Find Bud NYC outside termial Airport.( $ 19 for one trip).
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Taxi</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        You can find line Taxi outside termial Airport.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Uber</h3>
                    <p  class="px-3 wow bounce" data-wow-delay="0.1s">
                        you can get uber by connect.
                    </p>
                </div>
            </div>


            </div>
            @include('website.layout.link')
            {{-- * -------------------------------------------------------------------------------- --}}
            {{-- *                                    end content                                   --}}
            {{-- * -------------------------------------------------------------------------------- --}}
        </div>
</section>
@endsection

