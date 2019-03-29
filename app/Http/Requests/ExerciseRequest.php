<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExerciseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => ["required", "string"],
            "categories" => ["array"],
            "categories.*" => ["string", "max:255"],
        ];
    }
}
