<section id="checkout" class="bg-gray-50 py-10">
  <div class="container mx-auto px-4">
    <h2 class="mb-8 text-center text-2xl font-semibold text-gray-800">Complete Your Order</h2>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
      <!-- Checkout Form -->
      <div class="rounded-lg bg-white p-6 shadow">
        <h3 class="mb-6 text-lg font-semibold">Your Information</h3>

        @if ($errors->any())
          <div class="mb-4 rounded bg-red-100 p-4 text-red-700">
            <h4 class="mb-2 flex items-center gap-2 font-semibold">
              <i class="fas fa-exclamation-circle"></i> Please check these Things:
            </h4>
            <ul class="list-inside list-disc">
              @foreach ($errors->all() as $error)
                <li><i class="fas fa-times-circle"></i> {{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('guest.easy_checkout') }}" method="post" id="checkoutForm" class="space-y-4">
          @csrf
          <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
          <input type="hidden" name="variant_id" id="variant_id" value="">
          <input type="hidden" name="quantity" id="form-quantity" value="{{ old('quantity', 1) }}">
          <input type="hidden" name="country_id" value="{{ $country->id }}">

          {{-- Name --}}
          <div>
            <label for="fullName" class="mb-1 block font-medium">Your Name <span class="text-red-600">*</span></label>
            <input type="text" id="fullName" name="name" value="{{ old('name') }}"
                   class="{{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} w-full rounded border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                   placeholder="Enter your full name" required>
          </div>

          {{-- Phone --}}
          <div>
            <label for="mobileNumber" class="mb-1 block font-medium">Mobile Number <span
                    class="text-red-600">*</span></label>
            <div class="flex">
              <span
                    class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">+880</span>
              <input type="tel" id="mobileNumber" name="phone" value="{{ old('phone') }}"
                     class="{{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} w-full rounded-r border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                     placeholder="1XXXXXXXXX" maxlength="10" required>
            </div>
            <div id="phoneError" class="mt-1 hidden text-sm text-red-500"></div>
          </div>

          {{-- Email --}}
          <div>
            <label for="email" class="mb-1 block font-medium">Email Address <span
                    class="text-red-600">*</span></label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   class="{{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} w-full rounded border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                   placeholder="example@email.com" required>
          </div>

          {{-- Address --}}
          <div>
            <label for="address" class="mb-1 block font-medium">Full Address <span
                    class="text-red-600">*</span></label>
            <textarea id="address" name="address" rows="3"
                      class="{{ $errors->has('address') ? 'border-red-500' : 'border-gray-300' }} w-full rounded border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                      placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
          </div>

          {{-- State & City --}}
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <!-- State Select -->
            <div>
              <label for="state_id" class="mb-2 block font-semibold text-gray-700">Select State <span
                      class="text-red-600">*</span></label>
              <select id="state_id" name="state_id"
                      class="state-select {{ $errors->has('state_id') ? 'border-red-500' : 'border-gray-300' }} w-full rounded-md border px-3 py-2 text-gray-700 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400"
                      required>
                <option value="">-- Select State --</option>
                @if (old('state_id'))
                  <option value="{{ old('state_id') }}" selected>{{ old('state_id') }}</option>
                @endif
              </select>
              @if ($errors->has('state_id'))
                <p class="mt-1 text-sm text-red-500">{{ $errors->first('state_id') }}</p>
              @endif
            </div>

            <!-- City Select -->
            <div>
              <label for="city_id" class="mb-2 block font-semibold text-gray-700">Select City <span
                      class="text-red-600">*</span></label>
              <select id="city_id" name="city_id"
                      class="city-select {{ $errors->has('city_id') ? 'border-red-500' : 'border-gray-300' }} w-full rounded-md border px-3 py-2 text-gray-700 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400"
                      required>
                <option value="">-- Select City --</option>
                @if (old('city_id'))
                  <option value="{{ old('city_id') }}" selected>{{ old('city_id') }}</option>
                @endif
              </select>
              @if ($errors->has('city_id'))
                <p class="mt-1 text-sm text-red-500">{{ $errors->first('city_id') }}</p>
              @endif
            </div>
          </div>

          {{-- District --}}
          <div>
            <label class="mb-1 block font-medium">District <span class="text-red-600">*</span></label>
            <div class="flex gap-4">
              <label class="flex items-center gap-2">
                <input type="radio" name="district" value="inside-dhaka"
                       {{ old('district') == 'inside-dhaka' ? 'checked' : '' }} required>
                Inside Dhaka
              </label>
              <label class="flex items-center gap-2">
                <input type="radio" name="district" value="outside-dhaka"
                       {{ old('district') == 'outside-dhaka' ? 'checked' : '' }} required>
                Outside Dhaka
              </label>
            </div>
          </div>

          {{-- Payment --}}
          <div>
            <label class="mb-1 block font-medium">Payment Method <span class="text-red-600">*</span></label>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
              <!-- Cash on Delivery -->
              <div class="payment-option relative">
                <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery"
                       class="absolute h-0 w-0 opacity-0" checked required>
                <label for="cash_on_delivery"
                       class="flex cursor-pointer items-center gap-3 rounded-lg border-2 border-gray-200 bg-white p-4 transition-all hover:border-indigo-400 has-[:checked]:border-indigo-600 has-[:checked]:bg-indigo-50">
                  <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100">
                    <i class="fas fa-money-bill-wave text-green-600"></i>
                  </div>
                  <div>
                    <span class="block font-medium">Cash on Delivery</span>
                    <span class="block text-sm text-gray-600">Pay when you receive</span>
                  </div>
                </label>
              </div>
            </div>
          </div>

          <button type="submit"
                  class="mt-4 w-full rounded bg-indigo-600 py-3 font-semibold text-white transition-colors hover:bg-indigo-700">
            Confirm Order
          </button>
        </form>
      </div>

      <!-- Order Summary -->
      <div class="rounded-lg bg-white p-6 shadow">
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
    </div>
  </div>
</section>
