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

class CredentialsController extends Controller
{
    public function show(){
        if (Auth::check())
        {
            $user = Auth::user();
            return view('credentials')->with(['userView' => $user['firstName'], 'lastNameView' => $user['lastName'], 'addressView' => $user['address'], 'telView' => $user['tel']] );
        }
        return redirect('login')->with(['msg' => "Molimo da se prijavite kako biste mogli da nastavite kupovinu!!!"]);
    }

    public function create(){
        if (Auth::check()){
            $user = Auth::user();
            $products = (array) json_decode(request('products'));
               dd($products[3]);
            if(json_decode(request('user'))) {
                $this->sendMailClient($user, $products);
            } else {
                $this->sendMailClient($user);
            }
        }
    }

     public function sendMailClient(User $userParam, $products){
        dd($products);
        Mail::send('empty_buy', array('title' => 'Kupovina Proizvoda', 'msg'=>'Poštovani/a da bi ste aktivirali vaš nalog potrebno je da kliknete na link ispod', 'products' => $products), function ($m) use ($userParam) {
            $m->from('elisa@elisa.rs', 'Elisa info');
            $m->to($userParam->email, $userParam->firstName)->subject('Kupovina Proizvoda na Elisu prodavnicu!');
        });
    }

}