<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_entry', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->unsignedInteger('entry_id');
            $table->foreign('entry_id')->references('id')->on('entries');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('finished');
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
        Schema::table('activity_entry', function (Blueprint $table) {
            $table->dropForeign(['activity_id']);
            $table->dropForeign(['entry_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('activity_entry');
    }
}
