<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Information</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom css file link -->
    <link rel="stylesheet" href="{{asset('index/css/styles.css')}}">
    <!-- Swiperjs cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- Bootstrap cdn link -->
</head>

<body>
    @include('index.header')

    <section id="policy" style="padding: 30px; font-size: 16px">

        <h1 class="hero__heading" style="color: #4CAF50">Our 7-step delivery process</h1>
        <div>
            <p class="hero__lead lead">
                From ordering your new car to taking delivery, here is everything you need to know about leasing with
                Nationwide Vehicle Contracts
            </p>
        </div>

        <h3 class="card__heading">Processing Your Order</h3>
        <p>Once all relevant finance checks have been approved, your vehicle will be ordered with one of our supplying
            dealers and you will receive an email to confirm when your vehicle is expected to arrive. All vehicles
            leased with Nationwide Vehicle Contracts are supplied by the manufacturer’s franchised UK dealer network.
        </p>

        <h3 class="card__heading">With The Factory</h3>
        <p>If your car is a factory order (e.g. your vehicle is still to be built) your order will be sent to the
            factory and given a build allocation slot by the manufacturer. Lead times for factory orders vary from
            product to product and depend on a number of factors including the build allocation slot, customer demand
            and the time of year you place your order. As a benchmark, most manufacturers deliver a factory order within
            four months, although some prestige models can take longer.</p>

        <h3 class="card__heading"> Build Week Confirmed</h3>
        <p>Approximately four weeks prior to the vehicle actually being built, the build week will be confirmed by the
            manufacturer. This is to ensure the exact components are available at exactly the right time for your
            bespoke order. Parts and components are made all over the world with some manufacturers boasting around
            100,000 different build combinations available to order in the UK alone.</p>

        <h3 class="card__heading">With The Factory</h3>
        <p>Good news, production has started on your new vehicle. The bodywork and paintwork is almost complete and your
            vehicle is on the assembly line to be built. Vehicles usually remain as ‘build in progress’ for around one
            to three weeks.</p>

        <h3 class="card__heading">In Transit</h3>
        <p>&quot;Once your vehicle has come off the production line, it will be shipped to the UK. As manufacturing
            sites are based all over the world, the time it takes to deliver your new car varies from model to model.
            Vehicles are shipped from as far afield as South Africa and Mexico, with vehicle logistics companies often
            using road, rail and sea to get the vehicle from the manufacturing site to the dealership.</p>

        <h3 class="card__heading">Arrived in the UK</h3>
        <p>Once the vehicle has landed in the UK, the car will be delivered to the dealership or the manufacturer’s
            holding compound. It is at this point that the dealership completes a Pre-Delivery Inspection (also known as
            a PDI check) to ensure the vehicle is fit for delivery. This includes a thorough examination of the car,
            including the exterior, interior, mechanical parts and electrics. The dealer will also register your vehicle
            with the DVLA so we can provide you with your registration number.</p>

        <h3 class="card__heading">Vehicle Delivery</h3>
        <p>Once all necessary checks have been completed and we have received your signed finance documentation, we will
            contact you to arrange delivery. We will deliver your vehicle direct to your doorstep for free, provided
            your address is situated on the GB mainland (exclusions apply). Where possible, we will also try to arrange
            delivery at a time and date that is convenient to you.</p>

    </section>

    @include('index.footer')

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Custom js file link -->
    <script src="{{asset('index/js/scripts.js')}}">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>