<style>
    .sc-overlay {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transform: -webkit-translate(-50%, -50%);
        transform: -moz-translate(-50%, -50%);
        transform: -ms-translate(-50%, -50%);
        color: #1f222b;
        z-index: 9999;
        background: rgba(255, 255, 255, 0.7);
    }

    #sc-loading {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 50;
        background: rgba(255, 255, 255, 0.7);
    }

    /*end loading */

    /*price*/
    .sc-new-price {
        color: #FE980F;
        font-size: 20px;
        padding: 10px 5px;
        font-weight: bold;
    }

    .sc-old-price {
        text-decoration: line-through;
        color: #a95d5d;
        font-size: 18px;
        padding: 10px;
    }

    /*end price*/
    .sc-product-build {
        font-size: 20px;
        font-weight: bold;
    }

    .sc-product-build img {
        width: 50px;
    }

    .sc-product-group img {
        width: 100px;
        cursor: pointer;
    }

    .sc-product-group:hover {
        box-shadow: 0px 0px 2px #999;
    }

    .sc-product-group:active {
        box-shadow: 0px 0px 2px #ff00ff;
    }

    .sc-product-group.active {
        box-shadow: 0px 0px 2px #ff00ff;
    }

    .sc-shipping-address td {
        padding: 3px !important;
    }

    .sc-shipping-address textarea,
    .sc-shipping-address input[type="text"],
    .sc-shipping-address option {
        width: 100%;
        padding: 7px !important;
    }

    .row_cart>td {
        vertical-align: middle !important;
    }

    input[type="number"] {
        text-align: center;
        padding: 2px;
    }

    .sc-notice {
        clear: both;
        clear: both;
        font-size: 20px;
        background: #f3f3f3;
        width: 100%;
    }

    img.new {
        position: absolute;
        right: 0px;
        top: 0px;
        padding: 0px !important;
    }

    .pointer {
        cursor: pointer;
    }

    .add-to-cart-list {
        padding: 5px 10px !important;
        margin: 2px !important;
        letter-spacing: 0px !important;
        font-size: 12px !important;
        border-radius: 5px;
    }

    .help-block {
        font-size: 12px;
        color: red;
        font-style: italic;
    }

    .post-minimal-time {
        font-size: 10px;
        font-style: italic;
    }

    .sc-point {
        cursor: pointer;
    }

    /* new card */

    .product-grid {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        transition: all 0.7s ease 0s;
    }

    .product-grid:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15), 10px 10px rgba(0, 0, 0, 0.05);
    }

    .product-grid .product-image {
        overflow: hidden;
        position: relative;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
    }

    .product-grid .product-image .pic-1 {
        transition: all 200ms ease 0s;
    }

    .product-grid .product-image:hover .pic-1 {
        opacity: 0;
    }

    .product-grid .product-image .pic-2 {
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 3s;
    }

    .product-grid .product-image:hover .pic-2 {
        opacity: 1;
        transform: scale(1.5);
    }

    .product-grid .product-hot-label {
        color: #fff;
        background: #222;
        font-size: 14px;
        font-weight: 500;
        text-transform: capitalize;
        padding: 7px 12px;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    .product-grid .product-links {
        background: #f1f1f1;
        width: 100%;
        padding: 0;
        margin: 0;
        list-style: none;
        opacity: 0;
        transform: scaleX(2);
        position: absolute;
        bottom: -50px;
        left: 0;
        transition: all 0.5s ease-in-out 0s;
    }

    .product-grid:hover .product-links {
        opacity: 1;
        transform: scaleX(1);
        bottom: 0;
    }

    .product-grid .product-links li {
        margin: 0 -2px;
        display: inline-block;
    }

    .product-grid .product-links li a {
        color: #444;
        font-size: 16px;
        line-height: 41px;
        width: 40px;
        height: 40px;
        display: block;
        position: relative;
        transition: all .2s ease-out;
    }

    .product-grid .product-links li a:hover {
        color: #fff;
        background-color: #88c000;
    }

    .product-grid .product-links li a:before,
    .product-grid .product-links li a:after {
        content: attr(data-tip);
        color: #fff;
        background-color: #222;
        font-size: 12px;
        line-height: 18px;
        padding: 5px 10px;
        white-space: nowrap;
        display: none;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: -40px;
        transition: all 0.3s;
    }

    .product-grid .product-links li a:after {
        content: '';
        height: 15px;
        width: 15px;
        transform: translateX(-50%) rotate(45deg);
        top: -25px;
        z-index: -1;
    }

    .product-grid .product-links li a:hover:before,
    .product-grid .product-links li a:hover:after {
        display: block;
    }

    .product-grid .product-content {
        background: #fff;
        padding: 15px 12px;
        position: relative;
    }

    .product-grid .add-to-cart {
        color: #88c000;
        font-size: 15px;
        font-weight: 600;
        transform: translateX(-50%);
        position: absolute;
        top: 13px;
        left: 50%;
        opacity: 0;
        transition: all 0.5s ease 0s;
        z-index: 2;
    }

    .product-grid:hover .add-to-cart {
        opacity: 1;
        cursor: pointer;
    }

    .product-grid .add-to-cart:hover {
        background: #88c000;
        color: white;
        padding: 5px;
        border-radius: 6px;
    }

    .product-grid .add-to-cart i.fas {
        font-size: 14px;
        margin: 0 5px 0 0;
    }

    .product-grid .title {
        font-size: 16px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 10px;
        transition: all 0.3s ease 0s;
    }

    .product-grid .title a {
        color: #444;
    }

    .product-grid:hover .title {
        opacity: 0;
    }

    .product-grid .rating {
        color: #1c1a19;
        font-size: 12px;
        padding: 0;
        margin: 0 0 11px;
        list-style: none;
    }

    .product-grid .price {
        color: #88c000;
        font-size: 16px;
        font-weight: 700;
    }

    @media screen and (max-width: 990px) {
        .product-grid {
            margin: 0 0 30px;
        }
    }
</style>
