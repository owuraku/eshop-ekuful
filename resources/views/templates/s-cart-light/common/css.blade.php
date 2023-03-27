<style>
    .cart-img {
        max-width: 250px;
        max-height: 250px;
    }

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
        height: 250px;
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
<style>
    #appModalLong .modal-dialog {
        width:
    }
</style>
<style>
    /*!
 * Bare Bones Slider
 * http://www.bbslider.com/
 */

    .bbslider-wrapper {
        display: block;
        overflow: hidden;
        position: relative;
    }

    .bbslider-wrapper {
        -o-transition-property: height;
        -moz-transition-property: height;
        -webkit-transition-property: height;
        transition-property: height;
    }

    .bbslider-wrapper>.panel {
        display: block;
        position: absolute;
        width: 100%;
    }

    .bbslider-wrapper>.panel.init,
    .bbslider-wrapper>.panel.init>.panel-inner {
        -o-transition: none !important;
        -moz-transition: none !important;
        -webkit-transition: none !important;
        transition: none !important;
    }

    .bbslider-wrapper>.panel>.panel-inner {
        -o-transition-duration: inherit;
        -moz-transition-duration: inherit;
        -webkit-transition-duration: inherit;
        transition-duration: inherit;
        -o-transition-timing-function: inherit;
        -moz-transition-timing-function: inherit;
        -webkit-transition-timing-function: inherit;
        transition-timing-function: inherit;
    }

    .bbslider-wrapper.loop-false.first-panel .prev-control-wrapper {
        display: none;
    }

    .bbslider-wrapper.loop-false.last-panel .next-control-wrapper {
        display: none;
    }

    .bbslider-wrapper.carousel>.panel {
        overflow: hidden;
    }

    .bbslider-wrapper>.panel.fade {
        display: none;
        -o-transition-property: opacity;
        -moz-transition-property: opacity;
        -webkit-transition-property: opacity;
        transition-property: opacity;
        opacity: 0;
    }

    .bbslider-wrapper>.panel.mask {
        display: none;
        -webkit-mask-position: 0% 0;
        mask-position: 0% 0;
        -o-transition-property: mask-position;
        -moz-transition-property: mask-position;
        -webkit-transition-property: -webkit-mask-position;
        transition-property: mask-position, -webkit-mask-position;
    }

    .bbslider-wrapper>.panel.mask.hide {
        -webkit-mask-position: 100% 0;
        mask-position: 100% 0;
        z-index: 5;
    }

    .bbslider-wrapper.carousel>.panel.fade {
        opacity: 0;
        display: block;
    }

    .bbslider-wrapper>.panel.slide {
        -o-transition-property: transform;
        -moz-transition-property: transform;
        -webkit-transition-property: transform;
        transition-property: transform;
        display: block;
    }

    .bbslider-wrapper>.panel.slideVert {
        -o-transition-property: transform;
        -moz-transition-property: transform;
        -webkit-transition-property: transform;
        transition-property: transform;
        display: block;
    }

    .bbslider-wrapper>.panel.blind {
        overflow: hidden;
        position: absolute;
        height: 100%;
        width: 0;
    }

    .bbslider-wrapper>.panel.blind>.panel-inner {
        position: absolute;
    }

    .bbslider-wrapper>.panel.blind,
    .bbslider-wrapper>.panel.blind .panel-inner {
        -o-transition-property: left, right, margin, width;
        -moz-transition-property: left, right, margin, width;
        -webkit-transition-property: left, right, margin, width;
        transition-property: left, right, margin, width;
    }

    .bbslider-wrapper.carousel>.panel.slide {
        -o-transition-property: left;
        -moz-transition-property: left;
        -webkit-transition-property: left;
        transition-property: left;
    }

    .bbslider-wrapper>.panel.none {
        display: none;
    }

    .bbslider-wrapper>.panel.none.active {
        display: block;
    }

    .bbslider-wrapper.carousel>.panel.none {
        position: absolute;
        display: block;
    }



    /* Custom easing transitions */

    .bbslider-wrapper.ease>.panel {
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
    }

    .bbslider-wrapper.ease-in>.panel {
        -webkit-transition-timing-function: ease-in;
        -moz-transition-timing-function: ease-in;
        -o-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
    }

    .bbslider-wrapper.ease-out>.panel {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .bbslider-wrapper.ease-in-out>.panel {
        -webkit-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-timing-function: ease-in-out;
    }

    .bbslider-wrapper.linear>.panel {
        -webkit-transition-timing-function: linear;
        -moz-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        transition-timing-function: linear;
    }

    .bbslider-wrapper.easeInQuad>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
        -moz-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
        -o-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
        transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
    }

    .bbslider-wrapper.easeInCubic>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
        -moz-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
        -o-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
        transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    }

    .bbslider-wrapper.easeInQuart>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
        -moz-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
        -o-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
        transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
    }

    .bbslider-wrapper.easeInQuint>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -moz-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -o-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    }

    .bbslider-wrapper.easeInSine>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
        -moz-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
        -o-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
        transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
    }

    .bbslider-wrapper.easeInExpo>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
        -moz-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
        -o-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
        transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
    }

    .bbslider-wrapper.easeInCirc>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
        -moz-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
        -o-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
        transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
    }

    .bbslider-wrapper.easeInBack>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
        -moz-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
        -o-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
        transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
    }

    .bbslider-wrapper.easeOutQuad>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
        -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
        -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
        transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    }

    .bbslider-wrapper.easeOutCubic>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        -o-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    }

    .bbslider-wrapper.easeOutQuart>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
        -o-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
        transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
    }

    .bbslider-wrapper.easeOutQuint>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
        -o-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
        transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
    }

    .bbslider-wrapper.easeOutSine>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
        -o-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
        transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
    }

    .bbslider-wrapper.easeOutExpo>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
        -o-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
        transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
    }

    .bbslider-wrapper.easeOutCirc>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
        -o-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
        transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
    }

    .bbslider-wrapper.easeOutBack>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
    }

    .bbslider-wrapper.easeInOutQuad>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
        -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
        -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
        transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    }

    .bbslider-wrapper.easeInOutCubic>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        -o-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .bbslider-wrapper.easeInOutQuart>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        -o-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .bbslider-wrapper.easeInOutQuint>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
        -moz-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
        -o-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
        transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
    }

    .bbslider-wrapper.easeInOutSine>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
        -moz-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
        -o-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
        transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
    }

    .bbslider-wrapper.easeInOutExpo>.panel {
        -webkit-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
        -moz-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
        -o-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
        transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
    }

    .bbslider-wrapper.easeInOutCirc>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
        -moz-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
        -o-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
        transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
    }

    .bbslider-wrapper.easeInOutBack>.panel {
        -webkit-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
    }
</style>
<style>
    .bbslider-wrapper .control-wrapper {
        position: absolute;
        top: 50%;
        cursor: pointer;
        z-index: 2;
    }

    .bbslider-wrapper .next-control-wrapper {
        right: 0;
    }
</style>
