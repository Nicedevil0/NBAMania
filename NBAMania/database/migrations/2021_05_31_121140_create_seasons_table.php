<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->integer('StartYear')->nullable();
            $table->integer('EndYear')->nullable();
            $table->text('Description')->nullable();
            $table->text('RegularSeasonStartDate')->nullable();
            $table->text('PostSeasonStartDate')->nullable();
            $table->text('SeasonType')->nullable();
            $table->text('ApiSeason')->nullable();
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
        Schema::dropIfExists('stadiums');
    }
}
