@extends('layouts.master')

@section('header')
    @include('layouts.library.header')
@endsection

@section('content')
    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Services</h2>
            <h6>We offer to you innovative environment.</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-paw"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Costume design</h3>
                            <p>
                                We provide the environment for you to freely design the outfit for yourself.
                            </p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-medkit"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>24/7 Support</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                        </div>
                    </div>
                </div>
                <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="img/macbook-pro.png" alt="">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->
    <section class="main-section paddind" id="Portfolio">
        <!--main-section-start-->
        <div class="container">
            <h2>Topic</h2>
            <h6>Topics so that you can design them.</h6>
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <li><a href="#" data-filter="*" class="current">All</a></li>
                    <li><a href="#" data-filter=".branding">New</a></li>
                    <li><a href="#" data-filter=".webdesign">Hot</a></li>
                    <li><a href="#" data-filter=".printdesign">Most Design</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>

        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">
            <div class=" Portfolio-box printdesign">
                <a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>
                <h3>Foto Album</h3>
                <p>Print Design</p>
            </div>
            <div class="Portfolio-box webdesign">
                <a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>
                <h3>Luca Theme</h3>
                <p>Web Design</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>
                <h3>Uni Sans</h3>
                <p>Branding</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>
                <h3>Vinyl Record</h3>
                <p>Photography</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>
                <h3>Hipster</h3>
                <p>Branding</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                <h3>Windmills</h3>
                <p>Photography</p>
            </div>
        </div>
    </section>
    <!--main-section-end-->
    <section class="main-section client-part" id="client">
        <!--main-section client-part-start-->
        <div class="container">
            <b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
            <div class="row">
                <div class="col-lg-12">
                    <p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure we were well fed and drunk all the time!</p>
                </div>
            </div>
            <ul class="client wow fadeIn delay-05s">
                <li><a href="#">
                        <img src="img/client-pic1.jpg" alt="">
                        <h3>James Bond</h3>
                        <span>License To Drink Inc.</span>
                    </a></li>
            </ul>
        </div>
    </section>
    <!--main-section client-part-end-->
    <section class="main-section team" id="team">
        <!--main-section team-start-->
        <div class="container">
            <h2>Stylist</h2>
            <h6>The most professional stylists.</h6>
            <div class="team-leader-block clearfix">
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-03s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                    <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                    <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader  wow fadeInDown delay-06s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic2.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                    <span class="wow fadeInDown delay-06s">Product Manager</span>
                    <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-09s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic3.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                    <span class="wow fadeInDown delay-09s">Accountant</span>
                    <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
            </div>
        </div>
    </section>
    <!--main-section team-end-->
    <section class="business-talking">
        <!--business-talking-start-->
        <div class="container">
            <h2>Let's become a professional stylist</h2>
        </div>
    </section>
    <!--business-talking-end-->
@endsection

@section('footer-contact')
    @include('layouts.library.footer-contact')
@endsection
