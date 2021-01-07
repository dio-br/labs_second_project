<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            return view("blog2", compact("navbar", "logo"));

        }
        else{
            $logo = Logo::all();
            $navbar = Navbar::all();
            return view("blog", compact("navbar", "logo"));
        }
        
    }
}
