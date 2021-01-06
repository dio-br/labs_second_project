<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class AdminLogoController extends Controller
{
    public function index(){
        $logo = Logo::all();
        return view("adminLogo", compact("logo"));
    }
}
