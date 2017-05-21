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

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="form" >
                        <div class="wrapper">
                            <p><span>Ime:</span> {{ $userView}}</p>
                            <p><span>Prezime:</span> {{ $lastNameView}}</p>
                            <p><span>Adresa:</span> {{ $addressView}}</p>
                            <p><span>Poštanski broj:</span> {{ $userView}}</p>
                            <p><span>Telefon:</span> {{ $telView}}</p>
                        </div>
                        <input  type="submit" value="Potvrdi">
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <form method="POST"  id="newAddress" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" name="firstName" placeholder="ime kupca" value="{{ old('firstName') }}" required>
                        <div class="massage">
                            @if($errors->get('firstName'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" name="lastName" placeholder="prezime kupca" value="{{ old('lastName') }}" required >
                        <div class="massage">
                            @if($errors->get('lastName'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" name="address" placeholder="Ulica, broj i mesto dostave" value="{{ old('address') }}" required>
                        <div class="massage">
                            @if($errors->get('address'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="text" name="zip" placeholder="poštanski broj" value="{{ old('zip') }}" required>
                        <div class="massage">
                            @if($errors->get('zip'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>
                        <input type="tel" name="tel" placeholder="broj telefona" value="{{ old('tel') }}" required>
                        <div class="massage">
                            @if($errors->get('tel'))
                                <p>Polje mora biti popunjeno</p>
                            @endif
                        </div>

                        <input id="submit" type="submit" value="Potvrdi">

                    </form>
                </div>

        </div>
    </section>

    </body>
    @endsection