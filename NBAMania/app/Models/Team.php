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
        'StadiumID',
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

    public function standings(){
        return $this->belongsToMany(Standing::class);
    }
}
