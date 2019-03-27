<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use App\Http\Controllers\Goals;

class WorkoutPlan extends Controller
{
    public function create(request $request)
    {

        $goal = $request->goal;



        $goalName = Goal::where('goal', '=', $request['goal'])->first()->only('goal','rep_time');


        return $goalName;


        // $categories = $request->categories;
        //  Category::find($categories) Goals::find($goal);
    }
}
