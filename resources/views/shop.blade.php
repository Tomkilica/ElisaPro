@extends ('app')

@section('content')

<html>
    <head>
        <title>Elisa Prodavnica</title>
        <link rel="stylesheet" href={{ url('/resources/assets/css/shop.css')}}>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="./resources/assets/js/shop/jquery.isotope.js" type="text/javascript"></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/jquery.cookie.js')}}></script>
        <script src="./resources/assets/js/shop/shop.js" type="text/javascript"></script>

    </head>
    <body>
    <div class="nav">

        <div class="portfolioFilter">
            <a href="#" data-filter="*" class="current">Svi proizvodi</a>
            <a href="#" data-filter=".kosa">Za negu kose</a>
            <a href="#" data-filter=".higijena">Za ličnu higijenu</a>
            <a href="#" data-filter=".telo">Za negu tela</a>
            <a href="#" data-filter=".zdravlje">Za zdravlje</a>
            <a href="#" data-filter=".domacinstvo">Za domaćinstvo</a>
        </div>
    </div>

    <div class="portfolioContainer">

        @for($i = 1; $i <= count($productsAll); $i++ )
            <div class="{{$productsAll[$i]['class']}}">
                <div class="item">
                    <div class="img">
                    <img id="img_{{$i}}" src={{ url('/resources/assets/img/products')}}/{{$productsAll[$i]['img']}}>
                    <a class="up" href={{ url('/single')}}/{{$i}}>Više o proizvodu</a>
                    <button class="down add" onclick="add({{$i}})">Dodaj u korpu</button>
                    </div>
                    <a id="title_{{$i}}">{{$productsAll[$i]['title']}}</a>
                    <h6>{{$productsAll[$i]['subtitle']}}</h6>
                    <h6 id="price_{{$i}}">{{$productsAll[$i]['price']}}</h6>

                </div>
            </div>
        @endfor
    </div>
    </body>
    </html>

@endsection