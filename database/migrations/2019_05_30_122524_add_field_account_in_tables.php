<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldAccountInTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->string('account')->nullable()->after('comment_date');
        });
        Schema::table('followers', function (Blueprint $table) {
            $table->string('account')->nullable()->after('nickname');
        });
        Schema::table('reactions', function (Blueprint $table) {
            $table->string('account')->nullable()->after('link');
        });
        Schema::table('shares', function (Blueprint $table) {
            $table->string('account')->nullable()->after('post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('account');
        });
        Schema::table('followers', function (Blueprint $table) {
            $table->dropColumn('account');
        });
        Schema::table('reactions', function (Blueprint $table) {
            $table->dropColumn('account');
        });
        Schema::table('shares', function (Blueprint $table) {
            $table->dropColumn('account');
        });

    }
}
