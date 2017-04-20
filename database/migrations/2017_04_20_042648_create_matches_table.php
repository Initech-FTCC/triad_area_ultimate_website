<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('win_team_id')->unsigned()->index();
            $table->integer('loss_team_id')->unsigned()->index();
            $table->integer('season_id')->unsigned()->index();
            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
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
        //
        Schema::drop('matches');
    }
}
