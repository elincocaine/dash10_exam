<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTotals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_totals', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('games');
            $table->integer('game_started');
            $table->integer('minutes_played');
            $table->integer('field_goals');
            $table->integer('field_goals_attempted');
            $table->integer('3pt');
            $table->integer('3pt_attempted');
            $table->integer('2pt');
            $table->integer('2pt_attempted');
            $table->integer('free_throws');
            $table->integer('free_throws_attempted');
            $table->integer('offensive_rebounds');
            $table->integer('defensive_rebounds');
            $table->integer('assists');
            $table->integer('steals');
            $table->integer('blocks');
            $table->integer('turnovers');
            $table->integer('personal_fouls');
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
        Schema::dropIfExists('table_player_total');
    }
}
