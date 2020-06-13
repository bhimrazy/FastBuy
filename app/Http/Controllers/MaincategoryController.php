<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainCategoryRequest;
use App\Maincategory;
use Illuminate\Http\Request;

class MaincategoryController extends Controller
{
    public function index()
    {
        return view('admin.maincategory.index')->with('maincategories',Maincategory::Paginate(5));
    }
    public function create()
    {
        return view('admin.maincategory.create');
    }
    public function store(MaincategoryRequest $request)
    {   $slug=slugify($request->title);
        Maincategory::create([
            'title'=> ucwords(strtolower($request->title)),
            'slug'=>$slug,
        ]);
        return redirect()->route('maincategory.index')->with('success','Category Successfully Created');
    }
}
