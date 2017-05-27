<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elisa Prodavnica</title>
        <link rel="icon" href="{{ url('/resources/assets/img/icons/favicon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" roperty="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/resources/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('/resources/assets/css/header.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('/resources/assets/css/footer.css')}}">
        <script type="text/javascript" src="{{ url('/resources/assets/js/jQueryV3.1.1.js')}}"></script>
        <script type="text/javascript" src="{{ url('/resources/assets/js/bootstrapV3.3.7.js')}}"></script>
    </head>
    <body>
        <header>
            <div class="top">
                <a href="{{url('/protection')}}">Zaštita privatnosti podataka</a>
                <a href="{{url('/terms')}}">Uslovi korišćenja</a>
                <a href="{{url('/purchase')}}">Kupovina i isporuka</a>
            </div>
            <div class="middle">
                <div class="user">
                    <div class="login">
                        @if(!Auth::check())
                            <img src="{{ url('/resources/assets/img/icons/login.png')}}">
                            <a href="{{url('/login')}}">Prijavi se</a>
                        @else
                            <img src="{{ url('/resources/assets/img/icons/logout.png')}}">
                            <a href="{{url('/logout')}}">Odjavi se</a>
                        @endif
                    </div>
                    <div class="regist">
                        @if(!Auth::check())
                            <img src="{{ url('/resources/assets/img/icons/regis.png')}}">
                            <a href="{{url('/registration')}}">Registruj se</a>
                         @endif
                    </div>
                </div>
                <div class="img">
                    <img src="{{ url('/resources/assets/img/icons/logo.png')}}">
                </div>
                <div class="cart">
                    @if(Auth::check())
                        <div class="user_name">
                            <a href="{{url('/edit')}}">{{Auth::user()->firstName}}  {{Auth::user()->lastName}}</a>
                            <img src="{{ url('/resources/assets/img/icons/login.png')}}">
                        </div>
                    @endif
                    <div class="content">
                        <a href="{{url('/cart')}}">Moja korpa</a>
                        <img src="{{ url('/resources/assets/img/icons/cart.png')}}">
                    </div>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="{{url('/')}}">Naslovna</a></li>
                    <li><a href="{{url('/shop')}}">Internet Prodavnica</a></li>
                </ul>
            </nav>
        </header>
    @yield('content')
        <footer>
            <div class="box">
                <div class="address">
                    <div class="first">
                        <img src="{{ url('/resources/assets/img/icons/pointer.png')}}">
                        <div class="text">
                            <h5>Svetozara Miletića 27a, 26000 Pančevo, Srbija</h5>
                            <h5>Radno vreme: ponedeljak-petak 8 - 15h</h5>
                            <h5>Telefon: +381 64 137 46 42</h5>
                        </div>
                    </div>
                    <div class="second">
                        <img src="{{ url('/resources/assets/img/icons/pointer.png')}}">
                        <div class="text">
                            <h5>Novi Sad</h5>
                            <h5>Telefon: +381 60 707 71 40</h5>
                        </div>
                    </div>
                    <div class="mail">
                        <div class="content">
                            <img src="{{ url('/resources/assets/img/icons/mail.png')}}">
                            <a href="mailto:elisa@elisa.rs">elisa@elisa.rs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="green-line">
                <h6>&copy;copyright 2017</h6>
            </div>
        </footer>
    </body>
</html>