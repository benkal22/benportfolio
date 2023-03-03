<?php

namespace App\Http\Controllers;

use App\Models\Apropos;
use App\Models\Competence;
use App\Models\Outil;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $competences = Competence::all();
        $temoignages = Temoignage::all();
        // $outils = DB::table('outils')->where('competence_id', 1)->get();
        $outils = DB::table('outils')
            ->join('competences', 'outils.competence_id', '=', 'competences.id')
            ->select('outils.*', 'competences.name as comp_name')
            ->orderBy('competences.id', 'ASC')
            // ->where('outils.competence_id', 1)
            ->get();

        return view('apropos.index', compact('outils', 'competences', 'temoignages'));
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
    public function show(Apropos $apropos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apropos $apropos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apropos $apropos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apropos $apropos)
    {
        //
    }
}
