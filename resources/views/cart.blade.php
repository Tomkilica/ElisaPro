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
                <table class="table">
                    <thead>
                        <th>Proizvod</th>
                        <th></th>
                        <th>Cena</th>
                        <th>Količina</th>
                        <th>Ukupno</th>
                    </thead>

                </table>
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