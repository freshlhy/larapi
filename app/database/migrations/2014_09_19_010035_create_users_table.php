<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Eloquent::unguard();
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email');
            $table->boolean('active');
            $table->string('gender', 10);
            $table->integer('timezone');
            $table->date('birthday')->nullable();
            $table->string('location')->nullable();
            $table->boolean('had_feedback_email');
            $table->boolean('sync_name_bio');
            $table->text('bio');
            $table->string('picture_url');
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
        Schema::drop('users');
    }

}
