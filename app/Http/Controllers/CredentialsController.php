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

class CredentialsController extends Controller
{
    public function show(){
        if (Auth::check())
        {
            $user = Auth::user();
//            dd($user);
            return view('credentials')->with(['userView' => $user['firstName'], 'lastNameView' => $user['lastName'], 'addressView' => $user['address'], 'telView' => $user['tel']] );
        }

        return redirect('login')->with(['msg' => "Molimo da se prijavite kako biste mogli da nastavite kupovinu!!!"]);
    }
    public function create(){
        return view('home');
    }

}