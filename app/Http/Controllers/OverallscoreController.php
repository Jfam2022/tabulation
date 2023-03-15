<?php


namespace App\Http\Controllers;

use App\Models\Tabulation;
use Illuminate\Http\Request;
use App\Models\Overallscore;
use App\Models\Student;
use App\Models\Announcement;
use App\Models\Creteria;
use Illuminate\Support\Facades\File;
use App\Models\Score;

class OverallscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Overallscore  $overallscore
     * @return \Illuminate\Http\Response
     */
    public function show(Overallscore $overallscore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Overallscore  $overallscore
     * @return \Illuminate\Http\Response
     */
    public function edit(Overallscore $overallscore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Overallscore  $overallscore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overallscore $overallscore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Overallscore  $overallscore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overallscore $overallscore)
    {
        //
    }
}