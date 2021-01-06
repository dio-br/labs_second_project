<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class AdminNavController extends Controller
{
    public function index(){
        $navbar = Navbar::all();
        return view("adminNav", compact("navbar"));
    }
}
