<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AdminMapController extends Controller
{
    public function index(){
        $address = Address::all();
        return view("map", compact("address"));
    }
}
