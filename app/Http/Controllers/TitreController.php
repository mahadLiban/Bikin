<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::paginate(2);
        return view("backoffice.titre.all",compact("titres"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("titre-create", Titre::class);

        return view("backoffice.titre.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("update", Titre::class);

        $request->validate([
            "titre"=>"required",
            "description"=>"required"
        ]);

        $titre = new Titre;

        $titre->titre = $request->titre;
        $titre->description = $request->description;

        $titre -> created_at = now();
        $titre->save();
        return redirect()->route("titres.index")->with("message", "Le titre $titre->titre a bien été créée");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        return view("backoffice.titre.read", compact("titre"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        $this->authorize("titre-edit", Titre::class);

        return view("backoffice.titre.edit", compact("titre"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $this->authorize("update", $titre);

        $request->validate([
            "titre"=>"required",
            "description"=>"required"
        ]);


        $titre->titre = $request->titre;
        $titre->description = $request->description;

        $titre -> updated_at = now();
        $titre->save();
        return redirect()->route("titres.index")->with("message", "Le titre $titre->titre a  bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $this->authorize("delete", $titre);

        $titre->delete();
        return redirect()->back();

    }
}
