<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerSeasonStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_season_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('TeamID')->nullable();
            $table->foreign('TeamID')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('PlayerID')->nullable();
            $table->foreign('PlayerID')
                ->references('id')
                ->on('players')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->binary('SeasonType')->nullable();
            $table->integer('Season');
            $table->foreign('Season')
                ->references('id')
                ->on('seasons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('Name')->nullable();
            $table->text('Team')->nullable();
            $table->text('Position')->nullable();
            $table->integer('Started')->nullable();
            $table->integer('GlobalTeamID')->nullable();
            $table->text('Updated')->nullable();
            $table->integer('Games')->nullable();
            $table->float('FantasyPoints')->nullable();
            $table->integer('Minutes')->nullable();
            $table->integer('Seconds')->nullable();
            $table->float('FieldGoalsMade')->nullable();
            $table->float('FieldGoalsAttempted')->nullable();
            $table->float('FieldGoalsPercentage')->nullable();
            $table->float('EffectiveFieldGoalsPercentage')->nullable();
            $table->float('TwoPointersMade')->nullable();
            $table->float('TwoPointersAttempted')->nullable();
            $table->float('TwoPointersPercentage')->nullable();
            $table->float('ThreePointersMade')->nullable();
            $table->float('ThreePointersAttempted')->nullable();
            $table->float('ThreePointersPercentage')->nullable();
            $table->float('FreeThrowsMade')->nullable();
            $table->float('FreeThrowsAttempted')->nullable();
            $table->float('FreeThrowsPercentage')->nullable();
            $table->float('OffensiveRebounds')->nullable();
            $table->float('DefensiveRebounds')->nullable();
            $table->float('Rebounds')->nullable();
            $table->float('OffensiveReboundsPercentage')->nullable();
            $table->float('DefensiveReboundsPercentage')->nullable();
            $table->float('TotalReboundsPercentage')->nullable();
            $table->float('Assists')->nullable();
            $table->float('Steals')->nullable();
            $table->float('BlockedShots')->nullable();
            $table->float('Turnovers')->nullable();
            $table->float('PersonalFouls')->nullable();
            $table->float('Points')->nullable();
            $table->float('TrueShootingAttempts')->nullable();
            $table->float('TrueShootingPercentage')->nullable();
            $table->float('PlayerEfficiencyRating')->nullable();
            $table->float('AssistsPercentage')->nullable();
            $table->float('StealsPercentage')->nullable();
            $table->float('BlocksPercentage')->nullable();
            $table->float('TurnOversPercentage')->nullable();
            $table->float('UsageRatePercentage')->nullable();
            $table->float('FantasyPointsFanDuel')->nullable();
            $table->float('FantasyPointsDraftKings')->nullable();
            $table->float('FantasyPointsYahoo')->nullable();
            $table->float('PlusMinus')->nullable();
            $table->float('DoubleDoubles')->nullable();
            $table->float('TripleDoubles')->nullable();
            $table->float('FantasyPointsFantasyDraft')->nullable();
            $table->text('IsClosed')->nullable();
            $table->text('LineupConfirmed')->nullable();
            $table->text('LineupStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_season_stats');
    }
}
