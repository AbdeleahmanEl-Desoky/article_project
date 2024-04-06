@extends('website.layout.app')

@section('title')
    <title>Rockefeller</title>
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
                    src="{{ asset('images/rockefeller/r.jpeg') }}"
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
                                <a class="dropdown-item" href="#RockefellerCenter">Rockefeller Center</a>
                                <a class="dropdown-item" href="#ImportanceofRockefeller">Importance of Rockefeller</a>
                                <a class="dropdown-item" href="#wonderofarchitecture">wonder of architecture</a>
                                <a class="dropdown-item" href="#EngineeringandDesign">Engineering and Design</a>
                                <a class="dropdown-item" href="#ActivitiesandAttractions">Activities and Attractions</a>
                                <a class="dropdown-item" href="#EventsandEntertainment">Events and Entertainment</a>
                                <a class="dropdown-item" href="#usinessandcommercial">usiness and commercial Spaces</a>
                                <a class="dropdown-item" href="#Businessandcommercial">Business and commercial Spaces</a>
                                <a class="dropdown-item" href="#Avenueshopping">The Fifth Avenue shopping</a>
                                <a class="dropdown-item" href="#Importantplaces">Important places</a>
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
                        Rockefeller Center, New York City
                    </h2>
                        <!-- First Row -->
                        <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                            <!-- Centered image with text -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Rockefeller.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="d-block text-center"> 5 Avenue Between 49 &50 Street, Rockefeller Center, New York City</small>
                        </div>

                </div>

                <div class="col-12">
                    <h5 class="text-center wow bounce"  data-wow-delay="0.1s">
                        Rockefeller Center, New York City, the Rockefeller Center in Manhattan is a vast complex that serves as a representation of the city's vibrancy, architectural splendor, and cultural significance.<br>
                        Rockefeller Center, New York City, a famous location that spans 22 acres between 48th and 51st Streets and from Fifth to Sixth Avenue, has been influencing the character of the city ever since it was founded.<br>
                        The main area (50 street between 5 & 6 Avenue).<br>
                    </h5>
                    <h5 class="text-center wow bounce"  data-wow-delay="0.3s">
                        When John D. Rockefeller Jr., the heir to Standard Oil's wealth, envisioned a complex that would revitalize the city both economically and aesthetically, it was in the 1930s, during the Great Depression.<br>
                        The first phase of construction, which started in 1931, was finished in 1933.<br class="wow bounce"  data-wow-delay="2s">
                        Raymond Hood, Donald Deskey, and Wallace Harrison, among other well-known architects and designers, worked together to create the complex's stunning architecture.<br>
                    </h5>
                </div>
            </div>
        

        <div class="container-fluid">


            <div class="row my-5" >
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Rockefeller Center, New York City is made up of 19 commercial structures, the most well-known of which is the GE Building (now known as the Comcast Building), which houses NBC Studios and is a masterpiece of Art Deco.<br>
                        It is 850 feet tall and has been portrayed in many films and television shows.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        As the center of commerce and entertainment in New York City, Rockefeller Center in Manhattan has long been a prominent location.
                        Within the complex, theaters, stores, and restaurants created a thriving town that drew tourists from all over the world.
                        The Rainbow Room, located on the 65th floor, offered breathtaking vistas and superb cuisine, while the Radio City, a famous performance space that opened in 1932, presented lavish stage performances, films, and concerts.
                    </p>
                        Early on, the city's resiliency was symbolized by Rockefeller Center, New York City, which held public events including the well-known Christmas tree lighting ceremony, ice skating at the famed Rockefeller Plaza, and several festivals that still draw large audiences.
                    <p class="wow bounce"  data-wow-delay="0.3s">>
                        The complex was crucial in promoting public art and assisting different artistic endeavors.
                        Famous artists' sculptures and fountains can be seen at the Channel Gardens, which line the sidewalk between Fifth and Sixth Avenues.
                        These features create an outdoor gallery atmosphere. The famous Prometheus statue, which is covered in gold leaf and stands guard over the skating rink, has come to symbolize the complex.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.4s">>
                        Rockefeller Center, New York City has historical significance in addition to its cultural and aesthetic value.
                        Before moving to its present location in 1950, it hosted the United Nations General Assembly from 1946 to 1950 and held the Associated Press's headquarters during World War II.

                    </p>
                </div>
            </div>

            <div class="row my-5" id="RockefellerCenter">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce"  data-wow-delay="0.1s">
                        Rockefeller Center, New York City in Christmas
                    </h3>

                </div>
            </div>
                {{--2--}}
                <div class="row my-5">
                    <!-- First Row -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                                <!-- Left half of the article -->
                                <p>The "Rock Center," the center's subterranean concourse, was built during the Cold War to provide mobility and safety for important employees.
                                    <br>
                                    Rockefeller Center, New York City is still developing and adapting to the times.<br>
                                    <br>
                                    To accommodate current facilities and technological improvements, it has undergone several restorations and additions throughout the years, guaranteeing its relevance and appeal to a global audience.<br>
                                    <br>
                                    It still attracts visitors and residents alike today, offering a variety of shops, eateries, galleries, and events all year long.<br>
                                    <br>
                                    Rockefeller Jr.'s ambition and vision are evident throughout Rockefeller Center in Manhattan.<br>
                                    <br>
                                    Its outstanding architecture, cultural importance, and historical relevance have made it a legendary location that continues to influence New York City's identity.<br>
                                    <br>
                                    Rockefeller Center, New York City encapsulates the spirit of metropolitan life, attracting tourists from all over the world to experience its grandeur and beauty.<br>
                                    From breath-taking views to world-class performances.<br>
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 wow bounce" galleryimg="no"
                            data-wow-delay="0.1s">
                                <!-- Right third with an image -->
                                <img class="w-100 h-75 p-2"
                                    src="{{asset('images/rockefeller/Rockefeller Center, New York City in Christmas.jpg')}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="text-center d-block">Rockefeller Center, New York City in Christmas</small>
                            </div>
                        </div>
                    </div>
                </div>
                {{--2--}}
            <div class="row" id="ImportanceofRockefeller">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Importance of Rockefeller Center, New York City
                    </h3>
                </div>
            </div>
            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12   wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        In Manhattan, New York City, Rockefeller Center, New York City is a well-known monument with significant historical, cultural, and architectural value.<br>
                        It covers more than 22 acres and has come to represent American aspiration, creative expression, and civic involvement.<br>
                        This article will examine the numerous elements that contribute to Rockefeller Center, New York City's prominence as a significant and essential feature of the New York City landscape.<br>
                        <br>
                        First, it is impossible to overestimate the historical significance of Rockefeller Center, New York City in Manhattan.<br>
                        John D. Rockefeller Jr. planned for it to be built during the Great Depression as a commercial and cultural center that would benefit not only the city but the entire country.<br>
                        Thousands of employees were given jobs during its construction during a time of economic crisis, serving as a symbol of optimism and advancement during a depressing time.<br>
                        Because of its historical significance, Rockefeller Center, New York City is seen with a newfound feeling of admiration as a symbol of the tenacity and perseverance of the human spirit.
                        <br>
                    </p>
                </div>
            </div>

            <div class="row" id="wonderofarchitecture">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Rockefeller Center, New York City is a wonder of architecture
                    </h3>
                </div>
            </div>
            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12   wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p class="wow bounce "  data-wow-delay="0.1s">
                        The complex, which was created by Raymond Hood and Wallace Harrison, adopts the Art Deco aesthetic, which is distinguished by streamlined forms, striking geometric patterns, and elaborate decorative elements.<br>
                        One of the most recognizable and famous buildings on the New York City skyline is the 70-story art deco skyscraper known as the GE Building, or 30 Rockefeller Plaza, which serves as the complex's focal point.<br>
                        Rockefeller Center, New York City is a remarkable sight for both locals and visitors due to its aesthetic appeal and the meticulously designed structures around it.<br>
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.2s">
                        The dynamic cultural effect that Rockefeller Center, New York City in Manhattan has is another vital component of its prominence.<br>
                        Numerous prestigious organizations call the center home, including the New York City Ballet, Radio City Music Hall, and the Museum of Modern Art (MoMA).<br>
                        These cultural venues bring together performers, spectators, and artists from all over the world, adding to the city's diverse artistic community.<br>
                        Many people now look forward to the annual Radio City Christmas Spectacular, which stars the iconic Rockettes and is presented at the Music Hall.<br>
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.3s">
                        In addition to being a popular tourist site, Rockefeller Center in Manhattan is a thriving commercial center.<br>
                        The "Channel Gardens," its ground-floor concourse, is a popular spot for dining and shopping because it is home to premium stores, eateries, and cafés.<br>
                        Further highlighting its significance as a vibrant economic and social hub is the center's closeness to important transit hubs like Grand Central Terminal and the New York City subway system, which make it simple for both locals and visitors to reach.<br>
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.4s">
                        Rockefeller Center New York City is not just a well-liked tourist destination; it is also a booming business district.<br>
                        Due to the presence of upscale shops, diners, and cafés, the ground-floor concourse, known as "Channel Gardens," is a well-liked location for dining and shopping.<br>
                        The center's proximity to significant transit hubs like Grand Central Terminal and the New York City subway system, which make it straightforward for both locals and visitors to reach, further emphasizes its significance as a thriving economic and social center.<br>
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.5s">
                        Rockefeller Center, New York City serves as a representation of the tenacity, imagination, and cultural vitality of New York City.<br>
                        It is an essential component of the city's fabric because of its historical importance, magnificent architecture, cultural institutions, and variety of offerings.<br>
                        Rockefeller Center, New York City's significance cannot be overemphasized, from the economic influence it has in creating jobs to the cultural and recreational activities it provides.<br>
                        It serves as a constant reminder of the potential that may be realized through vision and tenacity and is a monument to the continuing spirit and ambition of human ingenuity.<br>
                    <br>
                    <h4>
                        Midtown Manhattan in New York City is home to the 19 business buildings that make up Rockefeller Center.
                    </h4>
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        The 22-acre complex has the following structures:
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p class="wow bounce "  data-wow-delay="0.1s">
                        <b>
                            30 Rockefeller Plaza (known as the GE Building)
                        </b><br>
                        50 St between 5 Avenue and 6 Avenue (Avenue of Americas), New York Ny 10112 USA.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.2s">
                        <b>
                            45 Rockefeller Plaza
                        </b><br>
                        It's 630 5th Avenue; it's between 50th and 51st Street; it's also between 5 Avenue and 6 Avenue (Avenue of Americans), New York. Ny 10111 USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.3s">
                        <b>
                            50 Rockefeller Plaza
                        </b><br>
                        Between 50th and 51st Street, it's on 6 Ave. (Avenue of Americas), New York.NY10020 USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.4s">
                        <b>
                            10 Rockefeller Plaza
                        </b><br>
                        Between 48th and 49th Street (the Avenue of Americans), New York Ny 10020, USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.5s">
                        <b>
                            The British Empire Building
                        </b><br>
                        620 5th Avenue, between 49th and 50th Street, New York, NY 10020, USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.6s">
                        <b>
                            La Maison Francaise
                        </b><br>
                        610 5th Avenue, between 49th and 50th Street, New York. NY 10112 USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.7s">
                        <b>
                            The International Building's North Tower and South Tower
                        </b><br>
                        It's known for its addresses, 45 Rockefeller Plaza and 630 Fifth Avenue.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.8s">
                        <b>
                            Associated Press Building
                        </b><br>
                        It moved from Rockefeller to 450 33rd at 10 Avenue.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.9s">
                        <b>
                        The RKO Building
                        </b><br>
                    1260 6th Avenue (Avenue of Americans), New York, NY 10020, USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="1.0s">
                        <b>
                            Time-Life Building
                        </b><br>
                        1 Rockefeller Plaza, 1271 6 Avenue (Avenue of Americans) between 48th and 49th Street, New York, NY 10020, USA
                    </p>
                    <p class="wow bounce "  data-wow-delay="1.2s">
                    These buildings hold offices, studios, shops, restaurants, and tourist attractions, including the NBC Studio Tour and the Top of the Rock Observation Deck.
                    </p>
                </div>
            </div>

            <div class="row my-5" id="EngineeringandDesign">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Engineering and Design Rockefeller Center, New York City
                    </h3>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Art Deco design
                    </h5>
                </div>
            </div>

            <div class="row">
            <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.2s">
                    <!-- Rest of the article -->
                    <p>
                        Rockefeller Center, New York City is a famous building complex noted for its outstanding architecture and design. It is situated in Manhattan, New York City.<br>
                        Its use of the Art Deco design element, which significantly influenced the center's visual appeal, is one noteworthy feature of the structure.<br>
                        In this post, we shall examine the architectural and design components that characterize the Rockefeller Center's Art Deco style.<br>
                        <br>
                        The 1920s and 1930s saw the rise of the Art Deco style, which was distinguished by its decorative, contemporary, and streamlined designs.<br>
                        It aimed to give the built environment a touch of elegance, glitz, and hope.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.2s">
                    <!-- Rest of the article -->
                    <p>
                        Rockefeller Center, New York City is a famous building complex noted for its outstanding architecture and design. It is situated in Manhattan, New York City.<br>
                        Its use of the Art Deco design element, which significantly influenced the center's visual appeal, is one noteworthy feature of the structure.<br>
                        In this post, we shall examine the architectural and design components that characterize the Rockefeller Center's Art Deco style.<br>
                        <br>
                        The 1920s and 1930s saw the rise of the Art Deco style, which was distinguished by its decorative, contemporary, and streamlined designs.<br>
                        It aimed to give the built environment a touch of elegance, glitz, and hope.<br>
                        These Art Deco tenets were incorporated into the architecture, sculptures, and interior spaces of the Rockefeller Center, New York City which was built between 1930 and 1939.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                The use of geometric forms is one of the Rockefeller Center, New York City's distinctive architectural elements.<br>
                                The Art Deco architectural style is evident in the clean lines, setbacks, and strong vertical focus of the complex's towers, including the centerpiece, the 70-story 30 Rockefeller Plaza.<br>
                                These geometric accents add to the center's overall grandeur and provide a spectacular skyline.<br>
                                <br>
                                The incorporation of ornamental features into Art Deco at Rockefeller Center in Manhattan is another vital component.<br>
                                The structure is covered with elaborate stone carvings, sculptures, and paintings.<br>
                                For instance, Paul Manship's renowned bronze statue of the Greek titan Prometheus from 1933 is in the Lower Plaza.<br>
                                A superb illustration of the sophistication and beauty associated with the Art Deco era is this sculpture, which stands for innovation and enlightenment.<br>
                                </p>
                                <p  class="wow bounce"  data-wow-delay="0.2s">
                                The Art Deco design is also present in the Rockefeller Center New York City towers' interiors.<br>
                                Luxurious materials like marble, stainless steel, and eye-catching lighting fixtures are used in the lobbies, corridors, and communal areas.<br>
                                "Rockefeller Concourse," a sizable underground concourse inside Rockefeller Center, New York City, is home to opulent stores and eateries with Art Deco accents.<br>
                                These rooms have an impression of refinement and grandeur thanks to the lighting fixtures, elaborate moldings, and sleek furnishings.<br>
                                <br>
                                Beyond the Rockefeller Center, New York City's structural components, an Art Deco influence is present. With its vivid and glittering decorations, the center's yearly Christmas tree exemplifies the classic Art Deco style.<br>
                                The tree and the surrounding plaza create a festive ambiance that reflects the aesthetic sensibility and spirit of the Art Deco period.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/rockefeller/Rockefeller Center, New York City.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Rockefeller Center, New York City</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.3s">
                    <!-- Rest of the article -->
                    <p>
                        Through its architectural style, ornamental accents, and integration of contemporary technology, Rockefeller Center New York City perfectly captures the essence of the Art Deco movement.<br>
                        The center's iconic position is a result of its geometric designs, colorful sculptures, opulent interiors, and emphasis on innovation.<br>
                        Rockefeller Center, New York City is a tribute to the grace, elegance, and enduring influence of this important architectural style by adopting Art Deco ideas.
                    </p>
                </div>
            </div>
            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.3s">
                    <!-- Rest of the article -->
                    <h5>
                        Well-known architects and designers of Rockefeller Center, New York City
                    </h5>
                </div>
            </div>
            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.2s">
                    <!-- Rest of the article -->
                    <p>
                        We will examine the history of Rockefeller Center, New York City and the contributions made by its renowned architects and designers.<br>
                        In the 1920s, John D. Rockefeller Jr., a well-known philanthropist and member of the Rockefeller family, had the idea for Rockefeller Center, New York City.<br>
                        <br>
                        The 1920s and 1930s saw the rise of the Art Deco style, which was distinguished by its decorative, contemporary, and streamlined designs.<br>
                        It aimed to give the built environment a touch of elegance, glitz, and hope.<br>
                        These Art Deco tenets were incorporated into the architecture, sculptures, and interior spaces of the Rockefeller Center, New York City which was built between 1930 and 1939.
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                He saw it as a futuristic urban place that would incorporate economic, artistic, and cultural components.<br>
                                Rockefeller Center, New York City assembled a group of architects and designers to create the project's physical and aesthetically pleasing components to realize his vision.<br>
                                <br>
                                Raymond Hood, an American architect well-known for his contributions to the Art Deco architectural movement, was one of the primary players engaged in the design of Rockefeller Center, New York City.<br>
                                The entire intricate grand plan was created by Hood and his architectural colleague, Wallace Harrison.<br>
                                 To capture the contemporary spirit of the time, they wanted to create a harmonic fusion of commercial buildings, public areas, and artistic components.<br>
                                <br>
                                The art deco skyscraper known as the GE Building, originally known as the RCA Building, is the recognizable focal point of Rockefeller Center in Manhattan.
                                The GE Building, which stands at 850 feet and was created by architect Raymond Hood, includes several offices as well as the renowned Rainbow Room restaurant and nightclub. It stands out as a remarkable representation of New York City's skyline thanks to its prominent setbacks and geometric embellishments.
                            </p>
                            <p class="wow bounce"  data-wow-delay="0.2s">
                                The Reinhard & Hofmeister architecture team made a substantial additional architectural contribution to the Rockefeller Center, New York City in (Manhattan).
                                They created La Maison Francaise and the International Building, which is currently known as the Comcast Building.

                                The International Building, a spectacular work of Art Deco architecture that was completed in 1935, housed the National Broadcasting Company's (NBC) headquarters.
                                French Gothic architecture is a highlight of the 1933-built La Maison Francaise, which has hosted several cultural events.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/rockefeller/45 Rockefeller Plaza in Fifth Avenue between 50 &51 Street.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">45 Rockefeller Plaza in Fifth Avenue between 50 &51 Street</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12 my-5 wow bounce"  data-wow-delay="0.2s">

                    <p class="wow bounce tiko"  data-wow-delay="0.1s">
                        Beyond the architecture, Rockefeller Center's interior decor and artwork are both significant.<br>
                        Several notable sculptures by renowned American artist Lee Lawrie decorate the area.<br>
                        The golden statue of Prometheus that stands in the middle of the Lower Plaza is among his best-known creations.<br>
                        The center's atmosphere is enhanced by Lawrie's elaborate artwork and meticulous sculptures, which also lend a touch of grandeur and aesthetic brilliance.<br>
                        <br>
                        Additionally, the interiors of Rockefeller Center New York City benefited from the cooperation between architects and designers.<br>
                        Its public spaces and several of its lobbies are decorated with mosaics, murals, and other works by accomplished artists, including José Maria Sert, Diego Rivera, <br>
                        and Isamu Noguchi.<br>
                        These works of art tell tales, honor history, and enhance the visitor's experience in many ways.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        Rockefeller Center, New York City is a striking example of the unwavering talent and creativity of its architects and designers.<br>
                        This famous complex has developed into a real symbol of architectural beauty and cultural relevance in the heart of Manhattan thanks to the collaboration of Raymond Hood, Wallace Harrison, Reinhard & Hofmeister, Lee Lawrie, and many more.<br>
                        Rockefeller Center continues to enchant tourists with its enduring appeal and remarkable design, from its soaring buildings to its elaborate sculptures and beautiful interiors.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Iconic Elements
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        The GE Building, which rises 70 floors high and has an observation deck called Top of the Rock that provides breathtaking panoramic views of the city, is the focal point of this work of art in architecture.<br>
                        <br>
                        Rockefeller Center, New York City outside spaces are also fascinating.<br>
                        The primary intersection is the famed Prometheus statue-adorned Rockefeller Plaza.<br>
                        This gilded artwork, created by sculptor Paul Manship, is prominently displayed in the plaza's middle and represents humanity's enlightenment.<br>
                        Millions of people travel to the plaza during the winter holidays to see the tree lighting ceremony as it is transformed into a winter wonderland with the presence of the iconic Rockefeller Center Christmas tree.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        The Channel Gardens, a collection of exquisitely designed gardens that serve as an entrance to various structures within the complex, are located right next to the plaza.<br>
                        These gardens offer a tranquil and pleasant ambiance during the busy city streets since they are decorated with seasonal flowers, plants, and elaborate fountains.<br>
                        <br>
                        Rockefeller Center, New York City Concourse, a subterranean concourse, is a crucial component of Rockefeller Center, New York City.<br>
                        The several buildings connected by this sizable subterranean complex provide easy access to places to eat, shop, and use services.<br>
                        During the colder months, when tourists and employees seek shelter from the winter weather, it is a hive of activity and a flourishing urban area.<br>
                        <br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        The enormous art collection that may be seen throughout Rockefeller Center, New York City will excite art lovers.<br>
                        Numerous murals, sculptures, and creative installations by well-known artists, including Diego Rivera, Isamu Noguchi, and Lee Lawrie, may be found there.<br>
                        These works of art honor the creative and cultural spirit and add to the complex's lively environment.<br>
                    <br>
                        Significant cultural events and entertainment productions have been held at Rockefeller Center, New York City.<br>
                        Many people now look forward to the annual Christmas Spectacular at Radio City, which stars the renowned Rockettes.<br>
                        The famed outdoor rink known as The Rink at Rockefeller Center, New York City has served as a focal point for ice-skating displays as well as television events, concerts, and other activities.
                    </p>
                </div>
            </div>

            <div class="row my-5" id="ActivitiesandAttractions">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Activities and Attractions Rockefeller Center, New York City
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Observation deck
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center p-4">
                        <!-- First Row -->
                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                        src="{{asset('images/rockefeller/Top of Rockefeller Center, New York City.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Top of Rockefeller Center, New York City</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        In the center of Manhattan in New York City, Rockefeller Center, New York City is a well-known complex that provides a wide range of attractions and activities.<br>
                        Rockefeller Center, New York City Observation Deck, which offers tourists stunning vistas of Manhattan, is one of this complex's most recognizable attractions.<br>
                        The different attractions and activities that the observation deck has to offer will be covered in this article.<br>
                        <br>
                        The 70th story of 30 Rockefeller Plaza houses the "Top of the Rock," or Rockefeller Center Observation Deck.<br>
                        Visitors may enjoy an unmatched 360-degree panoramic view of Manhattan from there.<br>
                        The three primary viewing decks of the observatory offer unobstructed views of well-known locations such as the Empire State Building, Central Park, Times Square, and the Hudson River.<br>
                        The view from the top of the rock is just breathtaking from dawn to sunset and even at night when the city is lit up.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        The observation deck not only offers breathtaking vistas, but it also has a number of interesting displays and amenities that improve the visiting experience.<br>
                        The "Radiance Wall," an interactive exhibit that tells the history of Rockefeller Center, New York City through gorgeous pictures and facts, is one of the key draws.<br>
                        It is the ideal method to discover the complex's extensive history and architectural significance.<br>
                        <br>
                        In addition, guests may check out the "Beam Walk," an interactive exhibit that lets them experience what it would be like to walk on a steel beam, much like the laborers who erected Rockefeller Center New York City.<br>
                        This exhibit offers a distinctive viewpoint on Rockefeller Center New York City complex, an engineering wonder.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        The observation deck has several art pieces and exhibitions for visitors who want to learn more about the city's art and culture.<br>
                        Rotating art exhibits in the "Breezeway" provide a lively and energetic ambiance.<br>
                        The "Mezzanine" also offers transient exhibitions that include the work of regional and international artists.<br>
                        <br>
                        Rockefeller Center New York City's observation deck provides guided tours that go in-depth on the building's history, architecture, and nearby sites to further improve the guest experience.<br>
                        These excursions offer fascinating insights and behind-the-scenes tales that enhance the experience and make it more memorable.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.4s">
                        The experience at Top of the Rock is not just available throughout the day.<br>
                        To see the spectacular city lights, it is strongly advised to travel in the evening.<br>
                        Visitors may take beautiful pictures of the lit-up skyline from the observation deck, preserving unforgettable memories.<br>
                        <br>
                        Visitors can explore more Rockefeller Center activities in addition to the viewing deck.<br>
                        The complex has a bustling shopping district with lots of shops, eateries, and cafés.<br>
                        Another must-see feature is the well-known ice-skating rink, which becomes a beautiful Christmas tree throughout the holiday season.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.5s">
                        Rockefeller Center, New York City Observation Deck is a must-see destination.<br>
                        <br>
                        provides unrivaled views of Manhattan, interesting displays, and a greater understanding of the background and traditions of this famous monument.<br>
                        The observation deck should be on everyone's schedule, locals, and visitors alike, whether they are in the city for business or pleasure.
                    </p>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        NBC Studio Tour
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                In the center of Manhattan, New York City, Rockefeller Center, New York City is a must-see location that provides a variety of attractions and activities for tourists of all ages.<br>
                                The NBC Studio Tour, which offers a fascinating look into the world of television production from behind-the-scenes, is one of the most well-liked attractions in Rockefeller Center, Manhattan.<br>
                                In this post, we shall examine the numerous attractions and activities provided by the NBC Studio Tour.<br>
                                <br>
                                You may walk through the famous Rockefeller Center's historic corridors as part of the interactive NBC Studio Tour.<br>
                                The tour gives guests the chance to learn about the inner workings of one of America's most well-known broadcasting networks while also learning about its rich entertainment past.<br>
                                The trip starts with a friendly welcome from professional tour guides, who provide intriguing information and tales about the history of NBC and its contribution to the development of television.<br>
                                <br>
                                You will get the chance to see the renowned NBC Studios, where some of the most well-known series in television history have been made, as you start the trip.<br>
                                The NBC Studio Tour gives the chance to view the sets where popular daytime dramas like "Days of Our Lives" and late-night legends like "The Tonight Show Starring Jimmy Fallon" are produced.<br>
                                It is breathtaking to see the exquisite attention to detail in each set, and guests get a greater respect for the ability and imagination that go into creating top-notch programming.<br>
                                <br>
                                The tour explores the technical facets of television production in addition to sets.<br>
                                Visitors are welcome to tour the control rooms and learn more about the innovative technology used in live broadcasting.<br>
                                You will learn about the complex operations of a television studio, from cameras to audio mixing boards.<br>
                                Because the tour is interactive, visitors may ask questions and interact with the tour guides, which adds to the experience's informative and entertaining qualities.<br>
                                <br>
                                The chance to observe actual production in progress is another appealing feature of the NBC Studio Tour.<br>
                                You can see live tapings or rehearsals going on, depending on the day and time of your visit.<br>
                                This is a rare opportunity to see the activity that goes on behind the scenes, providing you with a true view into the hectic world of television production.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/rockefeller/NBC studios in 50 Street between 5 & 6 Avenue, Rockefeller Center, New York City.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">NBC studios in 50 Street between 5 & 6 Avenue (Avenue of Americas), Rockefeller Center, NYC</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.2s">
                    <!-- Rest of the article -->
                    <p>
                        Fans of humor will enjoy a visit to the legendary Studio 8H, the setting for "Saturday Night Live”.<br>
                        It's exciting to be in the same place where comedic greats and current cast members have entertained audiences for years.<br>
                       The famed stage and the control room where the performance is run are both thoroughly examined during this portion of the trip.<br>
                       <br>
                       The NBC Studio Tour uses innovative technologies to improve the experience even further.<br>
                       Visitors can use augmented reality and virtual reality components to engage with the tour content at various times throughout the trip.<br>
                       Visitors may interact with the content in a fun and novel way thanks to these interactive elements, which offer a hands-on experience.
                    </p>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Radio City Music Hall
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                One of the most well-known entertainment destinations in the world, Radio City Music Hall is a historical monument situated in Manhattan's famed Rockefeller Center.<br>
                                It is renowned for its opulence, fascinating history, and enthralling concerts, and provides guests with a wide selection of attractions and activities that provide a unique experience.<br>
                                Here, we'll examine the many facets of Radio City, its features, and the events that may be attended there.<br>
                                <br>
                                Radio City Music Hall is most well-known for its top-notch performances, notably those of its legendary dance group, The Rockettes.<br>
                                The Christmas Spectacular event at the Music Hall has come to be known as The Rockettes due to their impeccable dance moves and breathtaking high kicks.<br>
                                This well-known Christmas custom is a must-see since it includes Santa Claus himself, glitzy costumes, and live music.<br>
                                Audiences are mesmerized by the Rockettes' performances because of their amazing accuracy and synchronization.<br>
                                <br>
                                In addition to the Christmas Spectacular, Radio City presents several performances, shows, and events all year.<br>
                                There is always something going on at this prestigious theater, from great performers to comedy performances.<br>
                                World-renowned musicians, bands, and orchestras may be seen performing, as well as modern music festivals and even Broadway-style musicals.<br>
                                There is something for every taste and interest, thanks to the broad selection of entertainment.<br>
                                </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                                src="{{asset('images/rockefeller/RADIO CITY in 50 Street & 6 Avenue of America.jpg')}}"
                                class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">RADIO CITY in 50 Street & 6 Avenue of America</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12 tiko  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        In addition to the concerts, the Music Hall also has several intriguing features. The venue's outstanding interior and exterior design are among its most distinguishing qualities.<br>
                        The lavish Art Deco design exudes grandeur and elegance with its spectacular chandeliers, intricate murals, and gold leaf accents.<br>
                        One of the biggest indoor stages in the world, The Great Stage, is a wonder in and of itself because of its hydraulic system, which enables it to be reconfigured into limitless configurations.<br>
                        <br>
                        The Stage Door Tour offers a unique insider's perspective on Radio City Music Hall's heritage and history for individuals who are interested in both.<br>
                        Visitors may tour the Art Deco lobby, marvel at the grand auditorium, and even have a glimpse inside the fabled Roxy Suite, which was formerly occupied by the iconic performer Samuel Lionel "Roxy", under the guidance of professional guides.<br>
                        <br>
                        The tour provides a look at the rich history and production methods that have made Radio City a benchmark for excellence in entertainment.<br>
                        <br>
                        In addition to shows and tours, Radio City is a popular location for special occasions, business meetings, and private parties.<br>
                        The Roxy Suite and the opulent private dining rooms, two of its flexible event spaces, may be tailored to suit different event sizes and themes.<br>
                        The elegance and grandeur of the Music Hall provides a memorable backdrop for every occasion, from weddings and galas to product launches and award ceremonies.<br>
                        <br>
                        Radio City Music Hall is a cultural landmark in the center of Manhattan's bustling city.<br>
                        Audiences from all over the world are delighted and entertained by its world-class concerts, fascinating spectacles, and mesmerizing performances by The Rockettes.<br>
                        The experience is further enhanced by the venue's stunning architecture, behind-the-scenes tours, and adaptable event rooms.<br>
                        Whether you live in New York or are just visiting, a trip to the Music Hall is sure to enthrall, inspire, and make you want more.
                    </p>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Ice Skating Rink
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                In the center of Manhattan, New York City, the Rockefeller Center, New York City is a well-known landmark that provides a wide range of entertainment options for tourists.<br>
                                The renowned ice-skating rink at Rockefeller Center in Manhattan, which draws millions of tourists each year, is one of the building's principal attractions.<br>
                                This article will examine the numerous sights and things to do near the Rockefeller Center ice skating rink.<br>
                                <br>
                                The Rink, commonly known as the Rockefeller Center Ice Skating Rink, is a magical outdoor ice-skating experience that captures the genuine spirit of winter in New York City.<br>
                                The Rink, which is over 122 feet long and 59 feet wide, offers thrilling and genuine skating experiences to individuals of all ages and skating abilities.<br>
                                <br>
                                The Rink's breathtaking background is one of its most notable characteristics.<br>
                                Skaters are flanked by the magnificent Rockefeller Center New York City, which has Art Deco architecture and is decked out in holiday decorations, while they glide over the ice.<br>
                                Visitors are transported into a world of fantasy by this magnificent environment, especially during the holidays when the iconic Rockefeller Center Christmas Tree is proudly on display.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Ice Skating Rink at Rockefeller Center, New York City.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Ice Skating Rink at Rockefeller Center, New York City</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <p class="wow bounce tiko"  data-wow-delay="0.2s">
                        <br>
                        The Rink provides a variety of services and activities in addition to its breath-taking vistas to improve the skating experience.<br>
                        Beginner skating classes are provided, offering professional direction and training to aid people in learning or enhancing their skating abilities.<br>
                        These courses give you the chance to skate on the ice with grace, whether you're a beginner or an expert.<br>
                        <br>
                        The Rink provides group packages and extraordinary events for people looking for a fun day out with friends and family.<br>
                        Making enduring moments skating with friends or loved ones while taking in the sparkling lights and holiday music in the backdrop.<br>
                        <br>
                        In addition, The Rink conducts a variety of theme evenings, such as disco and vintage nights, giving the skating experience a unique twist.
                        Visitors may rehydrate in The Igloo, the chalet-style restaurant at The Rink, after an exciting time on the ice.<br>
                        To refuel and revive skaters, this cozy location provides a variety of delectable snacks, hot drinks, and comfort meals.<br>
                        The Igloo makes sure that patrons may indulge in delectable snacks while enjoying the lively ambiance, serving anything from hearty soups to traditional hot chocolate.<br>
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>

                        In addition to the skating rink itself, Rockefeller Center, New York City is home to a variety of additional attractions.<br>
                        The iconic Prometheus monument, which is regarded as the Lower Plaza's focal point and makes for an ideal photo opportunity, stands tall and proud.<br>
                        <br>
                                The Channel Gardens, which connect Fifth Avenue to The Rink and offer a spectacular promenade, are covered with exquisitely maintained flora and seasonal accents.<br>
                                <br>
                                Additionally, guests may tour the GE Building's Top of the Rock Observation Deck.<br>
                                <br>
                                Visitors are greeted with unrivaled panoramic views of the New York City cityscape after climbing 70 stories.<br>
                                The observation deck offers a distinctive vantage point of Manhattan and a sight of well-known sites, including Central Park and the Empire State Building.<br>
                                A classic New York City experience is ice skating at Rockefeller Center New York City.<br>
                                The Rink provides both residents and visitors with an exciting and wonderful trip because of its magnificent surroundings, numerous conveniences, and variety of activities.<br>
                                The ice-skating rink at Rockefeller Center New York City ensures a thrilling and spectacular experience that perfectly embodies the essence of winter in the Big Apple, regardless of your skating ability.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Ice Skating Rink at Rockefeller Center, New York City_1.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Ice Skating Rink at Rockefeller Center, New York City</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Top of The Rockefeller Center, New York City
                    </h5>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        A must-see site in the center of Manhattan, New York City, is the Top of Rockefeller Center, New York City.<br>
                        It is without a doubt one of the most recognizable locations in the Big Apple, offering spectacular panoramic views, a rich history, and a variety of activities.<br>
                        <br>
                        The Top of the Rockefeller Center, New York City observation deck is located on the 70th level of the Rockefeller Plaza and is 850 feet tall.<br>
                        Visitors may enjoy unrivaled views of the spectacular New York City skyline from here, which includes well-known sites like the Empire State Building, Central Park, the Statue of Liberty, and the Hudson River.<br>
                        The views from the top of the Rockefeller Center, New York City are incredibly breathtaking and provide a fantastic backdrop for treasured photos, whether you visit during the day or at night.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Rockefeller Center, New York City Tour, which takes you on an enlightening trip through the history and construction of the monument, is one noteworthy feature.<br>
                        The trip highlights Art Deco architecture, recounts intriguing construction-related tales, and offers a behind-the-scenes look at the NBC studios and Radio City.<br>
                        It is guided by expert tour guides.<br>
                        <br>
                        Rockefeller Center, New York City is home to several works of art for art lovers.<br>
                        The public art exhibits within the center are a treasure trove, with standout pieces like Prometheus, a majestic statue covered in gold, and the Channel Gardens, which feature seasonal arrangements created by skilled horticulturists.<br>
                        The breathtaking painting painted by famous muralist José Mara Sert may be seen on the subterranean Concourse Level, where the artistic splendor continues.<br>
                        <br>
                        Wintertime visitors who like ice skating go to the Rockefeller Center, which is home to the renowned Rockefeller Center Ice Rink.<br>
                        Gliding around the ice while taking in the festive ambiance is an experience unlike any other, particularly when surrounded by towering buildings and shimmering lights.<br>
                        The Rockefeller Center, New York City Ice Rink offers an enjoyable and memorable pastime for people of all ages, regardless of whether they are experienced skaters or beginners.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Foodies will enjoy the variety of gastronomic treats available at Rockefeller Center, New York City.<br>
                        There is something to suit every appetite, from fancy eateries to informal dining alternatives.<br>
                        Enjoy mouthwatering foreign food, a traditional New York hot dog from a street vendor, or a cup of coffee at one of the several cafés dotted about the complex.<br>
                        <br>
                        Rockefeller Center, New York City becomes a mystical winter paradise as the Christmas season draws near.<br>
                        The renowned Rockefeller Center Christmas Tree, a picture of joy and optimism, serves as the centerpiece.<br>
                        To get into the magical Christmas atmosphere, attend the annual tree-lighting ceremony or just wander among the brilliant lights and seasonal décor.
                    </p>
                </div>
            </div>


            <div class="row my-5" id="EventsandEntertainment">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Events and Entertainment
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Annual Christmas Tree Lighting at Rockefeller Center, New York City
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                One of the most anticipated and cherished holiday traditions is the yearly lighting of the Christmas tree at Rockefeller Center, New York City.<br>
                                It is a custom that has been carried out since 1933 and continues to captivate both residents and visitors.<br>
                                <br>
                                Every year, the Rockefeller Center is transformed into a winter wonderland when the famous Christmas tree takes center stage, usually in late November or early December.<br>
                                The majestic Norway spruce tree, which frequently reaches heights of over 75 feet, is hand-picked and transported to Rockefeller Plaza from various locations around the United States.<br>
                                During the holiday season, the tree takes on a symbolic meaning of hope, joy, and cohesion.<br>
                                <br>
                                The anticipation for the yearly tree-lighting event is considerable.<br>
                                Thousands of people assemble in and around Rockefeller Plaza to see this beautiful display, despite the frigid weather.<br>
                                The mood is jovial, with anticipation and a festive spirit permeating the air.<br>
                                <br>
                                The tree is a stunning sight to see because it is decked out with hundreds of vibrant LED lights.<br>
                                Every branch has ornaments that have been carefully put on them, lighting the plaza with an amazing show of sparkling brightness.<br>
                                The tree is adorned with sparkling decorations that depict various themes in addition to lights.<br>
                                Every year delivers a distinctive visual extravaganza, from customary lights and ribbons to elaborate homemade displays.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/50 Street Between 5 & 6 Avenue, Tree Christmas at Rockefeller Center New York city.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">50 Street Between 5 & 6 Avenue, Tree Christmas at Rockefeller Center New York city</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 my-5 wow bounce"  data-wow-delay="0.1s">
                    <p class="tiko">
                        Celebrity appearances, notable visitors, and live musical performances add to the joyful atmosphere at the tree lighting event itself.<br>
                        Renowned performers and musical ensembles hit the stage to wow the audience with seasonal standards and innovative tunes.<br>
                        People all over the world may take part in the joy and excitement of this big festival thanks to the live television broadcasts of the performances.<br>
                        In addition to the tree lighting ceremony, Rockefeller Center, New York City hosts a variety of additional holiday-themed events and attractions.<br>
                        Visitors may glide over the ice while surrounded by the enchanted atmosphere of the holiday season at the famous ice-skating rink, which is situated beneath the enormous Christmas tree.<br>
                        Many families establish the custom of going to the rink to produce priceless memories.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        Furthermore, Rockefeller Center, New York City is only a short stroll from Radio City, where the renowned Rockettes present their renowned Christmas spectacular display.<br>
                        This acclaimed show has captivated audiences for decades with its exciting dance sequences and stunning costumes.<br>
                        <br>
                        During the Christmas season, the area around Rockefeller Center, New York City is also breathtaking to see.<br>
                        The streets are decked with dazzling lights, holiday accents, and intricately crafted store window displays that enchant and inspire tourists.<br>
                        The festive mood is heightened by the lively environment and throngs of people who are having an enjoyable time.<br>
                        <br>
                        A beloved custom that captures the wonder and joy of the holiday season is the yearly lighting of the Christmas tree at Rockefeller Center, New York City.<br>
                        For everyone in attendance, the splendor of the lit tree combined with live entertainment and celebrations makes for a magical experience.<br>
                        It is a well-known occasion that unites people and offers happiness, warmth, and awe to everyone who sees it.<br>
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Summer concert series
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                In addition to being a well-known landmark in Manhattan, New York City, Rockefeller Center, New York City serves as a focal point for a variety of annual events and entertainment.<br>
                                The Summer Concert Series is one of Rockefeller Center's most thrilling summertime events.<br>
                                This yearly music festival attracts thousands of guests from all over the world and features a wide variety of great musicians and bands.<br>
                                <br>
                                Music enthusiasts of all ages and tastes can be found together at the highly anticipated Summer Concert Series at Rockefeller Center, New York City.<br>
                                The series begins in June and runs through the summer, presenting an exciting fusion of pop, rock, jazz, and classical music.<br>
                                The performances are held at Rockefeller Plaza, a renowned outdoor venue surrounded by Midtown Manhattan's beautiful architecture and vibrant energy.<br>
                                <br>
                                Every summer, a diverse group of well-known performers and up-and-coming musicians are included in the concert series roster.<br>
                                Legendary performers like Bruce Springsteen, Madonna, Beyoncé, and Elton John have performed in the past, giving the audience moments they won't soon forget.<br>
                                The organizers try to exhibit both known performers and up-and-coming talents, offering a dynamic and interesting program for every visitor.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Between 49 &50 Street and 5 Avenue & 6 Avenue, Rockefeller Center, NYC.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Between 49 &50 Street and 5 Avenue & 6 Avenue, Rockefeller Center, NYC</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce tiko"  data-wow-delay="0.2s">
                    <p>
                        <br>
                        <br>
                        Rockefeller Center, New York City's Summer Concert Series is renowned for its superb production values and captivating atmosphere.<br>
                        Modern sound and lighting equipment turn Rockefeller Plaza into a spellbinding musical setting, and the stage is positioned in front of the famous Prometheus monument.<br>
                        The performances offer a singular and exhilarating experience unlike any other, standing in the center of Manhattan with the towering buildings surrounding you.<br>
                        <br>
                        Visitors to the Summer Concert Series have a wide range of leisure alternatives in addition to the exciting performances.<br>
                        Concertgoers may enjoy delectable snacks and meals while taking in the music at food stands set up with a broad variety of culinary treats from across the world.<br>
                        The mood is further improved with interactive exhibitions and art pieces, which encourage participation and creativity among all visitors.<br>
                        <br>
                        The Rockefeller Center, New York City Summer Concert Series also provides a venue for civic involvement and humanitarian organizations.<br>
                        Along with the musical acts, the organizers work with several charitable groups to promote awareness of and collect money for significant social concerns.<br>
                        This gives each event a sense of direction and significance and fosters camaraderie and altruism among the guests.<br>
                        <br>
                        When you attend a performance at Rockefeller Center New York City in the summer, you get to experience not just fantastic music but also the vivid culture and excitement of New York City.<br>
                        The city's soul is captured through the Summer Concert Series, which presents a kaleidoscope of artistic expression, a wide range of musical styles, and an irreplaceable feeling of community.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Public art installations
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        An iconic location with spectacular architecture, art, and culture Rockefeller Center New, York City, New York City.<br>
                        The center is praised for its stunning public art projects, which enhance the energy and appeal of this bustling hub, in addition to its iconic structures.<br>
                        Visitors may immerse themselves in a wide variety of artistic expressions, exhibitions, and events that highlight the rich cultural legacy and current creativity throughout the year.<br>
                        This article will look at some of the prominent Rockefeller Center public art works as well as the activities and entertainment that surround them.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center p-4">
                        <!-- First Row -->
                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-50 p-2"
                        src="{{asset('images/rockefeller/Rockefeller Center, New York City_1.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Rockefeller Center, New York City</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        The towering statue of Prometheus is one of Rockefeller Center, New York City's most well-known works of art.<br>
                        This bronze masterwork, which was created in 1934 by the artist Paul Manship, dominates the Lower Plaza of the convention center.<br>
                        Prometheus, a character from Greek mythology who represents knowledge and enlightenment, is shown giving fire to humanity in the sculpture.<br>
                        Visitors and residents alike are drawn in by its golden shape, which stands out brilliantly against the backdrop of New York City.<br>
                        <br>
                        The Channel Gardens are another fascinating work of art.
                    </p>
                </div>
            </div>
            {{--Video--}}



            <div class="row">
                <div class="col-12 text-center p-4">
                        <!-- First Row -->
                    <div class="col-12 col-lg-4 tiko mx-auto">
                        <!-- Centered image with text -->
                        <div class='video tiko'>
                        <video autoplay muted id="myVideo" loop class="w-100 h-75 p-2" onended="showImages()">
                            <source class="" src="{{ asset('images/rockefeller/20211224_183710.mp4') }}" type="video/mp4">
                        </video>
                        </div>
                        <small class="d-block text-center"></small>
                    </div>
                </div>
            </div>



            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        These gardens, which are located around the sunken plaza, include several fountains that cascade down a staircase and are decorated with seasonal floral displays.<br>
                        The Channel Gardens are beautifully altered all year with exhibits that represent the many holidays and seasons.<br>
                        The famous Christmas tree takes center stage throughout the winter holidays, surrounded by festive holiday decorations and ice-skating rinks.<br>
                        The grounds are filled with vibrant blooms throughout the spring, offering a gorgeous scene for guests to enjoy.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        The setting up of Rockefeller Center, New York City Christmas Tree is one of the most eagerly anticipated yearly attractions.<br>
                        This cherished custom, which began in 1931, draws millions of tourists from all over the world.<br>
                        The tree, which is often a beautiful Norway spruce, is decked out with tens of thousands of sparkling lights and a gorgeous star on top.<br>
                        The celebrated lighting ceremony, which includes live performances by well-known performers, ushers in the holiday season in New York City.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        Beyond these renowned pieces, the Rockefeller Center, New York City continually develops a vibrant art program with changing installations and displays.<br>
                        The center works with well-known artists and groups to present provocative works to the public.<br>
                        Visitors may discover a wide variety of artistic expressions that push limits and spark dialogue, from modern sculptures to innovative multimedia shows.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.4s">
                        Visitors to Rockefeller Center, in New York City, may enjoy a range of entertainment alternatives in addition to the permanent and ad hoc art pieces.<br>
                        Within the property lies the legendary Radio City, which plays host to famous theater productions, concerts, and the Rockettes.<br>
                        It is a must-visit location for both visitors and residents because of its magnificent Art Deco interior and large stage.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.5s">
                        Rockefeller Center, New York City also organizes unique occasions and festivals all through the year.<br>
                        There is always something spectacular going on at this vibrant center, from outdoor concerts and dancing performances to gourmet festivals and fashion exhibitions.<br>
                        To keep informed of the most recent events and to organize their visit appropriately, visitors can consult the center's website or ask questions at the information desk.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.6s">
                        Numerous public art projects may be seen in Rockefeller Center, New York City, New York City, which adds to the area's thriving cultural scene.<br>
                        Visitors are invited to enjoy the beauty and ingenuity that abound thanks to these creative manifestations, which range from the captivating Prometheus monument to the always-changing Channel Gardens.<br>
                        Visitors may take in a broad variety of entertainment in addition to the art, including live concerts at the Radio City Music Hall and several events held all year.<br>
                        Rockefeller Center, New York City delivers a rich and comprehensive cultural experience, whether visitors are admiring historic sculptures or taking part in seasonal activities.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 my-5 wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Art Exhibitions
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        In addition to being a business hub, Rockefeller Center, New York City, which is situated in Manhattan in New York City, is renowned for its thriving art scene and extensive cultural history.<br>
                        This famous monument, which has a history dating back to the 1930s, has come to be associated with art exhibitions, occasions, and entertainment.<br>
                        <br>
                        The famed outdoor plaza, which has several sculptures and art exhibits, is one of Rockefeller Center's most recognized features.<br>
                        The Paul Manship sculpture of Prometheus is one of the plaza's most recognizable images.<br>
                        The Greek mythical character is portrayed in this gilded bronze statue, which is a favorite among both tourists and residents.<br>
                        Numerous art exhibitions featuring the creations of well-known international artists are held at Rockefeller Center, New York City (Manhattan) throughout the year.<br>
                        These shows feature a variety of creative mediums, such as mixed-media installations, sculpture, painting, and photography.<br>
                        The Center provides a venue for both experienced and up-and-coming artists to exhibit their talent to a broad audience.<br>
                        <br>
                        Contemporary art is included in a rotating program at Rockefeller Center's Art in Focus exhibition series.<br>
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                For artists who are experimenting with new mediums and breaking down barriers in the art world, this series offers a forum.<br>
                                Think-provoking pieces that address societal concerns, cultural heritage, and personal tales are what viewers may anticipate seeing.<br>
                                <br>
                                In addition to the changing exhibits, Rockefeller Center New York City also holds festivals and yearly art events.<br>
                                The annual lighting of the Christmas tree at Rockefeller Center throughout the holiday season is one such well-liked occasion.<br>
                                The grand Christmas tree serves as the focal point for artistic exhibits and performances that commemorate the holiday spirit.<br>
                                It is frequently decorated with brilliant lights and ornaments.<br>
                                <br>
                                The Summer Garden & Art Festival is an important event that takes place at Rockefeller Center, New York City (Manhattan).<br>
                                This event, which takes place every year, turns the Rockefeller Center Plaza into a lush garden, complete with colorful flowers and plants.<br>
                                With carefully chosen exhibitions and installations that integrate nature into the urban landscape, the festival provides the ideal fusion of horticulture and art.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Rockefeller center, New York City_2.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Rockefeller center, New York City</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="Businessandcommercial">
                <!-- Second Row -->
                <div class="col-lg-12  wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        Business and commercial Spaces
                    </h3>
                </div>
            </div>
            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Office Buildings
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce"  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                Rockefeller Center, New York City's office towers, which provide first-class accommodations for a variety of enterprises, are one of its distinguishing characteristics.<br>
                                There are several notable structures within the complex, including the General Electric Building, 75 Rockefeller Plaza, the Time-Life Building, and 30 Rockefeller Plaza, also known as the Comcast Building or the recognizable 30 Rock.<br>
                                Modern amenities and innovative architecture in these structures draw a wide range of corporate tenants.<br>
                                <br>
                                Rockefeller Center, New York City's structures provide the perfect setting for companies of various kinds, from modest start-ups to enormous global conglomerates.<br>
                                Tenants benefit from being close to important financial institutions, media firms, and well-known international brands because of their enviable position in the center of Manhattan.<br>
                                The center's advantageous position also offers quick access to transit, making it practical for both commuters and tourists.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/50 street between 5 & 6 Avenue in Manhattan, Rockefeller Center, New York City.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">50 street between 5 & 6 Avenue in Manhattan, Rockefeller Center, New York City</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce tiko"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p class="my-5">
                        Rockefeller Center, New York City offers several facilities and services in addition to first-rate office space to meet the demands of its tenants.<br>
                        The complex's extensive collection of shops, eateries, cafés, fitness centers, and luxury hotels guarantees that its residents have access to a wide range of leisure and lifestyle alternatives.<br>
                        These facilities help create a lively, dynamic workplace that encourages cooperation and productivity among workers.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce "  data-wow-delay="0.2s">
                            <!-- Left half of the article -->
                            <p>
                                Additionally, Rockefeller Center, New York City encompasses more than simply office and retail space.<br>
                                The world-famous Radio City Music Hall and the yearly Christmas Tree Lighting event are just two examples of the city's celebrated cultural attractions.<br>
                                Additionally, throughout the year, the center features a variety of art exhibits, seasonal markets, and events that draw both residents and visitors.<br>
                                Rockefeller Center, New York City's administration works hard to preserve the building's reputation as a prime commercial location.<br>
                                The facilities are kept up to date with the most recent industry standards and technical developments thanks to ongoing restoration and modernization initiatives.<br>
                                This dedication to quality draws companies searching for a distinguished location in one of the most well-known business areas in the world.<br>
                                <br>
                                In Manhattan, New York City, Rockefeller Center. New York City is a vibrant center for businesses and retail establishments.<br>
                                It is the perfect option for businesses looking for a prominent address in the center of Manhattan due to its unique office buildings, fantastic location, and world-class facilities.<br>
                                Rockefeller Center, New York City has a long history and a buzzing environment that help it stand as a testament to business success and innovation.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 tiko">
                            <!-- Right third with an image -->

                             <div class='video tiko'>
                                <video autoplay muted id="myVideo" loop class="w-100 h-75 p-2" onended="showImages()">
                                    <source class="" src="{{ asset('images/rockefeller/20201220_125513.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce my-3"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h5>
                        Corporate Headquarters
                    </h5>
                    <br>
                    <p class="wow bounce "  data-wow-delay="0.1s">
                        In the center of Manhattan, New York City, Rockefeller Center, New York City is a well-known collection of office and retail buildings where several company offices are housed.<br>
                        This famous monument, which covers 22 acres, is a representation of New York's thriving financial center.<br>
                        Let's explore the several facets of Rockefeller Center's commercial and corporate offerings.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.2s">
                        The Rockefeller family created Rockefeller Center, New York City as a master-planned complex in the early 1930s.<br>
                        Today, it continues to be a top choice for businesses looking for excellent office spaces in one of the city's most affluent neighborhoods.<br>
                        The center is made up of 19 high-rise structures that together offer almost 8 million square feet of commercial space.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.3s">
                        The outstanding architectural architecture of Rockefeller Center, New York City is one of its main draws for businesses.<br>
                        The structures feature a tasteful fusion of Art Deco and Modernist elements, resulting in a graceful and unique skyline.<br>
                        To meet different company demands, the center offers a variety of office alternatives, from tiny startups to global businesses.<br>
                        <br>
                        In addition, Rockefeller Center, New York City provides innovative amenities and services catered to business needs.<br>
                        These consist of conference spaces, meeting rooms, high-speed internet access, round-the-clock security, plenty of parking, and first-rate transit options.<br>
                        The management team of the center maintains a smooth working environment and attends to the various demands of its tenants.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.4s">
                        Rockefeller Center, New York City's location only adds to its allure.<br>
                        It is close to important financial institutions, legal firms, media corporations, and other corporate entities because it is in Midtown Manhattan.<br>
                        Because of the proximity, it fosters networking, cooperation, and business prospects, making it a desirable location for company headquarters.
                    </p>
                    <p class="wow bounce "  data-wow-delay="0.1s">
                        Numerous well-known corporations, including NBC Universal, Time Inc., Estée Lauder Companies, and Deloitte, have made Rockefeller Center, New York City their corporate headquarters.<br>
                        The center has a distinguished reputation and is significant historically, which lends an air of respect and legitimacy to the businesses situated there.<br>
                        <br>
                        Rockefeller Center, New York City also provides a wide range of retail spaces in addition to corporate offices.<br>
                        The center offers upscale clothing retailers, well-known restaurants, and entertainment options for both tenants and guests.<br>
                        As a result, a vibrant environment is created in which people can successfully combine their personal and professional lives.
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce my-3"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <p>
                        The renowned complex known as Rockefeller Center, New York City is situated in Manhattan, New York City, and is well-known for its flourishing business and commercial areas.<br>
                        Among its many amenities, the Rockefeller Center offers first-rate conference and event facilities that can accommodate a wide range of corporate requirements.<br>
                        <br>
                        The facility offers a wide range of adaptable spaces ideal for meetings, conferences, seminars, and other business events.<br>
                        These locations are renowned for their innovative technology, luxurious facilities, and beautiful architecture.<br>
                        Rockefeller Center ensures that each corporate event creates a memorable impression with its combination of premium elegance and useful practicality.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- First Row -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 wow bounce "  data-wow-delay="0.3s">
                            <!-- Left half of the article -->
                            <p>
                                The Rainbow Room is a well-known event location at Rockefeller Center, New York City.<br>
                                This classic location provides a luxury environment for business meetings and high-end parties with its breath-taking views of the city skyline.<br>
                                The Rainbow Room, which features gorgeous crystal chandeliers, a roomy dance floor, and first-rate service, can host both small and large events.<br>
                                <br>
                                The 620 Loft & Garden is a rooftop location with a distinctive and tranquil atmosphere that is ideal for smaller conferences or private events.<br>
                                This hidden gem provides panoramic views of Rockefeller Plaza and St. Patrick's Cathedral and is perched atop the famed Channel Gardens, making it the perfect setting for any event.<br>
                                <br>
                                The Radio City Music Hall, which is renowned for its opulence and historical significance, also has adaptable event rooms that are suited for sizable conferences and presentations.<br>
                                Businesses can conduct large-scale events thanks to its excellent theater, which can accommodate more than 6,000 people.<br>
                                Modern technology is available in it, enabling flawless performances and displays.<br>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 wow bounce"  data-wow-delay="0.1s">
                            <!-- Right third with an image -->
                            <img class="w-100 h-75 p-2"
                            src="{{asset('images/rockefeller/Rockefeller Center, New York City in Summer.jpg')}}"
                            class="img-fluid" alt="Article Image">
                            <small class="text-center d-block">Rockefeller Center, New York City in Summer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="Avenueshopping">
                <!-- Second Row -->
                <div class="col-lg-12 wow bounce my-3"  data-wow-delay="0.1s">
                    <!-- Rest of the article -->
                    <h3>
                        The Fifth Avenue shopping district is renowned for its upscale retail stores
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        A well-known landmark in Manhattan, New York City, Rockefeller Center, New York City is renowned for its fascinating past, beautiful architecture, and lively environment.<br>
                        It is in the middle of the city, covers 22 acres, and consists of 19 commercial structures that link the Theater Zone and the Fifth Avenue retail zone.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        Rockefeller Center, New York City is known for its majestic buildings in the Art Deco style, which perfectly capture the opulence and ingenuity of the time.<br>
                        The renowned GE Building, commonly known as 30 Rockefeller Plaza, serves as the complex's focal point.<br>
                        From its observatory, Top of the Rock, this majestic building provides stunning views of the city.<br>
                        A panoramic view of Manhattan, including the famous Empire State Building and Central Park, is available to visitors who ascend to the tower's spectacular observation deck.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        Rockefeller Center, New York City is a center of entertainment and cultural significance in addition to being an architectural wonder.<br>
                        On the property, the legendary Radio City Music Hall presents top-notch shows, including the celebrated Rockettes' Christmas Spectacular.<br>
                        The location has come to be associated with captivating performances, live shows, and theatrical extravaganzas.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.4s">
                        During the holiday season, the famous ice-skating rink at Rockefeller Center Manhattan is transformed into a mystical winter paradise.<br>
                        A beloved yearly ritual that draws tourists from all over the world is the lighting of the enormous Christmas tree at Rockefeller Center.<br>
                        The tree stands for tall, stunning spectators with its many sparkling lights and spreading festive happiness.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center p-4">
                        <!-- First Row -->
                    <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75"
                        src="{{asset('images/rockefeller/Famous Store Saks in Front of Rockefeller Center in Fifth Avenue.jpg')}}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Famous Store Saks in Front of Rockefeller Center in Fifth Avenue</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Due to its Fifth Avenue location, the center is in the center of Manhattan's top retail area.<br>
                        Rockefeller Center, New York City provides a typical New York shopping experience due to its proximity to upscale shops, iconic retailers, and prominent department stores.<br>
                        Visitors may tour the flagship locations of well-known companies like Saks Fifth Avenue, Bergdorf Goodman, and Tiffany & Co. just a few feet away.<br>
                        Additionally, the road is lined with upscale designer boutiques and specialized shops that sell a variety of clothing, jewelry, cosmetics, and other items.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.2s">
                        Numerous cultural sites can be found on Fifth Avenue in addition to the bustling commercial district.<br>
                        It is peppered with renowned institutions that house an amazing collection of works of art, including the Museum of Modern Art (MoMA) and the Frick Collection.<br>
                        The avenue is also the location of the yearly Macy's Thanksgiving Day Parade, which attracts crowds of all ages with its spectacular floats, marching bands, and enormous balloons.<br>
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.3s">
                        The Rockefeller Center, New York City and the Fifth Avenue shopping area perfectly capture the soul of Manhattan with their combination of history, art, entertainment, and shopping.<br>
                        This dynamic region provides a plethora of activities to discover and enjoy, whether you're looking for architectural brilliance, cultural encounters, or a treasured shopping experience.<br>
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5 class="wow bounce my-3"  data-wow-delay="0.1s">
                        casual Dining options: cafes and bakeries
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        In the center of Manhattan, New York City, at Rockefeller Center, New York City, there are several casual eating establishments that may accommodate a wide range of tastes and preferences.<br>
                        There are many alternatives available, whether you're searching for a fast snack or a leisurely supper.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        The Rock Center Café is a well-liked place for informal eating in Rockefeller Center.<br>
                        This restaurant is tucked away in the center of the property and offers a warm ambiance with a variety of lively indoor and outdoor dining options.<br>
                        The menu offers a wide selection of American food, including robust salads, sandwiches, steaks, and seafood meals.<br>
                        It's a terrific spot to grab a quick lunch or dinner because of its convenient location and warm atmosphere.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        The Sea Grill is a great option for people looking for a more relaxed atmosphere.<br>
                        This seafood restaurant, which is housed in the renowned Rink at Rockefeller Center, provides stunning vistas and a welcoming atmosphere.<br>
                        The menu offers a wide selection of meals made with fresh seafood, such as sushi, oysters, and mouthwatering fish.<br>
                        The Sea Grill is ideal for a laid-back date night or a leisurely supper with friends thanks to its classy yet relaxed ambience.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Go to Bill's Bar & Burger if you're in the mood for some comfortable cuisine.<br>
                        This iconic American burger place has a laid-back, welcoming environment that's ideal for a light dinner.<br>
                        Juicy burgers, crunchy fries, and delectable milkshakes are all available on the menu.<br>
                         Bill's Bar & Burger can fulfill your demands, whether you choose a standard cheeseburger or a specialty burger with distinctive toppings.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        Additionally, Bouchon Bakery is the place to go at Rockefeller Center, New York City, if you want a casual bakery experience.<br>
                        This well-known bakery serves a variety of freshly baked items and is run by renowned chef Thomas Keller.<br>
                        With everything from handmade bread and savory sandwiches to croissants and pastries, Bouchon Bakery offers a relaxed yet elegant dining experience.<br>
                         Grab a cup of coffee and a scrumptious dessert and take in the lively ambiance of this well-known bakery.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        In Manhattan's Rockefeller Center, New York City a wide variety of casual dining establishments are available to suit different interests.<br>
                        There is something for everyone, whether you're in the mood for American food, seafood, comfort food, or decadent baked delights.<br>
                        Rockefeller Center is the ideal setting for a casual eating experience in the center of New York City because of its convenient location and welcoming atmosphere.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5 class="wow bounce my-3"  data-wow-delay="0.1s">
                        Shopping
                    </h5>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        If you're looking to indulge in some retail therapy, Fifth Avenue is not far from the Rockefeller Center New York City.<br>
                        The presence of prominent stores like Saks Fifth Avenue and Bergdorf Goodman won't disappoint shoppers.<br>
                        Numerous stores, including those on Fifth Avenue like Zara, Uniqlo, and Nintendo World, are close by.<br>
                        <br>
                        Aside from specialty shops like the NBC Store, which sells memorabilia from well-known NBC shows, the Rockefeller Center complex also houses other types of shops.<br>
                        If you want a different sort of experience, you may also participate in building activities or buy LEGO kits at The LEGO Store.
                    </p>
                </div>
            </div>

            <div class="row" id="Importantplaces">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce my-5"  data-wow-delay="0.1s">
                        Important places near Rockefeller Center New York City
                    </h3>
                </div>
            </div>

            <div class="row my-5">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce my-5"  data-wow-delay="0.1s">
                        Rockefeller Center, New York City is in the heart of Manhattan, New York City.<br>
                        Renowned attractions, top-notch dining options, and world-class shopping abound in the area.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h5 class="wow bounce my-5"  data-wow-delay="0.1s">
                        Some of the must-see locations The Rockefeller Center is close to the following locations
                    </h5>
                </div>
            </div>
            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <p class="wow bounce my-5"  data-wow-delay="0.1s">
                        <b>
                        </b>
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.2s">
                        <b>
                        </b>
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.3s">
                        <b>
                            Top of the Rock Observation Deck
                        </b>
                        Perched atop Rockefeller Center, New York City this observation deck offers stunning views of the Manhattan skyline.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.4s">
                        <b>
                            Central Park
                        </b>
                        One of the most famous parks in the world, it's perfect for a leisurely stroll or a romantic picnic.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.5s">
                        <b>
                            Times Square, often known as the "Crossroads of the World,"
                        </b>
                        is a hub of commercial and recreational activities.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.6s">
                        <b>
                            A prominent venue for plays, performances, and concerts is Radio City.
                        </b>
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.7s">
                        <b>
                        </b>
                        Empire State BuildingFrom its observation deck, this iconic landmark in New York City offers stunning views of the city.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.8s">
                        <b>
                            St. Patrick's Cathedral
                        </b>
                        Located just a few streets from Rockefeller Center, this magnificent example of neo-gothic architecture is must-see.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="0.9s">
                        <b>
                            MOMA (Museum of Modern Art)
                        </b>
                        One of the most popular museums in the world, it's just a short stroll from Rockefeller Center and has a collection of modern art.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="1s">
                        <b>
                            Bryant Park
                        </b>
                        The New York City Public Library is just adjacent to this magnificent park, which is a great spot for picnics, people-watching, and outdoor reading.
                    </p>
                    <p class="wow bounce my-5"  data-wow-delay="1.1s">
                        <b>
                            icket information
                        </b>
                        Visit their official website, https://www.rockefellercenter.com/, to learn more.<br>
                        They include information about Rockefeller Center's different attractions, including the NBC Studio Tour, ice skating rink, and Top of the Rock observation deck.<br>
                        The most recent details on ticket costs, availability, and how to buy tickets will be available on the website.
                    </p>
                </div>
            </div>
            <div class="row" >
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce my-5"  data-wow-delay="0.1s">
                        Notice :
                    </h3>
                    <br>
                    <h5>
                        3 Ententace for Rockefeller Center
                    </h5>
                    <br>
                    <p>
                        <li>in 5 Avenue between 49 & 50 Street</li>
                        <li> in 49 Street between 5 & 6 Avenue (Avenue of America)</li>
                        <li> in 50 Street between 5 & 6 Avenue (Avenue of America)</li>
                    </p>
                </div>
            </div>
            <div class="row" id="Questions">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce my-5"  data-wow-delay="0.1s">
                        Questions
                    </h3>
                    <h3>
                        FAQ
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12 my-3">
                    <!-- Rest of the article -->
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            When is the Christmas tree lighting ceremony at Rockefeller Center?
                        </b><br>
                        The Rockefeller Center Christmas tree lighting ceremony is typically held the Wednesday before Thanksgiving in November.<br>
                        The 2023 ceremony will be on November 22nd. No, climbing the Christmas tree is strictly prohibited for safety reasons.<br>
                        However, you can get up close and personal with the tree from ground level during the holiday season.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Is there ice skating at Rockefeller Center?
                        </b><br>
                        Yes, the iconic Wollman Rink at Rockefeller Center offers ice skating from October to April.<br>
                        Tickets are highly recommended and can be purchased online or at the box office.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            What famous sites are near Rockefeller Center?
                        </b><br>
                        Rockefeller Center is situated in the heart of Midtown Manhattan, close to many famous landmarks like St. Patrick's Cathedral, Fifth Avenue, Radio City Music Hall, and Times Square.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Is the Top of the Rock view worth the wait?
                        </b><br>
                        Honey, the Empire State Building's shadow looks down on the Chrysler Building from up there.<br>
                        It's basically like staring into the soul of NYC, if your soul had sequins and skyscrapers.<br>
                        Just pack your patience; the line could make a Broadway chorus jealous.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Where's the best place to grab a pre-skating hot cocoa that won't break the bank?
                        </b><br>
                        Skip the overpriced tourist traps and duck into the Starbucks in the Channel Gardens.<br>
                        It's like a secret oasis hidden among the Chanel bags and Gucci loafers.<br>
                        Just don't tell the fashion editors your latte budget went to cocoa instead of couture.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Do the gargoyles in the building ever gossip about the celebrities who live there?
                        </b><br>
                        Those stone monsters have seen it all, darling.<br>
                        From Sinatra's serenade sessions to Mariah Carey's diva meltdowns, their beaks are overflowing with juicy tidbits.<br>
                        But they're tight-lipped—they've got to keep the magic alive, even in concrete form.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Is there a ghost in the Rainbow Room?
                        </b><br>
                        Maybe not an actual ghost, but the echoes of forgotten jazz greats and champagne-soaked soirees linger in the air.<br>
                        You can practically hear Gershwin's piano tinkling or Judy Garland belting out a ballad if you close your eyes (and ignore the overpriced cocktails).
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            What's the secret to capturing the true essence of Rock Center?
                        </b><br>
                        Forget the perfect Instagram shot, honey.<br>
                        Grab a bagel from a street vendor, dodge a rollerblader in neon tights, and get lost in the joyful chaos.<br>
                        The magic isn't in the sights; it's in the symphony of honking horns, laughter, and the city's heartbeat under your feet.<br>
                        That's the real Rock Center—muddled, magnificent, and always a showstopper.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Can you tour the NBC Studios at Rockefeller Center?
                        </b><br>
                        Yes, NBC offers various behind-the-scenes tours of the studios, including "Saturday Night Live," "Today Show," and "Late Night with Seth Meyers." Tickets are available online.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Where can I get the best view of Rockefeller Center?
                        </b><br>
                        Several options offer stunning views of Rockefeller Center: the Top of the Rock Observation Deck, Rockefeller Center's own rooftop experience; The Rainbow Room, a glamorous revolving restaurant on the 65th floor; or The Rink at Rockefeller Center itself, while you skate beneath the iconic Prometheus statue.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            What stores are in Rockefeller Center?
                        </b><br>
                        Rockefeller Center houses a variety of shops, including high-end retailers like Saks Fifth Avenue as well as popular brands like Apple and Lego.<br>
                        It also features unique shops like FAO Schwarz, the iconic toy store.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Are there restaurants in Rockefeller Center?
                        </b><br>
                        Rockefeller Center has numerous restaurants catering to diverse tastes, from upscale eateries like The Modern too casual cafes like Joe Jr. You can also grab a quick bite at the food court.
                    </p>
                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            Is Rockefeller Center wheelchair accessible?
                        </b><br>
                        Rockefeller Center is fully wheelchair accessible, with all buildings having ramps and elevators.<br>
                        There are also accessible restrooms and designated viewing areas at the Christmas tree and skating rink.
                    </p>

                    <p class="wow bounce"  data-wow-delay="0.1s">
                        <b>
                            What are some hidden gems in Rockefeller Center?
                        </b><br>
                        Besides the popular attractions, Rockefeller Center offers hidden gems to explore.<br>
                        Discover the Art Deco details throughout the buildings, like the Prometheus statue at the entrance or the murals found in the concourses.<br id="Directions">
                        Visit the Channel Gardens, a serene oasis amidst the bustling city, or catch a free jazz performance on Thursdays during the summer.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <h3 class="wow bounce my-5"  data-wow-delay="0.1s">
                        Direction
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Second Row -->
                <div class="col-lg-12">
                    <!-- Rest of the article -->
                    <b> You can use the following directions to travel by bus and subway to Rockefeller Center</b><br>
                    <p class="wow bounce my-3"  data-wow-delay="0.1s">
                        Take subway trains (Q, N, R) to 49 Street and walk to east 50 Street to Rockefeller Center between Sixth Avenues and Fifth Avenues with 49 Street.<br>
                        <br>
                        Take a bus from 6 Avenues to 50 Street and walk half a block (between 6 and 5 Avenues).<br>
                        <br>
                        Take the subway to Rockefeller Center station (47–50th Street). You Can use the number (B, D, F, or M) line to reach Rockefeller Center station (47–50th St.)<br>
                        <br>
                        Take the number 6 train to the (Station 51 Street) and walk to 5 Avenue in 50 Street.<br>
                        <br>
                        If you'd rather take the bus, board the M50 in the eastern direction and get out at the Rockefeller Plaza/48th St. Stop. This bus runs along 50th Street.<br>
                        <br>
                        Take a stroll to Rockefeller Center from the bus stop. The bus stop is only a short distance away.<br>
                        <br>
                        Since Rockefeller Center is in the middle of Manhattan, public transit is a breeze to get to.<br>
                        <br id="map">
                        take taxi<br>
                    </p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.149331887655!2d-73.98125388802899!3d40.758740171267185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fecf664df5%3A0x33d224a0d5dacca2!2sRockefeller%20Center!5e0!3m2!1sen!2sus!4v1703805775452!5m2!1sen!2sus"
            class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @include('website.layout.link')
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}
    </div>
    </div>
    </section>
    @endsection

