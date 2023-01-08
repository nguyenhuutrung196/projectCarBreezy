<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('index/css/styles.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- header section start -->
<header class="header">

    <div class="header-1">
        <a href="{{ url('/users#home') }}" class="logo"><img src="{{asset('index/img/Logo-carbreezy.jpg')}}" alt=""></a>

        <form action="" class="search-form">
            <input type="search" name="search" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="header-cart fas fa-shopping-cart"></a>
            <div id="form-btn" class="fas fa-user"></div>
        </div>
        {{-- If user login access profile user show --}}
        {{-- <div class="header-user">
            <img src="{{ asset('index/img/user-img.webp') }}" width="50px" height="20px" alt="" class="header-user-img">
            <span class="header-user-name">
                Bao Duy
            </span>

            <ul class="user-menu">
                <li class="user-item">
                    <a href="">My Profile</a>
                </li>
                <li class="user-item">
                    <a href="">My Cart</a>
                </li>
                <li class="user-item">
                    <a href="{{ url('/') }}">Logout</a>
                </li>
            </ul>
        </div> --}}
        <div class="light-dark-mode">
            <input type="checkbox" name="" id="checkbox" class="checkbox">
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
            </label>
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
    <a href="{{ url('/users#home') }}" class="fas fa-home"></a>
    <a href="{{ url('/users#brands') }}" class="fas fa-list"></a>
    <a href="{{ url('/users#newcars') }}" class="fas fa-car"></a>
    <a href="{{ url('/users#blogs') }}" class="fab fa-blogger-b"></a>
    <a href="{{ url('/users#contactus') }}" class="fas fa-comments"></a>
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
