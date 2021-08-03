<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
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

    public function attribute_value($id){
        $attribute_value = AttributeValue::where('attribute_id',$id)->get();
        return response()->json($attribute_value, 200);
    }

    public function store(Request $request){


        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->unit = $request->unit;
        $product->min_qty = $request->min_qty;
        $product->refundable =$request->refundable;

        $product->video_provider = $request->video_provider;
        $product->video_link =$request->video_link;

        $product->unit_price = $request->unit_price;
        $product->date_range_start = $request->date_range_start;
        $product->data_range_end = $request->data_range_end;
        $product->discount = $request->discount;
        $product->quantity =$request->quantity;
        $product->sku = $request->sku;


        $product->photes = "test";
        $product->thumbnail_img = "test";


            $product->shipping_type = $request->shipping_type;
            $product->shipping_charge = $request->shipping_charge;
            $product->low_stock_quantity = $request->low_stock_quantity;
            $product->stock_visibility_state = $request->stock_visibility_state;
            $product->cash_on_delivery =$request->cash_on_delivery;
            $product->status = $request->status;

            $product->est_shipping_days =$request->est_shipping_days;
            $product->tex = $request->tex;
            $product->description = $request->description;


            $product->save();


            return back();



    }


    public function variant_create(){
        $colors = Color::all(['id', 'name']);
        $products = product::latest()->get(['id', 'name']);
        $attributes = ModelsAttribute::all(['id', 'name']);
        return view('admin.product.variant_create', compact('colors','attributes','products'));

    }
}
