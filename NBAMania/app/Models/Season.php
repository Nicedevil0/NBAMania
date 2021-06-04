<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
