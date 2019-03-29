<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Http\Requests\GoalRequest;
use App\Http\Resources\GoalResource;

class Goals extends Controller
{
    public function index()
    {
        return Goal::all();
    }

    public function store(GoalRequest $request)
    {
        $data = $request->all();
        return Goal::create($data);
    }

    public function show($id)
    {
        $goal = Goal::find($id);
        return new GoalResource($goal);
    }

    public function update(GoalRequest $request, $id)
    {
        $data = $request->only("goal");
        $goal->fill($data)->save();
        return $goal;
    }

    public function destroy($id)
    {
        $goal = goal::find($id);
        $goal->delete();
        return response(null, 204);
    }
}
