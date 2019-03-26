<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ["title", "description", "rep_endurance", "rep_size", "rep_strength", "change_over"];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
