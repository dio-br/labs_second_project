<?php

namespace App\Http\Controllers;

use App\Models\BlocRapid;
use App\Models\IconePrime;
use App\Models\ServicePrime;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function index(){
        $servicePrime = ServicePrime::all();
        $iconePrime = IconePrime::all();
        $blocRapid = BlocRapid::all();
        return view("adminService", compact("servicePrime", "iconePrime", "blocRapid"));
    }
}
