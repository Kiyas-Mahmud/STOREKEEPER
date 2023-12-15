<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// routes/web.php

Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
