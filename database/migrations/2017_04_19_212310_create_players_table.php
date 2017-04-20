<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50)->default('');
            $table->string('last_name', 50)->default('');
            $table->string('phone_number', 50)->default('');
            $table->date('birth_date')->nullable();
            $table->tinyInteger('gender_code')->default(0);
            $table->decimal('height_inches', 19,4);
            $table->enum('experience', ['None', 'Organized League', 'Club level', 'College', 'Limited recreation']);
            $table->enum('preferred_position', ['Handler', 'Defense', 'Cutter', 'Deep Receiver', 'No idea']);
            $table->boolean('vertical_stack');
            $table->boolean('horizontal_stack');
            $table->boolean('zone');
            $table->text('comment')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('user_id')->unsigned()->index();
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
    }
}
