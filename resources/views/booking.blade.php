@extends('layouts.app')
@section('content')
    <div class="container-fluid">
         <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Booking				
                        </h1>	
                        <p class="text-white link-nav">Book Your Cab Here</a></p>
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
        

        <div class="row justify-content-center mt-3">
            <h2>Booking Form</h2>
            
        </div>
        <hr>
        
        @foreach ($bookings as $booking)
            @if ($booking->is_active==1)
                <div class="row justify-content-center p-3 m-3">
                    <div class="col-md-12 form-warning">
                        <h4 style="color: red">WARNING!!!New Booking cannot be made until active bookings are closed <br> Click the active button to change status </h4>                        
                    </div>
                </div>
                @break      
                
            @else
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{route('booking.create')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row booking-form">
                                <div class="col">                  
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                </div>
                                
                            </div>
                            <div class="form-row booking-form">
                                <div class="col">
                                    <input type="text" name="pickupAddress" id="pickupAddress" class="form-control" placeholder="Pick-Up Address">
                                </div>
                                <div class="col">
                                    <input type="text" name="dropoffAddress" id="dropoffAddress" class="form-control" placeholder="Drop-Off Address">
                                </div>
                            </div>
                
                            <button type="submit" class="btn btn-outline-primary" onclick="bookConfirm()">Submit</button>
                            
                            
                        </form>
                    </div>
                    
                </div>
                @break
                
            @endif
           

        @endforeach


        
           
              

        <section>
            <div class="row justify-content-center">
                <h2>Booking History</h2>
            </div>
            <hr>
            <div class="row">
                <table class="table table-borderless m-3">
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Pick-Up Address</th>
                        <th>Drop-OffAddress</th>
                        <th>Booked At</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->pickupAddress}}</td>
                            <td>{{$booking->dropoffAddress}}</td>
                            <td>{{$booking->created_at}}</td>                             
                            <td>
                                @if ($booking->is_active==true)
                                    <form action="{{route('booking.update',$booking->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{method_field('PUT')}}
                                        <input type="hidden" name="is_active">
                                        
                                        <button class="btn btn-success" onclick="bookingClose()" type="submit">Active</button>
                                        {{ csrf_field() }}
                                    </form> 
                                    
                                @else
                                    <p style="color:red">Closed</p> 
                                @endif
                                
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </section>
        
        
    </div>
@endsection