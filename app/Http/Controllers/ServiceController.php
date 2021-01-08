<?php

namespace App\Http\Controllers;

use App\Models\BlocRapid;
use App\Models\HomeContact;
use App\Models\IconePrime;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\ServiceHome;
use App\Models\ServicePrime;
use App\Models\TitreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $titreService = TitreService::first();
            $homeContact = HomeContact::all();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');
            $servicePrime = ServicePrime::first();
            $str9 = Str::of($servicePrime->titre)->replace('(', '<span>');
            $str10 = Str::of($str9)->replace(')', '</span>');
            $iconePrime = IconePrime::all();
            $blocRapid = BlocRapid::all();
            
            return view("service2", compact("blocRapid","iconePrime","navbar","homeContact", "logo", "serviceHome", "titreService", "str5", "str6", "str9", "str10", "servicePrime"));
        }
        else{
            $iconePrime = IconePrime::all();
            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $titreService = TitreService::first();
            $homeContact = HomeContact::all();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');
            $servicePrime = ServicePrime::first();
            $str9 = Str::of($servicePrime->titre)->replace('(', '<span>');
            $str10 = Str::of($str9)->replace(')', '</span>');
            $blocRapid = BlocRapid::all();
            return view("service", compact("blocRapid","iconePrime","navbar", "logo","homeContact","serviceHome", "titreService", "str5", "str6", "str9", "str10", "servicePrime"));
        }
        
    }
}
