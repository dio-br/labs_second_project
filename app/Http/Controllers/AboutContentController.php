<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutContentController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function show(AboutContent $aboutContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutContent $aboutContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutContent $aboutContent)
    {
        $this->authorize("update", $aboutContent);
        $request->validate([
            "titre" => "required",
            "texte1" => "required",
            "texte2" => "required",
            "boutton" => "required",
            "image" => "required",
            "video" => "required"

        ]);
        Storage::disk("public")->delete("img/" . $aboutContent->image );
        $aboutContent->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $aboutContent->titre = $request->titre;
        $aboutContent->texte1 = $request->texte1;
        $aboutContent->texte2 = $request->texte2;
        $aboutContent->boutton = $request->boutton;
        $aboutContent->video = $request->video;
        $aboutContent->save();
        return redirect()->route("adminHome");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutContent $aboutContent)
    {
        //
    }
}
