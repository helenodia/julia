<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;

use App\Category;

class Categories extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        return Category::create($data);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return new CategoryResource($category);
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->only("category");
        $category->fill($data)->save();
        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response(null, 204);
    }
}

// possibly update showcats/showexercise? if so, these would only be used in the router
//show exercises based on single cat return resource