<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(2);
        return view('backoffice.testimonial.all', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("testimonial-create", Testimonial::class);

        return view("backoffice.testimonial.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("delete", Testimonial::class);

        $request->validate([
            "paragraphe"=>"required",
            "pdp"=>"required",
            "nom"=>"required",
            "role"=>"required",
        ]);

        $testimonial = new Testimonial();

        $testimonial->paragraphe = $request->paragraphe;
        $testimonial->pdp = $request->file("pdp")->hashName();
        $request->file("pdp")->storePublicly("img", "public");
        $testimonial->nom = $request->nom;
        $testimonial->role = $request->role;

        $testimonial -> created_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with("message", "Le testimonial a bien été créée");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.read", compact("testimonial"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize("testimonial-edit", Testimonial::class);

        return view("backoffice.testimonial.edit", compact("testimonial"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize("update", $testimonial);

        $request->validate([
            "paragraphe"=>"required",
            "pdp"=>"required",
            "nom"=>"required",
            "role"=>"required",
        ]);

        $testimonial->paragraphe = $request->paragraphe;
        Storage::disk("public")->delete("img/" . $testimonial->pdp);
        $testimonial->pdp = $request->file("pdp")->hashName();
        $request->file("pdp")->storePublicly("img", "public");
        $testimonial->nom = $request->nom;
        $testimonial->role = $request->role;

        $testimonial -> updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with("message", "Le testimonial a bien été créée");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize("delete", $testimonial);

        $testimonial->delete();
        return redirect()->back();

    }
}
