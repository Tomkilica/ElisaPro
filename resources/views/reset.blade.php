@extends ('app')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/assets/css/registration.css')}}">
</head>
<body>
<section class="regis">
   <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email"  name="email" placeholder="email adrese" value="{{ $email or old('email') }}" required>
        <div class="massage">
            @if($errors->get('email'))
            <!-- <p>{{$errors->get('email')}}</p> -->
                    <p>Upisana email adresa mora biti ista kao i potvrđena email adresa.</p>
            @endif
        </div>
        <div class="massage"></div>
        <input type="password" name="password" placeholder="lozinka" required>
        <div class="massage">
            @if($errors->get('password'))
                <p>Lozinka mora imati minimum 6 karaktera i biti ista kao potvrđena</p>
            @endif
        </div>
        <input type="password" name="password_confirmation" placeholder="potvrda lozinke" required>
        <div class="massage"></div>
        <input type="submit" value="Registruj se">
    </form>
</section>
</body>
@endsection