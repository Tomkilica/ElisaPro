@extends('app')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/single.css')}}>
        <script type="text/javascript" src={{ url('/resources/assets/js/jquery.cookie.js')}}></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/single.js')}}></script>
    </head>
    <body>
        <section class="product">
            <div class="box">
                <div class="img">
                    <a href="#" id="pop">
                        <img id="img" src={{ url('/resources/assets/img/products_large')}}/{{$product['img']}}>
                    </a>
                </div>
                <div class="content">
                    <div class="text">
                        <input id="id" class="none" type="text" value="{{$idView}}">
                        <h4 id="title">{{$product['title']}}</h4>
                        <h4 id="price">{{$product['price']}}</h4>
                        <p>{{$product['description']}}</p>
                        <div class="qty">
                            <input id="qty" value="0" />
                            <button id="down" onclick="modify_qty(-1)"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            <button id="up" onclick="modify_qty(1)"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
                            <button id="insert">Dodaj u kolica</button>
                        </div>
                        <div class="table">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Opis proizvoda</a></li>
                                <li><a data-toggle="tab" href="#menu1">Dodatne informacije</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <p>{{$product['detailDescription']}}</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    @foreach ($product['additionalInfo'] as $key => $value )
                                         <p>{{$key}}:  {{$value}}</p>
                                    @endforeach
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
            <!-- Creates the bootstrap modal where the image will appear -->
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </div>
                        <div class="modal-body">
                            <img src="" id="imagepreview" >
                        </div>
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Zatvoriti</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>


    </body>
@endsection

