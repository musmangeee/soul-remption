@extends('layouts.app')

@section('content')
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
    <!-- Header Starts -->
    <header class="hero-header media-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container text-right">
                        <h1>Soul <br>Redemption</h1>
                        <p>The film that can heal you while you Watch....and heal</p>
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
        <div class="d-flex justify-content-center">
            <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Film Synopsis</h2>
                    <p >
                    Soul Redemption is a dramatic, multi-dimensional love story that brings the spectator on a healing journey as they watch. The story follows the journey of Chiara, a therapist in a rut as she tries to write her second book, and who is seeking deep healing. Declan discovers Chiara as he channels her story for his own movie script, realizing that who he thought was his own character – turns out to be a real and alive person. Soul Redemption follows the intricate journey of confusion, pain, bliss and deep healing that the two lovers follow, as they move closer towards reunion with each other. The movie features authentic healers and enchanting healing music which deeply immerses the spectator in this inclusive, virtual healing experience.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Download Assets</h2>
                    
                    <p>Quicktime Movies:</p>
                     <ol>
                     <li><a href="https://www.dropbox.com/sh/wd951b3wcjnctd2/AAC0eA6UFQ_u9w5czYqLnVxsa?dl=0">Offical Trailer</a></li>
                     <li><a href="https://www.dropbox.com/sh/7sul7k6cn53wrqv/AAAyz_zFA-novCUrQZyt932Oa?dl=0">Electronic Press Kit (EPK
Includes -
Bios - Key
Credits - Actors/Crew
In The Flow Enertainment</a></li>
                     <li><a href="https://www.dropbox.com/sh/wrz124f0n7vp9ft/AABX7JMvcg5DjwS2bbh5o-bca?dl=0"> Images:
Production Photos
Movie Posters / Banners</a></li>
                    </ol> 
                      
                          <!-- <p>Also you'll see under we need</p>
                          <p>Contact: richard.intheflow@gmail.com</p>
                          <p>646.250.6065</p>
                          <p>17 East 97th Street, 6c,</p>
                          <p>NY NY 10029</p> -->
                </div>
            </div>
            </div>
    </div>
        </div>
    </section>
    <!-- <---contact section----> 
    <section class="bg-purple section-border-black">
        <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                    <div class=" col-lg-3">
                    Contact:
                  </div>
                <div class="col-lg-9">
                        richard.intheflow@gmail.com
                        646.250.6065
                          17 East 97th Street, 6c,
                          NY NY 10029
                     </div>
                </div>
                   
                </div>
                
                <div class="col-md-6 pl-4">
                    Social media Links
                    <br>
                <ul>
                   <li> <a href='https://www.facebook.com/soulredemptionfilm' target="_blank">Facebook.com/SoulRedemption</a></li>
                   <li> <a href='#' target="_blank">Instagram/SoulRedemption</a></li>
                 </ul>
                </div>
            </div>
            </div>
    </div>
</div>
    </section>
    <!-- Traier Section -->
    <section class="trailer-section bg-purple section-border-black">
        <div class="container text-center">
            @if($users != null)
        <video style="width: 100%;" controls poster="{{ URL::asset('public/public/'. ( $users->trailer_poster ?? ''))}}" autobuffer="true" >
                <source src="{{ URL::asset('public/public/'. $users->trailer)}}" type="video/mp4">
                Your browser does not support the video tag.
      </video>
                @endif
                <!-- <source src="movie.ogg" type="video/ogg"> -->
                

            <button class="btn-energy">Did you feel the energy?</button>
        </div>
    </section>
    <!-- Traier Section -->

    <!-- Behind The Scenes -->
    <section class="behind-scenes-section bg-purple section-border-black">
        <div class="container text-center">
            <h2>Behind the scenes</h2>
            <div class="wrapper">
                <video class="video blurEffect" poster="{{ asset('public/img/Val-Tree-of-Life_comingSoon.gif')}}">
                    <source src="" type=video/mp4>
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
                <video class="video blurEffect" poster="{{ asset('public/img/Creators-Video-Coming-soon.jpg')}}">
                    <source src="" type=video/webm>
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
                            <a href="img/Cast-and-Crew/2.jpeg" class="fancybox" rel="ligthbox">
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
                    <span>Contact Info - richard.intheflow@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>


@endsection
