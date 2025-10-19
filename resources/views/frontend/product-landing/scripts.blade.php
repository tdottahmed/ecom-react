<script>
  $(document).ready(function() {
    // Initialize select2 for state and city dropdowns
    $('.state-select').select2({
      placeholder: "Select State",
      allowClear: true
    });

    $('.city-select').select2({
      placeholder: "Select City",
      allowClear: true
    });

    // Quantity adjustment functions
    function setupQuantityControls() {
      $('#increase-qty').click(function() {
        const $input = $('#product-quantity');
        const currentVal = parseInt($input.val()) || 1;
        const maxStock = parseInt($input.attr('max')) || 999;
        if (currentVal < maxStock) {
          $input.val(currentVal + 1);
          updateOrderSummary();
        }
      });

      $('#decrease-qty').click(function() {
        const $input = $('#product-quantity');
        const currentVal = parseInt($input.val()) || 1;
        if (currentVal > 1) {
          $input.val(currentVal - 1);
          updateOrderSummary();
        }
      });

      $('#product-quantity').on('input change', function() {
        let currentVal = parseInt($(this).val()) || 1;
        const maxStock = parseInt($(this).attr('max')) || 999;
        const minQty = parseInt($(this).attr('min')) || 1;

        if (currentVal < minQty) {
          currentVal = minQty;
        } else if (currentVal > maxStock) {
          currentVal = maxStock;
        }

        $(this).val(currentVal);
        updateOrderSummary();
      });
    }

    // Product variation selection
    function setupVariationSelection() {
      $('.variation-option').click(function() {
        if ($(this).hasClass('cursor-not-allowed')) return;

        $('.variation-option').removeClass('bg-indigo-800 text-white');
        $(this).addClass('bg-indigo-800 text-white');

        const variantId = $(this).data('variant-id');
        const price = $(this).data('price');
        const sku = $(this).data('sku');
        const qty = $(this).data('qty');
        const variant = $(this).data('variant');

        // Update variant ID in form
        $('#variant_id').val(variantId);

        // Update price
        $('.variant-price').text('৳' + parseFloat(price).toFixed(2));

        // Update stock status
        const $stockStatus = $('#variant-stock-status');
        if (qty > 0) {
          $stockStatus.text('In Stock').removeClass('text-red-500').addClass('text-green-500');
        } else {
          $stockStatus.text('Out of Stock').removeClass('text-green-500').addClass('text-red-500');
        }

        // Update SKU
        $('#variant-sku-container span:last').text('SKU: ' + sku);

        // Update quantity selector max value
        $('#product-quantity').attr('max', qty);
        updateOrderSummary();

        // Update product name in summary
        $('#summary-product-name').text("{{ $detailedProduct->name }}" + (variant ? ' - ' + variant : ''));
      });

      // Set first variant as selected by default
      if ($('.variation-option').length > 0) {
        $('.variation-option:first').click();
      }
    }

    // Update order summary
    function updateOrderSummary() {
      const quantity = parseInt($('#product-quantity').val()) || 1;
      $('#form-quantity').val(quantity);
      $('#summary-quantity').text(quantity);

      // Get the selected variation price or default to product price
      let unitPrice = {{ $detailedProduct->unit_price }};
      const $selectedVariant = $('.variation-option.bg-indigo-800');

      if ($selectedVariant.length) {
        unitPrice = $selectedVariant.data('price');
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
      const shipping = parseFloat($('#shipping-cost').text().replace('৳', '').replace(',', '')) || 60;
      const total = subtotal + shipping + tax;

      // Update the order summary
      $('.variant-price').text('৳' + unitPrice.toFixed(2));
      $('#total-price').text('৳' + total.toFixed(2));
    }

    // District selection affects shipping cost
    function setupDistrictSelection() {
      $('input[name="district"]').change(function() {
        const district = $(this).val();
        const shippingCost = district === 'outside-dhaka' ? 120 : 60;
        $('#shipping-cost').text('৳' + shippingCost.toFixed(2));
        updateOrderSummary();
      });
    }

    // Bangladesh Phone Number Validation
    function validateBangladeshPhone(phone) {
      const cleanPhone = phone.replace(/\D/g, '');

      if (cleanPhone.length !== 10) return false;
      if (!cleanPhone.startsWith('1')) return false;

      const validPrefixes = ['13', '14', '15', '16', '17', '18', '19'];
      const prefix = cleanPhone.substring(0, 2);
      return validPrefixes.includes(prefix);
    }

    // Phone validation
    function setupPhoneValidation() {
      $('#mobileNumber').on('input', function() {
        const phone = $(this).val();
        const $phoneError = $('#phoneError');

        if (phone === '') {
          $phoneError.hide();
          return;
        }

        // Format phone number (limit to 10 digits)
        let formattedPhone = phone.replace(/\D/g, '');
        if (formattedPhone.length > 10) {
          formattedPhone = formattedPhone.substring(0, 10);
        }
        $(this).val(formattedPhone);

        if (!validateBangladeshPhone(formattedPhone)) {
          $phoneError.text('Please enter a valid Bangladesh mobile number (10 digits starting with 1)');
          $phoneError.show();
          $(this).addClass('border-red-500');
        } else {
          $phoneError.hide();
          $(this).removeClass('border-red-500');
        }
      });
    }

    // Form validation
    function validateForm() {
      let isValid = true;
      const errors = [];

      // Name validation
      const nameValue = $('#fullName').val().trim();
      if (nameValue.length < 3 || !/^[a-zA-Z\s]+$/.test(nameValue)) {
        errors.push("Please enter a valid full name (only letters, at least 3 characters).");
        $('#fullName').addClass('border-red-500');
        isValid = false;
      } else {
        $('#fullName').removeClass('border-red-500');
      }

      // Phone validation
      const phoneValue = $('#mobileNumber').val().trim();
      if (!validateBangladeshPhone(phoneValue)) {
        errors.push("Please enter a valid Bangladeshi mobile number.");
        $('#mobileNumber').addClass('border-red-500');
        isValid = false;
      } else {
        $('#mobileNumber').removeClass('border-red-500');
      }

      // Email validation
      const emailValue = $('#email').val().trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailValue || !emailPattern.test(emailValue)) {
        errors.push("Please enter a valid email address.");
        $('#email').addClass('border-red-500');
        isValid = false;
      } else {
        $('#email').removeClass('border-red-500');
      }

      // Address validation
      const addressValue = $('#address').val().trim();
      if (addressValue.length < 10) {
        errors.push("Please enter a complete address (at least 10 characters).");
        $('#address').addClass('border-red-500');
        isValid = false;
      } else {
        $('#address').removeClass('border-red-500');
      }

      // State validation
      if (!$('#state_id').val()) {
        errors.push("Please select your state.");
        $('#state_id').addClass('border-red-500');
        isValid = false;
      } else {
        $('#state_id').removeClass('border-red-500');
      }

      // City validation
      if (!$('#city_id').val()) {
        errors.push("Please select your city.");
        $('#city_id').addClass('border-red-500');
        isValid = false;
      } else {
        $('#city_id').removeClass('border-red-500');
      }

      // District validation
      if (!$("input[name='district']:checked").val()) {
        errors.push("Please select your district (Inside/Outside Dhaka).");
        isValid = false;
      }

      // Variant validation (if product has variants)
      if ($('.variation-option').length > 0 && !$('#variant_id').val()) {
        errors.push("Please select a product variation.");
        isValid = false;
      }

      return {
        isValid,
        errors
      };
    }

    // Load States and Cities
    function loadStatesAndCities() {
      const countryId = $("input[name='country_id']").val();
      if (countryId) {
        $.post("{{ route('get-state') }}", {
          _token: '{{ csrf_token() }}',
          country_id: countryId
        }, function(data) {
          $('#state_id').html(JSON.parse(data)).trigger('change.select2');

          // Select previously selected state if exists
          @if (old('state_id'))
            $('#state_id').val('{{ old('state_id') }}').trigger('change');
          @endif
        });
      }

      // When state is selected, load cities
      $('#state_id').on('change', function() {
        const stateId = $(this).val();

        if (stateId) {
          $.post("{{ route('get-city') }}", {
            _token: '{{ csrf_token() }}',
            state_id: stateId
          }, function(data) {
            $('#city_id').html(JSON.parse(data)).trigger('change.select2');

            // Select previously selected city if exists
            @if (old('city_id'))
              $('#city_id').val('{{ old('city_id') }}').trigger('change');
            @endif
          });
        } else {
          $('#city_id').html('<option value="">Select City</option>').trigger('change.select2');
        }
      });
    }

    // Payment method selection styling
    function setupPaymentSelection() {
      $('.payment-option input').on('change', function() {
        $('.payment-option label').removeClass('border-indigo-600 bg-indigo-50');
        $(this).closest('.payment-option').find('label').addClass('border-indigo-600 bg-indigo-50');
      });
    }

    // Buy now button
    function setupBuyNowButton() {
      $('#buy-now-btn').click(function() {
        $('#checkout').get(0).scrollIntoView({
          behavior: 'smooth'
        });
      });
    }

    // Initialize all functions
    function init() {
      setupQuantityControls();
      setupVariationSelection();
      setupDistrictSelection();
      setupPhoneValidation();
      loadStatesAndCities();
      setupPaymentSelection();
      setupBuyNowButton();

      updateOrderSummary();
    }

    init();
  });
</script>
