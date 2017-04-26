<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 24/04/2017
 * Time: 22:44
 */

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(){

//        $validation = $this->validate(request(), [
//            'email' => 'required|email|max:128',
//            'password' => 'required|min:6|max:64'
//        ]);
//
//        if($validation ) {
//            return redirect()->back()->withInput();
//        }

dd(Auth::attempt([
    'email' => request('email'),
    'password' => Hash::make(request('password'))]));
//        return redirect()->home();



    }




}