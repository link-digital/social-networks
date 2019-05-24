<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('network_post_id')->nullable();
            $table->string('network_id')->nullable();
            $table->string('link')->nullable();
            $table->longText('message')->nullable();
            $table->string('type')->nullable();
            $table->dateTime('post_date')->nullable();
            $table->boolean('active')->nullable();
            $table->integer('shares')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('comments')->nullable();
            $table->boolean('download_likes')->nullable();
            $table->boolean('download_comments')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
