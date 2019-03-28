<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GoalResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "goal" => $this->goal,
            "rest_time" => $this->rest_time,
            "reps" => $this->reps,
            "sets" => $this->sets,
            "rep_time" => $this->rep_time,
            "changeover_time" => $this->changeover_time,
        ];
    }
}

