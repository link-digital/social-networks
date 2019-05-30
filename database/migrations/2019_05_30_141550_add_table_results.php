<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('follower_id')->nullable();
            $table->foreign('follower_id')->references('id')->on('followers')->onDelete('cascade');
            $table->integer('comments_points')->nullable();
            $table->integer('share_points')->nullable();
            $table->integer('reactions_points')->nullable();
            $table->integer('follower_points')->nullable();
            $table->integer('grant_total')->nullable();
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
        Schema::dropIfExists('results');
    }
}
