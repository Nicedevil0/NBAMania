<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->binary('SeasonType')->nullable();
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('Key')->nullable();
            $table->text('City')->nullable();
            $table->text('Name')->nullable();
            $table->text('Conference')->nullable();
            $table->text('Division')->nullable();
            $table->integer('Wins')->nullable();
            $table->integer('Losses')->nullable();
            $table->float('Percentage')->nullable();
            $table->integer('ConferenceWins')->nullable();
            $table->integer('ConferenceLosses')->nullable();
            $table->integer('DivisionWins')->nullable();
            $table->integer('DivisionLosses')->nullable();
            $table->integer('HomeWins')->nullable();
            $table->integer('HomeLosses')->nullable();
            $table->integer('AwayWins')->nullable();
            $table->integer('AwayLosses')->nullable();
            $table->integer('LastTenWins')->nullable();
            $table->integer('LastTenLosses')->nullable();
            $table->float('PointsPerGameFor')->nullable();
            $table->float('PointsPerGameAgainst')->nullable();
            $table->integer('Streak')->nullable();
            $table->integer('GamesBack')->nullable();
            $table->text('StreakDescription')->nullable();
            $table->integer('GlobalTeamID')->nullable();
            $table->integer('ConferenceRank')->nullable();
            $table->integer('DivisionRank')->nullable();
            $table->timestamps();
        });
        DB::unprepared('ALTER TABLE `standings` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `team_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standings');
    }
}
