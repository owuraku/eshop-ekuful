<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Customize web Routes
|--------------------------------------------------------------------------
|
 */

$prefixProduct = sc_config('PREFIX_PRODUCT')??'product';
$suffix = sc_config('SUFFIX_URL')??'';
$langUrl = config('app.seoLang');

Route::group(['prefix' => $langUrl.$prefixProduct], function ($router) use ($suffix) {
    $router->get('/{alias}'.$suffix.'/modal', 'App\Http\Controllers\ShopProductController@productDetailProcessModal')
        ->name('product.modalDetail');
});