<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('search/img/Logo-carbreezy.jpg')}}" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/common-chunk-b27f99bf8a0f7072a1d7.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('search/css/searchResults-assets-feb7e3c199cc3bbee03b.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/page-assets-51e6a1d3d553ef75289d.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/filter-assets-de2c05f3eb3308c3dc6b.css')}}" />
    <script src="{{asset('search/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('search/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('search/js/postscribe.min.js')}}"></script>
    <script src="{{asset('search/js/hls.min.js')}}"></script>
    <script src="{{asset('search/js/lottie.min.js')}}"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>@yield('title')</title>
</head>

<body id="page-body" class="carsales header-image-nav homepage-border">
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/footer-assets-97854a6da730b43af6ad.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('search/css/header-assets-c0631e82429664d217b8.css')" />
    <!-- Header section -->
        @include('index.header')
    
   
        @section('content')

        @show

    
    <!--Begin Footer content section-->
    @include('index.footer')
    <!--End Footer content section-->

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="//resource.csnstatic.com/commercial/cmp-showroom-searchpage/runtime-2b46e9ca6725a9f0beb6.js"></script>
    <script src="//resource.csnstatic.com/commercial/cmp-showroom-searchpage/common-chunk-6864ce6a093c6a89532c.js">
    </script>
    <script
        src="//resource.csnstatic.com/commercial/cmp-showroom-searchpage/searchResults-assets-62b908929f7142139664.js">
    </script>
    <script src="//resource.csnstatic.com/commercial/cmp-showroom-searchpage/page-assets-12c91862e55ec8b0dfba.js">
    </script>
    <script src="//resource.csnstatic.com/commercial/cmp-showroom-searchpage/filter-assets-8aad9a08c15bdc0b8924.js">
    </script>
    
<!-- slide range price car -->
<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 30000,
      values: [ 1000, 20000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
</script>

<!-- sort by -->
  
<script type="text/javascript">
    $(document).ready(function(){
       $('#sort').on('change',function(){
         
        var url = $(this).val();
        if(url){
            window.location = url;
        }
        return false;
       }); 
    });
</script>
</body>

</html>