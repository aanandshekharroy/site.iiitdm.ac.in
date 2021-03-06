<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->string('designation')->nullable(true);
            $table->string('discipline')->nullable(true);
            $table->string('research_area')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('webpage')->nullable(true);
            $table->string('fax')->nullable(true);
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
        Schema::drop('research_staffs');
    }
}
