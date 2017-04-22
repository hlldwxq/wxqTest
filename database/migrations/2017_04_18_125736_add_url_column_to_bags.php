<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlColumnToBags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bags', function (Blueprint $table) {
            //
            $table->string('img_url');
            $table->string('color');
            $table->string('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bags', function (Blueprint $table) {
            //
            $table->dropColumn('img_url');
            $table->dropColumn('color');
            $table->dropColumn('size');
        });
    }
}
