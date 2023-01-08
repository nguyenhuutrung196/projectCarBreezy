@extends('layouts.app')

@section('title', 'Car Breezy')

@section('content')

<header class="header">

    <div class="header-1">
        <a href="{{ url('/#home') }}" class="logo"><img src="{{asset('index/img/Logo-carbreezy.jpg')}}" alt=""></a>

        <form action="" class="search-form">
            <input type="search" name="search" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="form-btn" class="fas fa-user"></div>
        </div>
    </div>

    <div class="header-2">
        <ul class="header-2-navbar">
            <li><a href="{{ url('/users#home') }}">home</a></li>
            <li><a href="{{ url('/users#brands') }}">brands</a></li>
            <li><a href="{{ url('/users#newcars') }}">new cars</a></li>
            <li><a href="{{ url('/users#usedcars') }}">used cars</a></li>
            <li><a href="{{ url('/users#blogs') }}">blogs</a></li>
            <li><a href="{{ url('/users#contactus') }}">contact us</a></li>
        </ul>
    </div>

</header>
<!-- header section end -->


<!-- bottom navbar -->
<nav class="bottom-navbar">
    <a href="{{ url('/#home') }}" class="fas fa-home"></a>
    <a href="{{ url('/#brands') }}" class="fas fa-list"></a>
    <a href="{{ url('/#newcars') }}" class="fas fa-car"></a>
    <a href="{{ url('/#blogs') }}" class="fas fa-tags"></a>
    <a href="{{ url('/#contactus') }}" class="fas fa-comments"></a>
</nav>


<!-- login form -->
<div class="form-container">
    <div class="container">
        <div class="forms">
            <div id="close-btn" class="fas fa-times"></div>
            <div class="form login">
                <span class="title">Login</span>

                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" required>
                        <i class="icon fas fa-lock"></i>
                        <i class="showHidePw fas fa-eye-slash"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="" id="logCheck">
                            <label for="logCheck" class="text">remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="login now">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">You don't have account?
                        <a href="#" class="text signup-link signup-text">Signup now</a>
                    </span>
                </div>
            </div>
            <!-- register form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required>
                        <i class="icon fas fa-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="icon fas fa-lock"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm your password" required>
                        <i class="icon fas fa-lock"></i>
                        <i class="showHidePw fas fa-eye-slash"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="" id="signCheck">
                            <label for="signCheck" class="text">remember me</label>
                        </div>

                    </div>

                    <div class="input-field button">
                        <input type="button" value="register now">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text signup-text login-link">login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home section start -->
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
                    <a href="{{ url('/newcar') }}" class="btn-main">explore the models</a>
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
                    <a href="{{ url('/newcar') }}" class="btn-main">explore the models</a>
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
                    <a href="{{ url('/newcar') }}" class="btn-main">explore the models</a>
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
                    <a href="{{ url('/newcar') }}" class="btn-main">explore the models</a>
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
                    <a href="{{ url('/newcar') }}" class="btn-main">explore the models</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" style="color:var(--green) ;"></div>
        <div class="swiper-button-prev" style="color:var(--green) ;"></div>
    </div>
</section>
<!-- Brands section end -->
@endsection