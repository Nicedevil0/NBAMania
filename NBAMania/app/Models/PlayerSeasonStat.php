<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerSeasonStat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'TeamID',
        'PlayerID',
        'SeasonType',
        'Season',
        'Name',
        'Team',
        'Position',
        'Started',
        'GlobalTeamID',
        'Updated',
        'Games',
        'FantasyPoints',
        'Minutes',
        'Seconds',
        'FieldGoalsMade',
        'FieldGoalsAttempted',
        'FieldGoalsPercentage',
        'EffectiveFieldGoalsPercentage',
        'TwoPointersMade',
        'TwoPointersAttempted',
        'TwoPointersPercentage',
        'ThreePointersMade',
        'ThreePointersAttempted',
        'ThreePointersPercentage',
        'FreeThrowsMade',
        'FreeThrowsAttempted',
        'FreeThrowsPercentage',
        'OffensiveRebounds',
        'DefensiveRebounds',
        'Rebounds',
        'OffensiveReboundsPercentage',
        'DefensiveReboundsPercentage',
        'TotalReboundsPercentage',
        'Assists',
        'Steals',
        'BlockedShots',
        'Turnovers',
        'PersonalFouls',
        'Points',
        'TrueShootingAttempts',
        'TrueShootingPercentage',
        'PlayerEfficiencyRating',
        'AssistsPercentage',
        'StealsPercentage',
        'BlocksPercentage',
        'TurnOversPercentage',
        'UsageRatePercentage',
        'FantasyPointsFanDuel',
        'FantasyPointsDraftKings',
        'FantasyPointsYahoo',
        'PlusMinus',
        'DoubleDoubles',
        'TripleDoubles',
        'FantasyPointsFantasyDraft',
        'IsClosed',
        'LineupConfirmed',
        'LineupStatus'
    ];
}
