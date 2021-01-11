<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class AdminFooterController extends Controller
{
    public function index(){
        $footer = Footer::all();
        return view("footer", compact("footer"));
    }
}
