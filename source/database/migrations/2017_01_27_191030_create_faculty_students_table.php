<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id')->unsigned()->nullable(false);
            $table->foreign('faculty_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('roll_number')->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('category')->nullable(true);
            $table->string('status')->nullable(true);
            $table->string('year')->nullable(true);
            $table->string('title_work')->nullable(true);
            $table->string('co_guide')->nullable(true);
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
        Schema::drop('faculty_students');
    }
}
