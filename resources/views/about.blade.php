@extends('layouts.master')
@section('content')

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="page" style="margin-top: 20px">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
                <p>Adwenan is a company founded by lecturers from the School of Engineering Sciences, University of Ghana, Legon.
                    Adwenan specializes in the deployment of cutting-edge bespoke technological systems to facilitate the efficient running of critical institutions. Adwenan leverages several years of both local and international experiences of its founders and staff in the areas of software development and deployment, Geo-spatial data modeling, Geo-referencing and digitization, database management, design and manufacturing of devices, engineering materials and postharvest technology to design solutions to problems encountered in various applications. Adwenan is currently fine tuning its automated and integrated software system custom built for land administration in Ghana.
                    This system will be critical in establishing a National Spatial Data Infrastructure (NSDI).</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/about-mission.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p>

                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/about-plan.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p>

                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/about-vision.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>

                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->
@endsection