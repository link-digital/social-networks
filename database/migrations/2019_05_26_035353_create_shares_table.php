<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('network_post_id')->nullable();
            $table->string('network_id')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('follower_id')->nullable();
            $table->foreign('follower_id')->references('id')->on('followers')->onDelete('cascade');
            $table->dateTime('post_date')->nullable();
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
        Schema::dropIfExists('shares');
    }
}
