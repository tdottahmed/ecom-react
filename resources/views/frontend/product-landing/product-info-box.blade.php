<section class="bg-gray-50 py-10">
  <div class="container mx-auto px-4">
    <!-- Section Header -->
    <div class="mx-auto max-w-6xl">
      <div class="mb-10 text-center">
        <h2 class="mb-3 text-3xl font-bold text-gray-800">Product Information</h2>
        <p class="mx-auto max-w-2xl text-gray-600">Complete details about {{ $detailedProduct->name ?? 'this product' }}
        </p>
      </div>

      <div class="overflow-hidden rounded-2xl bg-white shadow-sm">
        <section class="py-10">
          <div class="container mx-auto max-w-6xl px-4">
            <!-- Product Image -->
            <div class="mb-8">
              <img src="{{ $detailedProduct->photos ? uploaded_asset(explode(',', $detailedProduct->photos)[0]) : asset('images/placeholder.jpg') }}"
                   alt="{{ $detailedProduct->name }}" class="h-auto w-full rounded-lg shadow-lg"
                   id="main-product-image">
            </div>

            <!-- Product Info Box -->
            <div class="space-y-6 rounded-xl bg-white text-center md:p-8" id="product-info-box">
              <h1 class="text-2xl font-bold text-gray-900 md:text-3xl">{{ $detailedProduct->name }}</h1>

              @if ($detailedProduct->brand)
                <p class="text-sm text-gray-600">Brand:
                  <span class="font-medium">{{ $detailedProduct->brand->name }}</span>
                </p>
              @endif

              <!-- Price -->
              <div class="space-x-3">
                <span class="variant-price text-3xl font-bold text-indigo-600">
                  ৳{{ number_format($detailedProduct->unit_price, 2) }}
                </span>
                @if ($detailedProduct->discount > 0)
                  @php
                    $originalPrice =
                        $detailedProduct->discount_type == 'percent'
                            ? $detailedProduct->unit_price / (1 - $detailedProduct->discount / 100)
                            : $detailedProduct->unit_price + $detailedProduct->discount;
                  @endphp
                  <span class="text-gray-400 line-through">৳{{ number_format($originalPrice, 2) }}</span>
                  <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-600">
                    @if ($detailedProduct->discount_type == 'percent')
                      {{ $detailedProduct->discount }}% OFF
                    @else
                      ৳{{ $detailedProduct->discount }} OFF
                    @endif
                  </span>
                @endif
              </div>

              <!-- Quantity Selector -->
              <div class="mt-3 flex items-center justify-center space-x-2">
                <button id="decrease-qty"
                        class="rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 transition-colors hover:bg-gray-100">-</button>
                <input type="number" id="product-quantity" class="w-20 rounded-lg border border-gray-300 text-center"
                       value="1" min="1" max="{{ $detailedProduct->current_stock }}">
                <button id="increase-qty"
                        class="rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 transition-colors hover:bg-gray-100">+</button>
              </div>

              <!-- Variations -->
              @if (isset($detailedProduct->stocks) && count($detailedProduct->stocks) > 0)
                <div class="mb-8 mt-8">
                  <!-- Section Header -->
                  <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100">
                      <i class="fas fa-palette text-indigo-600"></i>
                    </div>
                    <div class="flex-1">
                      <h3 class="text-xl font-semibold text-gray-800">Available Variations</h3>
                      <p class="text-sm text-gray-600">Select your preferred option</p>
                    </div>
                    <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-600">
                      {{ count($detailedProduct->stocks) }} options
                    </span>
                  </div>

                  <!-- Variation Grid -->
                  <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    @foreach ($detailedProduct->stocks as $stock)
                      <button class="variation-option {{ $stock->qty == 0 ? 'border-gray-200 bg-gray-50 cursor-not-allowed opacity-60' : 'border-gray-200 bg-white' }} relative rounded-xl border-2 p-4 text-left transition-all duration-200"
                              data-variant-id="{{ $stock->id }}" data-price="{{ $stock->price }}"
                              data-sku="{{ $stock->sku }}" data-qty="{{ $stock->qty }}"
                              data-variant="{{ $stock->variant }}">
                        <div class="variation-name {{ $stock->qty == 0 ? 'text-gray-500' : '' }} mb-2 font-medium">
                          {{ $stock->variant }}
                        </div>

                        <!-- Price -->
                        <div
                             class="price {{ $stock->qty == 0 ? 'text-gray-500' : 'text-red-500' }} {{ $loop->first && $stock->qty > 0 ? '!text-red-600' : '' }} mb-2 text-lg font-bold">
                          ৳{{ number_format($stock->price, 2) }}
                        </div>

                        <!-- Stock Status -->
                        <div class="stock-status flex items-center gap-1 text-xs">
                          @if ($stock->qty == 0)
                            <i class="fas fa-times-circle text-red-400"></i>
                            <span class="font-medium text-red-500">Out of Stock</span>
                          @elseif($stock->qty <= 5)
                            <i class="fas fa-exclamation-triangle text-orange-400"></i>
                            <span class="font-medium text-orange-500">Only {{ $stock->qty }} left</span>
                          @elseif($stock->qty <= 10)
                            <i class="fas fa-info-circle text-blue-400"></i>
                            <span class="font-medium text-blue-500">Low Stock</span>
                          @else
                            <i class="fas fa-check-circle text-green-400"></i>
                            <span class="font-medium text-green-500">In Stock</span>
                          @endif
                        </div>
                      </button>
                    @endforeach
                  </div>
                </div>
              @endif
            </div>
          </div>
        </section>

        <!-- Description Section -->
        <div class="rounded-xl border-t border-gray-100 p-6 lg:p-8">
          <div class="mb-6 flex items-center">
            <div class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
              <i class="fas fa-file-alt text-lg text-indigo-600"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Product Description</h3>
          </div>

          <div class="prose max-w-none text-gray-700">
            {!! $detailedProduct->description ?? 'No description available' !!}
          </div>
        </div>

        <!-- Specifications Section -->
        <div class="rounded-xl border-t border-gray-100 bg-gray-50 p-6 lg:p-8">
          <div class="mb-6 flex items-center">
            <div class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
              <i class="fas fa-list-alt text-lg text-indigo-600"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Product Specifications</h3>
          </div>

          <div class="space-y-6">
            <div class="grid grid-cols-1 gap-4 text-gray-700 md:grid-cols-2">
              <div class="font-semibold">Brand:</div>
              <div>{{ $detailedProduct->brand->name ?? 'N/A' }}</div>

              <div class="font-semibold">Unit:</div>
              <div>{{ $detailedProduct->unit ?? 'N/A' }}</div>

              <div class="font-semibold">Weight:</div>
              <div>{{ $detailedProduct->weight }} {{ $detailedProduct->unit }}</div>

              <div class="font-semibold">Minimum Quantity:</div>
              <div>{{ $detailedProduct->min_qty }}</div>

              @if ($detailedProduct->cash_on_delivery)
                <div class="font-semibold">Cash on Delivery:</div>
                <div class="font-medium text-green-600">Available</div>
              @endif
            </div>

            @if (isset($detailedProduct->features) && count($detailedProduct->features) > 0)
              <div class="mt-6 border-t border-gray-200 pt-6">
                <h4 class="mb-4 font-semibold text-gray-800">Additional Features</h4>
                <div class="flex flex-wrap gap-2">
                  @foreach ($detailedProduct->features as $feature)
                    <span
                          class="rounded-full bg-indigo-100 px-4 py-2 text-sm font-medium text-indigo-800">{{ $feature }}</span>
                  @endforeach
                </div>
              </div>
            @endif

            <!-- Availability -->
            <div class="mt-4 flex items-center justify-between rounded-lg border border-gray-200 bg-white p-4">
              <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-xl text-green-500"></i>
                <div>
                  <span class="font-semibold text-green-600">In Stock</span>
                  <span class="block text-sm text-gray-500">Ready to ship within 24 hours</span>
                </div>
              </div>
              <div class="text-right">
                <span class="text-sm text-gray-500">Order now for</span>
                <span class="block text-lg font-bold text-indigo-600">Fast Delivery</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
