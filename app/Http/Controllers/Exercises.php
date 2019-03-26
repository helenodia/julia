<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\Http\Requests\ExerciseRequest;
use App\Http\Resources\ExerciseResource;
use App\Http\Resources\ExerciseListResource;

class Exercises extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExerciseRequest $request)
    {
        return ExerciseListResource::collection(Exercise::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExerciseRequest $request)
    {
        // get appropriate data
        $data = $request->only(['name', 'description', 'rep_endurance', 'rep_size', 'rep_strength', 'change_over']);
        // create a new instance of exercise
        $exercise = new Exercise($data);
        $category->exercises()->sync([2, 7, 4]);
        $data = $request->all();

        return Exercise::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::find($id);

        return new ExerciseResource($exercise);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExerciseRequest $request, $id)
    {
        return new ExerciseResource($Exercise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        return response(null, 204);
    }
}
