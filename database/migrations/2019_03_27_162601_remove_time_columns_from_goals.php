<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTimeColumnsFromGoals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goals', function (Blueprint $table) {
            $table->dropColumn("rep_size");
            $table->dropColumn("rep_strength");
            $table->dropColumn("rep_endurance");
            $table->integer("rep_time");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goals', function (Blueprint $table) {
            $table->integer("rep_size");
            $table->integer("rep_strength");
            $table->integer("rep_endurance");
            $table->dropColumn("rep_time");
        });
    }
}
