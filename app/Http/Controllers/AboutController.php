<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(2);
        return view("backoffice.about.all", compact("abouts"));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view("backoffice.about.read", compact("about"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $this->authorize("about-edit", $about);

        return view("backoffice.about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->authorize("update", $about);

        $request->validate([
            
            "logo"=>"required",
            "petitTitre1"=>"required",
            "sousTitre1"=>"required",
        ]);
        $about->logo = $request->logo;
        $about->petitTitre1 = $request->petitTitre1;
        $about->sousTitre1 = $request->sousTitre1;
        $about -> updated_at = now();

        $about->save();
        return redirect()->route("abouts.index")->with("message", "L'about à bien modifié");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->authorize("delete", $about);

        $about->delete();
        return redirect()->back();
    }
}
