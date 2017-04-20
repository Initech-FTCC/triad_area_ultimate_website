<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeasonPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('season_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned()->index();
            $table->enum('t_shirt_size', ['s', 'medium', 'large', 'x-large', 'xx-large'])->unsigned()->index();
            $table->boolean('is_paid')->default(false);
            $table->tinyInteger('payment_option')->default(0);
            $table->string('play_with')->nullable();
            $table->integer('season_id')->unsigned()->index();
            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
            $table->integer('team_id')->unsigned()->nullable()->index();
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
        Schema::drop('season_players');
    }
}
