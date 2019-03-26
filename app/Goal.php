<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ["goal", "rest_time", "reps", "sets"];
}
