<?php

namespace App\Http\Controllers;


use App\Exercise;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ExerciseRequest;
use App\Http\Resources\ExerciseResource;
use App\Http\Resources\ExerciseListResource;

class Exercises extends Controller
{
    public function index(ExerciseRequest $request)
    {
        return ExerciseListResource::collection(Exercise::all());
    }

    public function store(ExerciseRequest $request)
    {
        // get appropriate data & create a new instance of exercise
        $data = $request->only(['title', 'description', 'rep_time','changeover_time']);
        $exercise = Exercise::create($data);

        // categories
        $categories = Category::parse($request->get('categories', []));
        $exercise->setCategories($categories);

        return new ExerciseResource($exercise);
    }

    public function show($id)
    {
        $exercise = Exercise::find($id);
        return new ExerciseResource($exercise);
    }

    public function update(ExerciseRequest $request, $id)
    {
        $data = $request->only(['title', 'description','rep_time', 'changeover_time']);

        $exercise = Exercise::create($data);

        // categories
        $categories = Category::parse($request->get('categories', []));
        $exercise->setCategories($categories);

        return new ExerciseResource($exercise);
    }

    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        return response(null, 204);
    }
}
