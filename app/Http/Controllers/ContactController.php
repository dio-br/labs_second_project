<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view("contact2");

        }
        else{
            return view("contact");
        }
       
    }
}
