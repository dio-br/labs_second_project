<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Tag;
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
            $tag =Tag::all();
            $category = Category::all();
            return view("blog2", compact("tag","category","footer","navbar", "logo", "article", "commentaire"));

        }
        else{
            $tag =Tag::all();
            $category = Category::all();
            $footer = Footer::all();
            $logo = Logo::all();
            $navbar = Navbar::all();
            $article = Article::all();
            $commentaire = Commentaire::all();
            return view("blog", compact("tag","category","footer","navbar", "logo", "article", "commentaire"));

        }
        
    }
}
