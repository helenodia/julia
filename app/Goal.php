<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Goal extends Model
{
    public $primaryKey = "goal";

    protected $fillable = ["goal", "rest_time", "reps", "sets", "rep_time", "changeover_time"];
}
