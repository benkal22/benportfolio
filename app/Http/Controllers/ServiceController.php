<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public $services_href = "#";
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // dd($_GET);  
        $services = Service::all();

        return view('services.index', compact('services'));
    }

    public function service(Request $request, string $id)
    {
        // dd($request->id);
        $service_id = $request->id;
        $service = Service::find($service_id);
        return view('services.service', compact('service_id', 'service'));
    }

    // public function indexServices(): View
    // {
    //     $services = Service::all();

    //     return view('parcours.index', compact('services'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
