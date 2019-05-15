@extends('layouts.master')

@section('intro')
    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>We are professional</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#services" class="btn-get-started scrollto">Browse Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>At vero eos et accusamus</h2>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                                <a href="#services" class="btn-get-started scrollto">Browse Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Temporibus autem quibusdam</h2>
                                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                                <a href="#services" class="btn-get-started scrollto">Browse Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('img/intro-carousel/4.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nam libero tempore</h2>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                                <a href="#services" class="btn-get-started scrollto">Browse Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('img/intro-carousel/5.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Magnam aliquam quaerat</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#services" class="btn-get-started scrollto">Browse Products</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->
    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6" style="margin-top: 40px">
                    <h3>Featured Projects</h3><br>
                </div>
                <div class="col-lg-4 box">
                    <i class="ion-ios-bookmarks-outline"></i>
                    {{--<h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>--}}
                    <p class="description">Web mapping services (with API) for environmental monitoring for the Nepal Ministry of Environment.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-stopwatch-outline"></i>
                    {{--<h4 class="title"><a href="">Dolor Sitema</a></h4>--}}
                    <p class="description">Modeling a National Health Spatial Data Infrastructure for Namibia.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    {{--<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
                    <p class="description">Web and mobile Application for Navigation and notification on the University of Ghana campus</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    {{--<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
                    <p class="description">Integrating Geo-spatial information infrastructure into conservation and management of Wetlands in Ghana. This was done in collaboration Auckland University of Technology.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    {{--<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
                    <p class="description">A description of spatial data infrastructure stakeholders in Ghana using the ICA model. In Spatial enablement in support of economic development and poverty reductions</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    {{--<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
                    <p class="description">Development of a simulation-integrated spatial decision support system for emergency preparedness activities</p>
                </div>

            </div>
        </div>
    </section><!-- #featured-services -->
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
                <p>>Adwenan is a company founded by lecturers from the School of Engineering Sciences, University of Ghana, Legon.
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
                        {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                        {{--</p>--}}
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/about-plan.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        {{--<p>--}}
                            {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.--}}
                        {{--</p>--}}
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/about-vision.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        {{--<p>--}}
                            {{--Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.--}}
                        {{--</p>--}}
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3>Products</h3>
                {{--<p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>--}}
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title">Enterprise level software for land administration</h4>
                    {{--<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>--}}
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title">ID Verification service</h4>
                    {{--<p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>--}}
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                    <h4 class="title">API for programmatic solutions</h4>
                    {{--<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>--}}
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    <h4 class="title">Smart Fuel Station Management system</h4>
                    {{--<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>--}}
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                    <h4 class="title">Smart Electronics/Robotics Laboratory system</h4>
                    {{--<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>--}}
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-people-outline"></i></div>
                    <h4 class="title">Mobile real-time survey solutions</h4>
                    {{--<p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>--}}
                </div>

            </div>

        </div>
    </section><!-- #services -->
    {{--<!--==========================--}}
      {{--Skills Section--}}
    {{--============================-->--}}
    {{--<section id="skills">--}}
        {{--<div class="container">--}}

            {{--<header class="section-header">--}}
                {{--<h3>Our Skills</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>--}}
            {{--</header>--}}

            {{--<div class="skills-content">--}}

                {{--<div class="progress">--}}
                    {{--<div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">--}}
                        {{--<span class="skill">HTML <i class="val">100%</i></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="progress">--}}
                    {{--<div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">--}}
                        {{--<span class="skill">CSS <i class="val">90%</i></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="progress">--}}
                    {{--<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">--}}
                        {{--<span class="skill">JavaScript <i class="val">75%</i></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="progress">--}}
                    {{--<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">--}}
                        {{--<span class="skill">Photoshop <i class="val">55%</i></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>--}}
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="{{asset('img/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Dr. Wiafe Owusu-Banahene</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{asset('img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Dr. Lucas Nana Wiredu Damoah</h4>
                                <span>CSO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{asset('img/team-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Dr. Emmanuel Essien</h4>
                                <span>COO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="{{asset('img/team-4.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Esther Tabiri Owusu-Ansah</h4>
                                <span>Developer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{asset('img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>David Marfo</h4>
                                <span>Developer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{asset('img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Kofi Opoku-Asanti</h4>
                                <span>Cyber Security Expert</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
                {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>--}}
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address><p>
                                RM CE2.7, School of Engineering Building <br>
                                University of Ghana, Legon<br>
                                Accra, Ghana <br>
                            </p></address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+233-(0)578189085">++233-(0)578189085</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:adwenaneng@gmail.com">adwenaneng@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:2" data-msg="Please enter your name" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please enter your message" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section>

@endsection

@section('homejs')
    // Header scroll class
    $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
    } else {
    $('#header').removeClass('header-scrolled');
    }
    });
@endsection