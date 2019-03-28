<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Exercise;
use App\WorkoutPlan;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Goals;
// use App\Http\Resources\WorkoutPlanResource;

class WorkoutPlans extends Controller
{
    public function create(request $request)
    {

        // $catDetails = Category::whereHas('exercises')->get();
                // $catDetails->WherePivot(4);

        $goalDetails = Goal::where('goal', '=', $request['goal'])->first()->only('goal','rep_time', 'rest_time', 'reps', 'changeover_time');
        // get categories out of request
        $categories = $request['categories'];

        // iterate over categories and return an instance of each category model

        $categories = collect($categories)->map(function($cat) {
            return Category::where('category', '=', $cat)->first()->only('id');
        });

       return Category::find(4)->exercises();
    }
}






  // foreach ($categories['category'] as $value) {
         //     // collect($value)->exercises();
         //     // $exercises->push($value);
         //    // new Category $value;
         //    var_dump($value);

         //}

        //  $categories = $categories->map(function($cat) {
        //     return Category->exercises('category', '=', $cat)->first()-only('title');
        // });

        // create a new laravel collection $exercises = collect([])
        // iterate over categories calling the exercises method on each $category->exercises() and push to laravel collection;

        // $categories = $request->categories;
        //  Category::find($categories) Goals::find($goal);

// public function store(Request $request)
// 	{

// 		return new WorkoutPlanResource($workoutplan);
// 	}
// 	public function show(WorkoutPlan $workoutplan)
// 	{
// 	// return the resource
// 		return new WorkoutPlanResource($workoutplan);
// 	}
// 	public function update(Request $request, WorkoutPlan $workoutplan)
// 	{

// 		return new WorkoutPlanResource($workoutplan);
//}