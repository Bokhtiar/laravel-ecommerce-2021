@extends('layouts.admin.app')
@section('admin_content')



<div class="container">
    <div class="px-15px px-lg-25px">
        <div class="aiz-titlebar text-left mt-2 mb-3">
            <h5 class="mb-0 h6">Add New product</h5>
        </div>
        <div class="">
            <form class="form form-horizontal mar-top" action="" method="POST" enctype="multipart/form-data" id="choice_form">
                <div class="row gutters-5">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Product Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Product Name <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                                    </div>
                                </div>
                                <div class="form-group row" id="category">
                                    <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-live-search="true" required>
                                            <option value="1">Women Clothing &amp; Fashion</option>
                                            <option value="13">-- Hot Categories</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="brand">
                                    <label class="col-md-3 col-from-label">Brand</label>
                                    <div class="col-md-8">
                                        <select class="form-control aiz-selectpicker" name="brand_id" id="brand_id" data-live-search="true">
                                            <option value="">Select Brand</option>
                                            <option value="1">Ford</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Unit</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Minimum Purchase Qty <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="number" lang="en" class="form-control" name="min_qty" value="1" min="1" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Refundable</label>
                                    <div class="col-md-8">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" name="refundable" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Product Images</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery Images
                                        <small>(600x600)</small></label>
                                    <div class="col-md-8">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                            <div class="input-group-prepend">
                                                <input   type="file" name="photos" class="selected-files">
                                            </div>
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small class="text-muted">These images are visible in product details page
                                            gallery. Use 600x600 sizes images.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image
                                        <small>(300x300)</small></label>
                                    <div class="col-md-8">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" name="thumbnail_img" class="selected-files">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small class="text-muted">This image is visible in all product box. Use 300x300
                                            sizes image. Keep some blank space around main object of your image as we
                                            had to crop some edge in different devices to make it responsive.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Product Videos</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Video Provider</label>
                                    <div class="col-md-8">
                                        <select class="form-control aiz-selectpicker" name="video_provider" id="video_provider">
                                            <option value="youtube">Youtube</option>
                                            <option value="dailymotion">Dailymotion</option>
                                            <option value="vimeo">Vimeo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Video Link</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="video_link" placeholder="Video Link">
                                        <small class="text-muted">Use proper link without extra parameter. Don&#039;t
                                            use short share link/embeded iframe code.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Product Variation</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" value="Colors" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control aiz-selectpicker" data-live-search="true" data-selected-text-format="count" name="colors[]" id="colors" multiple disabled>
                                            <option value="#F0F8FF" data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:#F0F8FF'></span><span>AliceBlue</span></span>">
                                            </option>
                                            <option value="#9966CC" data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:#9966CC'></span><span>Amethyst</span></span>">
                                            </option>
                                            <option value="#FAEBD7" data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:#FAEBD7'></span><span>AntiqueWhite</span></span>">
                                            </option>
                                            <option value="#00FFFF" data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:#00FFFF'></span><span>Aqua</span></span>">
                                            </option>
                                            <option value="#9ACD32" data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:#9ACD32'></span><span>YellowGreen</span></span>">
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input value="1" type="checkbox" name="colors_active">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" value="Attributes" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="choice_attributes[]" id="choice_attributes" class="form-control aiz-selectpicker" data-selected-text-format="count" data-live-search="true" multiple data-placeholder="Choose Attributes">
                                            <option value="1">Size</option>
                                            <option value="2">Fabric</option>
                                            <option value="4">Sleeve</option>
                                            <option value="5">Wheel</option>
                                            <option value="6">Liter</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <p>Choose the attributes of this product and then input values of each attribute</p>
                                    <br>
                                </div>

                                <div class="customer_choice_options" id="customer_choice_options">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Product price + stock</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Unit price <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Unit price" name="unit_price" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label" for="start_date_start">Discount Date Range Start</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="date_range_start" placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label" for="start_date_end">Discount Date Range End</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="date_range_end" placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">Discount <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Discount" name="discount" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Product Discount % Type</p>
                                    </div>
                                </div>
                                <div id="show-hide-div">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">Quantity <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="number" lang="en" min="0" value="0" step="1" placeholder="Quantity" name="current_stock" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">
                                            SKU
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="SKU" name="sku" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="sku_combination" id="sku_combination">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">
                                    Shipping Configuration
                                </h5>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">Free Shipping</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="shipping_type" value="free" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Low Stock Quantity Warning</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="name">
                                        Quantity
                                    </label>
                                    <input type="number" name="low_stock_quantity" value="1" min="0" step="1" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">
                                    Stock Visibility State
                                </h5>
                            </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">Show Stock Quantity</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="stock_visibility_state" value="quantity" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">Hide Stock</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="stock_visibility_state" value="hide">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Cash on Delivery</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">Status</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" name="cash_on_delivery" value="1" checked="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Featured</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">Status</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" name="featured" value="1">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Estimate Shipping Time</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="name">
                                        Shipping Days
                                    </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="est_shipping_days" min="1" step="1" placeholder="Shipping Days">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Vat &amp; TAX</h5>
                            </div>
                            <div class="card-body">
                                <label for="name">
                                    Tax
                                    <input type="hidden" value="3" name="tax_id[]">
                                </label>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Tax" name="tax[]" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <p>Vat % Type</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Description</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="submit" name="button" value="draft" class="btn btn-warning">Save As
                                Draft</button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Third group">
                            <button type="submit" name="button" value="unpublish" class="btn btn-primary">Save &amp;
                                Unpublish</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Second group">
                            <button type="submit" name="button" value="publish" class="btn btn-success">Save &amp;
                                Publish</button>
                        </div>
                    </div>
                </div><br><br>
            </form>
        </div>

    </div>

</div><!-- .aiz-main-content -->

@endsection
