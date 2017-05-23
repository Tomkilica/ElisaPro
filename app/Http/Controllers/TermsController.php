<?php

namespace App\Http\Controllers;


class TermsController extends Controller
{
    public function terms(){
        return view('terms');
    }
    public function purchase(){
        return view('purchase');
    }
    public function  protection(){
        return view('protection');
    }

}