<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 03/05/2017
 * Time: 16:29
 */

namespace App\Http\Controllers;


class CartController
{
    public function show(){
        return view('cart');
    }

}