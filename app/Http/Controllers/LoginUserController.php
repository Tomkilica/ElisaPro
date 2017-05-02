<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 24/04/2017
 * Time: 22:44
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{

 	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function index(){
        return view('login');
    }

    public function store(){

       	$validation = $this->validate(request(), [
           'email' => 'required|email|max:128',
           'password' => 'required|min:6|max:64'
       	]);

        if($validation || !Auth::attempt(['email' => request('email'),'password' => request('password'), 'activated' => 1]) ) {
	           return redirect()->back()->withInput();
       	} 
        else 
        {
       		 return redirect('/shop');
       	}
    }

    public function destroy() {
        auth()->logout();
        return redirect('/login'); 
    } 

    public function activate_email($id) {
        $user = User::find($id);
        $user->activated = true;
        $user->save();
        return redirect('/login'); 
    } 
}