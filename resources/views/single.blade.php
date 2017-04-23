@extends('app')
    <head>
        <link property="stylesheet" rel="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
        <link rel="stylesheet" href="./local/resources/assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./local/resources/assets/css/single.css">


        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
    </head>
@section('content')
    <body>
        <section class="product">
            <div class="box">
                <div class="img">
                    <img src="./local/resources/assets/img/Omeksivac za rublje veca.png">
                </div>
                <div class="content">
                    <div class="text">
                        <h3>Omeksivac za rublje</h3>
                        <h4>349,00 din</h4>
                        <p>Sadrži ekstrakte raznog bilja što mu daje vrlo prijatan i blag miris. Nikada nismo dobili nijednu pritužbu o pojavi neke alergijske reakcije, čak ni kod beba. Omekšava tkanine i neutrališe statički elektricitet.</p>
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
                                    <p>Sadrži ekstrakte raznog bilja što mu daje vrlo prijatan i blag miris. Nikada nismo dobili nijednu pritužbu o pojavi neke alergijske reakcije, čak ni kod beba. Omekšava tkanine i neutrališe statički elektricitet. Koristimo ga kod mašinskog pranja tako što u pregradak mašine sipamo 20-40ml (2-4 zatvarača). Kod ručnog pranja dozu određujemo sami na osnovu količine vode. Nakon upotrebe omekšivača finije tkanine ne moramo ni peglati, a pamuk i lan se lako peglaju. SASTAV: 5%-15% katjonskih PAM. Sadrži dodatno: miris, ekstrakt lekovitog bilja, Methylchloroisothiazolinone, Methylisothiazolinone, boju</p>
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

