<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_exercise', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
// link up to courses table
            $table->bigInteger("category_id")->unsigned();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->bigInteger("exercise_id")->unsigned();
            $table->foreign("exercise_id")->references("id")->on("exercises")->onDelete("cascade");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_exercise');
    }
}
