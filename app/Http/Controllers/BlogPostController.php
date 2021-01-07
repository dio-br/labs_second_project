<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index(){
        if(Auth::user()){
            $logo = Logo::all();
            $navbar = Navbar::all();
            return view("blogPost2", compact("navbar", "logo"));

        }
        else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            return view("blogPost", compact("navbar", "logo"));
        }
        
    }
}
