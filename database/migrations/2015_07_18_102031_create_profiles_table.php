<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('github');
            $table->text('bio');
            $table->text('avatar');
            $table->string('skills');
            $table->string('job');
            $table->string('level');
            $table->boolean('is_admin');
            $table->boolean('is_certified');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
