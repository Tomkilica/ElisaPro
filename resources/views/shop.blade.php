@extends ('app')

@section('content')

<html>
    <head>
        <title>Elisa Prodavnica</title>
        <link rel="stylesheet" href={{ url('/resources/assets/css/shop.css')}}>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="./resources/assets/js/shop/jquery.isotope.js" type="text/javascript"></script>
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

        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/pakovanje_za_kosu.png')}}>
                    <button class="up"><a href={{ url('/single/10')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Pakovanje za kosu</a>
                <h6>nega kose</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/koncetrat_za_rucno_pranje_posudja.png')}}>
                    <button class="up"><a href={{ url('/single/3')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Koncentrat za ručno<br> pranje posuđa</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class=" higijena">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/tecni_sapun_antibakterijska.png')}}>
                    <button class="up"><a href={{ url('/single/16')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Antibakterijski tečni sapun</a>
                <h6>lična higijena</h6>
                <h6>369,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/sampon_za_suvu_kosu.png')}}>
                    <button class="up"><a href={{ url('/single/11')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Šampon za suvu kosu</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>

        <div class="telo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/porodicna_krema.png')}}>
                    <button class="up"><a href={{ url('/single/17')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Porodična krema</a>
                <h6>nega tela</h6>
                <h6>599,00 din</h6>
             </div>
        </div>
        <div class="zdravlje">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/tecni_sapun.png')}}>
                    <button class="up"><a href={{ url('/single/18')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Tečni sapun za ruke i telo</a>
                <h6>lična higijena</h6>
                <h6>339,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/sampon_hmelj_kopriva.png')}}>
                    <button class="up"><a href={{ url('/single/12')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Šampon za masnu kosu</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/koncetrat_za_rublje.png')}}>
                    <button class="up"><a href={{ url('/single/2')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Koncentrat za ručno i mašinsko<br> pranje rublja</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="higijena">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/tecni_sapun.png')}}>
                    <button class="up"><a href={{ url('/single/15')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Tečni sapun za ruke i telo</a>
                <h6>lična higijena</h6>
                <h6>339,00 din</h6>
            </div>
        </div>

        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/pasta_za_domacinstvo.png')}}>
                    <button class="up"><a href={{ url('/single/4')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Pasta za domaćinstvo</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>249,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/deterdzent_za_staklo.png')}}>
                    <button class="up"><a href={{ url('/single/5')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Deterdžent za čišćenje<br> staklenih površina</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>269,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/sanitar_gel.png')}}>
                    <button class="up"><a href={{ url('/single/6')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Sanitar gel</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>339,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/sampon_kopriva.png')}}>
                    <button class="up"><a href={{ url('/single/13')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Šampon za svaki dan</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/omeksivac_za_rublje.png')}}>
                    <button class="up"><a href={{ url('/single/1')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Omekšivač za rublje</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>359,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/univarzlni_koncetrat_za_ciscenje.png')}}>
                    <button class="up"><a href={{ url('/single/7')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Univerzalni koncentrat<br> za čišćenje</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/koncetrat_za_rucno_pranje_tepiha.png')}}>
                    <button class="up"><a href={{ url('/single/8')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Koncentrat za ručno<br> pranje tepiha</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/sampon_protiv_prhuti.png')}}>
                    <button class="up"><a href={{ url('/single/14')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Šampon protiv peruti</a>
                <h6>nega kose</h6>
                <h6>449,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src={{ url('/resources/assets/img/products/krema_za_koznu_galanteriju.png')}}>
                    <button class="up"><a href={{ url('/single/9')}}>Više o proizvodu</a></button>
                    <button class="down">Dodaj u korpu</button>
                </div>
                <a>Krema za kožnu galanteriju</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>479,00 din</h6>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(window).load(function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });



    </script>
    </body>
    </html>

@endsection