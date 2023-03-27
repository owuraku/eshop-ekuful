<article class="">
    <div class="">
        <div class="product-grid">
            <div class="product-image">
                <a href="{{ $product->getUrl() }}" class="image">
                    <img class="pic-1" src="{{ sc_file($product->getThumb()) }}" alt="{{ $product->name }}" />
                    <img class="pic-2" src="{{ getImageTwo($product) }}" alt="{{ $product->name }}" />
                </a>
                <span class="product-hot-label">hot</span>
                <ul class="product-links">
                    <li><a onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')"
                            data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    <li><a data-product-name="{{ $product->name }}" class="open-details-modal"
                            href="{{ $product->getUrl() }}/modal" data-tip="Quick View"><i class="fa fa-search"></i></a>
                    </li>

                </ul>
            </div>
            <div class="product-content">
                <!-- <a class="add-to-cart" href="{{ $product->getUrl() }}">
          <i class="fas fa-plus"></i>Add to cart
        </a> -->

                @if ($product->allowSale() && !sc_config('product_cart_off'))
                    <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')"
                        class="add-to-cart" data-tip="Add to Cart"><i class="far fa-cart-plus"></i> &nbsp;
                        {{ sc_language_render('action.add_to_cart') }}</a>
                @endif

                <h3 class="title">{{ $product->name }}</h3>
                {{-- <ul class="rating">
          <li class="fas fa-star"></li>
          <li class="fas fa-star"></li>
          <li class="fas fa-star"></li>
          <li class="far fa-star"></li>
          <li class="far fa-star"></li>
        </ul> --}}
            </div>
        </div>
        <!-- <h5 class="product-title"><a href=""></a></h5> -->

        @if (empty($hiddenStore))
            {!! $product->displayVendor() !!}
        @endif

        @if ($product->allowSale() && !sc_config('product_cart_off'))
            <!-- <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')"
      class="button button-secondary button-zakaria add-to-cart-list">
      <i class="fa fa-cart-plus"></i> {{ sc_language_render('action.add_to_cart') }}</a> -->
        @endif

        {!! $product->showPrice() !!}
    </div>

    @if ($product->price != $product->getFinalPrice() && $product->kind != SC_PRODUCT_GROUP)
        <span><img class="product-badge new" src="{{ sc_file($sc_templateFile . '/images/home/sale.png') }}"
                class="new" alt="" /></span>
    @elseif($product->kind == SC_PRODUCT_BUILD)
        <span><img class="product-badge new" src="{{ sc_file($sc_templateFile . '/images/home/bundle.png') }}"
                class="new" alt="" /></span>
    @elseif($product->kind == SC_PRODUCT_GROUP)
        <span><img class="product-badge new" src="{{ sc_file($sc_templateFile . '/images/home/group.png') }}"
                class="new" alt="" /></span>
    @endif
    <div class="product-button-wrap">

        @if (!sc_config('product_wishlist_off'))
            <div class="product-button">
                <a class="button button-secondary button-zakaria add-to-cart-list"
                    onclick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')">
                    <i class="fas fa-heart"></i>
                </a>
            </div>
        @endif

        @if (!sc_config('product_compare_off'))
            <div class="product-button">
                <a class="button button-primary button-zakaria"
                    onclick="addToCartAjax('{{ $product->id }}','compare','{{ $product->store_id }}')">
                    <i class="fa fa-exchange"></i>
                </a>
            </div>
        @endif
    </div>
</article>
