<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Exercise extends Model
{
    protected $fillable = ["title", "description"];
    protected $with = ["catergories"];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function setCategories(Collection $categories)
    {
    	//update pivot table with cat ids
    	$this->categories()->sync($categories->pluck('id')->all());
    	return $this;
    }
}
