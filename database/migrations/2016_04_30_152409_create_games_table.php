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
            $table->string('name');
            $table->text('description');
            $table->text('minimumRequirement');
            $table->text('recommendRequirement');
            $table->integer('category');
            $table->timestamp('releaseTime');
            $table->string('image');
            $table->string('videoLink');
            $table->float('size');
            $table->string('popularity');
            $table->float('priceOnSteam');
            $table->integer('remaining_quantity')->unsigned();
            $table->float('discount');
            $table->integer('downloads')->unsigned()->default(0);
            $table->integer('views')->unsigned()->default(0);
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
