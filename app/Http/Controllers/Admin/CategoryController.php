<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;

use Illuminate\Support\Facades\Input;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\ImageManager;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'icon_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //    ]);
        //    $file = $request->file('icon_image');

        //    // for save original image
        //    $ogImage = Image::make($file);

        //    $originalPath = 'public/images/';
        //    $ogImage =  $ogImage->save($originalPath.time().$file->getClientOriginalName());

        //    // for store resized image
        //    $thumbnailPath = 'public/thumbnail/';
        //    $ogImage->resize(250,125);
        //    $thImage = $ogImage->save($thumbnailPath.time().$file->getClientOriginalName());




           $image       = $request->file('image');
           $filename    = $image->getClientOriginalName();
           //Fullsize
           $image->move(public_path().'/full/',$filename);
           $image_resize = Image::make(public_path().'/full/'.$filename);
           $image_resize->fit(200, 200);
           $image_resize->save(public_path('images/' .$filename));

           $product= new Category();
           $product->name = $request->name;
           $product->icon_image = $filename;
           $product->save();

           return back()->with('success', 'Your product saved with image!!!');






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
