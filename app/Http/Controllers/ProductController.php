<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Media;
use App\Product;
use App\Subcategory;
use App\Tag;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('products',Product::with('media')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with([
            'tags'=> Tag::all(),
            'subcategories'=>Subcategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $newProduct=Product::create([
            'title'=> $request->title,
            'description'=>$request->description,
            'subcategory_id'=>$request->subcategory_id,
            'price'=>$request->price,
            'slug'=>slugify($request->title),
        ]);
         $newProduct->tags()->attach($request->tags);
         $newProduct->save();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->storeAs('uploads/products/', $filename,'public');
            $image=Image::make(public_path("storage/uploads/products/{$filename}"))->fit(600,695);
            $image->save();
            $media=Media::create([
                'type'=>'image',
                'url'=>'storage/uploads/products/'.$filename,
                'product_id'=>$newProduct->id,
            ]);
        }
        return redirect()->route('products.index')->with('success','Product Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

}
