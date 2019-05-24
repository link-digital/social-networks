<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('network_comment_id')->nullable();
            $table->string('network_id')->nullable();
            $table->string('network_follower_id')->nullable();
            $table->dateTime('comment_date')->nullable();
            $table->unsignedBigInteger('post_id')->unsingned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedBigInteger('follower_id')->unsingned()->nullable();
            $table->foreign('follower_id')->references('id')->on('followers')->onDelete('cascade');
            $table->string('link')->nullable();
            $table->longText('message')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('comments')->nullable();
            $table->integer('points')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
