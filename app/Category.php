<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
        protected $fillable = ["category"];
        protected $visible = ["id", "category"];

        public function exercise()
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
