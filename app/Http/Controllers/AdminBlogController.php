<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
    public function index(){
        $article = Article::all();
        $commentaire = Commentaire::all();
        
        return view("adminBlog", compact("article", "commentaire"));
    }
}
