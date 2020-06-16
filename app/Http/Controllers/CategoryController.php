<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index')->with('categories',Category::Paginate(5));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryRequest $request)
    {   $slug=slugify($request->title);
        Category::create([
            'title'=> ucwords(strtolower($request->title)),
            'slug'=>$slug,
        ]);
        return redirect()->route('category.index')->with('success','Category Successfully Created');
    }
}
