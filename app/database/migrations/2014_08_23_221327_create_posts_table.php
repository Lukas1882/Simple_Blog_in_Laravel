<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
        {
        $table->increments('id');
        $table->string('title');
        $table->text('body');
        $table->string('keyw');
        $table->string('desc');
        $table->string('slug');
        $table->integer('user_id');
        $table->string('remember_token', 64);
        $table->dateTime('created_at');
        $table->dateTime('updated_at');
       
        });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
