@extends('app')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href={{url('/resources/assets/css/cart.css')}}>

    </head>
    <body>
    <section class="cart">
        <div class="box">
            <h2>Vaša Korpa</h2>
            <div class="content">
                <table>
                    <thead>
                        <th>Proizvod</th>
                        <th></th>
                        <th>Količina</th>
                        <th>Cena</th>
                    </thead>
                    <tr>
                        <td>
                            <div class="img">
                                <img src={{url('/resources/assets/img/products/deterdzent_za_staklo.png')}}>
                            </div>
                        </td>
                        <td>
                            <h4>Deterdzent za staklo</h4>
                        </td>
                        <td>
                            <h4>1 kom</h4>
                        </td>
                        <td>
                            <h4>299,00 din</h4>
                        </td>

                    </tr>
                </table>


            </div>
        </div>
    </section>
    </body>

    @endsection