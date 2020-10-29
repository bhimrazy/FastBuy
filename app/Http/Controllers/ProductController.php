<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Media;
use App\Product;
use App\Tag;
use App\Traits\pageMetaContent;
use App\Traits\UploadAble;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{   use pageMetaContent;use UploadAble;

    public function index()
    {   abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('List Products','This Page Lists all the products.');
        return view('admin.products.index')->with('products',Product::with('media')->latest()->get());
    }

    public function create()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Add a new Product','This Page allows to add a new Product.');
        $tags=Tag::all();
        $categories=Category::with('subcategories')->get();
        $brands=Brand::all();
        return view('admin.products.create',compact(['tags','categories','brands']));
    }

    public function store(StoreProductRequest $request)
    {
         $newProduct=Product::create($request->validated());
         $newProduct->owner_id=auth()->guard('admin')->user()->isVendor()?auth()->guard('admin')->id():null;
         $newProduct->tags()->sync($request->input('tags', []));
         $newProduct->save();
        if($request->hasfile('image'))
        {   foreach($request->file('image')  as $image){
                $img = $this->uploadOne($image, 'products/'.$newProduct['id'],600,695);
                Media::create([
                    'type'=>'image',
                    'url'=>'storage/'.$img,
                    'product_id'=>$newProduct->id,
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with('success','Product Created Successfully with name : '.$newProduct->name);
    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->load('media');
        $this->setPageTitle($product['name'],$product['description']);
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->load('media');
        $this->setPageTitle('Edit - '.$product['name'],$product['description']);
        $tags=Tag::all();
        $categories=Category::with('subcategories')->get();
        $brands=Brand::all();
        return view('admin.products.edit', compact('product','tags','categories','brands'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product['featured']= ($request['featured']??'')?1:0;
        $product['status']= ($request['status']??'')?1:0;
        $product['stock']= ($request['stock']??'')?1:0;
        $product->tags()->sync($request->input('tags', []));
        $product->update();
        if($request->hasfile('image')){
            if(File::isDirectory(public_path('storage/uploads/products/'.$product['id']))) {
                 File::deleteDirectory(public_path('storage/uploads/products/'.$product['id']));
            }
            $product->media()->delete();
            foreach($request->file('image')  as $image){
                $img = $this->uploadOne($image, 'products/'.$product['id'],600,695);
                Media::create([
                    'type'=>'image',
                    'url'=>'storage/'.$img,
                    'product_id'=>$product->id,
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with('success','Product Updated Successfully with name'.$product->name);
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if(File::isDirectory(public_path('storage/uploads/products/'.$product['id']))) {
            File::deleteDirectory(public_path('storage/uploads/products/'.$product['id']));
        }
        $product->media()->delete();
        $product->delete();
        return redirect()->back()->with('success',$product['name'].' deleted successfully.');
    }
    public function productShow(Request $request)
    {
        $product=Product::where('slug',$request->product)->with('media')->firstOrFail();
        $recommendedProducts=Product::with('media')->latest()->get()->random(10);
        return view('client.product-details',compact(['product','recommendedProducts']));
    }
    public function search(Request $request)
    {
        $query=$request->input('query');
        if($request->input('category_id')){
            $products=Product::where('subcategory_id',$request->input('category_id'))
                 ->where('name','LIKE',"%$query%")
                ->with('media')->get();
        }
        else{
            $products=Product::where('name','LIKE',"%$query%")->with('media')->get();
        }
        return view('client.catalog')->with('products',$products)->with('query',$query);
    }

}
