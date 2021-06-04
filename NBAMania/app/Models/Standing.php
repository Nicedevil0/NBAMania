<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SeasonType',
        'team_id',
        'id',
        'teams',
        'cascade',
        'cascade',
        'Key',
        'City',
        'Name',
        'Conference',
        'Division',
        'Wins',
        'Losses',
        'Percentage',
        'ConferenceWins',
        'ConferenceLosses',
        'DivisionWins',
        'DivisionLosses',
        'HomeWins',
        'HomeLosses',
        'AwayWins',
        'AwayLosses',
        'LastTenWins',
        'LastTenLosses',
        'PointsPerGameFor',
        'PointsPerGameAgainst',
        'Streak',
        'GamesBack',
        'StreakDescription',
        'GlobalTeamID',
        'ConferenceRank',
        'DivisionRank'
    ];
}
