@extends('website.layout.app')

@section('title')
    <title>Times Square</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner"  class="wow bounce"  data-wow-delay="0.1s">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/times-square/Times-Square.jpg') }}"
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
                                <a class="dropdown-item" href="#TimeSquare,NYC">Time Square, NYC is an important place in midtown Manhattan, NYC</a>
                                <a class="dropdown-item" href="#Thebesttime">The best time to visit Times Square, NYC</a>
                                <a class="dropdown-item" href="#BestShop">Best Shop</a>
                                <a class="dropdown-item" href="#Bestrestaurants">Best restaurants, fast food and fast-food sellers</a>
                                <a class="dropdown-item" href="#Importantbuildings">Important buildings in Times Square, nyc</a>
                                <a class="dropdown-item" href="#Importantplaces">Important places around Times Square Manhattan, nyc</a>
                                <a class="dropdown-item" href="#Buyaticket">Buy a ticket at Time Square, NYC</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
                                <a class="dropdown-item" href="#HotelsnearTimes">Hotels near Times Square, NYC, Manhattan, New York city</a>
                                <a class="dropdown-item" href="#directions">Directions</a>
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

            @include('website.layout.link')

            <div class="row">
                <div class="col-12 text-center p-4">

                    <h2  class="wow bounce"  data-wow-delay="0.1s" style="color: black">
                        Times Square, NYC
                    </h2>
                </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2" src="{{asset('images/times-square/Times Square, NYC at night.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">Times Square, NYC at night</small>
            </div>


            <div>
                <h5 class="text-center">
                    Times Square, NYC at night city's most well-known locations, it has a long history going back more than a century.<br>
                    The region, previously known as Longacre Square, operated as a horse and carriages selling center in the late 19th century.<br>
                    The area's name was change to Times Square in 1904 when the New York Times moved its operations there.
                </h5>
            </div>
        

        <div class="container-fluid">
            <div class="row my-5" id="TimeSquare,NYC">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce"  data-wow-delay="0.1s">
                        Time Square, NYC is an important place in midtown Manhattan, NYC
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Over the years, Times Square, NYC has seen several modifications.<br>
                        <br>
                        In the 1920s, it became the center of the city's entertainment scenes with neon signs and billboards advertising the newest Broadway productions.<br>
                        This is also the time when the well-known New Year's Eve ball drop, which first took place in 1907, developed.<br>
                        <br class="wow bounce"  data-wow-delay="0.1s">
                        Due to the growth of several nightclubs, theatres, and restaurants in Times Square, NYC in the late 1930s and early 1940s, the area became a center for the entertainment industry.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/times-square/Man statue of Liberty.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Man statue of Liberty</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12 tiko">
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        But in the 1950s, as movie going declined and televisions became more popular, the neighborhood began to suffer.<br>
                        The region developed a reputation for being seedy and added to the bad image of New York City because of the high concentration of adult theatres, drug dealers, and other illicit activity.<br>
                        <br class="wow bounce"  data-wow-delay="0.1s">
                        In the 1980s, a significant restoration project was started to clean up the area and make it more hospitable for tourists.<br>
                        As a result, Times Square, NYC midtown Manhattan, NYC underwent redevelopment and gained additional theatres, restaurants, shops and hotels.<br>
                        It is currently a well-known traveler objective and important to the image of the city.<br>
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p class="wow bounce"  data-wow-delay="0.1s">
                                Even with all the modifications, Times Square, NYC still has a few recognizable landmarks. A well-liked meeting spot is the square's northernmost set of red steps, which were constructed in 2008.<br>
                                The infamous neon announcements and messages are still shown on the skyscrapers, and the ball drop on New Year's Eve remained a beloved custom as before.<br>
                                <br class="wow bounce"  data-wow-delay="0.1s">
                                Times Square , NYC has made a significant contribution to American culture by showing up in numerous films, television shows, and photographs.<br>
                                There are now several important events hosted there, including the TCS Manhattan NYC Marathon and the annual New Year's Eve celebration.<br>
                                <br class="wow bounce"  data-wow-delay="0.1s">
                                Times Square, NYC has a rich history that demonstrates how New York City and all of America have evolved throughout the years.<br>
                                Times Square Manhattan, NYC has long been a symbol of the energy and vitality of the city, from its earliest days as a horse trading area to its contemporary role as a top tourists' destination.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/times-square/Times Square, NYC.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Times Square, NYC</small>
                        </div>
                    </div>
                </div>
            </div>
                {{--2--}}
            <div class="row" id="Thebesttime">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">The best time to visit Times Square, NYC</h3>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5 class="wow bounce"  data-wow-delay="0.1s">Time Square, NYC New Year’s Eve Ball</h5>
                </div>
            </div>

<div class="row wow bounce" data-wow-delay="0.1s">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/times-square/VOD_20221230_184806.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>





            <div class="row my-3">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Left half of the article -->
                            <p class="wow bounce"  data-wow-delay="0.1s">
                                Each year, millions of visitors go to Times Square, NYC in midtown Manhattan, nyc.<br>
                                The perfect time to visit Times Square, though, will depend on your inclinations and what you want to get out of the trip.<br>
                                The busiest travel period, which runs from May to September, may be the finest time to visit Times Square if you want to fully immerse yourself within the commotion of New York City.<br>
                                <br class="wow bounce"  data-wow-delay="0.1s">
                                You'll expect a charming climate, open air exercises, and an assortment of fun things to do during this time. But be prepared to bargain with enormous crowds and drawn-out lines.<br>
                                The winter months from November to February can be perfect for you if you want to avoid the crowds and encounter a more peaceful Times Square.<br>
                                Although it might get cold during this time of year, there can be something fabulous about the holiday displays and celebrations.<br>
                                <br class="wow bounce"  data-wow-delay="0.1s">
                                Another fantastic time to be there is the annual New Year's Eve celebration.<br>
                                You must not pass up the once-in-a-lifetime opportunity of watching the ball drop! But make sure to arrive early and prepare for a large crowd.<br>
                                The ideal time to go to Times Square, NYC will ultimately depend on your own interests.<br>
                                you decide to visit, make sure to experience the sights and sounds of this well-known New York City neighborhood.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/times-square/Time Square, NYC New Year’s Eve Ball.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Time Square, NYC New Year’s Eve Ball</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row my-3">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <h5 class="wow bounce my-3"  data-wow-delay="0.1s">Things to do in Times Square, nyc</h5>
                            <!-- Left half of the article -->
                            <p class="wow bounce"  data-wow-delay="0.1s">
                                Times Square, nyc commonly alluded to as "The Junction of the World," is without a doubt one of the most famous and energetic traveler areas within the whole globe.<br>
                                <br>
                                Times Square, which is in the center of midtown Manhattan, gives a particular and exciting experience that everyone may enjoy.<br>
                            </p>
                            <h5 class="wow bounce my-3"  data-wow-delay="0.1s">
                                A few of the best activities at Times Square include the following:
                            </h5>
                            <b class="wow bounce"  data-wow-delay="0.1s">Experience the Lively Atmosphere:</b>
                            <p class="my-3 wow bounce"  data-wow-delay="0.1s">
                                Meander the streets of Times Square, NYC and take in the renowned buildings, neon signs, and multicultural populace.<br>
                                The area is particularly mesmerizing at night because of the astonishing screens and lights that light it up.
                            </p>
                            <b class="wow bounce"  data-wow-delay="0.2s">Attend a performance or musical:</b>
                            <p class="my-5 wow bounce"  data-wow-delay="0.1s">
                                The Broadway Theater, a theater that is one of Times Square's well-known, could be an awesome place to see a performance or a musical.<br>
                                To secure the finest seats, make sure you buy your tickets early.
                            </p>

                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/times-square/Santa Christmas in Time Square, NYC.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Santa Christmas in Time Square, NYC</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row my-3">
                <div class="col-lg-12">
                    <b class="wow bounce"  data-wow-delay="0.1s">Eat at Local Eateries:</b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/times-square/Between 7 Avenue bewteen  45, 46 Street_1.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Hard Rock Cafe 43 street & 7 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.5s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Between 7 Avenue bewteen  45, 46 Street_2.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Juniors restaurant between 7 & 8 Avenue bewteen  45, 46 Street</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/People enjoy at Time Square.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">People enjoy at Time Square</small>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12 tiko">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Times Square, NYC features a wide variety of eating choices, from quick food joints to fine dining establishments.<br>
                        The most excellent universal cuisine is accessible to diners, including true American food, Italian, Chinese, and more.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <b class="wow bounce"  data-wow-delay="0.1s">
                        Shopping:
                    </b>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Times Square, NYC shopping may be a fun experience and a well-liked visitor destination.<br>
                        Visitors can purchase anything from the most current fashion accessories to souvenirs in the area's numerous shops, marketplaces, and boutiques.
                    </p>
                </div>
            </div>

            <div class="row my-5">
                    <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <b class="wow bounce"  data-wow-delay="0.1s">
                        Museums:
                    </b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                        src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Madame Tussauds in 42 Street between 7 & 8 Avenue</small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue_1.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center"></small>
                </div>
                <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.5s">
                    <!-- Centered image with text -->
                    <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Madame Tussauds in 42 Street between 7 & 8 Avenue_2.jpg')}}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center"></small>
                </div>
            </div>

        <div class="row my-5">
            <div class="col-lg-12 tiko">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    Times Square, NYC is additionally home to several museums that give an interesting glimpse into the past and culture of New York City.<br>
                    These include the Museum of Modern Art, the Ripley's Believe It or Not Museum, and Madame Tussauds Wax Museum.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b class="wow bounce"  data-wow-delay="0.1s">Take Advantage of the Nightlife:</b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">Times Square, NYC is renowned for its exciting nightlife.<br>
                    Here, you will go out with friends and have a great time at the most well-liked bars and clubs within the city.<br>
                    Times Square , NYC, Manhattan,  features a wide variety of choices for dining, shopping, entertainment, and nightlife.<br>
                    It's the ideal location to take in the energy and vitality of New York City.
                </p>
            </div>
        </div>

        <div class="row" id="BestShop">
            <div class="col-lg-12">
                <h3 class="wow bounce"  data-wow-delay="0.1s">Best Shop</h3>
                <br>
                <p class="wow bounce"  data-wow-delay="0.1s">
                    One of the most popular tourist locations in New York City is Times Square, NYC, which provides a diverse range of food, entertainment, and shopping options.
                </p>
                <h5 class="wow bounce"  data-wow-delay="0.1s">Some of the top stores to check out while at Times Square are listed below:</h5>
            </div>
        </div>



        <div class="row">
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/times-square/Forever 21.jpg')}}"
                class="img-fluid" alt="Article Image">
            <b class="d-block text-center wow bounce"  data-wow-delay="0.1s">Forever 21</b><br>
            <p class="wow bounce d-block text-center"  data-wow-delay="0.1s">
                This ship clothing retailer has both affordable and stylish clothing for men and women.<br>
                You can undoubtedly discover something that fits your style among the several levels of apparel selection between 45 and 46th St.
            </p>
            </div>
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/times-square/m&m.jpg')}}"
                class="img-fluid" alt="Article Image">
                <b class="wow bounce d-block text-center"  data-wow-delay="0.1s">(M&M) World New York</b><br>
                <p class="wow bounce d-block text-center"  data-wow-delay="0.1s">
                    a vibrant candy, gift, and clothing store (48th St and 7th Avenue or Broadway Avenue).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Hard Rock Cafe (43rd St and 7 Avenues).jpg')}}"
                    class="img-fluid" alt="Article Image">
                    <p class="wow bounce d-block text-center"  data-wow-delay="0.1s"><b>Hard Rock Cafe</b><br>(43th St and 7 Avenue)</p>
            </div>
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.5s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/times-square/Hershey Chocolate World Time (47th St and 7 Avenue).jpg')}}"
                class="img-fluid" alt="Article Image">
                <p class="wow bounce d-block text-center"  data-wow-delay="0.1s"><b class="wow bounce"  data-wow-delay="0.1s">Hershey Chocolate World Time</b><br>(47th St and 7 Avenue)</p>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <b class="wow bounce"  data-wow-delay="0.1s">(H&M)</b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    Another well-known retailer of clothes, (H & M) provides reasonably priced, stylish clothing for kids, ladies, and adults. (Broadway Ave. and 42nd St.).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <b class="wow bounce"  data-wow-delay="0.1s">Sephora</b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    Shoppers interested in beauty will enjoy a trip to Sephora, which offers a variety of skincare, fragrance, and makeup options from well-known brands. Between (45 and 46th St).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="wow bounce"  data-wow-delay="0.1s"><b class="wow bounce"  data-wow-delay="0.1s">Disney Store for Toys</b> between 45 and 46 St.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="wow bounce"  data-wow-delay="0.1s"><b>Eagle Store</b>(46th St and 7 Avenue)</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="wow bounce"  data-wow-delay="0.1s"><b>Express Store</b>(46th St and Broadway Avenue).</p>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">In general, Times Square, NYC,  Manhattan is a shopper's haven, offering a vast variety of shops and shopping experiences to fit every preference and price range.</p>
            </div>
        </div>

        <div class="row" id="Bestrestaurants">
            <div class="col-lg-12">
                <h3 class="wow bounce"  data-wow-delay="0.1s">Best restaurants, fast food and fast-food sellers</h3>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <h5 class="wow bounce"  data-wow-delay="0.1s">A few of the best eateries in Times Square, NYC include:</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">Carmine's Italian Restaurant:</b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">A family-style establishment that offers substantial portions of traditional Italian food as chicken parmesan and lasagna. (44thtbetween 7 and 8 Avenue).</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">Junior's Cheesecake:</b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">A New York City institution known for its delectable cheesecakes, pies, and other desserts.<br>
                    While you're there, try their famed unique cheesecake. (West 45th between 7th and 8th Avenues)</p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">
                    Sardi's:
                </b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    A legendary eatery that has served typical American fare since 1927. <br>
                    Sardi's fame stems from celebrity caricatures that decorate the walls of the dining area.<br>
                    West 44 Road, between Roads 7 and 8.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    <b>The Difficult Shake.</b>(located at 43rd and 7th Avenues)
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">
                    Shake Shack:
                </b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    This fast-food organization built a cult due to its delectable burgers, fries, and shakes.<br>
                    Although the Times Square location is at 44th Road and 8th Road in Manhattan, nyc is regularly busy, the wait is worthwhile.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">
                    Luke's Lobster:
                </b>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    Luke's Lobster (41st St & Broadway Avenue) has you covered with their fresh, delectable lobster rolls if you're in the mood for seafood.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    The most excellent halal food within the city, including gyros and falafel, is served by these carts' food sellers.
                </p>
            </div>
        </div>


        <div class="row" id="Importantbuildings">
            <div class="col-lg-12 my-5">
                <h3 class="wow bounce"  data-wow-delay="0.1s">Important buildings in Times Square, nyc</h3>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <h5 class="wow bounce"  data-wow-delay="0.1s">Some of the famous buildings in Times Square are:</h5>
                <li class="wow bounce"  data-wow-delay="0.2s">
                    One Times Square, at the intersection of Broadway and Seventh Avenue
                </li>
                <li class="wow bounce"  data-wow-delay="0.3s">
                    Paramount Building, 1501 Broadway
                </li>
                <li class="wow bounce"  data-wow-delay="0.4s">
                    Morgan Stanley Building, 1585 Broadway
                </li>
                <li class="wow bounce"  data-wow-delay="0.5s">
                    Tower 45, 120 West 45th St
                </li>
                <li class="wow bounce"  data-wow-delay="0.6s">
                    The New York Times Building between 41st Street and 40th Street on 8th Avenue.
                </li>
            </div>
        </div>

        <div class="row" id="Importantplaces">
            <div class="col-lg-12 my-5">
                <h3 class="wow bounce"  data-wow-delay="0.1s">Important places around Times Square Manhattan, nyc</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- Left half of the article -->
                <P class="wow bounce"  data-wow-delay="0.1s">
                    One of the most popular tourist locations in New York City is Times Square, which is well-known for its dazzling lights, soaring billboards, and throngs of onlookers.
                </P>

            </div>
            <div class="col-12 col-lg-4">
                <!-- Right third with an image -->
                <div class='video'>
                <video autoplay muted id="myVideo" onended="showImages()">
                    <source class="" src="{{ asset('images/times-square/VOD_20230129_105753.mp4') }}" type="video/mp4">
                </video>
                </div>
                <small class="text-center d-block">Amazing view for Robenhod</small>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <h5 class="wow bounce"  data-wow-delay="0.1s">The following here are a few of the significant locations in and surrounding Times Square</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <b class="wow bounce"  data-wow-delay="0.1s">Broadway Theaters</b><br>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    The Lyceum Theatre, St. James Theatre, and Majestic Theatre, three of the most well-known ones in Broadway, are all located in Times Square.
                </p>
            </div>
            <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                <!-- Right third with an image -->
                <img class="w-100 h-75 p-2"
                    src="{{asset('images/times-square/Broadway Theaters.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="text-center d-block">MaRquis theater in W46 Street between Broadway and 8 Avenue</small>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">Times Square, NYC Museum and Visitors Center</b><br>
                <br class="wow bounce"  data-wow-delay="0.1s">
                <p class="wow bounce"  data-wow-delay="0.1s">
                    is the ideal location to discover the past of Times Square, NYC.<br>
                    The museum displays items and displays about the well-known area at the corner. (42 street and 7 Avenue).
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-lg-4">
                <!-- Right third with an image -->
                    <video autoplay muted loop id="myVideo_1" class="w-100 h-50 p-2">
                        <source  src="{{ asset('images/times-square/VOD_20221220_182238.mp4') }}" type="video/mp4">
                    </video>
                    <b class="text-center d-block wow bounce"  data-wow-delay="0.1s">The New Year's Eve Ball</b><br>
                    <br class="wow bounce"  data-wow-delay="0.1s">
                    <P class="text-center d-block wow bounce"  data-wow-delay="0.1s">
                        One of the major yearly events is the ball drop on New Year's Eve, which is celebrated in Times Square.
                        The ball is constructed of Waterford crystal and is perched atop the One Times Square building.
                    </P>
            </div>
        </div>



        <div class="row tiko">
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.1s">
                <!-- Centered image with text -->
                <img class="w-100 h-50 p-2 tiko"
                src="{{asset('images/times-square/Madame Tussauds Wax Museum.jpg')}}"
                class="img-fluid" alt="Article Image">
                <b class="wow bounce text-center d-block"  data-wow-delay="0.1s">Madame Tussauds Wax Museum</b><br>
                <br>
                <p class="wow bounce text-center d-block"  data-wow-delay="0.1s">
                    For those who enjoy viewing lifelike wax replicas of well-known celebrities and historical figures, this site is must-see. (42 street Between 7and 8 Avenue)</p>
            </div>
            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.5s">
                <!-- Centered image with text -->
                <img class="w-100 h-50 p-2 tiko"
                    src="{{asset('images/times-square/Empire State Building, NYC in 34 Street & 5 Avenue.jpg')}}"
                    class="img-fluid" alt="Article Image">
                    <b class="text-center d-block">The Empire State Building</b><br>
                    <br>
                    <p class="text-center d-block">
                        Regardless of not being in Times Square, NYC, travelers flock to the area to see the Empire State Building, which is a well-known attraction.<br>
                        The structure can be viewed pretty much anywhere in Times Square. (5th Avenue and 34 Street).
                        <br>
                        Overall, Times Square, NYC has a lot of entertaining things to do that will keep visitors occupied for a few hours.
                    </p>
                </div>
        </div>

        <div class="row tiko">
            <div class="col-lg-12 my-5">
                <b class="wow bounce"  data-wow-delay="0.1s">The Hard Rock Cafe</b><br>
                <br>
                <p>
                    This famous eatery, which is situated in the center of Times Square, is well-known for its American cuisine and rock-themed design. (43 street and 7 Avenue)
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 my-5">
                <b>The TKTS Booth</b><br>
                <br>
                <p>
                    T/his is where you may purchase reduced tickets to a Broadway performance.<br>
                    Tickets for performances that day are less expensive at the TKTS booth. It is on 47 Street between Broadway& 7 Avenue.
                </p>
            </div>
        </div>

        <div class="row" id="Buyaticket">
            <div class="col-lg-12">
                <h3>Buy a ticket at Time Square, NYC</h3><br>
                <br>
                <p>
                    There are numerous locations where you can get tickets from Times Square, NYC.<br>
                    The TKTS booth, which is in the center of Times Square, NYC is the most popular choice.
                </p>
                <br>
                <p>
                    Discounted tickets for Broadway productions, Off-Broadway plays, dance performances, and more are available at the TKTS booth.
                </p>
                <p>
                    Anybody wishing to see a concert will find it an affordable alternative because of the discounts, which can be anywhere between 20 and 50 percent off the face value of the tickets.
                </p>
                <p>
                    There are a lot of ticket sellers all over Times Square, NYC in addition to the TKTS station.
                </p>
                <p>
                    These sellers frequently sell popular show tickets for face value or a little bit more.
                </p>
                <p>
                    When purchasing tickets from these vendors, it's crucial to exercise caution because some can sell fake or fraudulent tickets.
                </p>
                <p>
                    Many performances offer online ticket sales through their official websites or through third-party merchants like Ticketmaster or StubHub, if you're seeking a more practical choice.
                </p>
                <br>
                <p>
                    These choices let you buy tickets from the convenience of your home and frequently feature virtual seat selection, making it simple to pick the ideal location for your concert.<br>
                    Overall, there are many possibilities for buying tickets from Times Square, so it's crucial to thoroughly weigh your options to make sure you're receiving the greatest bargain to shoot fascinating and lovely images.
                </p>
                <p>
                    Time Square, NYC, is a fun and energetic place to take photos.<br>
                    Times Square, NYC, Manhattan one of the busiest intersections in the world, presents an amazing photo opportunity.
                </p>
                <br>
                <p>
                    Fast-moving cabs, neon billboards, and throngs of people offer an exciting backdrop for photography.
                </p>
                <p>
                    Lighting is an important consideration while capturing photos in Times Square, NYC.<br>
                    Although the neon lights might make a stunning backdrop for your photographs, they can also pose exposure problems.
                </p>
                <br>
                <p>
                    Using a tripod and a slow shutter speed while shooting at night will help you maintain the sharpness of your pictures while capturing the energy of the busy metropolis.
                </p>
                <p>
                    There are many views and angles available in Times Square, since this is another suggestion for taking fantastic pictures there.
                </p>
                <p>
                    Trying out various angles will help you add diversity and aesthetic interest to your photographs.
                </p>
                <p>
                    Let's say you want to capture the energy of the throngs in Times Square, NYC.
                </p>
                <p>
                    In that situation, you might try putting your camera in burst mode to take several pictures quickly.<br>
                    One after the other, increasing your chances of getting the perfect shot.
                </p>
                <p>
                    Overall, capturing photos at Times Square, NYC offers a special chance to capture the fervor and excitement of one of the most famous places on earth.
                </p>
                <p>
                    You can take great photos that perfectly capture the essence of Times Square, NYC by paying attention to lighting, examining angles, and playing with camera settings.
                </p>
            </div>
        </div>


        <div class="row" id="HotelsnearTimes">
            <div class="col-lg-12 my-5">
                <h3>Hotels near Times Square, NYC, Manhattan, New York city</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 my-5">
                <p>
                    <b>The Knickerbocker Hotel in midtown Manhattan</b><br>
                    Address: 6 Times Square, New York, NYC 10036<br>
                    <br>
                    <b>Marriott Marquis New York Hotel located in midtown Manhattan</b><br>
                    Address: 1535 Broadway, New York, NYC 10036<br>
                    <br>
                    <b>Renaissance New York Times Square Hotel</b><br>
                    Address: 714 7th Ave, New York, NYC 10036<br>
                    <br>
                    <b>The Westin New York Hotel at Times Square located in midtown Manhattan</b><br>
                    Address: 270 W 43rd St, New York, NYC 10036<br>
                    <br>
                    <b>Crowne Plaza Times Square Manhattan Hotel located in midtown Manhattan</b><br>
                    Address: 1605 Broadway, New York, NYC 10019<br>
                    <br>
                    <b>Millennium Times Square New York Hotel</b><br>
                    Address: 145 W 44th St, New York, NYC 10036<br>
                    <br>
                    <b>Hilton Times Square Hotel located in midtown Manhattan</b><br>
                    Address: 234 W 42nd St, New York, NYC 10036<br>
                    <br>
                    <b>Hotel Edison Times Square Hotel in midtown Manhattan</b><br>
                    Address: 228 W 47th St, New York, NYC 10036<br>
                    <br>
                    <b>The Roosevelt Hotel</b><br>
                    Address: 45 E 45th St, New York, NYC 10017<br>
                    <br>
                    <b>The New Yorker A Wyndham Hotel located in midtown Manhattan</b><br>
                    Address: 481 8th Ave, New York, NYC 10001<br>
                    <br>
                    <b>DoubleTree Suites Hotel by Hilton New York City - Times Square</b><br>
                    Address: 1568 Broadway, New York, NY 10036<br>
                    <br>
                    <b>The Time New York Hotel</b><br>
                    Address: 224 W 49th St, New York, NY 10019<br>
                    <br>
                    <b>The Paramount Hotel</b><br>
                    Address: 235 W 46th St, New York, NY 10036<br>
                    <br>
                    <b>The Michelangelo Hotel</b><br>
                    Address: 152 W 51st St, New York, NY 10019<br>
                    <br>
                    <b>InterContinental New York Times Square Hotel</b><br>
                    Address: 300 W 44th St, New York, NY 10036<br>
                    <br>
                    <b>W New York Hotel - Times Square</b><br>
                    Address: 1567 Broadway, New York, NY 10036<br>
                    <br>
                    <b>The Algonquin Hotel Times Square, Autograph Collection</b><br>
                    Address: 59 W 44th St, New York, NY 10036<br>
                    <br>
                    <b>The Chatwal, a Luxury Collection Hotel, New York City</b><br>
                    Address: 130 W 44th St, New York, NY 10036<br>
                    <br>
                    <b>The Langham Hotel, New York, Fifth Avenue</b><br>
                    Address: 400 5th Ave, New York, NY 10018<br>
                    <br>
                    <b id="Directions">The Iroquois New York Hotel</b><br>
                    Address: 49 W 44th St, New York, NY 10036

                </p>
            </div>
        </div>



        <div class="row" id="Questions">
            <div class="col-lg-12 my-5">
                <h3>Questions people ask</h3><br>
                <h3>FAQ</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 my-5">
                <p>
                    <b>What is Times Square, NYC?</b><br>
                    Times Square, NYC is a first-rate industrial intersection and community in midtown Manhattan, New York City.<br>
                    It is known for its vibrant billboards, Broadway theaters, and bustling atmosphere.<br>
                    <br>
                    <b>Why is Times Square, NYC famous?</b><br>
                    Times Square, NYC is famous for its iconic New Year's Eve ball drop celebration, where thousands of people gather to welcome the new year.<br>
                    It is also renowned for its bright electronic billboards, which make it one of the world's most visited tourist attractions.<br>
                    <br>
                    <b>Things I can do in Time Square, NYC:</b><br>
                    There are plenty of activities to enjoy in Times Square, NYC.<br>
                    You can explore the various shops, see popular attractions like Madame Tussauds Wax Museum, catch a Broadway show, dine at diverse restaurants, or simply soak in the energetic atmosphere.<br>
                    <br>
                    <b>When should we go to Time Square, NYC?</b><br>
                    Times Square, NYC is bustling with activity throughout the year, but it can be particularly crowded during holidays and special events.<br>
                    If you prefer a less crowded experience, consider visiting during the weekdays or early mornings.<br>
                    Avoiding peak tourist seasons can also help you navigate the area more comfortably.<br>
                    <br>
                    <b>Can I take pictures of the billboards in Times Square, NYC?</b><br>
                    While you cannot physically interact with the billboards, you are free to take pictures or videos of them.<br>
                    In fact, capturing vibrant billboards is a popular activity for visitors.<br>
                    <br>
                    <b>Is Times Square, NYC safe at night?</b><br>
                    Times Square, NYC is generally secure at night due to its overwhelming police presence and steady flow of tourists.<br>
                    However, it's vital to stay careful and aware of your surroundings, especially in crowded areas.<br>
                    <br>
                    <b>Are there any good eateries in Times Square, NYC?</b>
                    Yes, Times Square, NYC offers a wide range of eating alternatives to suit diverse tastes and budgets.<br>
                    You'll discover famous chain eateries, international cuisines, fast-food joints, and upscale eating foundations in and around the zone.<br>
                    <br>
                    <b>How do I get to Times Square, NYC?</b><br>
                    Times Square, NYC is without difficulty available via public transportation.<br>
                    You'll take the subway to the Times Square-42nd Street station, which is served by numerous subway lines.<br>
                    Buses also work within the region, and there are a few stopping carports accessible in case you prefer to drive.<br>
                    <br>
                    <b>Are there any hotels in Times Square, NYC?</b><br>
                    Yes, there are various hotels in and around Times Square, NYC.<br>
                    They range from budget-friendly choices to luxury accommodations.<br>
                    Staying in Times Square allows you to be at the heart of the activity and conveniently investigate the region.<br>
                    <br>
                    <b>What are the adjacent attractions to visit from Times Square, NYC?</b><br>
                    Times Square, NYC is near numerous well-known attractions in New York City.<br>
                    A few adjacent places worth going to include the Domain State Building, Rockefeller Center, Central Park, Broadway theaters, the Gallery of Advanced Craftsmanship (MoMA), and the Brave Ocean, Discuss, and Space Historical Center.
                </p>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12 my-5">
                <h3>Time Square, NYC directions</h3>
                <br>
                <p>
                    Time Square, NYC is located between (42 and 47 Streets) (7 Avenues and Broadway Avenues).<br>
                    <br>
                    Subway train numbers Q, R, N, 1, 2, 3, and 7 to (42 Street and 7 Avenues or Broadway Avenues).<br>
                    <br>
                    Subway train numbers (A, C, and E) to 42 Street and 8 Avenues<br>
                    <br>
                    Subway train numbers (D, B, F, and M) to 42 Street with 6 Avenues<br>
                    <br>
                    Subway train numbers (4, 5, and 6) to 42nd Street and Lexington Avenues<br>
                </p>
            </div>
        </div>
        
        <div id="map">
            
        </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1841337505953!2d-73.98811752393598!3d40.75797467138679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1703623545190!5m2!1sen!2sus"
class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@include('website.layout.link')
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}
    </div>
    </div>
    </section>
    @endsection
