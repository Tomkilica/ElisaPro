
@extends('app')

    <head>
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/owl.theme.default.min.css">
        <link type="text/css" rel="stylesheet" href="./resources/assets/css/home.css">
        <link property="stylesheet" rel="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="./resources/assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="./resources/assets/js/home.js"></script>

    </head>
@section('content')
    <body>
        <section class="hero">
            <div class="opacity"></div>
            <img src="./resources/assets/img/3.jpg">
        </section>
        <section class="about">
            <div class="box">
                <div class="img">
                    <img src="./resources/assets/img/7.jpg">
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
            <img src="./resources/assets/img/5.png">
            <div class="counter-content">
                <div class="box">
                    <div class="counter-el">
                        <div class="number"><span class="count" count-data="17">0</span></div>
                        <h5>godina iskustva</h5>
                    </div>
                    <div class="counter-el">
                        <div class="number"><span class="count" count-data="18">0</span></div>
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
                    <img src="./resources/assets/img/6.jpg">
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
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/deterdzent_za_staklo.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Deterdžent za čišćenje staklenih površina</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>269,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/koncetrat_za_rublje.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Koncentrat za ručno i mašinsko pranje rublja</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>599,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/koncetrat_za_rucno_pranje_tepiha.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Koncentrat za ručno pranje tepiha</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>599,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/krema_za_koznu_galanteriju.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Krema za kožnu galanteriju</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>479,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/omeksivac_za_rublje.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Omekšivač za rublje</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>359,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/pakovanje_za_kosu.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Pakovanje za kosu</a>
                    <h6>nega kose</h6>
                    <h6>599,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/pasta_za_domacinstvo.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Pasta za domaćinstvo</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>249,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/porodicna_krema2.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Porodična krema</a>
                    <h6>nega tela</h6>
                    <h6>599,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/sampon_hmelj_kopriva.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Šampon za masnu kosu</a>
                    <h6>nega kose</h6>
                    <h6>349,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/sampon_kopriva.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Šampon za svaki dan</a>
                    <h6>nega kose</h6>
                    <h6>349,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/sampon_protiv_prhuti.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Šampon protiv peruti</a>
                    <h6>nega kose</h6>
                    <h6>449,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/sanitar_gel.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Sanitar gel</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>339,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/tecni_sapun.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Tečni sapun za ruke i telo</a>
                    <h6>lična higijena</h6>
                    <h6>339,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/tecni_sapun_antibakterijska.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Antibakterijski tečni sapun</a>
                    <h6>lična higijena</h6>
                    <h6>369,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/univarzlni_koncetrat_za_ciscenje.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Univerzalni koncentrat za čišćenje</a>
                    <h6>čišćenje domaćinstva</h6>
                    <h6>599,00 din</h6>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="./resources/assets/img/sampon_za_suvu_kosu.png">
                        <button>Više o proizvodu</button>
                    </div>
                    <a>Šampon za suvu kosu</a>
                    <h6>nega kose</h6>
                    <h6>349,00 din</h6>
                </div>
            </div>
        </section>
    </body>


@endsection
