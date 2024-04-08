@extends('website.layout.app')

@section('title')
    <title>Bus to go outside, Manhattan NYC</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
{{-- 
    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner wow bounce"  data-wow-delay="0.1s">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" galleryimg="no"
                    src="{{ asset('images/charging_bull/1.png') }}"
                        alt="First slide">
                </div>
            </div>
        </div>
    </section> --}}
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
        <div class="row">

            <div class="col-12 text-center p-4">

                <h2 style="color: black">
                    Bus to go outside, Manhattan NYC
                </h2>
                    <!-- First Row -->
                    {{-- <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                        src="{{asset('images/charging_bull/Charging Bull, New York City in downtown Manhattan.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Charging Bull, New York City in downtown Manhattan</small>
                    </div> --}}

            </div>

            {{-- <div class="col-12">
                <h5 class="text-center wow bounce"  data-wow-delay="0.1s">
                    Charging Bull, New York City, a well-known bronze sculpture, sometimes referred to as the Wall Street Bull, is situated in Manhattan, New York City.<br>
                    The classic piece of art has gained international recognition as a representation of American business and financial optimism.<br>
                    We shall investigate the background, importance, and effects of Charging Bull, New York City.
                </h5>
            </div> --}}
        </div>



        <div class="container-fluid">

            {{-- <div class="row my-5" >
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h4 class="wow bounce" style="color: black"  data-wow-delay="0.1s">
                       <b> Here are a few common bus stations in Manhattan, New York City, along with their addresses to go outside manhattan:</b>
                    </h4>
                </div>
            </div> --}}


            <div class="row my-5" id="Port Authority Bus Terminal">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        Port Authority Bus Terminal
                    </h3>

                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p class="wow bounce"  data-wow-delay="0.1s">
                                Address: 625 8th Avenue, New York, NY 10018.<br>
                                Port Authority Bus Terminal on 8 Avenue between( west40 and west 42 Street).( Greyhound Bus).<br>
                                visit website to get ticket(www.greyhound.com).<br>
                                <br>
                                <b> entrance for port Authority bus Terminal:</b>
                                <br>
                                <li>on 8 Avenue between west 40 and west 42 Street.</li>
                                <li>on 42 street between 8 and 9 Avenue.</li>
                                <li>on 9 Avenue between west 40 and west 41 Street.</li>
                                <br>
                                <br>
                                Service all U.S.A
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/bus/Port Authority Bus Terminal.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Port Authority Bus Terminal</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row my-5" id="Megabus Stop">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        Megabus Stop
                    </h3>
                    <h5>West 34th Street between 11th Avenue and 12th Avenue:</h5>

                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>Address: </b>630 West 34th St, New York, NY 10001<br>
                        visit web megabus to get tickets (us.megabus.com)<br>
                        <br>
                        Megabus operates routes to various cities outside of Manhattan, providing connections to different destinations.<br>
                    </p>
                    <h5>
                        Some common cities that Megabus serves from Manhattan include:
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->

                                <p>
                                    <b>
                                        Here is  a list of cities that Megabus serves from Manhattan, New York City:
                                    </b><br>
                                <li>
                                    Albany, NY
                                </li>
                                <li>
                                    Amherst, MA
                                </li>
                                <li>
                                    Baltimore, MD
                                </li>
                                <li>
                                    Binghamton, NY
                                </li>
                                <li>
                                    Boston, MA
                                </li>
                                <li>
                                    Buffalo, NY
                                </li>
                                <li>
                                    Burlington, VT
                                </li>
                                <li>
                                    Cambridge, MA
                                </li>
                                <li>
                                    Hartford, CT
                                </li>
                                <li>
                                    Ithaca, NY
                                </li>
                                <li>
                                    Kingston, ON (Canada)
                                </li>
                                <li>
                                    New Haven, CT
                                </li>
                                <li>
                                    Newark, NJ
                                </li>
                                <li>
                                    Philadelphia, PA
                                </li>
                                <li>
                                    Pittsburgh, PA
                                </li>
                                <li>
                                    Providence, RI
                                </li>
                                <li>
                                    Rochester, NY
                                </li>
                                <li>
                                    Syracuse, NY
                                </li>
                                <li>
                                    Toronto, ON (Canada)
                                </li>
                                <li>
                                    Washington, D.C.
                                </li>
                                <li>
                                    White River Junction, VT
                                </li>
                                <li>
                                    Worcester, MA
                                </li>
                                <br>
                                <br>
                                Please note that Megabus may add or alter routes over time, so it's always a good idea to check their website or app for the most up-to-date information on available destinations and schedules.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/bus/Megabus Stop.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Megabus Stop</small>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row my-5" id="FlixBus">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        FlixBus
                    </h3>

                </div>
            </div>



            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->

                            <p class="wow bounce"  data-wow-delay="0.1s">
                                West 31 th street and 8 the Avenue<br>
                                300 West 31 St New York, NY10001<br>
                                Visir website to get ticket (www.Flixbus.com)<br>
                            </p>
                            <h5 class="wow bounce"  data-wow-delay="0.1s">Here Are some common cities that FlixBusserve from manhattan, New York City:</h5>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Los Angeles,Co
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                            Boston, Ma
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                ATlanta,GA
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                            Houston,TX
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                            Washington,DC
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Chicago,IL
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Dallas,TX
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Las Vegas,NV
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Philadelphia,PA
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Orlando,FL
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Miami,FL
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Phoenix-Tampe,AZ
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                san Diego,CA
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                San Antonio,TX
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Austin,TX
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Seattle,WA
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Baltimore,MD
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Detroit,MI
                            </li>
                            <li class="wow bounce"  data-wow-delay="0.1s">
                                Indianapolis,IN
                            </li>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/bus/FlixBus.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">FlixBus</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row my-5" id="Chinatown Bus Stops">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        Chinatown Bus Stops
                    </h3>
                    <h5 class="wow bounce"  data-wow-delay="0.1s">
                        There are several Chinatown bus stops in Manhattan
                    </h5>

                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p class="wow bounce"  data-wow-delay="0.1s">
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Chinatown Bus</b><br>
                                    88 Allen st, New york,ny 10002 <br>
                                    Tel:917-420-5985
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Star Line Bus</b><br>
                                    95 Canal st,New York.ny 10002<br>
                                    Tel:212-965-8880
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Bus2nyc</b><br>
                                    103 Canal st,New York,ny 10002
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Go to Bus stop</b><br>
                                    West 34 st,New York,ny 10001
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Lucky Star Bus</b><br>
                                    145 Canal st,New york,ny 10001
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>New york city Chinatown</b><br>
                                    (Bowery& Canal st) New York,ny 10002
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Wanda Coach</b><br>
                                    103 Canal St,New york, nyc 10002<br>
                                    Tel:917-717-4666
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>canal St</b><br>
                                    Canal St,New york,ny 10013
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Greyhound Bus lines</b><br>
                                    47 Mott St,New york,ny 10013<br>
                                    Tel:541-757-1798
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Jaquar Bus/Bus 2nyc/sky Horse Bus</b><br>
                                        59 Canal st,New york,ny 10002<br>
                                        212-625-9928
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Coach Bus charter</b><br>
                                        47 Columbia st,New york,ny 10002<br>
                                        Tel:646-362-0992
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Great Wallk line inc</b><br>
                                        94 Madison st,New york,ny 10002<br>
                                        Tel:212-321-1122
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Bowery/Canal st</b><br>
                                        Canal st,New york,ny 10013
                                </li>
                                <li class="wow bounce"  data-wow-delay="0.1s">
                                    <b>Wall Street Bus charter</b><br>
                                    30 wall St 8th floor New york,ny 10005<br>
                                    Tel:929-202-4166
                                </li>
                            </p>
                        </div>
                        {{-- <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/bus/Chinatown Bus Stops.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Chinatown Bus Stops</small>
                        </div> --}}
                    </div>
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

