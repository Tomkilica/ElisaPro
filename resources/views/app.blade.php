<!doctype>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/header.css">
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/footer.css">
        <link property="stylesheet" rel="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="top"></div>
            <div class="middle">
                <div class="user">
                    <div class="login">
                        <img src="./resources/assets/img/login.png">
                        <a>Prijavi se</a>
                    </div>
                    <div class="regist">
                        <img src="./resources/assets/img/regis.png">
                        <a>Novi kupac</a>
                    </div>
                </div>
                <div class="img">
                    <img src="./resources/assets/img/logo2.png">
                </div>
                <div class="cart">
                    <div class="content">
                        <a>Moja korpa</a>
                        <img src="./resources/assets/img/cart.png">
                    </div>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li><a>Naslovna</a></li>
                    <li><a>Internet Prodavnica</a></li>
                </ul>
            </nav>
        </header>
    @yield('content')
        <footer>
            <div class="box">
                <div class="address">
                    <div class="first">
                        <img src="./resources/assets/img/pointer.png">
                        <div class="text">
                            <h5>Svetozara Miletića 27a, 26 000 Pančevo, Srbija</h5>
                            <h5>Radno vreme: ponedeljak-petak 8 - 15h</h5>
                            <h5>Telefon: +381 64 137 46 42</h5>
                        </div>
                    </div>
                    <div class="second">
                        <img src="./resources/assets/img/pointer.png">
                        <div class="text">
                            <h5>Novi Sad</h5>
                            <h5>Telefon: +381 60 707 71 40</h5>
                        </div>
                    </div>
                    <div class="mail">
                        <div class="content">
                            <img src="./resources/assets/img/mail.png">
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