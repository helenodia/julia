<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    // public $timestamps = false;
    protected $fillable = ["category"];
    protected $visible = ["id", "category"];
     // protected $hidden = ["pivot"];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }

    public static function parse(array $categoryStrings)
    {
        $categories = new Collection();

        foreach ($categoryStrings as $string) {
            $string = trim($string);
            $exists = Category::where("category", $string)->first();
            $categories->push($exists ? : Category::create(["category" => $string]));
        }
        return $categories;
    }


}
