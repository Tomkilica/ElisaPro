@extends('app')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/registration.css')}}>
    </head>
    <body>
    <section class="regis">
        <form method="POST" action="edit">
            {{ csrf_field() }}
            <p><span>Email:</span>{{ $userView['email']}}</p>
            <input type="text" name="firstName" placeholder="ime kupca" value="{{ $userView['firstName']}}" required>
            <div class="massage">
                @if($errors->get('firstName'))
                    <p>Polje mora biti popunjeno</p>
                @endif
            </div>
            <input type="text" name="lastName" placeholder="prezime kupca" value="{{ $userView['lastName']}}" required >
            <div class="massage">
                @if($errors->get('lastName'))
                    <p>Polje mora biti popunjeno</p>
                @endif
            </div>
            <input type="tel" name="tel" placeholder="broj telefona" value="{{ $userView['tel']}}" required>
            <div class="massage">
                @if($errors->get('tel'))
                    <p>Polje mora biti popunjeno</p>
                @endif
            </div>
            <input type="text" name="address" placeholder="Ulica, broj i mesto dostave" value="{{ $userView['address']}}" required>
            <div class="massage">
                @if($errors->get('address'))
                    <p>Polje mora biti popunjeno</p>
                @endif
            </div>
            <input type="text" name="zip" placeholder="poštanski broj" value="{{ $userView['zip']}}" required>
            <div class="massage">
                @if($errors->get('zip'))
                    <p>Polje mora biti popunjeno</p>
                @endif
            </div>
            <input type="submit" value="Sačuvaj izmene">
        </form>
    </section>
    </body>
    @endsection