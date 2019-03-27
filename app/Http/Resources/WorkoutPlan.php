<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutPlan extends JsonResource
{
    public function toArray($request)
    {
        return [
            "exercise_name" => $this->title,
            // "exercise_desc" => $this->description,
            "sets" => $this->sets,
            "target_reps" => $this->reps,
            "category" => $this->category, //array of strings
            // "total_workout_time" => $this-> ?? from timeforworkout,
        ];    
}

  