<html lang="en-US">
<head>
    <meta charset="text/html">
	  <style type="text/css">
	    	
	    	img {
			    width: 60px;
				float: left;
	    	}
			p {
				font-size: 17px;
				font-weight: 300;
				padding-bottom: 20px;
			}
			p:first-child {
				font-weight: bold;
			} 
			.item {
			    width: 100%;
				float: left;
				margin: 10px 0;
			}
			.item h6 {
				padding: 25px 15px;
				float: left;
				font-size: 15px;
				margin: 0;
			}
			.cart .box .cartContent table  td {
			    text-align: center;
			    padding: 10px;
			    border-bottom: 1px solid #ebedf0;
			}

			.cart .box .cartContent table  td h4 {
			    font-weight: normal;
			    padding-bottom: 0;
			}
			.cart .box .cartContent .send {
			    width: 100%;
			    margin-top: 25px;
			    margin-bottom: 30px;
			    float: left;
			}
			.cart .box .cartContent .send #subtotal {
			    width: 200px;
			    height: 30px;
			    border: 2px solid #3f2803;
			    font-size: 19px;
			    text-align: center;
			}
			.cart .box .cartContent .send button {
			    font-size: 18px;
			    color: #fff;
			    cursor: pointer;
			    width: 200px;
			    height: 30px;
			    letter-spacing: 1.5;
			    background-color: #9f9381;
			    border: 2px solid #9f9381;
			    margin-top: 20px;
			    outline: none;
			    transition: background 1s, border 1s;
			}
			.cart .box .cartContent .send button:hover {
			    background: #a0d445;
			    transition: background 1s, border 1s;
			    border: 2px solid #a0d445;

			}
	 	
	    </style>
</head>
<body>
    <p>{{$title}}</p>
	
	<p>{{$msg}}</p>

	@if($usernew)
		<p>{{$msgnew}}</p>		
 	@endif

	<section class="cart">
        <div class="box">
            <h2>Vaša narudžbina</h2>
            <div class="cartContent">
                <table class="table">
                    <thead>
                        <th>Proizvod</th>
                        <th>Cena</th>
                        <th>Količina</th>
                        <th>Ukupno</th>
                     	<th></th>
                    </thead>
                    <tfoot>
					   <tr>
					      <td id="subtotal">Ukupna cena proizvoda je: {{$totalPrice}},00 din</td>
					    </tr>
				    </tfoot>
				    <tbody>
					@for($i = 1; $i < count($products); $i++ )
							<tr class="row">
								<td>{{$products[$i]['title']}}</td>
								<td>{{$products[$i]['price']}}</td>
								<td>{{$products[$i]['kolicina']}}</td>
								<td>{{$products[$i]['productPrice']}},00 din</td>
								<td><img src={{ url('/resources/assets/img/products')}}/{{$products[$i]['img']}}></td>
							</tr>
				    @endfor
				    </tbody>
                </table>
            </div>
        </div>
    </section>

	<p >Hvala na poverenju, srdačan pozdrav Vaša Elisa</p>

</body>
</html>