<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Active',
        'Name',
        'Address',
        'City',
        'State',
        'Zip',
        'Country',
        'Capacity',
        'GeoLat',
        'GeoLong'
    ];

    public function teams(){
        return $this->hasMany(Team::class);
    }
}
