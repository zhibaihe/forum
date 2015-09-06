<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZhibaiheForumForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zhibaihe_forum_forums', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->enum('openess', ['subscription', 'sitewide', 'public'])->default('subscription');
            $table->string('slug', 32)->unique();
            $table->string('name');
            $table->text('description');

            $table->integer('threads_count');
            $table->integer('replies_count');
            $table->integer('latest_thread_id');
            $table->integer('latest_reply_id');

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
        Schema::drop('zhibaihe_forum_forums');
    }
}
