@extends('layouts.app')

@section('content')
    <!-- Header Starts -->
    <header class="hero-header full-screen-player">
        <video controls poster="img/poster.jpg" autobuffer="true" >
            <source src="Video/Soul%20Redemption%20Trailer%20July%208th%20Final%20.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </header>
    <!-- Header Ends -->

    <!-- Corousel Section -->
    <section class="bg-purple credit-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6 btn-sm-12">
                    <div class="row text-right">
                        <div class="col-3">Credits</div>
                        <div class="col-9"></div>
                        <div class="col-3">Cast</div>
                        <div class="col-9"></div>
                        <div class="col-3">Crew</div>
                        <div class="col-9"></div>
                        <div class="col-3">Supporters</div>
                        <div class="col-9"></div>
                    </div>
                </div>
                <div class="col-lg-6 btn-sm-12">
                    <div class="row">
                        <div class="col-3">Comments: </div>
                        <div class="col-9">
                            <div class="comment-box">
                                Lorem IpsumLorem IpsumLorem IpsumLorem
                                Lorem Ipsum
                                Lorem IpsumLorem Ipsum
                                Lorem IpsumIpsumLorem IpsumLorem Ipsum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="bg-purple text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Back</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span>©2021 In The Flow Entertainment, LLC</span>
                </div>
            </div>
        </div>
    </footer>

@endsection
