@extends ('app')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/registration.css')}}>
    </head>
    <body>
    <section class="regis">
        <div class="successful">
            <div class="box">
                <h3><?= $msg ?></h3>
            </div>
        </div>
        <form method="POST" action="login">
            {{ csrf_field() }}
            <input type="email" name="email" placeholder="email adresa" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="lozinka" value="" required>
            <div class="massage">
                @if($errors->get('email') || $errors->get('password'))
                    <p>Molimo proverite Vašu email adresu i lozinku</p>
                @endif
            </div>

            <input type="submit" value="Prijavi se">
            <a class="forgot_pass" href="{{url('/forgot')}}">Zaboravili ste lozinku?</a>
        </form>
    </section>
    </body>
@endsection