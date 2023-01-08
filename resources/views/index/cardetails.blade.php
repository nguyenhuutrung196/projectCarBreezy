@extends('index.index')

@section('title','Car Detail')


@section('head')
<script src="/ckeditor_4.19.0_full/ckeditor/ckeditor.js"></script>
@endsection


@section('content')
<body>
    @foreach($cars as $car)
    <div class="single-car-header">
        <div class="single-car-profile">
            <span>{{$car -> car_status}}</span>
            <h3>{{$car->car_name}}</h3>
            <h5>{{$car->car_manufacturer_year}}</h5>
        </div>
        <div class="single-car-price">
            <a href="{{ route('orders.show', $car->car_id)}}" class="single-car-wishlist">
                <i class="fas fa-heart "></i>
            </a>
            <a href="{{ route('orders.show', $car->car_id)}}">
            <button class="btn-main">Add to cart</button>
            </a>
            <h3>$ {{$car->car_price}}</h3>
        </div>
    </div>
    <section id="cardetails">
        <div class="single-car-img">
            <img src="{{asset('upload')}}/{{$car->car_img_name1}}" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">

                    <img src="{{asset('upload')}}/{{$car->car_img_name1}}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">

                    <img src="{{asset('upload')}}/{{$car->car_img_name2}}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">

                    <img src="{{asset('upload')}}/{{$car->car_img_name3}}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">

                    <img src="{{asset('upload')}}/{{$car->car_img_name4}}" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-car-details">

            <h2> Vehicle Overview </h2>
            @if($car->car_status == 'Used')
            
            <div class="details">
                <img src="{{ asset('search/img/tachometer.png') }}" alt="">
                <div class="details-content">
                    <p>Mileage</p>
                        <h3>{{$car->car_distance_traveled}} km</h3>
                </div>
            </div>
            @endif

            <div class="details">
                <img src="{{ asset('search/img/gasoline-pump.png') }}" alt="">
                <div class="details-content">
                    <p>MPG</p>
                    <strong>{{$car->car_hp}}</strong>
                </div>
            </div>

            <div class="details">
                <img src="{{ asset ('search/img/chassis.png') }}" alt="">
                <div class="details-content">
                    <p>drive type</p>
                    <strong>{{$car->car_type}}</strong>
                </div>
            </div>

            <div class="details">
                <img src="{{ asset ('search/img/motor.png') }}" alt="">
                <div class="details-content">
                    <p>engine</p>
                    <strong class="text">{{$car->car_engine}}</strong>
                </div>
            </div>

            <div class="details">
                <img src="{{ asset ('search/img/fueloil.png') }}" alt="">
                <div class="details-content">
                    <p>fuel type</p>
                    <strong class="text">{{$car->car_fuel}}</strong>
                </div>
            </div>

            <div class="details">
                <img src="{{ asset ('search/img/transmission.png') }}" alt="">
                <div class="details-content">
                    <p>Transmission
                    </p>
                    <strong class="text">{{$car->car_transmission}}
                    </strong>
                </div>
            </div>
        </div>
        <div class="details-description">
            <h3>Description</h3>
            <p name="car_content" id="description">{{$car->car_content}}</p>
            <!-- <p>All vehicles are subject to prior sale and are one-only. All prices and offers are subject to change without notice. Prices and payments do not include tax, title fees, license fees, or registration fees. A dealer documentary service fee of $200 will be added to the sale price or the capitalized cost of a vehicle. Some elements of your transaction may be negotiable including price, trade allowance, interest rate (of which the dealer may retain a portion), term, and dealer documentary fee. Any agreement is subject to the execution of contract documents. </p> -->
        </div>
    </section>
    <section class="futurecars" id="newcars" style="padding: 7rem 10%">
        <h1 class="heading"> <span>Other Cars</span> </h1>
        <div class="future-container">
            <div class="wrapper">
            @foreach($carxs as $car1)
                <div class="box2">
                    <a href="{{ route('users.show', $car1->car_id)}}">
                    <img src="{{asset('upload')}}/{{$car1->car_img_name1}}" width="350px" height="200px" alt="">
                    </a>
                    <div class="description">
                        <span>{{$car1->car_manufacturer_year}}</span>
                        <h5>{{$car1->car_name}}</h5>
                        <span>{{$car1->car_hp}}</span>
                        <h4>{{$car1->car_price}}</h4>
                    </div>
                    <a href="{{ route('users.show', $car1->car_id)}}"><i class="fas fa-shopping-cart cart"></i></a>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    @endforeach

    <script>
    // cardetails script
    var mainImg = document.getElementById("MainImg");
    var smallImg = document.getElementsByClassName("small-img");

    smallImg[0].onclick = function() {
        mainImg.src = smallImg[0].src;
    }
    smallImg[1].onclick = function() {
        MainImg.src = smallImg[1].src;
    }
    smallImg[2].onclick = function() {
        MainImg.src = smallImg[2].src;
    }
    smallImg[3].onclick = function() {
        MainImg.src = smallImg[3].src;
    }
    </script>
</body>

@endsection


@section('foot')
<script>
CKEDITOR.replace('description');
</script>
@endsection