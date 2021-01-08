<?php

namespace App\Http\Controllers;

use App\Models\TitreSlogan;
use Illuminate\Http\Request;

class TitreSloganController extends Controller
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
     * @param  \App\Models\TitreSlogan  $titreSlogan
     * @return \Illuminate\Http\Response
     */
    public function show(TitreSlogan $titreSlogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitreSlogan  $titreSlogan
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreSlogan $titreSlogan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitreSlogan  $titreSlogan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitreSlogan $titreSlogan)
    {
        $request->validate([
            "titre" => "required"

        ]);
        $titreSlogan->titre = $request->titre;
        $titreSlogan->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitreSlogan  $titreSlogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreSlogan $titreSlogan)
    {
        //
    }
}
