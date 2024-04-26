<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
class CategoryController extends Controller
{
    public function create() {

        return view('category.create');

    }
    public function store(StoreRequest $request) {

        $data = $request->validated();

        Category::query()->create($data);

        return redirect('/admin');

    }
    public function edit(Category $category) {

        return view('category.edit', compact('category'));

    }
    public function update(UpdateRequest $updateRequest, Category $category)
    {
        
        $data = $updateRequest->validated();

        $category->update($data);

        return redirect('/admin');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/admin');
    }
}
