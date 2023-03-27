@php
    /*
$layout_page = shop_product_detail
    **Variables:**
- $product: no paginate
- $productRelation: no paginate
*/
@endphp

@extends($sc_templatePath . '.layout')

{{-- block_main --}}
@section('block_main_content_center')
    <!-- Single Product-->
    @include($sc_templatePath . '.common.product_detail', ['product' => $product])


    @if ($productRelation->count())
        <!-- Related Products-->
        <section class="section section-sm section-last bg-default">
            <div class="container">
                <h4 class="font-weight-sbold">{{ sc_language_render('front.products_recommend') }}</h4>
                <div class="row row-lg row-30 row-lg-50 justify-content-center">
                    @foreach ($productRelation as $key => $productRel)
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            {{-- Render product single --}}
                            @include($sc_templatePath . '.common.product_single', [
                                'product' => $productRel,
                            ])
                            {{-- //Render product single --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!--/product-details-->
@endsection
{{-- block_main --}}


@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    {{-- //script here --}}
@endpush
