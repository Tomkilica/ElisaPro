<html>
    <head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elisa</title>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <link rel="stylesheet" roperty="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/header.css')}}>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/footer.css')}}>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/owl.carousel.css')}}>
        <link type="text/css" rel="stylesheet" href={{ url('/resources/assets/css/home.css')}}>
        <script type="text/javascript" src={{ url('/resources/assets/js/jQueryV3.1.1.js')}}></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/bootstrapV3.3.7.js')}}></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/owl.carousel.min.js')}}></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/home.js')}}></script>
    </head>
    <body>
        <header>
            <div class="top"></div>
            <div class="middle">
                <div class="img">
                    <img src={{ url('/resources/assets/img/icons/logo.png')}}>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="{{url('/')}}">Naslovna</a></li>
                    <li><a href="{{url('/shop')}}">Internet Prodavnica</a></li>
                </ul>
            </nav>
        </header>
        <section class="hero">
            <div class="opacity"></div>
            <img src={{ url('/resources/assets/img/home/3.jpg')}}>
        </section>
        <section class="about">
            <div class="box">
                <div class="img">
                    <img src={{ url('/resources/assets/img/home/7.jpg')}}>
                </div>
                <div class="text">
                    <h2>O nama</h2>
                    <p>"Elisa" je firma sa sedištem u Pančevu i bavi se distribucijom domaćih, ekoloških, izuzetno kvalitetnih i efikasnih proizvoda, isključivo putem mrežnog marketinga. Osnovana je 15. februara 2000. godine i stalno je u brzom i konstantnom razvoju.</p>
                    <p>Iza nje stoji pet godina iskustva u mrežnom marketingu, pre samog osnivanja, tako da su primenjena i ugrađena iskustva najboljih svetskih sistema mrežnog marketinga koji odlično funkcionišu već preko pedeset godina. Osnovni razlog zašto se “Elisa” opredelila za mrežni marketing je taj što je to definitivno najsavršeniji sistem koji povezuje potrošača, sa kvalitetnim proizvodom, pruža mu mogućnost da na fer način zaradi novac i stvara jedan novi odnos između potrošača i proizvođača. </p>
                </div>
            </div>
        </section>
        <section id="counter" class="counter">
            <div class="opacity"></div>
            <img src={{ url('/resources/assets/img/home/5.png')}}>
            <div class="counter-content">
                <div class="box">
                    <div class="counter-el">
                        <div class="number"><span class="count" count-data="17">0</span></div>
                        <h5>godina iskustva</h5>
                    </div>
                    <div class="counter-el">
                        <div class="number"><span class="count" count-data="19">0</span></div>
                        <h5>proizvoda</h5>
                    </div>
                    <div class="counter-el">
                        <div class="number"><span class="count" count-data="100">0</span><span>%</span></div>
                        <h5>prirodno</h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="about products">
            <div class="box">
                <div class="img">
                    <img src="{{ url('/resources/assets/img/home/6.jpg')}}">
                </div>
                <div class="text">
                    <h2>O proizvodima</h2>
                    <p>Osnova "Elisinih" proizvoda je površinski aktivna supstanca uvezena iz Francuske, kojoj su naši tehnolozi dodavali domaće bilje sa Stare Planine, pridržavajući se starih i proverenih narodnih recepata. Znači, proizvodi su isključivo biljnog porekla, a za sredstva za čišćenje u domaćinstvu korišćeno je razno bilje, a najčešće bosiljak i kopriva, a za ličnu higijenu još i neven, kantarion, hajdučka trava, hmelj, lipa, breza i kamilica.</p>
                    <p>Mirisi su blagi i prijatni a proizvodi ne zagađuju okolinu jer su biorazgradivi, što znači da se 95% upotrebljenog proizvoda i prljavštine koju je pokupio, u roku od tri dana razloži na supstance koje nisu štetne za ljudsko zdravlje i prirodnu okolinu. Ne sadrže kiseline, alkalije ni polifosfate, pa samim tim ne oštećuju kožu ni sluzokožu disajnih puteva.</p>
                    <p>Zbog toga, što nemaju u sebi nikakvih agresivnih hemijskih supstanci, potrebno ih je, prilikom upotrebe, ostaviti da deluju neko vreme. Sva sredstva se koriste u izuzetno malim količinama jer su koncentrovana. Bez obzira na to, nisu jako gusta jer ne sadrže soli (soli daju gustinu, ali štetno deluju na kožu). Tečne proizvode pre upotrebe treba promućkati. Koncentrati za čišćenje imaju PH vrednost od 8 do 9, a razblaženi sa vodom već postaju neutralni (PH vrednost 7). Šamponi i ostala sredstva za ličnu higijenu mogu se koristiti svakodnevno, i za tuširanje i za pranje kose jer ne utiču na kiselost kože (PH vrednost 5,5).</p>
                </div>
            </div>
        </section>
        <section class="galleria">
            <div class="owl-carousel owl-theme">
            @for($i = 1; $i <= count($products); $i++ )
                <div class="item">
                    <div class="img">
                        <img src={{ url('/resources/assets/img/products')}}/{{$products[$i]['img']}}>
                        <a href={{ url('/single')}}/{{$i}}>Više o proizvodu</a>
                    </div>
                    <a href={{ url('/single')}}/{{$i}}>{{$products[$i]['title']}}</a>
                    <h6>{{$products[$i]['subtitle']}}</h6>
                    <h6>{{$products[$i]['price']}}</h6>
                </div>
            @endfor
            </div>
        </section>
        <footer>
            <div class="box">
                <div class="address">
                    <div class="first">
                        <img src={{ url('/resources/assets/img/icons/pointer.png')}}>
                        <div class="text">
                            <h5>Svetozara Miletića 27a, 26000 Pančevo, Srbija</h5>
                            <h5>Radno vreme: ponedeljak-petak 8 - 15h</h5>
                            <h5>Telefon: +381 64 137 46 42</h5>
                        </div>
                    </div>
                    <div class="second">
                        <img src={{ url('/resources/assets/img/icons/pointer.png')}}>
                        <div class="text">
                            <h5>Novi Sad</h5>
                            <h5>Telefon: +381 60 707 71 40</h5>
                        </div>
                    </div>
                    <div class="mail">
                        <div class="content">
                            <img src={{ url('/resources/assets/img/icons/mail.png')}}>
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

