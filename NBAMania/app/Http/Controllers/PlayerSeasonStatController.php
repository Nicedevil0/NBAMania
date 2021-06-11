<?php

namespace App\Http\Controllers;

use App\Models\PlayerSeasonStat;
use Illuminate\Http\Request;

class PlayerSeasonStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = PlayerSeasonStat::all();
        return view('playerStats', compact('stats'));
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
     * @param  \App\Models\PlayerSeasonStat  $playerSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerSeasonStat $playerSeasonStat)
    {
        $player = $playerSeasonStat->player;
        return view('playerStat', compact('playerSeasonStat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerSeasonStat  $playerSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerSeasonStat $playerSeasonStat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayerSeasonStat  $playerSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerSeasonStat $playerSeasonStat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerSeasonStat  $playerSeasonStat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerSeasonStat $playerSeasonStat)
    {
        //
    }
}
