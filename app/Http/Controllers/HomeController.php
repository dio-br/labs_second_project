<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            return view("home2", compact("navbar", "logo"));

        }
        else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            return view("home", compact("navbar", "logo"));
        }
        
        
    }
}
