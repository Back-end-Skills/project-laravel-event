<?php

    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        $name = "Madara";
        $arr  = [5,8,74,58,]; 
        $city = ['new york', 'osaka', 'belém','são paulo'];
        return view('welcome', ["nome"=>$name, "arr"=>$arr, "city"=>$city]);
    });

    Route::get('/product', function () {
        return view('product');
    });

    Route::get('/products/{id?}', function ($id = null) {
        return view('products',["id"=>$id]);
    });

    Route::get('/contact', function () {
        return view('contact');
    });
