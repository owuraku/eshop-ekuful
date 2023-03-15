<?php
//Your functions
 
// function demoFunction() {
//     echo "Hello world!";
// }

use SCart\Core\Front\Models\ShopProduct;

function getImageTwo(ShopProduct $product){
     $imageCount = $product->images->count();
     if ($imageCount > 1){
             $thumb =  sc_image_get_path($product->images->pluck('image')->all()[1]);
            return sc_file($thumb);
        }

        return sc_file($product->getThumb());
}