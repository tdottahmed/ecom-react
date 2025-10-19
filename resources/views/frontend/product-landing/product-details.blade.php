<section class="py-10">
  <div class="container mx-auto max-w-4xl px-4">
    <!-- Product Image -->
    <div class="mb-8">
      <img src="{{ $detailedProduct->photos ? uploaded_asset(explode(',', $detailedProduct->photos)[0]) : asset('images/placeholder.jpg') }}"
           alt="{{ $detailedProduct->name }}" class="h-auto w-full rounded-lg shadow-lg" id="main-product-image">
    </div>

    <!-- Product Info Box -->
    <div class="space-y-5 rounded-xl bg-white p-6 text-center shadow-lg md:p-8" id="product-info-box">
      <h1 class="text-2xl font-bold text-gray-900 md:text-3xl">{{ $detailedProduct->name }}</h1>

      @if ($detailedProduct->brand)
        <p class="text-sm text-gray-600">Brand:
          <span class="font-medium">{{ $detailedProduct->brand->name }}</span>
        </p>
      @endif

      <!-- Price -->
      <div class="space-x-3">
        <span class="text-3xl font-bold text-indigo-600">
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
          <span class="rounded bg-red-100 px-2 py-1 text-sm font-semibold text-red-600">
            @if ($detailedProduct->discount_type == 'percent')
              {{ $detailedProduct->discount }}% OFF
            @else
              ৳{{ $detailedProduct->discount }} OFF
            @endif
          </span>
        @endif
      </div>

      <!-- Variations -->
      @if (isset($detailedProduct->stocks) && count($detailedProduct->stocks) > 0)
        <div>
          <h3 class="mb-2 text-sm font-semibold">Choose Variation:</h3>
          <div class="flex flex-wrap justify-center gap-2">
            @foreach ($detailedProduct->stocks as $stock)
              <button class="{{ $stock->qty == 0 ? 'bg-gray-200 text-gray-500 cursor-not-allowed' : 'hover:bg-indigo-100 text-gray-800' }} {{ $loop->first ? 'bg-indigo-600 text-white' : '' }} variation-option rounded border px-3 py-1 text-sm"
                      data-variant-id="{{ $stock->id }}" data-price="{{ $stock->price }}"
                      data-sku="{{ $stock->sku }}" data-qty="{{ $stock->qty }}"
                      data-variant="{{ $stock->variant }}">
                {{ $stock->variant }}
              </button>
            @endforeach
          </div>
        </div>
      @endif

      <!-- Meta -->
      <div class="grid grid-cols-2 gap-3 text-sm text-gray-700">
        <div>
          <i class="fas fa-check-circle text-green-500"></i>
          <span id="variant-stock-status"
                class="{{ $detailedProduct->current_stock > 0 ? 'text-green-600 font-medium' : 'text-red-600 font-medium' }}">
            {{ $detailedProduct->current_stock > 0 ? 'In Stock' : 'Out of Stock' }}
          </span>
        </div>
        <div><i class="fas fa-shopping-cart text-indigo-500"></i> {{ $detailedProduct->num_of_sale }} Orders
        </div>
        <div><i class="fas fa-star text-yellow-400"></i> {{ $detailedProduct->rating }}/5</div>
        <div id="variant-sku-container"><i class="fas fa-barcode text-gray-500"></i>
          SKU: {{ $detailedProduct->sku }}</div>
      </div>

      <!-- Quantity -->
      <div class="mt-3 flex items-center justify-center space-x-2">
        <button id="decrease-qty" class="rounded border bg-gray-100 px-3 py-1 hover:bg-gray-200">-</button>
        <input type="number" id="product-quantity" class="w-16 rounded border text-center" value="1"
               min="1" max="{{ $detailedProduct->current_stock }}">
        <button id="increase-qty" class="rounded border bg-gray-100 px-3 py-1 hover:bg-gray-200">+</button>
      </div>

      <!-- Order Now -->
      <div class="mt-6 flex justify-center">
        <button id="buy-now-btn"
                class="flex items-center justify-center rounded-full bg-indigo-600 px-8 py-4 text-lg font-bold text-white shadow-lg">
          <i class="fas fa-bolt mr-2 text-yellow-300"></i>
          Order Now
        </button>
      </div>

    </div>
  </div>
</section>

<!-- GSAP JS Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const productimage = document.getElementById('main-product-image');

    // Set transform origin at the top center (like hanging)
    gsap.set(productimage, {
      transformOrigin: "40% 0%"
    });

    // Swing animation (left-right pendulum)
    gsap.to(productimage, {
      rotation: 3, // rotate 10 degrees
      duration: 0.5,
      yoyo: true,
      repeat: -1, // infinite
      ease: "power1.inOut",
      yoyoEase: true
    });

    // Optional: subtle fade-in for image & info box (if you still want)
    gsap.from("#main-product-image", {
      opacity: 0,
      y: 50,
      duration: 1
    });
    gsap.from("#product-info-box", {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 0.3,
      ease: "power2.out"
    });
  });
</script>
