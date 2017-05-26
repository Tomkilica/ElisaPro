<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 14/05/2017
 * Time: 09:27
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Products;

class CredentialsController extends Controller
{
    public function __construct(Products $products) {
        $this->products = $products;
    } 

    public function show(){
        if (Auth::check())
        {
            $user = Auth::user();
            return view('credentials')->with(['userView' => $user]); 
        }
        return redirect('login')->with(['msg' => "Molimo da se prijavite kako biste mogli da nastavite kupovinu!!!"]);
    }

    public function create(){
        try {
            if (Auth::check()) {
                    
                $products = $this->products->products;
                $productBuy = array();
                $user = Auth::user();
                $post = $_POST;
                $kolicinaId = $post['productsKolicina'];
                $arraykolicina = explode(",", $kolicinaId);
                $productsId = $post['productsId'];
                $arrayId = explode(",", $productsId);
                $totalPrice = 0;
                for ($i=0; $i < count($arrayId); $i++) {
                    if($arrayId[$i] > 0 && $arrayId[$i] != "" && $arraykolicina[$i] > 0) {
                        $id = $arrayId[$i];
                        $price = (int) $products[$id]['price'];
                        $productPrice = $arraykolicina[$i] * $price;
                        $object = array( 
                            'title' => $products[$id]['title'],
                            'img' => $products[$id]['img'],
                            'price' => $products[$id]['price'],
                            'productPrice' => $productPrice,
                            'kolicina' => $arraykolicina[$i]
                        );
                        $totalPrice +=  $productPrice; 
                        array_push($productBuy, $object); 
                    }
                } 
                
                if($post['user'] == "true") {
                    Mail::send('buyproducts', array('usernew' => false, 'title' => 'Narudžbina,'  , 'msg' => 'Poručilac ' . $user->firstName . " " . $user->lastName . ' na adresi - '. $user->address . ', poštanski broj ' . $user->zip . ' sa brojem telefona ' . $user->tel, 'products' => $productBuy, 'totalPrice' => $totalPrice), function ($m) use ($user) {
                        $m->from('elisa@elisa.rs', 'Elisa Prodavnica');
                        $m->to('elisa@elisa.rs')->subject('Narudzbina Proizvoda od strane ' . $user->firstName . ' ' . $user->lastName);
                    });

                    Mail::send('buyproducts', array('usernew' => false, 'title' => 'Poštovani/a '. $user->firstName . " " . $user->lastName  , 'msg'=>'Vaša narudžbina će biti poslata na ' . $user->address, 'products' => $productBuy, 'totalPrice' => $totalPrice), function ($m) use ($user) {
                        $m->from('elisa@elisa.rs', 'Elisa Prodavnica');
                        $m->to($user->email, $user->firstName . " " . $user->lastName )->subject('Kupovina Proizvoda na sajtu Elisa.rs');
                    });
                } else {
                    if(!$post['firstname'] || !$post['lastName'] || !$post['address'] || !$post['zip'] || !$post['tel'] ) {
                        return "false"; 
                    }
                    $firstName = $post['firstname'];
                    $lastName = $post['lastName'];
                    $address = $post['address'];
                    $zip = $post['zip'];
                    $tel = $post['tel'];
                    
                    Mail::send('buyproducts', array('usernew' => true, 'title' => 'Narudžbina,'  , 'msg' => 'Poručilac ' . $user->firstName . " " . $user->lastName . ' sa brojem telefona ' . $user->tel, 'msgnew' => 'Za ' . $firstName . " " . $lastName .' na adresi - '. $address . ', poštanski broj ' . $zip . ' sa brojem telefona ' . $tel, 'products' => $productBuy, 'totalPrice' => $totalPrice), function ($m) use ($user) {
                        $m->from('elisa@elisa.rs', 'Elisa Prodavnica');
                        $m->to('elisa@elisa.rs')->subject('Narudzbina Proizvoda od strane ' . $user->firstName . ' ' . $user->lastName);
                    });

                    Mail::send('buyproducts', array('usernew' => true,'msgnew' => 'Za ' . $firstName . " " . $lastName .' na adresi - '. $address . ', poštanski broj ' . $zip . ' sa brojem telefona ' . $tel, 'title' => 'Poštovani/a '. $user->firstName . " " . $user->lastName  , 'msg'=>'Vaša narudžbina će biti poslata na ' . $address, 'products' => $productBuy, 'totalPrice' => $totalPrice), function ($m) use ($user) {
                        $m->from('elisa@elisa.rs', 'Elisa Prodavnica');
                        $m->to($user->email, $user->firstName . " " . $user->lastName )->subject('Kupovina Proizvoda na sajtu Elisa.rs');
                    });
                }
                return "true";
            } else {
                    return redirect('login')->with(['msg' => "Molimo da se prijavite kako biste mogli da nastavite kupovinu!!!"]);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function success() {
        if (Auth::check())
        {
            return view('success');
        }
        return redirect('login')->with(['msg' => "Molimo da se prijavite kako biste mogli da nastavite kupovinu!!!"]); 
    }
}