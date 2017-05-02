@extends ('app')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="./resources/assets/css/registration.css"">
    </head>
    <body>
        <section class="regis">
            <form method="POST" action="password/email">
                {{ csrf_field() }}
                <input type="email" name="email" placeholder="email adresa" value="{{ old('email') }}" required>
                <div class="massage">
                    @if($errors->get('email'))
                        <p>Molimo proverite Vašu email adresu.</p>
                    @endif
                </div>
                <input type="submit" value="Pošalji">
            </form>
        </section>
    </body>
@endsection