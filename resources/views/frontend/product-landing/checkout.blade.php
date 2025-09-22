<section id="checkout" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold text-center mb-8 text-gray-800">Complete Your Order</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Checkout Form -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-6">Your Information</h3>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <h4 class="font-semibold mb-2 flex items-center gap-2">
                            <i class="fas fa-exclamation-circle"></i> Please fix the following errors:
                        </h4>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li><i class="fas fa-times-circle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('guest.checkout') }}" method="post" id="checkoutForm" class="space-y-4">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                    <input type="hidden" name="variant_id" id="variant_id" value="">
                    <input type="hidden" name="quantity" id="form-quantity" value="{{ old('quantity', 1) }}">
                    <input type="hidden" name="country_id" value="{{ $country->id }}">

                    {{-- Name --}}
                    <div>
                        <label for="fullName" class="block mb-1 font-medium">Your Name <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="fullName" name="name" value="{{ old('name') }}"
                               class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}"
                               placeholder="Enter your full name" required>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="mobileNumber" class="block mb-1 font-medium">Mobile Number <span
                                class="text-red-600">*</span></label>
                        <input type="tel" id="mobileNumber" name="phone" value="{{ old('phone') }}"
                               class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }}"
                               placeholder="+8801XXXXXXXXX" required>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block mb-1 font-medium">Email Address <span
                                class="text-red-600">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                               placeholder="example@email.com" required>
                    </div>

                    {{-- Address --}}
                    <div>
                        <label for="address" class="block mb-1 font-medium">Full Address <span
                                class="text-red-600">*</span></label>
                        <textarea id="address" name="address" rows="3"
                                  class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none {{ $errors->has('address') ? 'border-red-500' : 'border-gray-300' }}"
                                  placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
                    </div>

                    {{-- State & City --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- State Select -->
                        <div>
                            <label for="state_id" class="block mb-2 text-gray-700 font-semibold">Select State <span
                                    class="text-red-600">*</span></label>
                            <select id="state_id" name="state_id"
                                    class="state-select w-full border rounded-md px-3 py-2 text-gray-700 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 outline-none {{ $errors->has('state_id') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                <option value="">-- Select State --</option>
                                @if(old('state_id'))
                                    <option value="{{ old('state_id') }}" selected>{{ old('state_id') }}</option>
                                @endif
                            </select>
                            @if($errors->has('state_id'))
                                <p class="mt-1 text-red-500 text-sm">{{ $errors->first('state_id') }}</p>
                            @endif
                        </div>

                        <!-- City Select -->
                        <div>
                            <label for="city_id" class="block mb-2 text-gray-700 font-semibold">Select City <span
                                    class="text-red-600">*</span></label>
                            <select id="city_id" name="city_id"
                                    class="city-select w-full border rounded-md px-3 py-2 text-gray-700 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 outline-none {{ $errors->has('city_id') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                <option value="">-- Select City --</option>
                                @if(old('city_id'))
                                    <option value="{{ old('city_id') }}" selected>{{ old('city_id') }}</option>
                                @endif
                            </select>
                            @if($errors->has('city_id'))
                                <p class="mt-1 text-red-500 text-sm">{{ $errors->first('city_id') }}</p>
                            @endif
                        </div>
                    </div>

                    {{-- District --}}
                    <div>
                        <label class="block mb-1 font-medium">District <span class="text-red-600">*</span></label>
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
                        <label for="payment_method" class="block mb-1 font-medium">Payment Method <span
                                class="text-red-600">*</span></label>
                        <select id="payment_method" name="payment_method"
                                class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none {{ $errors->has('payment_method') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            <option value="">-- Select Payment Method --</option>
                            <option
                                value="cash_on_delivery" {{ old('payment_method') == 'cash_on_delivery' ? 'selected' : '' }}>
                                Cash on Delivery
                            </option>
                            <option value="bkash" {{ old('payment_method') == 'bkash' ? 'selected' : '' }}>bKash
                            </option>
                            <option value="nagad" {{ old('payment_method') == 'nagad' ? 'selected' : '' }}>Nagad
                            </option>
                            <option value="card" {{ old('payment_method') == 'card' ? 'selected' : '' }}>Credit/Debit
                                Card
                            </option>
                        </select>
                    </div>

                    <button type="submit"
                            class="w-full py-3 mt-4 bg-indigo-600 text-white font-semibold rounded hover:bg-indigo-700 transition-colors">
                        Confirm Order
                    </button>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Order Summary</h3>

                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span>{{ $detailedProduct->name }}</span>
                        <span>৳{{ number_format($detailedProduct->unit_price, 2) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Quantity</span>
                        <span id="summary-quantity">{{ old('quantity', 1) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Shipping</span>
                        <span>৳60.00</span>
                    </div>
                    @if($detailedProduct->discount > 0)
                        <div class="flex justify-between">
                            <span>Discount</span>
                            <span>
                                @if($detailedProduct->discount_type == 'percent')
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
                    <div class="flex justify-between font-semibold text-indigo-700 text-lg border-t pt-2 mt-2">
                        <span>Total</span>
                        <span>৳{{ number_format($detailedProduct->unit_price + 60, 2) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
