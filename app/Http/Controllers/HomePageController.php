<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\Newsletter;
use App\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $products=Product::with('media')->latest()->get();
        $newProducts=$products->take(5);
        $featuredProducts=Product::with('media')->where('featured','1')->get()->sortByDesc('likes');
        //dd($featuredProducts);
        return view('client.index',compact(['products','newProducts','featuredProducts']));
    }

    public function subscribeToNewsLetter(NewsLetterRequest $request){
        Newsletter::create($request->validated());
        return back()->with('success','Your Email has been added to our Newsletter');
    }
}
