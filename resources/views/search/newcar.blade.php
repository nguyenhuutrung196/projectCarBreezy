@extends('search.master-layout')

@section('title','New Car')

@section('content')

<!--Begin Clip section-->
<section id="hero-section" class="carousel slide" data-ride="carousel" data-role="hero">
    <div class="carousel-inner unset-overflow">
        <div class="carousel-item active">
            <div id="gam_fluid_native_hero_pos_1_fallback" class="fallback hero-media">

                <div data-role="loading-circle" class="loading-circle"></div>
                <div class="d-none d-lg-flex hero-media loading " data-role="hero-media" data-type="desktop"
                    style="background-image: url('https://carsales.vxcrush.net/au/general/content/4xoz60xdr3wlep9bnadoyvoj0.mp4?vxc_format=jpg&amp;vxc_size=hd')"
                    data-videoUrl=https://carsales.vxcrush.net/au/general/content/4xoz60xdr3wlep9bnadoyvoj0.mp4></div>
                <div class="d-flex d-lg-none hero-media loading " data-role="hero-media" data-type="mobile"
                    style="background-image: url('https://carsales.vxcrush.net/au/general/content/1ialnybl68r5m7h6f38yo56r2.mp4?vxc_format=jpg&amp;vxc_size=hd')"
                    data-videoUrl=https://carsales.vxcrush.net/au/general/content/1ialnybl68r5m7h6f38yo56r2.mp4></div>
            </div>
        </div>
    </div>
</section>
<!--End Clip section-->


<!--Begin Filter section-->
@include('search.filter')
<!--End Filter section-->

<!--Begin Main content section-->
<section id="results" data-role="results">

    <h2>Top brand new cars</h2>
    <div class="container">
        <div class="container-results">
            <div class=" results">
        @foreach($cars as $car)
                <div class="item">
                    <a href="{{ route('users.show', $car->car_id)}}" data-webm-clickvalue="search-results-car-tile"
                        title="New Mercedes-Benz EQC SUV">
                        <img src="{{asset('upload')}}/{{$car->car_img_name1}}"
                            class="car-image" alt="Namecar" />
                        <h3 class="car-name" name="namecar">{{$car->car_name}}</h3>
                        <h4 class="car-model" name="model">{{$car->car_model}}</h4>
                        <h4 class="car-price" name="price">{{$car->car_price}}</h4>
                    </a>
                </div>
        @endforeach
            </div>
        </div>
    </div>
</section>
<!--End Main content section-->
</section>
@endsection