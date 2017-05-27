<html lang="en-US">
<head>
    <meta charset="text/html">
	  <style type="text/css">
			p {
				font-size: 17px;
				font-weight: 300;
				padding-bottom: 20px;
			}
			p:first-child {
				font-weight: bold;
			} 
			.cart h2 {
				font-size: 15px;
				font-weight: bold;	
			}
			.cart table  tr {
			    text-align: center;
			    padding: 10px;
			    font-weight: normal;
			    padding-bottom: 5px;
			    border-bottom: 1px solid #ebedf0;
			}
	 	
	    </style>
</head>
<body>
    <p>{{$title}},</p>
	
	<p>{{$msg}}</p>

	@if($usernew)
		<p>{{$msgnew}}</p>		
 	@endif

	<section class="cart">
    	<h2>Vaša narudžbina</h2>
    	<br/>
        <table >
            <thead>
                <th>Proizvod</th>
                <th>Cena</th>
                <th>Količina</th>
                <th>Ukupno</th>
            </thead>
            <tfoot>
			   <tr>
			      <td><b>Ukupna cena proizvoda je: {{$totalPrice}},00 din</b></td>
			    </tr>
		    </tfoot>
		    <tbody>
			@for($i = 0; $i < count($products); $i++ )
					<tr>
						<td>{{$products[$i]['title']}} </td>
						<td>| {{$products[$i]['price']}} |</td>
						<td>{{$products[$i]['kolicina']}} |</td>
						<td>|{{$products[$i]['productPrice']}},00 din </td>
					</tr>
		    @endfor
		    </tbody>
        </table>
    </section>
    <br/>
	<p >Hvala na poverenju, srdačan pozdrav Vaša Elisa</p>
</body>
</html>