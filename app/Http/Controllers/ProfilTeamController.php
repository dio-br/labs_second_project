<?php

namespace App\Http\Controllers;

use App\Models\ProfilTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilTeamController extends Controller
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
        $this->authorize("create", ProfilTeam::class);
        $profilTeam = new ProfilTeam();
        $request->validate([
            "image" => "required",
            "prenom" => "required",
            "fonction" => "required",
        ]);
        $profilTeam->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/team", "public");
        $profilTeam->prenom = $request->prenom;
        $profilTeam->fonction = $request->fonction;
        $profilTeam->save();
        return redirect()->route("adminHome");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilTeam  $profilTeam
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilTeam $profilTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilTeam  $profilTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilTeam $profilTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfilTeam  $profilTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilTeam $profilTeam)
    {
        $this->authorize("update", $profilTeam);
        $request->validate([
            "image" => "required",
            "prenom" => "required",
            "fonction" => "required",
        ]);
        Storage::disk("public")->delete("img/team" . $profilTeam->image);
        $profilTeam->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/team", "public");
        $profilTeam->prenom = $request->prenom;
        $profilTeam->fonction = $request->fonction;
        $profilTeam->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilTeam  $profilTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilTeam $profilTeam)
    {
        $this->authorize("delete", $profilTeam);
        Storage::disk("public")->delete("img/team" . $profilTeam->image);
        $profilTeam->delete();
        return redirect()->back();
    }
}
