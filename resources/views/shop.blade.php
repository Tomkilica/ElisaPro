@extends ('app')

@section('content')

<html>
    <head>
        <title>jQuery Isotope</title>
        <link rel="stylesheet" href="./resources/assets/css/shop.css">
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
                    <img src="./resources/assets/img/products/pakovanje_za_kosu.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Pakovanje za kosu</a>
                <h6>nega kose</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/koncetrat_za_rucno_pranje_posudja.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Koncentrat za ručno<br> pranje posuđa</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class=" higijena">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/tecni_sapun_antibakterijska.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Antibakterijski tečni sapun</a>
                <h6>lična higijena</h6>
                <h6>369,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/sampon_za_suvu_kosu.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Šampon za suvu kosu</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>

        <div class="telo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/porodicna_krema2.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Porodična krema</a>
                <h6>nega tela</h6>
                <h6>599,00 din</h6>
             </div>
        </div>
        <div class="zdravlje">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/tecni_sapun.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Tečni sapun za ruke i telo</a>
                <h6>lična higijena</h6>
                <h6>339,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/sampon_hmelj_kopriva.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Šampon za masnu kosu</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/koncetrat_za_rublje.png" alt="image">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Koncentrat za ručno i mašinsko<br> pranje rublja</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="higijena">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/tecni_sapun.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Tečni sapun za ruke i telo</a>
                <h6>lična higijena</h6>
                <h6>339,00 din</h6>
            </div>
        </div>

        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/pasta_za_domacinstvo.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Pasta za domaćinstvo</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>249,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/deterdzent_za_staklo.png" alt="image">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Deterdžent za čišćenje<br> staklenih površina</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>269,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/sanitar_gel.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Sanitar gel</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>339,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/sampon_kopriva.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Šampon za svaki dan</a>
                <h6>nega kose</h6>
                <h6>349,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/omeksivac_za_rublje.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Omekšivač za rublje</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>359,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/univarzlni_koncetrat_za_ciscenje.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Univerzalni koncentrat<br> za čišćenje</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/koncetrat_za_rucno_pranje_tepiha.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Koncentrat za ručno<br> pranje tepiha</a>
                <h6>čišćenje domaćinstva</h6>
                <h6>599,00 din</h6>
            </div>
        </div>
        <div class="kosa">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/sampon_protiv_prhuti.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
                </div>
                <a>Šampon protiv peruti</a>
                <h6>nega kose</h6>
                <h6>449,00 din</h6>
            </div>
        </div>
        <div class="domacinstvo">
            <div class="item">
                <div class="img">
                    <img src="./resources/assets/img/products/krema_za_koznu_galanteriju.png">
                    <button>Više o proizvodu</button>
                    <a>Dodaj u korpu</a>
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