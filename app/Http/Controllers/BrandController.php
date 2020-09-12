<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Traits\pageMetaContent;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{   use pageMetaContent;use UploadAble;
    public function index(){
        abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('List Brands','This Page Lists all the brands.');
        $brands=Brand::with('products')->orderBy('created_at','desc')->get();
        return view('admin.brands.index')->with('brands',$brands);
    }
    public function create()
    {
        abort_if(Gate::denies('brand_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Add a new Brand','This Page allows to add a new Brand.');
        return view('admin.brands.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $brand=new Brand();
        $brand->title=$request->only('title');
        if($request->hasfile('image'))
        {   foreach($request->file('image')  as $image){
            $img = $this->uploadOne($request->file('image'), 'brands/'.$brand['title'],210,100);
            $brand->url=$img;
            dd($img);
            }
        }
        $brand->save();
        return redirect()->route('admin.brands.index')->with('success',$brand->title.' : Brand Successfully Created');
    }

    public function edit(Brand $brand)
    {
        abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.edit', compact('tag'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->validated());
        $brand->slug=Str::slug($request->title);
        $brand->save();

        return redirect()->route('admin.brands.index')->with('success',$brand->title.' : Brand Successfully Updated');
    }

    public function show(Brand $brand)
    {
        abort_if(Gate::denies('brand_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.show', compact('brand'));
    }

    public function destroy(Brand $brand)
    {
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();
        return back()->with('success',$brand->title.' : Brand Successfully Deleted');
    }
}
