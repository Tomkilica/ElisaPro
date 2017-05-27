@extends('app')
@section('content')


    <head>
        <link rel="stylesheet" type="text/css" href={{url('/resources/assets/css/credentials.css')}}>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/jquery.cookie.js')}}></script>
        <script type="text/javascript" src={{ url('/resources/assets/js/credentials.js')}}></script>
    </head>
    <body>
    <section class="table">
        <div class="content">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Adresa dostave</a></li>
                <li><a data-toggle="tab" href="#menu1">Druga adresa</a></li>
            </ul>
            <form method="POST"  enctype="multipart/form-data">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="form" >
                            <div class="wrapper">
                                <p><span>Ime:</span> {{ $userView['firstName']}}</p>
                                <p><span>Prezime:</span> {{ $userView['lastName']}}</p>
                                <p><span>Adresa:</span> {{ $userView['address']}}</p>
                                <p><span>Poštanski broj:</span> {{ $userView['zip']}}</p>
                                <p><span>Telefon:</span> {{ $userView['tel']}}</p>
                            </div>
                            <input id="submit_user" type="submit" value="Potvrdi">
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <p id="msg">Morate da popunite sva polja</p>
                        {{ csrf_field() }}
                        <input type="text" id="firstName" name="firstName" placeholder="ime kupca" value="{{ old('firstName') }}" >
                        <div class="massage">
                            @if($errors->get('firstName'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" id="lastName" name="lastName" placeholder="prezime kupca" value="{{ old('lastName') }}"  >
                        <div class="massage">
                            @if($errors->get('lastName'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" id="address" name="address" placeholder="Ulica, broj i mesto dostave" value="{{ old('address') }}" >
                        <div class="massage">
                            @if($errors->get('address'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" id="zip" name="zip" placeholder="poštanski broj" value="{{ old('zip') }}" >
                        <div class="massage">
                            @if($errors->get('zip'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="tel" id="tel" name="tel" placeholder="broj telefona" value="{{ old('tel') }}" >
                        <div class="massage">
                            @if($errors->get('tel'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input id="submit" type="submit" value="Potvrdi">
                    </div>
                </div>
            </form>
    </section>
    </body>
    @endsection