<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Exercise;
use App\WorkoutPlan;
use App\Category;
use Illuminate\Support\Arr;
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

        // $exercises = collect([]);

        $exercises = collect($categories)->map(function($cat) {
            $categoryModel = Category::where('category', '=', $cat)->first();
            return $categoryModel->exercises()->pluck('title');
        });

       $exercises = Arr::flatten($exercises);

        return $exercises;

    }
}
