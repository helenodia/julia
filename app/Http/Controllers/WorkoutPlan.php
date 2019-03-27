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

        return Goal::find($goal);
        // $categories = $request->categories;
        //  Category::find($categories) Goals::find($goal);
    }
}
