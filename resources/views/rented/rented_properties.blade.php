@extends('spark::layouts.app')
@section('content')
    <section class="stat-section">
        <div class="bg-stat"></div>
        <div class="container text-center">
            <br/>
            <div class="container">
                @foreach ($records as $record)
                    <a href="#">
                        <div class="col-sm-6 col-md-4 col-lg-4 mt-4" style="margin-bottom: 15px; height:400px">
                            <div class="card" >
                                <img class="card-img-top" src="{{ $record->img }}">
                                <div class="card-block">
                                    <h4 class="card-title" style="margin: 0px;">{{ $record->title }}</h4>
                                    <div class="card-text">
                                        Price starts from {{ $record->price }}
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <span><i class=""></i>{{ $record->bedrooms }} Rooms , {{ $record->guests }} Guests</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>


@endsection