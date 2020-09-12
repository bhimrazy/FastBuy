<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands=Brand::with('products')->orderBy('created_at','desc')->paginate(10);
        return view('admin.brands.index')->with('brands',$brands);
    }
}
