@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Active Bookings				
                    </h1>	
                    <p class="text-white link-nav"></a></p>
                </div>	
            </div>
        </div>
    </section>
    <div class="row mt-2">
        <div class="col-md-12">
            @include('partials.success')
            @include('partials.error')
        </div>
    </div>
    
    <!-- End banner Area -->   
    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">             
            <div class="row">
                <table class="table table-borderless m-3">
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Pick-Up Address</th>
                        <th>Drop-OffAddress</th>
                        <th>Booked At</th>
                        
                    </thead>
                    
                    <tbody>
                        @foreach ($bookings as $booking)
                            @if ($booking->is_active==true)
                                <tr>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{$booking->pickupAddress}}</td>
                                    <td>{{$booking->dropoffAddress}}</td>
                                    <td>{{$booking->created_at}}</td>
                                    
                                </tr>                                   
                            
                            @endif
                            
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{$bookings->links()}}
                </div>
                
            </div> 

            
        </div>	
    </section>
    <!-- End image-gallery Area -->	


@endsection