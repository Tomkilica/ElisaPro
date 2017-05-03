@extends('app')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/single.css')}}>
        <script type="text/javascript" src={{ url('/resources/assets/js/single.js')}}></script>
    </head>
    <body>
        <section class="product">
            <div class="box">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products_large')}}/{{$imgView}}>
                </div>
                <div class="content">
                    <div class="text">
                        <h3>{{$titleView}}</h3>
                        <h4>{{$priceView}}</h4>
                        <p>{{$descriptionView}}</p>
                        <div class="qty">
                            <input id="qty" value="0" />
                            <button id="down" onclick="modify_qty(-1)"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            <button id="up" onclick="modify_qty(1)"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
                            <button>Dodaj u kolica</button>
                        </div>
                        <div class="table">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Opis proizvoda</a></li>
                                <li><a data-toggle="tab" href="#menu1">Dodatne informacije</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <p>{{$detaildescView}}</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <p>Some content in menu 1.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Some content in menu 2.</p>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </section>

    </body>
@endsection

