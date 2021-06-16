<?php

namespace App\Http\Controllers;

use App\Models\Filtre;
use App\Models\imgortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imgortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgortfolios = imgortfolio::paginate(2);
        return view("backoffice.imgortfolio.all",compact("imgortfolios"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imgortfolio= imgortfolio::all();
        $filtres = Filtre::all();


        return view("backoffice.imgortfolio.create",compact("imgortfolio", 'filtres'));
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
            "img"=>"required",
            

        ]);

        $imgortfolio = new imgortfolio;
        
        $imgortfolio->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $imgortfolio -> created_at = now();
        $imgortfolio->save();
        return redirect()->route("imgortfolios.index")->with("message", "L'about a bien été créée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imgortfolio  $imgortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(imgortfolio $imgortfolio)
    {
        return view("backoffice.imgortfolio.read", compact("imgortfolio"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imgortfolio  $imgortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(imgortfolio $imgortfolio)
    
    {
        $filtres = Filtre::all();
        return view("backoffice.imgortfolio.edit", compact("imgortfolio", "filtres"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imgortfolio  $imgortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imgortfolio $imgortfolio)
    {
        $request->validate([
            "img"=>"required",
        ]);

        Storage::disk("public")->delete("img/" . $imgortfolio->image);

        $imgortfolio->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $imgortfolio -> updated_at = now();
        $imgortfolio->save();
        return redirect()->route("imgortfolios.index")->with("message", "L'img a bien été créée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imgortfolio  $imgortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(imgortfolio $imgortfolio)
    {
        $imgortfolio->delete();
        return redirect()->back();

    }
}
