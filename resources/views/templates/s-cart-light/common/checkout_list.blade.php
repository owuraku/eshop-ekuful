<div class="col-md-12">
    <div class="table-responsive">
        <table class="new-table">
            <thead>
                <tr>
                    <th style="width: 50px;">No.</th>
                    <th>{{ sc_language_render('product.name') }}</th>
                    <th>{{ sc_language_render('product.price') }}</th>
                    <th>{{ sc_language_render('product.quantity') }}</th>
                    <th>{{ sc_language_render('product.subtotal') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItem as $item)
                    @php
                        $n = isset($n) ? $n : 0;
                        $n++;
                        // Check product in cart
                        $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                        if (!$product) {
                            continue;
                        }
                        
                        // End check product in cart
                        
                    @endphp
                    <tr
                        class="row_cart form-group {{ session('arrErrorQty')[$product->id] ?? '' }}{{ session('arrErrorQty')[$product->id] ?? 0 ? ' has-error' : '' }}">
                        <td>{{ $n }}</td>
                        <td>
                            <div>
                                <div class="img-div">
                                    <a href="{{ $product->getUrl() }}">
                                        <img src="{{ sc_file($product->getImage()) }}" class="cart-img"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <div class="info-div">
                                    <span>
                                        <a href="{{ $product->getUrl() }}"
                                            class="row_cart-name cart-name">{{ $product->name }}</a><br />
                                        <span style="font-size: 14px">{{ sc_language_render('product.sku') }} :
                                            {{ $product->sku }}</span>
                                        {!! $product->displayVendor() !!}<br>
                                        {{-- Process attributes --}}
                                        @if ($item->options->count())
                                            @foreach ($item->options as $groupAtt => $att)
                                                <span style="font-size: 14px">{{ $attributesGroup[$groupAtt] }}:
                                                    {!! sc_render_option_price($att) !!}</span>
                                            @endforeach
                                        @endif
                                        {{-- //end Process attributes --}}
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </td>


                        <td>{!! $product->showPrice() !!}</td>

                        <td class="cart-col-qty">
                            <div class="cart-qty">
                                {{ $item->qty }}
                            </div>
                        </td>
                        @php
                            $item->subtotal = 0;
                        @endphp
                        {{-- <td align="left">
                            {{ sc_currency_render($item->subtotal) }}
                        </td> --}}
                        <td align="left">
                            <div class="alert alert-success">
                                Call For Price
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@push('scripts')
@endpush
