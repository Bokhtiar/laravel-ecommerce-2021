<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use Attribute;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function variant_create(){
        $colors = Color::all(['id', 'name']);
        $products = Product::latest()->get(['id', 'name']);
        $attributes = ModelsAttribute::all(['id', 'name']);
        $variatns = ProductVariant::latest()->take(6)->get();
        return view('admin.product.variant_create', compact('colors','attributes','products','variatns'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $variant = new ProductVariant();
        $variant->product_id = $request->product_id;
        $variant->color_id = $request->color_id;
        $variant->attribute_id = $request->attribute_id;
        $variant->attribute_value_id = $request->attributevalue_id;
        $variant->price = $request->price;
        $variant->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
