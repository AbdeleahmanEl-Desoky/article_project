@extends('website.layout.app')





@section('title')
    <title>Little Island , New York City</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/little_island/Little Island, New York City in winter.jpg')}}">

    <meta name="author" content="Little Island">
    
    <meta name="description" content="Little Island, New York City by the 132 concrete tulip structures, supports the soil, lawns, views, and trees in the park.
        A distinctive and inviting scene is created by the arrangement of the tulips in a sequence of hills and valleys. The park also has a 687-seat amphitheater where several shows are held all year.
        Every day from 6:00 a.m. to 11:00 p.m., the park is accessible. Free entry is offered. The Diller-von Furstenberg Family Foundation and Barry Diller donated $260 million to build the park.
        In addition, the park has several works of art, such as sculptures, fountains, and murals. Pier 55 is located there (near the end of West 14th Street).">
    
    <meta name="keywords" content="Little-little-LITTLE-Island-island-ISLAND-littleisland-LITTLEIsland-LittleIsland-LITTLEISLAND-liTTle-LIttle-ManhattanNycwalk-Manhattan-nycwalk-NYC-manhattan-nycwalk-nyc-manhatten-WALK-walk">
    <meta name="google-site-verification"
        content="Little-little-LITTLE-Island-island-ISLAND-littleisland-LITTLEIsland-LittleIsland-LITTLEISLAND-liTTle-LIttle-ManhattanNycwalk-Manhattan-nycwalk-NYC-manhattan-nycwalk-nyc-manhatten-WALK-walk">
        
    <meta property="og:title" content="Little Island">
    
    <meta property="og:description" content="Little Island, New York City by the 132 concrete tulip structures, supports the soil, lawns, views, and trees in the park.
        A distinctive and inviting scene is created by the arrangement of the tulips in a sequence of hills and valleys. The park also has a 687-seat amphitheater where several shows are held all year.
        Every day from 6:00 a.m. to 11:00 p.m., the park is accessible. Free entry is offered. The Diller-von Furstenberg Family Foundation and Barry Diller donated $260 million to build the park.
        In addition, the park has several works of art, such as sculptures, fountains, and murals. Pier 55 is located there (near the end of West 14th Street).">
    
    <meta property="og:image" content="https://manhattan-nycwalk.com/images/little_island/Little%20Island,%20New%20York%20City%20in%20winter.jpg">
    
    <meta property="og:url" content="https://manhattan-nycwalk.com/little_island">
    
    <meta name="twitter:title" content="Little Island">
    <meta name="twitter:description" content="Little Island, New York City by the 132 concrete tulip structures, supports the soil, lawns, views, and trees in the park.
        A distinctive and inviting scene is created by the arrangement of the tulips in a sequence of hills and valleys. The park also has a 687-seat amphitheater where several shows are held all year.
        Every day from 6:00 a.m. to 11:00 p.m., the park is accessible. Free entry is offered. The Diller-von Furstenberg Family Foundation and Barry Diller donated $260 million to build the park.
        In addition, the park has several works of art, such as sculptures, fountains, and murals. Pier 55 is located there (near the end of West 14th Street).">
        
    <meta name="twitter:image" content="https://manhattan-nycwalk.com/images/little_island/Little%20Island,%20New%20York%20City%20in%20winter.jpg">
    <meta name="twitter:url" content="https://manhattan-nycwalk.com/little_island">
    <meta name="twitter:card" content="https://manhattan-nycwalk.com/images/little_island/Little%20Island,%20New%20York%20City%20in%20winter.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    src="{{ asset('images/little_island/little_island.jpg') }}"
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
                                <a class="dropdown-item" href="#maintaining a park Little Island">maintaining a park Little Island</a>
                                <a class="dropdown-item" href="#impact has Little Island">impact has Little Island</a>
                                <a class="dropdown-item" href="#future of Little Island">future of Little Island</a>
                                <a class="dropdown-item" href="#popularity of Little Island">popularity of Little Island</a>
                                <a class="dropdown-item" href="#The Future">The Future</a>
                                <a class="dropdown-item" href="#Informational Supplement">Informational Supplement</a>
                                <a class="dropdown-item" href="#Here are some other ideas">Here are some other ideas</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
                                <a class="dropdown-item" href="#Directions">Direction</a>
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

                    <h2 style="color: black">
                        Little Island, New York City
                    </h2>
                        <!-- First Row -->
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/little_island/Little Island, New York City in winter.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Little Island, New York City in winter</small>
                        </div>

                </div>

                <div class="col-12">
                    <h5 class="text-center wow bounce"  data-wow-delay="0.1s">
                        Little Island, New York City by the 132 concrete "tulip" structures, supports the soil, lawns, views, and trees in the park.<br>
                        A distinctive and inviting scene is created by the arrangement of the tulips in a sequence of hills and valleys.<br>
                        The park also has a 687-seat amphitheater where several shows are held all year.<br>
                        Every day from 6:00 a.m. to 11:00 p.m., the park is accessible. Free entry is offered.<br>
                        The Diller-von Furstenberg Family Foundation and Barry Diller donated $260 million to build the park.<br>
                        In addition, the park has several works of art, such as sculptures, fountains, and murals.<br>
                        Pier 55 is located there (near the end of West 14th Street).
                    </h5>
                </div>
            </div>


        <div class="container-fluid">

            <div class="row my-5" >
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        The story centers around a Little Island added to New York City's public green spaces that is lovely and distinctive.<br>
                        It is a wonderful location for unwinding, taking in the scenery, and taking in the noises of the city.<br>
                        The park has several works of art, such as sculptures, fountains, and murals.<br>
                        <br>
                        Little Island, New York City Park is 2.4 acre (0.97 hectares) in New York City.<br>
                        Situated on the Hudson River, this park is a unique public space created by Heatherwick Studio, Thomas Heatherwick's design firm.<br>
                        The park's 132 pot-shaped "tulips"—which are hung above the water—are held up by 280 concrete pilings that reach down into the riverbed.<br>
                        The pots' tops are somewhere from 4.6 and 18.9 meters (15 to 62 feet) above the mean waterline.
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
                                A spectacular illustration of what can be accomplished when art, nature, and design join is this floating park, which debuted in May 2021.<br>
                                On what was formerly a pier in the Hudson River, Little Island is situated.<br>
                                The Lenape tribe once hunted and fished at the location.<br>
                                The city of New York started making plans to revitalize the Hudson River waterfront in the early 2000s.<br>
                                <br>
                                Thomas Heatherwick, a British engineer known for his innovative, cutting-edge, and unusual designs, created the Little Island.<br>
                                By constructing platforms with varying heights that are connected to one another, engineer Thomas hoped to create an island that resembled a floating garden.<br>
                                Additionally, there should be vegetation on the island, including trees, plants, bushes, and flowers.<br>
                                There are around 350 different species of trees, shrubs, and plants on this island.<br>
                                <br>
                                It was carefully picked to be able to resist and endure the Hudson River shoreline.<br>
                                On this island, comfort may be found through the thoughtful construction of corridors, roadways, and rest areas.<br>
                                Little Island, New York City has evolved into a haven of reflection and hope for New Yorkers.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/little_island/Pot-shaped “tulips” little Island, New York city.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Pot-shaped “tulips” little Island, New York city</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p  class="wow bounce"  data-wow-delay="0.1s">

                        For New Yorkers, the island has become a place of contemplation and optimism.<br>
                        Little Island, New York City gave the locals a much-needed resting place away from the expensive concrete buildings.<br>
                        <br>
                        A brand-new refuge in the concrete jungle is Little Island, New York City<br>
                        People can go there to unwind, appreciate nature, and find inspiration.<br>
                        The park, which will undoubtedly be a well-liked attraction for years to come, is a monument to the strength of art, nature, and design.
                    </p>
                </div>
            </div>


            <div class="row" id="maintaining a park Little Island">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-3"  data-wow-delay="0.1s">
                        What are the challenges of maintaining a park Little Island, New York City in the middle of the Hudson River?
                    </h3>
                </div>
            </div>

            <div class="">
                <div class="row">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/little_island/VOD_20230218_120735.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <p class="wow bounce tiko"  data-wow-delay="0.1s">
                    The possibility of flooding is one of the difficulties in sustaining a park or an island over the Hudson River.<br>
                    The park of Little Island, New York City is supported by several pilings, so flooding is a possibility if the water levels rise too high.<br>
                    Protecting the park's trees and plants from the hostile river environment is another difficulty.
                </p>
            </div>

            <div class="row" id="impact has Little Island">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        What impact has Little Island, New York City had on the neighborhoods nearby?
                    </h3>

                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        The positive effects of Little Island, New York City have been seen in neighboring communities.
                        New tourists to the neighborhood have been attracted by the park, Little Island, New York City which has also aided in reviving the waterfront.<br>
                        The park of Little Island, New York City has also generated employment and economic opportunities for nearby companies.
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/little_island/Little Island, New York City Park.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">Little Island, New York City Park</small>
            </div>


            <div class="row" id="future of Little Island">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        What is the future of Little Island, New York City?
                    </h3>

                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        The future of Little Island, New York City is bright.<br>
                        park Little Island, New York City is already a popular destination, and it is sure to become even more popular in the years to come.<br>
                        park Little Island, New York City is also well-positioned to host a variety of events, and it could become a major cultural destination in New York City.
                    </p>
                </div>
            </div>


            <div class="row" id="popularity of Little Island">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        The popularity of Little Island, New York city and challenges:
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
                                When Little Island, New York City was opened for the first time, it gained great admiration and popularity as a local and tourist rest area.<br>
                                <br>
                                Visitors enjoy the stunning marine scenery and the plants grown on the island, as well as the events that are held and hosted.<br>
                                <br>
                                The visitor is interested in the island in the summer because it is exposed.<br>
                                About 3 million visitors visited the island, and it is expected that this number will increase and make it a cultural center in the coming years.<br>
                                <br>
                                The construction of the island cost $250 million, which is an exorbitant amount, and some believe that it would have been better to use the amount on other projects.<br>
                                <br>
                                The annual budget of the island is $10 million, and it comes from selling tickets or donations.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/little_island/Challenges to build this design.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Challenges to build this design</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="The Future">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        The Future of the Little Island, New York City:
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
                                <br>
                                Despite these challenges, Little Island's future is bright.<br>
                                <br>
                                Little Island, New York City Park is now a popular tourist destination, and in the years to come, that popularity will likely increase significantly.<br>
                                <br>
                                Little Island, New York City, park is perfectly located to host a variety of events and has the potential to grow into an important cultural center in New York City.<br>
                                <br>
                                Little Island, New York City is a novel and forward-thinking park with the potential to become an important cultural hotspot in New York City.<br>
                                <br>
                                The park has a lot of promise and is a hopeful development for the city, despite several challenges.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/little_island/Theater inside Little Island, New York City.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Theater inside Little Island, New York City</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="Informational Supplement">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Informational Supplement:
                    </h3>
                    <p  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Little Island, New York City is accessible throughout the year; however, summer is the busiest season.<br>
                        Even though the park is free to enter, certain activities have a fee.<br>
                        <br>
                        Little Island is located at "1 Little Island, New York, NY 10012."<br>
                        <br>
                        Little Island, New York City is a fresh haven amid the concrete jungle.<br>
                        There, people may unwind, enjoy nature, and discover inspiration.<br>
                        The park, which is unquestionably going to be a popular destination for years to come, is a testament to the power of creativity, nature, and design.
                    </p>
                </div>
            </div>

            <div class="">
                <div class="row">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/little_island/VOD_20230218_114943.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <p class="wow bounce tiko"  data-wow-delay="0.1s">
                    The park is a well-liked tourist destination in New York City because of its unique design.<br>
                    There are several vantage points across the park's hills and valleys where visitors may take in breath-taking vistas of the Hudson River and the Manhattan skyline.<br>
                    The park's lush vegetation also offers a nice escape from the city's bustle.<br>
                    <br>
                    A visitor to the Little Island can practice many different activities that are held in Little Island, New York City Park throughout the year.<br>
                    Performances include dance, plays, and concerts.<br>
                    The garden has many works of art, such as fountains, sculptures, and various gardens. The park provides some cultural attractions.<br>
                    There are many comfortable seats to relax and enjoy the natural scenery.<br>
                    <br>
                    There are many paths inside the garden to enjoy picnics with family or friends.<br>
                    The Little Island, New York City is an ideal place to go to get away from the hustle and bustle of the city and enjoy the tranquility.<br>
                    The Little Island, New York City is considered a useful place to study art, and people like to spend their holidays there.
                </p>
            </div>



            <div class="row" id="Here are some other ideas">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Here are some other ideas for Little Island, New York City's future:
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
                                Everyone believes that Little Island, New York City will increase its popularity and reputation in the next few years because it is a place that everyone, including New Yorkers, tourists, and visitors, loves.<br>
                                It will increase its popularity because it is a place where everyone loves to spend holidays to enjoy tranquility.<br>
                                Everyone believes that the Little Island, New York City will develop and grow into an important cultural center for New York City and its visitors.<br>
                                <br>
                                More and more activities will be held, such as musicians, theatrical performances, dance parties, and other cultural activities.<br>
                                It is expected that the comfortable seats will be increased to enjoy the picturesque landscapes.<br>
                                And because of the distinctive and wonderful design and the presence of a variety of plant species in the garden, it will be an inspiration and motivation for all who visit it from all over the world.
                                                </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/little_island/Here are some other ideas for Little Island, New York.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small id="Questions" class="text-center d-block">Here are some other ideas for Little Island, New York</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Here are the most frequently asked questions about the Little Island:<br>
                        <br>
                        FAQ:
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5  class="wow bounce my-5"  data-wow-delay="0.1s">
                        What is Little Island, New York City exactly?
                    </h5>
                </div>
            </div>


            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/little_island/Walk and enjoy time in Little Island, New York city.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">Walk and enjoy time in Little Island, New York city</small>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island, New York City is a public park in Manhattan's Chelsea area on the Hudson River.<br>
                        It is an artificial island featuring gardens, performance spaces, and panoramic views of the city skyline.
                    </p>
                    <h5  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Am I permitted to bring my children to Little Island, New York City?
                    </h5>
                    <p  class="wow bounce"  data-wow-delay="0.1s">
                        Absolutely! Little Island, New York City is a great place for families.
                        Children may enjoy the playgrounds, interactive elements, and interesting performances and activities planned exclusively for them.
                    </p>

                    <h5  class="wow bounce my-5"  data-wow-delay="0.1s">
                        Is it possible to have parties or weddings on Little Island, New York City?
                    </h5>
                    <p  class="wow bounce"  data-wow-delay="0.1s">
                        Little Island offers event rooms for private activities such as weddings, business celebrations, and other special occasions.<br>
                        However, precise facts and availability should be confirmed with the park's administration.
                    </p>
                    <h5  class="wow bounce my-5"  data-wow-delay="0.1s">
                        How do I go to Little Island, New York City?
                    </h5>
                    <p  class="wow bounce"  data-wow-delay="0.1s">
                        To visit Little Island, New York City go to the park's entrance point at Pier 55.
                        You may walk there from adjacent neighborhoods or take public transit such as buses or subways. (more at Direction)
                    </p>
                    <h5  class="wow bounce my-5"  data-wow-delay="0.1s">
                        What are the main points of interest on Little Island, New York city?
                    </h5>
                </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/little_island/Place inside little island, New York City to rest and children play.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">Place inside little island, New York City to rest and children play</small>
            </div>
            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island, New York City offers you the experience to see beautiful gardens, a central plaza for performances, an amphitheater, and many routes for strolling and sightseeing are among the attractions on Little Island.
                    </p>

                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        What is Little Island, New York City's business hours?
                    </h5>
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island, New York City is often open from the morning into the evening.<br>
                        However, operational hours may change, so check the official website or contact the park directly for the most up-to-date information.
                    </p>

                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Is it possible to have parties or weddings on Little Island, New York City?
                    </h5>
                </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                <!-- Centered image with text -->
                <img class="w-100 h-75 p-2"
                src="{{asset('images/little_island/Theater inside Park Little Island, New York city.jpg')}}"
                    class="img-fluid" alt="Article Image">
                <small class="d-block text-center">Theater inside Park Little Island, New York city</small>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island, New York City offers event rooms for private activities such as weddings, business celebrations, and other special occasions.<br>
                        However, precise facts and availability should be confirmed with the park's administration.
                    </p>

                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Can I bring my pets to Little Island, New York city?
                    </h5>
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Unfortunately, pets are not allowed on Little Island, New York City except for service animals that are trained to assist individuals with disabilities.
                    </p>

                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Is Little Island, New York City open all year?
                    </h5>
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island, New York City is intended to remain open all year.<br>
                        Certain attractions or activities, however, may be seasonal or weather dependent.<br>
                        Check the official website or contact the park for information on seasonal closures or changes in operating hours.
                    </p>
                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Why is it called Little Island?
                    </h5>
                    <p  id="Directions" class="wow bounce my-3"  data-wow-delay="0.1s">
                        It is called so because it is designed in a small, island-like design.<br>
                        It's built on a floating structure above the water, featuring beautiful hills, pathways, and performance space.<br>
                        The name "Little Island" highlights its relatively small size compared to the larger surrounding islands like Manhattan, Staten Island, and Long Island.
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Directions
                    </h3>
                    <h5  class="wow bounce my-3"  data-wow-delay="0.1s">
                        Little Island in New York, Pier 55 at W 13th street in Hudson River Park, New York, NY 10014, United States
                    </h5>
                    <p  class="wow bounce my-3"  data-wow-delay="0.1s">
                        The nearest subway stations (A, C, E, L) to 14th Street and Eighth Avenue Stations are downtown Manhattan, New York City. (Walk to West 14th Street until Highway West, only 2 blocks).<br>
                        <br>
                        Take the bus from 9 Avenue to 14 Street, walk only 0ne block to Highway West (through 14 street).<br>
                        <br>
                        take bus number 14 D to West Highway through 14th Street.<br>
                        <br>
                        Take taxi to Pier 55<br>
                        <br>
                        Take bus number 11 from 9 Avenue to 14th Street (walk 2 blocks to West Highway through west 14th Street).
                    </p>
                </div>
            </div>

            </div>
            <div id="map">
                
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9101581448253!2d-74.01287392397283!3d40.742002371389106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259319989e02f%3A0xbc9fdbef8d2af7b0!2sLittle%20Island!5e0!3m2!1sen!2sus!4v1706284452822!5m2!1sen!2sus"
            class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @include('website.layout.link')
            {{-- * -------------------------------------------------------------------------------- --}}
            {{-- *                                    end content                                   --}}
            {{-- * -------------------------------------------------------------------------------- --}}
        </div>
</section>
@endsection

