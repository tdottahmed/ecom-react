<script>
    $(document).ready(function () {
        // Initialize select2 for state and city dropdowns
        $('.state-select').select2({
            placeholder: "Select State",
            allowClear: true
        });

        $('.city-select').select2({
            placeholder: "Select City",
            allowClear: true
        });

        // Tab functionality
        $('.tab-header').click(function () {
            $('.tab-header').removeClass('active');
            $(this).addClass('active');

            const tabId = $(this).data('tab');
            $('.tab-pane').removeClass('active');
            $(`#${tabId}`).addClass('active');
        });

        // Product gallery thumbnail click
        $('.thumbnail').click(function () {
            const imageUrl = $(this).data('image');
            $('#main-product-image').attr('src', imageUrl);
        });

        // Quantity adjustment
        $('#increase-qty').click(function () {
            const currentVal = parseInt($('#product-quantity').val());
            const maxStock = parseInt($('#product-quantity').attr('max'));
            if (currentVal < maxStock) {
                $('#product-quantity').val(currentVal + 1);
                updateOrderSummary();
            }
        });

        $('#decrease-qty').click(function () {
            const currentVal = parseInt($('#product-quantity').val());
            if (currentVal > 1) {
                $('#product-quantity').val(currentVal - 1);
                updateOrderSummary();
            }
        });

        $('#product-quantity').change(function () {
            let currentVal = parseInt($(this).val());
            const maxStock = parseInt($(this).attr('max'));
            const minQty = parseInt($(this).attr('min'));

            if (isNaN(currentVal) || currentVal < minQty) {
                currentVal = minQty;
            } else if (currentVal > maxStock) {
                currentVal = maxStock;
            }

            $(this).val(currentVal);
            updateOrderSummary();
        });

        // Product variation selection
        $('.variation-option').click(function () {
            if ($(this).hasClass('out-of-stock')) return;

            $('.variation-option').removeClass('selected');
            $(this).addClass('selected');

            const variantId = $(this).data('variant-id');
            const price = $(this).data('price');
            const sku = $(this).data('sku');
            const qty = $(this).data('qty');
            const variant = $(this).data('variant');

            // Update variant ID in form
            $('#variant_id').val(variantId);

            // Update price
            $('#variant-price').text('৳' + parseFloat(price).toFixed(2));

            // Update stock status
            const stockStatus = $('#variant-stock-status');
            if (qty > 0) {
                stockStatus.text('In Stock').removeClass('out-of-stock').addClass('in-stock');
            } else {
                stockStatus.text('Out of Stock').removeClass('in-stock').addClass('out-of-stock');
            }

            // Update SKU
            $('#variant-sku-container span:last').text('SKU: ' + sku);

            // Update quantity selector max value
            $('#product-quantity').attr('max', qty);

            // Update order summary
            updateOrderSummary();

            // Update product name in summary if variant has a specific name
            $('#summary-product-name').text("{{ $detailedProduct->name }}" + (variant ? ' - ' + variant : ''));
        });

        // Update order summary based on quantity
        function updateOrderSummary() {
            const quantity = parseInt($('#product-quantity').val());
            $('#form-quantity').val(quantity);
            $('#summary-quantity').text(quantity);

            // Get the selected variation price or default to product price
            let unitPrice = {{ $detailedProduct->unit_price }};
            const selectedVariant = $('.variation-option.selected');

            if (selectedVariant.length) {
                unitPrice = selectedVariant.data('price');
            }

            const discount = {{ $detailedProduct->discount }};
            const discountType = '{{ $detailedProduct->discount_type }}';
            const tax = {{ $detailedProduct->tax ?? 0 }};

            let discountedPrice = unitPrice;

            if (discount > 0) {
                if (discountType === 'percent') {
                    discountedPrice = unitPrice - (unitPrice * discount / 100);
                } else {
                    discountedPrice = unitPrice - discount;
                }
            }

            const subtotal = discountedPrice * quantity;
            const shipping = parseInt($('#shipping-cost').text().replace('৳', '').replace(',', ''));
            const total = subtotal + shipping + tax;

            // Update the order summary
            $('.order-item:first span:last').text('৳' + subtotal.toFixed(2));
            $('#total-price').text('৳' + total.toFixed(2));
            $('#summary-price').text('৳' + unitPrice.toFixed(2));
        }

        // District selection affects shipping cost
        $('input[name="district"]').change(function () {
            const district = $(this).val();
            let shippingCost = 60;

            if (district === 'outside-dhaka') {
                shippingCost = 120;
            }

            $('#shipping-cost').text('৳' + shippingCost.toFixed(2));
            updateOrderSummary();
        });

        // Form submission
        $('#checkoutForm').submit(function (e) {
            let valid = true;
            let message = "";

            // Name validation
            const nameValue = $('#fullName').val().trim();
            if (nameValue.length < 3 || !/^[a-zA-Z\s]+$/.test(nameValue)) {
                message = "Please enter a valid full name (only letters, at least 3 characters).";
                $('#fullName').focus();
                valid = false;
            }

            // Phone validation (Bangladesh format)
            const phoneValue = $('#mobileNumber').val().trim();
            const phonePattern = /^(?:\+8801|01)[3-9]\d{8}$/;
            if (valid && !phonePattern.test(phoneValue)) {
                message = "Please enter a valid Bangladeshi mobile number (e.g. +8801XXXXXXXXX or 01XXXXXXXXX).";
                $('#mobileNumber').focus();
                valid = false;
            }

            // Email validation
            const emailValue = $('#email').val().trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (valid && (!emailValue || !emailPattern.test(emailValue))) {
                message = "Please enter a valid email address.";
                $('#email').focus();
                valid = false;
            }

            // Address validation
            const addressValue = $('#address').val().trim();
            if (valid && addressValue.length < 10) {
                message = "Please enter a complete address (at least 10 characters).";
                $('#address').focus();
                valid = false;
            }

            // State validation
            if (valid && !$('#state_id').val()) {
                message = "Please select your state.";
                $('#state_id').focus();
                valid = false;
            }

            // City validation
            if (valid && !$('#city_id').val()) {
                message = "Please select your city.";
                $('#city_id').focus();
                valid = false;
            }

            // District validation
            if (valid && !$("input[name='district']:checked").val()) {
                message = "Please select your district (Inside/Outside Dhaka).";
                valid = false;
            }

            // Payment validation
            if (valid && !$('#payment_method').val()) {
                message = "Please select your payment method.";
                $('#payment_method').focus();
                valid = false;
            }

            // Variant validation (if product has variants)
            if (valid && $('.variation-option').length > 0 && !$('#variant_id').val()) {
                message = "Please select a product variation.";
                valid = false;
            }

            if (!valid) {
                // Create a temporary error display
                const errorHtml = `
                    <div class="validation-error">
                        <h4 style="margin-bottom: 10px; color: var(--danger);">
                            <i class="fas fa-exclamation-circle"></i> Please fix the following error:
                        </h4>
                        <p><i class="fas fa-times-circle"></i> ${message}</p>
                    </div>
                `;

                // Remove any existing temporary errors
                $('.validation-error.temporary').remove();

                // Add the error message at the top of the form
                $(errorHtml).addClass('temporary').insertBefore('#checkoutForm .form-group:first');

                // Scroll to the error message
                $('html, body').animate({
                    scrollTop: $('.validation-error.temporary').offset().top - 100
                }, 500);

                return false;
            }

            // Submit form if all validation passes
            return true;
        });

        $('#question-form').submit(function (e) {
            e.preventDefault();
            alert('Question submitted! This is a demo.');
        });

        // Buy now button
        $('#buy-now-btn').click(function () {
            $('#checkout').get(0).scrollIntoView({behavior: 'smooth'});
        });

        // Button pulse glow animation every 5 seconds
        function addButtonZoom() {
            $('#checkoutSubmitBtn').addClass('button-pulse');
            setTimeout(() => {
                $('#checkoutSubmitBtn').removeClass('button-pulse');
            }, 1100);
        }

        // Start button zoom animation every 5 seconds
        setInterval(addButtonZoom, 5000);

        // Load States on page load (since country is fixed)
        let countryId = $("input[name='country_id']").val();
        if (countryId) {
            $.post("{{ route('get-state') }}", {
                _token: '{{ csrf_token() }}',
                country_id: countryId
            }, function (data) {
                $('#state_id').html(JSON.parse(data));
                $('#state_id').trigger('change.select2');

                // Select previously selected state if exists
                @if(old('state_id'))
                $('#state_id').val('{{ old('state_id') }}').trigger('change');
                @endif
            });
        }

        // When state is selected, load cities
        $('#state_id').on('change', function () {
            let stateId = $(this).val();

            if (stateId) {
                $.post("{{ route('get-city') }}", {
                    _token: '{{ csrf_token() }}',
                    state_id: stateId
                }, function (data) {
                    $('#city_id').html(JSON.parse(data));
                    $('#city_id').trigger('change.select2');

                    // Select previously selected city if exists
                    @if(old('city_id'))
                    $('#city_id').val('{{ old('city_id') }}').trigger('change');
                    @endif
                });
            } else {
                $('#city_id').html('<option value="">Select City</option>');
                $('#city_id').trigger('change.select2');
            }
        });

        // Initialize with old values if they exist
        @if(old('state_id'))
        // State will be handled in the AJAX callback
        @endif

        @if(old('city_id'))
        // City will be handled in the AJAX callback
        @endif

        // Set the first variant as selected by default if variations exist
        if ($('.variation-option').length > 0) {
            $('.variation-option:first').click();
        }
    });
</script>
