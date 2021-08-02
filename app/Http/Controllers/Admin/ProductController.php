<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use Attribute;
use Illuminate\Http\Request;
use League\CommonMark\Inline\Element\Code;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index');
    }
    public function create(){
        $categories = Category::all(['id', 'name']);
        $brands = Brand::all(['id', 'name']);
        $colors = Color::all(['id', 'name']);
        $attributes = ModelsAttribute::all(['id', 'name']);
        return view('admin.product.createOrUpdate', compact('categories', 'brands', 'colors','attributes'));
    }

    public function store(Request $request){
        dd($request->all());
    }
}
