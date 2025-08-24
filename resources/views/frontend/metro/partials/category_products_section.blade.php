@if (count(get_category_wise_Product(25)) > 0)
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            @foreach (get_category_wise_Product(25) as $category)
                <div class="mb-3">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                            <span>{{ $category->getTranslation('name') }}</span>
                        </h3>
                        <div>
                            <a href="{{ url('/category/' . $category->slug) }}"
                               class="btn btn-outline-primary btn-sm fw-600">
                                {{ translate('Browse Category') }}
                            </a>
                        </div>
                    </div>

                    <!-- Products Grid (no slider) -->
                    <div class="row gutters-5 gutters-md-10">
                        @foreach ($category->products as $product)
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
                                <div class="h-100 border rounded-2">
                                    <div class="p-2 p-md-3">
                                        @include('frontend.'.get_setting('homepage_select').'.partials.product_box_1', ['product' => $product])
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @if (!$loop->last)
                    <hr class="my-3">
                @endif
            @endforeach
        </div>
    </section>
@endif
