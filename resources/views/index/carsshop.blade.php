@extends('index.index')

@section('title', 'Car Breezy')

@section('content')

<!-- home section start -->
<section class="home" id="home" style="padding: 7rem 10%">
    <div class="row">

        <div class="content">
            <h3>car <span>breezy</span> </h3>
            <p>Take All Your souls to drive</p>
            <a href="#newcars" class="btn-main">shop now</a>
        </div>

        <div class="swiper cars-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="{{asset('index/img/Mercedes-Logo.svg.png')}}" alt=""></a>
                <a href="#" class="swiper-slide"><img src="{{asset('index/img/bmw-01-logo-svg-vector.svg')}}"
                        alt=""></a>
                <a href="#" class="swiper-slide"><img
                        src="{{asset('index/img/20220206062038!Lexus_division_emblem.svg')}}" alt=""></a>
                <a href="#" class="swiper-slide"><img src="{{asset('index/img/ford-logo.png')}}" alt=""></a>
                <a href="#" class="swiper-slide"><img width="350px" height="100px"
                        src="{{asset('index/img/Chevrolet-logo.png')}}" alt=""></a>
            </div>
            <div class="swiper-button-next" style="color:var(--green);"></div>
            <div class="swiper-button-prev" style="color:var(--green);"></div>
            <img src="{{asset('index/img/stand.png') }}" class="stand" alt="">
        </div>
    </div>
</section>
<!-- home section end -->

<!-- benefit section start -->
<section class="icons-container" style="padding: 7rem 10%">
    <div class="icons">
        <i class="fas fa-paper-plane"></i>
        <div class="content">
            <h3>Delivery in as little as 72-Hours</h3>
            <p>Stay at home, keep your pajamas on, and your vehicle will be delivered to your front door in as
                little as 72 hours</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-tools"></i>
        <div class="content">
            <h3>Carbreezy Covered</h3>
            <p>Every vehicle in our inventory comes protected by a lifetime powertrain warranty, 10 years of
                roadside assistance, and more.</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-chart-line"></i>
        <div class="content">
            <h3>Over 700 vehicles to choose from</h3>
            <p>With one of the largest used vehicle inventories in the northwest, you're definitely going to find
                the right car for you on CarBreezy.</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-clipboard-check"></i>
        <div class="content">
            <h3>120-Point Inspection</h3>
            <p>All of our vehicles are thoroughly inspected to make sure they are in the best condition before being
                delivered.</p>
        </div>
    </div>
</section>
<!-- benefit section end -->


<!-- Brands section start -->
<section class="brands" id="brands" style="padding: 7rem 10%">
    <h1 class="heading"> <span>car brands</span> </h1>
    <div class="swiper brands-slider">

        <div class="swiper-wrapper">
            <div class="swiper-slide box">

                <div class="image">
                    <img src="{{asset('index/img/bmw-01-logo-svg-vector.svg')}}" alt="">
                </div>
                <div class="content">
                    <h3>BMW</h3>
                    <div class="content-brandscar">
                        It takes time to become timeless
                    </div>
                    <a href="{{ route('users.create')}}" class="btn-main">explore the models</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('index/img/Mercedes-Logo.svg.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Mercedes</h3>
                    <div class="content-brandscar">
                        It takes time to become timeless
                    </div>
                    <a href="{{ route('users.create')}}" class="btn-main">explore the models</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('index/img/Chevrolet-logo.png')}}" alt="" width="350px" height="150px">
                </div>
                <div class="content">
                    <h3>Chevrolet</h3>
                    <div class="content-brandscar">
                        It takes time to become timeless
                    </div>
                    <a href="{{ route('users.create')}}" class="btn-main">explore the models</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('index/img/ford-logo.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Ford</h3>
                    <div class="content-brandscar">
                        It takes time to become timeless
                    </div>
                    <a href="{{ route('users.create')}}" class="btn-main">explore the models</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('index/img/20220206062038!Lexus_division_emblem.svg')}}" alt="">
                </div>
                <div class="content">
                    <h3>Lexus</h3>
                    <div class="content-brandscar">
                        It takes time to become timeless
                    </div>
                    <a href="{{ route('users.create')}}" class="btn-main">explore the models</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" style="color:var(--green) ;"></div>
        <div class="swiper-button-prev" style="color:var(--green) ;"></div>
    </div>
</section>
<!-- Brands section end -->

<!-- New Cars Section start-->
<section class="futurecars" id="newcars" style="padding: 7rem 10%">
    <h1 class="heading"> <span>new cars</span> </h1>
    <div class="future-container">

        <div class="wrapper">
        @foreach($carnew as $car)
            <div class="box2">
            <a href="{{ route('users.show', $car->car_id)}}">    
            <img src="{{asset('upload')}}/{{$car->car_img_name1}}" width="300" height="250" alt="">
            </a>
                <div class="description">
                    <h5>{{$car->car_name}}</h5>
                    <span>{{$car->car_manufacturer_year}}</span>
                    <span>{{$car->car_brand}}</span>
                    <h4>{{$car->car_price}} $</h4>
                </div>
                <a href="{{ route('users.show', $car->car_id)}}"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
        </div>

    </div>
</section>
<!-- New Cars Section end-->

<!-- Used Cars Section start-->
<section class="usedcars" id="usedcars" style="padding: 7rem 10%">
    <h1 class="heading"> <span>used cars</span> </h1>
    <div class="used-container">

        <div class="wrapper">
        @foreach($carused as $cars)
            <div class="box2">
                <a href="{{ route('users.show', $cars->car_id)}}">    
                <img src="{{asset('upload')}}/{{$cars->car_img_name1}}" width="300" height="250" alt="">
                </a>
                <div class="description">
                    <h5>{{$cars->car_name}}</h5>
                    <span>{{$cars->car_brand}}</span></br>
                    <span>~ {{$cars->car_distance_traveled}} Km</span>
                    <h4>{{$cars->car_price}} $</h4>
                </div>
                <a href="{{ route('users.show', $cars->car_id), $cars->car_brand}}"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
        </div>

    </div>
</section>
<!-- Used Cars Section end-->

<!-- Blogs section start -->
<section class="banner" id="blogs" style="padding: 7rem 10%">
    <h1 class="heading"> <span>Blogs</span> </h1>
    <div class="banner-box">
        <h4> <i class=" fas fa-clock"></i> 18 JULY 2022</h4>
        <span>huracán</span>
        <h2>EXCLUSIVE TEMPORARY LAMBORGHINI LOUNGE IN PORTO CERVO</h2>
        <a href=""><button class="white">Read More</button></a>
    </div>
    <div class="banner-box banner-box2">
        <h4> <i class=" fas fa-clock"></i> 15 JULY 2022</h4>
        <span>huracán</span>
        <h2>HURACÁN TECNICA: 12 (CHEEKY) QUESTIONS WITH MITJA BORKERT</h2>
        <button class="white">Read More</button>
    </div>
</section>
<!-- Blogs section end -->

<!-- Newsletter Section start -->
<section class="newsletter" style="padding: 7rem 10%">
    <form action="{{ route('feedbacks.store') }}" method="post" id="feedback">
        @csrf
        <h3>Your Feedback</h3>
        <input type="email" name="feedback_email" placeholder="Enter your email" id="ymail" class="box" maxlength="50" required>
        <input type="phone" name="feedback_contact" placeholder="Enter your phone number (012-3456-789)" id="yphone" class="box"
            maxlength="10" required>
        <textarea id="comment" type="text" name="feedback_content" placeholder="Please give us your comments" rows="4" cols="50"
            class="box" required></textarea>
        <input type="submit" value="Send Us" class="btn-main">
    </form>
</section>
<!--Newsletter section end-->

@endsection