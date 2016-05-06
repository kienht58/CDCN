<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->unique();
            $table->string('name');
            $table->text('description');
            $table->text('minimumRequirement');
            $table->text('recommendRequirement');
            $table->text('genre');
            $table->timestamp('releaseTime');
            $table->string('downloadLink');
            $table->integer('downloads')->unsigned();
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
        Schema::drop('games');
    }
}
