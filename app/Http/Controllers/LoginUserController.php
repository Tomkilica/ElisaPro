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
        return view('login')->with(['succes' => ""]);;
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

    public function activateEmail($id) {
        $user = User::find($id);
        if(!$user->activated) {
            $user->activated = true;
            $user->save();
            return view('login')->with(['succes' => "Uspešno ste aktivirali naloga!!!"]);
        } else {
            return redirect('/login');
        }
    } 
}