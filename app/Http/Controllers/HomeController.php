<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Banner;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\ProfilTeam;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreTeam;
use App\Models\TitreTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::user()){
            $array = [0,4,2,3];
            $array2 = [5,6,7,8];
            $random = Arr::random($array);
            $random2 = Arr::random($array2);
            $navbar = Navbar::all();
            $logo = Logo::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $aboutContent = AboutContent::all();
            $titreTestimonial = TitreTestimonial::all();
            $testimonial = Testimonial::all();
            $titreService = TitreService::all();
            $titreTeam = TitreTeam::all();
            $profilTeam = ProfilTeam::all();
            return view("home2", compact("profilTeam","navbar","titreTeam", "logo", "banner", "serviceHome", "random", "random2", "aboutContent", "titreTestimonial", "testimonial", "titreService"));

        }
        else{
            $array = [0,4,2,3];
            $array2 = [5,6,7,8];
            $random = Arr::random($array);
            $random2 = Arr::random($array2);
            $navbar = Navbar::all();
            $logo = Logo::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $aboutContent = AboutContent::all();
            $titreTestimonial = TitreTestimonial::all();
            $testimonial = Testimonial::all();
            $titreService = TitreService::all();
            $titreTeam = TitreTeam::all();
            $profilTeam = ProfilTeam::all();
            return view("home", compact("profilTeam","navbar","titreTeam", "logo", "banner","serviceHome", "random", "random2", "aboutContent", "titreTestimonial", "testimonial", "titreService"));
        }
        
        
    }
}
