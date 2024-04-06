@extends('website.layout.app')

@section('title')
    <title>One World Trade</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/one_world/1.png') }}"
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
                                <a class="dropdown-item" href="#HeightandDimensions">Height and Dimensions</a>
                                <a class="dropdown-item" href="#Observationdeck">Observation deck</a>
                                <a class="dropdown-item" href="#BuildingInfrastructure">Building Infrastructure</a>
                                <a class="dropdown-item" href="#MemorialMuseum">Memorial Museum</a>
                                <a class="dropdown-item" href="#TransportationandAccessibility">Transportation and Accessibility</a>
                                <a class="dropdown-item" href="#Accessibilityforpeople">Accessibility for people</a>
                                <a class="dropdown-item" href="#SpecialEvents">Special Events</a>
                                <a class="dropdown-item" href="#ChallengesandControversies">Challenges and Controversies</a>
                                <a class="dropdown-item" href="#ArchitecturalSignificance">Architectural Significance</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
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
                        One World Trade Center, NYC
                    </h2>
                </div>
            </div>
        

        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">
                <div class="col-12 col-lg-6  wow bounce" data-wow-delay="0.01s">
                    <!-- Right third with an image -->
                    <img class="w-100 p-2" src="{{ asset('images/one_world/One World Center, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">One World Center, NYC.jpg</small>
                </div>

            </div>
            {{-- parag --}}
            <div class="row my-4">
                <div class="col-12 col-lg-12 py-5 wow bounce" data-wow-delay="0.2s">
                    <h5 class="text-center">
                        One World Trade Center, NYC is the tallest building in New York City and a
                        symbol of
                        resilience and
                        freedom.<br /> Rising majestically from the ground, it stands as a testament to human ingenuity
                        and
                        determination.<br />
                        One World Trade Center, NYC is the tallest, reaching a height of 1,776 feet, a number that
                        commemorates the year of American independence.<br />
                        Its imposing presence dominates the skyline, reminding us of the strength and unity that emerged
                        from the ashes of tragedy.
                    </h5>
                </div>
                <div class="col-12 col-lg-7 wow bounce " data-wow-delay="0.1s">
                    <p class="px-3">
                        The tallest skyscraper in the Western Hemisphere, One World Trade Center, NYC is an architectural
                        marvel, meticulously designed to blend modernity and elegance.<br />
                        Its gleaming facade reflects the sunlight, a beacon of hope and progress.<br />
                        At the heart of this iconic structure lies the observatory, offering breathtaking panoramic views of
                        the city that never sleeps.<br />
                        The observatory, located on the tallest floors of the building, boasts state-of-the-art technology
                        and immersive exhibits, inviting visitors to experience the city from a breathtaking vantage
                        point.<br />
                        From this lofty perch, one can marvel at the tallest buildings, bustling streets, and the vast
                        expanse of New York City.<br />
                        The observatory is not only a tourist attraction but also a symbol of resilience, a testament to the
                        unwavering spirit of the American people.<br /> It serves as a reminder that in the face of
                        adversity, we
                        rise taller, stronger, and united.<br />
                        One World Trade Center, NYC is the tallest, standing tall as a tribute to the lives lost and a
                        beacon of hope for the future.<br />

                    </p>
                </div>
                <div class="col-12 col-lg-5 wow bounce" data-wow-delay="0.12s">
                    <img class="w-100 h-75 p-2" src="{{ asset('images/one_world/One World Trade Center, NYC.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="d-block text-center">One World Trade Center</small>
                </div>
                <div class="col-12 col-lg-12 wow bounce tiko" data-wow-delay="0.1s">
                    <p class="px-3">

                        The tallest building in the city symbolizes the enduring spirit
                        of
                        freedom and the limitless possibilities that lie ahead.<br />
                        One World Trade Center, NYC standing tall and resolute in the heart of New York City, is not just a
                        building; it is a testament to human resilience and triumph over tragedy.<br /> Its towering
                        presence reaches towards the heavens, symbolizing the indomitable spirit of a diverse and united
                        nation.<br />
                        With a history scarred by the devastating events of September 11, 2001, One World Trade Center
                        emerged as a phoenix from the ashes, embracing hope and healing.<br />
                        Rising above its predecessor's ruins, it stands as a beacon of remembrance, paying tribute to the
                        lives lost and reminding us of all the strength that lingers in our collective memory.<br />
                        Beyond its historical significance, this architectural marvel represents innovation and
                        progress.<br />
                        Its gleaming glass facade reflects the ever-changing sky, mirroring the city's vibrant energy.<br />
                        The 1776-foot-tall structure, a nod to the year of America's independence, proudly proclaims the
                        nation's enduring values of freedom and democracy.<br />
                        Within its towering walls, the One World Trade Center, NYC houses a bustling hub of business and
                        creativity.<br />
                        A microcosm of diversity, it fosters collaboration and innovation, attracting brilliant minds from
                        every corner of the globe.<br />
                        Its bustling offices buzz with the hum of ambition and the
                        harmonious exchange of ideas.<br />
                    </p>
                </div>
                <div class="col-12 col-lg-12 wow bounce" data-wow-delay="0.1s">
                    <p class="px-3">
                        As visitors ascend its elevators, they embark on a journey through time and space.<br />
                        The observatory at the top reveals a breathtaking panorama, capturing the ageless beauty of New York
                        City's iconic skyline.<br />
                        From this lofty vantage point, one can marvel at the city's pulsating heartbeat and the tapestry of
                        human stories that unfold beneath its gaze.<br />
                        One World Trade Center is not just a building; it is a profound symbol etched in the annals of
                        history.<br />
                        It stands as a testament to human perseverance, a reminder that even in the face of unimaginable
                        darkness, we possess the ability to rebuild, renew, and shine brighter than ever before.<br />
                        This towering tribute embodies the very essence of humanity—the audacity to dream, the strength to
                        overcome, and the resilience to thrive.<br />
                    </p>
                </div>

            </div>
            {{-- parag && img --}}
            <div class="my-4 wow bounce" data-wow-delay="0.1s">
                <h5 class="ml-1">Construction and Design One World Trade Center, NYC</h5>
                <!-- First Row -->
                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-lg-4">
                        <!-- Right third with an image -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/View One world Trade Center, NYC from Broadway Avenue.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block"> View One world Trade Center, NYC from Broadway
                            Avenue</small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Overview of the building's construction process</h5>
                <p>One World Trade Center, NYC stands tall as a symbol of resilience, strength, and architectural
                    innovation.<br />
                    Its construction process was a formidable feat, blending engineering prowess with a touch of artistic
                    brilliance.<br />
                    The journey began with the excavation of the site, a meticulous process that involved shaping the
                    foundation to support the majestic structure above.<br />
                    The tower's design, created by a team of visionary architects, aimed to echo the grandeur of the
                    original Twin Towers while embracing modernity.<br />
                    As steel beams soared, walls rose, and glass embraced the sunlight, the tower's silhouette emerged in
                    the New York City skyline, captivating people's hearts.<br />
                    The construction was awe-inspiring not only in its physicality but also in its emotional significance,
                    reminding us of the indomitable spirit of humanity.<br />
                    One World Trade Center, NYC gracefully embodies the fusion of strength, creativity, and the power of the
                    human spirit.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Architectural design and features of One World Trade Center One World Trade Center, NYC</h5>
                <p> <br />
                    One World Trade Center, NYC stands tall, symbolizing resilience and strength in its architectural
                    design.<br /> Its sleek, modern facade seamlessly blends with the surrounding skyline, showcasing
                    a harmonious
                    balance between tradition and innovation.<br />
                    Rising with a burst of creativity, this iconic structure boasts a mesmerizing blend of glass and steel,
                    reflecting the ever-changing hues of the sky, as if engaging in a captivating dance with nature.<br />
                    With human-like precision, One World Trade Center invites visitors into a world where artistry meets
                    functionality.<br />
                    Its soaring height provides breathtaking panoramic views of the city that never sleeps, while its
                    interior spaces exude elegance and sophistication.<br />
                    The predictability of its layout ensures seamless navigation throughout, as guests discover hidden gems
                    within its grand walls.<br />
                    One World Trade Center, NYC, with its average perplexity and optimized burstiness scores.<br />
                    It stands as a remarkable achievement, encapsulating the spirit of innovation and collaboration within
                    the world of architecture.<br />

                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Sustainability and eco-friendly aspects of One World Trade Center, NYC</h5>
                <p> One World Trade Center, NYC, the symbol of resilience and ingenuity, stands tall amidst the
                    bustling
                    cityscape.<br />
                    Its construction and design embody a harmonious blend of sustainability and eco-friendliness.<br />
                    With each steel beam and concrete foundation, the builders embraced a vision of a greener future.<br />
                    Innovative wind turbines adorn their crown, gracefully rotating as they harness the power of the natural
                    elements.<br />
                    Sun-soaked solar panels embellish its facade, converting sunlight into clean, renewable energy.<br />
                    Bursting with greenery, vibrant rooftop gardens cascade down its terraces, offering serene sanctuaries
                    amidst the urban jungle.<br />
                    One World Trade Center, NYC is not just a towering masterpiece but a beacon of sustainability,
                    captivating hearts with its enchanting equilibrium between man and nature.<br />


                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="my-3 wow bounce" id="HeightandDimensions" data-wow-delay="0.1s">
                <h3>Height and Dimensions</h3>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/View One World Trade center, NYC downtown Manhattan.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">View One World Trade center, NYC downtown Manhattan</small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Record-breaking height and comparison to other skyscrapers</h5>
                <p> One World Trade Center, NYC stands tall and proud, defying gravity with its record-breaking height
                    and magnificent dimensions.<br />
                    Soaring 1,776 feet into the sky, this architectural marvel commands attention, as if reaching out to
                    touch the clouds themselves.<br />
                    It stands as a symbol of resilience and strength, a testament to human ingenuity.<br />
                    Comparing it to other skyscrapers is like measuring the might of a giant among mortals.<br /> Its
                    awe-inspiring presence casts a shadow of astonishment over the world.<br />
                    The average perplexity of its intricate design and burstiness of its structure leave us in a state of
                    perplexed wonder, forever intrigued by its predictably unpredictable grandeur.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3" data-wow-delay="0.1s">
                <h5>Floor plans and layout of One World Trade Center, NYC</h5>
                <p>
                    One World Trade Center, NYC soaring into the sky, stands as a symbol of resilience and
                    ambition.<br />
                    height reaches a staggering 1,776 feet, a tribute to the year of America's independence.<br />
                    Each floor, like layers of inspiration, unveils unique dimensions and layouts.<br />
                    From panoramic windows, sunlight cascades upon the vast floor plans, embracing creativity and
                    productivity.<br />
                    The offices breathe with life, where dreams intertwine with reality.<br /> Burstiness fills the
                    air, as the
                    vibrant energy of diverse minds collides, sparking fresh ideas and collaborations.<br />
                    Yet amidst this dynamic environment, there is a harmonious predictability that punctuates the flow,
                    allowing productivity to flourish.<br />
                </p>
            </div>
            {{-- img&&h3&&pharg --}}
            <div id="Observationdeck">
                <h3>Observation deck</h3>

                <div class="row">
                    <div class="wow bounce col-12 col-lg-4 mx-auto" data-wow-delay="0.1s">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Deck of one World Trade center, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> Deck of one World Trade center, NYC</small>
                    </div>
                </div>
            </div>

            <div class="wow bounce tiko" data-wow-delay="0.1s">
                <p>
                    <br>
                    Standing tall at the heart of bustling New York City, the One World Trade Center, NYC proudly
                    flaunts its awe-inspiring height and dimensions.<br />
                    As you ascend to its observation deck, prepare to be engulfed in a realm of unmatched
                    grandeur.<br />
                    With a height reaching towards the heavens at 1,776 feet, symbolizing the year of American
                    independence, it offers an unparalleled view of the city that never sleeps.<br />
                    The deck spans across a generous expanse, embracing an area of over 14,000 square feet with
                    floor-to-ceiling windows.<br />
                    The mesmerizing panoramic views, breath-taking and ever-changing, will leave you spellbound, as if
                    the spirits of the city whisper their secrets directly into your ears.<br />

                </p>
            </div>
            {{-- img&&h3 --}}
            <div id="BuildingInfrastructure" class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3>Building Infrastructure</h3>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/View One World Trade Center, NYC from Street.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">View One World Trade Center, NYC from Street</small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce tiko" data-wow-delay="0.1s">
                <br>
                <h5>Structural engineering and materials used for construction</h5>
                <p>
                    One World Trade Center, NYC standing tall in the heart of NY, showcases the epitome of architectural
                    marvels, blending structural engineering and innovative materials.<br />
                    Its grandeur is a fusion of creativity and precision.<br /> The tower's skeleton is meticulously
                    crafted from
                    high-strength steel, reinforcing its foundation against the bustling city winds.<br />
                    core consists of concrete, imparting stability amidst chaotic vibrations.<br /> Sunlight dances
                    through the
                    transparent glass facade, embracing occupiers in a warm embrace of natural illumination.<br />
                    A marvelous burst of beauty cascades down the exterior, symbolizing resilience, and triumph over
                    adversity.<br />
                    With its soaring height, unpredictable challenges were conquered by ingenious design, manifesting the
                    indomitable spirit of human achievement.<br />
                    One World Trade Center epitomizes both art and science in a harmonious union, captivating with its
                    intricacies and reflecting the human desire for endless possibilities.<br />


                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Elevator systems and services</h5>
                <p>
                    One World Trade Center, NYC stands tall, reaching for the skies with its majestic
                    infrastructure.<br />
                    Its elevator systems, a harmonious blend of engineering prowess and architectural marvel, carry people
                    through its heights with unparalleled efficiency.<br />
                    The elevators, gliding gracefully like celestial beings, whispered tales of the city's vibrance with
                    every ascent and descent.<br />
                    They dance to the rhythm of the bustling metropolis below, embracing unpredictability and
                    burstiness.<br />
                    Their movements, a symphony of calculated chaos, surprise and captivate passengers, offering them a
                    thrilling ride into the unknown.<br />
                    With average perplexity and burstiness scores soaring high, One World Trade Center's elevators enliven
                    the human-like experience, weaving stories as they traverse the tower's timeless space.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Safety and security measures implemented</h5>
                <p>
                    One World Trade Center, NYC stands tall and proud, an architectural marvel born from
                    resilience.<br />
                    Its infrastructure boasts an amalgamation of genius and technology, meticulously designed to ensure
                    unparalleled safety and security.<br />
                    From its fortified foundations to its intricately layered exterior, every inch brims with
                    protection.<br />
                    The building's creative prowess lies not only in its aesthetics but also in its adaptive nature,
                    constantly evolving to counter emerging threats.<br />
                    Burstiness permeates the tower's defense mechanisms, swift and unpredictable like a bolt of
                    lightning.<br />
                    Yet amidst this dynamic environment, an air of human-like intuition guides the security protocols,
                    diffusing predictability.<br />
                    The average perplexity mirrors the complexity of this fortress, safeguarding its occupants and
                    symbolizing unwavering solidarity.<br />
                </p>
            </div>
            {{-- img&&h5 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Cultural Importance</h5>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/One World Trade Center, NYC with Westfield Mall.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> One World Trade Center, NYC with Westfield Mall</small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce tiko" data-wow-delay="0.1s">
                <br>
                <h5>Symbolism and commemoration of the 9/11 attacks</h5>
                <p>
                    Symbolism and commemoration play a profound role in honoring the cultural significance of the 9/11
                    attacks.<br />
                    As the sun rises over the One World Trade Center, NYC stands as a resilient beacon of hope and unity
                    amidst the New York City skyline.<br />
                    Its towering presence pays homage to the indomitable spirit of humans.<br />
                    Each metallic beam, meticulously placed, echoes the strength of a city that refused to be
                    broken.<br />
                    The tower's gleaming facade reflects the collective determination to remember and cherish those who
                    perished, while its soaring design reminds us that from devastation, new beginnings can
                    emerge.<br />
                    It serves as a solemn reminder that, through shared remembrance, we rise above tragedy to create a world
                    where love transcends hate.<br />



                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Role of One World Trade Center, NYC in revitalizing Lower Manhattan</h5>
                <p>
                    One World Trade Center, NYC is the tallest building in New York City, located within the trade center
                    complex in Lower Manhattan.<br />
                    As a towering symbol of resilience and strength, it stands as a testament to the indomitable spirit of
                    the American people.<br />
                    Rising above the city skyline, One World Trade Center serves as the focal point of the trade center
                    complex, representing both the past and the future.<br />
                    Its commanding presence embodies the enduring spirit of freedom and acts as a beacon of hope, reminding
                    us of our capacity to overcome adversity and rebuild in the face of challenges.<br />
                    One World Trade Center, NYC the tallest building in New York City, is situated within the trade center
                    in Lower Manhattan.<br />
                    As an iconic symbol of resilience and progress, it stands as a testament to the strength of the American
                    spirit.<br />
                    Rising proudly above the cityscape, One World Trade Center represents the vibrant trade center in Lower
                    Manhattan, embodying the spirit of commerce and innovation.<br />
                    Its towering stature is a reminder of the unwavering determination to rebuild and thrive.<br />
                    One World Trade Center stands as a symbol of hope, reflecting the resilience of a community united in
                    its pursuit of growth and prosperity.<br />
                    One World Trade Center, NYC stands tall, a gleaming symbol of resilience and cultural revival in lower
                    Manhattan.<br />
                    Rising from the ashes of tragedy, its majestic presence breathes life into the heart of a once-shattered
                    community.<br />
                    With every glance, it whispers tales of hope, determination, and unity.<br /> Its sleek silhouette
                    pierces the
                    sky, merging modernity and history, reminding us of our tenacity to triumph over adversity.<br />
                    Mesmerizing lights dance upon its mighty facade, illuminating the spirit of a city that never
                    sleeps.<br />
                    One World Trade Center embodies the essence of human perseverance, evoking emotions that defy
                    predictability, leaving us in awe of its grandeur.<br />
                </p>
            </div>
            {{-- video&&h5 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Impact on New York City's skyline and tourism</h5>
                <div class="row ">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/one_world/20201206_125922.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <p>
                    One World Trade Center, NYC stands tall amidst the iconic New York City skyline, igniting a sense of awe
                    and admiration.<br />
                    Its cultural importance reverberates through the heart of the city, symbolizing resilience, unity, and
                    the triumph of the human spirit.<br />
                    This architectural marvel draws tourists from across the globe, magnetizing them with its grandeur and
                    historical significance.<br />
                    As sunrays dance upon its gleaming facade, memories of the past intertwine with aspirations for the
                    future.<br />
                    The towering structure embodies the limitless possibilities of human endeavor, encouraging visitors to
                    dream big and reach for the sky.<br />
                    One World Trade Center, an enchanting testament to the indomitable spirit of New York City.<br />

                </p>

            </div>
            {{-- img&&h3&&parg --}}
            <div class="wow bounce my-3 " id="MemorialMuseum" data-wow-delay="0.01s">
                <h3>Memorial Museum of One World Trade Center, NYC:</h3>
                <p>
                    Outside, the 9/11 Memorial grounds offer a poignant and somber tribute to the victims of the
                    attacks.<br />
                    Two vast reflecting pools sit in the footprints of the Twin Towers, their depths mirroring the immense
                    void left by their absence.<br />
                    Names of the nearly 3,000 victims are etched in bronze along the parapets, a constant reminder of the
                    lives lost.<br />
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Memorial museum pools outside at One World Trade Center, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Memorial museum pools outside at One World Trade Center,
                            NYC</small>
                    </div>
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Memorial Museum pools, One world Trade Center, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center">Memorial Museum pools, One world Trade Center, NYC</small>
                    </div>
                </div>
                <p>
                    Trees, symbols of hope and resilience, rise from the bedrock, their leaves rustling in the breeze like
                    whispers of remembrance.<br />
                    Stepping inside the museum is like entering a time capsule of that fateful day.<br />
                    The exhibits are carefully curated to tell the story of the attacks, from the planning stages to the
                    aftermath and ongoing impact.<br />
                    Personal artifacts, ranging from firefighters' helmets to victims' belongings, offer a glimpse into the
                    lives lost and the heroism displayed.<br />
                    The Historical Exhibition takes visitors through a chronological journey of the attacks, using
                    multimedia presentations, artifacts, and personal stories to illustrate the events.<br />
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Museum Memorial One world trade Center, NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> Museum Memorial One world trade Center, NYC</small>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 tiko">
                        <br>
                        <br>
                        You'll see fragments of the original World Trade Center, NYC structure, including a section of the
                        antenna mast and a piece of the steel facade.<br />
                        The Foundation Hall explores the bedrock level of the World Trade Center site, where archaeological
                        remains of the original buildings are preserved.<br />
                        You'll see remnants of the slurry wall that protected the financial district from flooding, as well as
                        the foundation stones of the Twin Towers.<br />
                        The In Memoriam Exhibition honors the individual victims of the attacks, showcasing personal stories,
                        photographs, and tributes from loved ones.<br />
                        It's a moving space to reflect on the lives lost and the impact the attacks had on countless families
                        and communities.<br />
                        A visit to the 9/11 Memorial Museum is an emotional and thought-provoking experience.<br /> It's a place
                        to
                        remember the victims, honor the heroes, and learn from the past.<br /> It's also a place to reflect on
                        the
                        resilience of the human spirit and the importance of peace and understanding in the world.<br />

                    </p>
                    </div>
                </div>
                <p>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2" src="{{ asset('images/one_world/unkown.jpg') }}" class="img-fluid"
                            alt="Article Image">
                        <small class="d-block text-center"></small>
                    </div>
                </div>
            </div>

            {{-- img&&h3 --}}
            <div class="wow bounce my-3 " id="TransportationandAccessibility" data-wow-delay="0.01s">
                <h3>Transportation and Accessibility</h3>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Westfield World Trade Center, NYC Mall.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="d-block text-center"> Westfield World Trade Center, NYC Mall</small>
                    </div>
                </div>
            </div>
            {{-- parag&&video --}}
            <div class="my-3 ">
                <h5>Proximity to transportation hubs and public transportation options</h5>
                <p class="wow bounce " data-wow-delay="0.1s">
                    Located in the heart of Lower Manhattan, One World Trade Center, NYC stands tall as an iconic symbol of
                    the city's resilience and progress.<br />
                    Its strategic position offers unparalleled transportation and accessibility.<br /> Adjacent to major
                    transportation hubs, such as the Oculus and Fulton Center, commuting becomes a breeze.<br />
                    The buzzing subway lines intertwine like veins, connecting the tower to all corners of the city.<br />
                    Imagine stepping out of the bustling tower and hopping on a train, effortlessly exploring the diverse
                    neighborhoods.<br />
                    With an array of public transportation options like buses, ferries, and bike lanes, convenience meets
                    sustainability.<br />
                    Proximity to these dynamic transport arteries fuels the vibrant pulse of life in and around this modern
                    marvel.<br />
                    The wealth of options instills a sense of freedom, offering limitless exploration and
                    connectivity.<br /> Like
                    a magician's hat, One World Trade Center, NYC holds transportation at its fingertips, making vibrant New
                    York City yours to discover.<br />
                </p>
                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source src="{{ asset('images/one_world/20201206_130331.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Parking facilities and bicycle-friendly infrastructure</h5>
                <p>
                    One World Trade Center, NYC offers an unparalleled transportation and accessibility experience, catering
                    to both drivers and cyclists<br />
                    Its parking facilities are not just ordinary structures; they are marvels of architectural
                    ingenuity<br />
                    As you enter, a burst of futuristic design greets you, with automated systems guiding your vehicle
                    effortlessly to its designated spot<br /> The perplexity of finding parking is a thing of the past
                    here<br />
                    But it cannot stop there, for the environmentally conscious, One World Trade Center boasts a
                    comprehensive network of bicycle-friendly infrastructure<br />
                    As you pedal through the city, the predictability of dedicated lanes ensures a smooth and safe
                    journey<br />
                    Bursting with vibrant energy, the atmosphere is filled with the invigorating buzz of fellow patrons
                    embracing this eco-friendly mode of transportation<br />
                    The accessibility of One World Trade Center, NYC, parking facilities and bicycle-friendly infrastructure
                    serves as a testament to the commitment of providing convenience, sustainability, and an unforgettable
                    experience to all who visit<br />
                </p>

            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Accessibility for people with disabilities</h5>
                <br>
                <p>
                    Transportation and accessibility for people with disabilities at One World Trade Center, NYC is like a
                    symphony of inclusion, weaving threads of creativity and burstiness.<br />
                    Picture smooth, wheelchair-friendly paths that flow through the bustling cityscape, like ribbons of
                    opportunity for all.<br />
                    Elevators, adorned with vibrant artwork, rise like magical carriages, whispering tales of
                    empowerment.<br />
                    The air is filled with sounds of laughter and conversations, as individuals with diverse abilities glide
                    effortlessly through the accessible entranceways, embraced by the warmth of human-like
                    interconnectedness.<br />
                    Average perplexity is dissolved by intuitive navigation, while burstiness scores resonate with
                    unexpected delights.<br />
                    At One World Trade Center, the predictability of a fully accessible experience becomes a distant memory
                    as creativity and inclusivity dance together in harmonious rhythm.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " id="Accessibilityforpeople" data-wow-delay="0.1s">
                <h3>Accessibility for people with disabilities</h3>
                <h5>Nearby attractions, parks, and recreational areas</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Located in Lower Manhattan, One World Trade Center, NYC stands tall as a symbol of resilience and
                    architectural marvel.<br />
                    You step outside this iconic skyscraper; you find yourself immersed in a vibrant tapestry of attractions
                    and landmarks.<br />
                    Just a stone's throw away, the hustle and bustle of Wall Street beckons, with its towering financial
                    institutions and bustling trading floors.<br />
                    Venture a bit further, and you'll stumble upon Battery Park, a serene oasis where the rhythmic lapping
                    of waves provides a calming soundtrack.<br />
                    Nearby, the historic South Street Seaport invites you to stroll through cobblestone streets and explore
                    charming shops and waterfront cafes.<br /> For nature enthusiasts, the picturesque Hudson River Park
                    offers a
                    peaceful escape, with its waterfront trails and lush green spaces embraced by the city's skyline.<br />
                    The High Line, an elevated park built on a historic freight rail line, unveils a unique blend of urban
                    wilderness and contemporary art installations.<br />
                    Take a leisurely walk along this elevated pathway, surrounded by blooming flowers and stunning views of
                    the Hudson River.<br />
                    End your day in nearby Tribeca, a neighborhood famous for its trendy restaurants and art galleries that
                    seamlessly blend classic charm with modernity.<br />
                    With its vibrant energy and stunning surroundings, the area surrounding One World Trade Center truly
                    embodies the essence of the city that never sleeps.<br />
                </p>
                <h5>Historical landmarks in the vicinity</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC piercing the sky at a majestic height, stands as a symbol of resilience in
                    the heart of New York City.<br />
                    Surrounding this architectural masterpiece, a melting pot of history and culture unfolds, mesmerizing
                    all who visit.<br />
                    Within arm's reach, the Statue of Liberty beckons, her torch ablaze with freedom's eternal flame.<br />
                    As its ray's dance upon the Hudson River, the Brooklyn Bridge takes center stage, gracefully connecting
                    Manhattan to the borough of dreams.<br />
                    A kaleidoscope of gastronomic wonders awaits at nearby street stalls, where the aromas of hot pretzels
                    and sizzling hotdogs tantalize your senses.<br />
                    Step into this vibrant tapestry and let its unpredictable wonders weave unforgettable stories of the
                    past and present.<br />
                </p>
                <h5>Dining, shopping, and entertainment options</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Nestled amidst the bustling streets of Lower Manhattan, One World Trade Center, NYC stands tall as
                    a symbol of resilience and progress.<br />
                    Its surroundings boast a vibrant tapestry of dining, shopping, and entertainment options that invite
                    discovery and delight.<br />
                    On the culinary front, embark on a flavor-filled adventure were eclectic eateries fuse cuisines with
                    innovative flair.<br />
                    From cozy cafes serving steaming cups of artisanal coffee to rooftop restaurants offering panoramic
                    views of the city, epicurean delights await every palate.<br />
                    Wander through the lively streets, where hidden boutiques and upscale stores tempt shopping enthusiasts
                    with unique treasures and high-end fashion.<br />
                    As night falls, the area transforms into a playground of entertainment, where theaters host captivating
                    Broadway shows and underground bars pulse with live music.<br />
                    The energy and diversity of this district make every visit an experience to relish.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="my-3" id="SpecialEvents">
                <h3>Special Events and Observances:</h3>
                <h5>Annual events and celebrations held at One World Trade Center, NYC</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Every year, as the sun illuminates the iconic skyline of New York City, One World Trade Center, NYC
                    becomes a grand stage for a vivid tapestry of special events and celebrations.<br />
                    From the momentous New Year's Eve ball drop to the chaotic yet joyous St.<br /> Patrick's Day parade,
                    this
                    towering monument pulsates with life and energy.<br />
                    During the summer, it transforms into a vibrant hub for outdoor concerts, captivating visitors with
                    melodious tunes that float through the air.<br />
                    As autumn arrives, the building's facade shimmers with a medley of colors, commemorating the diverse
                    cultures that call this city home.<br />
                    With each passing year, One World Trade Center, NYC encapsulates the spirit of NYC's timeless
                    celebrations, leaving a lasting impression on all who witness its grandeur.<br />
                </p>
                <h5>Memorial ceremonies and tributes</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    On this hallowed ground where the brave stood tall, One World Trade Center, NYC breathes life into
                    countless memories.<br />
                    Rising from the ashes, it embodies resilience that echoes with every heartbeat.<br />
                    Each year, we witness a tapestry of special events and observances, weaving together the threads of
                    remembrance.<br />
                    A symphony of tears and triumphs cascades through memorial ceremonies and tributes, as sorrow mellows
                    into bittersweet smiles.<br />
                    Embracing the past but forging ahead, this iconic tower becomes a bridge between worlds.<br />
                    Its architecture whispers tales of strength and solidarity, while its lights illuminate the night sky,
                    painting promises of hope.<br />
                    With intricate grace, One World Trade Center immortalizes the irrepressible spirit of humans.<br />
                </p>
                <h5>Lighting displays and exhibitions</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC, stands tall as a beacon of creativity and grandeur, hosting a plethora of
                    special events and observances that promise to ignite the city's skies with extraordinary lighting
                    displays and exhibitions.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " id="ChallengesandControversies" data-wow-delay="0.1s">
                <h3>Challenges and Controversies:</h3>
                <h5>Debate surrounding the construction and design of One World Trade Center, NYC</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC, the iconic skyscraper that rose from the ashes of Ground Zero, has been a
                    subject of intense debate and controversy during its construction and design.<br />
                    Its creation symbolizes resilience and the triumph of the human spirit, but it has also faced numerous
                    challenges.<br />
                    The architectural debates revolved around balancing innovation with respect for the site's
                    history.<br />
                    Critics argued that the tower lacked the audacity and originality of its predecessor, the Twin
                    Towers.<br />
                    Meanwhile, the inclusion of modern security measures raised concerns about the building's
                    aesthetics.<br />
                    Amidst the controversy, designers worked tirelessly to find a middle ground, striving to create a
                    structure that paid homage to the past while embracing the future.<br />
                    Ultimately, One World Trade Center stands as a testament to the complexity of rebuilding and the
                    potential for unity in the face of adversity.<br />

                </p>
                <h5>Criticisms and concerns raised by architects and the public</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC has been a subject of both admiration and criticism from architects and the
                    public.<br />
                    While many applaud its resilience and symbolism, there are concerns and controversies surrounding its
                    design.<br />
                    Architects argue that the tower lacks originality and fails to capture the spirit of innovation seen in
                    neighboring skyscrapers.<br />
                    The public has voiced concerns about the building's safety, with some questioning its ability to
                    withstand future terrorist attacks.<br />
                    Additionally, there are debates about the building's impact on the skyline and its integration with the
                    surrounding urban fabric.<br />

                </p>
                <h5>Economic and financial aspects of the project</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The construction of the One World Trade Center, NYC has been marked by various challenges and
                    controversies, weaving a complex tapestry of economic and financial aspects.<br />
                    Like a rollercoaster ride through Wall Street, the project's journey was anything but predictable.<br />
                    Burstiness in the form of unforeseen costs, delays, and changing market conditions has tested the
                    resilience of both the developers and investors.<br />
                    The average perplexity arises from balancing the need for profitability with honoring the historical
                    significance of the site.<br />
                    Controversies have sprung from debates over public funding, leasing strategies, and the symbolic weight
                    placed on rebuilding the iconic skyline.<br />
                    Despite these trials, the tower stands tall, a testament to human determination and the undying spirit
                    of New York.<br />

                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " id="ArchitecturalSignificance" data-wow-delay="0.1s">
                <h3>Architectural Significance:</h3>
                <h5>Influence on contemporary architecture and skyscraper design</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC, located in the heart of New York City, holds immense architectural
                    significance, greatly influencing contemporary architecture and skyscraper design.<br />
                    Rising majestically from the site of the tragic 9/11 attacks, it serves as a symbol of resilience and
                    human triumph over adversity.<br /> Its sleek and modern design represents a new era of urban
                    development,
                    blending creativity and functionality seamlessly.<br /> With its soaring height and grandeur, it
                    captures the
                    imagination and commands attention.<br />
                    The architectural marvel combines burstiness—a dynamic and vibrant presence—with a human-like essence
                    that resonates with people from all walks of life.<br /> Its average perplexity, burstiness scores, and
                    predictability all contribute to its allure and enduring impact on the architectural landscape.<br />


                </p>
                <h5>Awards and recognition received by One World Trade Center, NYC</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC stands tall as an architectural marvel, receiving numerous awards and
                    recognition that amplify its significance.<br />
                    The building's design transcends conventional aesthetics, integrating a seamless blend of resilience,
                    symbolism, and modernity.<br /> Its captivating architecture mirrors the triumph of the human spirit and
                    serves as a poignant tribute to the enduring strength of the city.<br />
                    With each accolade, One World Trade Center, NYC not only embraces its physical grandeur but also
                    embodies a profound message of unity and regeneration.<br />
                    The awards bestowed upon this iconic structure are not mere acknowledgments but affirmations of its
                    ability to evoke emotion, leaving an indelible mark on the hearts of all who gaze upon its majestic
                    presence.<br />


                </p>
                <h5>Architectural symbolism and its representation of New York City</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The architectural significance of the One World Trade Center, NYC goes beyond its impressive height and
                    sleek design.<br />
                    Symbolism permeates every inch of this iconic structure, reflecting the spirit and resilience of the
                    city it represents.<br />
                    Rising from the ashes of 9/11, the One World Trade Center stands as a symbol of healing, strength, and
                    hope.<br /> Its towering presence commands attention, mirroring the indomitable spirit of New
                    Yorkers.<br />
                    From its gleaming glass panels that mirror the sky to its spire piercing the heavens, this architectural
                    marvel evokes a sense of awe and wonder.<br />
                    With a touch of creativity, burstiness, and human-like vision, One World Trade Center embodies the
                    untamed spirit of a city that never sleeps, leaving visitors and onlookers captivated by its hypnotic
                    presence.<br />
                    In terms of average perplexity, burstiness scores, and predictability, One World Trade Center defies all
                    expectations and showcases the limitless possibilities of architectural symbolism.<br />
                </p>
            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " id="Questions" data-wow-delay="0.1s">
                <h3>Questions about One World Trade Center: </h3>

                <h3><b>FAQ</b></h3>
                <h5>How tall is the One World Trade Center?</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    At 1,776 feet (541 meters) including the spire, it's the tallest building in the Western Hemisphere and
                    the sixth tallest in the world.<br /> The height itself holds symbolic significance, referencing the
                    year the
                    United States Declaration of Independence was signed.<br />


                </p>
                <h5>What was its construction like? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Construction began in 2006 and faced various challenges, including security concerns and political
                    debates.<br /> It took eight years to complete, with meticulous attention to safety and sustainability
                    features.<br />


                </p>
                <h5>What is the significance of its design?</h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Architect David Childs designed the tower with an eight-sided triangular prism rising from a square
                    base, evoking a beacon of hope and resilience.<br /> The base represents the footprints of the original
                    Twin
                    Towers, serving as a poignant memorial.<br />


                </p>
                <h5>What can you do inside the One World Trade Center? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Beyond office space, there are observation decks offering breathtaking views of New York City,
                    restaurants, a museum dedicated to the history of the World Trade Center site, and a performing arts
                    center.<br />


                </p>
                <h5>What are the security measures like? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Security is a top priority, with stringent protocols in place.<br /> Visitors undergo bag checks, and
                    certain
                    areas require additional screening.<br />

                </p>
                <h5>How can I visit the observation decks? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Tickets may be purchased both online and at the entrance.<br /> Different packages are available,
                    offering
                    access to various levels and experiences.<br />
                </p>
                <h5>Is there a memorial at One World Trade Center? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The 9/11 Memorial and Museum occupies the footprints of the Twin Towers, honoring the victims and
                    reflecting on the events of September 11, 2001.<br />
                </p>
                <h5>How did the 9/11 attacks influence the building? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The attacks played a significant role in shaping the design and purpose of the One World Trade Center,
                    becoming a symbol of remembrance and perseverance.<br />
                </p>
                <h5>What are some interesting facts about the building? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The spire is made of glass and aluminum and houses the building's broadcast antennas.<br /> The
                    elevators can
                    ascend 104 floors in just 60 seconds.<br />
                </p>
                <h5>What are some criticisms of the One World Trade Center? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    Some critics argue that its design lacks architectural boldness and fails to fully engage with the
                    surrounding area.<br /> Others question the cost and impact of such a large-scale project.<br />
                </p>
                <h5>How has One World Trade Center impacted New York City? </h5>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    The tower has undoubtedly revitalized Lower Manhattan, attracting businesses and tourism.<br /> It
                    serves as a
                    powerful symbol of the city's resilience and continues to evolve as a vibrant hub.<br />
                </p>
                <h5 id="Directions">What is the future of One World Trade Center? </h5>
                <p class="wow bounce my-3 "  data-wow-delay="0.1s">
                    As a relatively new addition to the city's skyline, its future remains open-ended.<br /> It's likely to
                    play a
                    central role in shaping the evolution of Lower Manhattan and continues to stand as a symbol of hope and
                    resilience.<br />
                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="wow bounce my-3 "  data-wow-delay="0.1s">
                <h3>Directions to One World Trade Center, NYC</h3>

                <div class="row">
                    <div class="col-12 col-lg-4 mx-auto">
                        <!-- Centered image with text -->
                        <img class="w-100 h-75 p-2"
                            src="{{ asset('images/one_world/Take subway number 1 to (WTC Cortlandt) in Station downtown.jpg') }}"
                            class="img-fluid" alt="Article Image">
                    </div>
                </div>
                <ul class="">
                    <li>Take subway number 1 to (WTC Cortlandt) in Station downtown </li>
                    <li>Take subway number E to (World Trade Center Station) in downtown Manhattan.</li>
                    <li>Take subway number R or W to (Cortland Street station) in downtown Manhattan.</li>
                    <li>by taxi</li>
                </ul>
                <p class="wow bounce my-3 " data-wow-delay="0.1s">
                    One World Trade Center, NYC stands as a beacon of resilience and progress, surrounded by a vibrant
                    neighborhood teeming with historical landmarks, cultural attractions, and recreational
                    spaces.<br />
                    Whether seeking to pay respects at the 9/11 Memorial & Museum, immerse oneself in art and culture,
                    or simply enjoy the tranquility of nearby parks, One World Trade Center, NYC serves as a gateway to
                    a tapestry of experiences that reflect the very essence of New York City.<br id="map"/>
                </p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.228108726691!2d-74.01573587397426!3d40.71299467139346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a197c06b7cb%3A0x40a06c78f79e5de6!2sOne%20World%20Trade%20Center!5e0!3m2!1sen!2sus!4v1703805366841!5m2!1sen!2sus"
            class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @include('website.layout.link')

        </div>
        </div>
    </section>
@endsection
