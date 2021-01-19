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
use LengthException;

class BlogPostController extends Controller
{
    public function index($id){
        if (Auth::user()) {
            $navbar = Navbar::all();
            $logo = Logo::all();
            $article = Article::find($id);
            $footer = Footer::all();
            
            return view("blogPost2",compact("navbar","footer","logo","article"));

        } else {
            $tag =Tag::all();
            $navbar = Navbar::all();
            $logo = Logo::all();
            $article = Article::find($id);
            $footer = Footer::all();
            return view("blogPost",compact("navbar","footer","logo","article"));

        }
    }
}
