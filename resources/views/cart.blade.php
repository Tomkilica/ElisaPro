@extends('app')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{url('/resources/assets/css/cart.css')}}>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

        <script type="text/javascript" src={{ url('/resources/assets/js/jquery.cookie.js')}}></script>

        <script type="text/javascript" src={{ url('/resources/assets/js/cart.js')}}></script>


    </head>
    <body>
    <section class="cart">
        <div class="box">
            <h2>Vaša Korpa</h2>
            <div class="cartContent">
                <div class="table">
                    <div class="thead">
                        <div class="th">Proizvod</div>
                        <div class="th"></div>
                        <div class="th">Cena</div>
                        <div class="th">Količina</div>
                        <div class="th">Ukupno</div>
                        <div class="th"></div>
                    </div>
                </div>
                <div class="send">
                    <div id="subtotal"></div>
                    <button id="accept">Prihvati</button>
                </div>

            </div>
        </div>
    </section>



    <div id="test"></div>


    </body>

    @endsection