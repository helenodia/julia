<?php

namespace App\Http\Controllers;

use App\Goal;
use App\WorkoutPlan;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Goals;
// use App\Http\Resources\WorkoutPlanResource;

class WorkoutPlans extends Controller
{
    public function create(request $request)
    {

        $catDetails = Category::where('category', '=',$request['categories'])->first();

                $catDetails->WherePivot(4);

        $goalDetails = Goal::where('goal', '=', $request['goal'])->first()->only('goal','rep_time', 'rest_time', 'reps', 'changeover_time');


        return "hello";


        // $categories = $request->categories;
        //  Category::find($categories) Goals::find($goal);
    }
}







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