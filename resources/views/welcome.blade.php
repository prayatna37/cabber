@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Need a ride? just call</h6>
                    <h1 class="text-uppercase">
                        911 999 911				
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small. Login/register to Get Started
                    </p>
                    @auth
                        
                    @if (Auth::user()->is_driver==true)
                        <p class="primary-btn text-uppercase">Only Customers can book</p>
                    @else
                        <a href="{{route('booking.show',Auth::user()->id)}}" class="primary-btn text-uppercase">Book Now</a>
                    @endif

                    
                    
                @endauth
                   
                </div>
                
                    
                        
                       
                    
                        
                    {{-- @endauth --}}
                    {{-- <form class="form" action="{{route('booking.create')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="from-group">
                            <input class="form-control txt-field" type="name" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                   			<input class="form-control txt-field" type="phone" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <input type="text" name="pickupAddress" id="pickupAddress" class="form-control" placeholder="Pick-Up Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <input type="text" name="dropoffAddress" id="dropoffAddress" class="form-control" placeholder="Drop-Off Address">
                            </div>
                        </div>						    
                        						    
                        <div class="form-group">
                            <button class="btn btn-default btn-lg btn-block text-center text-uppercase" onclick="bookConfirm()">Make reservation</button>

                        </div>
                    </form> --}}
                    
                											
            </div>
        </div>					
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{URL::to('assets/img/about-img.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 about-right">
                    <h1>Globally Connected
                    by Large Network</h1>
                    <h4>We are here to listen from you deliver exellence</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
                    </p>
                    <a class="text-uppercase primary-btn" href="#">Get Details</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section class="services-area pb-120">
        <div class="container">
            <div class="row section-title">
                <h1>What Services we offer to our clients</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-car"></span>
                    <a href="#"><h4>Taxi Service</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-briefcase"></span>
                    <a href="#"><h4>Office Pick-ups</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-bus"></span>
                    <a href="#"><h4>Event Transportation</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>												
            </div>	
        </div>	
    </section>
    <!-- End services Area -->

    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Image Gallery that we like to share</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>					
            <div class="row">
                <div class="col-lg-4 single-gallery">
                    <a href="{{URL::to('assets/img/g1.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g1.jpg')}}" alt=""></a>
                    <a href="{{URL::to('assets/img/g4.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g4.jpg')}}"  alt=""></a>
                </div>	
                <div class="col-lg-4 single-gallery">
                    <a href="{{URL::to('assets/img/g2.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g2.jpg')}}" alt=""></a>
                    <a href="{{URL::to('assets/img/g5.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g5.jpg')}}" alt=""></a>						
                </div>	
                <div class="col-lg-4 single-gallery">
                    <a href="{{URL::to('assets/img/g3.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g3.jpg')}}" alt=""></a>
                    <a href="{{URL::to('assets/img/g6.jpg')}}" class="img-gal"><img class="img-fluid" src="{{URL::to('assets/img/g6.jpg')}}" alt=""></a>
                </div>				
            </div>
        </div>	
    </section>
    <!-- End image-gallery Area -->

    <!-- Start reviews Area -->
    <section class="reviews-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Client’s Reviews</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>					
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Cody Hines</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Chad Herrera</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Andre Gonzalez</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Jon Banks</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Landon Houston</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Nelle Wade</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>																															
            </div>
        </div>	
    </section>
    <!-- End reviews Area -->

    <!-- Start home-calltoaction Area -->
    <section class="home-calltoaction-area relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center section-gap">
                <div class="col-lg-8">
                    <h1>Experience Great Support</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
                <div class="col-lg-4 btn-left">
                    <a href="#" class="primary-btn">Reach Our Support Team</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-calltoaction Area -->

    <!-- Start latest-blog Area -->
    <section class="latest-blog-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Latest News from our Blog</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>						
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-latest-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{URL::to('assets/img/b1.jpg')}}" alt="">
                        </div>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life Style</a></li>
                        </ul>
                        <a href="#">
                            <h4>Portable latest Fashion for young women</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <p class="date">31st January, 2018</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-latest-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{URL::to('assets/img/b2.jpg')}}" alt="">
                        </div>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life Style</a></li>
                        </ul>
                        <a href="#">
                            <h4>Portable latest Fashion for young women</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <p class="date">31st January, 2018</p>
                    </div>
                </div>						
            </div>
        </div>	
    </section>
    <!-- End latest-blog Area -->
@endsection