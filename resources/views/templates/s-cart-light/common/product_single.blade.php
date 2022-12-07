<style>
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
    background: whitesmoke;
    height: 200px;
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
    transition: all 1s ease 0s;
  }

  .product-grid:hover .add-to-cart {
    opacity: 1;
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
    display: flex;
    justify-content: center;
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


<article class="">
  <div class="">
    <div class="product-grid">
      <div class="product-image">
        <a href="{{ $product->getUrl() }}" class="image">
          <img class="pic-1" src="{{ sc_file($product->getThumb()) }}" alt="{{ $product->name }}" />
          <img class="pic-2" src="{{ sc_file($product->getThumb()) }}" alt="{{ $product->name }}" />
        </a>
        <span class="product-hot-label">hot</span>
        <ul class="product-links">
          <li><a href="#" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
          <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>
      <div class="product-content">
        <!-- <a class="add-to-cart" href="{{ $product->getUrl() }}">
          <i class="fas fa-plus"></i>Add to cart
        </a> -->

        @if ($product->allowSale() && !sc_config('product_cart_off'))
        <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" class="add-to-cart">
          <i class="fa fa-cart-plus"></i> {{sc_language_render('action.add_to_cart')}}</a>
        @endif

        <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
        <ul class="rating">
          <li class="fas fa-star"></li>
          <li class="fas fa-star"></li>
          <li class="fas fa-star"></li>
          <li class="far fa-star"></li>
          <li class="far fa-star"></li>
        </ul>
      </div>
    </div>
    <!-- <h5 class="product-title"><a href=""></a></h5> -->

    @if (empty($hiddenStore))
    {!! $product->displayVendor() !!}
    @endif

    @if ($product->allowSale() && !sc_config('product_cart_off'))
    <!-- <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')"
      class="button button-secondary button-zakaria add-to-cart-list">
      <i class="fa fa-cart-plus"></i> {{sc_language_render('action.add_to_cart')}}</a> -->
    @endif

    {!! $product->showPrice() !!}
  </div>

  @if ($product->price != $product->getFinalPrice() && $product->kind !=SC_PRODUCT_GROUP)
  <span><img class="product-badge new" src="{{ sc_file($sc_templateFile.'/images/home/sale.png') }}" class="new"
      alt="" /></span>
  @elseif($product->kind == SC_PRODUCT_BUILD)
  <span><img class="product-badge new" src="{{ sc_file($sc_templateFile.'/images/home/bundle.png') }}" class="new"
      alt="" /></span>
  @elseif($product->kind == SC_PRODUCT_GROUP)
  <span><img class="product-badge new" src="{{ sc_file($sc_templateFile.'/images/home/group.png') }}" class="new"
      alt="" /></span>
  @endif
  <div class="product-button-wrap">

    @if (!sc_config('product_wishlist_off'))
    <div class="product-button">
      <a class="button button-secondary button-zakaria"
        onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')">
        <i class="fas fa-heart"></i>
      </a>
    </div>
    @endif

    @if (!sc_config('product_compare_off'))
    <div class="product-button">
      <a class="button button-primary button-zakaria"
        onClick="addToCartAjax('{{ $product->id }}','compare','{{ $product->store_id }}')">
        <i class="fa fa-exchange"></i>
      </a>
    </div>
    @endif
  </div>
</article>