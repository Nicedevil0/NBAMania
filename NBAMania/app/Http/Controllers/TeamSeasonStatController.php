<?php

namespace App\Http\Controllers;

use App\Models\TeamSeasonStat;
use Illuminate\Http\Request;

class TeamSeasonStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = TeamSeasonStat::all();
        return view('teamStats', compact('stats'));
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
     * @param  \App\Models\TeamSeasonStat  $teamSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function show(TeamSeasonStat $teamSeasonStat)
    {
        return view('teamStat', compact('teamSeasonStat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamSeasonStat  $teamSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamSeasonStat $teamSeasonStat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamSeasonStat  $teamSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamSeasonStat $teamSeasonStat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamSeasonStat  $teamSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamSeasonStat $teamSeasonStat)
    {
        //
    }
}
