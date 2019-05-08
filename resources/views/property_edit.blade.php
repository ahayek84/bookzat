@extends('layout.site')
@section('content')
<!-- naviagation -->
<div class="jumbotron">
    <a href="/">Home</a> / <a href="/available_properties">Available Properties</a> / {{ $property->title }}
</div>
<!-- naviagation -->


<link rel="stylesheet" href="../../../assets/product.css">

<section class="stat-section">

    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="{{ $property->img }}" /></div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $property->title }}</h3>
                    <h4 class="price">price starts from: <span>{{ $property->price }}</span></h4>
                    <p class="vote"><strong>Bedrooms : </strong> {{ $property->bedrooms }} </p>
                    <p class="vote"><strong>Guests : </strong> {{ $property->guests }} </p>
                    <div class="action">
                        <form action="/{{ Request::segment(1) }}/{{ Request::segment(2) }}" method="POST" enctype="multipart/form-data" id="form1">
                            {!! csrf_field() !!}
                            {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                        <input type="text" class="form-control" id="check_from" placeholder="check from">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="check_to" placeholder="check to">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" placeholder="number of guests">
                                            <option value="" disabled selected>Number of Guests</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                        </form>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Payment Details
                                        </h3>
                                        <div class="checkbox pull-right">
                                            <label>
                                                <input type="checkbox" />
                                                Remember
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="cardNumber">
                                                    CARD NUMBER</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                                           required autofocus />
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                        <label for="expityMonth">
                                                            EXPIRY DATE</label>
                                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                                            <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                                        </div>
                                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                                            <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 pull-right">
                                                    <div class="form-group">
                                                        <label for="cvCode">
                                                            CV CODE</label>
                                                        <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" form="form1" value="Book it Now" >Book it Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection