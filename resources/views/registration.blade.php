@extends ('app')

<head>
    <link rel="stylesheet" type="text/css" href="./resources/assets/css/registration.css">
    <link property="stylesheet" rel="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

</head>

@section('content')
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
                <p>Upisana email adresa mora biti ista kao i potvrđena email adresa</p>
            @endif
        </div>
        <input type="email" name="email_confirmation" placeholder="potvrda email adrese" value="" required>
        <div class="massage"></div>
        <input type="password" name="password" placeholder="lozinka" value="123" >
        <div class="massage">
            @if($errors->get('password'))
            <p>Lozinka mora imati minimum 6 karaktera i biti ista kao potvrđena</p>
            @endif
        </div>
        <input type="password" name="password_confirmation" placeholder="potvrda lozinke" value="123123" >
        <div class="massage"></div>
        <input type="tel" name="tel" placeholder="broj telefona" value="{{ old('tel') }}" required>
        <div class="massage">
            @if($errors->get('tel'))
                <p>Polje mora biti popunjeno</p>
            @endif
        </div>
        <input type="text" name="address" placeholder="adresa dostave" value="{{ old('address') }}" required>
        <div class="massage">
            @if($errors->get('address'))
                <p>Polje mora biti popunjeno</p>
            @endif
        </div>
        <input type="submit" value="Registruj se">
    </form>




</section>

</body>
@endsection

