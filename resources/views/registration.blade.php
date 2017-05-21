@extends ('app')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/registration.css')}}>
</head>
<body>
<section class="regis">
    <form method="POST" action="registration">
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
        <input type="email" name="email" placeholder="email adresa" value="{{ old('email') }}" required>
        <div class="massage">
            @if($errors->get('email'))
                @if("The email has already been taken." == $errors->get('email')[0]) 
                    <p>Korisnik sa ovom email adresom već postoji u bazi.</p>
                @else 
                    <p>Upisana email adresa mora biti ista kao i potvrđena email adresa.</p>
                @endif
            @endif
        </div>
        <input type="email" name="email_confirmation" placeholder="potvrda email adrese" value="" required>
        <div class="massage"></div>
        <input type="password" name="password" placeholder="lozinka" value="" >
        <div class="massage">
            @if($errors->get('password'))
            <p>Lozinka mora imati minimum 6 karaktera i biti ista kao potvrđena</p>
            @endif
        </div>
        <input type="password" name="password_confirmation" placeholder="potvrda lozinke" value="" >
        <div class="massage"></div>
        <input type="tel" name="tel" placeholder="broj telefona" value="{{ old('tel') }}" required>
        <div class="massage">
            @if($errors->get('tel'))
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
        <input type="submit" value="Registruj se">
    </form>
</section>
</body>
@endsection

