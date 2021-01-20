<?php

namespace App\Http\Controllers;

use App\Models\ServiceHome;
use Illuminate\Http\Request;

class ServiceHomeController extends Controller
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
        $this->authorize("create", ServiceHome::class);
        $serviceHome = new ServiceHome();
        $request->validate([
            "icone" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $serviceHome->icone = $request->icone;
        $serviceHome->titre = $request->titre;
        $serviceHome->texte = $request->texte;
        $serviceHome->save();
        return redirect()->route("adminHome");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceHome $serviceHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceHome $serviceHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceHome $serviceHome)
    {
        $this->authorize("update", $serviceHome);
        $request->validate([
            "icone" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $serviceHome->icone = $request->icone;
        $serviceHome->titre = $request->titre;
        $serviceHome->texte = $request->texte;
        $serviceHome->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceHome $serviceHome)
    {
        $this->authorize("delete", $serviceHome);
        $serviceHome->delete();
        return redirect()->back();
    }
}
