<?php

namespace App\Http\Controllers;

use App\Models\HomeContact;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            $homeContact = HomeContact::all();
            return view("contact2", compact("navbar", "logo", "homeContact"));

        }
        else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            $homeContact = HomeContact::all();
            return view("contact", compact("navbar", "logo", "homeContact"));
        }
       
    }
}
