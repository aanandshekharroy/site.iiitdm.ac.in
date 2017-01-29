<?php

use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('proPic')->nullable(true);
            $table->string('cv')->nullable(true);

            $table->string('designation');
            $table->string('department');
            $table->string('specialization');
            $table->string('phone');
            $table->string('gmail')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('skype')->nullable(true);
            $table->string('alternate_phone')->nullable(true);
            $table->string('fax')->nullable(true);
            $table->string('webpage');
            $table->string('address');
            $table->longText('about_me');
            $table->longText('interests');
            $table->rememberToken();
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
