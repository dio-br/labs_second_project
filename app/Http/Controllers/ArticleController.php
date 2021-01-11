<?php

namespace App\Http\Controllers;

use App\Events\UserNewsletter;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $request->validate([
            "image" =>"required",
            "titre" =>"required",
            "mois" => "required",
            "jour" => "required",
            "annee" => "required",
            "texte" => "required",
            "description" => "required"
        ]);
        $article->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/blog", "public");
        $article->texte = $request->texte;
        $article->description = $request->description;
        $article->jour = $request->jour;
        $article->mois = $request->mois;
        $article->annee = $request->annee;
        $article->titre = $request->titre;
        $article->user_id = Auth::id();
        $article->save();
        return redirect()->route("adminBlog");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            "image" =>"required",
            "titre" =>"required",
            "texte" => "required",
            "description" => "required"
        ]);
        Storage::disk("public")->delete("img/blog" . $article->image);
        $article->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/blog", "public");
        $article->titre = $request->titre;
        $article->texte = $request->texte;
        $article->description = $request->description;
        $article->save();
        return redirect()->route("adminBlog");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk("public")->delete("img/" . $article->image);
        $article->delete();
        return redirect()->back();
    }
}
