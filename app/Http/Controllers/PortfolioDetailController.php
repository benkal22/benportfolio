<?php

namespace App\Http\Controllers;

use App\Models\Images_Portfolio;
use App\Models\PortfolioDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PortfolioDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $imagesPortfolios = DB::table('images_portfolios')
        //     ->select('images_portfolios.image')
        //     ->get();
        $port_id = 2;
        $portfolioDetails = DB::table('portfolio_details')
            ->join('images_portfolios', 'images_portfolios.portfolio_details_id', '=', 'portfolio_details.id')
            ->join('portfolios', 'portfolio_details.portfolio_id', '=', 'portfolios.id')
            ->select('portfolio_details.*', 'portfolios.category as cat', 'images_portfolios.image as image_p')
            ->where('portfolio_details.id', '=', $port_id)
            // ->orderBy('portfolio_details.id', 'ASC')
            ->get();
        return view('portfolio.portfolio-details', compact('portfolioDetails', 'port_id'));
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
    public function show(PortfolioDetail $portfolioDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortfolioDetail $portfolioDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortfolioDetail $portfolioDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortfolioDetail $portfolioDetail)
    {
        //
    }
}
