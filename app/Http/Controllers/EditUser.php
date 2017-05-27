<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 26/05/2017
 * Time: 21:42
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;



class EditUser extends Controller
{

        public function show(){
            if (Auth::check())
            {
                $user = Auth::user();
                return view('edit_user')->with(['userView' => $user]);
            }
            return redirect('login');
        }

    public function update()
    {
        if (Auth::check()) {
            $validation = $this->validate(request(), [
                'firstName' => 'required|min:3|max:64',
                'lastName' => 'required|min:3|max:64',
                'tel' => 'required|max:19',
                'address' => 'required|max:256',
                'zip' => 'required|max:255'
            ]);

            if ($validation) {
                return redirect()->back()->withInput();

            }

            $user = Auth::user();

            $user->firstName = request('firstName');
            $user->lastName = request('lastName');
            $user->tel = request('tel');
            $user->address = request('address');
            $user->zip = request('zip');

            $user->save();

            return redirect('edit');
        }
        return redirect('login');

    }

}