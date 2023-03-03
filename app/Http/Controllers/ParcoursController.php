<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Parcours;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $profils = Profil::all();
        $educations = Education::all();
        $experiences = Experience::all();

        return view('parcours.index', compact('profils', 'experiences', 'educations'));
    }

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
    public function show(Parcours $parcours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parcours $parcours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parcours $parcours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parcours $parcours)
    {
        //
    }
}
