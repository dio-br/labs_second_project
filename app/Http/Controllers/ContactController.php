<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Footer;
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
            $footer = Footer::all();
            $address = Address::first();
            return view("contact2", compact("footer","navbar", "logo", "homeContact", "address"));

        }
        else{
            $footer = Footer::all();
            $navbar = Navbar::all();
            $logo = Logo::all();
            $homeContact = HomeContact::all();
            $address = Address::first();
            return view("contact", compact("footer","navbar", "logo", "homeContact", "address"));
        }
       
    }
}
