<?php

namespace App\Http\Controllers;

use App\Models\BlocRapid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlocRapidController extends Controller
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
        $blocRapid = new BlocRapid();
        $request->validate([
            "image" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $blocRapid->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blocRapid->titre = $request->titre;
        $blocRapid->texte = $request->texte;
        $blocRapid->save();
        return redirect()->route("adminService");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlocRapid  $blocRapid
     * @return \Illuminate\Http\Response
     */
    public function show(BlocRapid $blocRapid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlocRapid  $blocRapid
     * @return \Illuminate\Http\Response
     */
    public function edit(BlocRapid $blocRapid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlocRapid  $blocRapid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlocRapid $blocRapid)
    {
        $request->validate([
            "image" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $blocRapid->image);
        $blocRapid->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blocRapid->titre = $request->titre;
        $blocRapid->texte = $request->texte;
        $blocRapid->save();
        return redirect()->route("adminService");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlocRapid  $blocRapid
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlocRapid $blocRapid)
    {
        Storage::disk("public")->delete("img/" . $blocRapid->image);
        $blocRapid->delete();
        return redirect()->back();
    }
}
