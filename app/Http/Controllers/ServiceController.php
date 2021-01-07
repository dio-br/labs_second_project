<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Navbar;
use App\Models\ServiceHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            return view("service2", compact("navbar", "logo", "serviceHome"));
        }
        else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            return view("service", compact("navbar", "logo", "serviceHome"));
        }
        
    }
}
