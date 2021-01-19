<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Commentaire;
use App\Models\Tag;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
    public function index(){
        $article = Article::all();
        $commentaire = Commentaire::all();
        $tag = Tag::all();
        $category= Category::all();
        $verification = Verification::all();
        
        return view("adminBlog", compact("article", "commentaire", "tag", "category", "verification"));
    }
}
