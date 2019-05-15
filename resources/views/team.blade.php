@extends('layouts.master')

@section('content')
    <!--==========================
      Team Section
    ============================-->
    <section id="team" style="margin-top: 20px">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
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
                    <div class="team-description">
                        <p>Wiafe holds a BSc in Geodetic Engineering
                            (Ghana), MSc Geomatics (Germany), MSc
                            Resources Engineering (Germany) and PhD in
                            Geoinformatics (South Africa). He has worked </p>
                            <div class="fulltext" id="more-1">
                            <a class="more" href="#more-1"> ...more</a>
                            <p>in the computing, informatics and geospatial
                            sciences field for over 13 years. He has expertise
                            in the development of software systems,
                            geospatial information system, spatial data
                            infrastructure and open source solutions for
                            geospatial systems and semantic web. Wiafe
                            has collaborated on projects relating to land
                            information systems in Ghana, as he has worked
                            on land information systems for Ghana, Spatial
                            data infrastructure for the South African and
                            Namibian governments and trained
                            government officials in geospatial systems</p>
                                <a class="less" href="#less-1"> ...less</a>
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
                    <div class="team-description">
                        <p>Lucas holds a BSc (Ghana), MSc ( Norway), PhD
                            (USA) in Materials Science and Engineering. He
                            has taught in this area for 12 years at the
                            University of Ghana.</p>
                        <div class="fulltext" id="more-2">
                            <a class="more" href="#more-2"> ...more</a>
                            <p>He previously worked for
                                SELEE Corporation in Hendersonville, NC, USA.
                                He has consulted for the Metalex Group,
                                Western Rods and Wire Ltd, and Solidaridad
                                West Africa. While at SELEE he was involved
                                with the development, installation and
                                commissioning of systems and equipment for
                                cast houses worldwide. This included works
                                for ALCOA, Kitts Green, UK; ALCOA Technical
                                Center, Pittsburg, PA, USA; ALCOA Davenport,
                                IOWA, USA; ALCOA Tennessee, Knoxville, USA,
                                Otto Fuchs in Germany, EMAL in Emirates,
                                DUBAL and Nanshan Aluminum in China. Lucas
                                has expertise in Engineering Materials and
                                business development.</p>
                            <a class="less" href="#less-2"> ...less</a>
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
                    <div class="team-description">
                        <p> Emmanuel has a doctorate in Agricultural
                            Engineering with expertise in the development
                            of Decision support systems, management
                            science, climate change, post-harvest </p>
                        <div class="fulltext" id="more-3" style="margin-top: 0">
                            <a class="more" href="#more-3"> ...more</a>
                            <p>technology development and machine design. Emmanuel
                                has consulted extensively for the Netherland’s
                                international development organizations
                                Solidaridad and SNV as well as the German
                                international development agency GIZ In the
                                areas of system optimizations , technical training
                                and design and execution of developmental
                                projects.</p>
                            <a class="less" href="#less-3"> ...less</a>
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
                    <div class="team-description">
                        <p> Esther is a computer engineer and works on our
                            software and hardware projects. She has
                            expertise in the development of software and
                            hardware systems.</p>
                        <div class="fulltext" id="more-4">
                            <a class="more" href="#more-4"> ...more</a>
                            <p>She has worked on on-the-fly
                                mobile solutions for geo-referencing including
                                digital addressing systems. This system
                                improves on the existing digital addressing
                                system. She has also developed API’s for critical
                                state institutions to aid in revenue assurance.
                                Esther also successfully developed an AI for
                                health diagnostics using EEG signals</p>
                            <a class="less" href="#less-4"> ...less</a>
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
                    <div class="team-description">
                        <p> David is an experienced computer engineer
                            with expertise in database driven
                            web/mobile systems, software that drive
                            IoTs, Artificial Intelligence, and hardware
                            systems design.</p>
                        <div class="fulltext" id="more-5">
                            <a class="more" href="#more-5"> ...more</a>
                            <p>David has experience in
                                open source powered web and mobile
                                geospatial solutions development as well as
                                open geospatial consortium web standards.</p>
                            <a class="less" href="#less-5"> ...less</a>
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
                    <div class="team-description">
                        <p> Kofi is a Certified Information Security
                            Professional with extensive experience in
                            working with critical state and private
                            institutions.</p>
                        <div class="fulltext" id="more-6">
                            <a class="more" href="#more-6"> ...more</a>
                            <p>Kofi works with our team and clients
                                on cyber security risk management,
                                development of information security
                                management framework, cyber defense and
                                cyber response. Kofi has over a decade
                                experience in the field working with
                                multinational financial institutions and oil and gas
                                companies.</p>
                            <a class="less" href="#less-6"> ...less</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #team -->
@endsection