<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
});


Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'Admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');


    Route::group(["as"=>'category.', "prefix"=>'category'],function(){
        Route::get('index', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store']);
        Route::get('edit/{id}', [CategoryController::class, 'edit']);
        Route::post('update/{id}', [CategoryController::class, 'store']);
        Route::get('destroy/{id}', [CategoryController::class, 'destroy']);
    });//category end

    Route::group(["as"=>'brand.', "prefix"=>'brand'],function(){
        Route::get('index', [BrandController::class, 'index'])->name('index');
        Route::post('store', [BrandController::class, 'store']);
        Route::get('edit/{id}', [BrandController::class, 'edit']);
        Route::post('update/{id}', [BrandController::class, 'store']);
        Route::get('destroy/{id}', [BrandController::class, 'destroy']);
    });//brand end

    Route::group(["as"=>'attribute.', "prefix"=>'attribute'],function(){
        Route::get('index', [AttributeController::class, 'index'])->name('index');
        Route::post('store', [AttributeController::class, 'store']);
        Route::get('edit/{id}', [AttributeController::class, 'edit']);
        Route::post('update/{id}', [AttributeController::class, 'store']);
        Route::get('destroy/{id}', [AttributeController::class, 'destroy']);
    });//attribute end

    Route::group(["as"=>'attributeValue.', "prefix"=>'attributeValue'],function(){
        Route::get('index', [AttributeValueController::class, 'index'])->name('index');
        Route::post('store', [AttributeValueController::class, 'store']);
        Route::get('edit/{id}', [AttributeValueController::class, 'edit']);
        Route::post('update/{id}', [AttributeValueController::class, 'store']);
        Route::get('destroy/{id}', [AttributeValueController::class, 'destroy']);
    });//attribute end

    Route::group(["as"=>'color.', "prefix"=>'color'],function(){
        Route::get('index', [ColorController::class, 'index'])->name('index');
        Route::post('store', [ColorController::class, 'store']);
        Route::get('edit/{id}', [ColorController::class, 'edit']);
        Route::post('update/{id}', [ColorController::class, 'store']);
        Route::get('destroy/{id}', [ColorController::class, 'destroy']);
    });//attribute end

    Route::group(["as"=>'product.', "prefix"=>'product'],function(){
        Route::get('index', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::get('view/{id}', [ProductController::class, 'show']);
        Route::post('store', [ProductController::class, 'store']);
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::post('update/{id}', [ProductController::class, 'store']);
        Route::get('destroy/{id}', [ProductController::class, 'destroy']);

        Route::get('attribute_value/{id}', [ProductController::class, 'attribute_value']);
        Route::get('variant/{id}', [ProductController::class, 'product_price_variant']);
    });//attribute end

    Route::group(["as"=>'variant.', "prefix"=>'variant'],function(){
        Route::get('index', [ProductVariantController::class, 'index'])->name('index');
        Route::get('create', [ProductVariantController::class, 'variant_create'])->name('create');
        Route::post('store', [ProductVariantController::class, 'store']);
        Route::get('edit/{id}', [ProductVariantController::class, 'edit']);
        Route::post('update/{id}', [ProductVariantController::class, 'update']);
        Route::get('destroy/{id}', [ProductVariantController::class, 'destroy']);
        Route::get('attribute_value/{id}', [ProductVariantController::class, 'attribute_value']);
    });//attribute end

    Route::get('/price-variant/{id}', [ProductVariantContr\oller::class, 'price_variant']);

});



