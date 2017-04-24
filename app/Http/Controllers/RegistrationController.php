<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 24/04/2017
 * Time: 10:17
 */

namespace App\Http\Controllers;


class RegistrationController extends Controller
{
    public function create(){
        return view('registration');
    }
}