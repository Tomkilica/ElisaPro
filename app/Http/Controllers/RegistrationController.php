<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 24/04/2017
 * Time: 10:17
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\ResetPassword;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reminder;

class RegistrationController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest');
    }

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


        return view('registration_successful');
    }


    public function forgotPasswordShow(){
        return view('forgot_password');
    }

    public function activationMail(){
        $user = User::findOrFail(7);
        $domain = request()->getHttpHost() . '/elisa/email/' . $user->id . '/activate' ; 
         
        Mail::send('empty', array('body' => 'Aktivacija Emaila', 'title'=>'BL BLA BLA', 'link' => $domain), function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Activate mail za Elisa prodavnicu!');
        });

    }

  
}