<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view("blogPost2");

        }
        else{
            return view("blogPost");
        }
        
    }
}
