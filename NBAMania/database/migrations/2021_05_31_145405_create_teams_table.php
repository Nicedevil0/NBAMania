<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->text('Key')->nullable();
            $table->text('Active')->nullable();
            $table->text('City')->nullable();
            $table->text('Name')->nullable();
            $table->integer('LeagueID')->nullable();
            $table->integer('StadiumID')->nullable();
            $table->foreign('StadiumID')
                ->references('id')
                ->on('stadiums')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('Conference')->nullable();
            $table->text('Division')->nullable();
            $table->text('PrimaryColor')->nullable();
            $table->text('SecondaryColor')->nullable();
            $table->text('TertiaryColor')->nullable();
            $table->text('QuaternaryColor')->nullable();
            $table->text('WikipediaLogoUrl')->nullable();
            $table->text('WikipediaWordMarkUrl')->nullable();
            $table->integer('GlobalTeamID')->nullable();
            $table->integer('NbaDotComTeamID')->nullable();
        });
        DB::unprepared('ALTER TABLE `teams` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `restaurant_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
