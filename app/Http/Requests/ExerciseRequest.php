<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExerciseRequest extends FormRequest
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

    public function rules()
    {
        return [
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "rep_endurance" =>["required", "integer"],
            "rep_size" =>["required","integer"],
            "rep_strength" =>["required", "integer"],
            "change_over" =>["required", "integer"],
            "categories" => ["array"],
            "categories.*" => ["string", "max:255"],
        ];
    }
}
