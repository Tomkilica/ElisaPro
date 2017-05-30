
@extends('app')

@section('content')
    <head>
        <link rel="stylesheet" href={{ url('/resources/assets/css/terms.css')}}>
    </head>
    <body>
        <section class="text-info">
            <div class="box">
                <h3>Kupovina i isporuka</h3>
                <h5>1. Pronađite proizvod koji želite da naručite</h5>
                <h6>Iz našeg kataloga proizvoda na stranici Internet prodavnica, odaberite proizvod koji želite da kupite.</h6>
                <h5>2. Ubacite proizvode u korpu</h5>
                <h6>Ubacite željeni proizvod u svoju korpu klikom na dugme 'Dodaj u korpu'
                    koje se nalazi na slici svakog proizvoda u internet prodavnici. Klikom na dugme 'Više o proizvodu',
                    otići ćete na stranicu na kojoj možete pročitati informacije o
                    izabranom proizvodu, kao i izabrati željenu količinu i dodati je u korpu.
                    Ponovite postupak sve dok ne dodate sve proizvode koje želite da kupite.</h6>
                <h5>3. Naručite proizvode iz korpe</h5>
                <h6>Izabrane proizvode možete pogledati i naručiti klikom na link 'Moja korpa'
                    u gornjem desnom uglu. Postupak naručivanja inicirate klikom na dugme
                    'Prihvati' koje se nalazi desno ispod spiska proizvoda.
                    Ukoliko niste prijavljeni bićete preusmereni na formu za prijavljivanje ili registraciju.</h6>
                <h5>4. Prijavljivanje</h5>
                <h6>Ukoliko niste prijavljeni, moraćete se prijaviti ili se registrovati ukoliko niste do sada kupovali.
                    Registracija na sajtu je brza, jednostavna i besplatna.
                    Unesite email koji aktivno koristite kako biste uvek bili pravovremeno obavešteni o statusu
                    Vaših postavljenih narudžbina. Sve Vaše narudžbine ćete uvek moći pogledati i
                    pratiti na sajtu preko Vašeg naloga.</h6>
                <h5>5. Potvrda narudžbine</h5>
                <h6>Na email koji ste upisali pri prijavi za online kupovinu i
                    koji ćete u budućnosti koristiti pri kupovini ćete dobiti potvrdu o obavljenoj kupovini i
                    na taj način možete biti sigurni da je porudžbina uspešno obavljena i prosleđena do nas.
                    U isto vreme, mi ćemo evidentirati Vašu porudžbinu, odvojiti robu za slanje i poslati Vam.
                    U slučaju da postoji neki problem, neslaganje ili nam je potrebna neka dodatna informacija,
                    kontaktiraćemo Vas prvo na telefon koji ste ostavili pri registrovaciji, a ako Vas ne nađemo,
                    poslaćemo Vam e-mail.</h6>
                <h5>6. Isporuka</h5>
                <h6>Narudžbine primljene do 14:00h šaljemo istog dana i Vama se dostavlja paket sledeći radni dan.
                    Troškovi poštarine obračunavaju se na osnovu težine proizvoda.
                </h6>
            </div>
        </section>
    </body>
    @endsection