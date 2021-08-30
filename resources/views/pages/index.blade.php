@extends('layouts.app')

@section('content')

    @include('modals.subscriptionsucces')
    <!-- Header Starts -->
    <!-- <header class="hero-header">
        <div class="container text-right">
                <h1>Soul <br>Redemption</h1>
                <h6>A healing drama by Richard J. Burns</h6>
                <p>The film that can heal you while you watch</p>
        </div>

    </header> -->
    <!-- Header Ends -->


    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('media') }}">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('movie') }}">Movie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-header" style="background-image: url(img/hero-image.jpg);">
                    <div class="container text-right">
                        <h1>Soul <br>Redemption</h1>
                        <h6>A healing drama by Richard J. Burns</h6>
                        <p>Watch... and heal</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-header" style="background-image: url(img/ChiaraOnEggRockRedDress.png);">
                    <div class="container text-right">
                        <h1>Soul <br>Redemption</h1>
                        <h6>A healing drama by Richard J. Burns</h6>
                        <p>Watch... and heal</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Corousel Section -->
    <section class="carousel-section">
        <div class="owl-carousel owl-theme">
            <div class="item fancybox">
                <a href="{{ asset('img/slider01.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('img/slider01.jpg') }}" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="{{ asset('img/slider02.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('img/slider02.jpg') }}" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="{{ asset('img/slider03.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('img/slider03.jpg') }}" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="item fancybox">
                <a href="{{ asset('img/slider04.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('img/slider04.jpg') }}" class="zoom img-fluid " alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- Movie Poster Starts -->
    <section class="movie-poster section-border">
        <div class="yellow-box-email">
            <h3 class="blue-main-title">Contact Info - <a href="mailto:richard.intheflow@gmail.com">richard.intheflow@gmail.com</a>
            </h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('img/poster.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-5">
                    <h2>About the healing drama</h2>
                    <p>You are invited for a visual healing experience through the mysterious love story of two
                        seemingly separate individuals, which rapidly become tangled on their path to spiritual healing
                        in New York.</p>
                    <p>Imagine the enigmatic tale between a writer, Declan and his own character named Chiara, that
                        later is revealed to be a woman as alive as he is. Their journey intertwine as his muse go on a
                        healing journey, in a different time and space as he is. Chiara is a well-known therapist trying
                        to write her second book, after her first book becomes successful. Her daily concerns lead her
                        into a rapturous healing journey, as she goes on to meet many energy healers and try alternative
                        therapies. Declan feels pulled to connect to Chiara more and more as he channels her story,
                        disconnecting from the life he had previously cherished, his job and his lover Francesca.</p>
                    <p>The first of a captivating trilogy, Soul Redemption invites us on a raw, imperfect yet beautiful
                        healing journey</p>
                </div>
            </div>
            <div class="event-subscribe-form">
                <h2>Healings Events</h2>
                <p>Join us in this immersive experience. Sign up for screenings and virtual healings</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form class="subscription-form">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary px-4" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Movie Poster Ends -->

    <!-- Traier Section -->
    <section class="trailer-section section-border">
        <div class="container text-center">
            <video style="width: 100%;" controls poster="{{ URL::asset('public/'. ( $users->trailer_poster ?? '' ) )}}"
                   autobuffer="true" controlsList="nodownload">
                <source src="{{ URL::asset('public/'. ($users->trailer ?? '') )}}" type="video/mp4">
                <!-- <source src="movie.ogg" type="video/ogg"> -->
                Your browser does not support the video tag.
            </video>

            <button class="btn-energy">Did you feel the energy?</button>
        </div>
    </section>
    <!-- Traier Section -->

    <!-- Film Info -->
    <section class="film-info">
        <div class="container text-center">
            <h2>Experience the healing source energy in the film from</h2>
            <div class="writer-info-wrapper row">
                <div class="col-md-6">
                    <div class="card-writter">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('img/about01.jpg') }}" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="writer-info">
                                        <h3>Valerie Tignini - Light worker</h3>
                                        <p>Val is an actress and light worker. She plays the role of chiara. During her
                                            performane, she is sending positive light to the audience. -
                                            <a href="mailto:val@valsecrets.com">Email Valerie</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-writter">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('img/about02.jpg') }}" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="writer-info">
                                        <h3>Rafael Benedicto - Healer</h3>
                                        <p>Rafael plays himself. He brings Chiara universal energy through his healing
                                            bowls. Audiences also recieve his healing. -
                                            <a href="mailto:thehealer333@gmail.com">Email Rafael</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <h2>The sound vibrations in each chapter scored by</h2>
            <div class="row justify-content-center mb-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled list-chapter">
                                <li>Chapter 1 Willam Dobson - USA</li>
                                <li>Chapter 2 KC Caballero - India</li>
                                <li>Chapter 3 Eden Sofarnos - Philippines</li>
                                <li>Chapter 4 Santiago Vrljicak - Argentina</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled list-chapter">
                                <li>Chapter 5 Liam McCollum - UK</li>
                                <li>Chapter 6 Eden Sofarnos - Australia</li>
                                <li>Chapter 7 KC Caballero - Philippines</li>
                                <li>Chapter 8 Jhadten Jewall - Canada</li>
                                <li>Chapter 9 William Dobson - USA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="event-subscribe-form">
                <h2>Healing / Screening Events</h2>
                <p>We host screening / healing events to screen the film which has been amazing for the organic growth
                    of the film’s story. During once recent screening, an audience members commented on the healing
                    energy they recieved while watching a scene. From that point on, we created more scenes with energy.
                    Join us for our next event.</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        @if(session()->has('Success'))
                            <div class="alert alert-success response">
                                {{ session()->get('Success') }}
                            </div>
                        @endif
                        <form class="subscription-form">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary px-4" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Film Info -->

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container page-top text-center">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-01.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-01.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-02.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-02.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-03.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-03.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-04.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-04.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-05.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-05.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-06.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-06.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-07.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-07.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('img/experience-img-08.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('img/experience-img-08.jpg') }}" class="zoom img-fluid " alt="">

                    </a>
                </div>
            </div>
            <p>What audiences are saying about the energy in Soul Redemption</p>


        </div>
    </section>
    <!-- Gallery Section Ends -->

    <!-- Section reviews -->
    <!--<section class="section-reviews section-border">-->
    <!--<div class="container">-->
    <!--<div class="writer-info-wrapper row">-->
    <!--<div class="col-md-6">-->
    <!--<div class="card-writter">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-4">-->
    <!--<img class="img-fluid" src="{{ asset('img/belly.jpg') }}" alt="">-->
    <!--</div>-->
    <!--<div class="col-8">-->
    <!--<div class="writer-info">-->
    <!--<h3>Betty Ranker</h3>-->
    <!--<p>I’m really not the religious. I feel this very deep connection to the universe after watching the film</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--<div class="card-writter">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-4">-->
    <!--<img class="img-fluid" src="{{ asset('img/william.jpg') }}" alt="">-->
    <!--</div>-->
    <!--<div class="col-8">-->
    <!--<div class="writer-info">-->
    <!--<h3>William Pheasinti</h3>-->
    <!--<p>A root chakra issue I’ve had for years finally cleared while watching Soul Redemption</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--<div class="card-writter">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-4">-->
    <!--<img class="img-fluid" src="{{ asset('img/Karishama.jpg') }}" alt="">-->
    <!--</div>-->
    <!--<div class="col-8">-->
    <!--<div class="writer-info">-->
    <!--<h3>Karishama Shetty</h3>-->
    <!--<p>It’s a beutiful experience. I enjoyed every minute. I went in feeling very stressed from my day. After, I’m very relaxed. Maybe it was the film?</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--<div class="card-writter">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-4">-->
    <!--<img class="img-fluid" src="{{ asset('img/sebi.jpg') }}" alt="">-->
    <!--</div>-->
    <!--<div class="col-8">-->
    <!--<div class="writer-info">-->
    <!--<h3>Sebi</h3>-->
    <!--<p>It was enlightening for me. I’m a lightworker. The energy in the film was really positive.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->

    <!-- Cast Section  -->
    <section class="cast-section">
        <div class="container text-center">
            <h2>Cast and Crew</h2>
            <p>Writer / Director / Editor - Richard Burns <br>Story by - Richard Burns and Valerie Tignini</p>

            <br>
            <p>Starring - Valerie Tignini, Joshua Murphy, Candace McAdams, Cassandra Seale,
                Paola Moore-Pagano, Alan Steinfeld, Josephy Cassese, Maria Victoria Ric, Olivia Larue Mallano,
                Evgeniya orudzheva, Rafael Benedicto, Aasheekaa, AC Harford, Stephanie Ellen Almedia,
                Charlie Halsey, Andrew Walters, Frank Craven, Sonny Parmar, Isabella Forti,
                Gina Ginsberg, Dakota Wollmer, Fabian Onetti, Franko Stevens, Chris San Pedro,
                Ilan Ben-Yehudi, Kelly Buxton, Julio Barriere, Rory Quinn, Cricket Burns</p>
            <br>
            <p>In The Flow Entertainment, LLC</p>
            <br>
            <p>
                Produced by: Richard Burns, Valerie Tignini, Chris Collins <br>
                Shot and Edited by Richard Burns <br>
                Audio: Mike Anzel, Elliot Cluff, Tai Collins, Jalan thompson <br>
                Makeup: Gabriellia Garcia, Angelina Perez, Carmilla Cunny, Jan Pedis, Jodie Tallman <br>
                ADR: Spin Recordings, Skylight Recordings <br>
                Soung Design & Mixing: Darcy Taranot, Jude Bassile <br>
                Special Effects: Vikas Sherma, Richard Burns <br>
                Set Designer: Terry Halsey <br>
                Original Artwork and Photos: Ewa Szewczyk, Richard Burns <br>
            </p>
            <br>
            <p>Original Music by: Anson Jones, Dusty Wright, Manzi Burns</p>
        </div>
    </section>

    <!-- Section Scenes not cut -->
    <section class="scenes section-border">
        <div class="container">
            <div class="event-subscribe-form">
                <h2>See director cut scenes not released</h2>
                <p>The final release of the film is 9 Chapters. There are 3 more Chapters we will send to our followers
                    as a bonus. These scenes are amazing. They were cut because the films was 3 hours long.</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        @if(session()->has('Success'))
                            <div class="alert alert-success response">
                                {{ session()->get('Success') }}
                            </div>
                        @endif
                        <form class="subscription-form">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary px-4" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section location -->
    <section class="scenes">
        <div class="container">
            <div class="event-subscribe-form">
                <h2>Location Shots</h2>
                <p>Soul Redemption was shot over 4 years in New York City with the help of many friends and very
                    talented crew members. Thank you!</p>
                <div class="row">
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image01.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image01.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image02.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image02.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image03.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image03.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image04.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image04.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image05.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image05.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image06.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image06.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image07.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image07.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image08.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image08.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('img/image09.jpg') }}" class="fancybox" rel="ligthbox">
                            <img src="{{ asset('img/image09.jpg') }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Experience -->
    <section class="experience-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('img/about-pic.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 experience-wrapper">
                    @if(session()->has('Success'))
                        <div class="alert alert-success response">
                            {{ session()->get('Success') }}
                        </div>
                    @endif

                    <form class="subscription-form">
                        <h2>Join this immersive experience</h2>

                        <div class="col-md-10 px-0 mb-3">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary px-4" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>

                        <p>DIRECTORS NOTE: The energy in this film is real. Those who are open to recieving will benefit
                            from watching Soul Redemption. This film will be the first of three I will be creating.
                            Please help by subscribing and sending to others. Thanks. Richard Burns</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>© 2021 In The Flow Entertianment, New York, NY</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span>Contact Info - <a
                                href="mailto:richard.intheflow@gmail.com">richard.intheflow@gmail.com</a></span>
                </div>
            </div>
        </div>
    </footer>

@endsection

