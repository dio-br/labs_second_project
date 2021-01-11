<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\HomeContact;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\ProfilTeam;
use App\Models\Ready;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreSlogan;
use App\Models\TitreTeam;
use App\Models\TitreTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        if (Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $serviceCard = ServiceHome::all();
            $titreTestimonial = TitreTestimonial::first();
            $testimonial = Testimonial::all();
            $titreService = TitreService::first();
            $titreTeam = TitreTeam::first();
            $profilTeam = ProfilTeam::inRandomOrder()->get();
            $titreSlogan = TitreSlogan::all();
            $ready = Ready::all();
            $homeContact = HomeContact::all();
            $aboutContent = AboutContent::first();
            $str = Str::of($aboutContent->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')', '</span>');
            $str3 = Str::of($titreTestimonial->titre)->replace('(', '<span>');
            $str4 = Str::of($str3)->replace(')', '</span>');
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');
            $str7 = Str::of($titreTeam->titre)->replace('(', '<span>');
            $str8 = Str::of($str7)->replace(')', '</span>');
            $footer = Footer::all();
            $stop = 1;
            $id = 0;
            return view("home2", compact("id","stop","footer","str7","str8","str6","str5","str3","str4","str","str2","homeContact","ready","titreSlogan","serviceCard","profilTeam","navbar","titreTeam", "logo", "banner", "serviceHome", "aboutContent", "titreTestimonial", "testimonial", "titreService"));

        }
        else{
            $id = 0;
            $stop = 1;
            $footer = Footer::all();
            $navbar = Navbar::all();
            $logo = Logo::all();
            $titreSlogan = TitreSlogan::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9, ["*"], "serviceHome");
            $aboutContent = AboutContent::first();
            $str = Str::of($aboutContent->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')', '</span>');
            $titreTestimonial = TitreTestimonial::first();
            $testimonial = Testimonial::all();
            $titreService = TitreService::first();
            $titreTeam = TitreTeam::first();
            $profilTeam = ProfilTeam::inRandomOrder()->get();
            $serviceCard = ServiceHome::all();
            $ready = Ready::all();
            $homeContact = HomeContact::all();
            $str3 = Str::of($titreTestimonial->titre)->replace('(', '<span>');
            $str4 = Str::of($str3)->replace(')', '</span>');
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');
            $str7 = Str::of($titreTeam->titre)->replace('(', '<span>');
            $str8 = Str::of($str7)->replace(')', '</span>');
            return view("home", compact("id","stop","footer","str7","str8","str6","str5","str4","str3","str","str2","homeContact","ready","titreSlogan","serviceCard","profilTeam","navbar","titreTeam", "logo", "banner","serviceHome", "aboutContent", "titreTestimonial", "testimonial", "titreService"));
        }
        
        
    }
}
