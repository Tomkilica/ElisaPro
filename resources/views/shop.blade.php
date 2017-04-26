@extends ('app')

@section('content')

<html>
    <head>
        <title>jQuery Isotope</title>
        <link rel="stylesheet" href="./resources/assets/css/shop.css">
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="./resources/assets/js/shop/jquery.isotope.js" type="text/javascript"></script>
    </head>
    <body>

    <div class="portfolioFilter">

        <a href="#" data-filter="*" class="current">All Categories</a>
        <a href="#" data-filter=".people">People</a>
        <a href="#" data-filter=".places">Places</a>
        <a href="#" data-filter=".food">Food</a>
        <a href="#" data-filter=".objects">Objects</a>

    </div>

    <div class="portfolioContainer">

        <div class="objects">
            <img src="./resources/assets/img/home/5.png" alt="image">
        </div>

        <div class="people places">
            <img src="./resources/assets/img/home/7.jpg" alt="image">
        </div>

        <div class="food">
            <img src="./resources/assets/img/home/6.jpg" alt="image">
        </div>

        <div class="people places">
            <img src="./resources/assets/img/home/5.png" alt="image">
        </div>

        <div class="places objects">
            <img src="./resources/assets/img/home/6.jpg" alt="image">
        </div>

        <div class="people food objects">
            <img src="./resources/assets/img/home/6.jpg" alt="image">
        </div>

        <div class="food objects">
            <img src="./resources/assets/img/home/5.png" alt="image">
        </div>

        <div class="food">
            <img src="./resources/assets/img/home/6.jpg" alt="image">
        </div>

    </div>


    <script type="text/javascript">
        $(window).load(function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });



    </script>
    </body>
    </html>

@endsection