<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\LogHandlerEvent;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        abort_if(Gate::denies('product_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.create');
    }
    public function store(StoreCategoryRequest $request)
    {   $slug=Str::slug($request->title);
        $category=Category::create([
            'title'=>$request->title,
            'slug'=>$slug
        ]);
        event(new LogHandlerEvent('category','created', $category->title.' : Category Successfully Created','info',$category));
        return redirect()->route('admin.categories.index')->with('success',$category->title.' : Category Successfully Created');
    }
    public function edit(Category $category)
    {
        abort_if(Gate::denies('product_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        $category->slug=Str::slug($request->title);
        $category->save();
        event(new LogHandlerEvent('category','updated', $category->title.' : Category Updated Successfully','info',$category));
        return redirect()->route('admin.categories.index')->with('success',$category->title.' : Category Updated Successfully');
    }

    public function show(Category $category)
    {
        abort_if(Gate::denies('product_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.categories.show', compact('category'));
    }
    public function updateStatus(Request $request)
    {   abort_if(Gate::denies('product_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $category = Category::findOrFail($request->category_id);
        $category->status = $request->status;
        $category->save();
        event(new LogHandlerEvent('category','updated', $category['title'].' Category status updated successfully.','info',$category));
        return response()->json(['success' => $category->title.' : Category status updated successfully.']);
    }
    public function destroy(Category $category)
    {
        abort_if(Gate::denies('product_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $category->delete();
        event(new LogHandlerEvent('category','updated', $category['name'].' deleted successfully.','info',$category));
        return redirect()->back()->with('success',$category['title'].' deleted successfully.');
    }
}
