<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 24/04/2017
 * Time: 10:17
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function create(){



       $validation = $this->validate(request(), [
            'firstName' => 'required|min:3|max:64',
            'lastName' => 'required|min:3|max:64',
            'email' => 'required|email|max:128|confirmed|unique:users',
            'password' => 'required|min:6|max:64|confirmed',
            'tel' => 'required|max:19',
            'address' => 'required|max:256',
        ]);

       if($validation) {
           return redirect()->back()->withInput();

       }





        User::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'email' => request('email'),
            'tel' => request('tel'),
            'address' => request('address'),
            'password' => bcrypt(request('password'))]);


        return view('registration');



    }
}