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

if (!function_exists('sc_generate_id')){
        function sc_generate_id($type="shop_order"){
                $id = 'EK-'.date('Ymd').'-'.strtoupper(sc_token(5));
        switch ($type) {
            case 'shop_store':
               return $id;
                break;
            case 'shop_order':
                return $id;
                break;
            
            default:
                return sc_uuid();
                break;
        }
        }
}