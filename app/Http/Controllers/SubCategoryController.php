<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class SubCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcategories = SubCategory::all();

        return view('admin.subcategories.index', compact('subcategories'));
    }
    public function create()
    {
        abort_if(Gate::denies('product_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $categories=Category::all();
        return view('admin.subcategories.create',compact('categories'));
    }
    public function store(StoreSubCategoryRequest $request)
    {   $slug=Str::slug($request->title);
        Subcategory::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'slug'=>$slug
        ]);
        return redirect()->route('admin.subcategories.index')->with('success','SubCategory Successfully Created');
    }
    public function edit(SubCategory $subcategory)
    {
        abort_if(Gate::denies('product_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $categories=Category::all();
        return view('admin.subcategories.edit', compact(['subcategory','categories']));
    }
    public function update(UpdateSubCategoryRequest $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
        $subcategory->slug=Str::slug($request->title);
        $subcategory->save();
        return redirect()->route('admin.subcategories.index');
    }

    public function show(Subcategory $subcategory)
    {
        abort_if(Gate::denies('product_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subcategory->load('category');
        return view('admin.subcategories.show', compact('subcategory'));
    }
    public function destroy(Subcategory $subcategory)
    {
        abort_if(Gate::denies('product_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcategory->delete();
        return back();
    }
}
