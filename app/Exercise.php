<?php

namespace App;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Exercise extends Model
{
    protected $fillable = ["title", "description"];
    protected $with = ["categories"];
    protected $hidden = ["account_id", "pivot"];


    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('exercise');
    }

    public function setCategories(Collection $categories)
    {
    	//update pivot table with cat ids
    	$this->categories()->sync($categories->pluck("id")->all());
    	return $this;
    }
}
