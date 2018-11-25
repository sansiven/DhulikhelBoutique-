@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$booker->fullname}} <a href="/bookings" class="btn btn-default btn-xs" style="float: right;">Go Back</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Roomname: {{$booker->roomname}}
                        </li>
                        <li class="list-group-item">
                            E-mail: {{$booker->email}}
                        </li>
                        <li class="list-group-item">
                            Arrival: {{$booker->arrival}}
                        </li>
                        <li class="list-group-item">
                            Departure: {{$booker->departure}}
                        </li>
                        <li class="list-group-item">
                            Phone: {{$booker->phone}}
                        </li>
                        <li class="list-group-item">
                            Message: {{$booker->message}}
                        </li>
                    </ul>
                    <hr>
                    <div class="card">
                    {{$booker->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>    

@endsection