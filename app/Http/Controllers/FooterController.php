<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view("backoffice.footer.all",compact("footer"));

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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view("backoffice.footer.read", compact("footer"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view("backoffice.footer.edit", compact("footer"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        
        $footer->footerTitre1 = $request->footerTitre1;
        $footer->footerTitre2 = $request->footerTitre2;
        $footer->footerTitre3 = $request->footerTitre3;
        $footer->footerTitre4 = $request->footerTitre4;

        $footer->description = $request->description;
        $footer->description2 = $request->description2;

        $footer->phone = $request->phone;
        $footer->email = $request->email;
        $footer->li1 = $request->li1;
        $footer->li2 = $request->li2;
        $footer->li3 = $request->li3;
        $footer->li4 = $request->li4;
        $footer->li5 = $request->li5;
        $footer->li6 = $request->li6;
        $footer->li7 = $request->li7;
        $footer->li8 = $request->li8;
        $footer->li9 = $request->li9;
        $footer->li10 = $request->li10;
        $footer->btntxt  = $request->btntxt;
        $footer -> updated_at = now();

        $footer->save();
        return redirect()->route("footers.index")->with("message", "Le footer à bien modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->back();

    }
}
