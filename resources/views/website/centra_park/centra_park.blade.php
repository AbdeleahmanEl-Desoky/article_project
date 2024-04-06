@extends('website.layout.app')

@section('title')
    <title>Central Park</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/brooklyn bridge/Brooklyn Bridge, Manhattan New York City.jpg')}}">

    <meta name="author" content="Central Park">
    
    <meta name="description" content="Central Park, NYC is among the most frequented locations in New York City. The park receives
                        more
                        than 40 million visitors each year. The intention was to provide a space for leisure and
                        relaxation for the citizens of the city.
                        Landscape designers Frederick Law Olmsted and Calvert Vaux oversaw the building of Central Park,
                        NYC, which got underway in 1857. Numerous obstacles, such as a lack of money and the
                        requirement to remove existing buildings, hampered the development of the construction
                        project.">
    
    <meta name="keywords" content="Central, Park ,central ,CENTRAL ,PARK ,CentralPark ,CENTRALPARK, CentralPark, ManhattanNycwalk, Manhattan, nycwalk, NYC, manhattan, nycwalk, nyc, manhatten, WALK, walk">
    <meta name="google-site-verification"
        content="Central-Park-central-CENTRAL-PARK-CentralPark-CENTRALPARK-CentralPark-ManhattanNycwalk-Manhattan-nycwalk-NYC-manhattan-nycwalk-nyc-manhatten-WALK-walk">
        
    <meta property="og:title" content="Central Park">
    
    <meta property="og:description" content="Central Park, NYC is among the most frequented locations in New York City. The park receives
                        more
                        than 40 million visitors each year. The intention was to provide a space for leisure and
                        relaxation for the citizens of the city.
                        Landscape designers Frederick Law Olmsted and Calvert Vaux oversaw the building of Central Park,
                        NYC, which got underway in 1857. Numerous obstacles, such as a lack of money and the
                        requirement to remove existing buildings, hampered the development of the construction
                        project.">
    
    <meta property="og:image" content="https://manhattan-nycwalk.com/images/centra_park/View from inside Central Park, NYC.jpg" alt="Article Image">
    
    <meta property="og:url" content="https://manhattan-nycwalk.com/centra_park">
    
    <meta name="twitter:title" content="Central Park">
    
    <meta name="twitter:description" content="Central Park, NYC is among the most frequented locations in New York City. The park receives more
                        than 40 million visitors each year. The intention was to provide a space for leisure and
                        relaxation for the citizens of the city.
                        Landscape designers Frederick Law Olmsted and Calvert Vaux oversaw the building of Central Park,
                        NYC, which got underway in 1857. Numerous obstacles, such as a lack of money and the
                        requirement to remove existing buildings, hampered the development of the construction
                        project.">
        
    <meta name="twitter:image" content="https://manhattan-nycwalk.com/images/centra_park/View from inside Central Park, NYC.jpg">
    <meta name="twitter:url" content="https://manhattan-nycwalk.com/centra_park">
    <meta name="twitter:card" content="https://manhattan-nycwalk.com/images/centra_park/View from inside Central Park, NYC.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/centra_park/1.png') }}" alt="First slide">
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
                            <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#Directions">Directions</a>
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
                        Central Park, NYC
                    </h2>
                    <!-- First Row -->
                    <div class="col-12 col-lg-4 mx-auto wow bounce" data-wow-delay="0.3s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/centra_park/View from inside Central Park, NYC.jpg') }}" class="img-fluid"
                            alt="Article Image">
                        <small class="d-block text-center"> View from inside Central Park, NYC</small>
                    </div>

                </div>

                <div class="col-12">
                    <h5 class="text-center wow bounce" data-wow-delay="0.1s">
                        Central Park, NYC is among the most frequented locations in New York City.<br /> The park receives
                        more
                        than 40 million visitors each year.<br /> The intention was to provide a space for leisure and
                        relaxation for the citizens of the city.<br />
                        Landscape designers Frederick Law Olmsted and Calvert Vaux oversaw the building of Central Park,
                        NYC, which got underway in 1857.<br /> Numerous obstacles, such as a lack of money and the
                        requirement to remove existing buildings, hampered the development of the construction
                        project.
                    </h5>
                </div>
            </div>




            <div class="container-fluid">
                {{-- img&&h5&&parg --}}
                <div class="wow bounce my-3 " data-wow-delay="0.01s">
                    <div class="row my-4 w-100 justify-content-center ">
                        <div class="col-12 col-lg-4 mx-auto ">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/People take rest and enjoy with sun and fresh air.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"> People take rest and enjoy with sun and fresh air</small>
                        </div>
                    </div>
                    <p class="p-3">
                        Since it was finished, Central Park, NYC has grown to be a famous landmark and a cherished open area
                        for both locals and tourists in New York.<br /> Offering a variety of activities and attractions for
                        visitors of all ages, it continues to operate as a haven away from the metropolitan
                        environment.<br /> Central Park, NYC is bounded to the north by 110th Street, to the south by 59th
                        Street, to the west by Central Park West, and to the east by Fifth Avenue.<br />
                    </p>

                </div>
                {{-- tow img&&h5&&parg --}}
                <div class="wow bounce my-3 " data-wow-delay="0.01s">
                    <h5>
                        History of Central Park, NYC
                    </h5>

                    <p class="px-3 wow bounce" data-wow-delay="0.01s">
                        In addition to being a famous landmark in Manhattan, New York, Central Park, NYC also serves as a
                        symbol
                        of peace during the busy metropolis.<br /> Central Park, NYC is a beloved and vital component of New
                        York City's cultural landscape because of its rich history, imaginative architecture, and memorable
                        occasions.<br />
                        The idea for Central Park, NYC was initially developed in the middle of the 19th century in response
                        to
                        the city's demand for green space and fast population growth.<br />
                        Frederick Law Olmsted and Calvert Vaux, landscape designers who won a design contest in 1858, put
                        out
                        the park's first framework.<br />
                        They saw an urban paradise that would provide a haven from the concrete jungle of the city, a
                        seamless
                        fusion of nature and architecture.<br /><br />

                        Olmsted and Vaux's forward-thinking approach is seen in the layout and construction of Central Park,
                        NYC.<br />
                        The park's stunning 843 acres are home to undulating hills, lovely lakes, winding walks, and
                        immaculately kept lawns.<br />

                    </p>
                    <div class="row   w-100 justify-content-center ">
                        <div class="col-12 col-lg-4 mx-auto ">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Central Park, NYC in summer.jpg') }}" class="img-fluid"
                                alt="Article Image">
                            <small class="d-block text-center"> Central Park, NYC in summer</small>
                        </div>
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Fountain Inside Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"> Fountain Inside Central Park, NYC</small>
                        </div>
                    </div>
                    <div class=" wow bounce" data-wow-delay="0.1s">
                        <p class="px-3 wow bounce" data-wow-delay="0.01s">
                            Its design deftly combines aspects of pastoral and scenic styles, flawlessly fusing nature, and
                            human
                            involvement.<br />
                            The park's construction, being finished in 1873, was one of the most important moments in its
                            early
                            history.<br />
                            The complex process of converting the rocky landscape into a lush green oasis required thousands
                            of
                            people and intensive landscaping efforts, and it took more than 10 years.<br />
                            The establishment of public green spaces across the world was influenced by Central Park, whose
                            completion marked a turning point in urban design.<br />
                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">

                            Central Park, NYC has also seen several important occasions and landmarks over the years.<br />
                            The park served as the location of the renowned Woodstock music event in 1969.<br />
                            It was one of the most extraordinary events in the park's history, as 500,000 people came
                            together
                            to
                            celebrate with music, peace, and counterculture.<br />

                            Protests, rallies, and marches, as well as other social and political events, have taken place
                            at
                            Central Park, NYC.<br />
                            It has served as a platform for civil rights, LGBTQ+ rights, and environmental advocacy over the
                            years.<br />
                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">

                            Due to its open areas and cultural value, the park has become a popular destination for people
                            to
                            congregate and exercise their freedom to assemble.<br />

                            Today, Central Park, NYC is still a thriving center for leisure pursuits and cultural
                            events.<br />
                            Central Park, NYC Zoo, the Delacorte Theatre, which presents Shakespeare in the Park every year,
                            and
                            the
                            famous Bethesda Terrace with its spectacular architectural features are just a few of the
                            attractions it
                            provides.<br />

                            The history, layout, and architecture of Central Park serve as a tribute to human ingenuity and
                            the
                            value of conserving green areas in urban settings. It has seen important events that have
                            influenced
                            New
                            York City's cultural fabric and continues to be a beloved destination for both locals and
                            tourists.
                            <br />
                        </p>

                    </div>
                </div>
                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>Attractions in Central Park, NYC</h5>
                    <p class="px-3">A well-known urban oasis, Central Park, NYC in Manhattan, New York, has a wide range
                        of
                        activities for
                        visitors of all ages. The park offers a variety of experiences, from wide meadows to well-known
                        landmarks.<br />
                        Central Park, NYC Zoo, the Conservatory Garden, the Great Lawn, and Belvedere Castle are four of
                        Central
                        Park's most well-known landmarks that will be highlighted in this article.<br />
                    </p>

                </div>
                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h3>Central Park, NYC Zoo is a fascinating attraction located within the park that is well-liked by both
                        locals and visitors.
                    </h3>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s"> It is one of the nation's oldest zoos and was
                        founded in
                        1864. A variety of exotic creatures, such as
                        snow leopards, sea lions, red pandas, and penguins, may be found in this little zoo.<br />
                        Visitors may take in entertaining animal feedings, instructive talks, and hands-on displays that
                        advance
                        environmental understanding and conservation.<br />
                        Young visitors may get their hands dirty at the on-site Tisch Children's Zoo by petting friendly
                        animals
                        and exploring a range of interactive displays.<br />

                    </p>
                    <div class="row d-flex justifycontent-center">
                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Fountain near Lake central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Fountain near Lake central Park, NYC</small>
                        </div>
                    </div>
                </div>
                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>the Conservatory Garden is a renowned location for nature lovers and one of the park's
                        hidden secrets. </h5>
                    <p class="wow bounce" data-wow-delay="0.1s">This six-acre paradise is in the northeastern part of
                        Central
                        Park and has perfectly maintained grounds,
                        blooming flowers, and tranquil reflecting pools.<br />
                        The Italian, French, and English gardens are divided into three separate regions, each of which has
                        its
                        own special beauty.<br />

                        The French Garden has lovely spring blossoms, while the Italian garden has symmetrical flower beds
                        and a
                        wonderful fountain.<br />
                        Visitors are fascinated by the English garden`s rustic charm and stunning greenery.<br />
                        A trip to the Conservatory Garden offers a chance to escape the hustle and bustle of the city and
                        unwind
                        while taking in the wonders of nature.<br />

                    </p>

                </div>
                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>Moving on to outdoor recreation areas, Central Park's Great Lawn is a sizable green space. </h5>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s"> It is one of the park's largest open areas, covering
                        55
                        acres, and serves as
                        a center for events and meetings outside.<br />
                        Visitors may play sports like baseball, soccer, and frisbee or just unwind on the lush grass while
                        admiring the surrounding natural splendor.<br />

                        Numerous events, such as concerts, festivals, and cultural festivities, are frequently held on the
                        Great
                        Lawn, drawing large crowds from all around the city.<br />
                        It is the perfect location for gathering with friends and family for a picnic and some sun.<br />


                    </p>

                </div>
                {{-- parag && img --}}
                <div class="my-4 wow bounce" data-wow-delay="0.1s">
                    <h5 class="ml-1">Belvedere Castle is a fascinating architectural treasure located in Central Park and
                        perched on Vista Rock. </h5>
                    <!-- First Row -->
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Belvedere Castle in Central Park.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Belvedere Castle in Central Park</small>
                        </div>
                    </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        This small castle, created in 1865 as a Victorian folly, provides breathtaking 360-degree views of
                        the
                        park's surroundings.<br />
                        Two distinct observation decks are accessible through its spiral stairs, offering visitors unrivaled
                        views of Central Park's rich vegetation, ponds, and winding walks.<br />
                        The Henry Luce Nature Observatory, where visitors can also find a lot of interactive displays and
                        learn
                        about the park's flora and animals, is also housed within the castle.<br />

                    </p>
                </div>
                {{-- parag && img --}}
                <div class="my-4 wow bounce" data-wow-delay="0.1s">
                    <h5 class="ml-1">
                        Our first stop in Central Park, NYC is Strawberry Fields, a designated Quiet Zone that bears the
                        name
                        of the well-known Beatles song.
                    </h5>
                    <!-- First Row -->
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Strawberry inside Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Strawberry inside Central Park, NYC</small>
                        </div>
                    </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        On the west side of the park, next to the Dakota Building, is a serene space that honors John
                        Lennon, a
                        famed band member.<br />>
                        Strawberry Fields is a peaceful location where people may pay their respects and find comfort in
                        John
                        Lennon's memory.<br /> It is decorated with a lovely mosaic displaying the word "Imagine".<br />
                    </p>
                </div>
                {{-- parag && img --}}
                <div class="my-4 wow bounce" data-wow-delay="0.1s">
                    <h5 class="ml-1">
                        As we make our way farther into the park, we come upon the opulent Bethesda Terrace and Fountain.
                    </h5>
                    <!-- First Row -->
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Bethesda Terrace and Fountain Inside Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Bethesda Terrace and Fountain Inside Central Park,
                                NYC</small>
                        </div>
                    </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        This architectural masterpiece, located in the heart of Central Park, is both a hive of activity and
                        a
                        representation of unification.
                    </p>
                    <div class="row wow bounce" data-wow-delay="0.1s">
                        <div class="col-12 col-lg-5 mx-auto video_1 ">
                            <video autoplay muted loop id="myVideo_1">
                                <source class="" src="{{ asset('images/centra_park/VOD_20230201_134834.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        The terrace provides stunning views of the lake and the Great Lawn, and the angelic figures in the
                        fountain inspire awe and amazement.<br />
                        The Bethesda Terrace is a go-to location for tourists looking for a break or a unique backdrop for
                        pictures.<br />

                    </p>
                </div>
                {{-- parag && img --}}
                <div class="my-4 wow bounce" data-wow-delay="0.1s">
                    <h5 class="ml-1">
                        Young and old may both awe at the charming Alice in Wonderland statue at Bethesda Terrace.
                    </h5>
                    <!-- First Row -->
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-4">
                            <!-- Right third with an image -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Charming Alice inside central Park.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Charming Alice inside central Park</small>
                        </div>
                    </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        The monument portrays Alice, the Mad Hatter, the Cheshire Cat, and other characters from Lewis
                        Carroll's
                        well-known narrative in a stunning homage.<br />
                        Children frequently climb on and around the larger-than-life bronze figurines, drawn into the
                        narrative
                        and taken to an imaginary realm.<br />

                    </p>
                </div>

                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>As we go on, we pass The Mall and Literary Walk, a magnificent promenade framed by American elm
                        trees.
                    </h5>
                    <p class="wow bounce" data-wow-delay="0.1s">
                        This area draws both locals and tourists since it offers a calm avenue for leisurely strolls and a
                        break
                        from the bustle of the city.<br />
                        Famous literary heavyweights like Sir Walter Scott, William Shakespeare, and Robert Burns are
                        depicted
                        in beautiful bronze sculptures as you stroll down the mall.<br />
                        It's a visual feast and a monument to Central Park's love of ethnic diversity and nature.<br />
                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>
                        Finally, inside the confines of Central Park, the Jacqueline Kennedy Onassis Reservoir provides a
                        tranquil haven.
                    </h5>
                    <p class="wow bounce" data-wow-delay="0.1s">
                        The reservoir, which bears the former First Lady's name, is a sparkling body of water that covers
                        106
                        acres and offers a tranquil retreat from the bustle of the city.<br />
                        It offers spectacular views of the Manhattan skyline and is encircled by a beautiful jogging
                        path.<br />
                        The reservoir serves as a tribute to Jacqueline Kennedy Onassis, an environmental activist who was a
                        strong proponent of maintaining Central Park's beauty.<br />
                        In Manhattan, Central Park, NYC is home to a treasure trove of attractions that appeal to a wide
                        range
                        of interests.<br />
                        Each of these landmarks, which include the serene beauty of The Mall and Literary Walk, the
                        contemplative Jacqueline Kennedy Onassis Reservoir, the bustling Bethesda Terrace and Fountain, the
                        reflective Central Zoo, Conservatory Garden, Great Lawn, Belvedere Castle, and Strawberry Fields,
                        adds
                        depth and character to this renowned urban green space.<br />
                        Visitors may fully experience Central Park's rich history, natural beauty, and cultural significance
                        by
                        exploring the park's attractions.<br />

                    </p>
                </div>
                {{-- pargh&&h5 --}}
                <div class="my-3 wow bounce" data-wow-delay="0.1s">
                    <h3>Activities in Central Park, NYC</h3>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        In Manhattan, New York, Central Park, NYC serves as a bustling center for a variety of outdoor
                        pursuits.<br />
                        Everyone may find something to enjoy at Central Park, NYC, whether they are fitness enthusiasts,
                        nature
                        lovers, or fans of cultural activities.<br />
                        Let's look at some of the thrilling things this magical park has to offer.<br />

                        Central Park, NYC has a vast network of beautiful roads and trails for cyclists and runners.<br />
                        Both bikers and joggers like using Park Drive, a loop route that circles the whole park.<br />
                        It's the ideal location t go for a solitary run or to join a group cycling session because of the
                        smooth tarmac and lovely surroundings.<br />
                        The diverse terrain accommodates all levels of fitness, whether you're looking for a leisurely ride
                        or
                        an intensive sprint.<br />
                    </p>

                </div>
                {{-- tow img&&h5&&parg --}}
                <div class="wow bounce my-3 " data-wow-delay="0.01s">
                    <h5>
                        Biking inside Central Park, NYC:
                    </h5>

                    <p class="px-3 wow bounce" data-wow-delay="0.01s">
                        Central Park, NYC Drive, a circle road in Central Park, NYC in Manhattan, is about 6.1 miles long
                        and a
                        well-liked bike path

                    </p>
                    <div class="row   w-100 justify-content-center ">
                        <div class="col-12 col-lg-4 mx-auto ">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Ride bike inside Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Ride bike inside Central Park, NYC</small>
                        </div>
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75" src="{{ asset('images/centra_park/Citi Bike.jpg  ') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Citi Bike</small>
                        </div>
                    </div>
                    <div class=" wow bounce" data-wow-delay="0.1s">
                        <p class="px-3 wow bounce" data-wow-delay="0.01s">
                            The park's circular road provides bikers with a picturesque path that provides lovely views of
                            the
                            park's vegetation, lakes, and recognizable monuments<br />
                            But bikers must be aware of and considerate of other park users because the loop route is also
                            used
                            by pedestrians, runners, and other recreational activities<br />
                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">
                            In addition, Central Park, NYC contains several transverse roads that cross the park, so you may
                            vary your route and increase the distance if you choose<br />
                            Bikers will love Central Park's varied scenery and attractions, which are perfect for both
                            relaxing
                            rides and more challenging exercises<br />
                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">
                            One of the best places to ride a bike in the city is in Manhattan's Central Park, NYC, a lovely
                            and
                            expansive park with a total size of 840 acres<br />
                        </p>
                        <div class="row">
                            <div class="col-12 col-lg-4 mx-auto">
                                <!-- Centered image with text -->
                                <img class="w-100 p-2" src="{{ asset('images/centra_park/Ride bike With Driver.jpg') }}"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Ride bike With Driver</small>
                            </div>
                        </div>
                        <p class="px-3 wow bounce" data-wow-delay="0.01s">
                            Fortunately, Central Park has several places where you can rent bicycles.<br />
                            One of the most popular locations to rent bikes in Central Park is at the Bike Rent NYC
                            kiosks.<br />
                            The park is filled with kiosks, one of which is close to Columbus Circle.<br />
                            Bikes for adults, kids, tandems, and even electric bikes are available for hire at Bike Hire
                            NYC.<br />
                            They also supply maps, helmets, and locks to make it easier for you to navigate the park.<br />
                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">
                            Another option for hiring bikes in Central Park is Central Park Bike Tours.<br /> They provide
                            bike
                            rentals as well as escorted and self-guided park trips.<br />

                            It is simple for tourists to rent a bike and go about the park because they provide facilities
                            both
                            within and outside of Central Park.<br />
                            Several trips are offered by Central Park Bike Trips.<br /> The types of bikes include hybrids,
                            road
                            bikes, and mountain bikes.<br />

                            In New York City, Citi bike is a well-known bike-sharing program.<br /> You can rent a bike at
                            several
                            locations across Central Park, and it's a great alternate mode of transportation.<br />


                        </p>
                        <p class="px-3 wow bounce" data-wow-delay="0.1s">
                            Citi bike offers single rides as well as day passes for people who want to explore more of the
                            city
                            than simply the park, and its bikes are made exclusively for urban riding.<br />
                            Overall, there are several options for renting bikes in the Central Area, making it simple to
                            explore the area on two wheels.<br />

                            For those who wish to explore more of the city than just the park, Citi bike provides single
                            rides
                            as well as day permits, and their bikes are designed specifically for urban riding.<br />
                            Overall, the Central Area offers a variety of alternatives for renting bikes, making it simple
                            to
                            tour the region on two wheels.<br />

                        </p>
                    </div>
                </div>
                {{-- parag && img --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>Running inside Central Park, NYC</h5>
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2" src="{{ asset('images/centra_park/Picture10.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"></small>
                        </div>
                        <div class=" wow bounce" data-wow-delay="0.1s">
                            <p class="px-3 wow bounce" data-wow-delay="0.01s">
                                In the heart of the busy downtown, Central Park, NYC in Manhattan, New York, is a gorgeous
                                refuge.<br />
                                It is a sanctuary for runners of all skill levels thanks to its expansive vegetation,
                                winding
                                trails, and well-paved roadways.<br />
                                Whether you're a dedicated marathon runner or just want to take it easy, Central Park has
                                several possibilities for you.<br />

                                A lengthy route scattered over Central Park's expansive landscape is a runner's dream when
                                it
                                comes to jogging.<br />
                                Distance runners will find the park's main loop, which is around 6.1 miles (10 km) long, to
                                be
                                the perfect location.<br />

                            </p>
                            <p class="px-3 wow bounce" data-wow-delay="0.1s">
                                As you make your way around the park's perimeter and through its tranquil setting, the loop
                                provides beautiful views of the surrounding environment.<br />
                                The park is charming in every season, with colorful foliage in the fall, blossoming flowers
                                in
                                the spring, and a winter wonderland.<br />

                                Controlled and low-traffic areas are crucial to a runner's experience since they guarantee
                                ease
                                and safety.<br />
                                Running may be done in a setting that is ideal for them thanks to Central Park's
                                pedestrian-only
                                routes and restricted automobile access.<br />
                                The well-maintained, well-marked routes lead runners through the park.<br />
                                You can concentrate on your strides, breathing, and rhythm while running in such a
                                controlled
                                setting without having to worry about busy roads or chaotic street crossings.<br />


                            </p>
                            <p class="px-3 wow bounce" data-wow-delay="0.1s">
                                Central Park, NYC provides a variety of hours to meet diverse schedules and tastes when it
                                comes
                                to scheduling your run.<br />>
                                You may schedule your running sessions around your availability because the park is open
                                from
                                six in the morning until one in the morning.<br> / Some people find that a morning run in
                                Central
                                Park, which is tranquil and mostly empty, gives them a rejuvenating start to the day.<br />
                                Others might like a late-night run around the park's well-lit trails, taking in the tranquil
                                atmosphere after the city's bustle has subsided.<br /> When it comes to organizing your run,
                                Central Park offers a range of hours to accommodate various schedules and preferences.<br />
                            </p>
                            <p class="px-3 wow bounce" data-wow-delay="0.1s">
                                Central Park, NYC is open from six in the morning until one in the morning, so you may plan
                                your
                                running sessions around your availability.<br />
                                Some people discover that an early run in the serene and largely deserted Central Park
                                provides
                                them with an energizing start to the day.<br />
                                Others could enjoy a late-night run through the park's well-lit pathways while savoring the
                                peace and quiet after the city's bustle has died down.<br />

                            </p>
                            <p class="px-3 wow bounce" data-wow-delay="0.1s">
                                With its extensive roadways, safe surroundings, and adaptable running hours, Central Park,
                                NYC
                                in Manhattan, New York, is a runner's heaven.<br />
                                It offers a getaway from the chaos of the city and enables runners to focus on their fitness
                                objectives while experiencing nature.<br />
                                Regardless of your running goals or level of fitness, Central Park, NYC can accommodate both
                                long-distance running and informal jogging.<br />
                                Put on your running shoes, choose your pace, and allow the tranquil beauty of the park to
                                inspire you to run.<br />
                            </p>
                        </div>
                    </div>
                </div>
                {{-- tow img&&h5&&parg --}}
                <div class="wow bounce my-3 " data-wow-delay="0.01s">
                    <h5>
                        Boating inside Central Park, NYC
                    </h5>
                    <div class="row   w-100 justify-content-center ">
                        <div class="col-12 col-lg-4 mx-auto ">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Boating on Central Park, NYC Lake.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Boating on Central Park, NYC Lake</small>
                        </div>
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/People staying with Ducks.jpg  ') }}" class="img-fluid"
                                alt="Article Image">
                            <small class="d-block text-center">People staying with Ducks</small>
                        </div>
                    </div>
                    <div class=" wow bounce" data-wow-delay="0.1s">
                        <p class="px-3 wow bounce" data-wow-delay="0.01s">
                            A must-do if you love water-based pursuits is boating on the renowned Central Park, NYC
                            Lake.<br />
                            Rent a kayak or rowboat and float along the calm waterways while taking in the magnificent
                            sights of
                            the park's luxuriant vegetation.<br />

                        </p>
                    </div>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Ducks of Lake Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Ducks of Lake Central Park, NYC </small>
                        </div>
                    </div>
                    <div class="wow bounce" data-wow-delay="0.1s">
                        <p class="py-3 wow bounce" data-wow-delay="0.01s">
                            The renowned Loeb Boathouse is also located on the lake, where you can have a delectable dinner
                            or
                            unwind with a drink by the water.<br />
                        </p>
                    </div>
                </div>
                {{-- parag && img --}}
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h5>Horse Carriage Riding in Central Park, NYC</h5>
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Horse-drawn carriage in Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Horse-drawn carriage in Central Park, NYC</small>
                        </div>
                    </div>
                    <div class=" wow bounce" data-wow-delay="0.1s">
                        <p class="p-3 wow bounce" data-wow-delay="0.1s">
                            Horse-drawn carriage rides are a great opportunity to explore the park with a dash of old-world
                            charm.<br />
                            As you ride along lovely paths, take in the natural splendor of Central Park, NYC.<br />
                            The lovely breeze on your hair and the clip-clop of horse hooves creates a beautiful ambiance,
                            evoking a bygone age.<br />

                        </p>
                    </div>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>Where to find a horse-drawn carriage trip:</h5>
                    <p class=" wow bounce" data-wow-delay="0.1s">
                        Among the greatest ways to see Central Park is to ride in a horse-drawn carriage.<br />
                        Couples or anybody looking to take things slowly and take it all in should choose one of these
                        relaxing
                        vacations.<br />
                        Make sure to haggle with the driver before getting in because carriage trips are notorious for being
                        expensive.<br />
                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>
                        Horse-drawn carriage trip inside Central Park, NYC:
                    </h5>
                    <p class=" wow bounce" data-wow-delay="0.1s">
                        Fifth Avenue and 59th Street.<br />
                        Six avenues and 59th Street.<br />
                        59 Street and Seven Avenues.<br />
                        59 Street and Broadway Avenue.<br />

                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>
                        Ice skating
                    </h5>
                    <p class=" wow bounce" data-wow-delay="0.1s">
                        Ice skating is undoubtedly a highlight throughout the winter at Central Park, NYC in Manhattan, New
                        York, which is a well-known attraction that provides a variety of leisure activities.<br />
                        Visitors may experience the excitement of gliding on ice in a very lovely environment at Central
                        Park,
                        one of the most famous parks in the world.<br />
                        Visitors throng to Central Park, NYC two main ice-skating rinks, Wollman Rink and Lasker Rink, all
                        winter long.<br />
                        Wollman Rink, a scenic location with breathtaking views of the Manhattan skyline, is situated in the
                        southern section of the park next to the Central Park, NYC Zoo.<br />
                        In the northern section of the park, next to the Harlem Meer, Lasker Rink offers skaters a more
                        relaxing
                        and calmer environment to enjoy.<br />

                    </p>
                    <p class=" wow bounce" data-wow-delay="0.1s">
                        Both skating rinks provide skate rentals and instruction for both novice and advanced skaters.<br />
                        Everybody will have a smooth and joyful experience thanks to the rinks' diligent upkeep.<br />
                        Along with hosting public skating sessions, the rinks also hold a variety of other activities, such
                        as
                        figure skating performances and hockey games, which heighten the fun and enjoyment for guests.<br />
                        Both locals and visitors enjoy the beloved pastime of ice skating in Central Park.<br /> Gliding on
                        the
                        ice
                        while taking in the beautiful scenery of the park is a genuinely amazing experience.<br />
                    </p>
                    <p class=" wow bounce" data-wow-delay="0.1s">
                        Ice skating in Central Park provides a singular and unforgettable experience for anyone, whether
                        it's a
                        special date, a family vacation, or a fun pastime with friends.<br />>

                        It's important to remember that the ice-skating rinks' particular information and operating hours
                        may
                        change from year to year, so it's best to visit the Central Park website or get in touch with the
                        rinks
                        directly for the most recent specifics.<br />
                        So, grab a pair of skates and enjoy Central Park's wintry splendor while experiencing the excitement
                        of
                        ice skating.<br />
                    </p>
                </div>
                {{-- img&&h5&&pharg --}}
                <div>
                    <h5>Shakespeare in Central Park, NYC</h5>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Shakespeare in Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"> Shakespeare in Central Park, NYC</small>
                        </div>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            Shakespeare in Central Park, NYC is a well-known outdoor theater performance that takes place in
                            Central Park, NYC in the center of Manhattan, New York.<br />
                            This yearly custom enables theatergoers and casual viewers alike to appreciate the plays of the
                            illustrious playwright William Shakespeare in a distinctive and immersive setting.<br />
                            It is a location where the enchantment of theater and the splendor of nature come together
                            because
                            of its long history.<br />
                            The setting for this extraordinary theatrical experience is Central Park, NYC, which is in the
                            heart
                            of Manhattan.<br /> The park, NYC which covers over 840 acres, provides a tranquil setting where
                            visitors
                            can get away from the commotion and clamor of the busy metropolis.<br />
                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            The Delacorte Theatre, tucked away in the park's thick vegetation, comes alive with expectation
                            and
                            excitement as the sun sets and the moon rises.<br />
                            Shakespeare in the Park has a long history dating back to 1954, when Joseph Papp, a brilliant
                            theatrical producer, founded the New York Shakespeare Festival.<br />
                            Papp wanted everyone, regardless of social or economic status, to have access to Shakespeare's
                            works.<br />
                            He thought everyone should have access to theater as a public good.<br />
                            Shakespeare in Central Park's free performances became a concept as a result.<br />
                            It has enthralled audiences with a variety of Shakespearean plays since it began, from
                            well-known
                            comedies like "A Midsummer Night's Dream" to sad classics like "Romeo and Juliet" and
                            "Macbeth".<br />

                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            Each performance is a sight to behold because of the performances' gifted performers,
                            illustrious
                            directors, and superb production qualities.<br />
                            It is a well-known tradition that draws a large audience to Central Park, NYC.<br />
                            The yearly release of the play schedule, which normally runs from May through August, is highly
                            anticipated by many theater-loving New Yorkers and tourists.<br />
                            Due to these performances' popularity, getting tickets might be a difficult task, but the
                            satisfaction that comes with getting a sought-after ticket is unmatched.<br />
                            With picnic baskets, blankets, and refreshments in hand, spectators arrive prepared to settle in
                            on
                            the verdant lawn around the outdoor theater.<br />
                            People from all walks of life may gather and appreciate the everlasting brilliance of
                            Shakespeare's
                            words in this laid-back and informal atmosphere.<br />
                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            Shakespeare in the Park's cast and staff are carefully chosen, combining seasoned actors with
                            up-and-coming performers.<br />
                            The occasion has drawn a variety of well-known performers throughout the years, including Meryl
                            Streep, Al Pacino, Denzel Washington, and Natalie Portman, to mention a few.<br />
                            Their love for Shakespeare's works gives the characters life, giving the audience remarkable and
                            changing experiences.<br />
                            It does not only feature engaging performances, but it also exemplifies the strength of
                            community
                            and art.<br />
                            Love, power, tragedy, and human nature are among the timeless themes Shakespeare explores in his
                            plays.<br />
                            It transcends barriers of language, time, and culture.<br /> It proves the universality of
                            narrative
                            and
                            Shakespeare's words' continuing applicability in contemporary times.<br />
                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            An annual theatrical event called Shakespeare in the Park takes place in Central Park, NYC in
                            Manhattan and introduces the world to Shakespeare's enchantment.<br />
                            This treasured tradition enables an exquisite interaction with the works of one of the greatest
                            playwrights in history against the stunning backdrop of nature.<br />
                            It delivers an amazing experience that catches the spirit of both art and nature and leaves you
                            with
                            lifetime memories, whether you are a Shakespeare expert or a casual theater admirer.<br />

                        </p>
                    </div>
                </div>



                {{-- img&&h5&&pharg --}}
                <div>
                    <h5>SummerStage concerts:</h5>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Summer Stage Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Summer Stage Central Park, NYC</small>
                        </div>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            Every year, from late spring through the summer, SummerStage presents a wide variety of musical
                            styles and performances.<br />
                            The City Parks Foundation, a nonprofit devoted to delivering free artistic and cultural
                            activities
                            to New York City parks, oversees organizing it.<br />

                            Rumsey Playfield in Central Park, NYC which is on the east side of the park close to East 71st
                            Street, serves as the primary location for Summer Stage performances.<br />
                            Each year, thousands of music lovers come to see both well-known and up-and-coming acts play at
                            this
                            renowned outdoor amphitheater.<br />


                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            The performances from many genres, such as indie rock, hip-hop, jazz, world music, dance, and
                            theater, make the Summer Stage events a special experience.<br />
                            On this renowned stage, artists from all over the world congregate to exhibit their abilities,
                            providing a diverse cultural experience for all visitors.<br />
                            Summer Stage presents concerts in several parks across the city in addition to the main Rumsey
                            Playfield stage.<br />
                            These neighborhood-based satellite events bring the arts and music directly to the communities
                            they
                            serve.<br />


                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            These more personal and neighborhood-focused smaller-scale events showcase the city's rich
                            creative
                            landscape.<br />
                            Tickets-only and non-cost events are both included in the Summer Stage performances, making them
                            open to a variety of audiences.<br />
                            While some performances cost tickets to enter, many are completely free, in keeping with the
                            City
                            Parks Foundation's objective to make art and culture accessible to all New Yorkers.<br />
                            The Summer Stage schedule is carefully chosen to highlight regional, foreign, and local
                            talent.<br />
                            It provides a forum for up-and-coming musicians to connect with fans and share their
                            songs.<br /> It
                            also
                            accepts well-known musicians who can gather sizable crowds and enthrall the city with their
                            performances.<br />

                        </p>
                        <p class="wow bounce px-3" data-wow-delay="0.1s">

                            As people of all ages congregate to celebrate music and the arts, the atmosphere at Summer Stage
                            events is unrivaled.<br />
                            A spectacular experience is created for everyone engaged by the lively audience energy, the
                            stunning
                            settings of Central Park, NYC and the brilliant performers.<br />

                            Beyond music, Summer Stage also includes other forms of art in its programming, such as dance
                            and
                            theater.<br />
                            These varied performances enrich the cultural experience even further and give artists working
                            in a
                            variety of media a stage on which to display their skills.<br />

                        </p>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            In addition to being a tranquil haven tucked away in the middle of Manhattan, Central Park, NYC
                            is
                            also a hive of active outdoor pursuits.<br />
                            The park offers a wide range of opportunities to indulge in leisure, fitness, and cultural
                            activities, including bicycling and jogging pathways, boating on the lake, horse-drawn carriage
                            excursions, ice skating, Shakespeare in the Park, and Summer Stage concerts.<br />
                            So put on your jogging shoes, hire a boat, or attend a top-notch concert; Central Park is
                            waiting
                            for you.<br />
                        </p>
                    </div>
                </div>
                {{-- img&&h5&&pharg --}}
                <div>
                    <h5>Marathon in New York City</h5>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Marathon Central Park, NYC In New York city, Manhattan.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Marathon Central Park, NYC In New York city,
                                Manhattan</small>
                        </div>
                        <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                            The New York City Marathon is among the most recognizable and well-known sporting occasions
                            around
                            the globe.<br />
                            The marathon, which spans all five boroughs of New York City, draws competitors from all over
                            the
                            world as well as tens of thousands of fans who line the streets to support the runners.<br />
                            Within the allotted 500 words, let's get into the specifics of this spectacular race, such as
                            the
                            time, location, and finish line.<br />
                        </p>
                    </div>
                </div>
                {{-- img&&h5 --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h3>Macy's Thanksgiving Day Parade</h3>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        One of New York City's most recognizable and beloved yearly events is the Macy's Thanksgiving Day
                        Parade.<br />
                        The parade has been a beloved tradition ever since it was first held in 1924 on Thanksgiving Day,
                        which
                        is always observed on the fourth Thursday of November.<br />
                        It now symbolizes the festive season and draws millions of viewers to live events and TV
                        broadcasts.<br />
                    </p>
                    <div class="row">
                        <div class="wow bounce co-12 col-lg-4 mx-auto" data-wow-dely="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Thanksgiving in Manhattan, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Thanksgiving in Manhattan, NYC</small>
                        </div>
                    </div>

                    <p class="wow bounce  px-3" data-wow-delay="0.1s">
                        The parade's beginning location is normally at 77th Street and Central Park, NYC West, winding
                        through
                        the center of Manhattan.<br />
                        The spectacular procession then turns onto Central Park, NYC South and travels south down Central
                        Park,
                        NYC West.<br /> Most of the march then moves towards 6th Avenue, often known as the Avenue of the
                        Americas.<br />
                        The parade's last leg travels up 6th Avenue until it reaches Macy's main location in Herald Square,
                        where it concludes.<br />

                    </p>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        For its ornate floats, gigantic balloons, marching bands, and spectacular performances, the Macy's
                        Thanksgiving Day Parade is renowned.<br />
                        The enormous cartoon balloons that are inflated with helium are one of the parade's biggest
                        draws.<br />
                        Snoopy, Pikachu, Spider-Man, and a host of other well-known figures from popular culture are all
                        represented by these balloons.<br />

                    </p>
                    <div class="row   w-100 justify-content-center ">
                        <div class="col-12 col-lg-4 mx-auto ">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Balloons in Thanksgiving in Manhattan, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Balloons in Thanksgiving in Manhattan, NYC</small>
                        </div>
                        <div class="col-12 col-lg-4 mx-auto">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2 h-75"
                                src="{{ asset('images/centra_park/Thanksgiving in 6 Avenue (Avenue of America).jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Thanksgiving in 6 Avenue (Avenue of America)</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        Children and adults alike grin as these creative balloons soar high above the throng, fostering a
                        lovely
                        ambiance.<br />
                        A wide variety of breathtaking floats are included in the parade in addition to the well-known
                        balloons.<br />
                        These floats are carefully planned out and embellished to suit different themes and ideas.<br />
                        They frequently feature images of winter wonderlands, scenes from traditional Christmas tales, or
                        cultural artifacts.<br />
                    </p>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        The ingenuity and creativity needed to make these floats come to life make them a genuine spectacle
                        to
                        see.<br />

                        Along with the floats and balloons, the parade features a variety of skilled marching bands from
                        across
                        the nation.<br />
                        These bands infuse the procession with a dynamic and rhythmic energy, enthralling the crowd with
                        their
                        coordinated motions and energetic musical performances.<br />
                        Each band brings their own distinctive flavor to the procession, adding to its vibrant and eclectic
                        ambiance.<br />
                        Throughout its history, the Macy's Thanksgiving Day Parade has included visits by well-known singers
                        and
                        performers.<br />
                    </p>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        These performances, which range from breathtaking dance troupes to Broadway musical numbers, add an
                        extra level of entertainment and excitement to the occasion.<br />
                        Celebrities frequently make an appearance on the parade floats, engage with the spectators, and
                        occasionally even perform for them.<br />
                        Over time, as new technology and trends emerged, the parade changed and expanded.<br /> Modern
                        animatronics,
                        cutting-edge visual effects, and creative methods to involve the audience have all been
                        incorporated.<br />
                        Despite these modifications, the parade's fundamental purpose—to commemorate cohesion, appreciation,
                        and
                        the joy of the festive season—remains the same.<br />
                        Each year, millions of people are captivated by the legendary Macy's Thanksgiving Day Parade.<br />
                        It has come to represent Christmas pleasure and festivity with its enormous balloons, beautiful
                        floats,
                        jovial marching bands, and compelling acts.<br />
                        Due to its long history and cultural significance, the parade is a beloved institution in Manhattan
                        and
                        a must-see attraction for both residents and tourists.<br />
                    </p>
                </div>
                {{-- img&&h5 --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h3>Central Park, NYC Summer Stage Concretes</h3>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">

                        A fun summertime event series called the Central Park, NYC Summer Stage Concerts is held in
                        Manhattan's
                        Central Park, NYC New York City.<br />
                        Numerous musical styles are represented in this well-liked outdoor concert series, which draws tens
                        of
                        thousands of music lovers from around the city and beyond.<br />

                    </p>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Central Park, NYC in Summer2.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Central Park, NYC in Summer</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        The first Central Park, NYC Summer Stage Concerts took place in the summer of 1986, and they have
                        since
                        become a much-anticipated yearly event.<br />
                        The concerts take place throughout Central Park, NYC giving guests a distinctive and beautiful
                        environment to experience live music performances amidst the park's natural splendor.<br />

                        The enormous variety of musical acts available is one of the attractions of the Central Park
                        SummerStage
                        Concerts.<br />
                        A variety of musical styles, including rock, pop, hip-hop, classical, jazz, world music, and more,
                        are
                        represented on the roster.<br />
                        Whatever one's musical inclinations, there is something for everyone thanks to this diversity.<br />

                        Popular performers from all over the world frequently perform at Central Park, NYC SummerStage
                        Concerts,
                        drawing music lovers of all ages.<br />
                        The series has featured performances by musicians including Beyoncé, Coldplay, Bob Marley, Talib
                        Kweli,
                        Norah Jones, and The Roots, to mention a few, as well as up-and-coming performers and established
                        giants.<br />


                    </p>
                    <p class="wow bounce  px-3" data-wow-delay="0.1s">
                        The atmosphere at Central Park, NYC Summer Stage Concerts is unique, in addition to the great
                        musical
                        performances.<br />
                        Attendees may enjoy the pleasures of live music amidst beautiful greenery thanks to the outdoor
                        location, which provides a laid-back and joyous atmosphere.<br />
                        People are frequently spotted lounging on picnic blankets or dancing outside while making lifelong
                        memories with friends and loved ones.<br />

                    </p>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/People Walking in Central Park, NYC in Summer.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">People Walking in Central Park, NYC in Summer</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        Also, Central Park, NYC Summer Stage Concerts frequently feature entertainment other than
                        music.<br />
                        To give the experience even more depth, the series also features cultural activities, including
                        dance
                        performances, poetry readings, theater productions, and movie screenings.<br />
                        These extra activities provide visitors with the chance to sample various artistic mediums and
                        broaden
                        their cultural understanding.<br />

                        Central Park, NYC Summer Stage Concerts are a legendary series of events that unite people from all
                        walks of life to celebrate the impact of live music in the middle of Manhattan.<br />
                        This concert series offers a colorful and welcoming platform with something for everyone, whether
                        you're
                        a music aficionado, an art lover, or just someone wishing to enjoy a lovely summer evening.<br />
                        So, mark your calendars, invite your friends, and get ready to be mesmerized by live music in one of
                        the
                        most famous parks in the world.<br /> Don't miss it; you won't want to!

                    </p>

                </div>

                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h3>Winter Jam</h3>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        Winter Jam is a remarkable yearly event that takes place in Central Park, NYC and draws a varied
                        gathering of adventurers and outdoor enthusiasts.<br />
                        This festival, which celebrates the benefits of winter, provides a wide range of exciting winter
                        activities, live performances, and interactive experiences that capture the essence of the
                        season.<br />

                        Winter Jam turns Central Park, NYC into a winter paradise every year, offering guests a variety of
                        fun
                        possibilities to participate in snow-related activities.<br />
                        Attendees have the chance to experience a variety of winter activities right in the center of
                        Manhattan,
                        including snowboarding, siing, snowshoeing, and sledding.<br />
                        Winter Jam is the ideal event for everyone, regardless of their degree of expertise in winter
                        sports.<br /> It
                        offers something for both beginners and seasoned competitors.<br />
                    </p>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Snow inside Central Park, NYC in Winter.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Snow inside Central Park, NYC in Winter</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        The Ski and Snowboarding Hill, a man-made slope intended to mimic the pleasures of skiing down a
                        real
                        mountain, is one of the attractions of Winter Jam.<br />
                        Participants may enjoy the thrilling sensation of gliding across the snow-covered mountainside with
                        the
                        assistance of qualified instructors and cutting-edge equipment.<br />
                        It's an excellent chance for both novices seeking instruction and seasoned professionals seeking to
                        hone
                        their abilities.<br />
                        There are several other activities available during Winter Jam to keep you engaged.<br />
                        Visitors to the Snowshoeing Zone may journey through the snow on specialized snowshoes made for
                        snowy
                        terrain while admiring Central Park's beautiful backdrop.<br />
                        The Snow Sculpting Zone displays the creative abilities of both amateurs and pros as they construct
                        elaborate masterpieces out of basic snow blocks that are both breathtaking and inspiring.<br />
                    </p>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        Along with the heart-pounding activities, Winter Jam features a variety of live acts all day
                        long.<br />
                        Local musicians, engaging dance acts, and even thrilling snowboarding displays by professional
                        athletes
                        are all available for spectator enjoyment.<br />
                        The festival's energetic environment fosters a sense of solidarity among participants and encourages
                        a
                        celebration of the delights of winter in all their splendor.<br />
                        Winter Jam also includes interactive experiences that enable guests to learn about numerous winter
                        sports and outdoor leisure possibilities, as if all these activities weren't enough.<br />
                    </p>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Central Park, NYC in Winter.jpg') }}" class="img-fluid"
                                alt="Article Image">
                            <small class="d-block text-center">Central Park, NYC in Winter</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        Attendees may learn from industry professionals through workshops, clinics, educational exhibits,
                        and
                        demos.<br />
                        Winter Jam has you covered whether you want to attempt a new activity or just expand your knowledge
                        of
                        winter sports.<br />
                        All things considered, Winter Jam is a fantastic occasion that brings the allure of winter to
                        Central
                        Park, NYC.<br/>
                    </p>
                    <p class="wow bounce px-3" data-wow-delay="0.1s">
                        This event offers visitors of all ages and backgrounds an amazing experience by fusing exciting
                        winter
                        activities, live performances, and interactive experiences.<br>
                        So, mark your calendars and get ready to enjoy Central Park's Winter Jam, where excitement and
                        adventure
                        are waiting around every snow-covered corner.<br>
                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h3>Central Park, NYC for children:</h3>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Manhattan, New York's vast Central Park, NYC is a peaceful haven offering a variety of attractions
                        and
                        activities for visitors of all ages.<br>
                        However, for children, Central Park transforms into a magical paradise with a variety of activities
                        specially created to spark their interest and creativity.<br>
                        Children can enjoy many fun experiences at this popular park, including the zoo, the Carousel, the
                        Alice
                        in Wonderland Monument, the Conservatory Garden, and the Great Lawn.<br>

                    </p>
                </div>
                {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3>Food and Drink in Central Park, NYC</h3>
                <br>
                <h5>Central Park, NYC Conservancy Food Trucks</h5>
                <p class="wow bounce px-3 " data-wow-delay="0.1s">
                    Manhattan, New York's vast Central Park, NYC is a peaceful haven offering a variety of attractions and
                    activities for visitors of all ages.<br>
                    However, for children, Central Park transforms into a magical paradise with a variety of activities
                    specially created to spark their interest and creativity.<br>
                    Children can enjoy many fun experiences at this popular park, including the zoo, the Carousel, the Alice
                    in Wonderland Monument, the Conservatory Garden, and the Great Lawn.<br>
                </p>
                <div class="row">
                <div lass="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/centra_park/Trucks Food Inside Central Park, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Trucks Food Inside Central Park, NYC</small>
                    </div>
                </div>
                <p class="wow bounce px-3 " data-wow-delay="0.1s">


                    Central Park, NYC Conservancy Food Trucks are a delightful addition to the vibrant atmosphere of Central
                    Park in Manhattan, New York City.<br>
                    These food trucks offer a wide array of delectable culinary options, providing visitors with convenient
                    and delicious dining experiences amidst the park's picturesque surroundings.<br>

                    Operated by the Central Park Conservancy, these food trucks serve as a great way to fuel up and enjoy a
                    quick bite while exploring the park's numerous attractions.<br>
                    From locals taking a leisurely stroll to tourists seeking a memorable picnic experience, the food trucks
                    cater to diverse tastes and preferences.<br>

                </p>
                <p class="wow bounce px-3 " data-wow-delay="0.1s">

                    The menu at Central Park, NYC Conservancy Food Trucks is a culinary adventure. Visitors can indulge in a
                    variety of cuisines, ranging from classic street food favorites like burgers, hot dogs, and tacos to
                    more exotic offerings such as gourmet sandwiches, Mediterranean treats, and Asian-inspired dishes.<br>
                    Everybody can find something to state their appetites with the addition of vegetarian and vegan
                    alternatives.<br>

                    Beyond the delicious food, what sets the Central Park, NYC Conservancy Food Trucks apart is their
                    commitment to sustainability.<br>

                </p>
                <p class="wow bounce px-3 " data-wow-delay="0.1s">
                    The Conservancy emphasizes eco-friendly practices, with the trucks using compostable materials and
                    locally sourced ingredients whenever possible.<br>
                    This dedication to sustainability aligns with the overall mission of preserving and protecting Central
                    Park's natural beauty.<br>

                    Whether you're seeking a quick snack or a full meal, Central Park, NYC Conservancy Food Trucks offer a
                    convenient and flavorful dining experience.<br>
                    These mobile eateries add an exciting and dynamic element to Central Park, NYC, allowing visitors to
                    refuel and continue their exploration of this iconic urban oasis.<br>
                    So, the next time you find yourself in Central Park, don't miss the opportunity to treat your taste buds
                    to the culinary delights offered by the Central Park, NYC Conservancy Food Trucks.<br>

                </p>
            </div>
            {{-- ////////////////////////////////////////////////////////////////////////////////////////// --}}



                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>Tavern on the Green</h5>

                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Tavern In Central Park, NYC.jpg') }}" class="img-fluid"
                                alt="Article Image">
                            <small class="d-block text-center">Tavern In Central Park, NYC</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Tavern on the Green is a renowned restaurant located within the iconic Central Park, NYC, in New
                        York.<br />
                        Situated near the West 67th Street entrance, this historic establishment offers a delightful dining
                        experience amidst the scenic beauty of the park.<br />
                        The restaurant boasts a diverse menu that caters to a wide range of tastes and preferences.<br />
                        From classic American dishes to international flavors, Tavern on the Green presents a variety of
                        options
                        to satisfy every palate.<br />
                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Guests can indulge in an array of appetizers, salads, soups, and entrees that showcase fresh,
                        locally
                        sourced ingredients.<br>
                        The Tavern on the Green is celebrated for its delectable food and exceptional service.<br> The menu
                        features
                        both traditional and modern interpretations of favorites like grilled steaks, seafood, poultry, and
                        vegetarian options.<br>
                        Whether you're craving a succulent steak, a flavorful seafood dish, or a hearty vegetarian meal,
                        their
                        extensive menu offers something for everyone.<br>
                        In addition to its tempting food selection, Tavern on the Green provides an extensive collection of
                        beverages.<br>


                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        From handcrafted cocktails to an extensive list of wines and spirits, patrons can pair their meals
                        with
                        the perfect drink to enhance their dining experience.<br>
                        The restaurant's charming interior adds to its appeal.<br> With its elegant decor and warm ambiance,
                        Tavern
                        on the Green creates a welcoming atmosphere for guests to enjoy their meals.<br>
                        Moreover, the establishment's location within Central Park provides a unique and picturesque
                        backdrop,
                        allowing diners to savor their food while overlooking the park's lush greenery.<br>
                        Overall, Tavern on the Green inside Central Park offers a memorable culinary experience.<br>
                        With its delectable menu, refreshing beverages, and enchanting setting, it has become an iconic
                        destination for both locals and tourists alike, symbolizing the harmonious fusion of nature and
                        gastronomy in the heart of New York City.<br>

                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>Loeb Boathouse Restaurant</h5>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Loeb Boathouse Restaurant in Central Park, NYC.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Loeb Boathouse Restaurant in Central Park, NYC</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Loeb Boathouse Restaurant is in Central Park, NYC in Manhattan, at the southern end of the lake.<br>
                        It
                        offers outdoor dining with views of the lake and the city skyline.<br>
                        New York City is a delightful dining destination surrounded by the serenity of nature.<br> Nestled
                        alongside
                        Central Park, NYC Lake, this iconic restaurant offers visitors a unique experience of relishing
                        delectable food and drinks while enjoying breathtaking views.<br>
                        The menu at Loeb Boathouse Restaurant is diverse, catering to a range of tastes and preferences.<br>
                        There is something for everyone, from traditional American cuisine to alternatives with fresh
                        seafood.<br>
                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Indulge in mouthwatering steaks, flavorful pastas, and savory salads made with locally sourced
                        ingredients.<br>
                        The restaurant also offers a variety of vegetarian and vegan options, ensuring a satisfying meal for
                        all
                        guests.<br>
                        Renowned for its seafood delicacies, the restaurant offers an array of delectable choices.<br>
                        From succulent lobster tails and shrimp cocktails to Atlantic salmon and pan-roasted halibut,
                        seafood
                        lovers will be in culinary paradise.<br>
                        The dishes are expertly prepared by skilled chefs, ensuring an unforgettable dining experience.<br>
                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        Complementing the exceptional cuisine is an extensive selection of wines, handcrafted cocktails, and
                        refreshing beverages.<br>
                        Whether you desire a crisp Chardonnay, a robust Cabernet Sauvignon, or a creative cocktail, the
                        restaurant's knowledgeable staff will assist in finding the perfect pairing to enhance your
                        meal.<br>

                        Apart from its culinary offerings, the ambiance of Loeb Boathouse Restaurant is another
                        highlight.<br>
                        With its rustic charm and picturesque surroundings, it captures the essence of Central Park, NYC, s
                        tranquility.<br>


                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        The restaurant offers both indoor and outdoor seating, giving customers the option of a quaint
                        dinner
                        indoors or a picturesque experience on the patio by the lake.<br>
                        Adding to the charm, visitors can also enjoy a gondola ride on Central Park Lake, offering a unique
                        and
                        romantic perspective of the park.<br>
                        Whether it's a leisurely lunch, a romantic dinner, or a special occasion celebration, a visit to
                        Loeb
                        Boathouse Restaurant promises a memorable gastronomic experience.<br>
                        Loeb Boathouse Restaurant in Central Park, NYC, Manhattan, is a superb choice for those seeking a
                        delightful dining experience amidst the natural beauty of New York City.<br>
                        With its delectable cuisine, extensive drink selection, and charming ambiance, it continues to be a
                        favorite destination for locals and tourists alike.<br>
                    </p>
                </div>
                {{-- parag --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h5>Le Pain Quotidien</h5>
                    <div class="row">
                        <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">>
                            <!-- Centered image with text -->
                            <img class="w-100 p-2"
                                src="{{ asset('images/centra_park/Restaurant LE PAIN QUOTIDIEN in Central Park.jpg') }}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center">Restaurant LE PAIN QUOTIDIEN in Central Park</small>
                        </div>
                    </div>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        This bakery and cafe have several locations in Central Park, NYC, including the Bethesda Fountain
                        and
                        one at the Loeb Boathouse (for breakfast, lunch, and snacks).<br>
                        Le Pain Quotidien is a well-known bakery and café chain with a presence in Central Park, NYC, New
                        York.<br>
                        Situated amidst the lush greenery and scenic beauty of the park, this café provides visitors with a
                        delightful and serene dining experience.<br>
                        Central Park, NYC serves as the perfect backdrop for this charming bakery. Le Pain Quotidien in the
                        park
                        offers a serene retreat for park-goers, a haven to relax and recharge amidst the hustle and bustle
                        of
                        the city.<br>
                        Nestled in a prime location, it is an oasis of calmness where visitors can indulge in delicious food
                        and
                        enjoy the natural beauty surrounding them.<br>

                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        The café offers a diverse menu with a focus on healthy and organic ingredients.<br>
                        From freshly baked bread to mouthwatering pastries and hearty salads, Le Pain Quotidien caters to a
                        variety of tastes and dietary preferences.<br>
                        Whether you're looking for a quick coffee or a leisurely brunch, this café has something for
                        everyone.<br>
                        One of the highlights of dining at Le Pain Quotidien in Central Park is the outdoor seating
                        area.<br>
                        With ample space and comfortable seating arrangements, visitors can soak up the panoramic views of
                        the
                        park while enjoying their meals.<br>
                    </p>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        It is a popular spot for people-watching, reading a book, or simply unwinding amidst nature.<br>
                        Apart from the delectable food and peaceful ambiance, Le Pain Quotidien also prioritizes
                        sustainability.<br>
                        This café is committed to using organic, locally sourced ingredients and reducing its environmental
                        footprint.<br>
                        It aligns perfectly with the ethos of Central Park, which strives to preserve and protect its
                        natural
                        resources.<br>
                        Le Pain Quotidien in Central Park offers a delightful dining experience enriched by the beauty and
                        tranquility of its surroundings.<br>
                        It is the perfect place to escape the chaos of the city and bask in the serenity of nature while
                        enjoying a delicious meal or a cup of coffee.<br>
                    </p>

                </div>
                {{-- video --}}
                <div class="wow bounce my-3 " data-wow-delay="0.1s">
                    <h3>The Plaza Food Mall</h3>
                    <p class="wow bounce px-3 " data-wow-delay="0.1s">
                        This food hall is in the Plaza Hotel at the south-southern end of Central Park, NYC. It has a
                        variety of
                        food stalls, including pizza, pasta, burgers, and sushi.
                    </p>
                    <div class="row ">
                        <div class="col-12 col-lg-5 mx-auto video_1 ">
                            <video autoplay muted loop id="myVideo_1">
                                <source class="" src="{{ asset('images/centra_park/VOD_20230201_133829.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div </div>

                    </div>
                    {{-- parag --}}
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h3>And here are some questions that people often ask about Central Park, NYC, Manhattan, New York:
                        </h3>

                        <h5><b>FAQ</b></h5>
                        <h3>How big is Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, you can rent rowboats and paddleboats at the Loeb Boathouse to enjoy a leisurely ride on
                            the lake
                            in Central Park.
                        </p>
                        <h3>Is Central Park, NYC open year-round?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, Central Park, NYC isopen year-round. However, certain attractions and facilities may have
                            varying
                            operating hours depending on the season.


                        </p>
                        <h3>Are dogs allowed in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, dogs are allowed in Central Park, NYC, but they must be always kept on a leash. There are
                            also
                            designated areas where dos can run off-leash during specified hours.


                        </p>
                        <h3>Are there any concerts or events held in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, Central Park, NYC hosts various concerts and events throughout the year. The most famous
                            one is the
                            free SummerStage concert eries, which features performances by renowned artists.


                        </p>
                        <h3>Can you have a picnic in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">

                            Absolutely! Central Park,NYC has numerous designated picnic areas where you can enjoy a picnic
                            with
                            family and friends.


                        </p>
                        <h3>Are there any playgrounds for children in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">

                            Yes, entral Park, NYC has several playgrounds that are specially designed for children. Some
                            popular
                            ones include Heckscher Playground, Ancient Playground, and Adventure Playground.

                        </p>
                        <h3>Can you go ice skating in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, during the winter months, Wollman Rink in Central Park is transformed into an ice-skating
                            rink
                            where visitors can enjoy kating surrounded by the park's beautiful scenery.
                        </p>
                        <h3>Is there a fee to enter Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">

                            No, Central Park, NYC, is open to everybody, and there is no fee to enter the park. However,
                            some
                            attractions within the park may have admission fees.

                        </p>
                        <h3>Can you go horseback riding in Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Sure, you can go horseback riding in Central Park, NYC. There are designated bridle paths where
                            you can
                            enjoy a peaceful ride thrugh the park's scenic trails.
                        </p>
                        <h3>Are there any hotels near Central Park, NYC?</h3>
                        <p class="wow bounce my-3 " data-wow-delay="0.1s">
                            Yes, there are several hotels located near Central Park, NYC offering convenient accommodation
                            options
                            for visitors who want to stay close to the park. </p>
                        <h3>What is the best time to visit Central Park, NYC? </h3>
                        <p class="wow bounce my-3 " i="Directions" data-wow-delay="0.1s">

                            Central Park, NYC is beautiful throughout the year, but many people consider spring (April to
                            June) and
                            fall (September to November) to be the best times to visit when the weather is pleasant, and the
                            park's
                            foliage is vibrant.

                        </p>

                    </div>
                    {{-- video&&h5 --}}
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h3>Directions to Central Park, NYC: </h3>

                        <div class="row ">
                            <div class="col-12 col-lg-5 mx-auto video_1 ">
                                <video autoplay muted loop id="myVideo_1">
                                    <source class=""
                                        src="{{ asset('images/centra_park/VOD_20230201_131514.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <ul class="">
                            <li>SUBWAY train (1 & 2 & A & B & C & D) TO 59 Street-Columbus Circle station. (It leads you to
                                southwest
                                Central Park, NYC) </li>
                            <li> Take the R, N, and W subway trains to the 5 Avenues stop. It will take you to the southeast
                                corner
                                of
                                Central Park, NYC.</li>
                            <li>Entry from 6 & 7 avenues and Broadway Avenue with 59 Street</li>
                        </ul>

                    </div>
                    {{-- ///////////// --}}
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h5>Many entrances in the westside and eastside </h5>
                        <p class="wow bounce px-3 " data-wow-delay="0.1s">
                            Central Park, NYC has entrances on all sides. Here is some information about the entrances on
                            the
                            westside, eastside, and north sides of Central Park, NYC:

                        </p>

                    </div>
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h5>Westside Entrances: </h5>
                        <p class="wow bounce px-3 " data-wow-delay="0.1s">
                            Columbus Circle is located at the southwest corner of Central Park, NYC, near the intersection
                            of
                            Central Park, NYC, West and West 59th Street.
                            Eighth Avenue: You can access the park from Eighth Avenue at various points, including West 72nd
                            Street
                            and West 81st Street.
                        </p>

                    </div>
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h5>Eastside Entrances: </h5>
                        <p class="wow bounce px-3 " data-wow-delay="0.1s">

                            Grand Army Plaza is positioned at the southeast corner of Central Park, NYC, near Fifth Avenue
                            and East
                            59th Street.
                            Fifth Avenue: Several entrances along Fifth Avenue provide access to the park, including East
                            72nd
                            Street and East 79th Street.
                        </p>
                    </div>
                    <div class="wow bounce my-3 " data-wow-delay="0.1s">
                        <h5>North Entrances: </h5>
                        <p class="wow bounce px-3 " id="map" data-wow-delay="0.1s">
                            - Harlem Meer: Situated at the northeastern corner of Central Park, near 110th Street and
                            Malcolm X
                            Boulevard.<br id="map">
                            - Conservatory Garden: Located on the northeast side at East 105th Street and Fifth Avenue.<br>
                        </p>
                    </div>
                    <div id"map"></div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.0663856669767!2d-73.96815832397081!3d40.782554671383075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral%20Park!5e0!3m2!1sen!2sus!4v1704318976352!5m2!1sen!2sus"
                        class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    @include('website.layout.link')


                </div>
            </div>
    </section>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const images = document.getElementsByTagName('img');
            for (let i = 0; i < images.length; i++) {
                images[i].setAttribute('onContextMenu', 'return false;');
            }
        });
    </script>
@endsection
