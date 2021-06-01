<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SportsDataID',
        'Status',
        'TeamID',
        'Team',
        'Jersey',
        'PositionCategory',
        'Position',
        'FirstName',
        'LastName',
        'Height',
        'Weight',
        'BirthDate',
        'BirthCity',
        'BirthState',
        'BirthCountry',
        'HighSchool',
        'College',
        'Salary',
        'PhotoUrl',
        'Experience',
        'SportRadarPlayerID',
        'RotoworldPlayerID',
        'RotoWirePlayerID',
        'FantasyAlarmPlayerID',
        'StatsPlayerID',
        'SportsDirectPlayerID',
        'XmlTeamPlayerID',
        'InjuryStatus',
        'InjuryBodyPart',
        'InjuryStartDate',
        'InjuryNotes',
        'FanDuelPlayerID',
        'DraftKingsPlayerID',
        'YahooPlayerID',
        'FanDuelName',
        'DraftKingsName',
        'YahooName',
        'DepthChartPosition',
        'DepthChartOrder',
        'GlobalTeamID',
        'FantasyDraftName',
        'FantasyDraftPlayerID',
        'UsaTodayPlayerID',
        'UsaTodayHeadshotUrl',
        'UsaTodayHeadshotNoBackgroundUrl',
        'UsaTodayHeadshotUpdated',
        'UsaTodayHeadshotNoBackgroundUpdated',
        'NbaDotComPlayerID',
    ];
}
