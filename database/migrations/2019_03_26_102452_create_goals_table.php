<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('goal', 100);
            $table->integer('rest_time');
            $table->integer('rep_time');
            $table->integer('reps');
            $table->integer('sets');

        });
    }

    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
