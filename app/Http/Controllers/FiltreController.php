<?php

namespace App\Http\Controllers;

use App\Models\Filtre;
use Illuminate\Http\Request;

class FiltreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtres = Filtre::paginate(2);
        return view("backoffice.filtre.all",compact("filtres"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filtres = Filtre::all();
        return view("backoffice.filtre.create", compact("filtres"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"
        ]);
        $filtre = new Filtre ;
        $filtre->nom = $request->nom;
        $filtre -> created_at = now();
        $filtre->save();
        return redirect()->route("filtres.index")->with("message", "Un filtre a bien été créée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filtre  $filtre
     * @return \Illuminate\Http\Response
     */
    public function show(Filtre $filtre)
    {
        return view("backoffice.filtre.read", compact("filtre"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filtre  $filtre
     * @return \Illuminate\Http\Response
     */
    public function edit(Filtre $filtre)
    {
        return view("backoffice.filtre.edit", compact("filtre"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filtre  $filtre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filtre $filtre)
    {
        $request->validate([
            "nom"
        ]);
        $filtre->nom = $request->nom;
        $filtre -> updated_at = now();
        $filtre->save();
        return redirect()->route("filtres.index")->with("message", "Un filtre a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filtre  $filtre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filtre $filtre)
    {
        $filtre->delete();
        return redirect()->back();

    }
}
