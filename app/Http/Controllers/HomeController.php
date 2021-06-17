<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::paginate(2);
        return view("backoffice.home.all",compact("homes"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("backoffice.home.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "btnTxt"=>"required",
        //     "img"=>"required"
        // ]);
        // $home = new Home;
        // $home->btnTxt = $request->btnTxt;
        // $home->img = $request->file("img")->hashName();
        // $request->file('img')->storePublicly("img","public");
        // $home ->created_at=now();
        // $home->save();
        // return redirect()->route("homes.index")->with("message", "L'home a bien été créée");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view("backoffice.home.read", compact("home"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    
    {
        $this->authorize("home-edit", Home::class);
        return view("backoffice.home.edit", compact("home"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $this->authorize("update", $home);

        $request->validate([
            "img"=>"required"
        ]);
        Storage::disk("public")->delete("img/" .$home->img);
        $home->img = $request->file("img")->hashName();
        $request->file('img')->storePublicly("img","public");
        $home ->updated_at=now();
        $home->save();
        return redirect()->route("homes.index")->with("message", "L'home a bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        $this->authorize("delete", $home);

        $home->delete();
        return redirect()->back();
    }
}
