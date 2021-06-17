<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(2);
        return view('backoffice.service.all', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("service-create", Service::class);

        return view("backoffice.service.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Service::class);

        
        $request->validate([
            "logo"=>"required",
            "petitTitre"=>"required",
            "description"=>"required",
        ]);

        $service = new Service();

        $service->logo = $request->logo;
        $service->petitTitre = $request->petitTitre;
        $service->description = $request->description;
        $service -> created_at = now();
        $service->save();
        return redirect()->route("services.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view("backoffice.service.read", compact("service"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize("service-edit", Service::class);

       return view("backoffice.service.edit", compact("service"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize("update", $service);

        $request->validate([
            "logo"=>"required",
            "petitTitre"=>"required",
            "description"=>"required",
        ]);


        $service->logo = $request->logo;
        $service->petitTitre = $request->petitTitre;
        $service->description = $request->description;
        $service -> updated_at = now();
        $service->save();
        return redirect()->route("services.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize("delete", $service);

        $service->delete();
        return redirect()->back();
    }
}
