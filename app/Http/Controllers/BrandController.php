<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Traits\pageMetaContent;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $title=$request['title'];
        $brand=new Brand();
        $brand->title=$title;
        if($request->hasfile('image'))
        {   $img = $this->uploadOne($request->file('image'), 'brands/'.$title,210,100);

        }else{
            $img='/assets/images/branding/1.jpg';
        }
        $brand->url='storage/'.$img;
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
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if(File::isDirectory(public_path('storage/uploads/brands/'.$brand['title']))) {
            File::deleteDirectory(public_path('storage/uploads/brands/'.$brand['title']));
        }
        $brand->delete();
        return back()->with('success',$brand->title.' : Brand Successfully Deleted');
    }
}
