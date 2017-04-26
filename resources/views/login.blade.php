@extends ('app')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/registration.css"">
    </head>
    <body>
    <section class="regis">
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
        </form>
    </section>
    </body>
@endsection