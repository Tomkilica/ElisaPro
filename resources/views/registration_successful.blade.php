@extends ('app')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/registration.css')}}>
</head>
<body>
    <div class="successful">
        <div class="box">
            <h2>Uspesno ste izvrsili registraciju!!!</h2>
            <h3>Molimo vas da potvrdite aktivaciju nalog odlaskom na link koji ce vam uskoro biti poslat na vasu email adresu.</h3>
        </div>
    </div>
</body>

@endsection

