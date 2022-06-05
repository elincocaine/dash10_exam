<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePlayerTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_totals', function (Blueprint $table) {
            $table->renameColumn('3pt', 'three_pts');
            $table->renameColumn('3pt_attempted', 'three_pts_attempted');
            $table->renameColumn('2pt', 'two_pts');
            $table->renameColumn('2pt_attempted', 'two_pts_attempted');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_totals', function (Blueprint $table) {
            $table->renameColumn('three_pts', '3pt');
            $table->renameColumn('three_pts_attempted', '3pt_attempted');
            $table->renameColumn('two_pts', '2pt');
            $table->renameColumn('two_pts_attempted', '2pt_attempted');
        });
    }
}
