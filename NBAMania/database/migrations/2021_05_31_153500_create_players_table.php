<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->text('SportsDataID')->nullable();
            $table->text('Status')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('Team')->nullable();
            $table->integer('Jersey')->nullable();
            $table->text('PositionCategory')->nullable();
            $table->text('Position')->nullable();
            $table->text('FirstName')->nullable();
            $table->text('LastName')->nullable();
            $table->integer('Height')->nullable();
            $table->integer('Weight')->nullable();
            $table->text('BirthDate')->nullable();
            $table->text('BirthCity')->nullable();
            $table->text('BirthState')->nullable();
            $table->text('BirthCountry')->nullable();
            $table->text('HighSchool')->nullable();
            $table->text('College')->nullable();
            $table->integer('Salary')->nullable();
            $table->text('PhotoUrl')->nullable();
            $table->integer('Experience')->nullable();
            $table->text('SportRadarPlayerID')->nullable();
            $table->integer('RotoworldPlayerID')->nullable();
            $table->integer('RotoWirePlayerID')->nullable();
            $table->integer('FantasyAlarmPlayerID')->nullable();
            $table->integer('StatsPlayerID')->nullable();
            $table->integer('SportsDirectPlayerID')->nullable();
            $table->integer('XmlTeamPlayerID')->nullable();
            $table->text('InjuryStatus')->nullable();
            $table->text('InjuryBodyPart')->nullable();
            $table->text('InjuryStartDate')->nullable();
            $table->text('InjuryNotes')->nullable();
            $table->integer('FanDuelPlayerID')->nullable();
            $table->integer('DraftKingsPlayerID')->nullable();
            $table->integer('YahooPlayerID')->nullable();
            $table->text('FanDuelName')->nullable();
            $table->text('DraftKingsName')->nullable();
            $table->text('YahooName')->nullable();
            $table->text('DepthChartPosition')->nullable();
            $table->tinyInteger('DepthChartOrder')->nullable();
            $table->integer('GlobalTeamID')->nullable();
            $table->text('FantasyDraftName')->nullable();
            $table->integer('FantasyDraftPlayerID')->nullable();
            $table->integer('UsaTodayPlayerID')->nullable();
            $table->text('UsaTodayHeadshotUrl')->nullable();
            $table->text('UsaTodayHeadshotNoBackgroundUrl')->nullable();
            $table->text('UsaTodayHeadshotUpdated')->nullable();
            $table->text('UsaTodayHeadshotNoBackgroundUpdated')->nullable();
            $table->integer('NbaDotComPlayerID')->nullable();
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
        Schema::dropIfExists('players');
    }
}
