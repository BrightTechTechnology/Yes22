<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function(Blueprint $table)
        {
            $table->increments('id'); // id of rating
            $table->integer('user_id')->index(); // who rated?
            $table->smallInteger('score'); // what is the rating (1-5)
            $table->string('item')->index(); // what has been rated? (User, Article, Call)
            $table->integer('item_id')->index(); // what is the id of the item?
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
        Schema::drop('ratings');
    }
}

