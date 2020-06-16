@extends('layouts.app')
@section('content')
    <div class="container-fluid">        
        <div class="row mt-2">
            <div class="col-md-4 ml-3">
                <h2 class="mb-3">User Details</h2>
                <img src="{{URL::to('assets/img/default.png')}}" class="rounded" alt="">
               
            </div>
            <div class="col-md-7">
                <h2>User Details</h2>
                
             
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                          <th>Name</th>
                            <td>{{$profile->name}}</td>                            
                        </tr>
                        <tr>
                          <th>User Type</th>
                            <td>
                                @if ($profile->is_admin==1)
                                    Driver
                                @else
                                    User
                                @endif

                            </td>
                        </tr> 
                                               
                    </tbody>
                </table>
                
               

                              
            </div>
        </div>
    </div>
@endsection