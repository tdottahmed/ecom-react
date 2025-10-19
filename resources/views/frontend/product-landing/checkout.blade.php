<section id="checkout" class="bg-gray-50 py-10">
  <div class="container mx-auto px-4">
    <h2 class="mb-8 text-center text-2xl font-semibold text-gray-800">Complete Your Order</h2>

    <div class="mx-auto max-w-6xl space-y-8">
      <!-- Order Summary -->
      <div class="rounded-lg bg-white p-6 shadow-lg">
        <h3 class="mb-4 text-lg font-semibold">Order Summary</h3>

        <div class="space-y-2">
          <div class="flex justify-between">
            <span>{{ $detailedProduct->name }}</span>
            <div class="space-x-3">
              <span class="variant-price text-3xl font-bold text-indigo-600">
                ৳{{ number_format($detailedProduct->unit_price, 2) }}
              </span>
            </div>
          </div>
          <div class="flex justify-between">
            <span>Quantity</span>
            <span id="summary-quantity">{{ old('quantity', 1) }}</span>
          </div>
          <div class="flex justify-between">
            <span>Shipping</span>
            <span id="shipping-cost">৳60.00</span>
          </div>
          @if ($detailedProduct->discount > 0)
            <div class="flex justify-between">
              <span>Discount</span>
              <span>
                @if ($detailedProduct->discount_type == 'percent')
                  {{ $detailedProduct->discount }}%
                @else
                  ৳{{ number_format($detailedProduct->discount, 2) }}
                @endif
              </span>
            </div>
          @endif
          <div class="flex justify-between">
            <span>Tax</span>
            <span>৳{{ number_format($detailedProduct->tax ?? 0, 2) }}</span>
          </div>
          <div class="mt-2 flex justify-between border-t pt-2 text-3xl font-semibold text-indigo-700">
            <span>Total</span>
            <span id="total-price">৳{{ number_format($detailedProduct->unit_price + 60, 2) }}</span>
          </div>
        </div>
      </div>

      <!-- Checkout Form -->
      <div class="rounded-lg bg-white p-6 shadow-lg">
        <h3 class="mb-6 text-lg font-semibold">Your Information</h3>

        @if ($errors->any())
          <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-4 text-red-700">
            <h4 class="mb-2 flex items-center gap-2 font-semibold">
              <i class="fas fa-exclamation-circle"></i> Please check these Things:
            </h4>
            <ul class="list-inside list-disc space-y-1">
              @foreach ($errors->all() as $error)
                <li class="flex items-center gap-2"><i class="fas fa-times-circle text-xs text-red-500"></i>
                  {{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('guest.easy_checkout') }}" method="post" id="checkoutForm" class="space-y-6">
          @csrf
          <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
          <input type="hidden" name="variant_id" id="variant_id" value="">
          <input type="hidden" name="quantity" id="form-quantity" value="{{ old('quantity', 1) }}">
          <input type="hidden" name="country_id" value="{{ $country->id }}">

          {{-- Name --}}
          <div>
            <label for="fullName" class="mb-2 block font-medium text-gray-700">Your Name <span
                    class="text-red-600">*</span></label>
            <input type="text" id="fullName" name="name" value="{{ old('name') }}"
                   class="{{ $errors->has('name') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full rounded-lg border px-4 py-3 transition-all duration-200 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                   placeholder="Enter your full name" required>
          </div>

          {{-- Phone --}}
          <div>
            <label for="mobileNumber" class="mb-2 block font-medium text-gray-700">Mobile Number <span
                    class="text-red-600">*</span></label>
            <div class="flex">
              <span
                    class="inline-flex items-center rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 px-4 text-gray-600">
                +880
              </span>
              <input type="tel" id="mobileNumber" name="phone" value="{{ old('phone') }}"
                     class="{{ $errors->has('phone') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full rounded-r-lg border px-4 py-3 transition-all duration-200 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                     placeholder="1XXXXXXXXX" maxlength="10" required>
            </div>
            <div id="phoneError" class="mt-2 hidden text-sm text-red-500"></div>
          </div>

          {{-- Email --}}
          <div>
            <label for="email" class="mb-2 block font-medium text-gray-700">Email Address <span
                    class="text-red-600">*</span></label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   class="{{ $errors->has('email') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full rounded-lg border px-4 py-3 transition-all duration-200 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                   placeholder="example@email.com" required>
          </div>

          {{-- Address --}}
          <div>
            <label for="address" class="mb-2 block font-medium text-gray-700">Full Address <span
                    class="text-red-600">*</span></label>
            <textarea id="address" name="address" rows="3"
                      class="{{ $errors->has('address') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full resize-none rounded-lg border px-4 py-3 transition-all duration-200 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                      placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
          </div>

          {{-- Enhanced State, City & District Section --}}
          <div class="space-y-6">
            <!-- Section Header -->
            <div class="border-b border-gray-200 pb-3">
              <h3 class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                <i class="fas fa-map-marker-alt text-indigo-600"></i>
                Location Information
              </h3>
              <p class="mt-1 text-sm text-gray-600">Please provide your location details for accurate shipping</p>
            </div>

            <!-- State & City Grid -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
              <!-- State Select -->
              <div class="relative">
                <label for="state_id" class="mb-2 block flex items-center gap-1 font-semibold text-gray-700">
                  <span>Select State</span>
                  <span class="text-red-600">*</span>
                  <i class="fas fa-info-circle text-sm text-gray-400" title="Choose your state from the list"></i>
                </label>

                <div class="relative">
                  <select id="state_id" name="state_id"
                          class="state-select {{ $errors->has('state_id') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full cursor-pointer appearance-none rounded-lg border bg-white px-4 py-3 text-gray-700 outline-none transition-all duration-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50"
                          required>
                    <option value="">-- Select State --</option>
                    @if (old('state_id'))
                      <option value="{{ old('state_id') }}" selected>{{ old('state_id') }}</option>
                    @endif
                  </select>

                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                    <i class="fas fa-chevron-down text-sm"></i>
                  </div>
                </div>

                @if ($errors->has('state_id'))
                  <div class="mt-2 flex items-center gap-1 text-sm text-red-500">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ $errors->first('state_id') }}</span>
                  </div>
                @endif
              </div>

              <!-- City Select -->
              <div class="relative">
                <label for="city_id" class="mb-2 block flex items-center gap-1 font-semibold text-gray-700">
                  <span>Select City</span>
                  <span class="text-red-600">*</span>
                  <i class="fas fa-info-circle text-sm text-gray-400" title="Choose your city from the list"></i>
                </label>

                <div class="relative">
                  <select id="city_id" name="city_id"
                          class="city-select {{ $errors->has('city_id') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-300' }} w-full cursor-pointer appearance-none rounded-lg border bg-white px-4 py-3 text-gray-700 outline-none transition-all duration-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50"
                          required>
                    <option value="">-- Select City --</option>
                    @if (old('city_id'))
                      <option value="{{ old('city_id') }}" selected>{{ old('city_id') }}</option>
                    @endif
                  </select>

                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                    <i class="fas fa-chevron-down text-sm"></i>
                  </div>
                </div>

                @if ($errors->has('city_id'))
                  <div class="mt-2 flex items-center gap-1 text-sm text-red-500">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ $errors->first('city_id') }}</span>
                  </div>
                @endif
              </div>
            </div>

            <!-- District Selection -->
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-5">
              <label class="mb-3 block flex items-center gap-1 font-semibold text-gray-700">
                <span>Delivery Area</span>
                <span class="text-red-600">*</span>
                <i class="fas fa-info-circle text-sm text-gray-400"
                   title="Choose your district for shipping calculation"></i>
              </label>

              <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                <!-- Inside Dhaka Option -->
                <div class="district-option relative">
                  <input type="radio" id="inside-dhaka" name="district" value="inside-dhaka"
                         class="absolute h-0 w-0 opacity-0" {{ old('district') == 'inside-dhaka' ? 'checked' : '' }}
                         required>
                  <label for="inside-dhaka"
                         class="flex cursor-pointer items-center gap-4 rounded-xl border-2 border-gray-200 bg-white p-4 transition-all duration-200 hover:border-indigo-300 hover:shadow-md has-[:checked]:border-indigo-600 has-[:checked]:bg-indigo-50 has-[:checked]:shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-100">
                      <i class="fas fa-city text-lg text-blue-600"></i>
                    </div>
                    <div class="flex-1">
                      <span class="block font-medium text-gray-800">Inside Dhaka</span>
                      <span class="mt-1 block text-sm text-gray-600">Faster delivery, lower shipping</span>
                    </div>
                    <div
                         class="checkmark hidden h-5 w-5 items-center justify-center rounded-full bg-indigo-600 text-white">
                      <i class="fas fa-check text-xs"></i>
                    </div>
                  </label>
                </div>

                <!-- Outside Dhaka Option -->
                <div class="district-option relative">
                  <input type="radio" id="outside-dhaka" name="district" value="outside-dhaka"
                         class="absolute h-0 w-0 opacity-0" {{ old('district') == 'outside-dhaka' ? 'checked' : '' }}
                         required>
                  <label for="outside-dhaka"
                         class="flex cursor-pointer items-center gap-4 rounded-xl border-2 border-gray-200 bg-white p-4 transition-all duration-200 hover:border-indigo-300 hover:shadow-md has-[:checked]:border-indigo-600 has-[:checked]:bg-indigo-50 has-[:checked]:shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                      <i class="fas fa-truck text-lg text-green-600"></i>
                    </div>
                    <div class="flex-1">
                      <span class="block font-medium text-gray-800">Outside Dhaka</span>
                      <span class="mt-1 block text-sm text-gray-600">Standard delivery, regular shipping</span>
                    </div>
                    <div
                         class="checkmark hidden h-5 w-5 items-center justify-center rounded-full bg-indigo-600 text-white">
                      <i class="fas fa-check text-xs"></i>
                    </div>
                  </label>
                </div>
              </div>

              @if ($errors->has('district'))
                <div class="mt-3 flex items-center gap-2 text-sm text-red-500">
                  <i class="fas fa-exclamation-circle"></i>
                  <span>Please select a district</span>
                </div>
              @endif
            </div>
          </div>

          {{-- Payment --}}
          <div>
            <label class="mb-3 block font-medium text-gray-700">Payment Method <span
                    class="text-red-600">*</span></label>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
              <!-- Cash on Delivery -->
              <div class="payment-option relative">
                <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery"
                       class="absolute h-0 w-0 opacity-0" checked required>
                <label for="cash_on_delivery"
                       class="flex cursor-pointer items-center gap-3 rounded-lg border-2 border-gray-200 bg-white p-4 transition-all duration-200 hover:border-indigo-300 hover:shadow-sm has-[:checked]:border-indigo-600 has-[:checked]:bg-indigo-50">
                  <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                    <i class="fas fa-money-bill-wave text-lg text-green-600"></i>
                  </div>
                  <div>
                    <span class="block font-medium text-gray-800">Cash on Delivery</span>
                    <span class="block text-sm text-gray-600">Pay when you receive</span>
                  </div>
                </label>
              </div>
            </div>
          </div>

          <button type="submit"
                  class="mt-4 w-full rounded-lg bg-indigo-600 py-4 font-semibold text-white transition-all duration-200 hover:bg-indigo-700 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-400 focus:ring-opacity-50">
            Confirm Order
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  // Add interactive behavior for the district selection
  document.addEventListener('DOMContentLoaded', function() {
    const districtOptions = document.querySelectorAll('.district-option input[type="radio"]');

    districtOptions.forEach(option => {
      option.addEventListener('change', function() {
        // Remove any existing checkmarks
        document.querySelectorAll('.district-option .checkmark').forEach(check => {
          check.classList.add('hidden');
        });

        // Add checkmark to selected option
        if (this.checked) {
          this.closest('.district-option').querySelector('.checkmark').classList.remove('hidden');
        }
      });

      // Initialize checkmarks for pre-selected options
      if (option.checked) {
        option.closest('.district-option').querySelector('.checkmark').classList.remove('hidden');
      }
    });
  });
</script>
