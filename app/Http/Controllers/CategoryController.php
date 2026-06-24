<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Category.index', compact('categories'));
    }

    public function create(){
        $category = new Category();
        $categories = Category::all();
        return view('Category.create', compact('category', 'categories'));
    }

    public function store(CategoryRequest $request){
        $data = $request->validated();
        $data['content'] = $request->input('content', '');
        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Categoria creada exitosamente.');
    }

    public function show(string $id){
        $category = Category::findOrFail($id);
        return view('Category.show', compact('category'));
    }

    public function edit(string $id){
        $category = Category::findOrFail($id);
        return view('Category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, string $id){
        $category = Category::findOrFail($id);
        $data = $request->validated();
        $data['content'] = $request->input('content', $category->content ?? '');
        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Categoria actualizada exitosamente.');
    }

    public function destroy(string $id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Categoria eliminada exitosamente.');
    }
}
