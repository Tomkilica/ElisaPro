<?php

namespace App\Http\Controllers;

use Crypt;
use App\Products;

class ShopController extends Controller
{

      public function __construct(Products $products){
        $this->products = $products;
      } 

      public function single($idParam)
      {
            $products = $this->products->products;
            if($idParam <= count($products) &&  $idParam > 0 ) {
                  $product = $products[$idParam];
                  return view('single')->with(['idView' => $idParam,'product' => $product]);      
            }

            return redirect('/');
            
              // $idCrypte = Crypt::encrypt($idParam);
              //     dd(Crypt::decrypt($idCrypte));
              // return view('single')->with(['imgView' => $img, 'titleView' => $title, 'priceView' => $price, 'descriptionView' => $description, 'detaildescView' => $detailDescription ]);
      }

    public function shop(){
        return view('shop')->with(['productsAll' => $this->products->products]);
    }


}