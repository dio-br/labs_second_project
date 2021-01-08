<?php

namespace App\Http\Controllers;

use App\Models\TitreService;
use Illuminate\Http\Request;

class TitreServiceController extends Controller
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
     * @param  \App\Models\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function show(TitreService $titreService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreService $titreService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitreService $titreService)
    {
        $request->validate([
            "titre" => "required",
            "boutton" => "required"

        ]);
        $titreService->titre = $request->titre;
        $titreService->boutton = $request->boutton;
        $titreService->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreService $titreService)
    {
        //
    }
}
