@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Drivers				
                    </h1>	
                    <p class="text-white link-nav">Available Drivers</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <div class="row mt-2">
        <div class="col-md-12">
            @include('partials.success')
            @include('partials.error')
        </div>
    </div>
    
    
    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Available Drivers Are shown here</h1>
                
            </div>            					
            <div class="row">
               @foreach ($drivers as $driver)
                    @if ($driver->is_driver==1)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="{{URL::to('assets/img/default.png')}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">{{$driver->name}}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Book Driver</a>
                                </div>
                            </div>
                        </div>
                    @endif

                   
               @endforeach
            </div>
        </div>	
    </section>
    <!-- End image-gallery Area -->	


@endsection