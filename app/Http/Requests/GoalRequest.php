<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "goal" =>["required", "string"],
            "rest_time" => ["required", "integer"],
            "reps" => ["required", "integer"],
            "sets" => ["required", "integer"],
            "rep_endurance" =>["required", "integer"],
            "rep_size" =>["required","integer"],
            "rep_strength" =>["required", "integer"],
            "changeover_time" =>["required", "integer"],
        ];
    }
}
