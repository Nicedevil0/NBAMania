<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStadiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadia', function (Blueprint $table) {
            $table->id();
            $table->text('Active')->nullable();
            $table->text('Name')->nullable();
            $table->text('Address')->nullable();
            $table->text('City')->nullable();
            $table->text('State')->nullable();
            $table->text('Zip')->nullable();
            $table->text('Country')->nullable();
            $table->integer('Capacity')->nullable();
            $table->float('GeoLat')->nullable();
            $table->float('GeoLong')->nullable();
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
        Schema::dropIfExists('stadia');
    }
}
