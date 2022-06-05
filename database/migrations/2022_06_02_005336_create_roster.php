<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('team_code',3);
            $table->integer('number');
            $table->string('name',200);
            $table->string('pos',5);
            $table->string('height',10);
            $table->integer('weight');
            $table->date('dob');
            $table->string('nationality',100);
            $table->string('years_exp',5);
            $table->string('college',45);
            $table->timestamps();

            $table->foreign('team_code')
            ->references('code')
            ->on('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_roster');
    }
}
