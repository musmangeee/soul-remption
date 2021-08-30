@extends('layouts.app')

@section('content')

    <!-- Header Starts -->
    <header class="hero-header media-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container text-right">
                        <h1>Soul <br>Redemption</h1>
                        <p>The film that can heal you while you watch and heal</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Ends -->

    <!-- Corousel Section -->
    <section class="carousel-section">
        <div class="owl-carousel owl-theme">
            <div class="item fancybox">
                <a href="img/slider01.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/slider01.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="img/slider02.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/slider02.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="img/slider03.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/slider03.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="img/slider04.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/slider04.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- Synopsis Section -->
    <section class="bg-purple section-border-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Film Synopsis</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Download Assets</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Traier Section -->
    <section class="trailer-section bg-purple section-border-black">
        <div class="container text-center">
        <video style="width: 100%;" controls poster="{{ URL::asset('public/'. ( $users->trailer_poster ?? ''))}}" autobuffer="true" >
                <source src="{{ URL::asset('public/'. $users->trailer)}}" type="video/mp4">
                <!-- <source src="movie.ogg" type="video/ogg"> -->
                Your browser does not support the video tag.
            </video>

            <button class="btn-energy">Did you feel the energy?</button>
        </div>
    </section>
    <!-- Traier Section -->

    <!-- Behind The Scenes -->
    <section class="behind-scenes-section bg-purple section-border-black">
        <div class="container text-center">
            <h2>Behind the scenes</h2>
            <div class="wrapper">
                <video class="video blurEffect">
                    <source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
                    <source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg>
                    <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
                    <source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
                </video>
                <div class="content">
                    <div class="play">►</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Behind The Scenes -->

    <!-- Behind The Scenes -->
    <section class="behind-scenes-section bg-purple section-border-black">
        <div class="container text-center">
            <h2>Creator's Interviews</h2>
            <div class="wrapper">
                <video class="video blurEffect">
                    <source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
                    <source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg>
                    <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
                    <source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
                </video>
                <div class="content">
                    <div class="play">►</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Behind The Scenes -->


    <!-- ImaGES Scenes -->
    <section class="images-section bg-purple section-border-black">
        <div class="container text-center">
            <h2>Images</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Cast & Crew</h3>
                    <div class="row">
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/1.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/1.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/2.jpeg"" class="fancybox" rel="ligthbox">
                            <img  src="img/Cast-and-Crew/2.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/3.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/3.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/4.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/4.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/5.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/5.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/6.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/6.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>

                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/8.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/8.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/9.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/9.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/10.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/10.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/11.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/11.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/13.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/13.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/14.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/14.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/15.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/15.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/16.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/16.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/17.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/17.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 thumb">
                            <a href="img/Cast-and-Crew/18.jpeg" class="fancybox" rel="ligthbox">
                                <img  src="img/Cast-and-Crew/18.jpeg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Poster & Banners</h3>
                    <div class="posters-fancybox">
                        <div class="col-md-12 col-xs-12 thumb">
                            <a href="img/Wooster-St-Healing-Event/IMG_3236.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Wooster-St-Healing-Event/IMG_3236.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-xs-12 thumb">
                            <a href="img/Wooster-St-Healing-Event/IMG_3238.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Wooster-St-Healing-Event/IMG_3238.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-xs-12 thumb">
                            <a href="img/Wooster-St-Healing-Event/IMG_3247.jpg" class="fancybox" rel="ligthbox">
                                <img  src="img/Wooster-St-Healing-Event/IMG_3247.jpg" class="zoom img-fluid "  alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Behind The Scenes -->


    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>© 2021 In The Flow Entertianment, New York, NY</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span>Contact Info - richard.intheflow.com</span>
                </div>
            </div>
        </div>
    </footer>


@endsection
