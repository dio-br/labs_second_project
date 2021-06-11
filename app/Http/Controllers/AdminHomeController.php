<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Banner;
use App\Models\HomeContact;
use App\Models\ProfilTeam;
use App\Models\Ready;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreSlogan;
use App\Models\TitreTeam;
use App\Models\TitreTestimonial;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $serviceHome = ServiceHome::all();
        $aboutContent = AboutContent::all();
        $titreTestimonial = TitreTestimonial::all();
        $testimonial = Testimonial::all();
        $titreService = TitreService::all();
        $titreTeam = TitreTeam::all();
        $profilTeam = ProfilTeam::all();
        $teams = User::where('poste_id' ,'!=' , 1)->get();
        $teamRandom1s = $teams->random(1);
        $teamRandom2s = $teams->random(1);
        $ceos = User::where('poste_id' , '=' , 1)->get();
        $titreSlogan = TitreSlogan::all();
        $ready = Ready::all();
        $homeContact = HomeContact::all();
        return view("adminhome", compact("homeContact","ready","titreSlogan","titreTeam","banner", "serviceHome", "aboutContent", "titreTestimonial", "testimonial", "titreService", "profilTeam",'teamRandom1s', 'teamRandom2s', 'ceos'));
    }
}
