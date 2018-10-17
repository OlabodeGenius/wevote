@extends('layouts.master')

@section('content')
        
        <!-- =====================================
        ==== Start Header -->

        <header class="header slider-fade" data-scroll-index="0">
            <div class="owl-carousel owl-theme">
                <div class="text-center item bg-img" data-overlay-dark="7" data-background="/img/1.jpg">
                    <div class="v-middle caption mt-30">
                        <div class="o-hidden">
                            <h1>When We Vote Politicians Listen</h1>
                            <h2>Some people say its impossible to fix politics</h2>
                            <p>But together, impossible is nothing</p>

                            <a href="#0" class="butn butn-bg mt-30">
                                <span>Register to cast your vote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- End Header ====
        ======================================= -->

        <!-- =====================================
        ==== Start About -->

        <section class="about section-padding" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-sm30">
                        <h2>New solution to<br> an old problem </h2>
                        <p align="justify" class="pb-20">It is in our hands to vote and elect a leader who will lead us, to make our nation great. Lack of information about being vote ready and the misconception that their votes won't count hinders most Nigerians from coming out to vote during the elections. WeVote seeks to bridge that information gap and ensure that all Nigerians, especially the youth, cast their votes during the 2019 elections.</p>
                        <p align="justify" class="pb-20">“WeVote is a private social network made for registered voters. Our mission is to make politics suck less; to be the largest, most trusted online network for political ideas and action; to bring our users closer to the political process; to amplify their collective voices; and make an impact.”</p>
                        <a href="#0" class="butn butn-bg ml-0"><span>Cast Your Vote Now</span></a>
                    </div>
                    <div class="col-lg-5 col-md-9 col-xs-12 offset-lg-1 offset-md-0 text-center">
                        <img src="img/about/01.jpg" alt="img" class="width-50 float-left pr-5">
                        <img src="img/about/02.jpg" alt="img" class="width-50 float-left pl-5">
                    </div>
                </div>
            </div>
        </section>

        <!-- End About ====
        ======================================= -->


        <!-- =====================================
        ==== Start Numbers -->

        <div class="numbers section-padding bg-gray">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-sm60">
                           
                            <h3 class="count">{{ $users }}</h3>
                            <h6>Voters Sign up</h6>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-sm60">
                            
                            <h3 class="count">{{$votes}}</h3>
                            <h6>Votes Cast</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-sm60">
                            
                            <h3 class="count">{{$parties}}</h3>
                            <h6>Registered Party</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            
                            <h3 class="count">{{$candidates}}</h3>
                            <h6>Total Candidate</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Numbers ====
        ======================================= --> 


        <!-- =====================================
        ==== Start Teams -->

        <section class="team section-padding bg-img bg-fixed" data-scroll-index="5">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Registered Political Party</h4>
        
                    </div>
                    
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="team-img">
                                <img src="img/party/pdp.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>PDP</h6>
                                </div>
                            </div>
                        </div>
                    
                        <div class="item">
                            <div class="team-img">
                                <img src="img/party/apc.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>APC</h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-img">
                                <img src="img/party/lp.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>LP</h6>
                                </div>
                            </div>
                        </div>

                       <div class="item">
                            <div class="team-img">
                                <img src="img/party/apga.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>APGA</h6>
                                </div>
                            </div>
                        </div>

                      <div class="item">
                            <div class="team-img">
                                <img src="img/party/adp.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>ADP</h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-img">
                                <img src="img/party/ppp.jpg" alt="img">
                            </div>
                            <div class="info">
                                <div>
                                    <h6>PPP</h6>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!-- End Teams ====
        ======================================= -->


      
      @endsection