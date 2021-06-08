<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Key',
        'Active',
        'City',
        'Name',
        'LeagueID',
        'stadium_id',
        'Conference',
        'Division',
        'PrimaryColor',
        'SecondaryColor',
        'TertiaryColor',
        'QuaternaryColor',
        'WikipediaLogoUrl',
        'WikipediaWordMarkUrl',
        'GlobalTeamID',
        'NbaDotComTeamID'
    ];

    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }

    public function standings(){
        return $this->hasMany(Standing::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function seasonStats(){
        return $this->HasMany(TeamSeasonStat::class);
    }

    public function PlayerSeasonStats(){
        return $this->HasMany(PlayerSeasonStat::class);
    }
}
