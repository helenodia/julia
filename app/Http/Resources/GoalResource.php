<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GoalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "goal" => $this->goal,
            "rest_time" => $this->rest_time,
            "reps" => $this->reps,
            "sets" => $this->sets,
            "rep_endurance" => $this->rep_endurance,
            "rep_size" => $this->rep_size,
            "rep_strength" => $this->rep_strength,
            "changeover_time" => $this->changeover_time,
        ];
    }
}

