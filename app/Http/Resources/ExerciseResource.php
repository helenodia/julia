<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
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
            "title" => $this->title,
            "description" => $this->description,
            "rep_endurance" => $this->rep_endurance,
            "rep_size" => $this->rep_size,
            "rep_strength" => $this->rep_strength,
            "change_over" => $this->change_over,
        ];
    }
}
