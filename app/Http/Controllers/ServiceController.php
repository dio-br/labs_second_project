<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            return view("service2", compact("navbar"));
        }
        else{
            $navbar = Navbar::all();
            return view("service", compact("navbar"));
        }
        
    }
}
