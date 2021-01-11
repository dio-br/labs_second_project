<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        if(Auth::user()){
            $navbar = Navbar::all();
            $logo = Logo::all();
            $article = Article::all();
            $commentaire = Commentaire::all();
            $footer = Footer::all();
            return view("blog2", compact("footer","navbar", "logo", "article", "commentaire"));

        }
        else{
            $footer = Footer::all();
            $logo = Logo::all();
            $navbar = Navbar::all();
            $article = Article::all();
            $commentaire = Commentaire::all();
            return view("blog", compact("footer","navbar", "logo", "article", "commentaire"));

        }
        
    }
}
