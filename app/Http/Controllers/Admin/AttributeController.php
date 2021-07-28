<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::all();
        return view('admin.attribute.index', compact('attributes'));
    }

    public function save(Attribute $attribute, Request $request)
    {
        $attribute->name = $request->name;
        $attribute->save();
    }


    public function validation($id, $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'brand name is required',
        ]);
    }




    public function store($id = null, Request $request)
    {
        if (!isset($id)) {
            $this->validation($id = null, $request);
            $attributes = new Attribute();
            $this->save($attributes, $request);
            return redirect()->route('admin.attribute.index')->with('success', 'Your Atrribute saved Successfully!!!');
        } else {
            $attributes = Attribute::find($id);
            $this->save($attributes, $request);
            return redirect()->route('admin.brand.index')->with('success', 'Your brand Updated Successfully!!!');
        }
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
