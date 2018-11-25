@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Latest Bookings</h3>
                </div>

                <div class="card-body">
                    @if(count($bookers))
                        <ul class="list-group">
                            @foreach($bookers as $booker)
                            <li class="list-group-item">
                                <a href="/bookings/{{$booker->id}}">{{$booker->fullname}}</a>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No Bookings Found.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection