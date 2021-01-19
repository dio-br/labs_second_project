<?php

namespace App\Http\Controllers;

use App\Models\HomeContact;
use Illuminate\Http\Request;

class HomeContactController extends Controller
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
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContact $homeContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContact $homeContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContact $homeContact)
    {
        $this->authorize("update", $homeContact);
        $request->validate([
            "titre1" => "required",
            "texte" => "required",
            "titre2" => "required",
            "info1" => "required",
            "info2" => "required",
            "info3" => "required",
            "info4" => "required",
            "boutton" => "required"
        ]);
        $homeContact->titre1 = $request->titre1;
        $homeContact->texte = $request->texte;
        $homeContact->titre2 = $request->titre2;
        $homeContact->info1 = $request->info1;
        $homeContact->info2 = $request->info2;
        $homeContact->info3 = $request->info3;
        $homeContact->info4 = $request->info4;
        $homeContact->boutton = $request->boutton;
        $homeContact->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContact $homeContact)
    {
        //
    }
}
