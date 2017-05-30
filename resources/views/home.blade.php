<html>
    <head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elisa</title>
        <link rel="icon" href="{{ url('/resources/assets/img/icons/favicon.ico')}}" type="image/x-icon">
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
                    <p>"Elisa" je firma sa sedištem u Pančevu i bavi se distribucijom domaćih, ekoloških, izuzetno kvalitetnih i efikasnih sredstava za kućnu i ličnu higijenu, isključivo putem mrežnog marketinga i direktne prodaje. Osnovana je 15. februara 2000. godine i odavno je prepoznata po kvalitetu svojih proizvoda, ne samo u Srbiji, već i mnogo, mnogo dalje.</p>
                    <p>Osnovni razlog zašto se “Elisa” opredelila za mrežni marketing i direktnu prodaju je mogućnost neposrednog povezivanja sa potrošačima, njihovim željama i mogućnostima. Naš posao je da uvek ponudimo najbolje, najzdravije, najkvalitetnije i najpovoljnije, a Vaš posao je da uživate u blagodetima naših jedinstvenih proizvoda.</p>
                    <p>I naravno, da ih kupite direktno od nas, ovde, jer, zašto bi ih plaćali duplo, ili troduplo skuplje preko bilo kog posrednika!? Zato mi i ne želimo da izmedju nas i naših kupaca postoji posrednik, jer naši kupci zaslužuju bolje, a to je ono što od prvog dana gradimo.....poverenje......ono za nas nema cenu.</p>
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
                    <p>Osnova "Elisinih" proizvoda je površinski aktivna, biorazgradiva supstanca, kojoj su naši tehnolozi dodavali domaće lekovito bilje, kojim su planine širom Srbije prebogate, pridržavajući se starih i proverenih narodnih recepata. Najčešće korišćeno lekovito bilje u našim sredstvima za održavanje higijene prostora su bosiljak i kopriva, a za ličnu higijenu još i neven, kantarion, hajdučka trava, hmelj, lipa, breza i kamilica.</p>
                    <p>Mirisi su blagi i prijatni, a proizvodi ne zagađuju okolinu jer su biorazgradivi, što znači da se 95% upotrebljenog proizvoda u roku od tri dana razloži na supstance koje nisu štetne za ljudsko zdravlje i prirodnu okolinu. Ne sadrže kiseline, alkalije ni polifosfate, pa samim tim ne oštećuju kožu, ni sluzokožu disajnih puteva.</p>
                    <p>Zbog toga, što nemaju u sebi nikakvih agresivnih hemijskih supstanci, potrebno ih je, prilikom upotrebe, neko vreme ostaviti da deluju. Sva sredstva se koriste u izuzetno malim količinama jer su koncentrovana. Bez obzira na to, nisu jako gusta, jer ne sadrže soli (soli daju gustinu, ali štetno deluju na kožu). Tečne proizvode pre upotrebe treba promućkati. Koncentrati za čišćenje imaju PH vrednost od 8 do 9, a razblaženi vodom postaju PH neutralni (PH vrednost 7). Šamponi i ostala sredstva za ličnu higijenu mogu se koristiti svakodnevno, i za tuširanje i za pranje kose, jer ne utiču na kiselost kože (PH vrednost 5,5).</p>
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

