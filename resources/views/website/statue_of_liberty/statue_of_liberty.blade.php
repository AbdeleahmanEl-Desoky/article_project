{{-- 20210413_141544.mp4 --}}
{{-- 20210413_113757.mp4 --}}
@extends('website.layout.app')

@section('title')
    <title>South Street Seaport, NYC</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}

    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" src="{{ asset('images/Statue_of_Liberty/1.png') }}" alt="First slide">
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
                                <a class="dropdown-item" href="#History">History of Statue Liberty, Manhattan New York
                                    City</a>
                                <a class="dropdown-item" href="#Relationship">Relationship between the Statue of Liberty,
                                    Manhattan New York City and Ellis Island</a>
                                <a class="dropdown-item" href="#Statue">Statue of Liberty, Manhattan New York City</a>
                                <a class="dropdown-item" href="#Guidelines">Guidelines for visiting Ellis Island and the
                                    Statue of Liberty, Manhattan New York City </a>
                                <a class="dropdown-item" href="#Dining">Dining options at the Statue of Liberty, Manhattan
                                    New York City and Ellis Island:</a>
                                <a class="dropdown-item" href="#Gift">Gift boutiques and souvenir shops:</a>
                                <a class="dropdown-item" href="#exhibits">Kid-friendly activities and exhibits:</a>
                                <a class="dropdown-item" href="#Accessibility">Accessibility options on Statue of Liberty,
                                    Manhattan New York City and Ellis Island:</a>
                                <a class="dropdown-item" href="#Things">Things you cannot do at a state park event:</a>
                                <a class="dropdown-item" href="#ticket">How to obtain a Battery Park ticket</a>
                                <a class="dropdown-item" href="#Frequently">Frequently Asked Questions</a>
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
                        Statue of Liberty, Manhattan New York City
                    </h2>
                </div>
            </div>
     

        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">
                <div class="col-12 col-lg-4  wow bounce" data-wow-delay="0.01s">
                    <!-- Right third with an image -->
                    <img class="w-100 p-2 h-75" onContextMenu="return false;"
                        src="{{ asset('images/Statue_of_Liberty/State Of Liberty, Manhattan New York City.jpg') }}"
                        alt="Article Image">
                    <small class="text-center d-block">State Of Liberty, Manhattan New York City</small>
                </div>

            </div>
            {{-- parag --}}
            <div class="row">
                <div class="col-12 col-lg-12 py-5 wow bounce" data-wow-delay="0.2s">
                    <h5 class="text-center">
                        Statue of Liberty, Manhattan New York City, have great historical and cultural significance<br> Both
                        places of interest serve as reminders of the country's values and immigrant past<br>
                        The lengthy histories of these two well-known locations will be covered in depth in this review,
                        along with their significance and the experiences they provide tourists<br>
                        On Liberty Island in New York Harbor, there lies a massive neoclassical sculpture called Statue of
                        Liberty, Manhattan New York City, sometimes referred to as Lady Liberty<br>
                    </h5>
                </div>
                <div class="col-12 col-lg-7 wow bounce " data-wow-delay="0.1s">
                    <p class="px-3 wow bounce " data-wow-delay="0.1s">
                        It was consecrated by France on October 28, 1886, as a gift to the United States.<br>
                        The statue was designed by French sculptor Frédéric Auguste Bartholdi, and the Eiffel Tower's
                        architect Gustave Eiffel built the statue's structure.<br>
                        Lady Liberty is a statue that is 305 feet (93 meters) tall from the base to the torch's tip.<br> She
                        is
                        holding a tablet with the date July 4, 1776, which is the day of American independence.<br>

                        Statue of Liberty, Manhattan New York City, is symbolic because it stands for liberty and
                        democracy.<br>
                        It acts as a warm welcome and a sign of opportunity for immigrants coming to the United States.<br>
                        The seven beams on the statue's crown signify the seven continents and the universality of the
                        values it upholds.<br>

                    </p>
            
                </div>
                <div class="col-12 col-lg-5 wow bounce" data-wow-delay="0.12s">
                    <img class="w-100 h-50 p-2"
                        src="{{ asset('images/Statue_of_Liberty/State of liberty, Manhattan New York2 City.jpg') }}"
                        alt="Article Image">
                    <small class="d-block text-center">State of liberty, Manhattan New York City</small>
                </div>

                <div class="px-3 wow bounce tiko">
                <p class="px-3 wow bounce tiko" data-wow-delay="0.1s">


                        Explore Liberty Island, ascend the pedestal for breath-taking views of the Manhattan skyline, and
                        even get a closer look at the complex construction of the statue thanks to the island's
                        displays.<br>

                        Millions of immigrants entered the country through Ellis Island, which is located next to the Statue
                        of Liberty, between 1892 and 1954.<br>
                        It was the busiest immigrant inspection station in the nation and frequently the first port of call
                        for people and families attempting to start over in the United States.<br>
                        In its years of operation, Ellis Island processed nearly 12 million immigrants.<br>

                    </p>

                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        Ellis Island is a symbol of the immigrant experience in America, exhibiting the diversity and power
                        that come from intercultural interaction.<br>
                        The island has a museum where guests may follow in the footsteps of individuals who set off on their
                        quest for a brighter future.<br>
                    </p>

                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        The struggles they overcame, the hopes they held, and the contributions they made to the fabric of
                        American society are shown via the exhibits.<br>
                        Visitors may visit the Great Hall, which served as the main location for immigration inspections,
                        and
                        even search the records at the American Family Immigration History Center for information about
                        their
                        ancestors.<br>

                        Visitors may immerse themselves in America's immigration heritage at a special historical location
                        that
                        combines the Statue of Liberty and Ellis Island.<br>
                        They serve as a tangible example of the nation's founding principles of inclusion, freedom, and
                        freedom.<br>
                        By exploring these sites, tourists may develop empathy and an appreciation for the rich diversity of
                        the
                        United States by learning more about the hardships and victories of those who came before them.<br>

                    </p>
                    <p class="px-3 wow bounce" data-wow-delay="0.1s">
                        Numerous people seeking a new life in America view Statue of Liberty, Manhattan New York City and
                        Ellis
                        Island as everlasting representations of opportunity and optimism.<br>
                        These famous sites provide a profound and emotional experience, whether you explore the monument
                        itself
                        on Liberty Island or delve into the immigrant history on display at Ellis Island.<br>
                        People may connect with the past, enjoy the present, and think about the lasting ideas that have
                        created
                        the United States as a nation by visiting the Statue of Liberty and Ellis Island.<br>

                    </p>
</div>
</div>            
            {{-- parag && img --}}
            <div class="my-4 wow bounce" data-wow-delay="0.1s">
                <h3 id="History" class="ml-1 mb-5">History of Statue Liberty, Manhattan New York City</h3>
                <!-- First Row -->
                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-lg-4">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2 h-75"
                            src="{{ asset('images/Statue_of_Liberty/View for downtown Manhattan from Statue of Liberty.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block">View for downtown Manhattan from Statue of Liberty
                            include One World Trade Center
                        </small>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Liberty Island in New York Harbor.<br>
                    It occupies an important role in American history and has evolved into a universal emblem of
                    liberty.<br> It
                    is a symbol of freedom, hope, and democracy.<br>
                    The history of the Statue of Liberty will be examined in this article, from its inception through its
                    enduring legacy.<br>
                    Édouard René de Laboulaye, a French political theorist and abolitionist, was the first to suggest giving
                    a monument to the United States as a gesture to honor the 100th anniversary of American
                    independence.<br>
                    Laboulaye wanted to commemorate the long connection between France and the United States while drawing
                    inspiration from the American Civil War and the struggle for liberty and freedom.<br>
                    He imagined a magnificent structure that would represent the joint ideals of these two countries.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    One of the most famous sites in the world, Statue of Liberty, Manhattan New York City, is located on

                    The French sculptor Frédéric Auguste Bartholdi, who had already received praise for his work, was given
                    the commission to create the statue.<br>
                    The framework for the monument was built by Bartholdi and French architect Gustave Eiffel using iron and
                    steel to give the structure solidity.<br>
                    The repoussé method, in which sheets of copper were hammered into shape by trained craftsmen, was used
                    to create the statue's copper exterior.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    Both France and the United States contributed to the statue's construction.<br>
                    The enormous sculpture, known as "Liberty Enlightening the World," was finished in France in 1884, and
                    its disassembled components were then transported across the Atlantic to be put back together in New
                    York City.<br> Over 300 distinct sections of the statue came in 214 containers.<br>



                    Once in New York, American laborers were tasked with building the statue under the direction of
                    architect Richard Morris Hunt.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The pedestal for the monument was finished in 1886 and was created by American architect Richard W.<br>
                    Morris.<br>
                    President Grover Cleveland gave the Statue of Liberty its official dedication on October 28 of that
                    year, amidst much ceremony and rejoicing.<br>

                    Rich and significant symbolism is interwoven into the statue.<br> Lady Liberty's torch, which serves as
                    a
                    beacon for individuals seeking freedom and a better life, stands for enlightenment.<br>
                    The seven-spiked crown represents the seven continents and seven seas, illustrating the universality of
                    libertarian beliefs.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Statue of Liberty, Manhattan New York City, has endured many difficulties throughout the years while
                    continuing to stand strong as a testament to inspiration and optimism.<br>
                    With millions of European immigrants entering the country through the adjacent Ellis Island, it became a
                    crucial component of the American immigration experience.<br>

                    The monument was recognized for its significant historical and cultural significance by being named a
                    UNESCO World Heritage Site in 1984.<br>
                    The statue's copper covering underwent extensive restoration work in the 1980s, which included fixing
                    and replacing any damaged areas that had developed because of weather and time.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Today, the Statue of Liberty is a well-known tourist destination that receives millions of tourists each
                    year.<br>
                    Its message of freedom and democracy continues to inspire people all around the world.<br>
                    The statue and its surroundings are under the management of the National Park Service, ensuring their
                    preservation for future generations.<br>


                    The fascination of the Statue of Liberty comes from both its grandeur and architectural beauty as well
                    as from its meaning.<br>
                    It stands for the aspirations of many people who came to America in search of a better life.<br>
                    The monument acts as a reminder to uphold the principles of liberty and fairness for everyone since it
                    is a symbol of the everlasting force of freedom.<br>

                </p>
                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-lg-4">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2 h-75"
                            src="{{ asset('images/Statue_of_Liberty/Explain Fort Wood for Statue of Liberty, Manhattan NYC.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block">Explain Fort Wood for Statue of Liberty, Manhattan NYC
                        </small>
                    </div>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h3 id="Relationship">Relationship between the Statue of Liberty, Manhattan New York City and Ellis Island
                </h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2 "
                        src="{{ asset('images/Statue_of_Liberty/Statue Of Liberty, Manhattan New York City.jpg') }}"
                        alt="Article Image">
                    <small class="text-center d-block">Statue Of Liberty, Manhattan New York City</small>
                </div>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A unique and linked relationship between the Statue of Liberty, Manhattan New York City and Ellis Island
                    has influenced the cultural and historical narrative of the United States.<br>
                    These famous structures, which are in New York Harbor, have come to symbolize the American ideal and the
                    immigrant experience.<br>

                    The French gave the Americans the Statue of Liberty, also known as "Liberty Enlightening the World," as
                    a gift.<br> Its building process started in France in 1875, and it was finished there in 1884.<br>
                    The monument was subsequently taken apart and transported to New York City, where it was put back
                    together on Bedloe's Island, which had been given the name Liberty Island in 1956.<br>
                    Since its dedication on October 28, 1886, the monument has come to represent liberty, optimism, and
                    democracy.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    However, from 1892 to 1954, Ellis Island served as the country's main immigration processing facility
                    and had a significant impact.<br>
                    Over 12 million immigrants were processed during its height; many of them were looking for opportunity
                    and a better life in the New World.<br>
                    As their ships drew near to Ellis Island, the Statue of Liberty would be seen for the first time by
                    immigrants landing in New York Harbor, signaling the start of their voyage to America.<br>

                    The connection between the two places is intricately woven into the story of immigration.<br> As a
                    symbol of
                    freedom and optimism, the Statue of Liberty welcomes newcomers.<br>
                    As Ellis Island entered the scene, its symbolism took on an even deeper meaning.<br> The sight of Lady
                    Liberty signified their entry into the land of opportunity and their chance to start over for many
                    immigrants.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Before being permitted admission into the United States, immigrants at Ellis Island underwent several
                    medical and legal exams.<br>
                    The processing techniques were frequently laborious, and the results were frequently ambiguous.<br>
                    However, the Statue of Liberty's presence gave immigrants a feeling of security and comfort since it
                    served as a reminder that they had arrived in the "land of the free".<br>

                    The Statue of Liberty, Manhattan New York City, and Ellis Island served as potent images of the American
                    ideal, representing freedom, opportunity, and a chance for a new beginning.<br>
                    The statue stood for the concept of a fresh start, and Ellis Island was the doorway to that start.<br>
                    They
                    together came to represent the immigrant experience and the nation's history as a haven for refugees and
                    a mingling of cultures.<br>

                    Both landmarks have gained popularity as tourist hotspots throughout history, drawing millions of people
                    annually.<br>
                    They serve as evidence of the immigrant spirit that has defined America and the ideas that have
                    influenced the country.<br>
                    Today, tourists may tour both locations and hear about their shared history as well as the innumerable
                    tales of people who have walked these revered grounds.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Beyond their physical closeness in New York Harbor, the Statue of Liberty and Ellis Island have a deep
                    bond.<br>
                    They stand in for the millions of immigrants who sought out America in search of freedom, optimism, and
                    fresh starts.<br>
                    They continue to inspire and bring people from all walks of life together, and their importance in the
                    national and international context cannot be overemphasized

                </p>
            </div>

            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h3 id="Statue">Statue of Liberty, Manhattan New York City</h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Statue of Liberty, Manhattan New York City3.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Statue of Liberty, Manhattan New York City</small>
                </div>
            </div>
            {{-- parag --}}
            <div class="wow bounce mt-4" data-wow-delay="0.1s">
                <h5>Description of Statue of Liberty, Manhattan New York City: Its Symbol One of the most recognizable
                    sights in the United States is the Statue of Liberty, Manhattan New York City, which is situated on
                    Liberty Island in New York Harbor. </h5>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Statue of Liberty, created by French artist Frédéric Auguste Bartholdi and dedicated on October 28,
                    1886, has come to represent liberty, democracy, and optimism for millions of people all over the
                    world.<br>
                    This enormous copper monument, which stands 305 feet tall (including the pedestal), never ceases to
                    amaze and enthrall tourists from all over the world.<br>

                    Statue of Liberty, Manhattan New York City, is more than just a physical edifice; it contains deep
                    symbolism that embodies American ideals and ambitions.<br>
                    The statue shows a woman holding a tablet in her left hand and a torch held aloft in her right hand.<br>
                    She
                    is dressed in a flowing gown.<br>
                </p>
                <b>A closer examination of the statue's numerous components and their symbolic meaning follows:</b>
                <ul>
                    <li class="mb-2"> Libertas, the Roman goddess of freedom, is represented by the statue's garment. It
                        stands
                        for freedom and the principles of democracy that the US maintains.</li>
                    <li class="mb-2">Crown: The statue's crown includes seven rays, each of which represents either one
                        of the seven
                        continents or one of the seven oceans. It represents the idea of liberty as a global ideal that cuts
                        across national boundaries.</li>
                    <li class="mb-2">Torch: The torch that Lady Liberty is holding aloft stands for illumination and the
                        quest for
                        knowledge. It acts as a beacon, showing everyone the way to freedom and liberty.</li>
                    <li class="mb-2">Tablet: The tablet in the statue's left hand is inscribed with the date of the
                        American Declaration
                        of Independence, "July IV MDCCLXXVI" (July 4, 1776). It highlights the historical importance of the
                        US as a nation of opportunity and freedom.</li>
                    <li class="mb-2">Broken shackles: At the statue's base are shackles that have been broken, signifying
                        liberation from
                        oppression and the end of slavery. The long-standing dedication of the United States to justice and
                        equality is reflected in this illustration.</li>
                    <li class="mb-2">Pedestal: Emma Lazarus' poem "The New Colossus" is displayed on the pedestal on
                        which the statue is
                        perched. The well-known refrain, "Give me your tired, your poor, your huddled masses yearning to
                        breathe free," perfectly captures the ethos of the country, which welcomes individuals looking for a
                        better life.</li>
                </ul>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Statue of Liberty, Manhattan New York City, is a towering representation of liberty, democracy, and
                    optimism.<br>
                    Its visual portrayal, including the robe, flame, and shattered shackles, all add to its metaphorical
                    meaning.<br> The monument serves as a welcome representation of the historical and cultural values of
                    the
                    United States, encouraging generations of people to pursue better lives and uphold the ideals of liberty
                    and equality.<br>

                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="my-3 wow bounce" data-wow-delay="0.1s">
                <h5>How to visit the Statue of Liberty, Manhattan New York City</h5>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/State of liberty, Manhattan New York city 5.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">State of liberty, Manhattan New York city</small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    To visit the Statue of Liberty, Manhattan New York City, one must make the fundamental arrangements and
                    take the specified actions.<br>
                    Travelers ought not to miss the wonderful Statue of Liberty, which is built on Liberty Island and serves
                    as a constant reminder of freedom.<br>
                    Here is a 500-word tip on how to urge the most out of your trip to the Statue of Liberty.<br>

                    Making preparatory plans for your visit is the first step.<br> A lot of individuals visit the Statue of
                    Liberty each year since it is so well-liked.<br> It is encouraged to buy your tickets as early as
                    possible
                    to avoid huge lines and dissatisfaction.<br>
                    \Through the official National Park Service website, which offers options for different experiences,
                    tickets for the Statue of Liberty may be acquired online.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    A colossal picture of liberty, democracy, and trust is the Statue of Liberty.<br> The robe, flame, and
                    broken chains in its realistic representation all contribute to its metaphorical significance.<br>
                    The monument energizes future generations to strive for better lives and protect the standards of
                    liberty and balance by acting as an inviting depiction of American history and culture.<br>

                    The Reserve Ticket and the Crown Ticket are the two main ticket categories offered.<br> Access to
                    Liberty
                    Island is available with the Reserve Ticket, where you may stroll about the grounds, check out the
                    museum, and enjoy breath-taking views of the monument.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    On the other side, the Crown Ticket gives you entry to the pedestal level as well as the chance for a
                    select few people to ascend to the crown for a breathtaking 360-degree panorama of the city.<br>

                    Planning your transportation comes next when you have your tickets.<br> A ferry may take you to Liberty
                    Island, where the Statue of Liberty is located.<br> Battery Park in Lower Manhattan and Liberty State
                    Park
                    in New Jersey are the two locations from which the boat service runs.<br>
                    The Battery Park departure is more popular with tourists since it allows them to visit Ellis Island,
                    which is included in the ticket fee.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    However, if you decide to leave Liberty State Park, your boat voyage will be shorter.<br>

                    To have a positive experience, go to Battery Park or Liberty State Park early.<br> You will have more
                    time
                    to visit both islands in the morning when there are fewer people waiting in line for the boat.<br>
                    Security checks are required, so bring current identification and be ready for the screening
                    procedure.<br>

                    Admire the magnificent statue as the ship reaches Liberty Island.<br> Disembark and move on to
                    independently
                    explore the island.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Learn more about the significance of the statue by taking a leisurely tour around the statue's base,
                    reading about its history, and visiting the museum.<br>

                    Consider going on a tour conducted by a ranger to get the most out of your trip.<br> These excursions,
                    which
                    are offered without charge, offer informative details about the statue's construction, symbolism, and
                    those who contributed to its development.<br>
                    Additionally, from several locations across the island, you can take in breathtaking panoramic views of
                    the Manhattan skyline and the nearby monuments.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Those who have a Crown Ticket should be ready for a challenging climb.<br> There are no lifts in the
                    crown
                    area; only a few curving stairs exist.<br>
                    However, the view from the top is worthwhile because it gives you a distinctive perspective on the
                    city.<br>
                    After exploring Liberty Island, aboard the ferry again to stop at Ellis Island, which is included in the
                    cost of your ticket.<br>
                    The Ellis Island Immigration Museum, which offers an intriguing look into the experience of the
                    immigrant, allows you to dig into the history of American immigration.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    There are no eating options on the boats, so be sure to take advantage of whatever food and drinks you
                    may find on the islands before departing.<br>

                    Planning, buying tickets in advance, and being ready for an enthralling tour inside one of America's
                    most recognizable icons are all necessary for a fantastic experience while visiting the Statue of
                    Liberty.<br>
                    Spend as much time as possible learning about the history of the statue, soaking in the gorgeous
                    scenery, and seeing Ellis Island.<br>

                </p>

            </div>
            {{-- parag --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h5>Towers available at the Statue of Liberty, Manhattan New York City</h5>
                <div class="row ">
                    <div class="col-12 col-lg-5 mx-auto video_1 ">
                        <video autoplay muted loop id="myVideo_1">
                            <source class="" src="{{ asset('images/Statue_of_Liberty/20210413_141544.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Both the Statue of Liberty, Manhattan New York City and Ellis Island are famous sites with tremendous
                    historical and cultural significance, and both are situated in the lovely city of Manhattan, New
                    York.<br>
                    There are numerous towers around the Statue of Liberty-on-Liberty Island that offer guests breath-taking
                    vistas and one-of-a-kind experiences.<br>

                    The Pedestal, which is situated at the base of the Statue of Liberty, is one of the notable towers on
                    Liberty Island.<br>
                    The Pedestal, which is 154 feet tall, allows visitors to get a close-up look at Lady Liberty's delicate
                    embellishments.<br>
                    A flight of steps or a lift may be used to climb the pedestal, and at the summit, you'll be rewarded
                    with panoramic views of the surrounding region.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It offers the best vantage point from which to take in breathtaking views of the Manhattan skyline, the
                    Hudson River, and even Ellis Island.<br>

                    Statue of Liberty, Manhattan New York City's Museum is a tower on Liberty Island that is also well worth
                    visiting.<br>
                    This cutting-edge, interactive museum, which just opened in 2019, gives visitors a greater knowledge of
                    the statue's significance and history.<br> The museum showcases the creation of the monument, its
                    meaning,
                    and the tale of how it came to be an everlasting symbol of freedom via a variety of exhibitions,
                    interactive displays, and artifacts.<br>
                    Visitors may take in broad views of the monument and New York Harbor from the museum's rooftop.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Statue of Liberty, Manhattan New York City's crown is another outstanding feature, in addition to these
                    towers on Liberty Island.<br>
                    Unfortunately, there are restrictions on who may visit the crown due to safety concerns, and tickets
                    must be reserved.<br>
                    A once-in-a-lifetime opportunity to observe the inner workings of this enormous monument and take in
                    breath-taking panoramic views of the city is to ascend the 354 steps to the pinnacle of the statue.<br>

                </p>
            </div>
            {{-- img&&h3&&pharg --}}
            <div>
                <h5>Attractions and activities on Statue Liberty, Manhattan New York City Island</h5>
                <div class="row">
  
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        Statue of Liberty, Manhattan New York City, Island is a well-known landmark with great historical
                        and cultural significance in Manhattan, New York City.<br>
                        A visit to this magnificent island, which stands as a symbol of freedom and democracy, is a must for
                        any visitor to the city.<br>
                        Due to its breathtaking environment, intriguing history, and plethora of attractions, the Statue of
                        Liberty Island provides a wide variety of sights and activities.<br>
                        Without a doubt, the island's most noteworthy feature is the Statue of Liberty alone.<br>
                        France presented the United States with this massive 305-foot-tall copper monument in 1886.<br>
                        A panoramic view of the city skyline, the harbor, and Ellis Island is available from the observation
                        deck, which may be reached by either climbing the pedestal of the monument or via a lift.<br>
                        A second ticket may also be used to enter the statue's crown, which has 25 windows and offers an
                        even more immersive experience.<br>


                    </p>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        Along with tours of the monument, the island has several museums and activities that explore the
                        significance and history of the Statue of Liberty.<br> The Statue of Liberty Museum, which debuted
                        in
                        2019, has hands-on exhibits, artifacts, and multimedia presentations to teach visitors about the
                        statue's creation and its significance as a symbol of hope for the numerous immigrants who passed
                        through Ellis Island.<br>
                        Additionally, visiting the island offers the chance to take in the breathtaking natural splendor
                        that surrounds it.<br>
                        There are gorgeous gardens, walkways, picnic spaces, and waterfront promenades on the property.<br>
                        You may go for a leisurely stroll, have a picnic with breathtaking vistas as your backdrop, or just
                        unwind in the tranquil setting.<br>

                    </p>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        Taking a guided or audio tour to discover more about the islands and the Statue of Liberty's
                        historical importance is another well-liked activity.<br>
                        The National Park Service provides ranger-led tours that give insightful explanations of the
                        statue's history, conception, and function.<br>
                        Additionally, the multilingual audio tour offers thorough information on the main sites of interest
                        while allowing tourists to explore at their own speed.<br>

                        Consider taking a boat to both the Statue of Liberty and neighboring Ellis Island if you want a more
                        comprehensive experience.<br>

                    </p>
                    <p class="wow bounce my-3 px-3" data-wow-delay="0.1s">
                        From 1892 until 1954, Ellis Island was the main immigration hub for the country; now, its museum
                        tells the tales of the numerous immigrants who entered through its doors.<br>
                        It's an interesting location to learn about the journey and difficulties of individuals who came to
                        America in search of opportunity and a better life.<br>

                        A trip to the Statue of Liberty Island combines historical, cultural, and scenic elements.<br>
                        The whole trip is interesting and enlightening, from studying the monument itself to getting lost in
                        the fascinating exhibitions and the nearby Ellis Island.<br>
                        It is easy to see why visiting the Statue of Liberty is such a beloved pastime for both locals and
                        tourists when you consider the breathtaking views of the city and the harbor.<br>

                    </p>
                </div>
            </div>
            {{-- img&&h3&&h5&&pharg --}}
            <div class="wow bounce" data-wow-delay="0.1s">
                <h3 id="Guidelines">Guidelines for visiting Ellis Island and the Statue of Liberty, Manhattan New York City
                </h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Picture From sky for Statue of Liberty, Manhattan New York City.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Picture From sky for Statue of Liberty, Manhattan New York
                        City</small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    One should not pass up the chance to tour Ellis Island and the magnificent Statue of Liberty, Manhattan
                    New York City when you are in Manhattan, New York City.<br>
                    These legendary islands are of great historical value and provide a window into American history.<br>
                    Here are some suggestions to help you navigate and enjoy these amazing sights so that you may get the
                    most out of your stay.<br>

                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Making a visit plan:</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It is advised to plan a visit in advance by ordering tickets from the official Statue Cruises
                    website.<br>
                    You'll save time and guarantee availability by doing this.<br>
                    Be careful to dress comfortably by consulting the weather prediction, especially in the summer when it
                    may get warm and busy.<br>

                </p>
            </div>
            {{-- img&&h3 --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Statue of Liberty, Manhattan New York city:</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    To prevent long lines and crowds, arrive early in the morning.<br> You will have more time to explore
                    and
                    snap photos as a result.<br>
                    If you wish to climb inside the statue, get a pedestal or crown ticket.<br> Remember that these
                    alternatives
                    require reservations in advance due to their limited availability.<br>
                    Wander casually around Liberty Island and take in the stunning views of the Statue of Liberty from
                    various perspectives.<br> Don't forget to take some special pictures!
                </p>
                <b>Ellis Island:</b>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Ellis Island Natioal Museum of immigration.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Ellis Island Natioal Museum of immigration</small>
                </div>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Take the boat to Ellis Island after seeing Statue of Liberty, Manhattan New York City which functioned
                    as the country's main immigration processing facility from 1892 until 1954.<br>
                    Visit the Immigrant Museum, which features intriguing exhibits and gives a thorough description of the
                    immigrant experience of the millions of individuals who arrived in America.<br>
                    If you want to learn more about the experiences of immigrants and their migration to America, think
                    about joining a guided tour.<br> The guides improve the whole experience and provide priceless
                    insights.<br>

                </p>

            </div>

            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h5>Additional tips:</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Bring snacks or a picnic lunch, as both islands have few food alternatives.<br> Picnicking while taking
                    in the scenery may be a wonderful experience.<br>
                    Carry a water bottle to stay hydrated.<br> Refillable water fountains are provided.<br>
                    Since there will be a lot of walking, wear comfortable shoes.<br>
                    When going outside, especially in the summer, remember to use sunscreen, sunglasses, and a hat to
                    protect yourself from the sun.<br>
                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    If at all feasible, schedule your visit during the weekdays because weekends are usually busier.<br>
                    Don't forget to take your time, learn about the history, and savor the magnificent vistas of Manhattan's
                    cityscape that these magnificent islands have to offer.<br>
                    In addition to being famous monuments, the Statue of Liberty and Ellis Island serve as representations
                    of freedom, hope, and the American dream.<br>
                    Accept the cultural relevance of their stories as you immerse yourself in them.<br>

            </div>
            {{-- parag --}}
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Dining">Dining options at the Statue of Liberty, Manhattan New York City and Ellis Island:</h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Information center for food, gift shop, Ferries, and restrooms.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">Information center for food, gift shop, Ferries, and restrooms In
                        Park statue of liberty, Manhattan New York City
                    </small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visitors to the Statue of Liberty, Manhattan New York City and Ellis Island in Manhattan, New York City,
                    can choose from a variety of food establishments.<br>
                    These historical sites offer a variety of culinary options to meet the requirements of their guests,
                    even if their main concentration is on imparting information and understanding about American history
                    and immigration.<br>

                    Millions of people visit the Statue of Liberty every year, a representation of democracy and
                    freedom.<br>
                    Only a few restaurants are available on Liberty Island.<br>
                    The Crown Café, which is close to the pedestal of the monument, is among the most well-liked
                    options.<br>
                    The menu at this informal restaurant includes sandwiches, salads, and other light meals.<br>
                    Visitors may savor their meals while admiring the monument and the nearby waterfront's breathtaking
                    views.<br>

                </p>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The Liberty Island Pavilion provides a self-service cafeteria-style meal with a range of selections,
                    including burgers, hotdogs, pizza, and other American favorites, if you want a more laid-back dining
                    experience.<br>
                    The Pavilion also has a patio area where guests may eat al fresco while seeing the stunning New York
                    City skyline.<br>

                    Millions of immigrants who came to America in the early 20th century used the neighboring Ellis Island
                    as their entry point.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Ellis Island’s Museum and exhibitions are its main attractions, but it also offers meals to guests.<br>
                    The museum building's Ellis Café offers a cafeteria-style setting with a variety of soups, sandwiches,
                    salads, and snacks.<br> It is a handy location for grabbing a quick snack before or after touring the
                    exhibits and discovering what it's like to be an immigrant.<br>

                    It's vital to remember that, compared to other areas of New York City, Liberty Island and Ellis Island
                    provide fewer food alternatives.<br>
                    These places place more emphasis on offering cultural and historical experiences than on having a wide
                    variety of food options.<br> However, the cuisine on offer is often delectable, practical, and
                    cost-effective, making it a practical choice for visitors visiting these attractions.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Bring your own food if you have more special dietary needs or like a larger variety of cuisines or think
                    about dining in Manhattan before or after your trip if you do.<br>
                    Manhattan is a thriving center for culinary pleasures of all kinds, providing a wide range of eating
                    alternatives to suit everyone's tastes.<br>

                    Visitors can eat at Statue of Liberty, Manhattan New York City and Ellis Island, although their main
                    priorities are historical and educational experiences.<br>
                    These places, which range from informal cafés to cafeteria-style diners, guarantee that you won't go
                    hungry while you're there.<br> But for a more thorough gastronomic experience, checking out Manhattan's
                    vast
                    food scene could be the better choice.<br>

                </p>
            </div>

            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Gift">Gift boutiques and souvenir shops:</h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/State of Liberty, Manhattan New York City6.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">State of Liberty, Manhattan New York City</small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Millions of people visit the Statue of Liberty, Manhattan New York City and Ellis Island in Manhattan,
                    New York City, every year.<br>
                    Tourists frequently look for souvenir shops and gift stores after visiting these famous locations
                    because of their historical and cultural value.<br>
                    Both the Statue of Liberty and Ellis Island have specialized gift and souvenir shops that sell a variety
                    of items that encapsulate the spirit and symbolism of these historic locations.<br>
                    These shops provide tourists with the chance to purchase one-of-a-kind souvenirs and presents that
                    commemorate their trip to these famous sights.<br>

                </p>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    On Liberty Island, where the statue is located, there is a gift shop called the Statue of Liberty.<br>
                    This store sells a wide range of mementos, including small Statue of Liberty replicas, t-shirts, caps,
                    keychains, postcards, and more.<br>
                    These products are ideal mementos for visitors of all ages because they were specially created to
                    capture the majesty and ideals of the monument.<br>

                    Statue of Liberty, Manhattan New York City, has a museum store in addition to a normal gift shop.<br>
                    Along with offering items comparable to those at the souvenir shop, this establishment also sells
                    instructional materials, books, and DVDs that go into detail regarding the statue's importance and
                    history.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    This shop enables guests to learn more about the Statue of Liberty than they can through their visit
                    alone.<br>
                    A museum store in addition to a standard gift shop is available at the Statue of Liberty.<br>
                    Additionally, there is a wide selection of clothing and accessories with images of the Statue of Liberty
                    and Ellis Island that can be found in the gift shops at both locations.<br>
                    Visitors may buy merchandise that enables them to continue showing off their admiration for these
                    historic locations long after their visit is over, such as chic t-shirts and fine jewelry designed to
                    resemble the statue's crown.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Tourists have a great opportunity to acquire heartfelt and practical souvenirs of their stay in the
                    souvenir shops and gift shops at the Statue of Liberty and Ellis Island.<br>
                    These shops cater to the many interests and preferences of tourists, so everyone can find something to
                    treasure and remember their experience at these famous monuments in Manhattan, New York City, whether it
                    be a tiny token or a more thorough historical description.<br>

                </p>
            </div>

            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="exhibits">Kid-friendly activities and exhibits:</h3>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In Manhattan, New York City, there are famous sites, including the Statue of Liberty, Manhattan New York
                    City and Ellis Island.<br>
                    Both locations have a variety of kid-friendly activities and displays that provide young visitors with
                    an instructive and fun experience.<br>
                    We will discuss the numerous highlights and attractions offered at these iconic locations in this
                    500-word response.<br>

                    In New York Harbor, the Statue of Liberty, a symbol of liberty and democracy, towers.<br> As they arrive
                    at
                    the island via ferry, children will be in awe of Lady Liberty's magnificence.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Families may take a kid-friendly self-guided audio tour on Liberty Island, which is available in a
                    variety of languages.<br>
                    The statue's creation, history, and the values it stands for are all fascinatingly covered in the audio
                    tour.<br> As they visit the grounds, they may discover the statue's role in embracing immigrants.<br>

                    For older kids, climbing the Statue of Liberty's crown is an exciting activity that is available during
                    a visit.<br>
                    Children must be at least 4 feet tall to participate in the climb, and tickets must be ordered well in
                    advance due to safety rules.<br>
                    A stunning view of the New York City cityscape is the reward for navigating the short spiral staircase
                    that serves as the ascension to the crown.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Visiting the museum housed inside Statue of Liberty, Manhattan New York City's pedestal is another fun
                    family activity there.<br>
                    The museum displays a variety of artifacts that illustrate the statue's origins, construction, and
                    restoration.<br>
                    Kids may discover the people who contributed to its design as well as the engineering feat that made
                    Lady Liberty a reality here.<br>

                    The adjacent Ellis Island has significant historical value.<br> Millions of immigrants who came to the
                    United States in search of a better life used it as their entry point.<br>
                    Children should visit the Ellis Island National Museum of Immigration to learn about the immigration
                    experience.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The museum's displays are designed to be interesting to children and give them a chance to put
                    themselves in the shoes of the immigrants who passed through Ellis Island.<br>
                    The "Treasures from Home" collection, which features immigrants' personal items, is one noteworthy
                    exhibit.<br> This provides a window into the lives of those who uprooted themselves in quest for better
                    chances.<br> The museum also features interactive exhibits that let kids investigate their own family
                    history and comprehend the significance of heritage.<br>

                    Consider joining the Junior Ranger program to make the trip even more fun.<br>
                    This program offers kids between the ages of 6 and 12 the chance to learn about the significance and
                    history of Ellis Island through a variety of enjoyable activities.<br>


                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Kids may earn a Junior Ranger badge by completing various chores and riddles, making the experience both
                    fun and informative.<br>

                    There are several kid-friendly activities and displays available on trips to Ellis Island and the Statue
                    of Liberty.<br>
                    Children are likely to have an exciting and unforgettable experience, from witnessing the statue's
                    majesty and ascending to the crown to exploring the museum exhibits and taking part in the Junior Ranger
                    program.<br>
                    Kids have a fantastic opportunity to learn about the history of immigration in the United States and the
                    ideals that make it a nation of many cultures by visiting these historical sites.<br>

                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Accessibility">Accessibility options on Statue of Liberty, Manhattan New York City and Ellis
                    Island:
                </h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Compare between Statue Liberty, Manhattan New York City.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">
                        Compare between Statue Liberty, Manhattan New York City
                        And Another Building in Manhattan in 1908, 1934, 1997 Year.
                    </small>
                </div>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    In Manhattan, New York City, there are famous sites, including Statue of Liberty, Manhattan New York
                    City and Ellis Island.<br>
                    Both locations are well-liked tourist attractions and have important historical and cultural
                    significance.<br> There have been efforts taken to guarantee that people.<br>
                    with impairments may appreciate and explore these landmarks in terms of accessibility.<br>

                    Visitors have a variety of accessibility choices at the Statue of Liberty-on-Liberty Island.<br>
                    Regardless of visitors' abilities, the National Park Service, which oversees the location, seeks to
                    create a great experience for each one of them.<br>
                    For people with mobility issues, accessible entry ramps and lifts are available, ensuring that they can
                    easily reach various areas of the statue's pedestal and viewing platform.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">

                    On the ground and main levels of the monument, there are wheelchair-accessible toilets, making it
                    convenient for guests with mobility issues.<br> In addition, the museum at the foot of the monument is
                    open
                    to the public and has exhibits and displays that are accessible to people of all abilities.<br>
                    For people with hearing problems, a variety of accessibility programs and assistive listening equipment
                    are also available.<br>

                    Moving on, accessibility alternatives have also been provided at Ellis Island, which served as a gateway
                    for millions of immigrants entering the United States.<br>
                    Visitors with mobility issues can tour the main building, which contains the Ellis Island National
                    Museum of Immigration, thanks to accessible doors, ramps, and lifts.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    The museum is conveniently equipped with wheelchair-accessible toilets, and there are locations set
                    aside where those with vision problems can view touchable, tactile displays.<br>
                    The museum also provides assistive listening devices upon request and provides captioning and
                    transcription services for visitors with hearing problems.<br>

                    Both websites offer content in a variety of forms, including braille and big print, making navigation
                    simpler and offering accessibility alternatives for those who are blind or visually impaired.<br>
                    Visitors may also access both the Statue of Liberty and Ellis Island via accessible transportation
                    alternatives, such as shuttle buses or boats.<br>

                </p>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    It's important to note that these landmarks are always working to make their accessible features
                    better.<br>
                    To guarantee adherence to accessibility requirements and to offer the best possible experience to all
                    visitors, regular inspections and updates are carried out.<br>
                    For those with impairments, the Statue of Liberty, and Ellis Island work to create accessible
                    experiences.<br>
                    These famous monuments provide visitors with mobility, visual, and hearing impairments the chance to
                    enjoy their historical and cultural value by implementing accessible entrances, ramps, elevators,
                    bathrooms, displays, and different assistive equipment.<br>
                </p>

            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Things">Things you cannot do at a state park event:</h3>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    I don't have access to specific state park policies and rules because I'm an AI language model.<br>
                    However, it is not permitted for attendees at state park events to engage in acts that put themselves or
                    others at risk, harm park property, or annoy wildlife.<br>
                </p>
                <b>Specific instances of forbidden behavior include the following:</b>
                <ul>
                    <li class="mb-2"> Fishing or hunting without a current license</li>
                    <li class="mb-2"> Bringing a pet to an event where it is prohibited</li>
                    <li class="mb-2"> Using illegal drugs or alcohol</li>
                    <li class="mb-2"> Lighting fires in places that are not authorized</li>
                    <li class="mb-2"> Taking away or harming historical or natural features</li>
                    <li class="mb-2"> usage of loudspeakers or amplifiers without permission</li>
                    <li class="mb-2"> Acting in a way that prevents other people from enjoying the park</li>

                </ul>

                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Before going to an event, it's a good idea to become familiar with the policies of the state park you
                    intend to visit.<br>
                </p>
            </div>
            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="ticket">How to obtain a Battery Park ticket</h3>
                <div class="col-12 col-lg-4 mx-auto">
                    <!-- Centered image with text -->
                    <img class="w-100 p-2"
                        src="{{ asset('images/Statue_of_Liberty/Buy ticket from office park inside Battery Park.jpg') }}"
                        class="img-fluid" alt="Article Image">
                    <small class="text-center d-block">
                        Buy ticket from office park inside Battery Park
                    </small>
                </div>
                <div class="wow bounce" data-wow-delay="0.1s">
                    <h4 class="my-4">You must take the following actions to purchase a ticket for the Statue of Liberty
                        from the ticket
                        booth in Battery Park:</h4>
                    <li>
                    <b class="mb-2">Arrange your visit and choose the type of ticket you require.<br></b>
                    </li>
                    <li>
                    <b class="mb-2">Purchase the ticket online by going to the National Park Service website.<br> On the
                        day
                        of your visit,
                        you can purchase tickets at the ticket counter as well, but availability may be constrained.<br></b>
                    </li>
                    <li>
                    <b class="mb-2">When you get to Battery Park, go to the ticket office Will Call window.<br> A
                        legitimate
                        ID and the
                        credit card used to buy your ticket must be presented.<br></b>
                    </li>
                    <li>
                    <b class="mb-2">After getting your tickets, head to the queue that will take you to the Statue of
                        Liberty ship.<br></b>
                    <b class="mb-2">Aboard the ferry and take pleasure in your journey to the famous statue.<br></b>
                    </li>

                </div>
                <div class=" wow bounce" data-wow-delay="0.1s">
                    <h5 class="my-4">After getting your tickets, head to the queue that will take you to the Statue of
                        Liberty ship.</h5>
                    <p class="wow bounce" data-wow-delay="0.1s">It's crucial to keep in mind that Statue of Liberty
                        tickets frequently sell out, especially during
                        the busiest travel times.<br>
                        Consequently, it is advised that you prepare and purchase your tickets months before you intend to
                        travel.<br>
                    </p>
                </div>
                <div class="wow bounce mt-4" data-wow-delay="0.1s">
                    <h4 class="my-4">How to obtain a ticket online</h4>
                    <p class=" wow bounce" data-wow-delay="0.1s">Tickets for a trip to the Statue of Liberty can be
                        ordered in advance through the Statue Cruises
                        website.<br> You have a variety of ticket choices, such as pedestal access, crown access, or
                        just a general admission ticket for Liberty Island's grounds.<br> It is advised that you get your
                        tickets in advance because they frequently sell out.<br>
                        <br>
                    </p>
                </div>

            </div>




            <div class="wow bounce my-3 " data-wow-delay="0.1s">
                <h3 id="Frequently">Frequently Asked Questions</h3>
                <h4>FAQ:</h4>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">Famous places in New York City include Ellis Island and
                    the Statue of Liberty.<br> Since they are
                    well-known
                    tourist attractions, guests frequently have a ton of questions.<br>
                    In this post, we will respond to some of the most asked questions concerning Ellis Island and the Statue
                    of Liberty.<br>
                </p>
                <h5>What is the past of the Statue of Liberty, Manhattan New York City?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">On October 28, 1886, the Statue of Liberty, which was
                    given to the United States by France, received its
                    formal dedication.<br> Frédéric Auguste Bartholdi, a French artist, came up with the design, and Gustave
                    Eiffel built the structure.<br> The monument is a representation of freedom and democracy.<br></p>
                <h5>What is the height of the Statue of Liberty, Manhattan New York Citty?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">The Statue of Liberty is 305 feet (93 meters) tall,
                    weighs 225 tons, and extends 93 meters from the base
                    to the tip of the torch.<br> It is among the world's highest statues.<br></p>
                <h5>Is access to the Statue of Liberty, Manhattan New York City possible?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">The Statue of Liberty may really be entered by
                    guests.<br> However, since the events of September 11,
                    2001,
                    access to the crown and torch has been constrained.<br>
                    Visitors must purchase a ticket for the Statue of Liberty National Monument, which covers both Liberty
                    Island (where the statue is located) and Ellis Island, to enter the statue.<br>
                </p>
                <h5> What city is the Statue of Liberty, Manhattan New York City located in?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">From Battery Park in Lower Manhattan or Liberty State
                    Park in New Jersey, visitors can take a ferry to
                    the Statue of Liberty.<br>
                    Every day, ferries run, offering access to both Liberty Island and Ellis Island.<br> To minimize lengthy
                    waits, it is suggested that you get tickets in advance.<br>
                </p>
                <h5> For what is Ellis Island famous?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">From 1892 until 1954, Ellis Island served as the primary
                    entrance point for immigrants entering the
                    United States.<br>
                    For countless individuals seeking a better life, it served as the entryway to America.<br> It now serves
                    as
                    the Ellis Island Immigration Museum, where guests may look at displays that illustrate the immigrant
                    experience.<br>
                </p>
                <h5> Am I allowed to tour Ellis Island?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">Yes, guests are invited to explore Ellis Island and
                    discover its significance and history.<br> Numerous
                    exhibits at the immigration museum, including pictures, first-person accounts, and hands-on activities,
                    give insights into the experience of immigrants.<br></p>
                <h5>How long does it take to go between the two places?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">The number of exhibits you choose to examine, and the
                    crowd density will determine how long your visit
                    will last.<br> Usually, it takes 3 to 5 hours to see both Ellis Island and Liberty Island.<br></p>
                <h5> Are there any guided tours available?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">
                    Yes, guided tours are available for both the Statue of Liberty and Ellis Island.<br> These tours offer
                    in-depth information and personal anecdotes that enhance the overall experience.<br> Audio tours are
                    also
                    available for those who prefer exploring at their own pace.<br>
                </p>
                <h5>What further sights are in the area?</h5>
                <p class="px-3 wow bounce" data-wow-delay="0.1s">Nearby attractions include Battery Park, where visitors
                    can enjoy scenic views of the Statue of Liberty
                    from the waterfront, and the National September 11 Memorial & Museum, which provides a meaningful
                    tribute to the victims of the 9/11 attacks.<br>

                    Statue of Liberty, Manhattan New York City, and Ellis Island hold immense historical and cultural
                    significance.<br>
                    Visiting these landmarks provides an opportunity to learn about American history and the immigrant
                    experience.<br>
                    Whether you're fascinated by the statue's design or interested in tracing your family's roots, a trip to
                    the Statue of Liberty and Ellis Island is sure to be an enriching experience.<br>
                </p>

            </div>
            <h3 id="Directions" class="my-3">Direction</h3>
            <div class="row px-3 wow bounce" data-wow-delay="0.1s">
                <div class="col-12 col-lg-5 mx-auto video_1 ">
                    <video autoplay muted loop id="myVideo_1">
                        <source class="" src="{{ asset('images/Statue_of_Liberty/20210413_113757.mp4') }}"
                            type="video/mp4">
                    </video>
                    <small class="text-center d-block">After get Ticket Cross to The Ship</small>
                </div>
            </div>
            <div class="row px-3 wow bounce" data-wow-delay="0.1s">
                <div class="col-12 col-lg-5 mx-auto video_1 ">
                    <video autoplay muted loop id="myVideo_1">
                        <source class="" src="{{ asset('images/Statue_of_Liberty/20210413_114746.mp4') }}"
                            type="video/mp4">
                    </video>
                    <small class="text-center d-block"> Cross inside Battery Park to office Tickets</small>
                </div>
            </div>
            <h5 class=" wow bounce" data-wow-delay="0.1s">How to get to Battery Park and the Statue of Liberty, Manhattan
                New York City most effectively:</h5>
            <div class="col-12 col-lg-4 mx-auto wow bounce" data-wow-delay="0.1s">
                <!-- Centered image with text -->
                <img class="w-100 p-2"
                    src="{{ asset('images/Statue_of_Liberty/Subway number 1 to South Ferry Station downtown Manhattan.jpg') }}"
                    class="img-fluid" alt="Article Image">
                <small class="text-center d-block">Subway number 1 to South Ferry Station downtown Manhattan</small>
            </div>
            <h5 class=" wow bounce" data-wow-delay="0.1s">• The subway lines that go to Battery Park in Manhattan, New
                York City, are the 1 train and the R train.<br> You can take the 1 train to South Ferry station or the R
                train
                to Whitehall.<br>
            </h5>


            <p class="px-3 wow bounce" data-wow-delay="0.1s">
                Street station, in downtown Manhattan, both of which are within walking distance to Battery Park, and
                walking across the park to the ticket office.<br>
            </p>


            @include('website.layout.link')
            <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.3063877836644!2d-74.0470753239754!3d40.68924937139704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25090129c363d%3A0x40c6a5770d25022b!2sStatue%20of%20Liberty!5e0!3m2!1sen!2sus!4v1705075109913!5m2!1sen!2sus"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

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
