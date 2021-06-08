<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Season extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'StartYear',
        'EndYear',
        'Description',
        'RegularSeasonStartDate',
        'PostSeasonStartDate',
        'SeasonType',
        'ApiSeason'
    ];

    public function standings(){
        return $this->HasMany(Standing::class);
    }

    public function playerStats(){
        return $this->HasMany(PlayerSeasonStat::class);
    }

    public function teamStats(){
        return $this->HasMany(TeamSeasonStat::class);
    }
}
