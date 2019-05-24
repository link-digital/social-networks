<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldNetworkPostIdInTableReactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reactions', function (Blueprint $table) {
            $table->string('network_post_id')->after('id')->nullable();
            $table->string('network_follower_id')->after('post_id')->nullable();
            $table->string('link')->after('type')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reactions', function (Blueprint $table) {
            $table->dropColumn('network_post_id');
            $table->dropColumn('network_follower_id');
            $table->dropColumn('type');
        });

    }
}
