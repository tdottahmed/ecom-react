<section class="bg-gray-50 py-10">
  <div class="container mx-auto px-4">
    <!-- Section Header -->

    <div class="mx-auto max-w-6xl">
      <div class="mb-10 text-center">
        <h2 class="mb-3 text-3xl font-bold text-gray-800">Product Information</h2>
        <p class="mx-auto max-w-2xl text-gray-600">Complete details about {{ $detailedProduct->name ?? 'this product' }}
        </p>
      </div>

      <div class="bg-white">
        <!-- Description Section -->
        <div class="rounded-xl p-3 lg:p-8">
          <div class="mb-3 flex items-center">
            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100">
              <i class="fas fa-file-alt text-indigo-600"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Product Description</h3>
          </div>

          <div class="prose max-w-none">
            {!! $detailedProduct->description ?? 'No description available' !!}
          </div>
        </div>

        <!-- Specifications Section -->
        <div class="rounded-xl p-6 shadow-sm lg:p-8">
          <div class="mb-6 flex items-center">
            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100">
              <i class="fas fa-list-alt text-indigo-600"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Product Specifications</h3>
          </div>

          <div class="space-y-5">
            <div class="grid grid-cols-1 gap-4 text-gray-700 md:grid-cols-2">
              <div class="font-semibold">Category:</div>
              <div>{{ $detailedProduct->category->name ?? 'N/A' }}</div>

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
                <div>Available</div>
              @endif
            </div>

            <!-- Additional Features Section (if you have more data) -->
            @if (isset($detailedProduct->features) && count($detailedProduct->features) > 0)
              <div class="mt-6 border-t border-gray-200 pt-6">
                <h4 class="mb-3 font-semibold text-gray-800">Additional Features</h4>
                <div class="flex flex-wrap gap-2">
                  @foreach ($detailedProduct->features as $feature)
                    <span
                          class="rounded-full bg-indigo-100 px-3 py-1 text-sm text-indigo-800">{{ $feature }}</span>
                  @endforeach
                </div>
              </div>
            @endif

            <!-- Availability -->
            <div class="mt-4">
              <div class="flex items-center">
                <i class="fas fa-check-circle mr-2 text-green-500"></i>
                <span class="font-medium text-green-600">In Stock</span>
                <span class="ml-2 text-gray-500">(Ready to ship)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
