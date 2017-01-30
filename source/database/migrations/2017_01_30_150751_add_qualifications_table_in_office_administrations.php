<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQualificationsTableInOfficeAdministrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('office_administrations', function (Blueprint $table) {
            //
            $table->string('qualification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('office_administrations', function (Blueprint $table) {
            //
            $table->dropColumn('qualification');
        });
    }
}
