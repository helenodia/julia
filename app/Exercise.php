<?php

namespace App;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Exercise extends Model
{
    protected $fillable = ["title", "description"];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function setCategories(Collection $categories)
    {
    	// Update pivot table with cat ids
    	$this->categories()->sync($categories->pluck("id")->all());
    	return $this;
    }
}
