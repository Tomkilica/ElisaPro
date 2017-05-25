@extends ('app')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href={{ url('/resources/assets/css/registration.css')}}>
</head>
<body>
    <div class="successful">
        <div class="box">
            <h2>Uspešno ste naručili!!!</h2>
            <h3>Uskoro ćemo Vas kontaktirati u vezi sa dostavom poručenih proizvoda.</h3>
        </div>
    </div>
</body>

@endsection

