<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('team_count')->default(0);
            $table->integer('user_id')->unsigned()->index();
            $table->enum('status', ['active', 'end']);
//            $table->foreign('job')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('seasons');
    }
}
