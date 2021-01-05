<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view("service2");
        }
        else{
            return view("service");
        }
        
    }
}
