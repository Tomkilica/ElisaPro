@extends ('app')

<head>
    <link rel="stylesheet" type="text/css" href="./resources/assets/css/registration.css">
    <link property="stylesheet" rel="stylesheet" id="tp-open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.6.4" type="text/css" media="all">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

</head>

@section('content')
<body>
<section class="regis">
    <form>
        <input type="text" placeholder="ime kupca">
        <input type="email" placeholder="email adresa">
        <input type="email" placeholder="potvrda email adrese">
        <input type="password" placeholder="lozinka">
        <input type="password" placeholder="potvrda lozinke">
        <input type="tel" placeholder="broj telefona">
        <input type="text" placeholder="adresa dostave">
        <input type="submit" value="Registruj se">
    </form>
</section>

</body>
@endsection

