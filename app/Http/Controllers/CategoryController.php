<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('categories.index', get_defined_vars());
    }


    public function create()
    {
        return view('categories.create', get_defined_vars());
    }


    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $record = Category::create($data);        
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }


    public function show(Category $category)
    {
        return view('categories.show', get_defined_vars());
    }


    public function edit(Category $category)
    {
        return view('categories.edit', get_defined_vars());
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
