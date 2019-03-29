<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "goal" =>["required", "string"],
            "rest_time" => ["required", "integer"],
            "reps" => ["required", "integer"],
            "sets" => ["required", "integer"],
            "rep_time" =>["required", "integer"],
            "changeover_time" =>["required", "integer"],
        ];
    }
}
