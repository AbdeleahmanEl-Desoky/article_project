@extends('website.layout.app')

@section('title')
    <title>Manhattan</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section section_head ">

        <div id="carouselExampleIndicators" class="carousel slide img_container">
            <div class="carousel-inner wow bounce"  data-wow-delay="0.05s">
                <div class="carousel-item carousel_height h-100  active img_about">
                    <img class="d-block h-100 w-100" galleryimg="no"
                    src="{{$article->image}}"
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
                                <a class="dropdown-item" href="#Manhattan,NewYorkCity"></a>
                                <a class="dropdown-item" href="#Howmanyboroughs">How many boroughs</a>
                                <a class="dropdown-item" href="#HistoryofManhattan">History</a>
                                <a class="dropdown-item" href="#FamousManhattanbridges">Famous bridges</a>
                                <a class="dropdown-item" href="#Howtonavigate">How to navigate</a>
                                <a class="dropdown-item" href="#BikeandWalk">Manhattan Bike and walk</a>
                                <a class="dropdown-item" href="#NeighborhoodsinManhattan">Neighborhoods</a>
                                <a class="dropdown-item" href="#FamousbuildingsinManhattan">Famous buildin</a>
                                <a class="dropdown-item" href="#Famousparks">Famous parks/a>
                                <a class="dropdown-item" href="#newschannels">News channels</a>
                                <a class="dropdown-item" href="#Colleges">Colleges</a>
                                <a class="dropdown-item" href="#Questions">Questions</a>
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
                        {{$article->title_en}}
                    </h2>
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-8  wow bounce" data-wow-delay="0.01s">
                        <!-- Right third with an image -->
                        <img class="w-100 p-2" src="{{ asset('images/manhattan/manhattan.jpg') }}"
                            class="img-fluid" alt="Article Image">
                        <small class="text-center d-block"></small>
                    </div>
                </div>

                <div class="col-lg-12 my-3 wow bounce">
                    {!!$article->description_en!!}
                </div>
            </div>




                @foreach ($article->articleDescriptions as $descriptions)
                @if($descriptions->style == 'right')
                <div class="row my-5 py-5
                 @if ( $descriptions->aria==1)
                    tiko
                @endif" >
                @if($descriptions->title_en !=null)
                <div class="col-lg-12 my-3 wow bounce">
                    <h3>
                        {{$descriptions->title_en}}
                    </h3>
                </div>
                @endif
                    <!-- First Row -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-8 data-wow-delay="0.1s"">
                                {!!$descriptions->description_en!!}
                            </div>
                            <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                                @foreach ( $descriptions->imageArticleDescriptions as $imageArticleDescriptions)
                                {{-- //class="w-100 h-75 p-2" --}}
                                <img
                                    src="{{$imageArticleDescriptions->image}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="text-center d-block">Empire state building</small>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($descriptions->style == 'up')
                <div class="row
                @if ( $descriptions->aria==1)
                    tiko
                @endif">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ( $descriptions->imageArticleDescriptions as $imageArticleDescriptions)
                            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                <!-- Centered image with text -->
                                <img class="w-100 h-75 p-2"
                                    src="{{$imageArticleDescriptions->image}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Metropolitan museum</small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row tiko">
                    @if($descriptions->title_en !=null)
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                            {{$descriptions->title_en}}
                        </h3>
                    </div>
                    @endif
                    @if($descriptions->description_en !=null)
                    <div class="col-lg-12 wow bounce"  data-wow-delay="0.1s">
                        {!!$descriptions->description_en!!}
                    </div>
                    @endif
                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ( $descriptions->imageArticleDescriptions as $imageArticleDescriptions)
                            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                <!-- Centered image with text -->
                                <img class="w-100 h-75 p-2"
                                    src="{{$imageArticleDescriptions->image}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Metropolitan museum</small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                @elseif($descriptions->style == 'down')
                <div class="row
                @if ( $descriptions->aria===1)
                    tiko
                @endif  my-5   ">
                    @if($descriptions->title_en !=null)
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                            {{$descriptions->title_en}}
                        </h3>
                    </div>
                    @endif
                    @if($descriptions->description_en !=null)
                    <div class="col-lg-12 wow bounce"  data-wow-delay="0.1s">
                        {!!$descriptions->description_en!!}
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ( $descriptions->imageArticleDescriptions as $imageArticleDescriptions)
                            <div class="col-12 col-lg-4 mx-auto wow bounce"  data-wow-delay="0.3s">
                                <!-- Centered image with text -->
                                <img class="w-100 h-75 p-2"
                                    src="{{$imageArticleDescriptions->image}}"
                                    class="img-fluid" alt="Article Image">
                                <small class="d-block text-center">Metropolitan museum</small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                <div class="row
                @if ( $descriptions->aria==1)
                    tiko
                @endif">
                    <div class="col-lg-12 my-3 wow bounce">
                        <h3>
                           {{$descriptions->title_en}}
                        </h3>
                    </div>

                    <div class="col-lg-12 "  data-wow-delay="0.1s">
                        {!!$descriptions->description_en!!}
                    </div>
                </div>
                @endif
                @endforeach
                @include('website.layout.link')


        </div>
    </section>
    @endsection

