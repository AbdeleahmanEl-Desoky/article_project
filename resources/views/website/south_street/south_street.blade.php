@extends('website.layout.app')

@section('title')
    <title>South Street Seaport, NYC</title>

South-south-Street-Seaport-SouthStreetSeaport-SOUTH-STREEET-SEAPORT-southstreet-SouthStreet-SOUTHSTREEETSEAPORT
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/South Street/1.png') }}"
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
                                <a class="dropdown-item" href="#South_Street">History Of the South Street Seaport, NYC</a>
                                <a class="dropdown-item" href="#Architectural_features">Architectural features of The South
                                    Street Seaport,
                                    NYC</a>
                                <a class="dropdown-item" href="#Schermerhorn">The Schermerhorn Row</a>
                                <a class="dropdown-item" href="#Pier_17">Pier 17</a>
                                <a class="dropdown-item" href="#Cultural_Attractions">Cultural Attractions in the South
                                    Street Seaport,
                                    NYC</a>
                                <a class="dropdown-item" href="#Shopping ">Shopping Experience</a>
                                <a class="dropdown-item" href="#Restaurants">Restaurants, cafes, and cuisine</a>
                                <a class="dropdown-item" href="#Outdoor">Outdoor Spaces and Activities</a>
                                <a class="dropdown-item" href="#Nearby">Nearby Attractions and Landmarks</a>
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
                        South Street Seaport, NYC
                    </h2>
                </div>
            </div>
        

        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">
                <div class="col-12 col-lg-4  wow bounce" data-wow-delay="0.01s">
                    <!-- Right third with an image -->
                    <img class="w-100 p-2 h-75" onContextMenu="return false;"
                        src="{{ asset('images/South Street/Entrance for South Street Seaport, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Entrance for South Street Seaport, NYC</small>
                </div>

            </div>
            {{-- parag --}}
            <div class="row my-4">
                <div class="col-12 col-lg-12 py-5 wow bounce" data-wow-delay="0.2s">
                    <h5 class="text-center">
                        South Street Seaport, NYC is a neighborhood located in Manhattan that has huge historical
                        significance.<br> This famous stretch of land along the East River has been essential to the growth
                        of
                        the city as a significant maritime and commercial center.<br>
                        The Dutch West India Company founded New Amsterdam (later known as New York City) on the southern
                        tip of Manhattan Island in 1625, and the region swiftly developed into a significant nautical
                        hub.<br>
                    </h5>
                </div>
                <div class="col-12 col-lg-7 wow bounce " data-wow-delay="0.1s">
                    <p class="px-3 wow bounce " data-wow-delay="0.1s">
                        South Street Seaport, NYC is a neighborhood located in Manhattan that has huge historical
                        significance.<br> This famous stretch of land along the East River has been essential to the growth
                        of
                        the city as a significant maritime and commercial center.<br>
                        The Dutch West India Company founded New Amsterdam (later known as New York City) on the southern
                        tip of Manhattan Island in 1625, and the region swiftly developed into a significant nautical
                        hub.<br>

                        The South Street Seaport’s neighborhood grew tremendously over the 18th and 19th centuries as a
                        thriving port.<br>
                        The development of business and New York City's emergence as a major world city were made possible
                        by its deep harbor, which was conveniently located near major international trade routes.<br>
                        Ships from all over the world anchored here, offloading products including clothing, spices, coffee,
                        and wine that were subsequently transported inland through the Erie Canal or dispersed across the
                        city.<br>
                        With several shipbuilding yards, storage facilities, and trade establishments, South Street Seaport,
                        NYC developed into a center for nautical activity.<br>
                        A jungle of masts and a constant hum of activity denoted the location.<br> From these beaches,
                        notable
                        ships like the Flying Cloud, one of the fastest clipper ships ever constructed, were launched.<br>
                    </p>


                </div>
                <div class="col-12 col-lg-5 wow bounce" data-wow-delay="0.12s">
                    <img class="w-100 h-75 p-2"
                        src="{{ asset('images/South Street/Story for South Street Seaport, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Story for South Street Seaport, NYC</small>
                </div>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        
                        Additionally, the harbor provided a point of entry for the numerous immigrants who came to New York
                        in search of a better life.<br>
                        The neighboring Fulton Fish Market, which is now the biggest fish market in the world since so many
                        people found work there,As the 20th century progressed, the seaport's importance decreased as
                        shipping companies moved to more up-to-date locations, notably Port Newark.<br>

                    </p>                
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        In the 1960s, a preservation movement arose to rescue the historic structures and revitalize the
                        waterfront neighborhood after the region had fallen into ruin and neglect. Established in 1967, the
                        South Street Seaport, NYC Museum serves as a cultural organization that preserves and interprets the
                        area's maritime heritage.<br>
                        South Street Seaport, NYC neighborhood has been transformed into a thriving mixed-use community that
                        expertly combines its illustrious past with innovative services today.<br>
                        Both locals and visitors are drawn to the restored and reused historic cobblestone lanes, brick
                        warehouses, and historical buildings that now house a wide variety of stores, eateries, and
                        entertainment venues.<br>

                    </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    Several historic ships that are anchored along the seaport's shoreline and available to the public,
                    including the barque Peking and the schooner Pioneer, were also rebuilt as part of the area's
                    rehabilitation.<br>
                    Visitors may get an insight into the maritime history of New York City thanks to these vintage
                    ships.<br>

                    The South Street Seaport New York’s neighborhood is notable for its economic and cultural significance
                    as well as for its spectacular views of the Manhattan skyline and the renowned Brooklyn Bridge.<br>

                    Visitors to the seaport may stroll leisurely along the East River, explore the cobblestone lanes, eat at
                    restaurants on the river, browse interesting shops, or just take in the atmosphere.<br>
                    In Manhattan, New York City, the South Street Seaport, NYC stands as a timeless reminder of the city's
                    maritime past and the crucial role it played in remaking the region into a bustling metropolis.<br>
                    This historic area has been preserved and revitalized to ensure that future generations can understand
                    and connect with it, making it a must-visit location for both residents and visitors.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The renowned Manhattan borough's South Street Seaport, NYC has grown significantly in prominence as a
                    must-see tourist attraction.<br>
                    It provides tourists with a look into the city's maritime heritage along with a contemporary and
                    energetic experience thanks to its vibrant atmosphere, rich history, and gorgeous waterfront
                    position.<br>
                    The evolution of New York City has been significantly influenced by the seaport region.<br> It was the
                    city's primary commercial center and a humming port in the 19th century.<br>
                    Millions of people from across the world visit the region now because it has brilliantly preserved its
                    ancient beauty.<br>
                    One of the highlights of South Street Seaport, NYC is the breathtaking views of the East River and
                    Brooklyn Bridge.<br> Visitors can admire the river and the city skyline while taking a leisurely stroll
                    along the waterfront promenade.<br>
                    Photographers and people seeking a lovely retreat from the crowded downtown streets should go here.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The seaport is home to many well-known attractions, including the South Street Seaport Museum.<br>
                    A fascinating glimpse into New York's maritime history can be found in this museum's extensive
                    collection of relics and exhibits.<br>
                    By witnessing old ships like the well-known tall ship Peking, visitors can learn more about the nautical
                    history of the area.<br>
                    Throughout the entire year, South Street Seaport, NYC also hosts a ton of festivals and cultural
                    activities.<br> These activities provide visitors with an opportunity to interact directly with locals
                    and
                    emphasize the vibrant vitality of the area.<br>
                    Live music concerts and art displays are only a couple of the frequently occurring events in this lively
                    area.<br>

                </p>

            </div>










            {{-- parag && img --}}
            <div class="my-4 wow bounce" data-wow-delay="0.1s">
                <h3 id="South_Street" class="ml-1 mb-5">History Of the South Street Seaport, NYC</h3>
                <!-- First Row -->
                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-lg-4">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2 h-75"
                            src="{{ asset('images/South Street/History South Street Seaport, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block">History South Street Seaport, NYC</small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Early settlement and development</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The early colonization and subsequent growth of the South Street Seaport, NYC in Manhattan, New York
                    City, have had a significant impact on the development of the city's maritime legacy.<br>
                    The Lenape Native American tribe had its center in what is now South Street Seaport, NYC around the
                    beginning of the 17th century.<br> European settlers were drawn there by the East River's abundance of
                    resources and accessibility to trade routes.<br>
                    Early in the 1600s, the Dutch settled in Lower Manhattan and founded New Amsterdam, which subsequently
                    evolved into New York City.<br>
                    South Street Seaport, NYC swiftly developed into a thriving harbor and an important port for trade and
                    business.<br>
                </p>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/South Street/Front of Enter for South Street Seaport, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Front of Enter for South Street Seaport, NYC</small>
                </div>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    By the late 18th century, the South Street Seaport, NYC had grown into a rich naval district.<br>
                    Both the American Revolution and the steady influx of European immigrants aided the port's growth.<br>
                    The region immediately became an important economic hub for the import and export of goods and
                    agricultural products due to its ideal location.<br>
                    The seaport became even more famous in the nineteenth century as the harbor became clogged with
                    tall-masted ships.<br>
                    It grew into a congested waterfront neighborhood surrounded by warehouses, taverns, and lively
                    markets.<br>
                    The thriving maritime industry, which allowed businesses to create successful trade linkages with other
                    markets, was a significant factor in the region's success.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The growth of passenger ships was greatly aided by the South Street Seaport, NYC.<br>
                    The Seaport became the main point of departure for immigrants leaving Europe for the United States as
                    transatlantic travel increased in popularity.<br>
                    In search of a better life in the New World, thousands of optimistic immigrants traveled through the
                    region.<br> Steamships that brought people, mail, and freight between New York and Europe frequently
                    docked
                    at The Seaport.<br>
                    However, South Street Seaport's maritime prominence began to decrease around the start of the 20th
                    century.<br> Larger ships needed deeper channels as technology developed, and the local piers were
                    unable to
                    adapt.<br> As other areas of New York City and adjacent ports gained popularity, the port progressively
                    lost
                    its status.<br>
                    South Street Seaport, NYC was able to maintain its historic charm despite the collapse of its marine
                    activity.<br> With the opening of the South Street Seaport Museum in 1967, efforts to revitalize the
                    region
                    started in the 1960s.<br> The museum played a significant role in the preservation of historic ships,
                    most
                    notably the sailing ship Wavertree, and sought to highlight the nautical heritage of New York City.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A historic neighborhood, South Street Seaport, NYC currently skillfully blends a strong maritime history
                    with modern comforts.<br>
                    The renovated mercantile buildings, cobblestone alleys, and waterfront promenade all add to the unique
                    atmosphere that respects the area's past.<br>
                    Visitors can tour the South Street Seaport Museum in addition to dining on the waterfront, shopping at
                    stores, and attending cultural events.<br>

                </p>
            </div>

            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Role in the development of New York City</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Over the years, the South Street Seaport, NYC in Manhattan, New York City, has had a tremendous impact
                    on the expansion and development of the city.<br>
                    The seaport has played a crucial role in trade, business, and immigration because of its long maritime
                    history, which has helped New York City's economy and culture grow.<br>
                    The port developed into a thriving marketplace around the beginning of the 18th century, drawing ships
                    from all over the world.<br>
                    Due to its advantageous location along the East River, which allowed for quick access to the Atlantic
                    Ocean and other ports, the seaport rose to prominence as the center of nautical activity.<br>
                    The waterfront was a thriving business area since the docks and warehouses were brimming with products
                    including tobacco, cotton, spices, and imported luxury items.<br>
                </p>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/South Street/South Street Seaport, NYC in east downtown Manhattan.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">South Street Seaport, NYC in east downtown Manhattan</small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The early 19th-century building of the Erie Canal added to the South Street Seaport's rise to
                    prominence.<br>
                    This man-made river, which connected the Great Lakes to New York City, made it possible to move
                    commodities straight from the Midwest to the harbor.<br>
                    This innovation revolutionized trade, elevating New York City to a leading position in both domestic and
                    global trade.<br>
                    Immigrants commonly entered South Street Seaport, NYC when they arrived in New York as a starting point
                    for their new life in America.<br>
                    The Two Bridges district, which is close to the waterfront, appealed to a lot of European
                    immigrants.<br>
                    They brought their diverse cultures, languages, and skills, which enriched the multicultural fabric of
                    New York City.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    By the middle of the 19th century, the South Street Seaport, NYC had developed into a significant
                    financial hub, drawing banks, insurance providers, and other maritime-related industries.<br>
                    Its status as a nautical powerhouse was further cemented by the presence of shipyards and marine
                    institutes.<br>
                    The South Street Seaport, NYC saw a downturn in the 20th century due to the introduction of
                    containerization and the relocation of ships to bigger ports.<br>
                    A preservation movement, however, supported the area's rehabilitation and regeneration in the 1960s.<br>
                    The
                    harbor is now a working museum with magnificently preserved 19th-century commercial buildings housing
                    museums, stores, dining establishments, and entertainment facilities.<br>
                    South Street Seaport, NYC is significant due to its preservation of Manhattan, New York City's nautical
                    heritage as well as its economic benefits.<br> Locals and visitors alike are drawn to it as a symbol of
                    the
                    city's past since they may still experience the ambience of this once-bustling port.<br>
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h3 class"my-5" id="Architectural_features">Architectural features of The South Street Seaport, NYC</h3>
                <h5>Icon buildings and structures</h5>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/South Street/The main View of South Street Seaport, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">The main View of South Street Seaport, NYC</small>
                </div>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    South Street Seaport, NYC is a well-known waterfront destination in Manhattan, New York City, offering a
                    broad exhibition of history, architecture, and culture.<br>
                    It is home to a vast number of structures and buildings that have made significant contributions to the
                    city's and maritime sector's growth.<br>
                    The historic area, which includes 11 blocks of refurbished 19th-century structures, is one of South
                    Street Seaport's most unique architectural aspects.<br> Federal, Greek Revival, and Victorian
                    architectural
                    styles are all prominent in these structures.<br>
                    Visitors can explore the fine nuances of these buildings as they wander down the cobblestone streets, as
                    they have been scrupulously repaired to retain their ancient charm.<br>
                    The iconic Pier 17 tower, sometimes known as The Tin Building, is the most visible structure in South
                    Street Seaport, NYC.<br> With its unique red brick facade and huge windows, this four-story building has
                    functioned as a symbol of the waterfront since its completion in 1861.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Pier 17 was formerly a bustling marketplace for goods arriving by ship, but it has now evolved to
                    include a range of retailers, restaurants, and entertainment opportunities.<br>
                    South Street Seaport, NYC Museum is located next to Pier 17 and is housed in the exquisitely renovated
                    Schermerhorn Row.<br>
                    This group of structures, which date to the early 19th century, previously served as warehouses and
                    counting houses for thriving marine commerce.<br>
                    Through its current exhibitions, artifacts, and interactive displays, the museum gives visitors a look
                    into the seaport's colorful past.<br>
                    The historic Fulton Market Building is another important building nearby.<br>
                    This red-brick structure, which was initially constructed in 1822, housed a fish market for almost 200
                    years.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Fulton Market Building is a reminder of the seaport's significance as a hub of trade, even if it no
                    longer fulfills its original function.<br>
                    The magnificent sailing ships Peking and Wavertree are among the fleet of antique ships that South
                    Street Seaport is renowned for.<br> Visitors get a rare opportunity to board these vessels that are
                    moored
                    beside the pier and experience the seaport's maritime legacy firsthand.<br>
                    A treasure trove of architectural marvels may be found in Manhattan's South Street Seaport, NYC.<br>
                    Each building, from the renowned Pier 17 to the painstakingly restored 19th-century structures, provides
                    a fascinating tale about the city's maritime heritage.<br>
                    South Street Seaport, NYC provides a unique architectural experience and a compelling trip through time,
                    whether you choose to explore the museums or wander along the cobblestone streets.<br>
                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="my-3 wow bounce" data-wow-delay="0.1s">
                <h5 id="Schermerhorn">The Schermerhorn Row</h3>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It has a long history in the nautical industry and is well-known for its distinctive architectural
                    elements and Schermerhorn Row.<br>
                    The South Street Seaport's architectural characteristics pay homage to the region's nautical history and
                    its metamorphosis into a well-liked tourist destination.<br>
                    The cobblestone streets that border the region are one of the city's primary architectural attractions
                    and add to its nostalgic appeal.<br>
                    These lanes give the seaport a distinctive flair and transport tourists to a bygone age when it was a
                    thriving center of trade and commerce.<br>
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/South Street/Christmas Tree in South Street Seaport, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Christmas Tree in South Street Seaport, NYC</small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    <br>
                    The structures at the seaport also exhibit unusual architectural designs. The most noteworthy of these
                    buildings is Schermerhorn Row, a collection of 19th-century counting houses that have been rebuilt.<br>
                    These Greek Revival-styled structures were first employed by shipping businesses as offices and
                    warehouses.<br> Today, they host a variety of stores, museums, and restaurants and serve as a reminder
                    of
                    the region's maritime history.<br>
                    After the illustrious Schermerhorn family, Schermerhorn Row bears witness to the region's significant
                    commercial prominence in the 1800s.<br>
                    Each of the buildings in the row has distinctive qualities of its own.<br> They have beautiful facades
                    with
                    large arches and fine details that reflect the workmanship of the time.<br>
                    The interiors have been modified for contemporary eating and shopping, while the exteriors have been
                    scrupulously conserved to keep their historical aspect.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visitors may browse a variety of stores on Schermerhorn Row that provide distinctive goods, including
                    apparel, antique items, local art, and souvenirs.<br>
                    Additionally, there are several eateries and coffee shops along the row where guests may relax with a
                    meal or a beverage while admiring the lovely surroundings.<br>
                    Additionally, Schermerhorn Row's South Street Seaport Museum provides exhibits and educational programs
                    that explore the maritime history of the region.<br>
                    The South Street Seaport New York, in addition to being an important architectural relic, offers
                    stunning vistas of the Manhattan skyline, the Brooklyn Bridge, and the East River.<br>
                    It has proven to be a popular attraction for both residents and tourists due to its lovely blend of
                    history, shopping, dining, and natural beauty.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Architectural elements of South Street Seaport, NYC in Manhattan, New York City, honor the city's
                    nautical legacy.<br>
                    With its Greek Revival-style buildings, Schermerhorn Row serves as an iconic representation of the
                    region's economic importance.<br>
                    The seaport's distinctive fusion of history, culture, and picturesque vistas continues to enthrall
                    tourists today.<br>
                </p>

            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Tin Building</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It's halfway between the Financial District and the Brooklyn Bridge on the East River.<br>
                    This well-known neighborhood is known for its vibrant atmosphere, beautiful architectural structures,
                    and lengthy maritime history.<br>
                    South Street Seaport, NYC, s architecture features a distinctive fusion of old and contemporary.<br>
                    The city's rebuilt 19th-century buildings that line its cobblestone streets provide a window into the
                    city's former life as a thriving port.<br>
                    Greek Revival and Federalist designs are only a couple of the architectural styles represented by the
                    local structures.<br>
                    The neighborhood's appeal is enhanced by these exquisitely restored buildings that take tourists back in
                    time to the days when South Street Seaport was a vibrant center of international trade.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Tin Building is one of South Street Seaport, NYC's most distinctive architectural elements.<br> This
                    three-story building was created by architect Robert Malcolmson and was first built in 1907.<br>
                    The building's characteristic corrugated tin façade, which was frequently employed in nautical
                    construction at the time, gave rise to its name.<br>
                    It served as a thriving fish market for many years, playing a significant role in the marine operations
                    of the region.<br>
                    Over the years, the Tin Building has experienced several changes.<br>
                    It was moved to its current location within the Historic District of South Street Seaport in the 1980s
                    to make room for a brand-new shopping center.<br>
                    Today, the structure, which was painstakingly repaired after suffering significant fire damage in 1995,
                    remains a tribute to the neighborhood's maritime history.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Tin Building has evolved into a mecca for gastronomic experiences since being restored.<br>
                    It has a bustling food hall with a variety of eating options that emphasize both regional and global
                    flavors.<br>
                    In this historic location, guests may enjoy delectable seafood, fine pastries, handmade delicacies, and
                    much more.<br>
                    The inside of the property has been tastefully updated while keeping its historic charm.<br> Exposed
                    brick
                    walls, wooden beams, and sizable windows offer stunning views of the neighborhood.<br>
                    The Tin Building serves as a symbol of South Street Seaport, NYC's historical evolution and ongoing
                    impact.<br>
                    Even though the area has developed into a booming entertainment and cultural hotspot, it nonetheless
                    pays homage to its nautical past through its distinctive architecture and other design cues.<br>
                </p>
            </div>
            {{-- img&&h3&&pharg --}}
            <div>
                <h5 id="Pier_17">Pier 17</h3>
                <div class="row">
                    <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2" src="{{ asset('images/South Street/Cruise ship in Pier 17.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> Cruise ship in Pier 17</small>
                    </div>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        South Street Seaport, NYC, a historic neighborhood in New York City's southernmost portion of
                        Manhattan, is well-known for both its architectural components that have withstood the test of time
                        and its vast maritime history.<br>
                        Pier 17, a well-known structure notable for its unusual architecture and utility, is one of the
                        harbor's key draws.<br>
                        A multi-level structure called Pier 17 houses areas for shopping, entertainment, and dining.<br>
                        Within
                        the South Street Seaport’s neighborhood, it stands out due to its architectural elements.<br>
                        After undergoing extensive renovations in recent years, the pier reopened to the public in 2018 with
                        a brand-new appearance.<br>
                        The creative rooftop space at Pier 17 is one of its amazing features.<br> Visitors may enjoy
                        breath-taking panoramic views of the surrounding metropolis from this sizable rooftop, which
                        includes the Brooklyn Bridge, the East River, and the recognizable Lower Manhattan skyline.<br>
                    </p>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        The rooftop has gained popularity as a location for social gatherings, cultural events, and
                        concerts, providing both locals and visitors with a distinctive experience.<br>
                        To honor the region's nautical legacy, Pier 17's design combines industrial and contemporary
                        elements.<br> A modern glass veneer on the building's exterior allows natural light to pour into the
                        internal rooms.<br>
                        As a result, both daytime and evening events take place in a lively and pleasant environment.<br>
                        There are numerous diverse types of stores, boutiques, and eateries inside Pier 17.<br>
                        Visitors to the pier may explore a range of retail alternatives, from fashion boutiques to
                        specialized shops, at the bustling marketplace found on the lower levels of the pier.<br>
                        The top levels are home to a variety of eating choices, including eateries, bars, and a food lobby
                        that serves a variety of cuisines to suit all palates.<br>

                    </p>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        Additionally, throughout the year, Pier 17 offers entertainment and cultural events that attract
                        both residents and tourists.<br>
                        Live acts, such as music concerts, comedy shows, and art exhibitions, are frequently held there.<br>
                        The open-air architecture and adaptable seating options on the pier help to create a welcoming and
                        all-encompassing atmosphere for visitors.<br>
                        At South Street Seaport, NYC, Pier 17 is a stunning piece of modern architecture that skillfully
                        combines old-world charm with cutting-edge style.<br>
                        Anyone interested in learning more about New York City's rich cultural and maritime past should
                        visit this location because of its rooftop views, variety of retail options, and exciting
                        entertainment possibilities.<br>
                    </p>
                </div>
            </div>
            {{-- img&&h3&&h5&&pharg --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h3 id="Cultural_Attractions">Cultural Attractions in the South Street Seaport, NYC</h3>
                <h5>South Street Seaport, NYC Museum</h5>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/South Street/Its between Pearl StSouth Street and.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">It's between Pearl St & South Street and </small>
                </div>


                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In Lower Manhattan, New York City, South Street Seaport, NYC Museum is a cultural treasure that gives
                    visitors an enthralling look into the city's nautical past.<br>
                    The museum, which is housed in the storied South Street Seaport’s neighborhood, is devoted to
                    safeguarding and promoting New York's maritime history.<br>
                    A bustling port and marketplace for trade ships from all over the world, the South Street Seaport New
                    York has a long history in the maritime industry dating back to the 19th century.<br>
                    Through its varied collection of artifacts, exhibitions, and educational initiatives, the museum—founded
                    in 1967—seeks to highlight this heritage.<br>
                    The museum's fleet of antebellum ships is one of its centerpieces.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Wavertree freight ship, built in 1885, has been painstakingly restored to her former splendor and is
                    open to visitors.<br>
                    Visitors get a rare opportunity to experience what life was like for sailors during the heyday of sail
                    by exploring the ship.<br> The lightship Ambrose, which acted as a floating beacon to direct ships into
                    New
                    York Harbor, is also housed in the museum.<br>
                    The museum has multiple displays that explore different facets of New York's nautical heritage in
                    addition to the ships.<br>
                    These displays feature artifacts including historical papers, ship models, old pictures, and nautical
                    tools.<br> Visitors may learn about the South Street Seaport, NYC's contribution to the growth of the
                    city,
                    the neighborhood's effects of immigration, and the stories of perilous ocean trips through interactive
                    displays.<br>
                    Additionally, South Street Seaport, NYC Museum hosts a variety of interesting educational activities and
                    programs.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    These include family-friendly activities, talks, seminars, and guided tours for guests of all ages.<br>
                    The
                    knowledgeable museum staff and volunteers are enthusiastic about maritime history and ready to impart
                    their knowledge.<br>
                    The South Street Seaport Museum is not just significant historically, but it is also a thriving center
                    of culture.<br>
                    Throughout the year, it offers a range of events, such as festivals, live concerts, and art
                    exhibitions.<br>
                    The district of the seaport is a delightful location for both locals and tourists since it offers
                    visitors the chance to browse distinctive stores and taste wonderful cuisine amid the area's cobblestone
                    pathways.<br>
                </p>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/South Street/I Pic theaters in South Street Seaport, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">I Pic theaters in South Street Seaport, NYC </small>
                </div>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A remarkable place that graphically illustrates New York City's nautical heritage is the South Street
                    Seaport Museum.<br>
                    Visitors who are interested in learning more about the city's long maritime history will find the
                    collection of ships, exhibitions, and educational initiatives to be fascinating and engrossing.<br>
                    Whether you are interested in history, maritime knowledge, or are just looking for an enjoyable cultural
                    experience, you should visit the South Street Seaport Museum.<br>
                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Exhibitions and Collections</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Manhattan and New York City's South Street Seaport, NYC are bustling neighborhoods that combine history,
                    culture, and entertainment.<br>
                    The seaport, a significant cultural landmark, has a long maritime history that extends back to the 17th
                    century.<br> Let's explore the displays and holdings that make this site so unique.<br>
                    Visitors may explore a range of intriguing displays that highlight the region's maritime legacy at the
                    South Street Seaport Museum.<br>
                    The museum is in several old structures, notably Schermerhorn Row from the first half of the nineteenth
                    century.<br>
                    You might get lost in the tales of New York's thriving port and the role it played in commerce and
                    immigration.<br>
                    Here.<br>
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/South Street/Old Ship in South Street Seaport, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> Old Ship in South Street Seaport, NYC</small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Street of Ships is a well-known exhibit at the South Street Seaport Museum.<br>
                    It takes you on a virtual tour through the seaport's past while showcasing replicas of vintage ships and
                    educational exhibits that highlight the hardships and difficulties encountered by sailors every day.<br>
                    The marine traditions that have formed the region are well honored in this show.<br>
                    The Bowne & Co.<br>, Stationers is yet another must-see attraction.<br> It is one of the nation's oldest
                    continuously functioning print businesses and was founded in 1775.<br>
                    The store conducts engaging seminars in addition to providing an insight into the expertise of
                    conventional printing processes.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visitors may design custom stationery, learn about letterpress printing, and even take part in
                    historical reenactments.<br>
                    For art aficionados, the South Street Seaport, NYC has galleries that display works of art with a
                    maritime theme.<br>
                    Visitors can appreciate paintings, sculptures, and even photographs depicting the river and its
                    connection to NYC.<br>
                    These galleries typically exhibit the work of regional artists, providing a place to appreciate both
                    traditional and contemporary marine art.<br>
                    Throughout the year, the seaport also offers a variety of special events in addition to exhibitions and
                    galleries.<br> These occasions include historical reenactments, antique sailing ship visits, outdoor
                    concerts, and cuisine festivals.<br> During these celebrations, the harbor comes to life and draws both
                    residents and visitors.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In Manhattan, New York City, the South Street Seaport, NYC provides a comprehensive look into the
                    region's rich nautical history.<br>
                    The seaport draws visitors of all ages and interests with its compelling displays, iconic structures,
                    and exciting events.<br>
                    South Street Seaport, NYC has something for everyone, whether you wish to discover the city's nautical
                    background, appreciate marine art, or just take in the colorful environment.<br>
                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Historical Ships and Vessels</h5>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/South Street/Historical Ships and vessel in South Street Seaport, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Historical Ships and vessel in South Street Seaport, NYC</small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport, NYC in Manhattan, New York City, is a bustling destination that combines the
                    area's significant nautical past with cutting-edge tourist attractions.<br>
                    The seaport, which extends across many blocks along the East River, offers a singular experience full of
                    historic ships, waterfront vistas, museums, shopping, and dining options.<br>

                    The old ships and boats that honor New York City's maritime heritage are at the center of the South
                    Street Seaport, NYC.<br>
                    A fully restored 1885 freight sailing ship named the Wavertree is one of the most renowned sights.<br>
                    You'll be taken back in time as soon as you board this magnificent ship, to the era when tall ships
                    controlled the seas.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visitors get the opportunity to tour the Wavertree's decks and cargo holds while learning about life as
                    a sailor in the late 19th and early 20th centuries.<br>
                    The Peking, a four-masted barque that previously traveled the treacherous Cape Horn voyage, is another
                    notable landmark.<br>
                    Peking's big debut highlights the difficulties and achievements of the maritime sector.<br>
                    Visitors may learn about its past and the challenging voyages that sailors underwent to ship cargo
                    around the world.<br>
                    The South Street Seaport, NYC Museum enhances visitors' experiences by shedding light on the region's
                    maritime history.<br>
                    The museum houses a wide range of charming items, exhibitions, and educational programs.<br>
                    Through marine art, photography, intelligent exhibits, and historical data, the museum gives an
                    immersive experience that brings the past to life.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Along with museums and antique ships, the South Street Seaport, NYC offers a bustling atmosphere and
                    contemporary conveniences.<br>
                    You may wander among the quaint restaurants, stores, and boutiques that line the cobblestone
                    streets.<br>
                    Additionally, the seaport offers several occasions all year long, such as performances, festivals, and
                    art displays.<br>
                    The South Street Seaport, NYC is a center for innovation and entertainment because of these exciting
                    cultural events, which draw both locals and visitors.<br>
                    The harbor also provides breathtaking views of the waterfront, which include the famous Brooklyn Bridge
                    and the East River.<br>
                    Visitors may take leisurely strolls down the promenade, go on a river cruise, or just unwind while
                    taking in the area's natural beauty.<br>
                </p>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2" src="{{ asset('images/South Street/Buy Ticket in Pier 16.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">Buy Ticket in Pier 16</small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport, NYC in Manhattan, New York City, captures the nautical heritage of the area
                    and offers a variety of old ships, interesting museums, popular tourist destinations, and modern
                    conveniences.<br>
                    It provides a complete experience that encourages a bond with the past while embracing the vivacious
                    attitude of the present.<br>
                    South Street Seaport, NYC has something for everyone, whether you prefer history or culture or are just
                    seeking a fun day out.<br>
                </p>
            </div>

            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Entertainment options</h5>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/South Street/Fulton Market in Main Street South Street Seaport, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Fulton Market in Main Street South Street Seaport, NYC</small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport, NYC, a booming cultural hub in the heart of Manhattan, offers a wide range of
                    entertainment options to visitors of all ages.<br>
                    This well-known area, which is full of modern attractions and steeped in history, masterfully combines
                    the appeal of the past with the vitality of the present.<br>
                    One of South Street Seaport, NYC's main draws is its long maritime history.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The city's development as an important port was dependent on the harbor, which was a booming commercial
                    center.<br>
                    Visitors can discover more about this past at the South Street Seaport Museum, which features
                    fascinating maritime historical exhibits and engaging interactive activities.<br>
                    To learn about life at sea, museum visitors can embark on old ships like the Tall Ship Ambrose.<br>
                    Along with its maritime characteristics, South Street Seaport New York is a cultural center with a
                    variety of entertainment options.<br>
                    In addition to displaying a range of musical genres, from jazz to indie rock, the Seaport Music Festival
                    provides a stage for both established and up-and-coming musicians.<br>
                    A beautiful view of the lake is provided to attendees since the festival is hosted outside in the
                    historic district.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Food lovers can find gourmet paradise at the South Street Seaport, NYC.<br>
                    A variety of restaurants serving delectable food can be found throughout the area, which boasts a
                    booming restaurant scene.<br>
                    From fresh seafood to exotic flavors and classic American dishes, there is food to suit every taste.<br>
                    Along with a thriving food scene, the harbor offers visitors the chance to sample local delicacies,
                    handcrafted items, and freshly prepared meals.<br>
                    South Street Seaport, NYC is home to a variety of premium boutiques, innovative fashion outlets, and
                    one-of-a-kind specialty businesses for those in need of some shopping therapy.<br>
                    With cobblestone streets and old structures, the area provides a lovely shopping experience.<br>
                    Everything from handcrafted crafts and old treasures to designer apparel and accessories may be found by
                    visitors.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport, NYC features several events and activities throughout the year in addition to
                    its cultural and retail attractions.<br>
                    These include outdoor movie screenings, art displays, artisan fairs, live performances on the street,
                    and holiday celebrations.<br>
                    Due to the holiday lighting, ice skating rinks, and lively Christmas market, the neighborhood comes to
                    life.<br>
                    The varied South Street Seaport, NYC smoothly combines its nautical heritage with modern leisure
                    offerings.<br>
                    This renowned neighborhood has something for everyone, from museums and live music to delectable cuisine
                    and one-of-a-kind shopping opportunities.<br>
                    South Street Seaport, NYC will enthrall and delight you whether you are interested in history, music,
                    food, or simply want to explore a lively area.<br>

                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Shopping">Shopping Experience</h3>
                <h5>Unique shops and boutiques</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Manhattan's South Street Seaport, NYC offers a unique shopping experience that is unmatched throughout
                    the city.<br>
                    History fans and shopaholics alike should explore this historic district, which is hidden away on the
                    lovely waterfront and combines its rich nautical legacy with a lively mix of unique boutiques.<br>
                    The South Street Seaport, NYC is well recognized for its large variety of shops that offer a
                    well-curated assortment of goods.<br>
                    The neighborhood is home to a wide range of specialized shops, concept stores, and fashion-forward
                    garment boutiques where shoppers may purchase one-of-a-kind things not found elsewhere.<br>
                    South Street Seaport, NYC has a wide selection of modern clothing, one-of-a-kind jewelry, and
                    fashionable accessories.<br>
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 p-2"
                            src="{{ asset('images/South Street/The main Street in South Street Seaport, NYC have many.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">The main Street in South Street Seaport, NYC have
                            Shops,restaurants, cafes</small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Shopping at South Street Seaport, NYC is notable for its emphasis on supporting neighborhood
                    businesses.<br>
                    Many of the boutiques, which feature the creations of regional designers and craftspeople, are
                    individually owned, and run.<br>
                    Customers can relate to the tales behind the things they buy thanks to the special sense of authenticity
                    it produces.<br>
                    Regular markets and pop-up stores are held at South Street Seaport, NYC in addition to the boutique
                    shopping experience, which adds a sense of surprise and discovery.<br>
                    These transient installations provide aspiring artists and designers with a stage on which to display
                    their abilities.<br> At the Seaport, there is always something fresh and intriguing to discover, from
                    handcrafted products to artisanal food sellers.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Fulton Stall Market, a year-round marketplace where tourists can enjoy a variety of locally produced
                    vegetables, artisanal cheeses, and freshly baked items, is one of the area's top attractions.<br>
                    This farmer's market encourages sustainable and healthy living while fostering a sense of community.<br>
                    In addition, the gorgeous setting of South Street Seaport, NYC enhances the shopping adventure.<br>
                    The old houses and cobblestone streets provide a lovely setting that takes tourists back in time.<br>
                    These exquisitely restored buildings, notably the well-known Pier 17, provide a charmingly nostalgic
                    atmosphere.<br>
                    Finally, South Street Seaport New York offers a wide range of entertainment choices, including live
                    performances, outdoor concerts, and cultural events.<br>
                    It's not only about shopping there, though.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visitors may unwind with breath-taking views of the Brooklyn Bridge and the East River while soaking in
                    the vibrant ambiance of this waterfront neighborhood.<br>
                    In Manhattan, South Street Seaport, NYC provides a genuinely unique shopping experience.<br>
                    The region is a refuge for individuals who value both elegance and history because of its distinctive
                    shops, focus on local companies, and gorgeous setting.<br>
                    South Street Seaport, NYC is a shopping area that should not be missed if you're looking for modern
                    fashion or a taste of regional craftsmanship.<br>
                </p>
            </div>
            {{-- اكمل --}}




            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Local craftsmanship and small products</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The thriving and storied South Street Seaport, NYC is located right in the middle of Manhattan, beside
                    the East River.<br>
                    This renowned district provides a distinctive retail experience that blends a strong nautical past with
                    modern flare.<br>
                    Visitors are exposed to a variety of regional handcrafted goods that showcase the diversity and
                    inventiveness of New York City.<br>
                    At South Street Seaport, NYC, you might discover a veritable treasure trove of specialty shops,
                    independent designers, and oddball retailers that cater to every taste and fashion.<br>
                    The area offers a shopping experience unlike any other, with everything from specialized stores selling
                    handcrafted jewelry and accessories to outlets selling fashionable clothing.<br>
                    The cobblestone streets and charming businesses in the area add to the neighborhood's appeal by
                    fostering a welcoming and motivating atmosphere.<br>

                </p>
                <div class="row ">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/South Street/20201213_150057.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport, NYC's emphasis on regional craftsmanship is one of its defining
                    characteristics.<br>
                    You may discover craftsmen here displaying their abilities in a variety of mediums, including metals,
                    pottery, and carpentry.<br>
                    Each piece, whether it be finely made ceramics or exquisitely carved furniture, embodies the love of its
                    maker, and tells a narrative.<br>
                    Visitors may bring a bit of New York City's creative past home with them thanks to these locally made
                    goods, which have a distinctive charm.<br>
                    Additionally, the area is well known for its array of artisans' goods.<br>
                    South Street Seaport, NYC Market is a haven for foodies, providing a variety of artisanal and locally
                    produced delicacies.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    This market offers a fantastic culinary experience with everything from artisanal cheeses and organic
                    fruit to freshly baked bread and fine chocolates.<br>
                    Every mouthful is a celebration of flavor and quality because of the focus on using sustainable
                    practices and locally sourced foods.<br>
                    South Street Seaport, NYC provides cultural events and entertainment alternatives in addition to the
                    retail experience.<br>
                    Visitors may learn about the region's rich maritime history through interactive displays and restored
                    ships at the South Street Seaport Museum.<br>
                    The lively mood is further enhanced with outdoor concerts, art installatios, and extraordinary events,
                    which foster a sense of celebration and community.<br>
                </p>
            </div>






            {{-- &h5 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Dining">Dining Options</h3>
                <h5>Cultural offerings in the area</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    South Street Seaport, NYC which is in lower Manhattan, has a fantastic selection of restaurants that
                    will tempt the taste buds of any culinary connoisseur.<br>
                    This renowned waterfront neighborhood is not only a destination for cultural discovery, but also a
                    gastronomic heaven for residents and tourists alike, thanks to its distinctive combination of history
                    and contemporary cuisine.<br>

                    South Street Seaport, NYC is home to a wide variety of restaurants serving food from all over the
                    world.<br>
                    This area has something for every taste, whether you're searching for a quick lunch or a gourmet dining
                    experience.<br>
                    Let's explore the South Street Seaport's gastronomic environment, which ranges from seafood to Italian
                    classics.<br>

                    South Street Seaport, NYC is a seafood lover's heaven.<br> The region is known for its fresh catches and
                    has
                    a long history as a fishing harbor.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    Many eateries provide mouthwatering seafood meals that highlight the wealth of the adjacent Atlantic
                    Ocean.<br>
                    You may savor seafood favorites like tender lobster rolls and crunchy fried calamari while admiring the
                    breathtaking waterfront views.<br>

                    South Street Seaport, NYC provides a wide range of international cuisines in addition to seafood.<br>
                    At one of the beautiful trattorias serving authentic pasta dishes and wood-fired pizzas, have a taste of
                    Italy.<br>
                    Sushi and sashimi alternatives allow you to experience Asian flavors, while rich and spicy Indian
                    curries are also available.<br>
                    There are several American-style bistros and steakhouses that serve robust burgers, juicy steaks, and
                    traditional comfort cuisine for people who are craving a taste of home.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In addition, South Street Seaport, NYC has a thriving street food scene, which is ideal for people
                    seeking a quick and reasonably priced choice.<br>
                    The cobblestone streets are lined with food vendors and food trucks that serve a wide variety of
                    delectables.<br>
                    For every craving, there is a delectable delight available, from tantalizing tacos and falafel wraps to
                    gourmet ice cream and pastries.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In addition to a selection of restaurants, South Street Seaport, NYC also has pubs and lounges.<br>
                    There are several places that may satisfy your libation preferences, whether you want a traditional
                    cocktail, regional craft beer, or a glass of great wine.<br>

                    South Street Seaport, NYC is a gastronomic haven where modernism and heritage harmoniously coexist.<br>
                    This
                    neighborhood provides a unique culinary experience with its multitude of eating options, which include
                    everything from fresh seafood to international cuisines and a bustling street food scene.<br>
                    As you explore the culinary options at South Street Seaport New York, be ready for an incredible
                    gastronomic voyage with your taste buds.<br>

                </p>

            </div>
            {{-- h5 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Seafood specialties</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In Manhattan, New York City, South Street Seaport, NYC is a bustling center that provides a wide range
                    of dining alternatives for seafood lovers.<br>
                    This historical neighborhood is the ideal location to indulge in mouthwatering seafood delicacies
                    because of its rich maritime heritage and breathtaking waterfront vistas.<br>
                    Everybody may find their favorite seafood at the South Street Seaport, NYC.<br>
                    You may choose from a variety of eating options, including elegant seafood restaurants and informal
                    seafood shacks, to satisfy your needs.<br> Let's explore some of the best seafood dishes available in
                    this
                    renowned area.<br>
                    The traditional New England clam chowder is one of South Street Seaport's highlights.<br> This rich,
                    savory
                    soup with soft clams, potatoes, and herbs is available at a lot of local eateries.<br>
                    compares to the warm and satisfying flavor of a well-made clam chowder, especially when served with warm
                    bread.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    You're in luck if you enjoy eating delicacies made from raw fish. Oyster bars with delectable selections
                    can be found around the South Street Seaport New York.<br>
                    Enjoy a variety of freshly shucked oysters from both domestic and foreign seas.<br> A tart mignonette
                    sauce
                    or a dash of lemon works well with these briny jewels.<br>
                    The availability of lobster rolls at South Street Seaport is another feature of the seafood scene
                    there.<br>
                    Take a bite off a buttery toast stuffed with flavorful morsels of lobster flesh that have been lightly
                    dressed in mayo and seasonings.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It's impossible to resist the allure of pillowy bread with delicious lobster.<br>
                    There are many different types of lobster rolls available to suit your appetite, whether you like a
                    conventional recipe or one with a unique twist.<br>
                    The South Street Seaport, NYC serves a variety of seafood dishes, including crispy fish tacos and
                    grilled prawn skewers, in addition to clam chowder, oysters, and lobster rolls.<br>
                    Seafood is frequently acquired directly from the sea, given the neighborhood's coastal setting, ensuring
                    the finest quality and flavor.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    South Street Seaport in Manhattan should be on your travel itinerary, whether you love seafood or are
                    just seeking a special eating experience.<br>
                    You may savor delectable seafood delicacies and the allure and splendor of this historic neighborhood
                    while indulging in its wide variety of gastronomic delights.<br>
                    So, explore South Street Seaport, NYC's seafood menu and enjoy the flavors of the sea.<br>
                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>International Cuisines</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A variety of eating alternatives, including a variety of different cuisines, are available to guests in
                    the lively and historic neighborhood of South Street Seaport, NYC, which is situated in Manhattan, New
                    York City.<br>
                    This region is well-liked by both locals and tourists due to its picturesque cobblestone streets and
                    breathtaking waterfront vistas.<br>

                    South Street Seaport, NYC is a fusion of flavors when it comes to world food.<br> You may discover a
                    restaurant that meets your taste buds, whether you are wanting Italian, Mexican, Asian, or Mediterranean
                    food.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Everyone may find a place to dine, from exclusive fine dining venues to simple cafes.<br>

                    Visit one of the genuine trattorias for real Italian food, which includes delicacies like fresh pasta,
                    wood-fired pizzas, and mouthwatering seafood.<br>
                    The atmosphere at these eateries frequently transports customers to the streets of Naples or Rome and
                    captures the essence of Italy.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    South Street Seaport, NYC offers a variety of alternatives for people who like the vivid flavors of
                    Mexican food.<br>
                    You may enjoy delectable salsas, freshly produced guacamole, and tantalizing margaritas at every Mexican
                    restaurant, from informal taquerias dishing up scrumptious tacos to upmarket Mexican restaurants
                    presenting inventive meals with a twist.<br>

                    The diversity of Asian restaurants in the region will gratify fans of the food.<br>
                    At South Street Seaport, NYC, there is no shortage of Asian-inspired eateries serving everything from
                    sushi and sashimi to Thai curries and Chinese dim sum.<br>
                    Whether you're craving a cozy noodle bar or a hip izakaya, you may find culinary treats that transport
                    you through the many Asian cultures.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    South Street Seaport, NYC provides all you need if you want to sample Mediterranean cuisine.<br> The
                    neighborhood is filled with eateries serving Greek, Lebanese, and Turkish food.<br>
                    You may easily satisfy your hunger for Mediterranean flavors by indulging in tasty kebabs, savory mezze
                    spreads, or fragrant meals made with fresh ingredients and olive oil.<br>

                    For those looking for foreign food, South Street Seaport, NYC in Manhattan, New York City, is a gourmet
                    paradise.<br>
                    Visitors may start on a worldwide gastronomic tour right in the center of this historic neighborhood,
                    thanks to the wide variety of eating alternatives available there.<br>
                    South Street Seaport provides an amazing dining experience that will leave you wanting more, whether
                    you're in the mood for Italian, Mexican, Asian, or Mediterranean cuisine.<br>
                    Therefore, savor the diverse array of flavors and the lively culinary scene that this area has to
                    offer.<br>


                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Restaurants">Restaurants, cafes, and cuisine </h3>
                <h5>At the Tin Building</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    House of the Red Pearl, 96 South Street, Seaport (Chinese)
                    <br>
                    Fulton Fish, 96 South Street, Seaport (seafood)
                    <br>
                    Jean-Georges von Gerichten, 96 South Street, Seaport.
                    <br>
                    The Frenchman's Dough, 96 South Street, Seaport (Italian)
                    <br>
                    David Chang's Bar Wayo, 89 South Street, Seaport.
                    <br>
                    Shiku 96 South Street Seaport (Japanese)
                    <br>
                    Seeds & Weeds, 96 South Street, Seaport (Vegetarian)
                    <br>
                    Double yolk, 96 South Street Seaport (sandwiches)
                    <br>
                    Taquito, 96 South Street Seaport (tacos)
                    <br>
                    Creps and Dosas, 96 South Street, Seaport.
                    <br>
                    T Cafe, 96 South Street, Seaport.
                    <br>
                    Bakery, 96 South Street, Seaport.
                    <br>
                    Patisserie, 96 South Street, Seaport.
                    <br>
                    Momofuku Scan Bar, 89 South Street, Seaport.
                    <br>
                </p>



            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Around seaport</h5>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    There are Some restaurants and cafes around South Street Sea port, NYC
                    <br>
                    The Paris Cafe, 119 South Street, Seaport.
                    <br>
                    Industry Kitchen, Ocean City, New York, 70 South Street.
                    <br>
                    Case Tulum, 229 Front Street (Mexican)
                    <br>
                    Osteria Del Porto, located at 212 Front Street.
                    <br>
                    Di Fara Pizza, 108 South Street, Seaport.
                    <br>
                    Events and festivals South Street Seaport, NYC

                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Seasonal celebrations and activities</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Located close to Manhattan's southernmost tip, the South Street Seaport, NYC is a lively neighborhood
                    that offers year-round events, festivals, seasonal celebrations, and activities.<br>
                    Its rich nautical history and stunning waterfront views have attracted both residents and tourists.<br>
                    Examining the bustling atmosphere of the South Street Seaport while highlighting some of its seasonal
                    activities will be helpful.<br>

                    The seaport comes alive with fascinating events and festivals during the summer months.<br>
                    The Annual Seaport Summer Concert Series is one of the most eagerly anticipated events.<br>
                    Music lovers congregate to see live performances by well-known performers from a variety of genres at
                    the historic Pier 17.<br>
                    It's a memorable event made even better by the waterfront location and electric atmosphere.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In addition to music, the Seaport celebrates culture and cuisine with activities like Taste of the
                    Seaport.<br> Through tastings from nearby eateries, this gastronomic event highlights the neighborhood's
                    varied food.<br>
                    It's the ideal chance to see the exciting culinary scene while taking part in family-friendly activities
                    and live entertainment.<br>

                    When the weather becomes colder, South Street Seaport, NYC transforms into a winter wonderland.<br> The
                    season's high point is the Winterland Holiday Festival, held each year in the district of the
                    seaport.<br>
                    With its gigantic Christmas tree, cheery decorations, and magnificent ice-skating rink, this event
                    captures the essence of the festive season.<br> Visitors can enjoy hot chocolate and carolers in
                    addition to
                    seeing Santa Claus.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The South Street Seaport New York provides a range of events for people of all ages throughout the
                    year.<br>
                    The South Street Seaport Museum's exhibitions of old ships and artifacts provide a fascinating look into
                    the region's nautical history.<br> For a fully immersive experience, visitors may also join a guided
                    tour on
                    board the historic tall ship Wavertree.<br>

                    The Seaport also conducts outdoor cinema evenings where guests may see timeless classics and modern
                    favorites beneath the skies.<br>
                    It's a distinctive and unforgettable way to take in a movie experience while surrounded by the old-world
                    beauty of the neighborhood, with blankets strewn across the cobblestone streets.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    A dynamic neighborhood in Manhattan, New York City, the South Street Seaport, NYC hosts a variety of
                    events, festivals, and activities all year long.<br>
                    The Seaport offers something for everyone, whether you enjoy live music, fine dining, holiday
                    celebrations, or learning about maritime history.<br>
                    To be informed about the most recent events and to avoid missing out on the seasonal festivals and
                    activities that this lively neighborhood has to offer, be sure to visit the Seaport's official website
                    or local event listings.<br>
                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Concerts and live performances</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    The South Street Seaport, NYC is a bustling hub for events, festivals, concerts, and live performances,
                    in addition to being a historic district in Manhattan, New York City.<br>
                    Located along the East River, this waterfront neighborhood offers a unique combination of entertainment,
                    cultural events, and maritime history.<br>

                    The South Street Seaport New York presents several fascinating events and festivals that appeal to a
                    wide range of interests throughout the year.<br>
                    The most well-known is the Seaport Summer Concert Series, a free outdoor music gathering that features
                    renowned performers from diverse genres.<br>
                    These performances, which range from jazz to classical to rock and pop, feature great artists against
                    the breathtaking Manhattan cityscape.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Music lovers may find a place on the rooftop of Pier 17 or take in the tunes while pacing the
                    cobblestone streets.<br>

                    The Seaport presents a variety of events that honor many cultures, art forms, and community involvement,
                    in addition to the summer music series.<br>
                    One such occasion is the yearly Heritage Festival held at the South Street Seaport, NYC Museum, which
                    celebrates the region's rich maritime heritage.<br>
                    Visitors may take part in interactive activities, tour historic ships, and discover how nautical customs
                    influenced New York City.<br>



                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Around the South Street Seaport, NYC, there are many locations that host live music performances all
                    year.<br>
                    The renowned Beekman Beer Garden Beach Club, which is located right on the water, hosts a variety of
                    concerts, including those by local and international performers.<br>
                    This outdoor venue offers mouthwatering food and drinks, along with live music, in a relaxed and
                    informal atmosphere.<br>

                    Seaport Theatre, a small theater that hosts off-Broadway musicals, comedy shows, and other stage acts,
                    is available for anyone who is interested in attending theatrical performances.<br>
                    Taking in a live concert at the Seaport Theatre is an unforgettable experience due to its distinctive
                    location and proximity to the ocean.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    South Street Seaport, NYC features a diverse selection of stores, eateries, and museums, in addition to
                    performances and festivals.<br>
                    Explore the neighborhood's cobblestone streets, peruse the shops, dine at waterfront restaurants, and
                    learn more about the maritime history of the area at the South Street Seaport, NYC, s Museum.<br>
                    In addition to being a historic neighborhood, the South Street Seaport in Manhattan is also a thriving
                    entertainment hub.<br>
                    This waterfront neighborhood offers a vibrant atmosphere for inhabitants and visitors to immerse
                    themselves in music, culture, and community participation thanks to its enticing events, festivals, and
                    live performances.<br>

                    The South Street Seaport, NYC provides a memorable experience for everyone, whether it's taking in a
                    performance on the Pier 17 rooftop, learning about the rich maritime legacy at the South Street Seaport,
                    NYC, s Museum, or soaking up the lively atmosphere at the Beekman Beer Garden Beach Club.<br>

                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Outdoor">Outdoor Spaces and Activities</h3>
                <h5>Pier 17 rooftop experiences</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    In the exclusive South Street Seaport, NYC’s neighborhood of Lower Manhattan, Pier 17 provides a wide
                    range of outdoor areas and pursuits that guarantee spectacular rooftop experiences.<br>
                    This renovated pier offers tourists breathtaking views of the city skyline, Brooklyn Bridge, and the
                    East River from its location along the river.<br>

                    With its remarkable selection of amenities, Pier 17's rooftop is a fantastic destination for both locals
                    and visitors.<br>
                    It offers enough space for a variety of activities and events with more than 1.5 acres of open area.<br>
                    The rooftop concert venue, which offers an excellent array of performers all year, is one of the main
                    attractions.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The open-air atmosphere is sure to improve the musical experience, whether it's a quiet acoustic session
                    or a dynamic show by a famous musician.<br>

                    The rooftop at Pier 17 offers a wide selection of activities in addition to live music.<br>
                    Yoga sessions, fitness courses, and group workouts taught by qualified teachers are all available to
                    visitors.<br>
                    The East River provides the ideal atmosphere for a restorative workout.<br>
                    There are lively outdoor lounges where you can recline with friends, enjoy delectable cuisine, and cool
                    beverages, and take in the picturesque Manhattan skyline for those who are looking to decompress.<br>

                    Pier 17's rooftop activities go beyond just listening to music and working out.<br>



                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Seasonal activities held there include fashion presentations, festivals, and outdoor film
                    screenings.<br>
                    You may anticipate finding a thrilling event that suits your interests whenever you go, no matter what
                    time of year it is.<br>

                    Also, not to be missed are the gastronomic options at Pier 17.<br> From fast food joints to fine dining
                    options, the rooftop offers a wide variety of dining options.<br>
                    There is food to please every palate, whether you are seeking street food, seafood, or foreign
                    cuisine.<br>
                    The experience that bests captures Pier 17's character is enjoying a delicious lunch while admiring the
                    spectacular views.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In the end, Pier 17 rooftop events provide a distinctive and engaging opportunity to take in Manhattan's
                    splendor, meet with like-minded individuals, and make priceless memories.<br>
                    The outdoor areas and activities at Pier 17 guarantee an amazing experience in the center of New York
                    City, whether you're a music fan, a fitness enthusiast, or simply looking for a one-of-a-kind
                    ambience.<br>

                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Waterfront promenade</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    In Manhattan, New York City, the South Street Seaport, NYC is a thriving neighborhood that provides
                    tourists with a variety of outdoor areas and activities to enjoy.<br>
                    The area's spectacular waterfront promenade, which spans along the East River and offers breath-taking
                    vistas and a multitude of recreational options, is one of its most alluring attractions.<br>

                    The waterfront promenade of South Street Seaport, NYC is a vibrant center for entertainment, eating, and
                    leisure, as well as a doorway to the city's nautical past.<br>

                    The promenade itself is a well-kept pavement for pedestrians that follows the East River.<br>



                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It offers a peaceful retreat from the busy city streets since it is lined with lovely gardens, benches,
                    and seating places.<br>
                    The promenade has plenty to offer everyone, whether you want to take a leisurely stroll, have a picnic
                    with friends and family, or just relax and take in the expansive views of the lake.<br>
                    There are several things to participate in while you stroll around the shore.<br> For the daring, there
                    are
                    kayaking and boating options that let you fully immerse yourself in the river.<br>
                    Additionally, visitors looking for a distinctive view of the city skyline can take advantage of the
                    water taxis and tourist cruises that are offered.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A wide range of ancient ships, including recognizable tall ships like the Wavertree and the Peking, may
                    be seen in the South Street Seaport, NYC.<br>
                    These ships provide educational programs and exhibitions for people of all ages and give visitors an
                    insight into New York City's nautical background.<br>
                    Anyone interested in maritime history would benefit from exploring these wonderful ships.<br>
                    The waterfront promenade is a cultural magnet in addition to its historical features.<br>
                    Regular outdoor concerts, art shows, and culinary festivals are held in the neighborhood, which improves
                    the ambiance and offers a variety of entertainment alternatives for tourists.<br>
                    These gatherings highlight local talent and foster a buzzing atmosphere that attracts both residents and
                    visitors.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    The South Street Seaport, NYC has a wide range of eating alternatives available.<br>
                    There is a broad variety of gastronomic pleasures to savor, ranging from seafood restaurants offering
                    freshly caught fish to cozy cafés and sophisticated eating facilities.<br>
                    The promenade provides options to suit every taste and occasion, whether you're in the mood for a
                    relaxed riverside lunch or a formal dining experience.<br>
                    The waterfront promenade at the South Street Seaport, NYC in Manhattan is a remarkable location that
                    expertly mixes history, culture, and enjoyment.<br>
                    It is a must-visit place for tourists and residents alike because of its breathtaking vistas,
                    educational opportunities, and lively environment.<br> So, enjoy the waterfront atmosphere as you wander
                    gently along the promenade and take in everything that this magnificent place has to offer.<br>


                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Aquatic pursuits and cruises </h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It is a well-liked location for both residents and tourists due to the abundance of outdoor areas and
                    activities it provides.<br> The numerous water sports and cruises offered in this region are among its
                    main
                    draws.<br>
                    The South Street Seaport New York offers water activities for people of all interests and tastes.<br>
                    There is something for everyone, whether you prefer thrilling activities or more sedate ones.<br> Jet
                    ski
                    rentals are easily accessible for anyone looking for an adrenaline-fueled adventure.<br>
                    These let you cross the river quickly while enjoying breath-taking views of the famous Manhattan
                    skyline.<br>
                    You can take a peaceful boat trip on the East River if you'd rather take it slower.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Several businesses provide boat trips that highlight the nearby sights, including the Statue of Liberty,
                    the Brooklyn Bridge, and Governors Island.<br>
                    These guided excursions offer insightful historical commentary that helps tourists comprehend the city's
                    extensive nautical history.<br>

                    The South Street Seaport, NYC also offers a wide selection of cruises that accommodate various interests
                    and lengths.<br>
                    There are alternatives to suit your interests, from quick harbor cruises to all-day trips.<br>
                    For a wonderful experience for everyone, many cruises provide onboard facilities like live
                    entertainment, culinary choices, and even dance floors.<br>
                    The seaport offers chances for active water-based pleasure in addition to tourism.<br>
                    Paddleboarding and kayaking are popular options for individuals looking to get fit while taking in the
                    scenery.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Both newcomers and seasoned aficionados can borrow equipment and participate in guided lessons.<br>
                    Additionally, the South Street Seaport, NYC holds several events and festivals all year, enhancing the
                    region's enthusiasm.<br>
                    Water-related activities, including boat parades, water sports tournaments, and fireworks displays, are
                    frequently included in these festivals.<br>
                    A wide variety of water sports and cruises are available at the South Street Seaport, NYC in Manhattan,
                    New York City.<br>
                    This historic area offers both exhilarating adventures and tranquil boat rides, so whatever you're
                    looking for, it's here.<br> So, enjoy the waterfront's splendor, take in the views, and savor the South
                    Street Seaport, NYC's nautical ambiance.<br>

                </p>


            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Nearby">Nearby Attractions and Landmarks </h3>
                <div class="ml-3">
                    <ul>
                        <li>Brooklyn Bridge</li>
                        <li>Wall street</li>
                        <li>Statue of liberty</li>
                        <li>One world trade Center</li>
                    </ul>
                </div>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="questions">Here are some of the frequently asked questions about Manhattan's South Street Seaport
                    New York.</h3>
                <h4>FAQ:</h4>
                <h5>What is South Street Seaport, NYC?</h5>
                <p>The South Street Seaport, NYC is a renowned district in Manhattan that showcases the city's rich maritime
                    history, offering various attractions, dining establishments, and shopping experiences.
                </p>
                <h5>Where can I find the South Street Seaport, NYC?</h5>
                <p> The South Street Seaport New York is situated in Lower Manhattan, near the intersection of Fulton St and
                    South Street. It provides captivating views of the East River waterfront.
                </p>
                <h5>What can I explore and enjoy at the South Street Seaport, NYC?</h5>
                <p>
                    The South Street Seaport New York offers a plethora of attractions, including historic vessels, cultural
                    exhibits, galleries, diverse dining options, and unique retail experiences. Visitors can immerse
                    themselves in the maritime heritage, appreciate scenic vistas, dine, shop for distinctive items, and
                    partake in events.
                </p>
                <h5>Can I embark on boat tours from the South Street Seaport, NYC?</h5>
                <p> Boat tours departing from the South Street Seaport, NYC are available, providing visitors with the
                    opportunity to explore the enchanting New York Harbor and admire iconic landmarks like the Statue of
                    Liberty and the Brooklyn Bridge.
                </p>
                <h5>Are there dining options available at the South Street Seaport, NYC?</h5>
                <p>Certainly! The South Street Seaport, NYC boasts a diverse range of dining options. Visitors can savor
                    culinary delights from restaurants, cafes, and food vendors that offer an array of cuisines, including
                    delectable seafood and international flavors.
                </p>
                <h5>Is there an entrance fee to visit the South Street Seaport, NYC?</h5>
                <p>No, visiting the South Street Seaport, NYC does not require a general entrance fee. However, certain
                    attractions within the district may have separate admission fees.
                </p>
                <h5>Is the South Street Seaport, NYC accessible for individuals with disabilities?</h5>
                <p>
                    Yes, the South Street Seaport, NYC strives to ensure accessibility for individuals with disabilities.
                    Many of the attractions, shops, and dining establishments within the district provide wheelchair ramps
                    and other facilities to accommodate different needs.
                </p>
                <h5>Can I host private events at the South Street Seaport, NYC?</h5>
                <p>
                    Yes, the South Street Seaport New York offers venues that can be rented for private events such as
                    weddings, corporate gatherings, and celebrations. For information regarding availability and
                    reservations, it is recommended to contact the venues directly.
                </p>
                <h5>Are there any parks or outdoor spaces at the South Street Seaport, NYC?</h5>
                <p>
                    Yes, the South Street Seaport, NYC features inviting outdoor spaces where visitors can relax, relish the
                    waterfront ambiance, and partake in outdoor activities. These spaces frequently host seasonal events and
                    live performances.
                </p>
                <h5>Is parking available at the South Street Seaport, NYC?</h5>
                <p>
                    Yes, there are parking facilities conveniently located near the South Street Seaport New York. However,
                    considering the limited availability and potential cost of parking in Manhattan, it is worth considering
                    alternative transportation options, such as public transit.
                </p>

            </div>
            <h3 id="Directions" class="my-3">Direction</h3>
            <p id="map">
                Subway numbers (A, C, 2, 3, 4,5, J, and Z) to Downtown to (Fulton St Station) in downtown Manhattan; from
                there,the seaport is just a few blocks to east.<br>
                Walk east from Fulton Street or john Street to seaport.<br>
            </p>
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.5316876467537!2d-74.00561992397468!3d40.70631057139441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a3aea267a25%3A0x62bd5f4bb9502c53!2sSouth%20St%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1704360294633!5m2!1sen!2sus"
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
