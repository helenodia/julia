<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTimeColumnsFromExercises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->dropColumn("rep_size");
            $table->dropColumn("rep_strength");
            $table->dropColumn("change_over");
            $table->dropColumn("rep_endurance");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->integer("rep_size");
            $table->integer("rep_strength");
            $table->integer("change_over");
            $table->integer("rep_endurance");
        });
    }
}
